/* =========================================
   BINARY WAVE BACKGROUND
   Cursor or finger movement leaves a wake of
   0s and 1s that sways and fades. Touch devices
   also get tap ripples and a scroll shimmer.
========================================= */
(() => {
    const canvas = document.getElementById("binary-wave");

    if (
        !canvas ||
        window.matchMedia("(prefers-reduced-motion: reduce)").matches
    ) {
        return;
    }

    const ctx = canvas.getContext("2d");

    if (!ctx) {
        return;
    }

    const isTouch = window.matchMedia("(pointer: coarse)").matches;

    /* Tuning knobs */
    const FONT_SIZE = isTouch ? 16 : 14;
    const MAX_PARTICLES = isTouch ? 700 : 1400;
    const SPAWN_SPACING = isTouch ? 8 : 10;
    const TRAIL_LIFE = 3.0;
    const TRAIL_LIFE_VARIANCE = 1.0;
    const TRAIL_SPEED = 3;
    const MAX_DRIFT = 220;
    const MAX_ALPHA = 0.55;
    const RIPPLE_COUNT = 12;
    const RIPPLE_SPEED = 120;
    const SCROLL_NUDGE = 0.35;

    const particles = [];
    const pointer = {
        x: 0,
        y: 0,
        lastX: 0,
        lastY: 0,
        active: false
    };

    let rgb = "129, 140, 248";
    let width = 0;
    let height = 0;
    let dpr = 1;
    let lastTime = 0;
    let frameId = null;
    let spawnCarry = 0;
    let lastScrollY = window.scrollY;

    function hexToRgb(hex) {
        const clean = hex.replace("#", "");

        if (!/^[0-9a-fA-F]{6}$/.test(clean)) {
            return null;
        }

        const n = parseInt(clean, 16);

        return `${(n >> 16) & 255}, ${(n >> 8) & 255}, ${n & 255}`;
    }

    function readThemeColor() {
        const value = getComputedStyle(document.documentElement)
            .getPropertyValue("--primary-color")
            .trim();

        rgb = hexToRgb(value) || rgb;
    }

    function resize() {
        dpr = Math.min(window.devicePixelRatio || 1, 2);
        width = window.innerWidth;
        height = window.innerHeight;

        canvas.width = width * dpr;
        canvas.height = height * dpr;
        canvas.style.width = `${width}px`;
        canvas.style.height = `${height}px`;

        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
        ctx.font = `${FONT_SIZE}px ui-monospace, SFMono-Regular, Consolas, monospace`;
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
    }

    function spawn(x, y, vx, vy, options = {}) {
        if (particles.length >= MAX_PARTICLES) {
            particles.shift();
        }

        let driftX = vx + (Math.random() - 0.5) * 40;
        let driftY = vy + (Math.random() - 0.5) * 40 - 12;

        // Clamp speed so fast movements do not send glyphs flying too far.
        const speed = Math.hypot(driftX, driftY);

        if (speed > MAX_DRIFT) {
            driftX *= MAX_DRIFT / speed;
            driftY *= MAX_DRIFT / speed;
        }

        particles.push({
            x,
            y,
            vx: driftX,
            vy: driftY,
            char: Math.random() < 0.5 ? "0" : "1",
            age: 0,
            life: options.life ?? (
                TRAIL_LIFE + Math.random() * TRAIL_LIFE_VARIANCE
            ),
            phase: Math.random() * Math.PI * 2,
            wobble: options.wobble ?? (6 + Math.random() * 8)
        });
    }

    /* A touch tap sends a ring of glyphs outward. */
    function spawnRipple(x, y) {
        for (let i = 0; i < RIPPLE_COUNT; i++) {
            const angle = (i / RIPPLE_COUNT) * Math.PI * 2;
            const speed = RIPPLE_SPEED * (0.8 + Math.random() * 0.4);

            spawn(
                x,
                y,
                Math.cos(angle) * speed,
                Math.sin(angle) * speed,
                {
                    life: 1.6 + Math.random() * 0.6,
                    wobble: 4
                }
            );
        }

        startLoop();
    }

    function frame(time) {
        const dt = Math.min((time - lastTime) / 1000, 0.05) || 0.016;
        lastTime = time;

        ctx.clearRect(0, 0, width, height);

        const damping = Math.pow(0.6, dt);

        for (let i = particles.length - 1; i >= 0; i--) {
            const p = particles[i];

            p.age += dt;

            if (p.age >= p.life) {
                particles.splice(i, 1);
                continue;
            }

            const t = p.age / p.life;

            p.vx *= damping;
            p.vy *= damping;
            p.x += p.vx * dt;
            p.y += p.vy * dt;

            const wave =
                Math.sin(p.age * 7 + p.phase) * p.wobble * (1 - t);

            const alpha = Math.sin(Math.PI * t) * MAX_ALPHA;

            ctx.fillStyle = `rgba(${rgb}, ${alpha.toFixed(3)})`;
            ctx.fillText(p.char, p.x, p.y + wave);
        }

        if (particles.length > 0) {
            frameId = requestAnimationFrame(frame);
        } else {
            frameId = null;
        }
    }

    function startLoop() {
        if (frameId === null) {
            lastTime = performance.now();
            frameId = requestAnimationFrame(frame);
        }
    }

    function onPointerMove(event) {
        const x = event.clientX;
        const y = event.clientY;

        if (!pointer.active) {
            pointer.active = true;
            pointer.lastX = x;
            pointer.lastY = y;
            return;
        }

        const dx = x - pointer.lastX;
        const dy = y - pointer.lastY;
        const distance = Math.hypot(dx, dy);

        if (distance === 0) {
            pointer.lastX = x;
            pointer.lastY = y;
            return;
        }

        const wobble = isTouch ? 10 + Math.random() * 10 : undefined;

        // Drop glyphs along the path, spaced by SPAWN_SPACING pixels.
        let distToNext = SPAWN_SPACING - spawnCarry;

        while (distToNext <= distance) {
            const t = distToNext / distance;

            spawn(
                pointer.lastX + dx * t + (Math.random() - 0.5) * 12,
                pointer.lastY + dy * t + (Math.random() - 0.5) * 12,
                dx * TRAIL_SPEED,
                dy * TRAIL_SPEED,
                { wobble }
            );

            distToNext += SPAWN_SPACING;
        }

        spawnCarry = distance - (distToNext - SPAWN_SPACING);

        pointer.lastX = x;
        pointer.lastY = y;

        startLoop();
    }

    /* Detect short touch taps for ripple effects. */
    let touchStart = null;

    window.addEventListener("pointerdown", (event) => {
        if (event.pointerType !== "touch") {
            return;
        }

        touchStart = {
            x: event.clientX,
            y: event.clientY,
            time: performance.now()
        };
    }, { passive: true });

    window.addEventListener("pointerup", (event) => {
        if (event.pointerType !== "touch" || !touchStart) {
            return;
        }

        const moved = Math.hypot(
            event.clientX - touchStart.x,
            event.clientY - touchStart.y
        );

        const duration = performance.now() - touchStart.time;

        if (moved < 10 && duration < 400) {
            spawnRipple(event.clientX, event.clientY);
        }

        touchStart = null;
    }, { passive: true });

    window.addEventListener("pointercancel", () => {
        touchStart = null;
    }, { passive: true });

    /* Scrolling gently stirs existing glyphs. */
    window.addEventListener("scroll", () => {
        const delta = window.scrollY - lastScrollY;
        lastScrollY = window.scrollY;

        if (delta === 0 || particles.length === 0) {
            return;
        }

        for (const p of particles) {
            p.vy -= delta * SCROLL_NUDGE;
        }

        startLoop();
    }, { passive: true });

    window.addEventListener("pointermove", onPointerMove, { passive: true });

    window.addEventListener("pointerout", (event) => {
        if (!event.relatedTarget) {
            pointer.active = false;
        }
    });

    // Start a fresh stroke after a touch ends.
    window.addEventListener("pointerup", (event) => {
        if (event.pointerType === "touch") {
            pointer.active = false;
        }
    }, { passive: true });

    window.addEventListener("resize", resize);

    // Refresh the wave color whenever the selected theme changes.
    const themeObserver = new MutationObserver(readThemeColor);

    themeObserver.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ["data-theme"]
    });

    readThemeColor();
    resize();
})();