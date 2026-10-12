# Redesign log (v2)

## Design decisions

- **Accent:** violet `#6d28d9` (white text contrast about 7:1). Hover/dark `#5b21b6`. Tint `#f3effe`.
- **Neutrals:** ink `#0f1115`, body text `#3f4652`, soft surface `#f6f7f9`, border `#e5e7eb`.
- **Type:** parent theme font (Manrope in Twenty Twenty-Five). Headings 700, letter-spacing -0.02em, h1 fluid 40-72px. Body 17px, weight 400, line-height 1.7.
- **Layout:** content 720px (reading), wide 1180px (header, sections, grids).
- **Sections alternate:** white, soft gray, dark CTA band.

## What the theme does automatically

- Front page is rendered by `templates/front-page.html` (hero, service cards, featured article, selected work). **The content of the "Home" page in the editor is ignored** while this template exists. To edit the homepage visually, delete `front-page.html` and insert the patterns into the Home page instead.
- Blog page and category archives use the 3-column card grid (`home.html`, `archive.html`). *Settings > Reading > Posts page* must be your Blog page.
- The "Contact" menu item becomes a button (`inc/nav.php`).
- On first load, the REST API post is marked sticky so the Featured Article shows it (`inc/seed.php`).

## Manual WordPress checklist

- [ ] Backup first (LocalWP > right-click site > Export).
- [ ] Activate "SEO Portfolio Child" (parent theme must be installed).
- [ ] *Settings > Reading*: static front page = Home, posts page = Blog.
- [ ] Confirm the header menu: *Appearance > Editor > Navigation* (Home, About, Services, Blog, Contact).
- [ ] Replace the three featured images with consistent 16:9 covers (1600x900 WebP), add alt text. Do not change slugs.
- [ ] About page: insert pattern "About Bio", replace the placeholder photo, edit the text.
- [ ] Services page: insert pattern "Selected Work" (or add your own case studies).
- [ ] Contact page: add a form plugin block (Fluent Forms / WPForms Lite / Contact Form 7).
- [ ] Check one H1 per page (List View), view-source titles and meta descriptions match `seo/sample-*-seo-metadata.md`.
- [ ] Lighthouse (mobile) on Home, Blog and one article; paste scores below.

## Link targets used in patterns (edit if your slugs differ)

`/blog/`, `/services/`, `/about/`, `/contact/`, `/how-to-build-a-responsive-website/`, `/best-website-features-small-businesses/`, `/rest-api-guide/`

## Lighthouse results

| Page | Performance | Accessibility | Best practices | SEO |
|---|---|---|---|---|
| Home (before) | | | | |
| Home (after) | | | | |
| Blog (before) | | | | |
| Blog (after) | | | | |

## Rollback

`git switch main`, then *Appearance > Themes* and activate the previous theme (or restore the LocalWP export).
