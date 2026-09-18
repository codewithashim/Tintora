# Tintora Developer & Child Theme Guide

This guide is intended for developers extending **Tintora** or creating child themes.

---

## 1. SCSS Compilation Workflow

Tintora uses SCSS for styling. Source files are located in `assets/scss/`.

### Available npm scripts:

```bash
# Install dependencies
npm install

# Single production build (compiles main.scss, components.scss, responsive.scss)
npm run build:scss

# Active watch mode during development
npm run watch:scss
```

---

## 2. Theme Action & Filter Hooks

Tintora provides hooks for customization:

### Filters:
- `tintora_custom_background_args` (array): Modifies default background parameters.
- `tintora_content_width` (int): Adjusts content width bound (default: 1200).

---

## 3. Vector Icon Engine

Tintora renders SVG icons inline for performance:

```php
<?php echo tintora_get_svg_icon( 'car', 'custom-class' ); ?>
```

Supported icon keys:
`car`, `automotive`, `home`, `residential`, `building`, `commercial`, `sun`, `solar`, `uv`, `shield`, `security`, `eye`, `privacy`, `star`, `phone`, `check`, `arrow-right`.

---

## 4. Child Theme Creation

To create a child theme for Tintora:

1. Create a directory named `tintora-child` in `/wp-content/themes/`.
2. Create `style.css` inside `tintora-child/`:

```css
/*
Theme Name: Tintora Child
Template: tintora
Version: 1.0.0
*/
```

3. Create `functions.php`:

```php
<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'tintora-parent-style', get_template_directory_uri() . '/style.css' );
} );
```
