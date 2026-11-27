# AtlasFinalProject

AtlasFinalProject is a PHP web application for Atlas & Lore. The project currently includes a style-guide foundation, a browser preview page, and shared header/footer PHP includes. Application APIs, database logic, JavaScript features, and production content are still being developed.

## Project status

| Area | Current state |
| --- | --- |
| Front end | PHP preview page and shared CSS foundation; JavaScript implementation is not present yet |
| API and data | Placeholder directories only |
| Database | Placeholder directory only |
| PHP includes | Shared header and footer are available |
| Documentation and tests | Placeholder files/directories only; no test suite or test command is configured |
| Dependencies/build | No package manifest or build step; PHP is required to run the page |

This README describes the repository as it exists now. When the application is implemented, update the setup and run instructions here to match its actual dependencies and entry points.

## Repository structure

```text
AtlasFinalProject/
├── README.md
├── .gitignore
├── database/                    # Empty locally; not present in the tracked tree
├── docs/
│   └── .gitkeep
├── includes/
│   ├── header.php
│   └── footer.php
├── public/
│   ├── index.php
│   ├── api/
│   │   └── .gitkeep
│   ├── assets/
│   │   └── images/
│   │       └── .gitkeep
│   ├── css/
│   │   ├── .gitkeep
│   │   └── shared.css
│   ├── data/
│   │   └── .gitkeep
│   └── js/
│       └── .gitkeep
└── tests/
    └── .gitkeep
```

`.gitkeep` files keep otherwise-empty directories in Git; they are placeholders, not application code.

### Directory and file guide

| Path | Purpose and current contents |
| --- | --- |
| `public/` | Browser-accessible application files. |
| `public/index.php` | Atlas & Lore homepage preview with a globe-style hero section. |
| `public/css/shared.css` | Shared design tokens, base styles, layout helpers, reusable components, and accessibility helpers. |
| `public/css/` | Stylesheets. The directory currently contains only the shared stylesheet and a placeholder. |
| `public/js/` | Intended location for browser-side JavaScript; currently a placeholder. |
| `public/api/` | Intended location for API-related files; currently a placeholder. |
| `public/assets/images/` | Intended location for image assets; currently a placeholder. |
| `public/data/` | Intended location for public/static data; currently a placeholder. |
| `database/` | Empty in the current local workspace and not included in the tracked Git tree. No schema or migrations are present. |
| `includes/header.php` | Shared document head, font imports, stylesheet link, skip link, and page header. |
| `includes/footer.php` | Shared closing HTML/footer markup. |
| `docs/` | Reserved for project documentation; currently contains only `.gitkeep`. |
| `tests/` | Reserved for tests; currently contains only `.gitkeep`, with no test runner configured. |
| `.gitignore` | Excludes local credentials (`config.php`, `.env`), OS/editor clutter, Python cache files, and logs. |
| `README.md` | Project overview, repository map, setup instructions, and contribution information. |

### Shared stylesheet

`public/css/shared.css` currently provides:

- Monochrome CSS custom properties for backgrounds, surfaces, borders, text, accent states, success, and error colors.
- Typography and spacing tokens, plus shared radius, shadow, motion, and layout values.
- Base page, heading, paragraph, link, and image styles.
- Layout helpers (`.container`, `.section`, `.stack`) and reusable button, card, chip, and field styles.
- Keyboard focus, visually hidden text, skip-link, and reduced-motion helpers.

The stylesheet uses Instrument Serif for display headings, Inter for body text, and IBM Plex Mono for small labels and eyebrows. Google Fonts provides these typefaces, with local serif and system font fallbacks.

## Set up locally

### Requirements

- Git
- PHP
- A code editor of your choice

### Clone the repository

```sh
git clone https://github.com/FutureProofDev/AtlasFinalProject.git
cd AtlasFinalProject
```

To work from a specific branch:

```sh
git switch main
```

### Open the project

Open the cloned `AtlasFinalProject` folder in your editor. For example, in Visual Studio Code you can run:

```sh
code .
```

### Run and test status

Start the local PHP server from the repository root:

```sh
php -S localhost:8000 -t public
```

Then open `http://localhost:8000/` in a browser. No dependency installation or build step is required.

There is currently no test suite or test command configured.

Before adding local credentials or machine-specific settings, keep them out of source control. The repository already ignores `.env` and `config.php`; do not commit secrets.

## Contributing

1. Create a branch for your change.
2. Keep changes focused and add or update tests when the project has a test suite for the affected behavior.
3. Check `git status` and review the diff before committing.
4. Open a pull request with a concise summary and any relevant validation details.

When adding an application feature, update this README with any new prerequisites, setup steps, run commands, or tests.

## Team

- Vladimir Noel Aduama
- Natalie Rose Andzie-Mensah
- Desmond Barimah
- Nii Sowah Kwabla Sowah
- Kukuwa Amoah

### Contribution by recorded commit count

The percentages below use the author count of commits reachable in the repository's current Git history (8 commits total). They describe commit authorship only; they are not a measure of effort, lines of code, or each person's full project contribution.

| Contributor | Recorded commits | Share |
| --- | ---: | ---: |
| Nii Sowah Kwabla Sowah | 5 | 56% |
| Natalie Rose Andzie-Mensah | 4 | 44% |
| Vladimir Noel Aduama | 0 | 0% recorded |
| Desmond Barimah | 0 | 0% recorded |
| Kukuwa Amoah | 0 | 0% recorded |

“0% recorded” means no commits under that name appear in the current local history; it does not imply that the person did not contribute through other work or under another Git author identity.
