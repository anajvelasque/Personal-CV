# Ana Julia Velasque — Resume

A one-page, bilingual (EN/PT) personal resume site, built as a static site with plain HTML, CSS and JavaScript - no frameworks, no build step.

🔗 **Live site:** https://anajvelasque.netlify.app/

## Features

- **Bento grid layout:** experience, education, certifications, skills, code and contact, each in its own card.
- **EN / PT toggle:**- every piece of content has an English and Portuguese version, switched instantly with no page reload.
- **Small interaction details:** cards lift on hover, skill pills wiggle on hover, cards fade/slide in on load, and a pulsing "Open to work" status dot.
- **Fully responsive:** the grid collapses to a single column on mobile.

## Tech stack

- HTML5 + CSS3 (custom properties for the color palette)
- Vanilla JavaScript (no dependencies) for the language toggle
- [Google Fonts](https://fonts.google.com/): Italiana (headline), Unbounded (accents), Nunito Sans (body)

## Project structure

```
.
├── index.html
├── style.css
└── images/
    └── avatar.jpg
```

## Running locally

No build tools required — just open `index.html` in a browser, or serve the folder with any static server:

```bash
npx serve .
```

## Deployment

Deployed via [Netlify](https://www.netlify.com/), connected directly to this GitHub repository. Every push to `main` triggers a new deploy automatically.

## Author

**Ana Julia Velasque Rodrigues**
[LinkedIn](https://www.linkedin.com/in/anajvelasque/)