# Theme workflow

The WordPress theme lives in `theme/seo-portfolio-child/` and is linked into LocalWP with a folder junction, so edits to files show up on the site immediately.

## Where things live

| What | Where | In git? |
|---|---|---|
| Design tokens (colors, type, widths) | `theme.json` | Yes |
| Component CSS | `assets/css/*.css` (printed inline by `inc/enqueue.php`) | Yes |
| Sections (hero, cards, featured, CTA...) | `patterns/*.php` | Yes |
| Header / footer / blog / archive / front page | `parts/*.html`, `templates/*.html` | Yes |
| Article styles | `assets/css/article.css` | Yes |
| Posts, pages, menus, Media Library | WordPress database | No (documented in `wordpress/`) |

## Editing in the Site Editor

Edits in *Appearance > Editor* are saved to the **database**, which overrides the files. To get them back into git:

1. Install **Create Block Theme** (free).
2. *Appearance > Create Block Theme > Save Changes to Theme*. It writes the edited templates and parts into the theme folder.
3. Review with `git diff`, then commit.

If you would rather edit files directly, open *Appearance > Editor > Templates/Parts*, use the three-dot menu > **Clear customizations** so the file version is used again.

## Commit loop

1. Change a file, refresh the LocalWP site.
2. `git status` and `git diff`.
3. `git add <specific files>` (avoid `git add .`), then commit using the existing prefixes: `feat:`, `style:`, `fix:`, `refactor:`, `perf:`, `a11y:`, `content:`, `seo:`, `wordpress:`, `docs:`, `chore:`.
