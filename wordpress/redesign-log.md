# Redesign log (v2)

## Design decisions

- **Accent:** violet `#6d28d9`
- **Neutrals:** ink `#0f1115`, body text `#3f4652`
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
- [ ] **Settings > Reading**: static front page = Home, posts page = Blog.
- [ ] Confirm the header menu: **Appearance > Editor > Navigation** (Home, About, Services, Blog, Contact).
- [ ] Replace the featured images with consistent 16:9 covers (1600x900 WebP), add alt text. Do not change slugs.
- [ ] Assign the About, Services, and Contact templates to their corresponding pages. See "Page-template setup" below.
- [ ] Add a contact form block to the Contact page content.
- [ ] Check one H1 per page (List View), view-source titles and meta descriptions match `seo/sample-*-seo-metadata.md`.
- [ ] Lighthouse (mobile) on Home, Blog and one article; record scores below.

## Page-template setup

The child theme registers custom templates for the About, Services, and Contact pages. These templates provide the page introduction and render the appropriate block patterns automatically.

### Assign the templates

1. Open **Pages** in the WordPress dashboard.
2. Edit the About page.
3. In the page settings sidebar, find **Template** and select **About**.
4. Save or update the page.
5. Repeat for Services using the **Services** template and Contact using the **Contact** template.
6. Preview each page on the frontend and confirm the correct layout appears.

If a template is not available, confirm that `theme.json` registers the template under `customTemplates` and that the corresponding HTML file exists in `theme/seo-portfolio-child/templates/`.

### Avoid duplicate page content

The templates already provide their own headings, introductory text, and pattern sections. Review the existing page content and remove old duplicate headings, paragraphs, or manually inserted patterns when the template already supplies them.

- **About:** The template renders `seo-portfolio/about-bio` and `seo-portfolio/about-principles`. Replace the placeholder photo in the About Bio pattern with the correct image and update its alternative text. Edit the pattern if the displayed profile text needs to change.
- **Services:** The template renders `seo-portfolio/services-detail`, including the grouped service cards and Contact call to action. Do not add duplicate service cards to the page content.
- **Contact:** Keep the page content reserved for the contact form block. The template already supplies the introduction and contact details. Insert the configured form block into the page content so it appears in the `wp:post-content` area.

Before removing any existing content, preview the page and confirm that the content is duplicated by the template. Keep any unique information that is still needed.


## Blog excerpt troubleshooting

The Blog page uses the posts page configured under **Settings > Reading**. Its layout is controlled by the child theme's block templates and Query Loop.

If Blog cards display full article content instead of short excerpts, inspect the template before changing anything.

### Troubleshooting steps

1. **Back up first.** Export the LocalWP site or commit the current files and review existing Site Editor customizations.
2. **Inspect the Blog template.** Open **Appearance > Editor > Design > Templates** (the exact labels may vary by WordPress version). Inspect the Home/Blog, Index, or other template used to display the posts page.
3. **Check the Query Loop.** Select the Post Template in List View. Confirm that each card uses the **Post Excerpt** block, not the **Post Content** block.
4. **Inspect Site Editor customizations.** WordPress may be using a customized database version of a template instead of the file in the child theme. Compare the editor version with `theme/seo-portfolio-child/templates/home.html` and `archive.html`.
5. **Clear customizations only if necessary.** If the database version is overriding the intended theme template, first inspect and preserve any wanted changes. Only then consider resetting or clearing the affected template customization. This may discard intentional Site Editor edits.
6. **Add post excerpts if useful.** Edit individual posts and set an excerpt in the post settings. Use `seo/sample-1-seo-metadata.md`, `seo/sample-2-seo-metadata.md`, and `seo/sample-3-seo-metadata.md` as references when writing concise summaries, but do not automatically copy SEO meta descriptions as excerpts.
7. **Verify on the frontend.** Open the Blog page and confirm that each card displays a featured image, title, short excerpt, and any intended date or pagination controls.

### Expected result

Blog cards should show a concise preview rather than the entire article. Individual post pages should continue to display the complete article content.

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
