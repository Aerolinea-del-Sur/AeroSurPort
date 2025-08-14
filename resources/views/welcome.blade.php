<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- BUSQUEDA GOOGLE -->
            <title>aerolineas del sur</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <meta name="author" content="" />
        <!-- CONEXION A TIPOGRAFIAS -->
            <!-- Playfair Display Preconexión para fuentes de Google (mejora velocidad de carga) -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <!-- Precarga de ambas fuentes (Google + local) -->
            <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
            <link rel="preload" as="font" href="/fonts/playfair-display.woff2" type="font/woff2" crossorigin>
            <!-- Carga el CSS de fuentes de forma no bloqueante -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" media="print" onload="this.media='all'">
            <!-- Fallback para navegadores sin JavaScript -->
            <noscript>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
            </noscript>
        <!-- CONEXION A ESTILOS 
            <link rel="stylesheet" href="/css/princi.css">
            <link rel="stylesheet" href="/js/princi.js">-->
        
        <!-- METAETIQUETAS -->
            <!-- Open Graph (FACEBOOK) -->
            <meta property="og:title" content="Aerolineas del Sur - Viajes VIP">
            <meta property="og:description" content="Descubre experiencias únicas y personalizadas.">
            <meta property="og:image" content="https://tusitio.com/imagenes/og-image.jpg"><!-- Fala -->
            <meta property="og:url" content="https://russellexperienceperutravel.com"><!-- Fala -->
            <meta property="og:type" content="website"><!-- Fala -->
            <meta property="og:site_name" content="Russell Experience">
            <meta property="og:locale" content="es_PE">
            <meta property="og:locale:alternate" content="en_US">
            <meta property="og:locale:alternate" content="fr_FR">
            
            <!-- Twitter Card 
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="Russell Experience - Turismo Sostenible en Perú">
            <meta name="twitter:description" content="Descubre experiencias únicas y personalizadas en Perú con Russell Experience.">
            <meta name="twitter:image" content="https://tusitio.com/imagenes/twitter-image.jpg">
            /* Datos estructurados (JSON-LD)*/
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "Russell Experience",
                "url": "https://tusitio.com",
                "logo": "https://tusitio.com/imagenes/logo.png",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+51 946 033 024",
                    "contactType": "Customer Service"
                }
            } 
            </script>-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <!--<link rel="stylesheet" id="frase-style-css" href="./style.css" media="all">-->
            <style>
                /*
! tailwindcss v3.3.5 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: currentColor;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
*/

html {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.container {
  width: 100%;
}

@media (min-width: 640px) {
  .container {
    max-width: 640px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 768px;
  }
}

@media (min-width: 1024px) {
  .container {
    max-width: 1024px;
  }
}

@media (min-width: 1220px) {
  .container {
    max-width: 1220px;
  }
}

@media (min-width: 1536px) {
  .container {
    max-width: 1536px;
  }
}

.pointer-events-none {
  pointer-events: none;
}

.visible {
  visibility: visible;
}

.invisible {
  visibility: hidden;
}

.static {
  position: static;
}

.fixed {
  position: fixed;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.sticky {
  position: sticky;
}

.-top-\[70px\] {
  top: -70px;
}

.-top-\[80px\] {
  top: -80px;
}

.bottom-0 {
  bottom: 0px;
}

.left-0 {
  left: 0px;
}

.left-1\/2 {
  left: 50%;
}

.left-\[-22px\] {
  left: -22px;
}

.left-\[-400px\] {
  left: -400px;
}

.left-\[3px\] {
  left: 3px;
}

.right-0 {
  right: 0px;
}

.right-\[-200px\] {
  right: -200px;
}

.right-\[-250px\] {
  right: -250px;
}

.right-\[-70px\] {
  right: -70px;
}

.right-\[16px\] {
  right: 16px;
}

.top-0 {
  top: 0px;
}

.top-1\/2 {
  top: 50%;
}

.top-\[-10px\] {
  top: -10px;
}

.top-\[-30px\] {
  top: -30px;
}

.top-\[-60\%\] {
  top: -60%;
}

.top-\[-60px\] {
  top: -60px;
}

.top-\[-8px\] {
  top: -8px;
}

.top-\[-90px\] {
  top: -90px;
}

.top-\[100px\] {
  top: 100px;
}

.top-\[16px\] {
  top: 16px;
}

.top-\[3px\] {
  top: 3px;
}

.top-\[56px\] {
  top: 56px;
}

.top-\[60px\] {
  top: 60px;
}

.z-10 {
  z-index: 10;
}

.z-20 {
  z-index: 20;
}

.z-50 {
  z-index: 50;
}

.z-\[100\] {
  z-index: 100;
}

.z-\[10\] {
  z-index: 10;
}

.z-\[20\] {
  z-index: 20;
}

.z-\[30\] {
  z-index: 30;
}

.z-\[5\] {
  z-index: 5;
}

.z-\[99999999\] {
  z-index: 99999999;
}

.z-\[99\] {
  z-index: 99;
}

.col-span-1 {
  grid-column: span 1 / span 1;
}

.col-span-2 {
  grid-column: span 2 / span 2;
}

.col-span-5 {
  grid-column: span 5 / span 5;
}

.\!m-0 {
  margin: 0px !important;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.my-\[10px\] {
  margin-top: 10px;
  margin-bottom: 10px;
}

.my-\[16px\] {
  margin-top: 16px;
  margin-bottom: 16px;
}

.\!mb-0 {
  margin-bottom: 0px !important;
}

.\!mb-\[0px\] {
  margin-bottom: 0px !important;
}

.\!mb-\[16px\] {
  margin-bottom: 16px !important;
}

.\!ml-\[24px\] {
  margin-left: 24px !important;
}

.\!mt-0 {
  margin-top: 0px !important;
}

.\!mt-\[24px\] {
  margin-top: 24px !important;
}

.\!mt-\[8px\] {
  margin-top: 8px !important;
}

.-mt-\[4px\] {
  margin-top: -4px;
}

.-mt-\[6px\] {
  margin-top: -6px;
}

.mb-\[10px\] {
  margin-bottom: 10px;
}

.mb-\[12px\] {
  margin-bottom: 12px;
}

.mb-\[16px\] {
  margin-bottom: 16px;
}

.mb-\[20px\] {
  margin-bottom: 20px;
}

.mb-\[24px\] {
  margin-bottom: 24px;
}

.mb-\[32px\] {
  margin-bottom: 32px;
}

.mb-\[40px\] {
  margin-bottom: 40px;
}

.mb-\[4px\] {
  margin-bottom: 4px;
}

.mb-\[50px\] {
  margin-bottom: 50px;
}

.mb-\[60px\] {
  margin-bottom: 60px;
}

.mb-\[80px\] {
  margin-bottom: 80px;
}

.mb-\[8px\] {
  margin-bottom: 8px;
}

.ml-\[16px\] {
  margin-left: 16px;
}

.ml-\[22px\] {
  margin-left: 22px;
}

.ml-\[4px\] {
  margin-left: 4px;
}

.ml-\[8px\] {
  margin-left: 8px;
}

.mr-\[24px\] {
  margin-right: 24px;
}

.mr-\[8px\] {
  margin-right: 8px;
}

.mt-\[-60px\] {
  margin-top: -60px;
}

.mt-\[10px\] {
  margin-top: 10px;
}

.mt-\[12px\] {
  margin-top: 12px;
}

.mt-\[16px\] {
  margin-top: 16px;
}

.mt-\[20px\] {
  margin-top: 20px;
}

.mt-\[24px\] {
  margin-top: 24px;
}

.mt-\[32px\] {
  margin-top: 32px;
}

.mt-\[40px\] {
  margin-top: 40px;
}

.mt-\[48px\] {
  margin-top: 48px;
}

.mt-\[4px\] {
  margin-top: 4px;
}

.mt-\[5px\] {
  margin-top: 5px;
}

.mt-\[60px\] {
  margin-top: 60px;
}

.mt-\[6px\] {
  margin-top: 6px;
}

.mt-\[8px\] {
  margin-top: 8px;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.flex {
  display: flex;
}

.inline-flex {
  display: inline-flex;
}

.grid {
  display: grid;
}

.hidden {
  display: none;
}

.aspect-\[1\.91\/1\] {
  aspect-ratio: 1.91/1;
}

.h-0 {
  height: 0px;
}

.h-0\.5 {
  height: 0.125rem;
}

.h-4 {
  height: 1rem;
}

.h-\[131px\] {
  height: 131px;
}

.h-\[150px\] {
  height: 150px;
}

.h-\[16px\] {
  height: 16px;
}

.h-\[180px\] {
  height: 180px;
}

.h-\[185px\] {
  height: 185px;
}

.h-\[20px\] {
  height: 20px;
}

.h-\[220px\] {
  height: 220px;
}

.h-\[24px\] {
  height: 24px;
}

.h-\[25px\] {
  height: 25px;
}

.h-\[270px\] {
  height: 270px;
}

.h-\[300px\] {
  height: 300px;
}

.h-\[340px\] {
  height: 340px;
}

.h-\[36px\] {
  height: 36px;
}

.h-\[40px\] {
  height: 40px;
}

.h-\[436px\] {
  height: 436px;
}

.h-\[60px\] {
  height: 60px;
}

.h-\[70px\] {
  height: 70px;
}

.h-\[72px\] {
  height: 72px;
}

.h-\[800px\] {
  height: 800px;
}

.h-\[80px\] {
  height: 80px;
}

.h-\[9px\] {
  height: 9px;
}

.h-\[calc\(100vh-56px\)\] {
  height: calc(100vh - 56px);
}

.h-auto {
  height: auto;
}

.h-full {
  height: 100%;
}

.\!max-h-\[1200px\] {
  max-height: 1200px !important;
}

.max-h-\[0px\] {
  max-height: 0px;
}

.max-h-\[20px\] {
  max-height: 20px;
}

.max-h-\[32px\] {
  max-height: 32px;
}

.min-h-\[80px\] {
  min-height: 80px;
}

.\!w-\[200px\] {
  width: 200px !important;
}

.w-0 {
  width: 0px;
}

.w-0\.5 {
  width: 0.125rem;
}

.w-4 {
  width: 1rem;
}

.w-\[12px\] {
  width: 12px;
}

.w-\[16px\] {
  width: 16px;
}

.w-\[180px\] {
  width: 180px;
}

.w-\[200px\] {
  width: 200px;
}

.w-\[20px\] {
  width: 20px;
}

.w-\[24px\] {
  width: 24px;
}

.w-\[250px\] {
  width: 250px;
}

.w-\[290px\] {
  width: 290px;
}

.w-\[36px\] {
  width: 36px;
}

.w-\[40px\] {
  width: 40px;
}

.w-\[45px\] {
  width: 45px;
}

.w-\[60px\] {
  width: 60px;
}

.w-auto {
  width: auto;
}

.w-fit {
  width: -moz-fit-content;
  width: fit-content;
}

.w-full {
  width: 100%;
}

.min-w-\[255px\] {
  min-width: 255px;
}

.min-w-\[700px\] {
  min-width: 700px;
}

.max-w-\[1080px\] {
  max-width: 1080px;
}

.max-w-\[200px\] {
  max-width: 200px;
}

.max-w-\[250px\] {
  max-width: 250px;
}

.max-w-\[370px\] {
  max-width: 370px;
}

.max-w-\[420px\] {
  max-width: 420px;
}

.max-w-\[500px\] {
  max-width: 500px;
}

.max-w-\[550px\] {
  max-width: 550px;
}

.max-w-\[560px\] {
  max-width: 560px;
}

.max-w-\[600px\] {
  max-width: 600px;
}

.max-w-\[700px\] {
  max-width: 700px;
}

.max-w-\[750px\] {
  max-width: 750px;
}

.max-w-\[790px\] {
  max-width: 790px;
}

.max-w-\[800px\] {
  max-width: 800px;
}

.max-w-\[900px\] {
  max-width: 900px;
}

.max-w-\[960px\] {
  max-width: 960px;
}

.flex-1 {
  flex: 1 1 0%;
}

.flex-none {
  flex: none;
}

.shrink-0 {
  flex-shrink: 0;
}

.basis-\[200px\] {
  flex-basis: 200px;
}

.basis-full {
  flex-basis: 100%;
}

.-translate-x-1\/2 {
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-1\/2 {
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-full {
  --tw-translate-y: -100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-y-\[60px\] {
  --tw-translate-y: 60px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rotate-180 {
  --tw-rotate: 180deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rotate-90 {
  --tw-rotate: 90deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.cursor-pointer {
  cursor: pointer;
}

.scroll-mt-\[120px\] {
  scroll-margin-top: 120px;
}

.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.grid-cols-10 {
  grid-template-columns: repeat(10, minmax(0, 1fr));
}

.grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.grid-cols-3 {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}

.grid-cols-4 {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.grid-cols-5 {
  grid-template-columns: repeat(5, minmax(0, 1fr));
}

.grid-cols-6 {
  grid-template-columns: repeat(6, minmax(0, 1fr));
}

.grid-cols-7 {
  grid-template-columns: repeat(7, minmax(0, 1fr));
}

.grid-cols-8 {
  grid-template-columns: repeat(8, minmax(0, 1fr));
}

.grid-cols-9 {
  grid-template-columns: repeat(9, minmax(0, 1fr));
}

.flex-row {
  flex-direction: row;
}

.flex-col {
  flex-direction: column;
}

.flex-wrap {
  flex-wrap: wrap;
}

.flex-nowrap {
  flex-wrap: nowrap;
}

.items-start {
  align-items: flex-start;
}

.items-end {
  align-items: flex-end;
}

.items-center {
  align-items: center;
}

.justify-start {
  justify-content: flex-start;
}

.justify-end {
  justify-content: flex-end;
}

.justify-center {
  justify-content: center;
}

.justify-between {
  justify-content: space-between;
}

.gap-\[10px\] {
  gap: 10px;
}

.gap-\[120px\] {
  gap: 120px;
}

.gap-\[12px\] {
  gap: 12px;
}

.gap-\[16px\] {
  gap: 16px;
}

.gap-\[20px\] {
  gap: 20px;
}

.gap-\[24px\] {
  gap: 24px;
}

.gap-\[30px\] {
  gap: 30px;
}

.gap-\[32px\] {
  gap: 32px;
}

.gap-\[40px\] {
  gap: 40px;
}

.gap-\[5px\] {
  gap: 5px;
}

.gap-\[60px\] {
  gap: 60px;
}

.gap-\[80px\] {
  gap: 80px;
}

.gap-\[8px\] {
  gap: 8px;
}

.gap-x-\[12px\] {
  -moz-column-gap: 12px;
       column-gap: 12px;
}

.gap-x-\[4px\] {
  -moz-column-gap: 4px;
       column-gap: 4px;
}

.gap-x-\[60px\] {
  -moz-column-gap: 60px;
       column-gap: 60px;
}

.gap-y-\[16px\] {
  row-gap: 16px;
}

.gap-y-\[4px\] {
  row-gap: 4px;
}

.gap-y-\[60px\] {
  row-gap: 60px;
}

.gap-y-\[8px\] {
  row-gap: 8px;
}

.space-x-\[16px\] > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(16px * var(--tw-space-x-reverse));
  margin-left: calc(16px * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-\[6px\] > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(6px * var(--tw-space-x-reverse));
  margin-left: calc(6px * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-\[6px\] > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(6px * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(6px * var(--tw-space-y-reverse));
}

.self-center {
  align-self: center;
}

.overflow-hidden {
  overflow: hidden;
}

.overflow-visible {
  overflow: visible;
}

.overflow-x-auto {
  overflow-x: auto;
}

.\!overflow-y-auto {
  overflow-y: auto !important;
}

.overflow-y-auto {
  overflow-y: auto;
}

.overflow-x-hidden {
  overflow-x: hidden;
}

.overflow-y-visible {
  overflow-y: visible;
}

.\!rounded-\[10px\] {
  border-radius: 10px !important;
}

.\!rounded-\[20px\] {
  border-radius: 20px !important;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-\[12px\] {
  border-radius: 12px;
}

.rounded-\[16px\] {
  border-radius: 16px;
}

.rounded-\[20px\] {
  border-radius: 20px;
}

.rounded-\[24px\] {
  border-radius: 24px;
}

.rounded-\[40px\] {
  border-radius: 40px;
}

.rounded-\[48px\] {
  border-radius: 48px;
}

.rounded-\[4px\] {
  border-radius: 4px;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-md {
  border-radius: 0.375rem;
}

.rounded-xl {
  border-radius: 0.75rem;
}

.rounded-b-\[24px\] {
  border-bottom-right-radius: 24px;
  border-bottom-left-radius: 24px;
}

.rounded-t-\[24px\] {
  border-top-left-radius: 24px;
  border-top-right-radius: 24px;
}

.border {
  border-width: 1px;
}

.border-b {
  border-bottom-width: 1px;
}

.border-b-0 {
  border-bottom-width: 0px;
}

.border-l {
  border-left-width: 1px;
}

.border-r {
  border-right-width: 1px;
}

.border-t {
  border-top-width: 1px;
}

.border-green-light {
  --tw-border-opacity: 1;
  border-color: rgb(126 193 155 / var(--tw-border-opacity));
}

.border-white-10 {
  border-color: hsla(0, 0%, 100%, 0.1);
}

.border-white-33 {
  border-color: hsla(0, 0%, 100%, 0.33);
}

.border-white\/0 {
  border-color: rgb(255 255 255 / 0);
}

.bg-black {
  --tw-bg-opacity: 1;
  background-color: rgb(30 30 33 / var(--tw-bg-opacity));
}

.bg-green-dark {
  --tw-bg-opacity: 1;
  background-color: rgb(88 141 107 / var(--tw-bg-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-white-10 {
  background-color: hsla(0, 0%, 100%, 0.1);
}

.bg-white-33 {
  background-color: hsla(0, 0%, 100%, 0.33);
}

.bg-white-65 {
  background-color: hsla(0, 0%, 100%, 0.65);
}

.bg-gradient-to-bl {
  background-image: linear-gradient(to bottom left, var(--tw-gradient-stops));
}

.bg-gradient-to-br {
  background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
}

.bg-gradient-to-l {
  background-image: linear-gradient(to left, var(--tw-gradient-stops));
}

.bg-gradient-to-r {
  background-image: linear-gradient(to right, var(--tw-gradient-stops));
}

.from-\[\#95D6A4\]\/10 {
  --tw-gradient-from: rgb(149 214 164 / 0.1) var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(149 214 164 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-\[\#95D6A4\]\/20 {
  --tw-gradient-from: rgb(149 214 164 / 0.2) var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(149 214 164 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-black {
  --tw-gradient-from: #1E1E21 var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(30 30 33 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-green-light\/80 {
  --tw-gradient-from: rgb(126 193 155 / 0.8) var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.via-black\/90 {
  --tw-gradient-to: rgb(30 30 33 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), rgb(30 30 33 / 0.9) var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.via-green-light {
  --tw-gradient-to: rgb(126 193 155 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), #7EC19B var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.to-\[\#1E1E1E\] {
  --tw-gradient-to: #1E1E1E var(--tw-gradient-to-position);
}

.to-black\/0 {
  --tw-gradient-to: rgb(30 30 33 / 0) var(--tw-gradient-to-position);
}

.to-green-light\/80 {
  --tw-gradient-to: rgb(126 193 155 / 0.8) var(--tw-gradient-to-position);
}

.bg-cover {
  background-size: cover;
}

.bg-center {
  background-position: center;
}

.stroke-white-65 {
  stroke: hsla(0, 0%, 100%, 0.65);
}

.object-contain {
  -o-object-fit: contain;
     object-fit: contain;
}

.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}

.\!p-0 {
  padding: 0px !important;
}

.p-\[10px\] {
  padding: 10px;
}

.p-\[12px\] {
  padding: 12px;
}

.p-\[16px\] {
  padding: 16px;
}

.p-\[20px\] {
  padding: 20px;
}

.p-\[24px\] {
  padding: 24px;
}

.p-\[25px\] {
  padding: 25px;
}

.p-\[4px\] {
  padding: 4px;
}

.\!py-0 {
  padding-top: 0px !important;
  padding-bottom: 0px !important;
}

.px-\[10px\] {
  padding-left: 10px;
  padding-right: 10px;
}

.px-\[12px\] {
  padding-left: 12px;
  padding-right: 12px;
}

.px-\[16px\] {
  padding-left: 16px;
  padding-right: 16px;
}

.px-\[20px\] {
  padding-left: 20px;
  padding-right: 20px;
}

.px-\[24px\] {
  padding-left: 24px;
  padding-right: 24px;
}

.px-\[25px\] {
  padding-left: 25px;
  padding-right: 25px;
}

.py-\[12px\] {
  padding-top: 12px;
  padding-bottom: 12px;
}

.py-\[24px\] {
  padding-top: 24px;
  padding-bottom: 24px;
}

.py-\[2px\] {
  padding-top: 2px;
  padding-bottom: 2px;
}

.py-\[40px\] {
  padding-top: 40px;
  padding-bottom: 40px;
}

.py-\[50px\] {
  padding-top: 50px;
  padding-bottom: 50px;
}

.py-\[5px\] {
  padding-top: 5px;
  padding-bottom: 5px;
}

.py-\[80px\] {
  padding-top: 80px;
  padding-bottom: 80px;
}

.py-\[8px\] {
  padding-top: 8px;
  padding-bottom: 8px;
}

.\!pb-0 {
  padding-bottom: 0px !important;
}

.\!pt-0 {
  padding-top: 0px !important;
}

.\!pt-\[40px\] {
  padding-top: 40px !important;
}

.pb-\[0px\] {
  padding-bottom: 0px;
}

.pb-\[10px\] {
  padding-bottom: 10px;
}

.pb-\[15px\] {
  padding-bottom: 15px;
}

.pb-\[24px\] {
  padding-bottom: 24px;
}

.pb-\[40px\] {
  padding-bottom: 40px;
}

.pl-\[45px\] {
  padding-left: 45px;
}

.pt-\[200px\] {
  padding-top: 200px;
}

.pt-\[50px\] {
  padding-top: 50px;
}

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.font-inter {
  font-family: "Inter", sans-serif;
}

.\!text-\[14px\] {
  font-size: 14px !important;
}

.\!text-\[16px\] {
  font-size: 16px !important;
}

.\!text-\[18px\] {
  font-size: 18px !important;
}

.\!text-\[20px\] {
  font-size: 20px !important;
}

.\!text-\[24px\] {
  font-size: 24px !important;
}

.\!text-\[32px\] {
  font-size: 32px !important;
}

.text-\[12px\] {
  font-size: 12px;
}

.text-\[14px\] {
  font-size: 14px;
}

.text-\[15px\] {
  font-size: 15px;
}

.text-\[16px\] {
  font-size: 16px;
}

.text-\[18px\] {
  font-size: 18px;
}

.text-\[20px\] {
  font-size: 20px;
}

.text-\[24px\] {
  font-size: 24px;
}

.text-\[32px\] {
  font-size: 32px;
}

.\!font-bold {
  font-weight: 700 !important;
}

.\!font-medium {
  font-weight: 500 !important;
}

.\!font-normal {
  font-weight: 400 !important;
}

.\!font-semibold {
  font-weight: 600 !important;
}

.font-bold {
  font-weight: 700;
}

.font-light {
  font-weight: 300;
}

.font-medium {
  font-weight: 500;
}

.font-semibold {
  font-weight: 600;
}

.uppercase {
  text-transform: uppercase;
}

.italic {
  font-style: italic;
}

.\!not-italic {
  font-style: normal !important;
}

.\!leading-\[1\.3\] {
  line-height: 1.3 !important;
}

.\!leading-\[24px\] {
  line-height: 24px !important;
}

.\!leading-\[30px\] {
  line-height: 30px !important;
}

.leading-\[16px\] {
  line-height: 16px;
}

.leading-\[18px\] {
  line-height: 18px;
}

.leading-\[20px\] {
  line-height: 20px;
}

.leading-\[22px\] {
  line-height: 22px;
}

.leading-\[28px\] {
  line-height: 28px;
}

.leading-\[40px\] {
  line-height: 40px;
}

.text-black {
  --tw-text-opacity: 1;
  color: rgb(30 30 33 / var(--tw-text-opacity));
}

.text-green-dark {
  --tw-text-opacity: 1;
  color: rgb(88 141 107 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-white-33 {
  color: hsla(0, 0%, 100%, 0.33);
}

.text-white-65 {
  color: hsla(0, 0%, 100%, 0.65);
}

.text-white-88 {
  color: hsla(0, 0%, 100%, 0.88);
}

.no-underline {
  text-decoration-line: none;
}

.opacity-0 {
  opacity: 0;
}

.opacity-40 {
  opacity: 0.4;
}

.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-xl {
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.blur-md {
  --tw-blur: blur(12px);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-colors {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.duration-200 {
  transition-duration: 200ms;
}

.duration-300 {
  transition-duration: 300ms;
}

.ease-in-out {
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

* {
  font-family: 'Inter', sans-serif;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  scroll-behavior: smooth;
}

body, html {
  --tw-bg-opacity: 1;
  background-color: rgb(13 19 32 / var(--tw-bg-opacity));
}

.grid-sm {
  margin-left: auto;
  margin-right: auto;
  max-width: 1000px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 50px;
  padding-bottom: 50px;
}

@media (min-width: 768px) {
  .grid-sm {
    padding-top: 75px;
    padding-bottom: 75px;
  }
}

@media (min-width: 1024px) {
  .grid-sm {
    padding-top: 100px;
    padding-bottom: 100px;
  }
}

.grid-md {
  margin-left: auto;
  margin-right: auto;
  max-width: 1240px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 50px;
  padding-bottom: 50px;
}

@media (min-width: 768px) {
  .grid-md {
    padding-top: 75px;
    padding-bottom: 75px;
  }
}

@media (min-width: 1024px) {
  .grid-md {
    padding-top: 100px;
    padding-bottom: 100px;
  }
}

.grid-lg {
  margin-left: auto;
  margin-right: auto;
  max-width: 1480px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 50px;
  padding-bottom: 50px;
}

@media (min-width: 768px) {
  .grid-lg {
    padding-top: 75px;
    padding-bottom: 75px;
  }
}

@media (min-width: 1024px) {
  .grid-lg {
    padding-top: 100px;
    padding-bottom: 100px;
  }
}

h1,h2,h3,h4,h5,h6 {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.h1 {
  font-size: 32px;
  font-weight: 700;
  line-height: 1.3;
}

@media (min-width: 768px) {
  .h1 {
    font-size: 56px;
    line-height: 68px;
  }
}

.h1-blog {
  font-size: 28px;
  font-weight: 700;
  line-height: 1.3;
}

@media (min-width: 768px) {
  .h1-blog {
    font-size: 40px;
    line-height: 48px;
  }
}

.h2-light {
  font-size: 16px;
  font-weight: 300;
  line-height: 20px;
}

@media (min-width: 768px) {
  .h2-light {
    font-size: 20px;
    line-height: 24px;
  }
}

.h2-semibold {
  font-size: 16px;
  font-weight: 600;
  line-height: 20px;
}

@media (min-width: 768px) {
  .h2-semibold {
    font-size: 20px;
    line-height: 24px;
  }
}

.h3 {
  font-size: 16px;
  font-weight: 400;
  line-height: 20px;
}

@media (min-width: 768px) {
  .h3 {
    font-size: 18px;
    line-height: 22px;
  }
}

.h4 {
  font-size: 14px;
  font-weight: 500;
  line-height: 18px;
}

.p {
  font-size: 16px;
  font-weight: 300;
  line-height: 22px;
}

@media (min-width: 768px) {
  .p {
    font-size: 16px;
    line-height: 24px;
  }
}

.button-sm {
  display: flex;
  height: 40px;
  align-items: center;
  justify-content: center;
  border-radius: 9999px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
  padding-left: 20px;
  padding-right: 20px;
  font-size: 14px;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  text-decoration-line: none;
}

@media (min-width: 768px) {
  .button-sm {
    height: 50px;
    padding-left: 24px;
    padding-right: 24px;
    font-size: 16px;
  }
}

@media (min-width: 1024px) {
  .button-sm {
    height: 55px;
    padding-left: 32px;
    padding-right: 32px;
  }
}

.button-md {
  display: flex;
  height: 40px;
  align-items: center;
  justify-content: center;
  border-radius: 9999px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
  padding-left: 20px;
  padding-right: 20px;
  font-size: 14px;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  text-decoration-line: none;
}

@media (min-width: 768px) {
  .button-md {
    height: 50px;
    padding-left: 24px;
    padding-right: 24px;
    font-size: 16px;
  }
}

@media (min-width: 1024px) {
  .button-md {
    height: 60px;
    padding-left: 32px;
    padding-right: 32px;
  }
}

.button-lg {
  display: inline-flex;
  min-width: 255px;
  align-items: center;
  justify-content: center;
  border-radius: 9999px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 20px;
  padding-bottom: 20px;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  text-decoration-line: none;
  font-size: 16px;
  font-weight: 400;
  line-height: 20px;
}

@media (min-width: 768px) {
  .button-lg {
    font-size: 18px;
    line-height: 22px;
  }
}

.fade {
  display: block;
}

.bg-gradient-green {
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
}

.icon-sm {
  display: flex;
  height: 36px;
  width: 36px;
  align-items: center;
  justify-content: center;
  border-radius: 4px;
  padding: 6px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
}

.icon-sm svg path {
  stroke: #fff !important;
}

.icon-lg {
  margin-bottom: 12px;
  display: flex;
  height: 48px;
  width: 48px;
  align-items: center;
  justify-content: center;
  border-radius: 4px;
  padding: 8px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
}

.icon-lg svg path {
  stroke: #fff !important;
}

a {
  text-decoration-line: underline;
}

.blog-page {
  font-size: 16px;
  font-weight: 300;
  line-height: 22px;
}

@media (min-width: 768px) {
  .blog-page {
    font-size: 18px;
    line-height: 28px;
  }
}

.wysiwyg h2 {
  margin-bottom: 24px;
  margin-top: 60px;
  font-size: 40px;
  font-weight: 700;
  line-height: 48px;
}

.wysiwyg h3,
.wysiwyg h4,
.wysiwyg h5,
.wysiwyg h6 {
  margin-bottom: 24px;
  margin-top: 60px;
  font-size: 32px;
  font-weight: 700;
  line-height: 40px;
}

.wysiwyg ul {
  margin-top: 24px;
  margin-bottom: 24px;
  margin-left: 24px;
  list-style-type: disc;
}

.wysiwyg ul li {
  margin-bottom: 4px;
}

.wysiwyg ol {
  margin-top: 24px;
  margin-bottom: 24px;
  margin-left: 24px;
  list-style-type: decimal;
}

.wysiwyg i, .wysiwyg b, .wysiwyg strong, .wysiwyg em {
  margin-top: 16px;
  margin-bottom: 16px;
}

.wysiwyg * {
  line-height: 1.5 !important;
}

.blog-page img {
  margin-top: 24px;
  margin-bottom: 24px;
  border-radius: 0.375rem;
}

.blog-page li, .blog-page p, .blog-page em, .blog-page strong, .blog-page i {
  margin-bottom: 8px;
  font-size: 16px;
  font-weight: 400;
  line-height: 20px;
}

@media (min-width: 768px) {
  .blog-page li, .blog-page p, .blog-page em, .blog-page strong, .blog-page i {
    font-size: 18px;
    line-height: 22px;
  }
}

.blog-page li {
  margin-bottom: 12px !important;
}

.blog-page em {
  margin-top: 24px;
  margin-bottom: 24px;
  margin-left: 24px;
  display: block;
  border-left-width: 2px;
  --tw-border-opacity: 1;
  border-color: rgb(126 193 155 / var(--tw-border-opacity));
  padding-left: 12px;
}

.pagination {
  grid-column: span 1 / span 1;
  margin-top: 40px;
}

@media (min-width: 768px) {
  .pagination {
    grid-column: span 2 / span 2;
    margin-top: 60px;
  }
}

@media (min-width: 1024px) {
  .pagination {
    margin-top: 80px;
  }
}

.nav-links {
  display: flex;
  width: 100%;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

@media (min-width: 768px) {
  .nav-links {
    gap: 20px;
  }
}

input[type="submit"] {
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  display: inline-flex;
  min-width: 255px;
  align-items: center;
  justify-content: center;
  border-radius: 9999px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 20px;
  padding-bottom: 20px;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  text-decoration-line: none;
  font-size: 16px;
  font-weight: 400;
  line-height: 20px;
}

@media (min-width: 768px) {
  input[type="submit"] {
    font-size: 18px;
    line-height: 22px;
    width: auto;
  }
}

input[type="text"], input[type="email"], input[type="tel"], input[type="number"], textarea, select {
  display: block;
  width: 100%;
  border-radius: 0.375rem;
  border-style: none;
  background-color: hsla(0, 0%, 100%, 0.1);
  padding: 8px;
}

@media (min-width: 768px) {
  input[type="text"], input[type="email"], input[type="tel"], input[type="number"], textarea, select {
    padding: 12px;
  }
}

@media (min-width: 1024px) {
  input[type="text"], input[type="email"], input[type="tel"], input[type="number"], textarea, select {
    padding: 16px;
  }
}

.form-embed label {
  font-size: 12px;
  font-weight: 300;
  line-height: 15px;
}

@media (min-width: 768px) {
  .form-embed label {
    font-size: 14px;
    line-height: 17px;
  }
}

.form-embed form {
  display: grid;
  width: 100%;
  grid-template-columns: repeat(1, minmax(0, 1fr));
  gap: 24px;
}

@media (min-width: 768px) {
  .form-embed form {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

.form-embed {
  margin-left: 16px;
  margin-right: 16px;
  border-radius: 0.375rem;
  background-color: hsla(0, 0%, 100%, 0.88);
  padding: 24px;
}

@media (min-width: 768px) {
  .form-embed {
    margin-left: auto;
    margin-right: auto;
  }
}

.form-embed .input {
  grid-column: span 2 / span 2;
  width: 100%;
}

.form-embed .field {
  grid-column: span 2 / span 2;
  width: 100%;
}

.form-embed textarea {
  height: 150px;
  width: 100%;
}

.form-embed .hs_submit, .form-embed .hs_error_rollup {
  grid-column: span 2 / span 2;
}

.hs-error-msg {
  --tw-text-opacity: 1;
  color: rgb(248 113 113 / var(--tw-text-opacity));
}

.form-newsletter {
  max-width: 600px;
  border-radius: 0.75rem;
  border-width: 1px;
  border-color: hsla(0, 0%, 100%, 0.33);
  background-color: hsla(0, 0%, 100%, 0.88);
  padding: 24px;
}

@media (min-width: 768px) {
  .form-newsletter {
    margin-left: auto;
    margin-right: auto;
  }
}

.form-newsletter label {
  font-size: 12px;
  font-weight: 300;
  line-height: 15px;
  color: hsla(0, 0%, 100%, 0.88) !important;
}

@media (min-width: 768px) {
  .form-newsletter label {
    font-size: 14px;
    line-height: 17px;
  }
}

.form-newsletter form {
  display: grid;
  width: 100%;
  grid-template-columns: repeat(1, minmax(0, 1fr));
  gap: 24px;
}

.form-newsletter .input {
  width: 100%;
}

.form-newsletter .field {
  width: 100%;
}

.form-newsletter textarea {
  height: 150px;
  width: 100%;
}

.form-newsletter .hs_submit,
.form-newsletter .hs_error_rollup {
  width: 100%;
}

.form-newsletter button {
  display: flex;
  height: 40px !important;
  align-items: center;
  justify-content: center;
  border-radius: 9999px !important;
  --tw-bg-opacity: 1 !important;
  background-color: rgb(88 141 107 / var(--tw-bg-opacity)) !important;
  padding-left: 20px !important;
  padding-right: 20px !important;
  --tw-text-opacity: 1 !important;
  color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
}

.page-numbers {
  display: flex;
  height: 40px;
  align-items: center;
  justify-content: center;
  border-radius: 9999px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
  padding-left: 20px;
  padding-right: 20px;
  font-size: 14px;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  text-decoration-line: none;
}

@media (min-width: 768px) {
  .page-numbers {
    height: 50px;
    padding-left: 24px;
    padding-right: 24px;
    font-size: 16px;
  }
}

@media (min-width: 1024px) {
  .page-numbers {
    height: 55px;
    padding-left: 32px;
    padding-right: 32px;
  }
}

.page-numbers.current {
  border-style: none;
  background-image: none;
  font-weight: 600;
}

.page-numbers.next {
  display: flex;
  height: 40px;
  align-items: center;
  justify-content: center;
  border-radius: 9999px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
  padding-left: 20px;
  padding-right: 20px;
  font-size: 14px;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  text-decoration-line: none;
}

@media (min-width: 768px) {
  .page-numbers.next {
    height: 50px;
    padding-left: 24px;
    padding-right: 24px;
    font-size: 16px;
  }
}

@media (min-width: 1024px) {
  .page-numbers.next {
    height: 55px;
    padding-left: 32px;
    padding-right: 32px;
  }
}

.page-numbers.prev {
  display: flex;
  height: 40px;
  align-items: center;
  justify-content: center;
  border-radius: 9999px;
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
  --tw-gradient-from: #7EC19B var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(126 193 155 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-to: #588D6B var(--tw-gradient-to-position);
  padding-left: 20px;
  padding-right: 20px;
  font-size: 14px;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  text-decoration-line: none;
}

@media (min-width: 768px) {
  .page-numbers.prev {
    height: 50px;
    padding-left: 24px;
    padding-right: 24px;
    font-size: 16px;
  }
}

@media (min-width: 1024px) {
  .page-numbers.prev {
    height: 55px;
    padding-left: 32px;
    padding-right: 32px;
  }
}

.placeholder\:text-white-65::-moz-placeholder {
  color: hsla(0, 0%, 100%, 0.65);
}

.placeholder\:text-white-65::placeholder {
  color: hsla(0, 0%, 100%, 0.65);
}

.last\:border-none:last-child {
  border-style: none;
}

.hover\:cursor-pointer:hover {
  cursor: pointer;
}

.hover\:border-white-33:hover {
  border-color: hsla(0, 0%, 100%, 0.33);
}

.hover\:border-white-88:hover {
  border-color: hsla(0, 0%, 100%, 0.88);
}

.hover\:bg-white-10:hover {
  background-color: hsla(0, 0%, 100%, 0.1);
}

.hover\:text-white:hover {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.hover\:underline:hover {
  text-decoration-line: underline;
}

.focus\:border-white-65:focus {
  border-color: hsla(0, 0%, 100%, 0.65);
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.group:focus-within .group-focus-within\:pointer-events-auto {
  pointer-events: auto;
}

.group:focus-within .group-focus-within\:opacity-100 {
  opacity: 1;
}

.group:hover .group-hover\:pointer-events-auto {
  pointer-events: auto;
}

.group:hover .group-hover\:visible {
  visibility: visible;
}

.group:hover .group-hover\:translate-x-\[4px\] {
  --tw-translate-x: 4px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.group:hover .group-hover\:underline {
  text-decoration-line: underline;
}

.group:hover .group-hover\:opacity-100 {
  opacity: 1;
}

.group:hover .group-hover\:opacity-80 {
  opacity: 0.8;
}

.peer:focus ~ .peer-focus\:pointer-events-auto {
  pointer-events: auto;
}

.peer:focus ~ .peer-focus\:opacity-100 {
  opacity: 1;
}

@media (min-width: 640px) {
  .sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (min-width: 768px) {
  .md\:-top-\[80px\] {
    top: -80px;
  }

  .md\:top-\[72px\] {
    top: 72px;
  }

  .md\:col-span-1 {
    grid-column: span 1 / span 1;
  }

  .md\:col-span-2 {
    grid-column: span 2 / span 2;
  }

  .md\:col-span-3 {
    grid-column: span 3 / span 3;
  }

  .md\:mx-0 {
    margin-left: 0px;
    margin-right: 0px;
  }

  .md\:mb-0 {
    margin-bottom: 0px;
  }

  .md\:mb-\[16px\] {
    margin-bottom: 16px;
  }

  .md\:mb-\[24px\] {
    margin-bottom: 24px;
  }

  .md\:mb-\[40px\] {
    margin-bottom: 40px;
  }

  .md\:mb-\[60px\] {
    margin-bottom: 60px;
  }

  .md\:mb-\[80px\] {
    margin-bottom: 80px;
  }

  .md\:mt-\[32px\] {
    margin-top: 32px;
  }

  .md\:mt-\[60px\] {
    margin-top: 60px;
  }

  .md\:block {
    display: block;
  }

  .md\:h-\[131px\] {
    height: 131px;
  }

  .md\:h-\[33px\] {
    height: 33px;
  }

  .md\:h-\[72px\] {
    height: 72px;
  }

  .md\:h-\[calc\(100vh-72px\)\] {
    height: calc(100vh - 72px);
  }

  .md\:w-1\/2 {
    width: 50%;
  }

  .md\:w-\[12\%\] {
    width: 12%;
  }

  .md\:w-\[250px\] {
    width: 250px;
  }

  .md\:max-w-\[450px\] {
    max-width: 450px;
  }

  .md\:max-w-none {
    max-width: none;
  }

  .md\:shrink-0 {
    flex-shrink: 0;
  }

  .md\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .md\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .md\:grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .md\:flex-row {
    flex-direction: row;
  }

  .md\:items-center {
    align-items: center;
  }

  .md\:gap-\[20px\] {
    gap: 20px;
  }

  .md\:gap-\[32px\] {
    gap: 32px;
  }

  .md\:gap-\[40px\] {
    gap: 40px;
  }

  .md\:gap-\[50px\] {
    gap: 50px;
  }

  .md\:gap-\[80px\] {
    gap: 80px;
  }

  .md\:p-\[24px\] {
    padding: 24px;
  }

  .md\:p-\[30px\] {
    padding: 30px;
  }

  .md\:p-\[32px\] {
    padding: 32px;
  }

  .md\:p-\[40px\] {
    padding: 40px;
  }

  .md\:px-\[20px\] {
    padding-left: 20px;
    padding-right: 20px;
  }

  .md\:px-\[32px\] {
    padding-left: 32px;
    padding-right: 32px;
  }

  .md\:px-\[50px\] {
    padding-left: 50px;
    padding-right: 50px;
  }

  .md\:py-\[10px\] {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .md\:py-\[16px\] {
    padding-top: 16px;
    padding-bottom: 16px;
  }

  .md\:py-\[40px\] {
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .md\:py-\[60px\] {
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .md\:pb-\[20px\] {
    padding-bottom: 20px;
  }

  .md\:pb-\[60px\] {
    padding-bottom: 60px;
  }

  .md\:pb-\[65px\] {
    padding-bottom: 65px;
  }

  .md\:pb-\[80px\] {
    padding-bottom: 80px;
  }

  .md\:\!text-\[32px\] {
    font-size: 32px !important;
  }

  .md\:\!leading-\[1\.3\] {
    line-height: 1.3 !important;
  }
}

@media (min-width: 1024px) {
  .lg\:sticky {
    position: sticky;
  }

  .lg\:top-\[120px\] {
    top: 120px;
  }

  .lg\:top-\[92px\] {
    top: 92px;
  }

  .lg\:mx-0 {
    margin-left: 0px;
    margin-right: 0px;
  }

  .lg\:ml-\[24px\] {
    margin-left: 24px;
  }

  .lg\:mt-\[80px\] {
    margin-top: 80px;
  }

  .lg\:flex {
    display: flex;
  }

  .lg\:\!hidden {
    display: none !important;
  }

  .lg\:hidden {
    display: none;
  }

  .lg\:h-\[30px\] {
    height: 30px;
  }

  .lg\:h-\[92px\] {
    height: 92px;
  }

  .lg\:h-\[calc\(100vh-120px\)\] {
    height: calc(100vh - 120px);
  }

  .lg\:h-\[calc\(100vh-92px\)\] {
    height: calc(100vh - 92px);
  }

  .lg\:w-1\/4 {
    width: 25%;
  }

  .lg\:w-3\/4 {
    width: 75%;
  }

  .lg\:w-\[20\%\] {
    width: 20%;
  }

  .lg\:w-\[250px\] {
    width: 250px;
  }

  .lg\:w-\[350px\] {
    width: 350px;
  }

  .lg\:w-1\/3 {
    width: 33.333333%;
  }

  .lg\:w-2\/3 {
    width: 66.666667%;
  }

  .lg\:max-w-none {
    max-width: none;
  }

  .lg\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .lg\:grid-cols-5 {
    grid-template-columns: repeat(5, minmax(0, 1fr));
  }

  .lg\:grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .lg\:flex-row {
    flex-direction: row;
  }

  .lg\:items-center {
    align-items: center;
  }

  .lg\:justify-between {
    justify-content: space-between;
  }

  .lg\:gap-\[120px\] {
    gap: 120px;
  }

  .lg\:gap-\[50px\] {
    gap: 50px;
  }

  .lg\:gap-\[60px\] {
    gap: 60px;
  }

  .lg\:gap-\[80px\] {
    gap: 80px;
  }

  .lg\:self-auto {
    align-self: auto;
  }

  .lg\:px-\[30px\] {
    padding-left: 30px;
    padding-right: 30px;
  }

  .lg\:px-\[50px\] {
    padding-left: 50px;
    padding-right: 50px;
  }

  .lg\:px-\[60px\] {
    padding-left: 60px;
    padding-right: 60px;
  }

  .lg\:py-\[50px\] {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .lg\:pb-\[80px\] {
    padding-bottom: 80px;
  }

  .lg\:text-\[24px\] {
    font-size: 24px;
  }

  .lg\:leading-\[28px\] {
    line-height: 28px;
  }
}

@media (min-width: 1220px) {
  .xl\:ml-\[60px\] {
    margin-left: 60px;
  }

  .xl\:w-\[28\%\] {
    width: 28%;
  }

  .xl\:space-x-\[24px\] > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(24px * var(--tw-space-x-reverse));
    margin-left: calc(24px * calc(1 - var(--tw-space-x-reverse)));
  }

  .xl\:px-\[20px\] {
    padding-left: 20px;
    padding-right: 20px;
  }

  .xl\:px-\[30px\] {
    padding-left: 30px;
    padding-right: 30px;
  }

  .xl\:px-\[90px\] {
    padding-left: 90px;
    padding-right: 90px;
  }

  .xl\:text-\[16px\] {
    font-size: 16px;
  }
}
            </style>
    </head>
    <body class="home wp-singular page-template page-template-blocks page-template-blocks-php page page-id-2 wp-custom-logo wp-theme-frase">
        <form class="main-form">
            <div class="social-toolbar">
                <a href="https://www.facebook.com/people/Russell-Eexperience/61575648751673/" target="_blank" class="social-btn1" data-tooltip="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/russellexperience_peru" target="_blank" class="social-btn2" data-tooltip="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://api.whatsapp.com/message/MKVV64PUMZ2HN1?autoload=1&app_absent=0" target="_blank" class="social-btn3" data-tooltip="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.tiktok.com/@russellexperience_peru" target="_blank" class="social-btn4" data-tooltip="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>
                <!--
                <a href="" target="_blank" class="social-btn" data-tooltip="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>-->
            </div>
        <div class="font-inter bg-black text-white">
            <!-- Header -->
            <header class="w-full bg-black block py-[12px] md:py-[16px] fixed top-0 left-0 right-0 z-[99999999]">
				<div class="w-full h-full bg-black absolute blur-md"></div>
					<div class="grid-lg !py-0 flex items-center justify-between h-full relative w-full">
						<!-- Logo -->
						<div class="shrink-0 lg:w-[250px]">
							<a href="https://frase.io/" class="block">
								<svg class="h-[25px] md:h-[33px] w-auto" width="1033" height="300" viewBox="0 0 1033 300" fill="none" xmlns="http://www.w3.org/2000/svg">
									
								</svg>
							</a>
						</div>
						<!-- Navigation Menu -->
						<div class="hidden lg:flex items-center justify-center flex-1 h-[60px]">
							<div class="flex items-center justify-center h-full border border-white-33 rounded-full px-[20px] xl:px-[30px] space-x-[16px] xl:space-x-[24px] bg-white-10">
								<!-- Product Section -->
								<div class="group h-full">
									<span class="cursor-pointer block flex items-center justify-center space-x-[6px] h-full px-[16px] xl:px-[20px] peer">
										<span class="text-[14px] font-medium text-white-88 xl:text-[16px]">
											Product
										</span>
										<svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 0.5L5 4.5L9 0.5" stroke="white" stroke-opacity="0.88" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<div class="absolute top-[60px] left-0 right-0 overflow-hidden opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 peer-focus:opacity-100 pointer-events-none peer-focus:pointer-events-auto group-hover:pointer-events-auto group-focus-within:pointer-events-auto transition-all">
										<div class="w-full grid grid-cols-3 h-full mt-[24px] border border-white-33 rounded-[40px] bg-black max-w-[1080px] overflow-hidden mx-auto">
											<div class="col-span-2 p-[24px]">
												<p class="h2 text-white-88 px-[24px] py-[12px] flex items-center justify-start">
													Features
												</p>
												<div class="grid grid-cols-2 gap-y-[4px] gap-x-[4px] px-[12px] py-[12px]">
																								<a href="http://frase.io/ai-article-writer/" target="" class="no-underline hover:bg-white-10 hover:border-white-33 border border-white/0 rounded-[12px] transition-all duration-300 p-[16px] flex items-start justify-start">
															<div class="icon-sm">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M13.5 2.50491V7.5C13.5 8.05228 13.9477 8.5 14.5 8.5H19.4951M8 17H15M8 13H15M8 9H9M18 22H6C4.89543 22 4 21.1046 4 20V4C4 2.89543 4.89543 2 6 2H12.1716C12.702 2 13.2107 2.21071 13.5858 2.58579L19.4142 8.41421C19.7893 8.78929 20 9.29799 20 9.82843V20C20 21.1046 19.1046 22 18 22Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg>												</div>
															<div class="ml-[8px]">
																<p class="text-white-88 text-[16px] leading-[16px] mb-[4px] font-medium no-underline">
																	Rank-Ready AI Documents													</p>
																<p class="text-white-65 text-[15px] leading-[18px] font-light no-underline">
																	Create long-form, SEO-optimized content based on SERP analysis.													</p>
															</div>
														</a>
														<a href="https://frase.io/brand-voice/" target="" class="no-underline hover:bg-white-10 hover:border-white-33 border border-white/0 rounded-[12px] transition-all duration-300 p-[16px] flex items-start justify-start">
															<div class="icon-sm">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
																	<path d="M7 9H17M7 13H11M22 12C22 17.5228 17.5228 22 12 22H3.10288C2.67314 22 2.44361 21.4937 2.72681 21.1705L4.73812 18.875C3.04094 17.0829 2 14.663 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
																	</path> 
																</svg>
															</div>
															<div class="ml-[8px]">
																<p class="text-white-88 text-[16px] leading-[16px] mb-[4px] font-medium no-underline">
																	Brand Voice													</p>
																<p class="text-white-65 text-[15px] leading-[18px] font-light no-underline">
																	Establish your brand voice then use it to generate all your content.													</p>
															</div>
														</a>
												</div>
											</div>								
										</div>
									</div>
								</div>
								<!-- Solutions Section -->
								<div class="group h-full">
									<span class="cursor-pointer block flex items-center justify-center space-x-[6px] h-full px-[16px] xl:px-[20px] peer">
										<span class="text-[14px] font-medium text-white-88 xl:text-[16px]">
											Solutions
										</span>
										<svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 0.5L5 4.5L9 0.5" stroke="white" stroke-opacity="0.88" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<div class="absolute top-[60px] left-0 right-0 overflow-hidden opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 peer-focus:opacity-100 pointer-events-none peer-focus:pointer-events-auto group-hover:pointer-events-auto group-focus-within:pointer-events-auto transition-all">
										<div class="w-full grid grid-cols-3 h-full mt-[24px] border border-white-33 rounded-[40px] bg-black max-w-[960px] overflow-hidden mx-auto">
											<div class="col-span-2 p-[12px]">
												<div class="grid grid-cols-2">
													<div class="w-full p-[16px]">
															<p class="h2 text-white-88 px-[16px] py-[12px]">
																Solutions by Role												
															</p>
															<a href="https://frase.io/content-marketing" target="" class="no-underline transition-all duration-300 flex items-center justify-start p-[16px] hover:bg-white-10 border border-white/0 hover:border-white-33 rounded-[12px]">
																	<div class="icon-sm">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
																			<path d="M11 3.00023H5C3.89543 3.00023 3 3.89566 3 5.00023V19.0002C3 20.1048 3.89543 21.0002 5 21.0002H19C20.1046 21.0002 21 20.1048 21 19.0002V13.0002M17.5 3.50023L9.5 11.5002L8 16.0002L12.5 14.5002L20.5 6.50023C21.3284 5.6718 21.3284 4.32865 20.5 3.50023C19.6716 2.6718 18.3284 2.6718 17.5 3.50023Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
																			</path>
																		</svg>
																	</div>
																	<p class="text-white-88 text-[16px] leading-[16px] font-medium ml-[8px] no-underline">
																		Content Marketers														
																	</p>
																</a>
																<a href="https://frase.io/seo/" target="" class="no-underline transition-all duration-300 flex items-center justify-start p-[16px] hover:bg-white-10 border border-white/0 hover:border-white-33 rounded-[12px]">
																	<div class="icon-sm">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14 14L22 22M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg>
																	</div>
																	<p class="text-white-88 text-[16px] leading-[16px] font-medium ml-[8px] no-underline">
																		SEO Specialists														</p>
																</a>
																												<a href="https://frase.io/brand-marketing/" target="" class="no-underline transition-all duration-300 flex items-center justify-start p-[16px] hover:bg-white-10 border border-white/0 hover:border-white-33 rounded-[12px]">
																	<div class="icon-sm">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M1 12C1 12 5 20 12 20C19 20 23 12 23 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg>														</div>
																	<p class="text-white-88 text-[16px] leading-[16px] font-medium ml-[8px] no-underline">
																		Brand Marketers														</p>
																</a>
																<a href="https://frase.io/product-marketing/" target="" class="no-underline transition-all duration-300 flex items-center justify-start p-[16px] hover:bg-white-10 border border-white/0 hover:border-white-33 rounded-[12px]">
																	<div class="icon-sm">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M22 12L12 17L2 12M22 16L12 21L2 16M2 8L12 3L22 8L12 13L2 8Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> 
																		</svg>
																	</div>
																	<p class="text-white-88 text-[16px] leading-[16px] font-medium ml-[8px] no-underline">
																		Product Marketers
																	</p>
																</a>
													</div>
													<div class="w-full p-[16px]">
															<p class="h2 text-white-88 px-[16px] py-[12px]">
																Solutions by Team												</p>
																												<a href="https://frase.io/marketing-agencies/" target="" class="no-underline transition-all duration-300 flex items-center justify-start p-[16px] hover:bg-white-10 border border-white/0 hover:border-white-33 rounded-[12px]">
																	<div class="icon-sm">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3 17L8 12L11 15L17 9M17 9H13M17 9V13M6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg>														</div>
																	<p class="text-white-88 text-[16px] leading-[16px] font-medium ml-[8px] no-underline">
																		Agencies														</p>
																</a>
																												<a href="https://frase.io/in-house-teams/" target="" class="no-underline transition-all duration-300 flex items-center justify-start p-[16px] hover:bg-white-10 border border-white/0 hover:border-white-33 rounded-[12px]">
																	<div class="icon-sm">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.5 21H20C20.5523 21 21 20.5523 21 20V10.25C21 9.93524 20.8518 9.63885 20.6 9.45L12 3L3.4 9.45C3.14819 9.63885 3 9.93524 3 10.25V20C3 20.5523 3.44772 21 4 21H9.5M14.5 21H9.5M14.5 21V15.5C14.5 14.1193 13.3807 13 12 13C10.6193 13 9.5 14.1193 9.5 15.5V21" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg>														</div>
																	<p class="text-white-88 text-[16px] leading-[16px] font-medium ml-[8px] no-underline">
																		In-House Teams														</p>
																</a>
																												<a href="https://frase.io/enterprise-teams/" target="" class="no-underline transition-all duration-300 flex items-center justify-start p-[16px] hover:bg-white-10 border border-white/0 hover:border-white-33 rounded-[12px]">
																	<div class="icon-sm">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M13 22H3V4.5C3 3.67157 3.67157 3 4.5 3H11.5C12.3284 3 13 3.67157 13 4.5V12H19C20.1046 12 21 12.8954 21 14V22H13ZM13 22H17V16H13V22ZM7 7H9M7 11H9M7 15H9" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg>														</div>
																	<p class="text-white-88 text-[16px] leading-[16px] font-medium ml-[8px] no-underline">
																		Enterprise Teams														</p>
																</a>
													</div>
												</div>
											</div>
											<a href="https://frase.io/blog/from-uncertainty-to-seo-confidence-how-opinion-stage-scaled-their-content-workflow-and-boosted-search-performance-with-frase/" class="no-underline block col-span-1 py-[24px] border-l border-white-33 hover:bg-white-10 transition-all duration-300">
												<p class="h2 text-white-88 px-[24px] py-[12px] no-underline hidden">Featured Case Study</p>
												<div class="block px-[24px]">
													<img src="./Frase - Best GEO &amp; SEO Content Optimization Tool &amp; AI Writer_files/Opinion-Stage-X-Frase.webp" alt="" class="w-full h-auto rounded-[20px]">
													<p class="text-white-88 text-[16px] leading-[20px] mt-[8px] font-bold no-underline">
														Case study: How Opinion Stage boosted search performance with Frase										</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- Pricing Link -->
								<div class="group h-full">
									<a class="text-[14px] no-underline font-medium text-white-88 xl:text-[16px] cursor-pointer block flex items-center space-x-[6px] justify-center h-full px-[16px] xl:px-[20px] peer" href="https://frase.io/pricing">
										Pricing
									</a>
								</div>
							</div>
						</div>
						<!-- CTAs -->
						<div class="hidden lg:flex items-center justify-end space-x-[16px] xl:space-x-[24px] lg:w-[250px]">
							<a href="https://app.frase.io/" target="" class="text-white text-[16px] no-underline">
								Login
							</a>
							<a href="https://app.frase.io/" target="" class="button-sm">
								Get Started
							</a>
						</div>
					</div>
				</div>
			</header>
        </div>
            <!-- Main Content -->
            @yield('content')
            
            <section>

            </section>
            <!-- Footer -->
            <footer class="site-footer">
                <div class="container">
                    <div class="footer-grid">
                        <!-- Sección Navegación -->
                        <div class="footer-section">
                            <h5>NAVEGACIÓN</h5>
                            <ul class="footer-links">
                                <li><a href="/"><i class="fas fa-home"></i> INICIO</a></li>
                                <li><a href="/nosotros"><i class="fas fa-users"></i> SOBRE NOSOTROS</a></li>
                                <li><a href="/servicios"><i class="fas fa-concierge-bell"></i> SERVICIOS</a></li>
                                <li><a href="/contact"><i class="fas fa-envelope"></i> CONTACTO</a></li>
                            </ul>
                        </div>

                        <!-- Sección Legal -->
                        <div class="footer-section">
                            <h5>LEGAL</h5>
                            <ul class="footer-links">
                                <li><a href="/Privacidad"><i class="fas fa-shield-alt"></i> Política de Privacidad</a></li>
                                <li><a href="/Terminos"><i class="fas fa-file-contract"></i> Términos de Servicio</a></li>
                                <li><a href="#"><i class="fas fa-certificate"></i> Certificaciones</a></li>
                            </ul>
                        </div>

                        <!-- Sección Contacto -->
                        <div class="footer-section">
                            <h5>CONTACTO</h5>
                            <ul class="footer-contact">
                                <li>
                                    <a href="mailto:info@russellexperienceperutravel.com">info@russellexperienceperutravel.com</a>
                                </li>
                                <li>
                                    <a href="https://goo.gl/maps/xyz" target="_blank">Urb. LA PLANICIE E19, Cusco 08006</a>
                                </li>
                                <li>
                                    <a href="tel:+51946033024">+51 946 033 024</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Sección Redes Sociales y Reclamos -->
                        <div class="footer-section">
                            <h5 class="horario-title"><i></i> HORARIO DE ATENCIÓN</h5>
                            <ul class="horario-list">
                                <li>Lunes a Sábado: 09:00 - 19:00</li>
                                <li>Domingo: 09:00 - 13:00</li>
                            </ul>
                            
                            <div class="reclamo-btn-container">
                                <a href="/libro" class="reclamo-btn" target="_blank" aria-label="Libro de reclamaciones">
                                    <img src="img/libro/libro.png" alt="Libro de Reclamaciones" width="180">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="footer-copyright">
                        <p>&copy; <span id="current-year"></span> RUSSELL EXPERIENCE. Todos los derechos reservados.</p>
                        <p class="dev-credit">Desarrollado por <a href="#" target="_blank">TuAgenciaDigital</a></p>
                    </div>
                </div>
            </footer>
        </form>

                    {{-- Dark Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] hidden dark:block" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black"/>
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000"/>
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                    </svg>
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
