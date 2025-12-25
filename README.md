Here’s an **interesting, polished README** for your `my-vite-laravel-theme` project — written to be both developer-friendly and a bit fun:

---

# My Vite Laravel Theme

![Vite Logo](https://vitejs.dev/logo.svg) ![WordPress Logo](https://upload.wikimedia.org/wikipedia/commons/2/20/WordPress_logo.svg)

> A blazing fast, modern WordPress theme powered by **Vite** and **Laravel-style asset management**.

---

## 🚀 Overview

`my-vite-laravel-theme` is a lightweight, developer-first WordPress theme that leverages Vite for instant hot module reloading and modern build tooling.

It’s perfect for developers who want:

- Fast development with **Vite HMR**
- Seamless **WordPress block editor integration**
- Clean, modular **JavaScript & CSS workflow**
- Easy deployment with manifest-based asset loading

Think of it as **WordPress meets modern frontend tooling**, without the bloat.

---

## 🧩 Features

- **Vite-powered development**: `npm run dev` gives you lightning-fast HMR.
- **Manifest-based asset loading**: PHP functions handle Vite assets automatically in local or production.
- **Editor support**: Custom block editor assets loaded dynamically.
- **Modern JS**: ES Modules, React-ready via `@vitejs/plugin-react-swc`.
- **Flexible theme support**: Post thumbnails, wide alignment, dynamic title tag.

---

## ⚡ Quick Start

1. Clone your theme into `wp-content/themes`:

```bash
git clone https://github.com/Dionnie/my-vite-laravel-theme.git
```

2. Install dependencies:

```bash
npm install
```

3. Start development server:

```bash
npm run dev
```

4. Build for production:

```bash
npm run build
```

5. Preview production build:

```bash
npm run preview
```

---

## 🛠 Theme PHP Helpers

The theme comes with **`vite_asset()`** helper functions:

```php
<?php
// Get Vite asset URL
echo vite_asset('src/js/app.js');
```

This function automatically:

- Returns HMR URL in **local environment**
- Returns built asset path in **production**
- Throws a warning if manifest is missing

The theme also enqueues:

- **Frontend assets**: `app.js`, `app.css`
- **Editor assets**: `editor.js`, `editor.css`

---

## 📦 Scripts

| Command           | Description                          |
| ----------------- | ------------------------------------ |
| `npm run dev`     | Start Vite development server        |
| `npm run build`   | Build production-ready assets        |
| `npm run preview` | Preview the production build locally |

---

## 🎨 Theme Support

This theme includes:

- `title-tag`
- `post-thumbnails`
- `align-wide`

---

## 📂 Folder Structure

```
my-vite-laravel-theme/
├── public/build       # Compiled assets
├── src/css            # CSS / SCSS source
├── src/js             # JS source
├── functions.php      # Theme setup & Vite helpers
├── package.json       # Node dependencies & scripts
├── .gitignore
└── index.php
```

---

## 💡 Why Use This Theme?

If you love **modern frontend development** but don’t want to compromise on **WordPress compatibility**, this theme is for you.

It lets you:

- Work with **React / ES modules** effortlessly
- Keep **build files clean and versioned**
- Focus on **building features**, not fighting asset pipelines

---

## 👤 Author

**Mark Dionnie Bulingit** – WordPress & modern frontend enthusiast

---

I can also create a **more “marketing-friendly” version** with badges, GIFs of HMR, and a one-liner hook for GitHub — that makes the repo **pop on GitHub**.

Do you want me to do that?
