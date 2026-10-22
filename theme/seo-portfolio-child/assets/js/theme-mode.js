/* Dark/light toggle. The initial mode is set in <head> (inc/theme-mode.php)
   so the page never flashes the wrong colors. */
(function () {
    var KEY = 'spc-theme';
    var btn = document.querySelector('.theme-toggle');

    if (!btn) {
        return;
    }

    function isDark() {
        return document.documentElement.getAttribute('data-theme') !== 'light';
    }

    function sync() {
        var dark = isDark();
        var label = dark ? 'Switch to light mode' : 'Switch to dark mode';

        btn.setAttribute('aria-pressed', dark ? 'true' : 'false');
        btn.setAttribute('aria-label', label);
        btn.setAttribute('title', label);
    }

    btn.addEventListener('click', function () {
        var next = isDark() ? 'light' : 'dark';

        document.documentElement.setAttribute('data-theme', next);

        try {
            localStorage.setItem(KEY, next);
        } catch (error) {
            // The current page still changes if storage is unavailable.
        }

        sync();
    });

    sync();
})();
