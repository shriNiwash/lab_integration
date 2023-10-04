<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-menu-color="brand">
<head>
  <meta charset="utf-8" />
  <title>Tez LIS SYSTEM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <style>
	@charset "UTF-8";
@import url(https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700&display=swap);
:root {
  --ct-logo-lg-height: 40px;
  --ct-logo-sm-height: 22px;
  --ct-leftbar-width: 240px;
  --ct-leftbar-width-md: 160px;
  --ct-leftbar-width-sm: 70px;
  --ct-leftbar-condensed-height: 1500px;
  --ct-topbar-height: 33px;
  --ct-menu-item-icon-size: 1.1rem;
  --ct-menu-item-icon-width: 20px;
  --ct-menu-item-font-size: 0.925rem;
  --ct-menu-item-padding-x: 8px;
  --ct-menu-item-padding-y: 9px;
  --ct-footer-height: 30px;
  --ct-theme-card-border-width: 0px
}

html[data-menu-color=light] {
  --ct-menu-bg: #ffffff;
  --ct-menu-item-color: #495057;
  --ct-menu-item-hover-color: #3e60d5;
  --ct-menu-item-active-color: #3e60d5;
  --ct-menu-condensed-link-bg: #313a46;
  --ct-help-box-bg: #3e60d5
}

html[data-menu-color=dark] {
  --ct-menu-bg: linear-gradient(to bottom, #aa076b, #61045f);
  --ct-menu-item-color: #8391a2;
  --ct-menu-item-hover-color: #bccee4;
  --ct-menu-item-active-color: #ffffff;
  --ct-menu-condensed-link-bg: #313a46;
  --ct-help-box-bg: rgba(255, 255, 255, 0.07)
}

html[data-menu-color=brand] {
  --ct-menu-bg: linear-gradient(to bottom, #aa076b, #61045f);
  --ct-menu-item-color: #cedce4;
  --ct-menu-item-hover-color: #ffffff;
  --ct-menu-item-active-color: #ffffff;
  --ct-menu-condensed-link-bg: #313a46;
  --ct-help-box-bg: rgba(255, 255, 255, 0.07)
}

html[data-bs-theme=dark][data-menu-color=dark],
html[data-bs-theme=dark][data-menu-color=light] {
  --ct-menu-bg: #313a46;
  --ct-menu-item-color: #8391a2;
  --ct-menu-item-hover-color: #bccee4;
  --ct-menu-item-active-color: #ffffff;
  --ct-menu-condensed-link-bg: #313a46;
  --ct-help-box-bg: rgba(255, 255, 255, 0.07)
}

html[data-topbar-color=light] {
  --ct-topbar-bg: #ffffff;
  --ct-topbar-item-color: #495057;
  --ct-topbar-item-hover-color: #3e60d5;
  --ct-topbar-search-bg: #f3f3f8;
  --ct-topbar-user-bg: #fbfcfc;
  --ct-topbar-user-border: #eef2f7
}

html[data-topbar-color=dark] {
  --ct-topbar-bg: #313a46;
  --ct-topbar-item-color: #8391a2;
  --ct-topbar-item-hover-color: #bccee4;
  --ct-topbar-search-bg: #464f5b;
  --ct-topbar-user-bg: #3c4655;
  --ct-topbar-user-border: #414d5d
}

html[data-topbar-color=brand] {
  --ct-topbar-bg: linear-gradient(135deg, #6379c3 0%, #3e60d5 60%);
  --ct-topbar-item-color: rgba(255, 255, 255, 0.7);
  --ct-topbar-item-hover-color: #ffffff;
  --ct-topbar-search-bg: rgba(255, 255, 255, 0.1);
  --ct-topbar-user-bg: rgba(255, 255, 255, 0.1);
  --ct-topbar-user-border: rgba(255, 255, 255, 0.15)
}

html[data-bs-theme=dark][data-topbar-color=dark],
html[data-bs-theme=dark][data-topbar-color=light] {
  --ct-topbar-bg: #2f3742;
  --ct-topbar-item-color: #8391a2;
  --ct-topbar-item-hover-color: #bccee4;
  --ct-topbar-search-bg: #363f4a;
  --ct-topbar-user-bg: #363f4a;
  --ct-topbar-user-border: #414d5d
}

.border-dashed {
  border-style: dashed !important
}


:root,
[data-bs-theme=light] {
  --ct-blue: #3e60d5;
  --ct-indigo: #3e60d5;
  --ct-purple: #6b5eae;
  --ct-pink: #ff679b;
  --ct-red: #f15776;
  --ct-orange: #fd7e14;
  --ct-yellow: #ffc35a;
  --ct-green: #47ad77;
  --ct-teal: #02a8b5;
  --ct-cyan: #16a7e9;
  --ct-black: #000;
  --ct-white: #fff;
  --ct-gray: #6c757d;
  --ct-gray-dark: #343a40;
  --ct-gray-100: #f8f9fa;
  --ct-gray-200: #f2f2f7;
  --ct-gray-300: #dee2e6;
  --ct-gray-400: #ced4da;
  --ct-gray-500: #adb5bd;
  --ct-gray-600: #6c757d;
  --ct-gray-700: #495057;
  --ct-gray-800: #343a40;
  --ct-gray-900: #212529;
  --ct-primary: #3e60d5;
  --ct-secondary: #6c757d;
  --ct-success: #47ad77;
  --ct-info: #16a7e9;
  --ct-warning: #ffc35a;
  --ct-danger: #f15776;
  --ct-light: #f2f2f7;
  --ct-dark: #212529;
  --ct-primary-rgb: 62, 96, 213;
  --ct-secondary-rgb: 108, 117, 125;
  --ct-success-rgb: 71, 173, 119;
  --ct-info-rgb: 22, 167, 233;
  --ct-warning-rgb: 255, 195, 90;
  --ct-danger-rgb: 241, 87, 118;
  --ct-light-rgb: 242, 242, 247;
  --ct-dark-rgb: 33, 37, 41;
  --ct-primary-text-emphasis: #3856c0;
  --ct-secondary-text-emphasis: #616971;
  --ct-success-text-emphasis: #409c6b;
  --ct-info-text-emphasis: #1496d2;
  --ct-warning-text-emphasis: #e6b051;
  --ct-danger-text-emphasis: #d94e6a;
  --ct-light-text-emphasis: #ced4da;
  --ct-dark-text-emphasis: #495057;
  --ct-primary-bg-subtle: #eceffb;
  --ct-secondary-bg-subtle: #f8f9fa;
  --ct-success-bg-subtle: #daefe4;
  --ct-info-bg-subtle: #d0edfb;
  --ct-warning-bg-subtle: #fff3de;
  --ct-danger-bg-subtle: #fcdde4;
  --ct-light-bg-subtle: #fcfcfd;
  --ct-dark-bg-subtle: #ced4da;
  --ct-primary-border-subtle: #b2bfee;
  --ct-secondary-border-subtle: #f2f2f7;
  --ct-success-border-subtle: #b5dec9;
  --ct-info-border-subtle: #a2dcf6;
  --ct-warning-border-subtle: #ffe7bd;
  --ct-danger-border-subtle: #f9bcc8;
  --ct-light-border-subtle: #f2f2f7;
  --ct-dark-border-subtle: #adb5bd;
  --ct-white-rgb: 255, 255, 255;
  --ct-black-rgb: 0, 0, 0;
  --ct-font-sans-serif: "Figtree", sans-serif;
  --ct-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --ct-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --ct-body-font-family: var(--ct-font-sans-serif);
  --ct-body-font-size: 0.875rem;
  --ct-body-font-weight: 400;
  --ct-body-line-height: 1.5;
  --ct-body-color: #6c757d;
  --ct-body-color-rgb: 108, 117, 125;
  --ct-body-bg: #f2f2f7;
  --ct-body-bg-rgb: 242, 242, 247;
  --ct-emphasis-color: #000;
  --ct-emphasis-color-rgb: 0, 0, 0;
  --ct-secondary-color: rgba(108, 117, 125, 0.75);
  --ct-secondary-color-rgb: 108, 117, 125;
  --ct-secondary-bg: #fff;
  --ct-secondary-bg-rgb: 255, 255, 255;
  --ct-tertiary-color: #313539;
  --ct-tertiary-color-rgb: 49, 53, 57;
  --ct-tertiary-bg: #f8f9fa;
  --ct-tertiary-bg-rgb: 248, 249, 250;
  --ct-heading-color: inherit;
  --ct-link-color: #3e60d5;
  --ct-link-color-rgb: 62, 96, 213;
  --ct-link-decoration: none;
  --ct-link-hover-color: #3552b5;
  --ct-link-hover-color-rgb: 53, 82, 181;
  --ct-code-color: #16a7e9;
  --ct-highlight-bg: #fff3de;
  --ct-border-width: 1px;
  --ct-border-style: solid;
  --ct-border-color: #dee2e6;
  --ct-border-color-translucent: rgba(0, 0, 0, 0.175);
  --ct-border-radius: 0.375rem;
  --ct-border-radius-sm: 0.25rem;
  --ct-border-radius-lg: 0.5rem;
  --ct-border-radius-xl: 1rem;
  --ct-border-radius-xxl: 2rem;
  --ct-border-radius-2xl: var(--ct-border-radius-xxl);
  --ct-border-radius-pill: 50rem;
  --ct-box-shadow: 0 1px 3px rgba(27, 23, 30, 0.1);
  --ct-box-shadow-sm: 0 0.125rem 0.25rem rgba(var(--ct-body-color-rgb), 0.15);
  --ct-box-shadow-lg: 0 0 45px 0 rgba(var(--ct-body-color-rgb), 0.2);
  --ct-box-shadow-inset: inset 0 1px 2px rgba(var(--ct-body-color-rgb), 0.075);
  --ct-focus-ring-width: 0.25rem;
  --ct-focus-ring-opacity: 0.25;
  --ct-focus-ring-color: rgba(62, 96, 213, 0.25);
  --ct-form-valid-color: #47ad77;
  --ct-form-valid-border-color: #47ad77;
  --ct-form-invalid-color: #f15776;
  --ct-form-invalid-border-color: #f15776
}

[data-bs-theme=dark] {
  color-scheme: dark;
  --ct-body-color: #aab8c5;
  --ct-body-color-rgb: 170, 184, 197;
  --ct-body-bg: #2d333c;
  --ct-body-bg-rgb: 45, 51, 60;
  --ct-emphasis-color: #f8f9fa;
  --ct-emphasis-color-rgb: 248, 249, 250;
  --ct-secondary-color: #8391a2;
  --ct-secondary-color-rgb: 131, 145, 162;
  --ct-secondary-bg: #313a46;
  --ct-secondary-bg-rgb: 49, 58, 70;
  --ct-tertiary-color: #f1f1f1;
  --ct-tertiary-color-rgb: 241, 241, 241;
  --ct-tertiary-bg: #404954;
  --ct-tertiary-bg-rgb: 64, 73, 84;
  --ct-primary-text-emphasis: #3856c0;
  --ct-secondary-text-emphasis: #6c757d;
  --ct-success-text-emphasis: #409c6b;
  --ct-info-text-emphasis: #1496d2;
  --ct-warning-text-emphasis: #e6b051;
  --ct-danger-text-emphasis: #d94e6a;
  --ct-light-text-emphasis: #6c757d;
  --ct-dark-text-emphasis: #6c757d;
  --ct-primary-bg-subtle: rgba(var(--ct-primary-rgb), 0.2);
  --ct-secondary-bg-subtle: rgba(var(--ct-secondary-rgb), 0.2);
  --ct-success-bg-subtle: rgba(var(--ct-success-rgb), 0.2);
  --ct-info-bg-subtle: rgba(var(--ct-info-rgb), 0.2);
  --ct-warning-bg-subtle: rgba(var(--ct-warning-rgb), 0.2);
  --ct-danger-bg-subtle: rgba(var(--ct-danger-rgb), 0.2);
  --ct-light-bg-subtle: rgba(var(--ct-light-rgb), 0.2);
  --ct-dark-bg-subtle: rgba(var(--ct-dark-rgb), 0.2);
  --ct-primary-border-subtle: #253a80;
  --ct-secondary-border-subtle: #495057;
  --ct-success-border-subtle: #2b6847;
  --ct-info-border-subtle: #09435d;
  --ct-warning-border-subtle: #664e24;
  --ct-danger-border-subtle: #913447;
  --ct-light-border-subtle: #495057;
  --ct-dark-border-subtle: #343a40;
  --ct-heading-color: inherit;
  --ct-link-color: #3e60d5;
  --ct-link-hover-color: #3856c0;
  --ct-link-color-rgb: 62, 96, 213;
  --ct-link-hover-color-rgb: 56, 86, 192;
  --ct-code-color: #16a7e9;
  --ct-border-color: #464f5b;
  --ct-border-color-translucent: #464f5b;
  --ct-form-valid-color: #91cead;
  --ct-form-valid-border-color: #91cead;
  --ct-form-invalid-color: #f79aad;
  --ct-form-invalid-border-color: #f79aad
}

*,
::after,
::before {
  -webkit-box-sizing: border-box;
  box-sizing: border-box
}

@media (prefers-reduced-motion:no-preference) {
  :root {
    scroll-behavior: smooth
  }
}

body {
  margin: 0;
  font-family: var(--ct-body-font-family);
  font-size: var(--ct-body-font-size);
  font-weight: var(--ct-body-font-weight);
  line-height: var(--ct-body-line-height);
  color: var(--ct-body-color);
  text-align: var(--ct-body-text-align);
  background-color: var(--ct-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent
}

hr {
  margin: 1.125rem 0;
  color: inherit;
  border: 0;
  border-top: var(--ct-border-width) solid var(--ct-border-color);
  opacity: 1
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: 10px;
  font-weight: 600;
  line-height: 1.1;
  color: var(--ct-heading-color)
}

.h1,
h1 {
  font-size: calc(1.34375rem + 1.125vw)
}

@media (min-width:1200px) {
  .h1,
  h1 {
    font-size: 2.1875rem
  }
}

.h2,
h2 {
  font-size: calc(1.307rem + .684vw)
}

@media (min-width:1200px) {
  .h2,
  h2 {
    font-size: 1.82rem
  }
}

.h3,
h3 {
  font-size: calc(1.271125rem + .2535vw)
}

@media (min-width:1200px) {
  .h3,
  h3 {
    font-size: 1.46125rem
  }
}

.h4,
h4 {
  font-size: 1.09375rem
}

.h5,
h5 {
  font-size: .91rem
}

.h6,
h6 {
  font-size: .74375rem
}

p {
  margin-top: 0;
  margin-bottom: 1rem
}

abbr[title] {
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit
}

ol,
ul {
  padding-left: 2rem
}

dl,
ol,
ul {
  margin-top: 0;
  margin-bottom: 1rem
}

ol ol,
ol ul,
ul ol,
ul ul {
  margin-bottom: 0
}

dt {
  font-weight: 700
}

dd {
  margin-bottom: .5rem;
  margin-left: 0
}

blockquote {
  margin: 0 0 1rem
}

b,
strong {
  font-weight: bolder
}

.small,
small {
  font-size: .75rem
}

.mark,
mark {
  padding: .1875em;
  background-color: var(--ct-highlight-bg)
}

sub,
sup {
  position: relative;
  font-size: .75em;
  line-height: 0;
  vertical-align: baseline
}

sub {
  bottom: -.25em
}

sup {
  top: -.5em
}

a {
  color: rgba(var(--ct-link-color-rgb), var(--ct-link-opacity, 1));
  text-decoration: none
}

a:hover {
  --ct-link-color-rgb: var(--ct-link-hover-color-rgb)
}

a:not([href]):not([class]),
a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none
}

code,
kbd,
pre,
samp {
  font-family: var(--ct-font-monospace);
  font-size: 1em
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: .75rem
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal
}

code {
  font-size: .75rem;
  color: var(--ct-code-color);
  word-wrap: break-word
}

a>code {
  color: inherit
}

kbd {
  padding: .2rem .4rem;
  font-size: .75rem;
  color: var(--ct-body-bg);
  background-color: var(--ct-body-color);
  border-radius: .25rem
}

kbd kbd {
  padding: 0;
  font-size: 1em
}

figure {
  margin: 0 0 1rem
}

img,
svg {
  vertical-align: middle
}

table {
  caption-side: bottom;
  border-collapse: collapse
}

caption {
  padding-top: .95rem;
  padding-bottom: .95rem;
  color: var(--ct-secondary-color);
  text-align: left
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent
}

tbody,
td,
tfoot,
th,
thead,
tr {
  border-color: inherit;
  border-style: solid;
  border-width: 0
}

label {
  display: inline-block
}

button {
  border-radius: 0
}

button:focus:not(:focus-visible) {
  outline: 0
}

button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit
}

button,
select {
  text-transform: none
}

[role=button] {
  cursor: pointer
}

select {
  word-wrap: normal
}

select:disabled {
  opacity: 1
}

[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
  display: none !important
}

[type=button],
[type=reset],
[type=submit],
button {
  -webkit-appearance: button
}

[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled),
button:not(:disabled) {
  cursor: pointer
}

::-moz-focus-inner {
  padding: 0;
  border-style: none
}

textarea {
  resize: vertical
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: calc(1.275rem + .3vw);
  line-height: inherit
}

@media (min-width:1200px) {
  legend {
    font-size: 1.5rem
  }
}

legend+* {
  clear: left
}

::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-year-field {
  padding: 0
}

::-webkit-inner-spin-button {
  height: auto
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield
}

::-webkit-search-decoration {
  -webkit-appearance: none
}

::-webkit-color-swatch-wrapper {
  padding: 0
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button
}

::file-selector-button {
  font: inherit;
  -webkit-appearance: button
}

output {
  display: inline-block
}

iframe {
  border: 0
}

summary {
  display: list-item;
  cursor: pointer
}

progress {
  vertical-align: baseline
}

[hidden] {
  display: none !important
}

.lead {
  font-size: 1.09375rem;
  font-weight: 300
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.1
}

@media (min-width:1200px) {
  .display-1 {
    font-size: 5rem
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.1
}

@media (min-width:1200px) {
  .display-2 {
    font-size: 4.5rem
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.1
}

@media (min-width:1200px) {
  .display-3 {
    font-size: 4rem
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.1
}

@media (min-width:1200px) {
  .display-4 {
    font-size: 3.5rem
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.1
}

@media (min-width:1200px) {
  .display-5 {
    font-size: 3rem
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.1
}

@media (min-width:1200px) {
  .display-6 {
    font-size: 2.5rem
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none
}

.list-inline {
  padding-left: 0;
  list-style: none
}

.list-inline-item {
  display: inline-block
}

.list-inline-item:not(:last-child) {
  margin-right: .5rem
}

.initialism {
  font-size: .75rem;
  text-transform: uppercase
}

.blockquote {
  margin-bottom: 1.5rem;
  font-size: 1.09375rem
}

.blockquote>:last-child {
  margin-bottom: 0
}

.blockquote-footer {
  margin-top: -1.5rem;
  margin-bottom: 1.5rem;
  font-size: .75rem;
  color: var(--ct-secondary-color)
}

.blockquote-footer::before {
  content: "— "
}

.img-fluid {
  max-width: 100%;
  height: auto
}

.img-thumbnail {
  padding: .25rem;
  background-color: var(--ct-body-bg);
  border: var(--ct-border-width) solid var(--ct-border-color);
  border-radius: var(--ct-border-radius);
  max-width: 100%;
  height: auto
}

.figure {
  display: inline-block
}

.figure-img {
  margin-bottom: .75rem;
  line-height: 1
}

.figure-caption {
  font-size: .75rem;
  color: var(--ct-secondary-color)
}

.container,
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl,
.container-xxl {
  --ct-gutter-x: 1.25rem;
  --ct-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--ct-gutter-x) * .5);
  padding-left: calc(var(--ct-gutter-x) * .5);
  margin-right: auto;
  margin-left: auto
}

@media (min-width:576px) {
  .container,
  .container-sm {
    max-width: 540px
  }
}

@media (min-width:768px) {
  .container,
  .container-md,
  .container-sm {
    max-width: 720px
  }
}

@media (min-width:992px) {
  .container,
  .container-lg,
  .container-md,
  .container-sm {
    max-width: 960px
  }
}

@media (min-width:1200px) {
  .container,
  .container-lg,
  .container-md,
  .container-sm,
  .container-xl {
    max-width: 1140px
  }
}

@media (min-width:1400px) {
  .container,
  .container-lg,
  .container-md,
  .container-sm,
  .container-xl,
  .container-xxl {
    max-width: 1320px
  }
}

:root {
  --ct-breakpoint-xs: 0;
  --ct-breakpoint-sm: 576px;
  --ct-breakpoint-md: 768px;
  --ct-breakpoint-lg: 992px;
  --ct-breakpoint-xl: 1200px;
  --ct-breakpoint-xxl: 1400px
}

.row {
  --ct-gutter-x: 1.25rem;
  --ct-gutter-y: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--ct-gutter-y));
  margin-right: calc(-.5 * var(--ct-gutter-x));
  margin-left: calc(-.5 * var(--ct-gutter-x))
}

.row>* {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--ct-gutter-x) * .5);
  padding-left: calc(var(--ct-gutter-x) * .5);
  margin-top: var(--ct-gutter-y)
}

.col {
  -webkit-box-flex: 1;
  -ms-flex: 1 0 0%;
  flex: 1 0 0%
}
.sidebar-menu .active{
  background: #2E3840;
}
.sidebar-menu li:hover{
  background: #2E3840;
}
.row-cols-auto>* {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto
}

.row-cols-1>* {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%
}

.row-cols-2>* {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%
}

.row-cols-3>* {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.3333333333%
}

.row-cols-4>* {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%
}

.row-cols-5>* {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 20%
}

.row-cols-6>* {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.6666666667%
}

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto
}

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 8.33333333%
}

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.66666667%
}

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%
}

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.33333333%
}

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 41.66666667%
}

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%
}

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 58.33333333%
}

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 66.66666667%
}

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 75%
}

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 83.33333333%
}

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 91.66666667%
}

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%
}

.offset-1 {
  margin-left: 8.33333333%
}

.offset-2 {
  margin-left: 16.66666667%
}

.offset-3 {
  margin-left: 25%
}

.offset-4 {
  margin-left: 33.33333333%
}

.offset-5 {
  margin-left: 41.66666667%
}

.offset-6 {
  margin-left: 50%
}

.offset-7 {
  margin-left: 58.33333333%
}

.offset-8 {
  margin-left: 66.66666667%
}

.offset-9 {
  margin-left: 75%
}

.offset-10 {
  margin-left: 83.33333333%
}

.offset-11 {
  margin-left: 91.66666667%
}

.g-0,
.gx-0 {
  --ct-gutter-x: 0
}

.g-0,
.gy-0 {
  --ct-gutter-y: 0
}

.g-1,
.gx-1 {
  --ct-gutter-x: 0.375rem
}

.g-1,
.gy-1 {
  --ct-gutter-y: 0.375rem
}

.g-2,
.gx-2 {
  --ct-gutter-x: 0.75rem
}

.g-2,
.gy-2 {
  --ct-gutter-y: 0.75rem
}

.g-3,
.gx-3 {
  --ct-gutter-x: 1.5rem
}

.g-3,
.gy-3 {
  --ct-gutter-y: 1.5rem
}

.g-4,
.gx-4 {
  --ct-gutter-x: 2.25rem
}

.g-4,
.gy-4 {
  --ct-gutter-y: 2.25rem
}

.g-5,
.gx-5 {
  --ct-gutter-x: 4.5rem
}

.g-5,
.gy-5 {
  --ct-gutter-y: 4.5rem
}

@media (min-width:576px) {
  .col-sm {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%
  }
  .row-cols-sm-auto>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .row-cols-sm-1>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .row-cols-sm-2>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .row-cols-sm-3>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%
  }
  .row-cols-sm-4>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .row-cols-sm-5>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%
  }
  .row-cols-sm-6>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%
  }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%
  }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%
  }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%
  }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%
  }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%
  }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%
  }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%
  }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%
  }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%
  }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .offset-sm-0 {
    margin-left: 0
  }
  .offset-sm-1 {
    margin-left: 8.33333333%
  }
  .offset-sm-2 {
    margin-left: 16.66666667%
  }
  .offset-sm-3 {
    margin-left: 25%
  }
  .offset-sm-4 {
    margin-left: 33.33333333%
  }
  .offset-sm-5 {
    margin-left: 41.66666667%
  }
  .offset-sm-6 {
    margin-left: 50%
  }
  .offset-sm-7 {
    margin-left: 58.33333333%
  }
  .offset-sm-8 {
    margin-left: 66.66666667%
  }
  .offset-sm-9 {
    margin-left: 75%
  }
  .offset-sm-10 {
    margin-left: 83.33333333%
  }
  .offset-sm-11 {
    margin-left: 91.66666667%
  }
  .g-sm-0,
  .gx-sm-0 {
    --ct-gutter-x: 0
  }
  .g-sm-0,
  .gy-sm-0 {
    --ct-gutter-y: 0
  }
  .g-sm-1,
  .gx-sm-1 {
    --ct-gutter-x: 0.375rem
  }
  .g-sm-1,
  .gy-sm-1 {
    --ct-gutter-y: 0.375rem
  }
  .g-sm-2,
  .gx-sm-2 {
    --ct-gutter-x: 0.75rem
  }
  .g-sm-2,
  .gy-sm-2 {
    --ct-gutter-y: 0.75rem
  }
  .g-sm-3,
  .gx-sm-3 {
    --ct-gutter-x: 1.5rem
  }
  .g-sm-3,
  .gy-sm-3 {
    --ct-gutter-y: 1.5rem
  }
  .g-sm-4,
  .gx-sm-4 {
    --ct-gutter-x: 2.25rem
  }
  .g-sm-4,
  .gy-sm-4 {
    --ct-gutter-y: 2.25rem
  }
  .g-sm-5,
  .gx-sm-5 {
    --ct-gutter-x: 4.5rem
  }
  .g-sm-5,
  .gy-sm-5 {
    --ct-gutter-y: 4.5rem
  }
}

@media (min-width:768px) {
  .col-md {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%
  }
  .row-cols-md-auto>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .row-cols-md-1>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .row-cols-md-2>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .row-cols-md-3>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%
  }
  .row-cols-md-4>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .row-cols-md-5>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%
  }
  .row-cols-md-6>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%
  }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%
  }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%
  }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%
  }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%
  }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%
  }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%
  }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%
  }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%
  }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%
  }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .offset-md-0 {
    margin-left: 0
  }
  .offset-md-1 {
    margin-left: 8.33333333%
  }
  .offset-md-2 {
    margin-left: 16.66666667%
  }
  .offset-md-3 {
    margin-left: 25%
  }
  .offset-md-4 {
    margin-left: 33.33333333%
  }
  .offset-md-5 {
    margin-left: 41.66666667%
  }
  .offset-md-6 {
    margin-left: 50%
  }
  .offset-md-7 {
    margin-left: 58.33333333%
  }
  .offset-md-8 {
    margin-left: 66.66666667%
  }
  .offset-md-9 {
    margin-left: 75%
  }
  .offset-md-10 {
    margin-left: 83.33333333%
  }
  .offset-md-11 {
    margin-left: 91.66666667%
  }
  .g-md-0,
  .gx-md-0 {
    --ct-gutter-x: 0
  }
  .g-md-0,
  .gy-md-0 {
    --ct-gutter-y: 0
  }
  .g-md-1,
  .gx-md-1 {
    --ct-gutter-x: 0.375rem
  }
  .g-md-1,
  .gy-md-1 {
    --ct-gutter-y: 0.375rem
  }
  .g-md-2,
  .gx-md-2 {
    --ct-gutter-x: 0.75rem
  }
  .g-md-2,
  .gy-md-2 {
    --ct-gutter-y: 0.75rem
  }
  .g-md-3,
  .gx-md-3 {
    --ct-gutter-x: 1.5rem
  }
  .g-md-3,
  .gy-md-3 {
    --ct-gutter-y: 1.5rem
  }
  .g-md-4,
  .gx-md-4 {
    --ct-gutter-x: 2.25rem
  }
  .g-md-4,
  .gy-md-4 {
    --ct-gutter-y: 2.25rem
  }
  .g-md-5,
  .gx-md-5 {
    --ct-gutter-x: 4.5rem
  }
  .g-md-5,
  .gy-md-5 {
    --ct-gutter-y: 4.5rem
  }
}

@media (min-width:992px) {
  .col-lg {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%
  }
  .row-cols-lg-auto>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .row-cols-lg-1>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .row-cols-lg-2>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .row-cols-lg-3>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%
  }
  .row-cols-lg-4>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .row-cols-lg-5>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%
  }
  .row-cols-lg-6>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%
  }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%
  }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%
  }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%
  }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%
  }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%
  }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%
  }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%
  }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%
  }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%
  }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .offset-lg-0 {
    margin-left: 0
  }
  .offset-lg-1 {
    margin-left: 8.33333333%
  }
  .offset-lg-2 {
    margin-left: 16.66666667%
  }
  .offset-lg-3 {
    margin-left: 25%
  }
  .offset-lg-4 {
    margin-left: 33.33333333%
  }
  .offset-lg-5 {
    margin-left: 41.66666667%
  }
  .offset-lg-6 {
    margin-left: 50%
  }
  .offset-lg-7 {
    margin-left: 58.33333333%
  }
  .offset-lg-8 {
    margin-left: 66.66666667%
  }
  .offset-lg-9 {
    margin-left: 75%
  }
  .offset-lg-10 {
    margin-left: 83.33333333%
  }
  .offset-lg-11 {
    margin-left: 91.66666667%
  }
  .g-lg-0,
  .gx-lg-0 {
    --ct-gutter-x: 0
  }
  .g-lg-0,
  .gy-lg-0 {
    --ct-gutter-y: 0
  }
  .g-lg-1,
  .gx-lg-1 {
    --ct-gutter-x: 0.375rem
  }
  .g-lg-1,
  .gy-lg-1 {
    --ct-gutter-y: 0.375rem
  }
  .g-lg-2,
  .gx-lg-2 {
    --ct-gutter-x: 0.75rem
  }
  .g-lg-2,
  .gy-lg-2 {
    --ct-gutter-y: 0.75rem
  }
  .g-lg-3,
  .gx-lg-3 {
    --ct-gutter-x: 1.5rem
  }
  .g-lg-3,
  .gy-lg-3 {
    --ct-gutter-y: 1.5rem
  }
  .g-lg-4,
  .gx-lg-4 {
    --ct-gutter-x: 2.25rem
  }
  .g-lg-4,
  .gy-lg-4 {
    --ct-gutter-y: 2.25rem
  }
  .g-lg-5,
  .gx-lg-5 {
    --ct-gutter-x: 4.5rem
  }
  .g-lg-5,
  .gy-lg-5 {
    --ct-gutter-y: 4.5rem
  }
}

@media (min-width:1200px) {
  .col-xl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%
  }
  .row-cols-xl-auto>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .row-cols-xl-1>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .row-cols-xl-2>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .row-cols-xl-3>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%
  }
  .row-cols-xl-4>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .row-cols-xl-5>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%
  }
  .row-cols-xl-6>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%
  }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%
  }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%
  }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%
  }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%
  }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%
  }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%
  }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%
  }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%
  }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%
  }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .offset-xl-0 {
    margin-left: 0
  }
  .offset-xl-1 {
    margin-left: 8.33333333%
  }
  .offset-xl-2 {
    margin-left: 16.66666667%
  }
  .offset-xl-3 {
    margin-left: 25%
  }
  .offset-xl-4 {
    margin-left: 33.33333333%
  }
  .offset-xl-5 {
    margin-left: 41.66666667%
  }
  .offset-xl-6 {
    margin-left: 50%
  }
  .offset-xl-7 {
    margin-left: 58.33333333%
  }
  .offset-xl-8 {
    margin-left: 66.66666667%
  }
  .offset-xl-9 {
    margin-left: 75%
  }
  .offset-xl-10 {
    margin-left: 83.33333333%
  }
  .offset-xl-11 {
    margin-left: 91.66666667%
  }
  .g-xl-0,
  .gx-xl-0 {
    --ct-gutter-x: 0
  }
  .g-xl-0,
  .gy-xl-0 {
    --ct-gutter-y: 0
  }
  .g-xl-1,
  .gx-xl-1 {
    --ct-gutter-x: 0.375rem
  }
  .g-xl-1,
  .gy-xl-1 {
    --ct-gutter-y: 0.375rem
  }
  .g-xl-2,
  .gx-xl-2 {
    --ct-gutter-x: 0.75rem
  }
  .g-xl-2,
  .gy-xl-2 {
    --ct-gutter-y: 0.75rem
  }
  .g-xl-3,
  .gx-xl-3 {
    --ct-gutter-x: 1.5rem
  }
  .g-xl-3,
  .gy-xl-3 {
    --ct-gutter-y: 1.5rem
  }
  .g-xl-4,
  .gx-xl-4 {
    --ct-gutter-x: 2.25rem
  }
  .g-xl-4,
  .gy-xl-4 {
    --ct-gutter-y: 2.25rem
  }
  .g-xl-5,
  .gx-xl-5 {
    --ct-gutter-x: 4.5rem
  }
  .g-xl-5,
  .gy-xl-5 {
    --ct-gutter-y: 4.5rem
  }
}

@media (min-width:1400px) {
  .col-xxl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%
  }
  .row-cols-xxl-auto>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .row-cols-xxl-1>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .row-cols-xxl-2>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .row-cols-xxl-3>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%
  }
  .row-cols-xxl-4>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .row-cols-xxl-5>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%
  }
  .row-cols-xxl-6>* {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.6666666667%
  }
  .col-xxl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto
  }
  .col-xxl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333333%
  }
  .col-xxl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66666667%
  }
  .col-xxl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%
  }
  .col-xxl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333333%
  }
  .col-xxl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66666667%
  }
  .col-xxl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%
  }
  .col-xxl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333333%
  }
  .col-xxl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66666667%
  }
  .col-xxl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%
  }
  .col-xxl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333333%
  }
  .col-xxl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66666667%
  }
  .col-xxl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%
  }
  .offset-xxl-0 {
    margin-left: 0
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%
  }
  .offset-xxl-3 {
    margin-left: 25%
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%
  }
  .offset-xxl-6 {
    margin-left: 50%
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%
  }
  .offset-xxl-9 {
    margin-left: 75%
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --ct-gutter-x: 0
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --ct-gutter-y: 0
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --ct-gutter-x: 0.375rem
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --ct-gutter-y: 0.375rem
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --ct-gutter-x: 0.75rem
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --ct-gutter-y: 0.75rem
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --ct-gutter-x: 1.5rem
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --ct-gutter-y: 1.5rem
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --ct-gutter-x: 2.25rem
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --ct-gutter-y: 2.25rem
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --ct-gutter-x: 4.5rem
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --ct-gutter-y: 4.5rem
  }
}

.table {
  --ct-table-color-type: initial;
  --ct-table-bg-type: initial;
  --ct-table-color-state: initial;
  --ct-table-bg-state: initial;
  --ct-table-color: var(--ct-body-color);
  --ct-table-bg: transparent;
  --ct-table-border-color: var(--ct-border-color);
  --ct-table-accent-bg: transparent;
  --ct-table-striped-color: var(--ct-body-color);
  --ct-table-striped-bg: rgba(var(--ct-tertiary-bg-rgb), 1);
  --ct-table-active-color: var(--ct-body-color);
  --ct-table-active-bg: rgba(var(--ct-tertiary-bg-rgb), 1);
  --ct-table-hover-color: var(--ct-body-color);
  --ct-table-hover-bg: rgba(var(--ct-tertiary-bg-rgb), 1);
  width: 100%;
  margin-bottom: 1.5rem;
  vertical-align: top;
  border-color: var(--ct-table-border-color)
}

.table>:not(caption)>*>* {
  padding: .95rem .95rem;
  color: var(--ct-table-color-state, var(--ct-table-color-type, var(--ct-table-color)));
  background-color: var(--ct-table-bg);
  border-bottom-width: var(--ct-border-width);
  -webkit-box-shadow: inset 0 0 0 9999px var(--ct-table-bg-state, var(--ct-table-bg-type, var(--ct-table-accent-bg)));
  box-shadow: inset 0 0 0 9999px var(--ct-table-bg-state, var(--ct-table-bg-type, var(--ct-table-accent-bg)))
}

.table>tbody {
  vertical-align: inherit
}

.table>thead {
  vertical-align: bottom
}

.table-group-divider {
  border-top: calc(var(--ct-border-width) * 2) solid currentcolor
}

.caption-top {
  caption-side: top
}

.table-sm>:not(caption)>*>* {
  padding: .5rem .5rem
}

.table-bordered>:not(caption)>* {
  border-width: var(--ct-border-width) 0
}

.table-bordered>:not(caption)>*>* {
  border-width: 0 var(--ct-border-width)
}

.table-borderless>:not(caption)>*>* {
  border-bottom-width: 0
}

.table-borderless>:not(:first-child) {
  border-top-width: 0
}

.table-striped>tbody>tr:nth-of-type(odd)>* {
  --ct-table-color-type: var(--ct-table-striped-color);
  --ct-table-bg-type: var(--ct-table-striped-bg)
}

.table-striped-columns>:not(caption)>tr>:nth-child(even) {
  --ct-table-color-type: var(--ct-table-striped-color);
  --ct-table-bg-type: var(--ct-table-striped-bg)
}

.table-active {
  --ct-table-color-state: var(--ct-table-active-color);
  --ct-table-bg-state: var(--ct-table-active-bg)
}

.table-hover>tbody>tr:hover>* {
  --ct-table-color-state: var(--ct-table-hover-color);
  --ct-table-bg-state: var(--ct-table-hover-bg)
}

.table-primary {
  --ct-table-color: #212529;
  --ct-table-bg: #d8dff7;
  --ct-table-border-color: #c6cce2;
  --ct-table-striped-bg: #212529;
  --ct-table-striped-color: #fff;
  --ct-table-active-bg: #212529;
  --ct-table-active-color: #fff;
  --ct-table-hover-bg: #212529;
  --ct-table-hover-color: #fff;
  color: var(--ct-table-color);
  border-color: var(--ct-table-border-color)
}

.table-secondary {
  --ct-table-color: #212529;
  --ct-table-bg: #e2e3e5;
  --ct-table-border-color: #cfd0d2;
  --ct-table-striped-bg: #212529;
  --ct-table-striped-color: #fff;
  --ct-table-active-bg: #212529;
  --ct-table-active-color: #fff;
  --ct-table-hover-bg: #212529;
  --ct-table-hover-color: #fff;
  color: var(--ct-table-color);
  border-color: var(--ct-table-border-color)
}

.table-success {
  --ct-table-color: #212529;
  --ct-table-bg: #daefe4;
  --ct-table-border-color: #c8dbd1;
  --ct-table-striped-bg: #212529;
  --ct-table-striped-color: #fff;
  --ct-table-active-bg: #212529;
  --ct-table-active-color: #fff;
  --ct-table-hover-bg: #212529;
  --ct-table-hover-color: #fff;
  color: var(--ct-table-color);
  border-color: var(--ct-table-border-color)
}

.table-info {
  --ct-table-color: #212529;
  --ct-table-bg: #d0edfb;
  --ct-table-border-color: #bfd9e6;
  --ct-table-striped-bg: #212529;
  --ct-table-striped-color: #fff;
  --ct-table-active-bg: #212529;
  --ct-table-active-color: #fff;
  --ct-table-hover-bg: #212529;
  --ct-table-hover-color: #fff;
  color: var(--ct-table-color);
  border-color: var(--ct-table-border-color)
}

.table-warning {
  --ct-table-color: #212529;
  --ct-table-bg: #fff3de;
  --ct-table-border-color: #e9decc;
  --ct-table-striped-bg: #212529;
  --ct-table-striped-color: #fff;
  --ct-table-active-bg: #212529;
  --ct-table-active-color: #fff;
  --ct-table-hover-bg: #212529;
  --ct-table-hover-color: #fff;
  color: var(--ct-table-color);
  border-color: var(--ct-table-border-color)
}

.table-danger {
  --ct-table-color: #212529;
  --ct-table-bg: #fcdde4;
  --ct-table-border-color: #e6cbd1;
  --ct-table-striped-bg: #212529;
  --ct-table-striped-color: #fff;
  --ct-table-active-bg: #212529;
  --ct-table-active-color: #fff;
  --ct-table-hover-bg: #212529;
  --ct-table-hover-color: #fff;
  color: var(--ct-table-color);
  border-color: var(--ct-table-border-color)
}

.table-light {
  --ct-table-color: #212529;
  --ct-table-bg: #f2f2f7;
  --ct-table-border-color: #dddee2;
  --ct-table-striped-bg: #212529;
  --ct-table-striped-color: #fff;
  --ct-table-active-bg: #212529;
  --ct-table-active-color: #fff;
  --ct-table-hover-bg: #212529;
  --ct-table-hover-color: #fff;
  color: var(--ct-table-color);
  border-color: var(--ct-table-border-color)
}

.table-dark {
  --ct-table-color: #fff;
  --ct-table-bg: #212529;
  --ct-table-border-color: #373b3e;
  --ct-table-striped-bg: white;
  --ct-table-striped-color: #212529;
  --ct-table-active-bg: white;
  --ct-table-active-color: #212529;
  --ct-table-hover-bg: white;
  --ct-table-hover-color: #212529;
  color: var(--ct-table-color);
  border-color: var(--ct-table-border-color)
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch
}

@media (max-width:575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
  }
}

@media (max-width:767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
  }
}

@media (max-width:991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
  }
}

@media (max-width:1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
  }
}

@media (max-width:1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
  }
}

.form-label {
  margin-bottom: .5rem
}

.col-form-label {
  padding-top: calc(.45rem + var(--ct-border-width));
  padding-bottom: calc(.45rem + var(--ct-border-width));
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5
}

.col-form-label-lg {
  padding-top: calc(.5rem + var(--ct-border-width));
  padding-bottom: calc(.5rem + var(--ct-border-width));
  font-size: 1.21625rem
}

.col-form-label-sm {
  padding-top: calc(.28rem + var(--ct-border-width));
  padding-bottom: calc(.28rem + var(--ct-border-width));
  font-size: .85rem
}

.form-text {
  margin-top: .25rem;
  font-size: .75rem;
  color: var(--ct-secondary-color)
}

.form-control {
  display: block;
  width: 100%;
  padding: .45rem .9rem;
  font-size: .875rem;
  font-weight: 400;
  line-height: 1.5;
  color: var(--ct-body-color);
  background-color: var(--ct-secondary-bg);
  background-clip: padding-box;
  border: var(--ct-border-width) solid var(--ct-border-color);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: .25rem;
  -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
  .form-control {
    -webkit-transition: none;
    transition: none
  }
}

.form-control[type=file] {
  overflow: hidden
}

.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer
}

.form-control:focus {
  color: var(--ct-body-color);
  background-color: var(--ct-secondary-bg);
  border-color: var(--ct-border-color-translucent);
  outline: 0;
  -webkit-box-shadow: none;
  box-shadow: none
}

.form-control::-webkit-date-and-time-value {
  min-width: 85px;
  height: 1.5em;
  margin: 0
}

.form-control::-webkit-datetime-edit {
  display: block;
  padding: 0
}

.form-control::-webkit-input-placeholder {
  color: var(--ct-secondary-color);
  opacity: 1
}

.form-control::-moz-placeholder {
  color: var(--ct-secondary-color);
  opacity: 1
}

.form-control:-ms-input-placeholder {
  color: var(--ct-secondary-color);
  opacity: 1
}

.form-control::-ms-input-placeholder {
  color: var(--ct-secondary-color);
  opacity: 1
}

.form-control::placeholder {
  color: var(--ct-secondary-color);
  opacity: 1
}

.form-control:disabled {
  background-color: var(--ct-tertiary-bg);
  opacity: 1
}

.form-control::-webkit-file-upload-button {
  padding: .45rem .9rem;
  margin: -.45rem -.9rem;
  -webkit-margin-end: .9rem;
  margin-inline-end: .9rem;
  color: var(--ct-body-color);
  background-color: var(--ct-tertiary-bg);
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: var(--ct-border-width);
  border-radius: 0;
  -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
}

.form-control::file-selector-button {
  padding: .45rem .9rem;
  margin: -.45rem -.9rem;
  -webkit-margin-end: .9rem;
  margin-inline-end: .9rem;
  color: var(--ct-body-color);
  background-color: var(--ct-tertiary-bg);
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: var(--ct-border-width);
  border-radius: 0;
  -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
  .form-control::-webkit-file-upload-button {
    -webkit-transition: none;
    transition: none
  }
  .form-control::file-selector-button {
    -webkit-transition: none;
    transition: none
  }
}

.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: var(--ct-secondary-bg)
}

.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: var(--ct-secondary-bg)
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: .45rem 0;
  margin-bottom: 0;
  line-height: 1.5;
  color: var(--ct-body-color);
  background-color: transparent;
  border: solid transparent;
  border-width: var(--ct-border-width) 0
}

.form-control-plaintext:focus {
  outline: 0
}

.form-control-plaintext.form-control-lg,
.form-control-plaintext.form-control-sm {
  padding-right: 0;
  padding-left: 0
}

.form-control-sm {
  min-height: calc(1.5em + .56rem + calc(var(--ct-border-width) * 2));
  padding: .28rem .8rem;
  font-size: .85rem;
  border-radius: .25rem
}

.form-control-sm::-webkit-file-upload-button {
  padding: .28rem .8rem;
  margin: -.28rem -.8rem;
  -webkit-margin-end: .8rem;
  margin-inline-end: .8rem
}

.form-control-sm::file-selector-button {
  padding: .28rem .8rem;
  margin: -.28rem -.8rem;
  -webkit-margin-end: .8rem;
  margin-inline-end: .8rem
}

.form-control-lg {
  min-height: calc(1.5em + 1rem + calc(var(--ct-border-width) * 2));
  padding: .5rem 1rem;
  font-size: 1.21625rem;
  border-radius: .375rem
}

.form-control-lg::-webkit-file-upload-button {
  padding: .5rem 1rem;
  margin: -.5rem -1rem;
  -webkit-margin-end: 1rem;
  margin-inline-end: 1rem
}

.form-control-lg::file-selector-button {
  padding: .5rem 1rem;
  margin: -.5rem -1rem;
  -webkit-margin-end: 1rem;
  margin-inline-end: 1rem
}

textarea.form-control {
  min-height: calc(1.5em + .9rem + calc(var(--ct-border-width) * 2))
}

textarea.form-control-sm {
  min-height: calc(1.5em + .56rem + calc(var(--ct-border-width) * 2))
}

textarea.form-control-lg {
  min-height: calc(1.5em + 1rem + calc(var(--ct-border-width) * 2))
}

.form-control-color {
  width: 3rem;
  height: calc(1.5em + .9rem + calc(var(--ct-border-width) * 2));
  padding: .45rem
}

.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer
}

.form-control-color::-moz-color-swatch {
  border: 0 !important;
  border-radius: .25rem
}

.form-control-color::-webkit-color-swatch {
  border: 0 !important;
  border-radius: .25rem
}

.form-control-color.form-control-sm {
  height: calc(1.5em + .56rem + calc(var(--ct-border-width) * 2))
}

.form-control-color.form-control-lg {
  height: calc(1.5em + 1rem + calc(var(--ct-border-width) * 2))
}

.form-select {
  --ct-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
  display: block;
  width: 100%;
  padding: .45rem 2.7rem .45rem .9rem;
  font-size: .875rem;
  font-weight: 400;
  line-height: 1.5;
  color: var(--ct-body-color);
  background-color: var(--ct-secondary-bg);
  background-image: var(--ct-form-select-bg-img), var(--ct-form-select-bg-icon, none);
  background-repeat: no-repeat;
  background-position: right .9rem center;
  background-size: 14px 10px;
  border: var(--ct-border-width) solid var(--ct-border-color);
  border-radius: .25rem;
  -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none
}

@media (prefers-reduced-motion:reduce) {
  .form-select {
    -webkit-transition: none;
    transition: none
  }
}

.form-select:focus {
  border-color: var(--ct-border-color-translucent);
  outline: 0;
  -webkit-box-shadow: none;
  box-shadow: none
}

.form-select[multiple],
.form-select[size]:not([size="1"]) {
  padding-right: .9rem;
  background-image: none
}

.form-select:disabled {
  background-color: var(--ct-tertiary-bg)
}

.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 var(--ct-body-color)
}

.form-select-sm {
  padding-top: .28rem;
  padding-bottom: .28rem;
  padding-left: .8rem;
  font-size: .85rem;
  border-radius: .25rem
}

.form-select-lg {
  padding-top: .5rem;
  padding-bottom: .5rem;
  padding-left: 1rem;
  font-size: 1.21625rem;
  border-radius: .375rem
}

[data-bs-theme=dark] .form-select {
  --ct-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23aab8c5' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e")
}

.form-check {
  display: block;
  min-height: 1.3125rem;
  padding-left: 1.635em;
  margin-bottom: 0
}

.form-check .form-check-input {
  float: left;
  margin-left: -1.635em
}

.form-check-reverse {
  padding-right: 1.635em;
  padding-left: 0;
  text-align: right
}

.form-check-reverse .form-check-input {
  float: right;
  margin-right: -1.635em;
  margin-left: 0
}

.form-check-input {
  --ct-form-check-bg: var(--ct-secondary-bg);
  width: 1.135em;
  height: 1.135em;
  margin-top: .1825em;
  vertical-align: top;
  background-color: var(--ct-form-check-bg);
  background-image: var(--ct-form-check-bg-image);
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: var(--ct-border-width) solid var(--ct-border-color-translucent);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-print-color-adjust: exact;
  print-color-adjust: exact
}

.form-check-input[type=checkbox] {
  border-radius: .25em
}

.form-check-input[type=radio] {
  border-radius: 50%
}

.form-check-input:active {
  -webkit-filter: brightness(90%);
  filter: brightness(90%)
}

.form-check-input:focus {
  border-color: var(--ct-border-color-translucent);
  outline: 0;
  -webkit-box-shadow: none;
  box-shadow: none
}

.form-check-input:checked {
  background-color: #3e60d5;
  border-color: #3e60d5
}

.form-check-input:checked[type=checkbox] {
  --ct-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e")
}

.form-check-input:checked[type=radio] {
  --ct-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e")
}

.form-check-input[type=checkbox]:indeterminate {
  background-color: #3e60d5;
  border-color: #3e60d5;
  --ct-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e")
}

.form-check-input:disabled {
  pointer-events: none;
  -webkit-filter: none;
  filter: none;
  opacity: .5
}

.form-check-input:disabled~.form-check-label,
.form-check-input[disabled]~.form-check-label {
  cursor: default;
  opacity: .5
}

.form-switch {
  padding-left: 2.5em
}

.form-switch .form-check-input {
  --ct-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  width: 2em;
  margin-left: -2.5em;
  background-image: var(--ct-form-switch-bg);
  background-position: left center;
  border-radius: 2em;
  -webkit-transition: background-position .15s ease-in-out;
  transition: background-position .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
  .form-switch .form-check-input {
    -webkit-transition: none;
    transition: none
  }
}

.form-switch .form-check-input:focus {
  --ct-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='var%28--ct-border-color-translucent%29'/%3e%3c/svg%3e")
}

.form-switch .form-check-input:checked {
  background-position: right center;
  --ct-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
}

.form-switch.form-check-reverse {
  padding-right: 2.5em;
  padding-left: 0
}

.form-switch.form-check-reverse .form-check-input {
  margin-right: -2.5em;
  margin-left: 0
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none
}

.btn-check:disabled+.btn,
.btn-check[disabled]+.btn {
  pointer-events: none;
  -webkit-filter: none;
  filter: none;
  opacity: .65
}

[data-bs-theme=dark] .form-switch .form-check-input:not(:checked):not(:focus) {
  --ct-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.25%29'/%3e%3c/svg%3e")
}

.form-range {
  width: 100%;
  height: 1.3rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none
}

.form-range:focus {
  outline: 0
}

.form-range:focus::-webkit-slider-thumb {
  -webkit-box-shadow: 0 0 0 1px #f2f2f7, none;
  box-shadow: 0 0 0 1px #f2f2f7, none
}

.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #f2f2f7, none
}

.form-range::-moz-focus-outer {
  border: 0
}

.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -.25rem;
  background-color: #3e60d5;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  -webkit-appearance: none;
  appearance: none
}

@media (prefers-reduced-motion:reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none
  }
}

.form-range::-webkit-slider-thumb:active {
  background-color: #c5cff2
}

.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: .5rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--ct-body-bg);
  border-color: transparent;
  border-radius: 1rem
}

.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #3e60d5;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  -moz-appearance: none;
  appearance: none
}

@media (prefers-reduced-motion:reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none
  }
}

.form-range::-moz-range-thumb:active {
  background-color: #c5cff2
}

.form-range::-moz-range-track {
  width: 100%;
  height: .5rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--ct-body-bg);
  border-color: transparent;
  border-radius: 1rem
}

.form-range:disabled {
  pointer-events: none
}

.form-range:disabled::-webkit-slider-thumb {
  background-color: var(--ct-secondary-color)
}

.form-range:disabled::-moz-range-thumb {
  background-color: var(--ct-secondary-color)
}

.form-floating {
  position: relative
}

.form-floating>.form-control,
.form-floating>.form-control-plaintext,
.form-floating>.form-select {
  height: calc(3.5rem + calc(var(--ct-border-width) * 2));
  min-height: calc(3.5rem + calc(var(--ct-border-width) * 2));
  line-height: 1.25
}

.form-floating>label {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  height: 100%;
  padding: 1rem .9rem;
  overflow: hidden;
  text-align: start;
  text-overflow: ellipsis;
  white-space: nowrap;
  pointer-events: none;
  border: var(--ct-border-width) solid transparent;
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
  -webkit-transition: opacity .1s ease-in-out, -webkit-transform .1s ease-in-out;
  transition: opacity .1s ease-in-out, -webkit-transform .1s ease-in-out;
  transition: opacity .1s ease-in-out, transform .1s ease-in-out;
  transition: opacity .1s ease-in-out, transform .1s ease-in-out, -webkit-transform .1s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
  .form-floating>label {
    -webkit-transition: none;
    transition: none
  }
}

.form-floating>.form-control,
.form-floating>.form-control-plaintext {
  padding: 1rem .9rem
}

.form-floating>.form-control-plaintext::-webkit-input-placeholder,
.form-floating>.form-control::-webkit-input-placeholder {
  color: transparent
}

.form-floating>.form-control-plaintext::-moz-placeholder,
.form-floating>.form-control::-moz-placeholder {
  color: transparent
}

.form-floating>.form-control-plaintext:-ms-input-placeholder,
.form-floating>.form-control:-ms-input-placeholder {
  color: transparent
}

.form-floating>.form-control-plaintext::-ms-input-placeholder,
.form-floating>.form-control::-ms-input-placeholder {
  color: transparent
}

.form-floating>.form-control-plaintext::placeholder,
.form-floating>.form-control::placeholder {
  color: transparent
}

.form-floating>.form-control-plaintext:not(:-moz-placeholder-shown),
.form-floating>.form-control:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: .625rem
}

.form-floating>.form-control-plaintext:not(:-ms-input-placeholder),
.form-floating>.form-control:not(:-ms-input-placeholder) {
  padding-top: 1.625rem;
  padding-bottom: .625rem
}

.form-floating>.form-control-plaintext:focus,
.form-floating>.form-control-plaintext:not(:placeholder-shown),
.form-floating>.form-control:focus,
.form-floating>.form-control:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: .625rem
}

.form-floating>.form-control-plaintext:-webkit-autofill,
.form-floating>.form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: .625rem
}

.form-floating>.form-select {
  padding-top: 1.625rem;
  padding-bottom: .625rem
}

.form-floating>.form-control:not(:-moz-placeholder-shown)~label {
  color: rgba(var(--ct-body-color-rgb), .65);
  transform: scale(.85) translateY(-.5rem) translateX(.15rem)
}

.form-floating>.form-control:not(:-ms-input-placeholder)~label {
  color: rgba(var(--ct-body-color-rgb), .65);
  transform: scale(.85) translateY(-.5rem) translateX(.15rem)
}

.form-floating>.form-control-plaintext~label,
.form-floating>.form-control:focus~label,
.form-floating>.form-control:not(:placeholder-shown)~label,
.form-floating>.form-select~label {
  color: rgba(var(--ct-body-color-rgb), .65);
  -webkit-transform: scale(.85) translateY(-.5rem) translateX(.15rem);
  transform: scale(.85) translateY(-.5rem) translateX(.15rem)
}

.form-floating>.form-control:not(:-moz-placeholder-shown)~label::after {
  position: absolute;
  inset: 1rem .45rem;
  z-index: -1;
  height: 1.875em;
  content: "";
  background-color: var(--ct-secondary-bg);
  border-radius: .25rem
}

.form-floating>.form-control:not(:-ms-input-placeholder)~label::after {
  position: absolute;
  inset: 1rem .45rem;
  z-index: -1;
  height: 1.875em;
  content: "";
  background-color: var(--ct-secondary-bg);
  border-radius: .25rem
}

.form-floating>.form-control-plaintext~label::after,
.form-floating>.form-control:focus~label::after,
.form-floating>.form-control:not(:placeholder-shown)~label::after,
.form-floating>.form-select~label::after {
  position: absolute;
  inset: 1rem .45rem;
  z-index: -1;
  height: 1.875em;
  content: "";
  background-color: var(--ct-secondary-bg);
  border-radius: .25rem
}

.form-floating>.form-control:-webkit-autofill~label {
  color: rgba(var(--ct-body-color-rgb), .65);
  -webkit-transform: scale(.85) translateY(-.5rem) translateX(.15rem);
  transform: scale(.85) translateY(-.5rem) translateX(.15rem)
}

.form-floating>.form-control-plaintext~label {
  border-width: var(--ct-border-width) 0
}

.form-floating>:disabled~label {
  color: #6c757d
}

.form-floating>:disabled~label::after {
  background-color: var(--ct-tertiary-bg)
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%
}

.input-group>.form-control,
.input-group>.form-floating,
.input-group>.form-select {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0
}

.input-group>.form-control:focus,
.input-group>.form-floating:focus-within,
.input-group>.form-select:focus {
  z-index: 5
}

.input-group .btn {
  position: relative;
  z-index: 2
}

.input-group .btn:focus {
  z-index: 5
}

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: .45rem .9rem;
  font-size: .875rem;
  font-weight: 400;
  line-height: 1.5;
  color: var(--ct-body-color);
  text-align: center;
  white-space: nowrap;
  background-color: var(--ct-tertiary-bg);
  border: var(--ct-border-width) solid var(--ct-border-color);
  border-radius: .25rem
}

.input-group-lg>.btn,
.input-group-lg>.form-control,
.input-group-lg>.form-select,
.input-group-lg>.input-group-text {
  padding: .5rem 1rem;
  font-size: 1.21625rem;
  border-radius: .375rem
}

.input-group-sm>.btn,
.input-group-sm>.form-control,
.input-group-sm>.form-select,
.input-group-sm>.input-group-text {
  padding: .28rem .8rem;
  font-size: .85rem;
  border-radius: .25rem
}

.input-group-lg>.form-select,
.input-group-sm>.form-select {
  padding-right: 3.6rem
}

.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select,
.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0
}

.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select,
.input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0
}

.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: calc(var(--ct-border-width) * -1);
  border-top-left-radius: 0;
  border-bottom-left-radius: 0
}

.input-group>.form-floating:not(:first-child)>.form-control,
.input-group>.form-floating:not(:first-child)>.form-select {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: .25rem;
  font-size: .75rem;
  color: var(--ct-form-valid-color)
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .375rem .75rem;
  margin-top: .1rem;
  font-size: .85rem;
  color: #fff;
  background-color: var(--ct-success);
  border-radius: var(--ct-border-radius)
}

.is-valid~.valid-feedback,
.is-valid~.valid-tooltip,
.was-validated :valid~.valid-feedback,
.was-validated :valid~.valid-tooltip {
  display: block
}

.form-control.is-valid,
.was-validated .form-control:valid {
  border-color: var(--ct-form-valid-border-color);
  padding-right: calc(1.5em + .9rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2347ad77' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(.375em + .225rem) center;
  background-size: calc(.75em + .45rem) calc(.75em + .45rem)
}

.form-control.is-valid:focus,
.was-validated .form-control:valid:focus {
  border-color: var(--ct-form-valid-border-color);
  -webkit-box-shadow: 0 0 0 .15rem rgba(var(--ct-success-rgb), .25);
  box-shadow: 0 0 0 .15rem rgba(var(--ct-success-rgb), .25)
}

.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
  padding-right: calc(1.5em + .9rem);
  background-position: top calc(.375em + .225rem) right calc(.375em + .225rem)
}

.form-select.is-valid,
.was-validated .form-select:valid {
  border-color: var(--ct-form-valid-border-color)
}

.form-select.is-valid:not([multiple]):not([size]),
.form-select.is-valid:not([multiple])[size="1"],
.was-validated .form-select:valid:not([multiple]):not([size]),
.was-validated .form-select:valid:not([multiple])[size="1"] {
  --ct-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2347ad77' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  padding-right: 4.95rem;
  background-position: right .9rem center, center right 2.7rem;
  background-size: 14px 10px, calc(.75em + .45rem) calc(.75em + .45rem)
}

.form-select.is-valid:focus,
.was-validated .form-select:valid:focus {
  border-color: var(--ct-form-valid-border-color);
  -webkit-box-shadow: 0 0 0 .15rem rgba(var(--ct-success-rgb), .25);
  box-shadow: 0 0 0 .15rem rgba(var(--ct-success-rgb), .25)
}

.form-control-color.is-valid,
.was-validated .form-control-color:valid {
  width: calc(3rem + calc(1.5em + .9rem))
}

.form-check-input.is-valid,
.was-validated .form-check-input:valid {
  border-color: var(--ct-form-valid-border-color)
}

.form-check-input.is-valid:checked,
.was-validated .form-check-input:valid:checked {
  background-color: var(--ct-form-valid-color)
}

.form-check-input.is-valid:focus,
.was-validated .form-check-input:valid:focus {
  -webkit-box-shadow: 0 0 0 .15rem rgba(var(--ct-success-rgb), .25);
  box-shadow: 0 0 0 .15rem rgba(var(--ct-success-rgb), .25)
}

.form-check-input.is-valid~.form-check-label,
.was-validated .form-check-input:valid~.form-check-label {
  color: var(--ct-form-valid-color)
}

.form-check-inline .form-check-input~.valid-feedback {
  margin-left: .5em
}

.input-group>.form-control:not(:focus).is-valid,
.input-group>.form-floating:not(:focus-within).is-valid,
.input-group>.form-select:not(:focus).is-valid,
.was-validated .input-group>.form-control:not(:focus):valid,
.was-validated .input-group>.form-floating:not(:focus-within):valid,
.was-validated .input-group>.form-select:not(:focus):valid {
  z-index: 3
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: .25rem;
  font-size: .75rem;
  color: var(--ct-form-invalid-color)
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .375rem .75rem;
  margin-top: .1rem;
  font-size: .85rem;
  color: #fff;
  background-color: var(--ct-danger);
  border-radius: var(--ct-border-radius)
}

.is-invalid~.invalid-feedback,
.is-invalid~.invalid-tooltip,
.was-validated :invalid~.invalid-feedback,
.was-validated :invalid~.invalid-tooltip {
  display: block
}

.form-control.is-invalid,
.was-validated .form-control:invalid {
  border-color: var(--ct-form-invalid-border-color);
  padding-right: calc(1.5em + .9rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23f15776'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23f15776' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(.375em + .225rem) center;
  background-size: calc(.75em + .45rem) calc(.75em + .45rem)
}

.form-control.is-invalid:focus,
.was-validated .form-control:invalid:focus {
  border-color: var(--ct-form-invalid-border-color);
  -webkit-box-shadow: 0 0 0 .15rem rgba(var(--ct-danger-rgb), .25);
  box-shadow: 0 0 0 .15rem rgba(var(--ct-danger-rgb), .25)
}

.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
  padding-right: calc(1.5em + .9rem);
  background-position: top calc(.375em + .225rem) right calc(.375em + .225rem)
}

.form-select.is-invalid,
.was-validated .form-select:invalid {
  border-color: var(--ct-form-invalid-border-color)
}

.form-select.is-invalid:not([multiple]):not([size]),
.form-select.is-invalid:not([multiple])[size="1"],
.was-validated .form-select:invalid:not([multiple]):not([size]),
.was-validated .form-select:invalid:not([multiple])[size="1"] {
  --ct-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23f15776'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23f15776' stroke='none'/%3e%3c/svg%3e");
  padding-right: 4.95rem;
  background-position: right .9rem center, center right 2.7rem;
  background-size: 14px 10px, calc(.75em + .45rem) calc(.75em + .45rem)
}

.form-select.is-invalid:focus,
.was-validated .form-select:invalid:focus {
  border-color: var(--ct-form-invalid-border-color);
  -webkit-box-shadow: 0 0 0 .15rem rgba(var(--ct-danger-rgb), .25);
  box-shadow: 0 0 0 .15rem rgba(var(--ct-danger-rgb), .25)
}

.form-control-color.is-invalid,
.was-validated .form-control-color:invalid {
  width: calc(3rem + calc(1.5em + .9rem))
}

.form-check-input.is-invalid,
.was-validated .form-check-input:invalid {
  border-color: var(--ct-form-invalid-border-color)
}

.form-check-input.is-invalid:checked,
.was-validated .form-check-input:invalid:checked {
  background-color: var(--ct-form-invalid-color)
}

.form-check-input.is-invalid:focus,
.was-validated .form-check-input:invalid:focus {
  -webkit-box-shadow: 0 0 0 .15rem rgba(var(--ct-danger-rgb), .25);
  box-shadow: 0 0 0 .15rem rgba(var(--ct-danger-rgb), .25)
}

.form-check-input.is-invalid~.form-check-label,
.was-validated .form-check-input:invalid~.form-check-label {
  color: var(--ct-form-invalid-color)
}

.form-check-inline .form-check-input~.invalid-feedback {
  margin-left: .5em
}

.input-group>.form-control:not(:focus).is-invalid,
.input-group>.form-floating:not(:focus-within).is-invalid,
.input-group>.form-select:not(:focus).is-invalid,
.was-validated .input-group>.form-control:not(:focus):invalid,
.was-validated .input-group>.form-floating:not(:focus-within):invalid,
.was-validated .input-group>.form-select:not(:focus):invalid {
  z-index: 4
}

.btn {
  --ct-btn-padding-x: 0.9rem;
  --ct-btn-padding-y: 0.45rem;
  --ct-btn-font-size: 0.875rem;
  --ct-btn-font-weight: 400;
  --ct-btn-line-height: 1.5;
  --ct-btn-color: var(--ct-body-color);
  --ct-btn-bg: transparent;
  --ct-btn-border-width: var(--ct-border-width);
  --ct-btn-border-color: transparent;
  --ct-btn-border-radius: var(--ct-border-radius-sm);
  --ct-btn-hover-border-color: transparent;
  --ct-btn-box-shadow: 0px 2px 6px 0px;
  --ct-btn-disabled-opacity: 0.65;
  --ct-btn-focus-box-shadow: 0 0 0 0.15rem rgba(var(--ct-btn-focus-shadow-rgb), .5);
  display: inline-block;
  padding: var(--ct-btn-padding-y) var(--ct-btn-padding-x);
  font-family: var(--ct-btn-font-family);
  font-size: var(--ct-btn-font-size);
  font-weight: var(--ct-btn-font-weight);
  line-height: var(--ct-btn-line-height);
  color: var(--ct-btn-color);
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: var(--ct-btn-border-width) solid var(--ct-btn-border-color);
  border-radius: var(--ct-btn-border-radius);
  background-color: var(--ct-btn-bg);
  -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
  .btn {
    -webkit-transition: none;
    transition: none
  }
}

.btn:hover {
  color: var(--ct-btn-hover-color);
  background-color: var(--ct-btn-hover-bg);
  border-color: var(--ct-btn-hover-border-color)
}

.btn-check+.btn:hover {
  color: var(--ct-btn-color);
  background-color: var(--ct-btn-bg);
  border-color: var(--ct-btn-border-color)
}

.btn:focus-visible {
  color: var(--ct-btn-hover-color);
  background-color: var(--ct-btn-hover-bg);
  border-color: var(--ct-btn-hover-border-color);
  outline: 0;
  -webkit-box-shadow: var(--ct-btn-focus-box-shadow);
  box-shadow: var(--ct-btn-focus-box-shadow)
}

.btn-check:focus-visible+.btn {
  border-color: var(--ct-btn-hover-border-color);
  outline: 0;
  -webkit-box-shadow: var(--ct-btn-focus-box-shadow);
  box-shadow: var(--ct-btn-focus-box-shadow)
}

.btn-check:checked+.btn,
.btn.active,
.btn.show,
.btn:first-child:active,
:not(.btn-check)+.btn:active {
  color: var(--ct-btn-active-color);
  background-color: var(--ct-btn-active-bg);
  border-color: var(--ct-btn-active-border-color)
}

.btn-check:checked+.btn:focus-visible,
.btn.active:focus-visible,
.btn.show:focus-visible,
.btn:first-child:active:focus-visible,
:not(.btn-check)+.btn:active:focus-visible {
  -webkit-box-shadow: var(--ct-btn-focus-box-shadow);
  box-shadow: var(--ct-btn-focus-box-shadow)
}

.btn.disabled,
.btn:disabled,
fieldset:disabled .btn {
  color: var(--ct-btn-disabled-color);
  pointer-events: none;
  background-color: var(--ct-btn-disabled-bg);
  border-color: var(--ct-btn-disabled-border-color);
  opacity: var(--ct-btn-disabled-opacity)
}

.btn-primary {
  --ct-btn-color: #fff;
  --ct-btn-bg: #3e60d5;
  --ct-btn-border-color: #3e60d5;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #3959c5;
  --ct-btn-hover-border-color: #3959c5;
  --ct-btn-focus-shadow-rgb: 91, 120, 219;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #3959c5;
  --ct-btn-active-border-color: #3959c5;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #fff;
  --ct-btn-disabled-bg: #3e60d5;
  --ct-btn-disabled-border-color: #3e60d5
}

.btn-secondary {
  --ct-btn-color: #fff;
  --ct-btn-bg: #6c757d;
  --ct-btn-border-color: #6c757d;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #646c74;
  --ct-btn-hover-border-color: #646c74;
  --ct-btn-focus-shadow-rgb: 130, 138, 145;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #646c74;
  --ct-btn-active-border-color: #646c74;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #fff;
  --ct-btn-disabled-bg: #6c757d;
  --ct-btn-disabled-border-color: #6c757d
}

.btn-success {
  --ct-btn-color: #fff;
  --ct-btn-bg: #47ad77;
  --ct-btn-border-color: #47ad77;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #42a06e;
  --ct-btn-hover-border-color: #42a06e;
  --ct-btn-focus-shadow-rgb: 99, 185, 139;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #42a06e;
  --ct-btn-active-border-color: #42a06e;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #fff;
  --ct-btn-disabled-bg: #47ad77;
  --ct-btn-disabled-border-color: #47ad77
}

.btn-info {
  --ct-btn-color: #fff;
  --ct-btn-bg: #16a7e9;
  --ct-btn-border-color: #16a7e9;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #149ad8;
  --ct-btn-hover-border-color: #149ad8;
  --ct-btn-focus-shadow-rgb: 57, 180, 236;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #149ad8;
  --ct-btn-active-border-color: #149ad8;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #fff;
  --ct-btn-disabled-bg: #16a7e9;
  --ct-btn-disabled-border-color: #16a7e9
}

.btn-warning {
  --ct-btn-color: #fff;
  --ct-btn-bg: #ffc35a;
  --ct-btn-border-color: #ffc35a;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #ecb453;
  --ct-btn-hover-border-color: #ecb453;
  --ct-btn-focus-shadow-rgb: 255, 204, 115;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #ecb453;
  --ct-btn-active-border-color: #ecb453;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #fff;
  --ct-btn-disabled-bg: #ffc35a;
  --ct-btn-disabled-border-color: #ffc35a
}

.btn-danger {
  --ct-btn-color: #fff;
  --ct-btn-bg: #f15776;
  --ct-btn-border-color: #f15776;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #df506d;
  --ct-btn-hover-border-color: #df506d;
  --ct-btn-focus-shadow-rgb: 243, 112, 139;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #df506d;
  --ct-btn-active-border-color: #df506d;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #fff;
  --ct-btn-disabled-bg: #f15776;
  --ct-btn-disabled-border-color: #f15776
}

.btn-light {
  --ct-btn-color: #212529;
  --ct-btn-bg: #f2f2f7;
  --ct-btn-border-color: #f2f2f7;
  --ct-btn-hover-color: #212529;
  --ct-btn-hover-bg: #e0e0e4;
  --ct-btn-hover-border-color: #e0e0e4;
  --ct-btn-focus-shadow-rgb: 211, 211, 216;
  --ct-btn-active-color: #212529;
  --ct-btn-active-bg: #e0e0e4;
  --ct-btn-active-border-color: #e0e0e4;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #212529;
  --ct-btn-disabled-bg: #f2f2f7;
  --ct-btn-disabled-border-color: #f2f2f7
}

.btn-dark {
  --ct-btn-color: #fff;
  --ct-btn-bg: #212529;
  --ct-btn-border-color: #212529;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #424649;
  --ct-btn-hover-border-color: #373b3e;
  --ct-btn-focus-shadow-rgb: 66, 70, 73;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #424649;
  --ct-btn-active-border-color: #373b3e;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #fff;
  --ct-btn-disabled-bg: #212529;
  --ct-btn-disabled-border-color: #212529
}

.btn-outline-primary {
  --ct-btn-color: #3e60d5;
  --ct-btn-border-color: #3e60d5;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #3e60d5;
  --ct-btn-hover-border-color: #3e60d5;
  --ct-btn-focus-shadow-rgb: 62, 96, 213;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #3e60d5;
  --ct-btn-active-border-color: #3e60d5;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #3e60d5;
  --ct-btn-disabled-bg: transparent;
  --ct-btn-disabled-border-color: #3e60d5;
  --ct-gradient: none
}

.btn-outline-secondary {
  --ct-btn-color: #6c757d;
  --ct-btn-border-color: #6c757d;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #6c757d;
  --ct-btn-hover-border-color: #6c757d;
  --ct-btn-focus-shadow-rgb: 108, 117, 125;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #6c757d;
  --ct-btn-active-border-color: #6c757d;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #6c757d;
  --ct-btn-disabled-bg: transparent;
  --ct-btn-disabled-border-color: #6c757d;
  --ct-gradient: none
}

.btn-outline-success {
  --ct-btn-color: #47ad77;
  --ct-btn-border-color: #47ad77;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #47ad77;
  --ct-btn-hover-border-color: #47ad77;
  --ct-btn-focus-shadow-rgb: 71, 173, 119;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #47ad77;
  --ct-btn-active-border-color: #47ad77;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #47ad77;
  --ct-btn-disabled-bg: transparent;
  --ct-btn-disabled-border-color: #47ad77;
  --ct-gradient: none
}

.btn-outline-info {
  --ct-btn-color: #16a7e9;
  --ct-btn-border-color: #16a7e9;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #16a7e9;
  --ct-btn-hover-border-color: #16a7e9;
  --ct-btn-focus-shadow-rgb: 22, 167, 233;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #16a7e9;
  --ct-btn-active-border-color: #16a7e9;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #16a7e9;
  --ct-btn-disabled-bg: transparent;
  --ct-btn-disabled-border-color: #16a7e9;
  --ct-gradient: none
}

.btn-outline-warning {
  --ct-btn-color: #ffc35a;
  --ct-btn-border-color: #ffc35a;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #ffc35a;
  --ct-btn-hover-border-color: #ffc35a;
  --ct-btn-focus-shadow-rgb: 255, 195, 90;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #ffc35a;
  --ct-btn-active-border-color: #ffc35a;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #ffc35a;
  --ct-btn-disabled-bg: transparent;
  --ct-btn-disabled-border-color: #ffc35a;
  --ct-gradient: none
}

.btn-outline-danger {
  --ct-btn-color: #f15776;
  --ct-btn-border-color: #f15776;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #f15776;
  --ct-btn-hover-border-color: #f15776;
  --ct-btn-focus-shadow-rgb: 241, 87, 118;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #f15776;
  --ct-btn-active-border-color: #f15776;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #f15776;
  --ct-btn-disabled-bg: transparent;
  --ct-btn-disabled-border-color: #f15776;
  --ct-gradient: none
}

.btn-outline-light {
  --ct-btn-color: #f2f2f7;
  --ct-btn-border-color: #f2f2f7;
  --ct-btn-hover-color: #212529;
  --ct-btn-hover-bg: #f2f2f7;
  --ct-btn-hover-border-color: #f2f2f7;
  --ct-btn-focus-shadow-rgb: 242, 242, 247;
  --ct-btn-active-color: #212529;
  --ct-btn-active-bg: #f2f2f7;
  --ct-btn-active-border-color: #f2f2f7;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #f2f2f7;
  --ct-btn-disabled-bg: transparent;
  --ct-btn-disabled-border-color: #f2f2f7;
  --ct-gradient: none
}

.btn-outline-dark {
  --ct-btn-color: #212529;
  --ct-btn-border-color: #212529;
  --ct-btn-hover-color: #fff;
  --ct-btn-hover-bg: #212529;
  --ct-btn-hover-border-color: #212529;
  --ct-btn-focus-shadow-rgb: 33, 37, 41;
  --ct-btn-active-color: #fff;
  --ct-btn-active-bg: #212529;
  --ct-btn-active-border-color: #212529;
  --ct-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --ct-btn-disabled-color: #212529;
  --ct-btn-disabled-bg: transparent;
  --ct-btn-disabled-border-color: #212529;
  --ct-gradient: none
}

.btn-link {
  --ct-btn-font-weight: 400;
  --ct-btn-color: var(--ct-link-color);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: transparent;
  --ct-btn-hover-color: var(--ct-link-hover-color);
  --ct-btn-hover-border-color: transparent;
  --ct-btn-active-color: var(--ct-link-hover-color);
  --ct-btn-active-border-color: transparent;
  --ct-btn-disabled-color: #6c757d;
  --ct-btn-disabled-border-color: transparent;
  --ct-btn-box-shadow: 0 0 0 #000;
  --ct-btn-focus-shadow-rgb: 91, 120, 219;
  text-decoration: none
}

.btn-link:focus-visible {
  color: var(--ct-btn-color)
}

.btn-link:hover {
  color: var(--ct-btn-hover-color)
}

.btn-group-lg>.btn,
.btn-lg {
  --ct-btn-padding-y: 0.5rem;
  --ct-btn-padding-x: 1rem;
  --ct-btn-font-size: 1.21625rem;
  --ct-btn-border-radius: var(--ct-border-radius)
}

.btn-group-sm>.btn,
.btn-sm {
  --ct-btn-padding-y: 0.28rem;
  --ct-btn-padding-x: 0.8rem;
  --ct-btn-font-size: 0.85rem;
  --ct-btn-border-radius: var(--ct-border-radius-sm)
}

.fade {
  -webkit-transition: opacity .15s linear;
  transition: opacity .15s linear
}

@media (prefers-reduced-motion:reduce) {
  .fade {
    -webkit-transition: none;
    transition: none
  }
}

.fade:not(.show) {
  opacity: 0
}

.collapse:not(.show) {
  display: none
}

.collapsing {
  height: 0;
  overflow: hidden;
  -webkit-transition: height .35s ease;
  transition: height .35s ease
}

@media (prefers-reduced-motion:reduce) {
  .collapsing {
    -webkit-transition: none;
    transition: none
  }
}

.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  -webkit-transition: width .35s ease;
  transition: width .35s ease
}

@media (prefers-reduced-motion:reduce) {
  .collapsing.collapse-horizontal {
    -webkit-transition: none;
    transition: none
  }
}

.dropdown,
.dropdown-center,
.dropend,
.dropstart,
.dropup,
.dropup-center {
  position: relative
}

.dropdown-toggle {
  white-space: nowrap
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: .35em;
  vertical-align: .1575em;
  content: "";
  border-top: .35em solid;
  border-right: .35em solid transparent;
  border-bottom: 0;
  border-left: .35em solid transparent
}

.dropdown-toggle:empty::after {
  margin-left: 0
}

.dropdown-menu {
  --ct-dropdown-zindex: 1000;
  --ct-dropdown-min-width: 10rem;
  --ct-dropdown-padding-x: 0;
  --ct-dropdown-padding-y: 0.25rem;
  --ct-dropdown-spacer: 0.125rem;
  --ct-dropdown-font-size: 0.875rem;
  --ct-dropdown-color: var(--ct-body-color);
  --ct-dropdown-bg: var(--ct-secondary-bg);
  --ct-dropdown-border-color: var(--ct-border-color);
  --ct-dropdown-border-radius: 0.375rem;
  --ct-dropdown-border-width: var(--ct-border-width);
  --ct-dropdown-inner-border-radius: calc(0.375rem - var(--ct-border-width));
  --ct-dropdown-divider-bg: var(--ct-border-color);
  --ct-dropdown-divider-margin-y: 0.75rem;
  --ct-dropdown-box-shadow: var(--ct-box-shadow);
  --ct-dropdown-link-color: var(--ct-body-color);
  --ct-dropdown-link-hover-color: var(--ct-tertiary-color);
  --ct-dropdown-link-hover-bg: var(--ct-tertiary-bg);
  --ct-dropdown-link-active-color: var(--ct-tertiary-color);
  --ct-dropdown-link-active-bg: var(--ct-tertiary-bg);
  --ct-dropdown-link-disabled-color: #adb5bd;
  --ct-dropdown-item-padding-x: 1.125rem;
  --ct-dropdown-item-padding-y: 0.375rem;
  --ct-dropdown-header-color: inherit;
  --ct-dropdown-header-padding-x: 0.84375rem;
  --ct-dropdown-header-padding-y: 0.5rem;
  position: absolute;
  z-index: var(--ct-dropdown-zindex);
  display: none;
  min-width: var(--ct-dropdown-min-width);
  padding: var(--ct-dropdown-padding-y) var(--ct-dropdown-padding-x);
  margin: 0;
  font-size: var(--ct-dropdown-font-size);
  color: var(--ct-dropdown-color);
  text-align: left;
  list-style: none;
  background-color: var(--ct-dropdown-bg);
  background-clip: padding-box;
  border: var(--ct-dropdown-border-width) solid var(--ct-dropdown-border-color);
  border-radius: var(--ct-dropdown-border-radius)
}

.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: var(--ct-dropdown-spacer)
}

.dropdown-menu-start {
  --bs-position: start
}

.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0
}

.dropdown-menu-end {
  --bs-position: end
}

.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto
}

@media (min-width:576px) {
  .dropdown-menu-sm-start {
    --bs-position: start
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0
  }
  .dropdown-menu-sm-end {
    --bs-position: end
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto
  }
}

@media (min-width:768px) {
  .dropdown-menu-md-start {
    --bs-position: start
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0
  }
  .dropdown-menu-md-end {
    --bs-position: end
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto
  }
}

@media (min-width:992px) {
  .dropdown-menu-lg-start {
    --bs-position: start
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0
  }
  .dropdown-menu-lg-end {
    --bs-position: end
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto
  }
}

@media (min-width:1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0
  }
  .dropdown-menu-xl-end {
    --bs-position: end
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto
  }
}

@media (min-width:1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0
  }
  .dropdown-menu-xxl-end {
    --bs-position: end
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto
  }
}

.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: var(--ct-dropdown-spacer)
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: .35em;
  vertical-align: .1575em;
  content: "";
  border-top: 0;
  border-right: .35em solid transparent;
  border-bottom: .35em solid;
  border-left: .35em solid transparent
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: var(--ct-dropdown-spacer)
}

.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: .35em;
  vertical-align: .1575em;
  content: "";
  border-top: .35em solid transparent;
  border-right: 0;
  border-bottom: .35em solid transparent;
  border-left: .35em solid
}

.dropend .dropdown-toggle:empty::after {
  margin-left: 0
}

.dropend .dropdown-toggle::after {
  vertical-align: 0
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: var(--ct-dropdown-spacer)
}

.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: .35em;
  vertical-align: .1575em;
  content: ""
}

.dropstart .dropdown-toggle::after {
  display: none
}

.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: .35em;
  vertical-align: .1575em;
  content: "";
  border-top: .35em solid transparent;
  border-right: .35em solid;
  border-bottom: .35em solid transparent
}

.dropstart .dropdown-toggle:empty::after {
  margin-left: 0
}

.dropstart .dropdown-toggle::before {
  vertical-align: 0
}

.dropdown-divider {
  height: 0;
  margin: var(--ct-dropdown-divider-margin-y) 0;
  overflow: hidden;
  border-top: 1px solid var(--ct-dropdown-divider-bg);
  opacity: 1
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: var(--ct-dropdown-item-padding-y) var(--ct-dropdown-item-padding-x);
  clear: both;
  font-weight: 400;
  color: var(--ct-dropdown-link-color);
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
  border-radius: var(--ct-dropdown-item-border-radius, 0)
}

.dropdown-item:focus,
.dropdown-item:hover {
  color: var(--ct-dropdown-link-hover-color);
  background-color: var(--ct-dropdown-link-hover-bg)
}

.dropdown-item.active,
.dropdown-item:active {
  color: var(--ct-dropdown-link-active-color);
  text-decoration: none;
  background-color: var(--ct-dropdown-link-active-bg)
}

.dropdown-item.disabled,
.dropdown-item:disabled {
  color: var(--ct-dropdown-link-disabled-color);
  pointer-events: none;
  background-color: transparent
}

.dropdown-menu.show {
  display: block
}

.dropdown-header {
  display: block;
  padding: var(--ct-dropdown-header-padding-y) var(--ct-dropdown-header-padding-x);
  margin-bottom: 0;
  font-size: .85rem;
  color: var(--ct-dropdown-header-color);
  white-space: nowrap
}

.dropdown-item-text {
  display: block;
  padding: var(--ct-dropdown-item-padding-y) var(--ct-dropdown-item-padding-x);
  color: var(--ct-dropdown-link-color)
}

.dropdown-menu-dark {
  --ct-dropdown-color: #dee2e6;
  --ct-dropdown-bg: #343a40;
  --ct-dropdown-border-color: var(--ct-border-color);
  --ct-dropdown-link-color: #dee2e6;
  --ct-dropdown-link-hover-color: #fff;
  --ct-dropdown-divider-bg: var(--ct-border-color);
  --ct-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
  --ct-dropdown-link-active-color: var(--ct-tertiary-color);
  --ct-dropdown-link-active-bg: var(--ct-tertiary-bg);
  --ct-dropdown-link-disabled-color: #adb5bd;
  --ct-dropdown-header-color: #adb5bd
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle
}

.btn-group-vertical>.btn,
.btn-group>.btn {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto
}

.btn-group-vertical>.btn-check:checked+.btn,
.btn-group-vertical>.btn-check:focus+.btn,
.btn-group-vertical>.btn.active,
.btn-group-vertical>.btn:active,
.btn-group-vertical>.btn:focus,
.btn-group-vertical>.btn:hover,
.btn-group>.btn-check:checked+.btn,
.btn-group>.btn-check:focus+.btn,
.btn-group>.btn.active,
.btn-group>.btn:active,
.btn-group>.btn:focus,
.btn-group>.btn:hover {
  z-index: 1
}

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start
}

.btn-toolbar .input-group {
  width: auto
}

.btn-group {
  border-radius: var(--ct-border-radius-sm)
}

.btn-group>.btn-group:not(:first-child),
.btn-group>:not(.btn-check:first-child)+.btn {
  margin-left: calc(var(--ct-border-width) * -1)
}

.btn-group>.btn-group:not(:last-child)>.btn,
.btn-group>.btn.dropdown-toggle-split:first-child,
.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0
}

.btn-group>.btn-group:not(:first-child)>.btn,
.btn-group>.btn:nth-child(n+3),
.btn-group>:not(.btn-check)+.btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0
}

.dropdown-toggle-split {
  padding-right: .675rem;
  padding-left: .675rem
}

.dropdown-toggle-split::after,
.dropend .dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after {
  margin-left: 0
}

.dropstart .dropdown-toggle-split::before {
  margin-right: 0
}

.btn-group-sm>.btn+.dropdown-toggle-split,
.btn-sm+.dropdown-toggle-split {
  padding-right: .6rem;
  padding-left: .6rem
}

.btn-group-lg>.btn+.dropdown-toggle-split,
.btn-lg+.dropdown-toggle-split {
  padding-right: .75rem;
  padding-left: .75rem
}

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center
}

.btn-group-vertical>.btn,
.btn-group-vertical>.btn-group {
  width: 100%
}

.btn-group-vertical>.btn-group:not(:first-child),
.btn-group-vertical>.btn:not(:first-child) {
  margin-top: calc(var(--ct-border-width) * -1)
}

.btn-group-vertical>.btn-group:not(:last-child)>.btn,
.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0
}

.btn-group-vertical>.btn-group:not(:first-child)>.btn,
.btn-group-vertical>.btn~.btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0
}

.nav {
  --ct-nav-link-padding-x: 1rem;
  --ct-nav-link-padding-y: 0.5rem;
  --ct-nav-link-color: var(--ct-link-color);
  --ct-nav-link-hover-color: var(--ct-link-hover-color);
  --ct-nav-link-disabled-color: var(--ct-secondary-color);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none
}

.nav-link {
  display: block;
  padding: var(--ct-nav-link-padding-y) var(--ct-nav-link-padding-x);
  font-size: var(--ct-nav-link-font-size);
  font-weight: var(--ct-nav-link-font-weight);
  color: var(--ct-nav-link-color);
  background: 0 0;
  border: 0;
  -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
  .nav-link {
    -webkit-transition: none;
    transition: none
  }
}

.nav-link:focus,
.nav-link:hover {
  color: var(--ct-nav-link-hover-color)
}

.nav-link:focus-visible {
  outline: 0;
  -webkit-box-shadow: 0 0 0 .25rem rgba(62, 96, 213, .25);
  box-shadow: 0 0 0 .25rem rgba(62, 96, 213, .25)
}

.nav-link.disabled {
  color: var(--ct-nav-link-disabled-color);
  pointer-events: none;
  cursor: default
}

.nav-tabs {
  --ct-nav-tabs-border-width: var(--ct-border-width);
  --ct-nav-tabs-border-color: var(--ct-border-color);
  --ct-nav-tabs-border-radius: var(--ct-border-radius);
  --ct-nav-tabs-link-hover-border-color: var(--ct-secondary-bg) var(--ct-secondary-bg) var(--ct-border-color);
  --ct-nav-tabs-link-active-color: var(--ct-emphasis-color);
  --ct-nav-tabs-link-active-bg: var(--ct-secondary-bg);
  --ct-nav-tabs-link-active-border-color: var(--ct-border-color) var(--ct-border-color) var(--ct-secondary-bg);
  border-bottom: var(--ct-nav-tabs-border-width) solid var(--ct-nav-tabs-border-color)
}

.nav-tabs .nav-link {
  margin-bottom: calc(-1 * var(--ct-nav-tabs-border-width));
  border: var(--ct-nav-tabs-border-width) solid transparent;
  border-top-left-radius: var(--ct-nav-tabs-border-radius);
  border-top-right-radius: var(--ct-nav-tabs-border-radius)
}

.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
  isolation: isolate;
  border-color: var(--ct-nav-tabs-link-hover-border-color)
}

.nav-tabs .nav-link.disabled,
.nav-tabs .nav-link:disabled {
  color: var(--ct-nav-link-disabled-color);
  background-color: transparent;
  border-color: transparent
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
  color: var(--ct-nav-tabs-link-active-color);
  background-color: var(--ct-nav-tabs-link-active-bg);
  border-color: var(--ct-nav-tabs-link-active-border-color)
}

.nav-tabs .dropdown-menu {
  margin-top: calc(-1 * var(--ct-nav-tabs-border-width));
  border-top-left-radius: 0;
  border-top-right-radius: 0
}

.nav-pills {
  --ct-nav-pills-border-radius: 0.375rem;
  --ct-nav-pills-link-active-color: #fff;
  --ct-nav-pills-link-active-bg: #3e60d5
}

.nav-pills .nav-link {
  border-radius: var(--ct-nav-pills-border-radius)
}

.nav-pills .nav-link:disabled {
  color: var(--ct-nav-link-disabled-color);
  background-color: transparent;
  border-color: transparent
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
  color: var(--ct-nav-pills-link-active-color);
  background-color: var(--ct-nav-pills-link-active-bg)
}

.nav-underline {
  --ct-nav-underline-gap: 1rem;
  --ct-nav-underline-border-width: 0.125rem;
  --ct-nav-underline-link-active-color: var(--ct-emphasis-color);
  gap: var(--ct-nav-underline-gap)
}

.nav-underline .nav-link {
  padding-right: 0;
  padding-left: 0;
  border-bottom: var(--ct-nav-underline-border-width) solid transparent
}

.nav-underline .nav-link:focus,
.nav-underline .nav-link:hover {
  border-bottom-color: currentcolor
}

.nav-underline .nav-link.active,
.nav-underline .show>.nav-link {
  font-weight: 700;
  color: var(--ct-nav-underline-link-active-color);
  border-bottom-color: currentcolor
}

.nav-fill .nav-item,
.nav-fill>.nav-link {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center
}

.nav-justified .nav-item,
.nav-justified>.nav-link {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%
}

.tab-content .tab-pane {
  display: none
}

.tab-content .active {
  display: block
}

.navbar {
  --ct-navbar-padding-x: 0;
  --ct-navbar-padding-y: 0.75rem;
  --ct-navbar-color: rgba(var(--ct-emphasis-color-rgb), 0.65);
  --ct-navbar-hover-color: rgba(var(--ct-emphasis-color-rgb), 0.8);
  --ct-navbar-disabled-color: rgba(var(--ct-emphasis-color-rgb), 0.3);
  --ct-navbar-active-color: rgba(var(--ct-emphasis-color-rgb), 1);
  --ct-navbar-brand-padding-y: 0.2440625rem;
  --ct-navbar-brand-margin-end: 1rem;
  --ct-navbar-brand-font-size: 1.21625rem;
  --ct-navbar-brand-color: rgba(var(--ct-emphasis-color-rgb), 1);
  --ct-navbar-brand-hover-color: rgba(var(--ct-emphasis-color-rgb), 1);
  --ct-navbar-nav-link-padding-x: 0.5rem;
  --ct-navbar-toggler-padding-y: 0.25rem;
  --ct-navbar-toggler-padding-x: 0.75rem;
  --ct-navbar-toggler-font-size: 1.21625rem;
  --ct-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28108, 117, 125, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  --ct-navbar-toggler-border-color: rgba(var(--ct-emphasis-color-rgb), 0.15);
  --ct-navbar-toggler-border-radius: var(--ct-border-radius-sm);
  --ct-navbar-toggler-focus-width: 0.15rem;
  --ct-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: var(--ct-navbar-padding-y) var(--ct-navbar-padding-x)
}

.navbar>.container,
.navbar>.container-fluid,
.navbar>.container-lg,
.navbar>.container-md,
.navbar>.container-sm,
.navbar>.container-xl,
.navbar>.container-xxl {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
  flex-wrap: inherit;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between
}

.navbar-brand {
  padding-top: var(--ct-navbar-brand-padding-y);
  padding-bottom: var(--ct-navbar-brand-padding-y);
  margin-right: var(--ct-navbar-brand-margin-end);
  font-size: var(--ct-navbar-brand-font-size);
  color: var(--ct-navbar-brand-color);
  white-space: nowrap
}

.navbar-brand:focus,
.navbar-brand:hover {
  color: var(--ct-navbar-brand-hover-color)
}

.navbar-nav {
  --ct-nav-link-padding-x: 0;
  --ct-nav-link-padding-y: 0.5rem;
  --ct-nav-link-color: var(--ct-navbar-color);
  --ct-nav-link-hover-color: var(--ct-navbar-hover-color);
  --ct-nav-link-disabled-color: var(--ct-navbar-disabled-color);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none
}

.navbar-nav .nav-link.active,
.navbar-nav .nav-link.show {
  color: var(--ct-navbar-active-color)
}

.navbar-nav .dropdown-menu {
  position: static
}

.navbar-text {
  padding-top: .5rem;
  padding-bottom: .5rem;
  color: var(--ct-navbar-color)
}

.navbar-text a,
.navbar-text a:focus,
.navbar-text a:hover {
  color: var(--ct-navbar-active-color)
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center
}

.navbar-toggler {
  padding: var(--ct-navbar-toggler-padding-y) var(--ct-navbar-toggler-padding-x);
  font-size: var(--ct-navbar-toggler-font-size);
  line-height: 1;
  color: var(--ct-navbar-color);
  background-color: transparent;
  border: var(--ct-border-width) solid var(--ct-navbar-toggler-border-color);
  border-radius: var(--ct-navbar-toggler-border-radius);
  -webkit-transition: var(--ct-navbar-toggler-transition);
  transition: var(--ct-navbar-toggler-transition)
}

@media (prefers-reduced-motion:reduce) {
  .navbar-toggler {
    -webkit-transition: none;
    transition: none
  }
}

.navbar-toggler:hover {
  text-decoration: none
}

.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  -webkit-box-shadow: 0 0 0 var(--ct-navbar-toggler-focus-width);
  box-shadow: 0 0 0 var(--ct-navbar-toggler-focus-width)
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-image: var(--ct-navbar-toggler-icon-bg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%
}

.navbar-nav-scroll {
  max-height: var(--ct-scroll-height, 75vh);
  overflow-y: auto
}

@media (min-width:576px) {
  .navbar-expand-sm {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
  }
  .navbar-expand-sm .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: var(--ct-navbar-nav-link-padding-x);
    padding-left: var(--ct-navbar-nav-link-padding-x)
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible
  }
  .navbar-expand-sm .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
  }
  .navbar-expand-sm .navbar-toggler {
    display: none
  }
  .navbar-expand-sm .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    transform: none !important;
    -webkit-transition: none;
    transition: none
  }
  .navbar-expand-sm .offcanvas .offcanvas-header {
    display: none
  }
  .navbar-expand-sm .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible
  }
}

@media (min-width:768px) {
  .navbar-expand-md {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
  }
  .navbar-expand-md .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: var(--ct-navbar-nav-link-padding-x);
    padding-left: var(--ct-navbar-nav-link-padding-x)
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible
  }
  .navbar-expand-md .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
  }
  .navbar-expand-md .navbar-toggler {
    display: none
  }
  .navbar-expand-md .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    transform: none !important;
    -webkit-transition: none;
    transition: none
  }
  .navbar-expand-md .offcanvas .offcanvas-header {
    display: none
  }
  .navbar-expand-md .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible
  }
}

@media (min-width:992px) {
  .navbar-expand-lg {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
  }
  .navbar-expand-lg .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--ct-navbar-nav-link-padding-x);
    padding-left: var(--ct-navbar-nav-link-padding-x)
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible
  }
  .navbar-expand-lg .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
  }
  .navbar-expand-lg .navbar-toggler {
    display: none
  }
  .navbar-expand-lg .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    transform: none !important;
    -webkit-transition: none;
    transition: none
  }
  .navbar-expand-lg .offcanvas .offcanvas-header {
    display: none
  }
  .navbar-expand-lg .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible
  }
}

@media (min-width:1200px) {
  .navbar-expand-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
  }
  .navbar-expand-xl .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: var(--ct-navbar-nav-link-padding-x);
    padding-left: var(--ct-navbar-nav-link-padding-x)
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible
  }
  .navbar-expand-xl .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
  }
  .navbar-expand-xl .navbar-toggler {
    display: none
  }
  .navbar-expand-xl .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    transform: none !important;
    -webkit-transition: none;
    transition: none
  }
  .navbar-expand-xl .offcanvas .offcanvas-header {
    display: none
  }
  .navbar-expand-xl .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible
  }
}

@media (min-width:1400px) {
  .navbar-expand-xxl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
  }
  .navbar-expand-xxl .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: var(--ct-navbar-nav-link-padding-x);
    padding-left: var(--ct-navbar-nav-link-padding-x)
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible
  }
  .navbar-expand-xxl .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none
  }
  .navbar-expand-xxl .offcanvas {
    position: static;
    z-index: auto;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
    transform: none !important;
    -webkit-transition: none;
    transition: none
  }
  .navbar-expand-xxl .offcanvas .offcanvas-header {
    display: none
  }
  .navbar-expand-xxl .offcanvas .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible
  }
}

.navbar-expand {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start
}

.navbar-expand .navbar-nav {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: var(--ct-navbar-nav-link-padding-x);
  padding-left: var(--ct-navbar-nav-link-padding-x)
}

.navbar-expand .navbar-nav-scroll {
  overflow: visible
}

.navbar-expand .navbar-collapse {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
  flex-basis: auto
}

.navbar-expand .navbar-toggler {
  display: none
}

.navbar-expand .offcanvas {
  position: static;
  z-index: auto;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  width: auto !important;
  height: auto !important;
  visibility: visible !important;
  background-color: transparent !important;
  border: 0 !important;
  -webkit-transform: none !important;
  transform: none !important;
  -webkit-transition: none;
  transition: none
}

.navbar-expand .offcanvas .offcanvas-header {
  display: none
}

.navbar-expand .offcanvas .offcanvas-body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0;
  -ms-flex-positive: 0;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible
}

.navbar-dark,
.navbar[data-bs-theme=dark] {
  --ct-navbar-color: rgba(255, 255, 255, 0.55);
  --ct-navbar-hover-color: rgba(255, 255, 255, 0.75);
  --ct-navbar-disabled-color: rgba(255, 255, 255, 0.25);
  --ct-navbar-active-color: #fff;
  --ct-navbar-brand-color: #fff;
  --ct-navbar-brand-hover-color: #fff;
  --ct-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
  --ct-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
}

[data-bs-theme=dark] .navbar-toggler-icon {
  --ct-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
}

.card {
  --ct-card-spacer-y: 1.5rem;
  --ct-card-spacer-x: 1.5rem;
  --ct-card-title-spacer-y: 0.75rem;
  --ct-card-border-width: var(--ct-theme-card-border-width);
  --ct-card-border-color: var(--ct-border-color);
  --ct-card-border-radius: var(--ct-border-radius);
  --ct-card-box-shadow: var(--ct-box-shadow);
  --ct-card-inner-border-radius: calc(var(--ct-border-radius) - (var(--ct-theme-card-border-width)));
  --ct-card-cap-padding-y: 1.125rem;
  --ct-card-cap-padding-x: 1.5rem;
  --ct-card-cap-bg: transparent;
  --ct-card-bg: var(--ct-secondary-bg);
  --ct-card-img-overlay-padding: 1.5rem;
  --ct-card-group-margin: 0.625rem;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  height: var(--ct-card-height);
  color: var(--ct-body-color);
  word-wrap: break-word;
  background-color: var(--ct-card-bg);
  background-clip: border-box;
  border: var(--ct-card-border-width) solid var(--ct-card-border-color);
  border-radius: var(--ct-card-border-radius)
}

.card>hr {
  margin-right: 0;
  margin-left: 0
}

.card>.list-group {
  border-top: inherit;
  border-bottom: inherit
}

.card>.list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: var(--ct-card-inner-border-radius);
  border-top-right-radius: var(--ct-card-inner-border-radius)
}

.card>.list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: var(--ct-card-inner-border-radius);
  border-bottom-left-radius: var(--ct-card-inner-border-radius)
}

.card>.card-header+.list-group,
.card>.list-group+.card-footer {
  border-top: 0
}

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: var(--ct-card-spacer-y) var(--ct-card-spacer-x);
  color: var(--ct-card-color)
}

.card-title {
  margin-bottom: var(--ct-card-title-spacer-y);
  color: var(--ct-card-title-color)
}

.card-subtitle {
  margin-top: calc(-.5 * var(--ct-card-title-spacer-y));
  margin-bottom: 0;
  color: var(--ct-card-subtitle-color)
}

.card-text:last-child {
  margin-bottom: 0
}

.card-link+.card-link {
  margin-left: var(--ct-card-spacer-x)
}

.card-header {
  padding: var(--ct-card-cap-padding-y) var(--ct-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--ct-card-cap-color);
  background-color: var(--ct-card-cap-bg);
  border-bottom: var(--ct-card-border-width) solid var(--ct-card-border-color)
}

.card-header:first-child {
  border-radius: var(--ct-card-inner-border-radius) var(--ct-card-inner-border-radius) 0 0
}

.card-footer {
  padding: var(--ct-card-cap-padding-y) var(--ct-card-cap-padding-x);
  color: var(--ct-card-cap-color);
  background-color: var(--ct-card-cap-bg);
  border-top: var(--ct-card-border-width) solid var(--ct-card-border-color)
}

.card-footer:last-child {
  border-radius: 0 0 var(--ct-card-inner-border-radius) var(--ct-card-inner-border-radius)
}

.card-header-tabs {
  margin-right: calc(-.5 * var(--ct-card-cap-padding-x));
  margin-bottom: calc(-1 * var(--ct-card-cap-padding-y));
  margin-left: calc(-.5 * var(--ct-card-cap-padding-x));
  border-bottom: 0
}

.card-header-tabs .nav-link.active {
  background-color: var(--ct-card-bg);
  border-bottom-color: var(--ct-card-bg)
}

.card-header-pills {
  margin-right: calc(-.5 * var(--ct-card-cap-padding-x));
  margin-left: calc(-.5 * var(--ct-card-cap-padding-x))
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--ct-card-img-overlay-padding);
  border-radius: var(--ct-card-inner-border-radius)
}

.card-img,
.card-img-bottom,
.card-img-top {
  width: 100%
}

.card-img,
.card-img-top {
  border-top-left-radius: var(--ct-card-inner-border-radius);
  border-top-right-radius: var(--ct-card-inner-border-radius)
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: var(--ct-card-inner-border-radius);
  border-bottom-left-radius: var(--ct-card-inner-border-radius)
}

.card-group>.card {
  margin-bottom: var(--ct-card-group-margin)
}

@media (min-width:576px) {
  .card-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap
  }
  .card-group>.card {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0
  }
  .card-group>.card+.card {
    margin-left: 0;
    border-left: 0
  }
  .card-group>.card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
  }
  .card-group>.card:not(:last-child) .card-header,
  .card-group>.card:not(:last-child) .card-img-top {
    border-top-right-radius: 0
  }
  .card-group>.card:not(:last-child) .card-footer,
  .card-group>.card:not(:last-child) .card-img-bottom {
    border-bottom-right-radius: 0
  }
  .card-group>.card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
  }
  .card-group>.card:not(:first-child) .card-header,
  .card-group>.card:not(:first-child) .card-img-top {
    border-top-left-radius: 0
  }
  .card-group>.card:not(:first-child) .card-footer,
  .card-group>.card:not(:first-child) .card-img-bottom {
    border-bottom-left-radius: 0
  }
}

.accordion {
  --ct-accordion-color: var(--ct-body-color);
  --ct-accordion-bg: var(--ct-secondary-bg);
  --ct-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
  --ct-accordion-border-color: var(--ct-border-color);
  --ct-accordion-border-width: var(--ct-border-width);
  --ct-accordion-border-radius: var(--ct-border-radius);
  --ct-accordion-inner-border-radius: calc(var(--ct-border-radius) - (var(--ct-border-width)));
  --ct-accordion-btn-padding-x: 1.25rem;
  --ct-accordion-btn-padding-y: 1rem;
  --ct-accordion-btn-color: var(--ct-body-color);
  --ct-accordion-btn-bg: var(--ct-accordion-bg);
  --ct-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%236c757d'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  --ct-accordion-btn-icon-width: 0.75rem;
  --ct-accordion-btn-icon-transform: rotate(-180deg);
  --ct-accordion-btn-icon-transition: transform 0.2s ease-in-out;
  --ct-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%233856c0'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  --ct-accordion-btn-focus-border-color: var(--ct-border-color-translucent);
  --ct-accordion-btn-focus-box-shadow: none;
  --ct-accordion-body-padding-x: 1.25rem;
  --ct-accordion-body-padding-y: 1rem;
  --ct-accordion-active-color: var(--ct-primary);
  --ct-accordion-active-bg: var(--ct-primary-bg-subtle)
}

.accordion-button {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  padding: var(--ct-accordion-btn-padding-y) var(--ct-accordion-btn-padding-x);
  font-size: .875rem;
  color: var(--ct-accordion-btn-color);
  text-align: left;
  background-color: var(--ct-accordion-btn-bg);
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  -webkit-transition: var(--ct-accordion-transition);
  transition: var(--ct-accordion-transition)
}

@media (prefers-reduced-motion:reduce) {
  .accordion-button {
    -webkit-transition: none;
    transition: none
  }
}

.accordion-button:not(.collapsed) {
  color: var(--ct-accordion-active-color);
  background-color: var(--ct-accordion-active-bg);
  -webkit-box-shadow: inset 0 calc(-1 * var(--ct-accordion-border-width)) 0 var(--ct-accordion-border-color);
  box-shadow: inset 0 calc(-1 * var(--ct-accordion-border-width)) 0 var(--ct-accordion-border-color)
}

.accordion-button:not(.collapsed)::after {
  background-image: var(--ct-accordion-btn-active-icon);
  -webkit-transform: var(--ct-accordion-btn-icon-transform);
  transform: var(--ct-accordion-btn-icon-transform)
}

.accordion-button::after {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  width: var(--ct-accordion-btn-icon-width);
  height: var(--ct-accordion-btn-icon-width);
  margin-left: auto;
  content: "";
  background-image: var(--ct-accordion-btn-icon);
  background-repeat: no-repeat;
  background-size: var(--ct-accordion-btn-icon-width);
  -webkit-transition: var(--ct-accordion-btn-icon-transition);
  transition: var(--ct-accordion-btn-icon-transition)
}

@media (prefers-reduced-motion:reduce) {
  .accordion-button::after {
    -webkit-transition: none;
    transition: none
  }
}

.accordion-button:hover {
  z-index: 2
}

.accordion-button:focus {
  z-index: 3;
  border-color: var(--ct-accordion-btn-focus-border-color);
  outline: 0;
  -webkit-box-shadow: var(--ct-accordion-btn-focus-box-shadow);
  box-shadow: var(--ct-accordion-btn-focus-box-shadow)
}

.accordion-header {
  margin-bottom: 0
}

.accordion-item {
  color: var(--ct-accordion-color);
  background-color: var(--ct-accordion-bg);
  border: var(--ct-accordion-border-width) solid var(--ct-accordion-border-color)
}

.accordion-item:first-of-type {
  border-top-left-radius: var(--ct-accordion-border-radius);
  border-top-right-radius: var(--ct-accordion-border-radius)
}

.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: var(--ct-accordion-inner-border-radius);
  border-top-right-radius: var(--ct-accordion-inner-border-radius)
}

.accordion-item:not(:first-of-type) {
  border-top: 0
}

.accordion-item:last-of-type {
  border-bottom-right-radius: var(--ct-accordion-border-radius);
  border-bottom-left-radius: var(--ct-accordion-border-radius)
}

.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: var(--ct-accordion-inner-border-radius);
  border-bottom-left-radius: var(--ct-accordion-inner-border-radius)
}

.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: var(--ct-accordion-border-radius);
  border-bottom-left-radius: var(--ct-accordion-border-radius)
}

.accordion-body {
  padding: var(--ct-accordion-body-padding-y) var(--ct-accordion-body-padding-x)
}

.accordion-flush .accordion-collapse {
  border-width: 0
}

.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0
}

.accordion-flush .accordion-item:first-child {
  border-top: 0
}

.accordion-flush .accordion-item:last-child {
  border-bottom: 0
}

.accordion-flush .accordion-item .accordion-button,
.accordion-flush .accordion-item .accordion-button.collapsed {
  border-radius: 0
}

[data-bs-theme=dark] .accordion-button::after {
  --ct-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%233856c0'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  --ct-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%233856c0'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
}

.breadcrumb {
  --ct-breadcrumb-padding-x: 0;
  --ct-breadcrumb-padding-y: 1.5rem;
  --ct-breadcrumb-margin-bottom: 1rem;
  --ct-breadcrumb-divider-color: var(--ct-secondary-color);
  --ct-breadcrumb-item-padding-x: 0.5rem;
  --ct-breadcrumb-item-active-color: var(--ct-secondary-color);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: var(--ct-breadcrumb-padding-y) var(--ct-breadcrumb-padding-x);
  margin-bottom: var(--ct-breadcrumb-margin-bottom);
  font-size: var(--ct-breadcrumb-font-size);
  list-style: none;
  background-color: var(--ct-breadcrumb-bg);
  border-radius: var(--ct-breadcrumb-border-radius)
}

.breadcrumb-item+.breadcrumb-item {
  padding-left: var(--ct-breadcrumb-item-padding-x)
}

.breadcrumb-item+.breadcrumb-item::before {
  float: left;
  padding-right: var(--ct-breadcrumb-item-padding-x);
  color: var(--ct-breadcrumb-divider-color);
  content: var(--ct-breadcrumb-divider, "\ea6e")
}

.breadcrumb-item.active {
  color: var(--ct-breadcrumb-item-active-color)
}

.pagination {
  --ct-pagination-padding-x: 0.75rem;
  --ct-pagination-padding-y: 0.375rem;
  --ct-pagination-font-size: 0.875rem;
  --ct-pagination-color: var(--ct-tertiary-color);
  --ct-pagination-bg: var(--ct-secondary-bg);
  --ct-pagination-border-width: var(--ct-border-width);
  --ct-pagination-border-color: var(--ct-border-color);
  --ct-pagination-border-radius: var(--ct-border-radius-sm);
  --ct-pagination-hover-color: var(--ct-link-hover-color);
  --ct-pagination-hover-bg: var(--ct-tertiary-bg);
  --ct-pagination-hover-border-color: var(--ct-border-color);
  --ct-pagination-focus-color: var(--ct-link-hover-color);
  --ct-pagination-focus-bg: var(--ct-secondary-bg);
  --ct-pagination-focus-box-shadow: none;
  --ct-pagination-active-color: #fff;
  --ct-pagination-active-bg: #3e60d5;
  --ct-pagination-active-border-color: #3e60d5;
  --ct-pagination-disabled-color: var(--ct-secondary-color);
  --ct-pagination-disabled-bg: var(--ct-secondary-bg);
  --ct-pagination-disabled-border-color: var(--ct-border-color);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none
}

.page-link {
  position: relative;
  display: block;
  padding: var(--ct-pagination-padding-y) var(--ct-pagination-padding-x);
  font-size: var(--ct-pagination-font-size);
  color: var(--ct-pagination-color);
  background-color: var(--ct-pagination-bg);
  border: var(--ct-pagination-border-width) solid var(--ct-pagination-border-color);
  -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
  .page-link {
    -webkit-transition: none;
    transition: none
  }
}

.page-link:hover {
  z-index: 2;
  color: var(--ct-pagination-hover-color);
  background-color: var(--ct-pagination-hover-bg);
  border-color: var(--ct-pagination-hover-border-color)
}

.page-link:focus {
  z-index: 3;
  color: var(--ct-pagination-focus-color);
  background-color: var(--ct-pagination-focus-bg);
  outline: 0;
  -webkit-box-shadow: var(--ct-pagination-focus-box-shadow);
  box-shadow: var(--ct-pagination-focus-box-shadow)
}

.active>.page-link,
.page-link.active {
  z-index: 3;
  color: var(--ct-pagination-active-color);
  background-color: var(--ct-pagination-active-bg);
  border-color: var(--ct-pagination-active-border-color)
}

.disabled>.page-link,
.page-link.disabled {
  color: var(--ct-pagination-disabled-color);
  pointer-events: none;
  background-color: var(--ct-pagination-disabled-bg);
  border-color: var(--ct-pagination-disabled-border-color)
}

.page-item:not(:first-child) .page-link {
  margin-left: calc(var(--ct-border-width) * -1)
}

.page-item:first-child .page-link {
  border-top-left-radius: var(--ct-pagination-border-radius);
  border-bottom-left-radius: var(--ct-pagination-border-radius)
}

.page-item:last-child .page-link {
  border-top-right-radius: var(--ct-pagination-border-radius);
  border-bottom-right-radius: var(--ct-pagination-border-radius)
}

.pagination-lg {
  --ct-pagination-padding-x: 1.5rem;
  --ct-pagination-padding-y: 0.75rem;
  --ct-pagination-font-size: 1.21625rem;
  --ct-pagination-border-radius: var(--ct-border-radius)
}

.pagination-sm {
  --ct-pagination-padding-x: 0.5rem;
  --ct-pagination-padding-y: 0.25rem;
  --ct-pagination-font-size: 0.85rem;
  --ct-pagination-border-radius: var(--ct-border-radius-sm)
}

.badge {
  --ct-badge-padding-x: 0.4em;
  --ct-badge-padding-y: 0.25em;
  --ct-badge-font-size: 0.8em;
  --ct-badge-font-weight: 500;
  --ct-badge-color: #fff;
  --ct-badge-border-radius: 0.375rem;
  display: inline-block;
  padding: var(--ct-badge-padding-y) var(--ct-badge-padding-x);
  font-size: var(--ct-badge-font-size);
  font-weight: var(--ct-badge-font-weight);
  line-height: 1;
  color: var(--ct-badge-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: var(--ct-badge-border-radius)
}

.badge:empty {
  display: none
}

.btn .badge {
  position: relative;
  top: -1px
}

.alert {
  --ct-alert-bg: transparent;
  --ct-alert-padding-x: 1.25rem;
  --ct-alert-padding-y: 0.8rem;
  --ct-alert-margin-bottom: 1rem;
  --ct-alert-color: inherit;
  --ct-alert-border-color: transparent;
  --ct-alert-border: var(--ct-border-width) solid var(--ct-alert-border-color);
  --ct-alert-border-radius: 0.375rem;
  --ct-alert-link-color: inherit;
  position: relative;
  padding: var(--ct-alert-padding-y) var(--ct-alert-padding-x);
  margin-bottom: var(--ct-alert-margin-bottom);
  color: var(--ct-alert-color);
  background-color: var(--ct-alert-bg);
  border: var(--ct-alert-border);
  border-radius: var(--ct-alert-border-radius)
}

.alert-heading {
  color: inherit
}

.alert-link {
  font-weight: 700;
  color: var(--ct-alert-link-color)
}

.alert-dismissible {
  padding-right: 3.75rem
}

.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1rem 1.25rem
}

.alert-primary {
  --ct-alert-color: var(--ct-primary-text-emphasis);
  --ct-alert-bg: var(--ct-primary-bg-subtle);
  --ct-alert-border-color: var(--ct-primary-border-subtle);
  --ct-alert-link-color: var(--ct-primary-text-emphasis)
}

.alert-secondary {
  --ct-alert-color: var(--ct-secondary-text-emphasis);
  --ct-alert-bg: var(--ct-secondary-bg-subtle);
  --ct-alert-border-color: var(--ct-secondary-border-subtle);
  --ct-alert-link-color: var(--ct-secondary-text-emphasis)
}

.alert-success {
  --ct-alert-color: var(--ct-success-text-emphasis);
  --ct-alert-bg: var(--ct-success-bg-subtle);
  --ct-alert-border-color: var(--ct-success-border-subtle);
  --ct-alert-link-color: var(--ct-success-text-emphasis)
}

.alert-info {
  --ct-alert-color: var(--ct-info-text-emphasis);
  --ct-alert-bg: var(--ct-info-bg-subtle);
  --ct-alert-border-color: var(--ct-info-border-subtle);
  --ct-alert-link-color: var(--ct-info-text-emphasis)
}

.alert-warning {
  --ct-alert-color: var(--ct-warning-text-emphasis);
  --ct-alert-bg: var(--ct-warning-bg-subtle);
  --ct-alert-border-color: var(--ct-warning-border-subtle);
  --ct-alert-link-color: var(--ct-warning-text-emphasis)
}

.alert-danger {
  --ct-alert-color: var(--ct-danger-text-emphasis);
  --ct-alert-bg: var(--ct-danger-bg-subtle);
  --ct-alert-border-color: var(--ct-danger-border-subtle);
  --ct-alert-link-color: var(--ct-danger-text-emphasis)
}

.alert-light {
  --ct-alert-color: var(--ct-light-text-emphasis);
  --ct-alert-bg: var(--ct-light-bg-subtle);
  --ct-alert-border-color: var(--ct-light-border-subtle);
  --ct-alert-link-color: var(--ct-light-text-emphasis)
}

.alert-dark {
  --ct-alert-color: var(--ct-dark-text-emphasis);
  --ct-alert-bg: var(--ct-dark-bg-subtle);
  --ct-alert-border-color: var(--ct-dark-border-subtle);
  --ct-alert-link-color: var(--ct-dark-text-emphasis)
}

@-webkit-keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem
  }
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem
  }
}

.progress,
.progress-stacked {
  --ct-progress-height: 1rem;
  --ct-progress-font-size: 0.65625rem;
  --ct-progress-bg: var(--ct-body-bg);
  --ct-progress-border-radius: var(--ct-border-radius);
  --ct-progress-box-shadow: var(--ct-box-shadow-inset);
  --ct-progress-bar-color: #fff;
  --ct-progress-bar-bg: #3e60d5;
  --ct-progress-bar-transition: width 0.6s ease;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: var(--ct-progress-height);
  overflow: hidden;
  font-size: var(--ct-progress-font-size);
  background-color: var(--ct-progress-bg);
  border-radius: var(--ct-progress-border-radius)
}

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  overflow: hidden;
  color: var(--ct-progress-bar-color);
  text-align: center;
  white-space: nowrap;
  background-color: var(--ct-progress-bar-bg);
  -webkit-transition: var(--ct-progress-bar-transition);
  transition: var(--ct-progress-bar-transition)
}

@media (prefers-reduced-motion:reduce) {
  .progress-bar {
    -webkit-transition: none;
    transition: none
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-size: var(--ct-progress-height) var(--ct-progress-height)
}

.progress-stacked>.progress {
  overflow: visible
}

.progress-stacked>.progress>.progress-bar {
  width: 100%
}

.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
  animation: 1s linear infinite progress-bar-stripes
}

@media (prefers-reduced-motion:reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
    animation: none
  }
}

.list-group {
  --ct-list-group-color: var(--ct-tertiary-color);
  --ct-list-group-bg: var(--ct-secondary-bg);
  --ct-list-group-border-color: var(--ct-border-color);
  --ct-list-group-border-width: var(--ct-border-width);
  --ct-list-group-border-radius: var(--ct-border-radius);
  --ct-list-group-item-padding-x: 1.2rem;
  --ct-list-group-item-padding-y: 0.75rem;
  --ct-list-group-action-color: var(--ct-secondary-color);
  --ct-list-group-action-hover-color: var(--ct-body-color);
  --ct-list-group-action-hover-bg: var(--ct-tertiary-bg);
  --ct-list-group-action-active-color: var(--ct-body-color);
  --ct-list-group-action-active-bg: var(--ct-secondary-bg);
  --ct-list-group-disabled-color: var(--ct-secondary-color);
  --ct-list-group-disabled-bg: var(--ct-tertiary-bg);
  --ct-list-group-active-color: #fff;
  --ct-list-group-active-bg: #3e60d5;
  --ct-list-group-active-border-color: #3e60d5;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: var(--ct-list-group-border-radius)
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section
}

.list-group-numbered>.list-group-item::before {
  content: counters(section, ".") ". ";
  counter-increment: section
}

.list-group-item-action {
  width: 100%;
  color: var(--ct-list-group-action-color);
  text-align: inherit
}

.list-group-item-action:focus,
.list-group-item-action:hover {
  z-index: 1;
  color: var(--ct-list-group-action-hover-color);
  text-decoration: none;
  background-color: var(--ct-list-group-action-hover-bg)
}

.list-group-item-action:active {
  color: var(--ct-list-group-action-active-color);
  background-color: var(--ct-list-group-action-active-bg)
}

.list-group-item {
  position: relative;
  display: block;
  padding: var(--ct-list-group-item-padding-y) var(--ct-list-group-item-padding-x);
  color: var(--ct-list-group-color);
  background-color: var(--ct-list-group-bg);
  border: var(--ct-list-group-border-width) solid var(--ct-list-group-border-color)
}

.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit
}

.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit
}

.list-group-item.disabled,
.list-group-item:disabled {
  color: var(--ct-list-group-disabled-color);
  pointer-events: none;
  background-color: var(--ct-list-group-disabled-bg)
}

.list-group-item.active {
  z-index: 2;
  color: var(--ct-list-group-active-color);
  background-color: var(--ct-list-group-active-bg);
  border-color: var(--ct-list-group-active-border-color)
}

.list-group-item+.list-group-item {
  border-top-width: 0
}

.list-group-item+.list-group-item.active {
  margin-top: calc(-1 * var(--ct-list-group-border-width));
  border-top-width: var(--ct-list-group-border-width)
}

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row
}

.list-group-horizontal>.list-group-item:first-child:not(:last-child) {
  border-bottom-left-radius: var(--ct-list-group-border-radius);
  border-top-right-radius: 0
}

.list-group-horizontal>.list-group-item:last-child:not(:first-child) {
  border-top-right-radius: var(--ct-list-group-border-radius);
  border-bottom-left-radius: 0
}

.list-group-horizontal>.list-group-item.active {
  margin-top: 0
}

.list-group-horizontal>.list-group-item+.list-group-item {
  border-top-width: var(--ct-list-group-border-width);
  border-left-width: 0
}

.list-group-horizontal>.list-group-item+.list-group-item.active {
  margin-left: calc(-1 * var(--ct-list-group-border-width));
  border-left-width: var(--ct-list-group-border-width)
}

@media (min-width:576px) {
  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .list-group-horizontal-sm>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--ct-list-group-border-radius);
    border-top-right-radius: 0
  }
  .list-group-horizontal-sm>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--ct-list-group-border-radius);
    border-bottom-left-radius: 0
  }
  .list-group-horizontal-sm>.list-group-item.active {
    margin-top: 0
  }
  .list-group-horizontal-sm>.list-group-item+.list-group-item {
    border-top-width: var(--ct-list-group-border-width);
    border-left-width: 0
  }
  .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--ct-list-group-border-width));
    border-left-width: var(--ct-list-group-border-width)
  }
}

@media (min-width:768px) {
  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .list-group-horizontal-md>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--ct-list-group-border-radius);
    border-top-right-radius: 0
  }
  .list-group-horizontal-md>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--ct-list-group-border-radius);
    border-bottom-left-radius: 0
  }
  .list-group-horizontal-md>.list-group-item.active {
    margin-top: 0
  }
  .list-group-horizontal-md>.list-group-item+.list-group-item {
    border-top-width: var(--ct-list-group-border-width);
    border-left-width: 0
  }
  .list-group-horizontal-md>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--ct-list-group-border-width));
    border-left-width: var(--ct-list-group-border-width)
  }
}

@media (min-width:992px) {
  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .list-group-horizontal-lg>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--ct-list-group-border-radius);
    border-top-right-radius: 0
  }
  .list-group-horizontal-lg>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--ct-list-group-border-radius);
    border-bottom-left-radius: 0
  }
  .list-group-horizontal-lg>.list-group-item.active {
    margin-top: 0
  }
  .list-group-horizontal-lg>.list-group-item+.list-group-item {
    border-top-width: var(--ct-list-group-border-width);
    border-left-width: 0
  }
  .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--ct-list-group-border-width));
    border-left-width: var(--ct-list-group-border-width)
  }
}

@media (min-width:1200px) {
  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .list-group-horizontal-xl>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--ct-list-group-border-radius);
    border-top-right-radius: 0
  }
  .list-group-horizontal-xl>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--ct-list-group-border-radius);
    border-bottom-left-radius: 0
  }
  .list-group-horizontal-xl>.list-group-item.active {
    margin-top: 0
  }
  .list-group-horizontal-xl>.list-group-item+.list-group-item {
    border-top-width: var(--ct-list-group-border-width);
    border-left-width: 0
  }
  .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--ct-list-group-border-width));
    border-left-width: var(--ct-list-group-border-width)
  }
}

@media (min-width:1400px) {
  .list-group-horizontal-xxl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
  }
  .list-group-horizontal-xxl>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--ct-list-group-border-radius);
    border-top-right-radius: 0
  }
  .list-group-horizontal-xxl>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--ct-list-group-border-radius);
    border-bottom-left-radius: 0
  }
  .list-group-horizontal-xxl>.list-group-item.active {
    margin-top: 0
  }
  .list-group-horizontal-xxl>.list-group-item+.list-group-item {
    border-top-width: var(--ct-list-group-border-width);
    border-left-width: 0
  }
  .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--ct-list-group-border-width));
    border-left-width: var(--ct-list-group-border-width)
  }
}

.list-group-flush {
  border-radius: 0
}

.list-group-flush>.list-group-item {
  border-width: 0 0 var(--ct-list-group-border-width)
}

.list-group-flush>.list-group-item:last-child {
  border-bottom-width: 0
}

.list-group-item-primary {
  --ct-list-group-color: var(--ct-primary-text-emphasis);
  --ct-list-group-bg: var(--ct-primary-bg-subtle);
  --ct-list-group-border-color: var(--ct-primary-border-subtle);
  --ct-list-group-action-hover-color: var(--ct-emphasis-color);
  --ct-list-group-action-hover-bg: var(--ct-primary-border-subtle);
  --ct-list-group-action-active-color: var(--ct-emphasis-color);
  --ct-list-group-action-active-bg: var(--ct-primary-border-subtle);
  --ct-list-group-active-color: var(--ct-primary-bg-subtle);
  --ct-list-group-active-bg: var(--ct-primary-text-emphasis);
  --ct-list-group-active-border-color: var(--ct-primary-text-emphasis)
}

.list-group-item-secondary {
  --ct-list-group-color: var(--ct-secondary-text-emphasis);
  --ct-list-group-bg: var(--ct-secondary-bg-subtle);
  --ct-list-group-border-color: var(--ct-secondary-border-subtle);
  --ct-list-group-action-hover-color: var(--ct-emphasis-color);
  --ct-list-group-action-hover-bg: var(--ct-secondary-border-subtle);
  --ct-list-group-action-active-color: var(--ct-emphasis-color);
  --ct-list-group-action-active-bg: var(--ct-secondary-border-subtle);
  --ct-list-group-active-color: var(--ct-secondary-bg-subtle);
  --ct-list-group-active-bg: var(--ct-secondary-text-emphasis);
  --ct-list-group-active-border-color: var(--ct-secondary-text-emphasis)
}

.list-group-item-success {
  --ct-list-group-color: var(--ct-success-text-emphasis);
  --ct-list-group-bg: var(--ct-success-bg-subtle);
  --ct-list-group-border-color: var(--ct-success-border-subtle);
  --ct-list-group-action-hover-color: var(--ct-emphasis-color);
  --ct-list-group-action-hover-bg: var(--ct-success-border-subtle);
  --ct-list-group-action-active-color: var(--ct-emphasis-color);
  --ct-list-group-action-active-bg: var(--ct-success-border-subtle);
  --ct-list-group-active-color: var(--ct-success-bg-subtle);
  --ct-list-group-active-bg: var(--ct-success-text-emphasis);
  --ct-list-group-active-border-color: var(--ct-success-text-emphasis)
}

.list-group-item-info {
  --ct-list-group-color: var(--ct-info-text-emphasis);
  --ct-list-group-bg: var(--ct-info-bg-subtle);
  --ct-list-group-border-color: var(--ct-info-border-subtle);
  --ct-list-group-action-hover-color: var(--ct-emphasis-color);
  --ct-list-group-action-hover-bg: var(--ct-info-border-subtle);
  --ct-list-group-action-active-color: var(--ct-emphasis-color);
  --ct-list-group-action-active-bg: var(--ct-info-border-subtle);
  --ct-list-group-active-color: var(--ct-info-bg-subtle);
  --ct-list-group-active-bg: var(--ct-info-text-emphasis);
  --ct-list-group-active-border-color: var(--ct-info-text-emphasis)
}

.list-group-item-warning {
  --ct-list-group-color: var(--ct-warning-text-emphasis);
  --ct-list-group-bg: var(--ct-warning-bg-subtle);
  --ct-list-group-border-color: var(--ct-warning-border-subtle);
  --ct-list-group-action-hover-color: var(--ct-emphasis-color);
  --ct-list-group-action-hover-bg: var(--ct-warning-border-subtle);
  --ct-list-group-action-active-color: var(--ct-emphasis-color);
  --ct-list-group-action-active-bg: var(--ct-warning-border-subtle);
  --ct-list-group-active-color: var(--ct-warning-bg-subtle);
  --ct-list-group-active-bg: var(--ct-warning-text-emphasis);
  --ct-list-group-active-border-color: var(--ct-warning-text-emphasis)
}

.list-group-item-danger {
  --ct-list-group-color: var(--ct-danger-text-emphasis);
  --ct-list-group-bg: var(--ct-danger-bg-subtle);
  --ct-list-group-border-color: var(--ct-danger-border-subtle);
  --ct-list-group-action-hover-color: var(--ct-emphasis-color);
  --ct-list-group-action-hover-bg: var(--ct-danger-border-subtle);
  --ct-list-group-action-active-color: var(--ct-emphasis-color);
  --ct-list-group-action-active-bg: var(--ct-danger-border-subtle);
  --ct-list-group-active-color: var(--ct-danger-bg-subtle);
  --ct-list-group-active-bg: var(--ct-danger-text-emphasis);
  --ct-list-group-active-border-color: var(--ct-danger-text-emphasis)
}

.list-group-item-light {
  --ct-list-group-color: var(--ct-light-text-emphasis);
  --ct-list-group-bg: var(--ct-light-bg-subtle);
  --ct-list-group-border-color: var(--ct-light-border-subtle);
  --ct-list-group-action-hover-color: var(--ct-emphasis-color);
  --ct-list-group-action-hover-bg: var(--ct-light-border-subtle);
  --ct-list-group-action-active-color: var(--ct-emphasis-color);
  --ct-list-group-action-active-bg: var(--ct-light-border-subtle);
  --ct-list-group-active-color: var(--ct-light-bg-subtle);
  --ct-list-group-active-bg: var(--ct-light-text-emphasis);
  --ct-list-group-active-border-color: var(--ct-light-text-emphasis)
}

.list-group-item-dark {
  --ct-list-group-color: var(--ct-dark-text-emphasis);
  --ct-list-group-bg: var(--ct-dark-bg-subtle);
  --ct-list-group-border-color: var(--ct-dark-border-subtle);
  --ct-list-group-action-hover-color: var(--ct-emphasis-color);
  --ct-list-group-action-hover-bg: var(--ct-dark-border-subtle);
  --ct-list-group-action-active-color: var(--ct-emphasis-color);
  --ct-list-group-action-active-bg: var(--ct-dark-border-subtle);
  --ct-list-group-active-color: var(--ct-dark-bg-subtle);
  --ct-list-group-active-bg: var(--ct-dark-text-emphasis);
  --ct-list-group-active-border-color: var(--ct-dark-text-emphasis)
}

.btn-close {
  --ct-btn-close-color: var(--ct-secondary-color);
  --ct-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='var%28--ct-secondary-color%29'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
  --ct-btn-close-opacity: 0.5;
  --ct-btn-close-hover-opacity: 0.8;
  --ct-btn-close-focus-shadow: none;
  --ct-btn-close-focus-opacity: 1;
  --ct-btn-close-disabled-opacity: 0.25;
  --ct-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: .25em .25em;
  color: var(--ct-btn-close-color);
  background: transparent var(--ct-btn-close-bg) center/1em auto no-repeat;
  border: 0;
  border-radius: .375rem;
  opacity: var(--ct-btn-close-opacity)
}

.btn-close:hover {
  color: var(--ct-btn-close-color);
  text-decoration: none;
  opacity: var(--ct-btn-close-hover-opacity)
}

.btn-close:focus {
  outline: 0;
  -webkit-box-shadow: var(--ct-btn-close-focus-shadow);
  box-shadow: var(--ct-btn-close-focus-shadow);
  opacity: var(--ct-btn-close-focus-opacity)
}

.btn-close.disabled,
.btn-close:disabled {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  opacity: var(--ct-btn-close-disabled-opacity)
}

.btn-close-white {
  -webkit-filter: var(--ct-btn-close-white-filter);
  filter: var(--ct-btn-close-white-filter)
}

[data-bs-theme=dark] .btn-close {
  -webkit-filter: var(--ct-btn-close-white-filter);
  filter: var(--ct-btn-close-white-filter)
}

.toast {
  --ct-toast-zindex: 1090;
  --ct-toast-padding-x: 0.75rem;
  --ct-toast-padding-y: 0.5rem;
  --ct-toast-spacing: 1.25rem;
  --ct-toast-max-width: 350px;
  --ct-toast-font-size: 0.875rem;
  --ct-toast-bg: var(--ct-secondary-bg);
  --ct-toast-border-width: var(--ct-border-width);
  --ct-toast-border-color: var(--ct-border-color);
  --ct-toast-border-radius: var(--ct-border-radius);
  --ct-toast-box-shadow: var(--ct-box-shadow);
  --ct-toast-header-color: var(--ct-secondary-color);
  --ct-toast-header-bg: rgba(var(--ct-body-bg-rgb), 0.85);
  --ct-toast-header-border-color: var(--ct-border-color);
  width: var(--ct-toast-max-width);
  max-width: 100%;
  font-size: var(--ct-toast-font-size);
  color: var(--ct-toast-color);
  pointer-events: auto;
  background-color: var(--ct-toast-bg);
  background-clip: padding-box;
  border: var(--ct-toast-border-width) solid var(--ct-toast-border-color);
  -webkit-box-shadow: var(--ct-toast-box-shadow);
  box-shadow: var(--ct-toast-box-shadow);
  border-radius: var(--ct-toast-border-radius)
}

.toast.showing {
  opacity: 0
}

.toast:not(.show) {
  display: none
}

.toast-container {
  --ct-toast-zindex: 1090;
  position: absolute;
  z-index: var(--ct-toast-zindex);
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none
}

.toast-container>:not(:last-child) {
  margin-bottom: var(--ct-toast-spacing)
}

.toast-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: var(--ct-toast-padding-y) var(--ct-toast-padding-x);
  color: var(--ct-toast-header-color);
  background-color: var(--ct-toast-header-bg);
  background-clip: padding-box;
  border-bottom: var(--ct-toast-border-width) solid var(--ct-toast-header-border-color);
  border-top-left-radius: calc(var(--ct-toast-border-radius) - var(--ct-toast-border-width));
  border-top-right-radius: calc(var(--ct-toast-border-radius) - var(--ct-toast-border-width))
}

.toast-header .btn-close {
  margin-right: calc(-.5 * var(--ct-toast-padding-x));
  margin-left: var(--ct-toast-padding-x)
}

.toast-body {
  padding: var(--ct-toast-padding-x);
  word-wrap: break-word
}

.modal {
  --ct-modal-zindex: 1055;
  --ct-modal-width: 500px;
  --ct-modal-padding: 1rem;
  --ct-modal-margin: 0.5rem;
  --ct-modal-bg: var(--ct-secondary-bg);
  --ct-modal-border-color: transparent;
  --ct-modal-border-width: var(--ct-border-width);
  --ct-modal-border-radius: var(--ct-border-radius-sm);
  --ct-modal-box-shadow: 0 0.125rem 0.25rem rgba(var(--ct-body-color-rgb), 0.15);
  --ct-modal-inner-border-radius: calc(var(--ct-border-radius-sm) - (var(--ct-border-width)));
  --ct-modal-header-padding-x: 1rem;
  --ct-modal-header-padding-y: 1rem;
  --ct-modal-header-padding: 1rem 1rem;
  --ct-modal-header-border-color: var(--ct-border-color);
  --ct-modal-header-border-width: var(--ct-border-width);
  --ct-modal-title-line-height: 1.5;
  --ct-modal-footer-gap: 0.5rem;
  --ct-modal-footer-border-color: var(--ct-border-color);
  --ct-modal-footer-border-width: var(--ct-border-width);
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--ct-modal-zindex);
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: var(--ct-modal-margin);
  pointer-events: none
}

.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform .3s ease-out;
  transition: -webkit-transform .3s ease-out;
  transition: transform .3s ease-out;
  transition: transform .3s ease-out, -webkit-transform .3s ease-out;
  -webkit-transform: translate(0, -50px);
  transform: translate(0, -50px)
}

@media (prefers-reduced-motion:reduce) {
  .modal.fade .modal-dialog {
    -webkit-transition: none;
    transition: none
  }
}

.modal.show .modal-dialog {
  -webkit-transform: none;
  transform: none
}

.modal.modal-static .modal-dialog {
  -webkit-transform: scale(1.02);
  transform: scale(1.02)
}

.modal-dialog-scrollable {
  height: calc(100% - var(--ct-modal-margin) * 2)
}

.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto
}

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - var(--ct-modal-margin) * 2)
}

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  color: var(--ct-modal-color);
  pointer-events: auto;
  background-color: var(--ct-modal-bg);
  background-clip: padding-box;
  border: var(--ct-modal-border-width) solid var(--ct-modal-border-color);
  border-radius: var(--ct-modal-border-radius);
  outline: 0
}

.modal-backdrop {
  --ct-backdrop-zindex: 1050;
  --ct-backdrop-bg: var(--ct-emphasis-color);
  --ct-backdrop-opacity: 0.5;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--ct-backdrop-zindex);
  width: 100vw;
  height: 100vh;
  background-color: var(--ct-backdrop-bg)
}

.modal-backdrop.fade {
  opacity: 0
}

.modal-backdrop.show {
  opacity: var(--ct-backdrop-opacity)
}

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: var(--ct-modal-header-padding);
  border-bottom: var(--ct-modal-header-border-width) solid var(--ct-modal-header-border-color);
  border-top-left-radius: var(--ct-modal-inner-border-radius);
  border-top-right-radius: var(--ct-modal-inner-border-radius)
}

.modal-header .btn-close {
  padding: calc(var(--ct-modal-header-padding-y) * .5) calc(var(--ct-modal-header-padding-x) * .5);
  margin: calc(-.5 * var(--ct-modal-header-padding-y)) calc(-.5 * var(--ct-modal-header-padding-x)) calc(-.5 * var(--ct-modal-header-padding-y)) auto
}

.modal-title {
  margin-bottom: 0;
  line-height: var(--ct-modal-title-line-height)
}

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: var(--ct-modal-padding)
}

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: calc(var(--ct-modal-padding) - var(--ct-modal-footer-gap) * .5);
  background-color: var(--ct-modal-footer-bg);
  border-top: var(--ct-modal-footer-border-width) solid var(--ct-modal-footer-border-color);
  border-bottom-right-radius: var(--ct-modal-inner-border-radius);
  border-bottom-left-radius: var(--ct-modal-inner-border-radius)
}

.modal-footer>* {
  margin: calc(var(--ct-modal-footer-gap) * .5)
}

@media (min-width:576px) {
  .modal {
    --ct-modal-margin: 1.75rem;
    --ct-modal-box-shadow: var(--ct-box-shadow)
  }
  .modal-dialog {
    max-width: var(--ct-modal-width);
    margin-right: auto;
    margin-left: auto
  }
  .modal-sm {
    --ct-modal-width: 300px
  }
}

@media (min-width:992px) {
  .modal-lg,
  .modal-xl {
    --ct-modal-width: 800px
  }
}

@media (min-width:1200px) {
  .modal-xl {
    --ct-modal-width: 1140px
  }
}

.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0
}

.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0
}

.modal-fullscreen .modal-footer,
.modal-fullscreen .modal-header {
  border-radius: 0
}

.modal-fullscreen .modal-body {
  overflow-y: auto
}

@media (max-width:575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0
  }
  .modal-fullscreen-sm-down .modal-footer,
  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto
  }
}

@media (max-width:767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0
  }
  .modal-fullscreen-md-down .modal-footer,
  .modal-fullscreen-md-down .modal-header {
    border-radius: 0
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto
  }
}

@media (max-width:991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0
  }
  .modal-fullscreen-lg-down .modal-footer,
  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto
  }
}

@media (max-width:1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0
  }
  .modal-fullscreen-xl-down .modal-footer,
  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto
  }
}

@media (max-width:1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0
  }
  .modal-fullscreen-xxl-down .modal-footer,
  .modal-fullscreen-xxl-down .modal-header {
    border-radius: 0
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto
  }
}

.tooltip {
  --ct-tooltip-zindex: 1080;
  --ct-tooltip-max-width: 200px;
  --ct-tooltip-padding-x: 0.75rem;
  --ct-tooltip-padding-y: 0.375rem;
  --ct-tooltip-font-size: 0.85rem;
  --ct-tooltip-color: var(--ct-body-bg);
  --ct-tooltip-bg: var(--ct-body-color);
  --ct-tooltip-border-radius: var(--ct-border-radius);
  --ct-tooltip-opacity: 1;
  --ct-tooltip-arrow-width: 0.8rem;
  --ct-tooltip-arrow-height: 0.4rem;
  z-index: var(--ct-tooltip-zindex);
  display: block;
  margin: var(--ct-tooltip-margin);
  font-family: var(--ct-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--ct-tooltip-font-size);
  word-wrap: break-word;
  opacity: 0
}

.tooltip.show {
  opacity: var(--ct-tooltip-opacity)
}

.tooltip .tooltip-arrow {
  display: block;
  width: var(--ct-tooltip-arrow-width);
  height: var(--ct-tooltip-arrow-height)
}

.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid
}

.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow,
.bs-tooltip-top .tooltip-arrow {
  bottom: calc(-1 * var(--ct-tooltip-arrow-height))
}

.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before,
.bs-tooltip-top .tooltip-arrow::before {
  top: -1px;
  border-width: var(--ct-tooltip-arrow-height) calc(var(--ct-tooltip-arrow-width) * .5) 0;
  border-top-color: var(--ct-tooltip-bg)
}

.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow,
.bs-tooltip-end .tooltip-arrow {
  left: calc(-1 * var(--ct-tooltip-arrow-height));
  width: var(--ct-tooltip-arrow-height);
  height: var(--ct-tooltip-arrow-width)
}

.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before,
.bs-tooltip-end .tooltip-arrow::before {
  right: -1px;
  border-width: calc(var(--ct-tooltip-arrow-width) * .5) var(--ct-tooltip-arrow-height) calc(var(--ct-tooltip-arrow-width) * .5) 0;
  border-right-color: var(--ct-tooltip-bg)
}

.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow,
.bs-tooltip-bottom .tooltip-arrow {
  top: calc(-1 * var(--ct-tooltip-arrow-height))
}

.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before,
.bs-tooltip-bottom .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 calc(var(--ct-tooltip-arrow-width) * .5) var(--ct-tooltip-arrow-height);
  border-bottom-color: var(--ct-tooltip-bg)
}

.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow,
.bs-tooltip-start .tooltip-arrow {
  right: calc(-1 * var(--ct-tooltip-arrow-height));
  width: var(--ct-tooltip-arrow-height);
  height: var(--ct-tooltip-arrow-width)
}

.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before,
.bs-tooltip-start .tooltip-arrow::before {
  left: -1px;
  border-width: calc(var(--ct-tooltip-arrow-width) * .5) 0 calc(var(--ct-tooltip-arrow-width) * .5) var(--ct-tooltip-arrow-height);
  border-left-color: var(--ct-tooltip-bg)
}

.tooltip-inner {
  max-width: var(--ct-tooltip-max-width);
  padding: var(--ct-tooltip-padding-y) var(--ct-tooltip-padding-x);
  color: var(--ct-tooltip-color);
  text-align: center;
  background-color: var(--ct-tooltip-bg);
  border-radius: var(--ct-tooltip-border-radius)
}

.popover {
  --ct-popover-zindex: 1070;
  --ct-popover-max-width: 276px;
  --ct-popover-font-size: 0.85rem;
  --ct-popover-bg: var(--ct-secondary-bg);
  --ct-popover-border-width: var(--ct-border-width);
  --ct-popover-border-color: var(--ct-border-color);
  --ct-popover-border-radius: var(--ct-border-radius-lg);
  --ct-popover-inner-border-radius: calc(var(--ct-border-radius-lg) - var(--ct-border-width));
  --ct-popover-box-shadow: 0 1px 3px rgba(27, 23, 30, 0.1);
  --ct-popover-header-padding-x: 0.8rem;
  --ct-popover-header-padding-y: 0.7rem;
  --ct-popover-header-font-size: 0.875rem;
  --ct-popover-header-color: inherit;
  --ct-popover-header-bg: var(--ct-tertiary-bg);
  --ct-popover-body-padding-x: 0.75rem;
  --ct-popover-body-padding-y: 0.5rem;
  --ct-popover-body-color: var(--ct-body-color);
  --ct-popover-arrow-width: 1rem;
  --ct-popover-arrow-height: 0.5rem;
  --ct-popover-arrow-border: var(--ct-popover-border-color);
  z-index: var(--ct-popover-zindex);
  display: block;
  max-width: var(--ct-popover-max-width);
  font-family: var(--ct-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--ct-popover-font-size);
  word-wrap: break-word;
  background-color: var(--ct-popover-bg);
  background-clip: padding-box;
  border: var(--ct-popover-border-width) solid var(--ct-popover-border-color);
  border-radius: var(--ct-popover-border-radius)
}

.popover .popover-arrow {
  display: block;
  width: var(--ct-popover-arrow-width);
  height: var(--ct-popover-arrow-height)
}

.popover .popover-arrow::after,
.popover .popover-arrow::before {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
  border-width: 0
}

.bs-popover-auto[data-popper-placement^=top]>.popover-arrow,
.bs-popover-top>.popover-arrow {
  bottom: calc(-1 * (var(--ct-popover-arrow-height)) - var(--ct-popover-border-width))
}

.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,
.bs-popover-top>.popover-arrow::after,
.bs-popover-top>.popover-arrow::before {
  border-width: var(--ct-popover-arrow-height) calc(var(--ct-popover-arrow-width) * .5) 0
}

.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,
.bs-popover-top>.popover-arrow::before {
  bottom: 0;
  border-top-color: var(--ct-popover-arrow-border)
}

.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,
.bs-popover-top>.popover-arrow::after {
  bottom: var(--ct-popover-border-width);
  border-top-color: var(--ct-popover-bg)
}

.bs-popover-auto[data-popper-placement^=right]>.popover-arrow,
.bs-popover-end>.popover-arrow {
  left: calc(-1 * (var(--ct-popover-arrow-height)) - var(--ct-popover-border-width));
  width: var(--ct-popover-arrow-height);
  height: var(--ct-popover-arrow-width)
}

.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,
.bs-popover-end>.popover-arrow::after,
.bs-popover-end>.popover-arrow::before {
  border-width: calc(var(--ct-popover-arrow-width) * .5) var(--ct-popover-arrow-height) calc(var(--ct-popover-arrow-width) * .5) 0
}

.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,
.bs-popover-end>.popover-arrow::before {
  left: 0;
  border-right-color: var(--ct-popover-arrow-border)
}

.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,
.bs-popover-end>.popover-arrow::after {
  left: var(--ct-popover-border-width);
  border-right-color: var(--ct-popover-bg)
}

.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow,
.bs-popover-bottom>.popover-arrow {
  top: calc(-1 * (var(--ct-popover-arrow-height)) - var(--ct-popover-border-width))
}

.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,
.bs-popover-bottom>.popover-arrow::after,
.bs-popover-bottom>.popover-arrow::before {
  border-width: 0 calc(var(--ct-popover-arrow-width) * .5) var(--ct-popover-arrow-height)
}

.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,
.bs-popover-bottom>.popover-arrow::before {
  top: 0;
  border-bottom-color: var(--ct-popover-arrow-border)
}

.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,
.bs-popover-bottom>.popover-arrow::after {
  top: var(--ct-popover-border-width);
  border-bottom-color: var(--ct-popover-bg)
}

.bs-popover-auto[data-popper-placement^=bottom] .popover-header::before,
.bs-popover-bottom .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: var(--ct-popover-arrow-width);
  margin-left: calc(-.5 * var(--ct-popover-arrow-width));
  content: "";
  border-bottom: var(--ct-popover-border-width) solid var(--ct-popover-header-bg)
}

.bs-popover-auto[data-popper-placement^=left]>.popover-arrow,
.bs-popover-start>.popover-arrow {
  right: calc(-1 * (var(--ct-popover-arrow-height)) - var(--ct-popover-border-width));
  width: var(--ct-popover-arrow-height);
  height: var(--ct-popover-arrow-width)
}

.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,
.bs-popover-start>.popover-arrow::after,
.bs-popover-start>.popover-arrow::before {
  border-width: calc(var(--ct-popover-arrow-width) * .5) 0 calc(var(--ct-popover-arrow-width) * .5) var(--ct-popover-arrow-height)
}

.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,
.bs-popover-start>.popover-arrow::before {
  right: 0;
  border-left-color: var(--ct-popover-arrow-border)
}

.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,
.bs-popover-start>.popover-arrow::after {
  right: var(--ct-popover-border-width);
  border-left-color: var(--ct-popover-bg)
}

.popover-header {
  padding: var(--ct-popover-header-padding-y) var(--ct-popover-header-padding-x);
  margin-bottom: 0;
  font-size: var(--ct-popover-header-font-size);
  color: var(--ct-popover-header-color);
  background-color: var(--ct-popover-header-bg);
  border-bottom: var(--ct-popover-border-width) solid var(--ct-popover-border-color);
  border-top-left-radius: var(--ct-popover-inner-border-radius);
  border-top-right-radius: var(--ct-popover-inner-border-radius)
}

.popover-header:empty {
  display: none
}

.popover-body {
  padding: var(--ct-popover-body-padding-y) var(--ct-popover-body-padding-x);
  color: var(--ct-popover-body-color)
}

.carousel {
  position: relative
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: ""
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform .6s ease-in-out;
  transition: -webkit-transform .6s ease-in-out;
  transition: transform .6s ease-in-out;
  transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
  .carousel-item {
    -webkit-transition: none;
    transition: none
  }
}

.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
  display: block
}

.active.carousel-item-end,
.carousel-item-next:not(.carousel-item-start) {
  -webkit-transform: translateX(100%);
  transform: translateX(100%)
}

.active.carousel-item-start,
.carousel-item-prev:not(.carousel-item-end) {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%)
}

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
  transform: none
}

.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end,
.carousel-fade .carousel-item.active {
  z-index: 1;
  opacity: 1
}

.carousel-fade .active.carousel-item-end,
.carousel-fade .active.carousel-item-start {
  z-index: 0;
  opacity: 0;
  -webkit-transition: opacity 0s .6s;
  transition: opacity 0s .6s
}

@media (prefers-reduced-motion:reduce) {
  .carousel-fade .active.carousel-item-end,
  .carousel-fade .active.carousel-item-start {
    -webkit-transition: none;
    transition: none
  }
}

.carousel-control-next,
.carousel-control-prev {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: 0 0;
  border: 0;
  opacity: .5;
  -webkit-transition: opacity .15s ease;
  transition: opacity .15s ease
}

@media (prefers-reduced-motion:reduce) {
  .carousel-control-next,
  .carousel-control-prev {
    -webkit-transition: none;
    transition: none
  }
}

.carousel-control-next:focus,
.carousel-control-next:hover,
.carousel-control-prev:focus,
.carousel-control-prev:hover {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: .9
}

.carousel-control-prev {
  left: 0
}

.carousel-control-next {
  right: 0
}

.carousel-control-next-icon,
.carousel-control-prev-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%
}



.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%
}

.carousel-indicators [data-bs-target] {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-box-flex: 0;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: .5;
  -webkit-transition: opacity .6s ease;
  transition: opacity .6s ease
}

@media (prefers-reduced-motion:reduce) {
  .carousel-indicators [data-bs-target] {
    -webkit-transition: none;
    transition: none
  }
}

.carousel-indicators .active {
  opacity: 1
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center
}

.carousel-dark .carousel-control-next-icon,
.carousel-dark .carousel-control-prev-icon {
  -webkit-filter: invert(1) grayscale(100);
  filter: invert(1) grayscale(100)
}

.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000
}

.carousel-dark .carousel-caption {
  color: #000
}

[data-bs-theme=dark] .carousel .carousel-control-next-icon,
[data-bs-theme=dark] .carousel .carousel-control-prev-icon,
[data-bs-theme=dark].carousel .carousel-control-next-icon,
[data-bs-theme=dark].carousel .carousel-control-prev-icon {
  -webkit-filter: invert(1) grayscale(100);
  filter: invert(1) grayscale(100)
}

[data-bs-theme=dark] .carousel .carousel-indicators [data-bs-target],
[data-bs-theme=dark].carousel .carousel-indicators [data-bs-target] {
  background-color: #000
}

[data-bs-theme=dark] .carousel .carousel-caption,
[data-bs-theme=dark].carousel .carousel-caption {
  color: #000
}

.spinner-border,
.spinner-grow {
  display: inline-block;
  width: var(--ct-spinner-width);
  height: var(--ct-spinner-height);
  vertical-align: var(--ct-spinner-vertical-align);
  border-radius: 50%;
  -webkit-animation: var(--ct-spinner-animation-speed) linear infinite var(--ct-spinner-animation-name);
  animation: var(--ct-spinner-animation-speed) linear infinite var(--ct-spinner-animation-name)
}

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg)
  }
}

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg)
  }
}

.spinner-border {
  --ct-spinner-width: 2rem;
  --ct-spinner-height: 2rem;
  --ct-spinner-vertical-align: -0.25em;
  --ct-spinner-border-width: 0.25em;
  --ct-spinner-animation-speed: 0.75s;
  --ct-spinner-animation-name: spinner-border;
  border: var(--ct-spinner-border-width) solid currentcolor;
  border-right-color: transparent
}

.spinner-border-sm {
  --ct-spinner-width: 1rem;
  --ct-spinner-height: 1rem;
  --ct-spinner-border-width: 0.2em
}

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0)
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0)
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

.spinner-grow {
  --ct-spinner-width: 2rem;
  --ct-spinner-height: 2rem;
  --ct-spinner-vertical-align: -0.25em;
  --ct-spinner-animation-speed: 0.75s;
  --ct-spinner-animation-name: spinner-grow;
  background-color: currentcolor;
  opacity: 0
}

.spinner-grow-sm {
  --ct-spinner-width: 1rem;
  --ct-spinner-height: 1rem
}

@media (prefers-reduced-motion:reduce) {
  .spinner-border,
  .spinner-grow {
    --ct-spinner-animation-speed: 1.5s
  }
}

.offcanvas,
.offcanvas-lg,
.offcanvas-md,
.offcanvas-sm,
.offcanvas-xl,
.offcanvas-xxl {
  --ct-offcanvas-zindex: 1045;
  --ct-offcanvas-width: 400px;
  --ct-offcanvas-height: 30vh;
  --ct-offcanvas-padding-x: 1rem;
  --ct-offcanvas-padding-y: 1rem;
  --ct-offcanvas-color: var(--ct-body-color);
  --ct-offcanvas-bg: var(--ct-secondary-bg);
  --ct-offcanvas-border-width: var(--ct-border-width);
  --ct-offcanvas-border-color: transparent;
  --ct-offcanvas-box-shadow: 0 0.125rem 0.25rem rgba(var(--ct-body-color-rgb), 0.15);
  --ct-offcanvas-transition: transform 0.3s ease-in-out;
  --ct-offcanvas-title-line-height: 1.5
}

@media (max-width:575.98px) {
  .offcanvas-sm {
    position: fixed;
    bottom: 0;
    z-index: var(--ct-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--ct-offcanvas-color);
    visibility: hidden;
    background-color: var(--ct-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-transition: var(--ct-offcanvas-transition);
    transition: var(--ct-offcanvas-transition)
  }
}

@media (max-width:575.98px) and (prefers-reduced-motion:reduce) {
  .offcanvas-sm {
    -webkit-transition: none;
    transition: none
  }
}

@media (max-width:575.98px) {
  .offcanvas-sm.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--ct-offcanvas-width);
    border-right: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
  }
}

@media (max-width:575.98px) {
  .offcanvas-sm.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--ct-offcanvas-width);
    border-left: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
  }
}

@media (max-width:575.98px) {
  .offcanvas-sm.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%)
  }
}

@media (max-width:575.98px) {
  .offcanvas-sm.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-top: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    transform: translateY(100%)
  }
}

@media (max-width:575.98px) {
  .offcanvas-sm.show:not(.hiding),
  .offcanvas-sm.showing {
    -webkit-transform: none;
    transform: none
  }
}

@media (max-width:575.98px) {
  .offcanvas-sm.hiding,
  .offcanvas-sm.show,
  .offcanvas-sm.showing {
    visibility: visible
  }
}

@media (min-width:576px) {
  .offcanvas-sm {
    --ct-offcanvas-height: auto;
    --ct-offcanvas-border-width: 0;
    background-color: transparent !important
  }
  .offcanvas-sm .offcanvas-header {
    display: none
  }
  .offcanvas-sm .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important
  }
}

@media (max-width:767.98px) {
  .offcanvas-md {
    position: fixed;
    bottom: 0;
    z-index: var(--ct-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--ct-offcanvas-color);
    visibility: hidden;
    background-color: var(--ct-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-transition: var(--ct-offcanvas-transition);
    transition: var(--ct-offcanvas-transition)
  }
}

@media (max-width:767.98px) and (prefers-reduced-motion:reduce) {
  .offcanvas-md {
    -webkit-transition: none;
    transition: none
  }
}

@media (max-width:767.98px) {
  .offcanvas-md.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--ct-offcanvas-width);
    border-right: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
  }
}

@media (max-width:767.98px) {
  .offcanvas-md.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--ct-offcanvas-width);
    border-left: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
  }
}

@media (max-width:767.98px) {
  .offcanvas-md.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%)
  }
}

@media (max-width:767.98px) {
  .offcanvas-md.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-top: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    transform: translateY(100%)
  }
}

@media (max-width:767.98px) {
  .offcanvas-md.show:not(.hiding),
  .offcanvas-md.showing {
    -webkit-transform: none;
    transform: none
  }
}

@media (max-width:767.98px) {
  .offcanvas-md.hiding,
  .offcanvas-md.show,
  .offcanvas-md.showing {
    visibility: visible
  }
}

@media (min-width:768px) {
  .offcanvas-md {
    --ct-offcanvas-height: auto;
    --ct-offcanvas-border-width: 0;
    background-color: transparent !important
  }
  .offcanvas-md .offcanvas-header {
    display: none
  }
  .offcanvas-md .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important
  }
}

@media (max-width:991.98px) {
  .offcanvas-lg {
    position: fixed;
    bottom: 0;
    z-index: var(--ct-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--ct-offcanvas-color);
    visibility: hidden;
    background-color: var(--ct-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-transition: var(--ct-offcanvas-transition);
    transition: var(--ct-offcanvas-transition)
  }
}

@media (max-width:991.98px) and (prefers-reduced-motion:reduce) {
  .offcanvas-lg {
    -webkit-transition: none;
    transition: none
  }
}

@media (max-width:991.98px) {
  .offcanvas-lg.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--ct-offcanvas-width);
    border-right: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
  }
}

@media (max-width:991.98px) {
  .offcanvas-lg.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--ct-offcanvas-width);
    border-left: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
  }
}

@media (max-width:991.98px) {
  .offcanvas-lg.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%)
  }
}

@media (max-width:991.98px) {
  .offcanvas-lg.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-top: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    transform: translateY(100%)
  }
}

@media (max-width:991.98px) {
  .offcanvas-lg.show:not(.hiding),
  .offcanvas-lg.showing {
    -webkit-transform: none;
    transform: none
  }
}

@media (max-width:991.98px) {
  .offcanvas-lg.hiding,
  .offcanvas-lg.show,
  .offcanvas-lg.showing {
    visibility: visible
  }
}

@media (min-width:992px) {
  .offcanvas-lg {
    --ct-offcanvas-height: auto;
    --ct-offcanvas-border-width: 0;
    background-color: transparent !important
  }
  .offcanvas-lg .offcanvas-header {
    display: none
  }
  .offcanvas-lg .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important
  }
}

@media (max-width:1199.98px) {
  .offcanvas-xl {
    position: fixed;
    bottom: 0;
    z-index: var(--ct-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--ct-offcanvas-color);
    visibility: hidden;
    background-color: var(--ct-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-transition: var(--ct-offcanvas-transition);
    transition: var(--ct-offcanvas-transition)
  }
}

@media (max-width:1199.98px) and (prefers-reduced-motion:reduce) {
  .offcanvas-xl {
    -webkit-transition: none;
    transition: none
  }
}

@media (max-width:1199.98px) {
  .offcanvas-xl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--ct-offcanvas-width);
    border-right: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
  }
}

@media (max-width:1199.98px) {
  .offcanvas-xl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--ct-offcanvas-width);
    border-left: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
  }
}

@media (max-width:1199.98px) {
  .offcanvas-xl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%)
  }
}

@media (max-width:1199.98px) {
  .offcanvas-xl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-top: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    transform: translateY(100%)
  }
}

@media (max-width:1199.98px) {
  .offcanvas-xl.show:not(.hiding),
  .offcanvas-xl.showing {
    -webkit-transform: none;
    transform: none
  }
}

@media (max-width:1199.98px) {
  .offcanvas-xl.hiding,
  .offcanvas-xl.show,
  .offcanvas-xl.showing {
    visibility: visible
  }
}

@media (min-width:1200px) {
  .offcanvas-xl {
    --ct-offcanvas-height: auto;
    --ct-offcanvas-border-width: 0;
    background-color: transparent !important
  }
  .offcanvas-xl .offcanvas-header {
    display: none
  }
  .offcanvas-xl .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important
  }
}

@media (max-width:1399.98px) {
  .offcanvas-xxl {
    position: fixed;
    bottom: 0;
    z-index: var(--ct-offcanvas-zindex);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 100%;
    color: var(--ct-offcanvas-color);
    visibility: hidden;
    background-color: var(--ct-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    -webkit-transition: var(--ct-offcanvas-transition);
    transition: var(--ct-offcanvas-transition)
  }
}

@media (max-width:1399.98px) and (prefers-reduced-motion:reduce) {
  .offcanvas-xxl {
    -webkit-transition: none;
    transition: none
  }
}

@media (max-width:1399.98px) {
  .offcanvas-xxl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--ct-offcanvas-width);
    border-right: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
  }
}

@media (max-width:1399.98px) {
  .offcanvas-xxl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--ct-offcanvas-width);
    border-left: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
  }
}

@media (max-width:1399.98px) {
  .offcanvas-xxl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%)
  }
}

@media (max-width:1399.98px) {
  .offcanvas-xxl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--ct-offcanvas-height);
    max-height: 100%;
    border-top: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
    -webkit-transform: translateY(100%);
    transform: translateY(100%)
  }
}

@media (max-width:1399.98px) {
  .offcanvas-xxl.show:not(.hiding),
  .offcanvas-xxl.showing {
    -webkit-transform: none;
    transform: none
  }
}

@media (max-width:1399.98px) {
  .offcanvas-xxl.hiding,
  .offcanvas-xxl.show,
  .offcanvas-xxl.showing {
    visibility: visible
  }
}

@media (min-width:1400px) {
  .offcanvas-xxl {
    --ct-offcanvas-height: auto;
    --ct-offcanvas-border-width: 0;
    background-color: transparent !important
  }
  .offcanvas-xxl .offcanvas-header {
    display: none
  }
  .offcanvas-xxl .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important
  }
}

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: var(--ct-offcanvas-zindex);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  max-width: 100%;
  color: var(--ct-offcanvas-color);
  visibility: hidden;
  background-color: var(--ct-offcanvas-bg);
  background-clip: padding-box;
  outline: 0;
  -webkit-transition: var(--ct-offcanvas-transition);
  transition: var(--ct-offcanvas-transition)
}

@media (prefers-reduced-motion:reduce) {
  .offcanvas {
    -webkit-transition: none;
    transition: none
  }
}

.offcanvas.offcanvas-start {
  top: 0;
  left: 0;
  width: var(--ct-offcanvas-width);
  border-right: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%)
}

.offcanvas.offcanvas-end {
  top: 0;
  right: 0;
  width: var(--ct-offcanvas-width);
  border-left: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
  -webkit-transform: translateX(100%);
  transform: translateX(100%)
}

.offcanvas.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: var(--ct-offcanvas-height);
  max-height: 100%;
  border-bottom: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%)
}

.offcanvas.offcanvas-bottom {
  right: 0;
  left: 0;
  height: var(--ct-offcanvas-height);
  max-height: 100%;
  border-top: var(--ct-offcanvas-border-width) solid var(--ct-offcanvas-border-color);
  -webkit-transform: translateY(100%);
  transform: translateY(100%)
}

.offcanvas.show:not(.hiding),
.offcanvas.showing {
  -webkit-transform: none;
  transform: none
}

.offcanvas.hiding,
.offcanvas.show,
.offcanvas.showing {
  visibility: visible
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: var(--ct-emphasis-color)
}

.offcanvas-backdrop.fade {
  opacity: 0
}

.offcanvas-backdrop.show {
  opacity: .5
}

.offcanvas-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: var(--ct-offcanvas-padding-y) var(--ct-offcanvas-padding-x)
}

.offcanvas-header .btn-close {
  padding: calc(var(--ct-offcanvas-padding-y) * .5) calc(var(--ct-offcanvas-padding-x) * .5);
  margin-top: calc(-.5 * var(--ct-offcanvas-padding-y));
  margin-right: calc(-.5 * var(--ct-offcanvas-padding-x));
  margin-bottom: calc(-.5 * var(--ct-offcanvas-padding-y))
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: var(--ct-offcanvas-title-line-height)
}

.offcanvas-body {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  padding: var(--ct-offcanvas-padding-y) var(--ct-offcanvas-padding-x);
  overflow-y: auto
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentcolor;
  opacity: .5
}

.placeholder.btn::before {
  display: inline-block;
  content: ""
}

.placeholder-xs {
  min-height: .6em
}

.placeholder-sm {
  min-height: .8em
}

.placeholder-lg {
  min-height: 1.2em
}

.placeholder-glow .placeholder {
  -webkit-animation: placeholder-glow 2s ease-in-out infinite;
  animation: placeholder-glow 2s ease-in-out infinite
}

@-webkit-keyframes placeholder-glow {
  50% {
    opacity: .2
  }
}

@keyframes placeholder-glow {
  50% {
    opacity: .2
  }
}

.placeholder-wave {
  -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, .8) 75%, #000 95%);
  mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, .8) 75%, #000 95%);
  -webkit-mask-size: 200% 100%;
  mask-size: 200% 100%;
  -webkit-animation: placeholder-wave 2s linear infinite;
  animation: placeholder-wave 2s linear infinite
}

@-webkit-keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0;
    mask-position: -200% 0
  }
}

@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0;
    mask-position: -200% 0
  }
}

.clearfix::after {
  display: block;
  clear: both;
  content: ""
}

.text-bg-primary {
  color: #fff !important;
  background-color: RGBA(62, 96, 213, var(--ct-bg-opacity, 1)) !important
}

.text-bg-secondary {
  color: #fff !important;
  background-color: RGBA(108, 117, 125, var(--ct-bg-opacity, 1)) !important
}

.text-bg-success {
  color: #fff !important;
  background-color: RGBA(71, 173, 119, var(--ct-bg-opacity, 1)) !important
}

.text-bg-info {
  color: #fff !important;
  background-color: RGBA(22, 167, 233, var(--ct-bg-opacity, 1)) !important
}

.text-bg-warning {
  color: #fff !important;
  background-color: RGBA(255, 195, 90, var(--ct-bg-opacity, 1)) !important
}

.text-bg-danger {
  color: #fff !important;
  background-color: RGBA(241, 87, 118, var(--ct-bg-opacity, 1)) !important
}

.text-bg-light {
  color: #212529 !important;
  background-color: RGBA(242, 242, 247, var(--ct-bg-opacity, 1)) !important
}

.text-bg-dark {
  color: #fff !important;
  background-color: RGBA(33, 37, 41, var(--ct-bg-opacity, 1)) !important
}

.link-primary {
  color: RGBA(var(--ct-primary-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-primary-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-primary-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-primary:focus,
.link-primary:hover {
  color: RGBA(53, 82, 181, var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(53, 82, 181, var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(53, 82, 181, var(--ct-link-underline-opacity, 1)) !important
}

.link-secondary {
  color: RGBA(var(--ct-secondary-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-secondary-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-secondary-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-secondary:focus,
.link-secondary:hover {
  color: RGBA(92, 99, 106, var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(92, 99, 106, var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(92, 99, 106, var(--ct-link-underline-opacity, 1)) !important
}

.link-success {
  color: RGBA(var(--ct-success-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-success-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-success-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-success:focus,
.link-success:hover {
  color: RGBA(60, 147, 101, var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(60, 147, 101, var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(60, 147, 101, var(--ct-link-underline-opacity, 1)) !important
}

.link-info {
  color: RGBA(var(--ct-info-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-info-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-info-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-info:focus,
.link-info:hover {
  color: RGBA(19, 142, 198, var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(19, 142, 198, var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(19, 142, 198, var(--ct-link-underline-opacity, 1)) !important
}

.link-warning {
  color: RGBA(var(--ct-warning-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-warning-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-warning-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-warning:focus,
.link-warning:hover {
  color: RGBA(217, 166, 77, var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(217, 166, 77, var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(217, 166, 77, var(--ct-link-underline-opacity, 1)) !important
}

.link-danger {
  color: RGBA(var(--ct-danger-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-danger-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-danger-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-danger:focus,
.link-danger:hover {
  color: RGBA(205, 74, 100, var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(205, 74, 100, var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(205, 74, 100, var(--ct-link-underline-opacity, 1)) !important
}

.link-light {
  color: RGBA(var(--ct-light-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-light-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-light-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-light:focus,
.link-light:hover {
  color: RGBA(244, 244, 248, var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(244, 244, 248, var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(244, 244, 248, var(--ct-link-underline-opacity, 1)) !important
}

.link-dark {
  color: RGBA(var(--ct-dark-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-dark-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-dark-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-dark:focus,
.link-dark:hover {
  color: RGBA(28, 31, 35, var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(28, 31, 35, var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(28, 31, 35, var(--ct-link-underline-opacity, 1)) !important
}

.link-body-emphasis {
  color: RGBA(var(--ct-emphasis-color-rgb), var(--ct-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-emphasis-color-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--ct-emphasis-color-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-body-emphasis:focus,
.link-body-emphasis:hover {
  color: RGBA(var(--ct-emphasis-color-rgb), var(--ct-link-opacity, .75)) !important;
  -webkit-text-decoration-color: RGBA(var(--ct-emphasis-color-rgb), var(--ct-link-underline-opacity, .75)) !important;
  text-decoration-color: RGBA(var(--ct-emphasis-color-rgb), var(--ct-link-underline-opacity, .75)) !important
}

.focus-ring:focus {
  outline: 0;
  -webkit-box-shadow: var(--ct-focus-ring-x, 0) var(--ct-focus-ring-y, 0) var(--ct-focus-ring-blur, 0) var(--ct-focus-ring-width) var(--ct-focus-ring-color);
  box-shadow: var(--ct-focus-ring-x, 0) var(--ct-focus-ring-y, 0) var(--ct-focus-ring-blur, 0) var(--ct-focus-ring-width) var(--ct-focus-ring-color)
}

.icon-link {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  gap: .375rem;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-text-decoration-color: rgba(var(--ct-link-color-rgb), var(--ct-link-opacity, .5));
  text-decoration-color: rgba(var(--ct-link-color-rgb), var(--ct-link-opacity, .5));
  text-underline-offset: .25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden
}

.icon-link>.bi {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  width: 1em;
  height: 1em;
  fill: currentcolor;
  -webkit-transition: .2s ease-in-out transform;
  transition: .2s ease-in-out transform
}

@media (prefers-reduced-motion:reduce) {
  .icon-link>.bi {
    -webkit-transition: none;
    transition: none
  }
}

.icon-link-hover:focus-visible>.bi,
.icon-link-hover:hover>.bi {
  -webkit-transform: var(--ct-icon-link-transform, translate3d(.25em, 0, 0));
  transform: var(--ct-icon-link-transform, translate3d(.25em, 0, 0))
}

.ratio {
  position: relative;
  width: 100%
}

.ratio::before {
  display: block;
  padding-top: var(--ct-aspect-ratio);
  content: ""
}

.ratio>* {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%
}

.ratio-1x1 {
  --ct-aspect-ratio: 100%
}

.ratio-4x3 {
  --ct-aspect-ratio: 75%
}

.ratio-16x9 {
  --ct-aspect-ratio: 56.25%
}

.ratio-21x9 {
  --ct-aspect-ratio: 42.8571428571%
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020
}

.sticky-bottom {
  position: sticky;
  bottom: 0;
  z-index: 1020
}

@media (min-width:576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020
  }
  .sticky-sm-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020
  }
}

@media (min-width:768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020
  }
  .sticky-md-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020
  }
}

@media (min-width:992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020
  }
  .sticky-lg-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020
  }
}

@media (min-width:1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020
  }
  .sticky-xl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020
  }
}

@media (min-width:1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020
  }
  .sticky-xxl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020
  }
}

.hstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-item-align: stretch;
  align-self: stretch
}

.vstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-item-align: stretch;
  align-self: stretch
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important
}

.visually-hidden-focusable:not(:focus):not(:focus-within):not(caption),
.visually-hidden:not(caption) {
  position: absolute !important
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: ""
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap
}

.vr {
  display: inline-block;
  -ms-flex-item-align: stretch;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentcolor;
  opacity: 1
}

.align-baseline {
  vertical-align: baseline !important
}

.align-top {
  vertical-align: top !important
}

.align-middle {
  vertical-align: middle !important
}

.align-bottom {
  vertical-align: bottom !important
}

.align-text-bottom {
  vertical-align: text-bottom !important
}

.align-text-top {
  vertical-align: text-top !important
}

.float-start {
  float: left !important
}

.float-end {
  float: right !important
}

.float-none {
  float: none !important
}

.object-fit-contain {
  -o-object-fit: contain !important;
  object-fit: contain !important
}

.object-fit-cover {
  -o-object-fit: cover !important;
  object-fit: cover !important
}

.object-fit-fill {
  -o-object-fit: fill !important;
  object-fit: fill !important
}

.object-fit-scale {
  -o-object-fit: scale-down !important;
  object-fit: scale-down !important
}

.object-fit-none {
  -o-object-fit: none !important;
  object-fit: none !important
}

.opacity-0 {
  opacity: 0 !important
}

.opacity-25 {
  opacity: .25 !important
}

.opacity-50 {
  opacity: .5 !important
}

.opacity-75 {
  opacity: .75 !important
}

.opacity-100 {
  opacity: 1 !important
}

.overflow-auto {
  overflow: auto !important
}

.overflow-hidden {
  overflow: hidden !important
}

.overflow-visible {
  overflow: visible !important
}

.overflow-scroll {
  overflow: scroll !important
}

.overflow-x-auto {
  overflow-x: auto !important
}

.overflow-x-hidden {
  overflow-x: hidden !important
}

.overflow-x-visible {
  overflow-x: visible !important
}

.overflow-x-scroll {
  overflow-x: scroll !important
}

.overflow-y-auto {
  overflow-y: auto !important
}

.overflow-y-hidden {
  overflow-y: hidden !important
}

.overflow-y-visible {
  overflow-y: visible !important
}

.overflow-y-scroll {
  overflow-y: scroll !important
}

.d-inline {
  display: inline !important
}

.d-inline-block {
  display: inline-block !important
}

.d-block {
  display: block !important
}

.d-grid {
  display: grid !important
}

.d-inline-grid {
  display: inline-grid !important
}

.d-table {
  display: table !important
}

.d-table-row {
  display: table-row !important
}

.d-table-cell {
  display: table-cell !important
}

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important
}

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important
}

.d-none {
  display: none !important
}

.shadow {
  -webkit-box-shadow: 0 1px 3px rgba(27, 23, 30, .1) !important;
  box-shadow: 0 1px 3px rgba(27, 23, 30, .1) !important
}

.shadow-sm {
  -webkit-box-shadow: 0 .125rem .25rem rgba(var(--ct-body-color-rgb), .15) !important;
  box-shadow: 0 .125rem .25rem rgba(var(--ct-body-color-rgb), .15) !important
}

.shadow-lg {
  -webkit-box-shadow: 0 0 45px 0 rgba(var(--ct-body-color-rgb), .2) !important;
  box-shadow: 0 0 45px 0 rgba(var(--ct-body-color-rgb), .2) !important
}

.shadow-none {
  -webkit-box-shadow: none !important;
  box-shadow: none !important
}

.focus-ring-primary {
  --ct-focus-ring-color: rgba(var(--ct-primary-rgb), var(--ct-focus-ring-opacity))
}

.focus-ring-secondary {
  --ct-focus-ring-color: rgba(var(--ct-secondary-rgb), var(--ct-focus-ring-opacity))
}

.focus-ring-success {
  --ct-focus-ring-color: rgba(var(--ct-success-rgb), var(--ct-focus-ring-opacity))
}

.focus-ring-info {
  --ct-focus-ring-color: rgba(var(--ct-info-rgb), var(--ct-focus-ring-opacity))
}

.focus-ring-warning {
  --ct-focus-ring-color: rgba(var(--ct-warning-rgb), var(--ct-focus-ring-opacity))
}

.focus-ring-danger {
  --ct-focus-ring-color: rgba(var(--ct-danger-rgb), var(--ct-focus-ring-opacity))
}

.focus-ring-light {
  --ct-focus-ring-color: rgba(var(--ct-light-rgb), var(--ct-focus-ring-opacity))
}

.focus-ring-dark {
  --ct-focus-ring-color: rgba(var(--ct-dark-rgb), var(--ct-focus-ring-opacity))
}

.position-static {
  position: static !important
}

.position-relative {
  position: relative !important
}

.position-absolute {
  position: absolute !important
}

.position-fixed {
  position: fixed !important
}

.position-sticky {
  position: sticky !important
}

.top-0 {
  top: 0 !important
}

.top-50 {
  top: 50% !important
}

.top-100 {
  top: 100% !important
}

.bottom-0 {
  bottom: 0 !important
}

.bottom-50 {
  bottom: 50% !important
}

.bottom-100 {
  bottom: 100% !important
}

.start-0 {
  left: 0 !important
}

.start-50 {
  left: 50% !important
}

.start-100 {
  left: 100% !important
}

.end-0 {
  right: 0 !important
}

.end-50 {
  right: 50% !important
}

.end-100 {
  right: 100% !important
}

.translate-middle {
  -webkit-transform: translate(-50%, -50%) !important;
  transform: translate(-50%, -50%) !important
}

.translate-middle-x {
  -webkit-transform: translateX(-50%) !important;
  transform: translateX(-50%) !important
}

.translate-middle-y {
  -webkit-transform: translateY(-50%) !important;
  transform: translateY(-50%) !important
}

.border {
  border: var(--ct-border-width) var(--ct-border-style) var(--ct-border-color) !important
}

.border-0 {
  border: 0 !important
}

.border-top {
  border-top: var(--ct-border-width) var(--ct-border-style) var(--ct-border-color) !important
}

.border-top-0 {
  border-top: 0 !important
}

.border-end {
  border-right: var(--ct-border-width) var(--ct-border-style) var(--ct-border-color) !important
}

.border-end-0 {
  border-right: 0 !important
}

.border-bottom {
  border-bottom: var(--ct-border-width) var(--ct-border-style) var(--ct-border-color) !important
}

.border-bottom-0 {
  border-bottom: 0 !important
}

.border-start {
  border-left: var(--ct-border-width) var(--ct-border-style) var(--ct-border-color) !important
}

.border-start-0 {
  border-left: 0 !important
}

.border-primary {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-primary-rgb), var(--ct-border-opacity)) !important
}

.border-secondary {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-secondary-rgb), var(--ct-border-opacity)) !important
}

.border-success {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-success-rgb), var(--ct-border-opacity)) !important
}

.border-info {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-info-rgb), var(--ct-border-opacity)) !important
}

.border-warning {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-warning-rgb), var(--ct-border-opacity)) !important
}

.border-danger {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-danger-rgb), var(--ct-border-opacity)) !important
}

.border-light {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-light-rgb), var(--ct-border-opacity)) !important
}

.border-dark {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-dark-rgb), var(--ct-border-opacity)) !important
}

.border-black {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-black-rgb), var(--ct-border-opacity)) !important
}

.border-white {
  --ct-border-opacity: 1;
  border-color: rgba(var(--ct-white-rgb), var(--ct-border-opacity)) !important
}

.border-primary-subtle {
  border-color: var(--ct-primary-border-subtle) !important
}

.border-secondary-subtle {
  border-color: var(--ct-secondary-border-subtle) !important
}

.border-success-subtle {
  border-color: var(--ct-success-border-subtle) !important
}

.border-info-subtle {
  border-color: var(--ct-info-border-subtle) !important
}

.border-warning-subtle {
  border-color: var(--ct-warning-border-subtle) !important
}

.border-danger-subtle {
  border-color: var(--ct-danger-border-subtle) !important
}

.border-light-subtle {
  border-color: var(--ct-light-border-subtle) !important
}

.border-dark-subtle {
  border-color: var(--ct-dark-border-subtle) !important
}

.border-1 {
  border-width: 1px !important
}

.border-2 {
  border-width: 2px !important
}

.border-3 {
  border-width: 3px !important
}

.border-4 {
  border-width: 4px !important
}

.border-5 {
  border-width: 5px !important
}

.border-opacity-10 {
  --ct-border-opacity: 0.1
}

.border-opacity-25 {
  --ct-border-opacity: 0.25
}

.border-opacity-50 {
  --ct-border-opacity: 0.5
}

.border-opacity-75 {
  --ct-border-opacity: 0.75
}

.border-opacity-100 {
  --ct-border-opacity: 1
}

.w-25 {
  width: 25% !important
}

.w-50 {
  width: 50% !important
}

.w-75 {
  width: 75% !important
}

.w-100 {
  width: 100% !important
}

.w-auto {
  width: auto !important
}

.mw-100 {
  max-width: 100% !important
}

.vw-100 {
  width: 100vw !important
}

.min-vw-100 {
  min-width: 100vw !important
}

.h-25 {
  height: 25% !important
}

.h-50 {
  height: 50% !important
}

.h-75 {
  height: 75% !important
}

.h-100 {
  height: 100% !important
}

.h-auto {
  height: auto !important
}

.mh-100 {
  max-height: 100% !important
}

.vh-100 {
  height: 100vh !important
}

.min-vh-100 {
  min-height: 100vh !important
}

.flex-fill {
  -webkit-box-flex: 1 !important;
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important
}

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important
}

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important
}

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important
}

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important
}

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important
}

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important
}

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important
}

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important
}

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important
}

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important
}

.justify-content-evenly {
  -webkit-box-pack: space-evenly !important;
  -ms-flex-pack: space-evenly !important;
  justify-content: space-evenly !important
}

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important
}

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important
}

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important
}

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important
}

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important
}

.order-first {
  -webkit-box-ordinal-group: 0 !important;
  -ms-flex-order: -1 !important;
  order: -1 !important
}

.order-0 {
  -webkit-box-ordinal-group: 1 !important;
  -ms-flex-order: 0 !important;
  order: 0 !important
}

.order-1 {
  -webkit-box-ordinal-group: 2 !important;
  -ms-flex-order: 1 !important;
  order: 1 !important
}

.order-2 {
  -webkit-box-ordinal-group: 3 !important;
  -ms-flex-order: 2 !important;
  order: 2 !important
}

.order-3 {
  -webkit-box-ordinal-group: 4 !important;
  -ms-flex-order: 3 !important;
  order: 3 !important
}

.order-4 {
  -webkit-box-ordinal-group: 5 !important;
  -ms-flex-order: 4 !important;
  order: 4 !important
}

.order-5 {
  -webkit-box-ordinal-group: 6 !important;
  -ms-flex-order: 5 !important;
  order: 5 !important
}

.order-last {
  -webkit-box-ordinal-group: 7 !important;
  -ms-flex-order: 6 !important;
  order: 6 !important
}

.m-0 {
  margin: 0 !important
}

.m-1 {
  margin: .375rem !important
}

.m-2 {
  margin: .75rem !important
}

.m-3 {
  margin: 1.5rem !important
}

.m-4 {
  margin: 2.25rem !important
}

.m-5 {
  margin: 4.5rem !important
}

.m-auto {
  margin: auto !important
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important
}

.mx-1 {
  margin-right: .375rem !important;
  margin-left: .375rem !important
}

.mx-2 {
  margin-right: .75rem !important;
  margin-left: .75rem !important
}

.mx-3 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important
}

.mx-4 {
  margin-right: 2.25rem !important;
  margin-left: 2.25rem !important
}

.mx-5 {
  margin-right: 4.5rem !important;
  margin-left: 4.5rem !important
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important
}

.my-1 {
  margin-top: .375rem !important;
  margin-bottom: .375rem !important
}

.my-2 {
  margin-top: .75rem !important;
  margin-bottom: .75rem !important
}

.my-3 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important
}

.my-4 {
  margin-top: 2.25rem !important;
  margin-bottom: 2.25rem !important
}

.my-5 {
  margin-top: 4.5rem !important;
  margin-bottom: 4.5rem !important
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important
}

.mt-0 {
  margin-top: 0 !important
}

.mt-1 {
  margin-top: .375rem !important
}

.mt-2 {
  margin-top: .75rem !important
}

.mt-3 {
  margin-top: 1.5rem !important
}

.mt-4 {
  margin-top: 2.25rem !important
}

.mt-5 {
  margin-top: 4.5rem !important
}

.mt-auto {
  margin-top: auto !important
}

.me-0 {
  margin-right: 0 !important
}

.me-1 {
  margin-right: .375rem !important
}

.me-2 {
  margin-right: .75rem !important
}

.me-3 {
  margin-right: 1.5rem !important
}

.me-4 {
  margin-right: 2.25rem !important
}

.me-5 {
  margin-right: 4.5rem !important
}

.me-auto {
  margin-right: auto !important
}

.mb-0 {
  margin-bottom: 0 !important
}

.mb-1 {
  margin-bottom: .375rem !important
}

.mb-2 {
  margin-bottom: .75rem !important
}

.mb-3 {
  margin-bottom: 1.5rem !important
}

.mb-4 {
  margin-bottom: 2.25rem !important
}

.mb-5 {
  margin-bottom: 4.5rem !important
}

.mb-auto {
  margin-bottom: auto !important
}

.ms-0 {
  margin-left: 0 !important
}

.ms-1 {
  margin-left: .375rem !important
}

.ms-2 {
  margin-left: .75rem !important
}

.ms-3 {
  margin-left: 1.5rem !important
}

.ms-4 {
  margin-left: 2.25rem !important
}

.ms-5 {
  margin-left: 4.5rem !important
}

.ms-auto {
  margin-left: auto !important
}

.m-n1 {
  margin: -.375rem !important
}

.m-n2 {
  margin: -.75rem !important
}

.m-n3 {
  margin: -1.5rem !important
}

.m-n4 {
  margin: -2.25rem !important
}

.m-n5 {
  margin: -4.5rem !important
}

.mx-n1 {
  margin-right: -.375rem !important;
  margin-left: -.375rem !important
}

.mx-n2 {
  margin-right: -.75rem !important;
  margin-left: -.75rem !important
}

.mx-n3 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important
}

.mx-n4 {
  margin-right: -2.25rem !important;
  margin-left: -2.25rem !important
}

.mx-n5 {
  margin-right: -4.5rem !important;
  margin-left: -4.5rem !important
}

.my-n1 {
  margin-top: -.375rem !important;
  margin-bottom: -.375rem !important
}

.my-n2 {
  margin-top: -.75rem !important;
  margin-bottom: -.75rem !important
}

.my-n3 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important
}

.my-n4 {
  margin-top: -2.25rem !important;
  margin-bottom: -2.25rem !important
}

.my-n5 {
  margin-top: -4.5rem !important;
  margin-bottom: -4.5rem !important
}

.mt-n1 {
  margin-top: -.375rem !important
}

.mt-n2 {
  margin-top: -.75rem !important
}

.mt-n3 {
  margin-top: -1.5rem !important
}

.mt-n4 {
  margin-top: -2.25rem !important
}

.mt-n5 {
  margin-top: -4.5rem !important
}

.me-n1 {
  margin-right: -.375rem !important
}

.me-n2 {
  margin-right: -.75rem !important
}

.me-n3 {
  margin-right: -1.5rem !important
}

.me-n4 {
  margin-right: -2.25rem !important
}

.me-n5 {
  margin-right: -4.5rem !important
}

.mb-n1 {
  margin-bottom: -.375rem !important
}

.mb-n2 {
  margin-bottom: -.75rem !important
}

.mb-n3 {
  margin-bottom: -1.5rem !important
}

.mb-n4 {
  margin-bottom: -2.25rem !important
}

.mb-n5 {
  margin-bottom: -4.5rem !important
}

.ms-n1 {
  margin-left: -.375rem !important
}

.ms-n2 {
  margin-left: -.75rem !important
}

.ms-n3 {
  margin-left: -1.5rem !important
}

.ms-n4 {
  margin-left: -2.25rem !important
}

.ms-n5 {
  margin-left: -4.5rem !important
}

.p-0 {
  padding: 0 !important
}

.p-1 {
  padding: .375rem !important
}

.p-2 {
  padding: .75rem !important
}

.p-3 {
  padding: 1.5rem !important
}

.p-4 {
  padding: 2.25rem !important
}

.p-5 {
  padding: 4.5rem !important
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important
}

.px-1 {
  padding-right: .375rem !important;
  padding-left: .375rem !important
}

.px-2 {
  padding-right: .75rem !important;
  padding-left: .75rem !important
}

.px-3 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important
}

.px-4 {
  padding-right: 2.25rem !important;
  padding-left: 2.25rem !important
}

.px-5 {
  padding-right: 4.5rem !important;
  padding-left: 4.5rem !important
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important
}

.py-1 {
  padding-top: .375rem !important;
  padding-bottom: .375rem !important
}

.py-2 {
  padding-top: .75rem !important;
  padding-bottom: .75rem !important
}

.py-3 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important
}

.py-4 {
  padding-top: 2.25rem !important;
  padding-bottom: 2.25rem !important
}

.py-5 {
  padding-top: 4.5rem !important;
  padding-bottom: 4.5rem !important
}

.pt-0 {
  padding-top: 0 !important
}

.pt-1 {
  padding-top: .375rem !important
}

.pt-2 {
  padding-top: .75rem !important
}

.pt-3 {
  padding-top: 1.5rem !important
}

.pt-4 {
  padding-top: 2.25rem !important
}

.pt-5 {
  padding-top: 4.5rem !important
}

.pe-0 {
  padding-right: 0 !important
}

.pe-1 {
  padding-right: .375rem !important
}

.pe-2 {
  padding-right: .75rem !important
}

.pe-3 {
  padding-right: 1.5rem !important
}

.pe-4 {
  padding-right: 2.25rem !important
}

.pe-5 {
  padding-right: 4.5rem !important
}

.pb-0 {
  padding-bottom: 0 !important
}

.pb-1 {
  padding-bottom: .375rem !important
}

.pb-2 {
  padding-bottom: .75rem !important
}

.pb-3 {
  padding-bottom: 1.5rem !important
}

.pb-4 {
  padding-bottom: 2.25rem !important
}

.pb-5 {
  padding-bottom: 4.5rem !important
}

.ps-0 {
  padding-left: 0 !important
}

.ps-1 {
  padding-left: .375rem !important
}

.ps-2 {
  padding-left: .75rem !important
}

.ps-3 {
  padding-left: 1.5rem !important
}

.ps-4 {
  padding-left: 2.25rem !important
}

.ps-5 {
  padding-left: 4.5rem !important
}

.gap-0 {
  gap: 0 !important
}

.gap-1 {
  gap: .375rem !important
}

.gap-2 {
  gap: .75rem !important
}

.gap-3 {
  gap: 1.5rem !important
}

.gap-4 {
  gap: 2.25rem !important
}

.gap-5 {
  gap: 4.5rem !important
}

.row-gap-0 {
  row-gap: 0 !important
}

.row-gap-1 {
  row-gap: .375rem !important
}

.row-gap-2 {
  row-gap: .75rem !important
}

.row-gap-3 {
  row-gap: 1.5rem !important
}

.row-gap-4 {
  row-gap: 2.25rem !important
}

.row-gap-5 {
  row-gap: 4.5rem !important
}

.column-gap-0 {
  -webkit-column-gap: 0 !important;
  -moz-column-gap: 0 !important;
  column-gap: 0 !important
}

.column-gap-1 {
  -webkit-column-gap: .375rem !important;
  -moz-column-gap: .375rem !important;
  column-gap: .375rem !important
}

.column-gap-2 {
  -webkit-column-gap: .75rem !important;
  -moz-column-gap: .75rem !important;
  column-gap: .75rem !important
}

.column-gap-3 {
  -webkit-column-gap: 1.5rem !important;
  -moz-column-gap: 1.5rem !important;
  column-gap: 1.5rem !important
}

.column-gap-4 {
  -webkit-column-gap: 2.25rem !important;
  -moz-column-gap: 2.25rem !important;
  column-gap: 2.25rem !important
}

.column-gap-5 {
  -webkit-column-gap: 4.5rem !important;
  -moz-column-gap: 4.5rem !important;
  column-gap: 4.5rem !important
}

.font-monospace {
  font-family: var(--ct-font-monospace) !important
}

.fs-1 {
  font-size: calc(1.34375rem + 1.125vw) !important
}

.fs-2 {
  font-size: calc(1.307rem + .684vw) !important
}

.fs-3 {
  font-size: calc(1.271125rem + .2535vw) !important
}

.fs-4 {
  font-size: 1.09375rem !important
}

.fs-5 {
  font-size: .91rem !important
}

.fs-6 {
  font-size: .74375rem !important
}

.fst-italic {
  font-style: italic !important
}

.fst-normal {
  font-style: normal !important
}

.fw-lighter {
  font-weight: lighter !important
}

.fw-light {
  font-weight: 300 !important
}

.fw-normal {
  font-weight: 400 !important
}

.fw-medium {
  font-weight: 500 !important
}

.fw-semibold {
  font-weight: 600 !important
}

.fw-bold {
  font-weight: 700 !important
}

.fw-bolder {
  font-weight: bolder !important
}

.lh-1 {
  line-height: 1 !important
}

.lh-sm {
  line-height: 1.25 !important
}

.lh-base {
  line-height: 1.5 !important
}

.lh-lg {
  line-height: 2 !important
}

.text-start {
  text-align: left !important
}

.text-end {
  text-align: right !important
}

.text-center {
  text-align: center !important
}

.text-decoration-none {
  text-decoration: none !important
}

.text-decoration-underline {
  text-decoration: underline !important
}

.text-decoration-line-through {
  text-decoration: line-through !important
}

.text-lowercase {
  text-transform: lowercase !important
}

.text-uppercase {
  text-transform: uppercase !important
}

.text-capitalize {
  text-transform: capitalize !important
}

.text-wrap {
  white-space: normal !important
}

.text-nowrap {
  white-space: nowrap !important
}

.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important
}

.text-primary {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-primary-rgb), var(--ct-text-opacity)) !important
}

.text-secondary {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-secondary-rgb), var(--ct-text-opacity)) !important
}

.text-success {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-success-rgb), var(--ct-text-opacity)) !important
}

.text-info {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-info-rgb), var(--ct-text-opacity)) !important
}

.text-warning {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-warning-rgb), var(--ct-text-opacity)) !important
}

.text-danger {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-danger-rgb), var(--ct-text-opacity)) !important
}

.text-light {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-light-rgb), var(--ct-text-opacity)) !important
}

.text-dark {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-dark-rgb), var(--ct-text-opacity)) !important
}

.text-black {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-black-rgb), var(--ct-text-opacity)) !important
}

.text-white {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-white-rgb), var(--ct-text-opacity)) !important
}

.text-body {
  --ct-text-opacity: 1;
  color: rgba(var(--ct-body-color-rgb), var(--ct-text-opacity)) !important
}

.text-muted {
  --ct-text-opacity: 1;
  color: var(--ct-secondary-color) !important
}

.text-black-50 {
  --ct-text-opacity: 1;
  color: rgba(0, 0, 0, .5) !important
}

.text-white-50 {
  --ct-text-opacity: 1;
  color: rgba(255, 255, 255, .5) !important
}

.text-body-secondary {
  --ct-text-opacity: 1;
  color: var(--ct-secondary-color) !important
}

.text-body-tertiary {
  --ct-text-opacity: 1;
  color: var(--ct-tertiary-color) !important
}

.text-body-emphasis {
  --ct-text-opacity: 1;
  color: var(--ct-emphasis-color) !important
}

.text-reset {
  --ct-text-opacity: 1;
  color: inherit !important
}

.text-opacity-25 {
  --ct-text-opacity: 0.25
}

.text-opacity-50 {
  --ct-text-opacity: 0.5
}

.text-opacity-75 {
  --ct-text-opacity: 0.75
}

.text-opacity-100 {
  --ct-text-opacity: 1
}

.text-primary-emphasis {
  color: var(--ct-primary-text-emphasis) !important
}

.text-secondary-emphasis {
  color: var(--ct-secondary-text-emphasis) !important
}

.text-success-emphasis {
  color: var(--ct-success-text-emphasis) !important
}

.text-info-emphasis {
  color: var(--ct-info-text-emphasis) !important
}

.text-warning-emphasis {
  color: var(--ct-warning-text-emphasis) !important
}

.text-danger-emphasis {
  color: var(--ct-danger-text-emphasis) !important
}

.text-light-emphasis {
  color: var(--ct-light-text-emphasis) !important
}

.text-dark-emphasis {
  color: var(--ct-dark-text-emphasis) !important
}

.link-opacity-10 {
  --ct-link-opacity: 0.1
}

.link-opacity-10-hover:hover {
  --ct-link-opacity: 0.1
}

.link-opacity-25 {
  --ct-link-opacity: 0.25
}

.link-opacity-25-hover:hover {
  --ct-link-opacity: 0.25
}

.link-opacity-50 {
  --ct-link-opacity: 0.5
}

.link-opacity-50-hover:hover {
  --ct-link-opacity: 0.5
}

.link-opacity-75 {
  --ct-link-opacity: 0.75
}

.link-opacity-75-hover:hover {
  --ct-link-opacity: 0.75
}

.link-opacity-100 {
  --ct-link-opacity: 1
}

.link-opacity-100-hover:hover {
  --ct-link-opacity: 1
}

.link-offset-1 {
  text-underline-offset: .125em !important
}

.link-offset-1-hover:hover {
  text-underline-offset: .125em !important
}

.link-offset-2 {
  text-underline-offset: .25em !important
}

.link-offset-2-hover:hover {
  text-underline-offset: .25em !important
}

.link-offset-3 {
  text-underline-offset: .375em !important
}

.link-offset-3-hover:hover {
  text-underline-offset: .375em !important
}

.link-underline-primary {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-primary-rgb), var(--ct-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--ct-primary-rgb), var(--ct-link-underline-opacity)) !important
}

.link-underline-secondary {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-secondary-rgb), var(--ct-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--ct-secondary-rgb), var(--ct-link-underline-opacity)) !important
}

.link-underline-success {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-success-rgb), var(--ct-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--ct-success-rgb), var(--ct-link-underline-opacity)) !important
}

.link-underline-info {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-info-rgb), var(--ct-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--ct-info-rgb), var(--ct-link-underline-opacity)) !important
}

.link-underline-warning {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-warning-rgb), var(--ct-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--ct-warning-rgb), var(--ct-link-underline-opacity)) !important
}

.link-underline-danger {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-danger-rgb), var(--ct-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--ct-danger-rgb), var(--ct-link-underline-opacity)) !important
}

.link-underline-light {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-light-rgb), var(--ct-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--ct-light-rgb), var(--ct-link-underline-opacity)) !important
}

.link-underline-dark {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-dark-rgb), var(--ct-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--ct-dark-rgb), var(--ct-link-underline-opacity)) !important
}

.link-underline {
  --ct-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--ct-link-color-rgb), var(--ct-link-underline-opacity, 1)) !important;
  text-decoration-color: rgba(var(--ct-link-color-rgb), var(--ct-link-underline-opacity, 1)) !important
}

.link-underline-opacity-0 {
  --ct-link-underline-opacity: 0
}

.link-underline-opacity-0-hover:hover {
  --ct-link-underline-opacity: 0
}

.link-underline-opacity-10 {
  --ct-link-underline-opacity: 0.1
}

.link-underline-opacity-10-hover:hover {
  --ct-link-underline-opacity: 0.1
}

.link-underline-opacity-25 {
  --ct-link-underline-opacity: 0.25
}

.link-underline-opacity-25-hover:hover {
  --ct-link-underline-opacity: 0.25
}

.link-underline-opacity-50 {
  --ct-link-underline-opacity: 0.5
}

.link-underline-opacity-50-hover:hover {
  --ct-link-underline-opacity: 0.5
}

.link-underline-opacity-75 {
  --ct-link-underline-opacity: 0.75
}

.link-underline-opacity-75-hover:hover {
  --ct-link-underline-opacity: 0.75
}

.link-underline-opacity-100 {
  --ct-link-underline-opacity: 1
}

.link-underline-opacity-100-hover:hover {
  --ct-link-underline-opacity: 1
}

.bg-primary {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-primary-rgb), var(--ct-bg-opacity)) !important
}

.bg-secondary {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-secondary-rgb), var(--ct-bg-opacity)) !important
}

.bg-success {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-success-rgb), var(--ct-bg-opacity)) !important
}

.bg-info {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-info-rgb), var(--ct-bg-opacity)) !important
}

.bg-warning {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-warning-rgb), var(--ct-bg-opacity)) !important
}

.bg-danger {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-danger-rgb), var(--ct-bg-opacity)) !important
}

.bg-light {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-light-rgb), var(--ct-bg-opacity)) !important
}

.bg-dark {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-dark-rgb), var(--ct-bg-opacity)) !important
}

.bg-black {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-black-rgb), var(--ct-bg-opacity)) !important
}

.bg-white {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-white-rgb), var(--ct-bg-opacity)) !important
}

.bg-body {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-body-bg-rgb), var(--ct-bg-opacity)) !important
}

.bg-transparent {
  --ct-bg-opacity: 1;
  background-color: transparent !important
}

.bg-body-secondary {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-secondary-bg-rgb), var(--ct-bg-opacity)) !important
}

.bg-body-tertiary {
  --ct-bg-opacity: 1;
  background-color: rgba(var(--ct-tertiary-bg-rgb), var(--ct-bg-opacity)) !important
}

.bg-opacity-10 {
  --ct-bg-opacity: 0.1
}

.bg-opacity-25 {
  --ct-bg-opacity: 0.25
}

.bg-opacity-50 {
  --ct-bg-opacity: 0.5
}

.bg-opacity-75 {
  --ct-bg-opacity: 0.75
}

.bg-opacity-100 {
  --ct-bg-opacity: 1
}

.bg-primary-subtle {
  background-color: var(--ct-primary-bg-subtle) !important
}

.bg-secondary-subtle {
  background-color: var(--ct-secondary-bg-subtle) !important
}

.bg-success-subtle {
  background-color: var(--ct-success-bg-subtle) !important
}

.bg-info-subtle {
  background-color: var(--ct-info-bg-subtle) !important
}

.bg-warning-subtle {
  background-color: var(--ct-warning-bg-subtle) !important
}

.bg-danger-subtle {
  background-color: var(--ct-danger-bg-subtle) !important
}

.bg-light-subtle {
  background-color: var(--ct-light-bg-subtle) !important
}

.bg-dark-subtle {
  background-color: var(--ct-dark-bg-subtle) !important
}

.bg-gradient {
  background-image: var(--ct-gradient) !important
}

.user-select-all {
  -webkit-user-select: all !important;
  -moz-user-select: all !important;
  user-select: all !important
}

.user-select-auto {
  -webkit-user-select: auto !important;
  -moz-user-select: auto !important;
  -ms-user-select: auto !important;
  user-select: auto !important
}

.user-select-none {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important
}

.pe-none {
  pointer-events: none !important
}

.pe-auto {
  pointer-events: auto !important
}

.rounded {
  border-radius: var(--ct-border-radius) !important
}

.rounded-0 {
  border-radius: 0 !important
}

.rounded-1 {
  border-radius: var(--ct-border-radius-sm) !important
}

.rounded-2 {
  border-radius: var(--ct-border-radius) !important
}

.rounded-3 {
  border-radius: var(--ct-border-radius-lg) !important
}

.rounded-4 {
  border-radius: var(--ct-border-radius-xl) !important
}

.rounded-5 {
  border-radius: var(--ct-border-radius-xxl) !important
}

.rounded-circle {
  border-radius: 50% !important
}

.rounded-pill {
  border-radius: var(--ct-border-radius-pill) !important
}

.rounded-top {
  border-top-left-radius: var(--ct-border-radius) !important;
  border-top-right-radius: var(--ct-border-radius) !important
}

.rounded-top-0 {
  border-top-left-radius: 0 !important;
  border-top-right-radius: 0 !important
}

.rounded-top-1 {
  border-top-left-radius: var(--ct-border-radius-sm) !important;
  border-top-right-radius: var(--ct-border-radius-sm) !important
}

.rounded-top-2 {
  border-top-left-radius: var(--ct-border-radius) !important;
  border-top-right-radius: var(--ct-border-radius) !important
}

.rounded-top-3 {
  border-top-left-radius: var(--ct-border-radius-lg) !important;
  border-top-right-radius: var(--ct-border-radius-lg) !important
}

.rounded-top-4 {
  border-top-left-radius: var(--ct-border-radius-xl) !important;
  border-top-right-radius: var(--ct-border-radius-xl) !important
}

.rounded-top-5 {
  border-top-left-radius: var(--ct-border-radius-xxl) !important;
  border-top-right-radius: var(--ct-border-radius-xxl) !important
}

.rounded-top-circle {
  border-top-left-radius: 50% !important;
  border-top-right-radius: 50% !important
}

.rounded-top-pill {
  border-top-left-radius: var(--ct-border-radius-pill) !important;
  border-top-right-radius: var(--ct-border-radius-pill) !important
}

.rounded-end {
  border-top-right-radius: var(--ct-border-radius) !important;
  border-bottom-right-radius: var(--ct-border-radius) !important
}

.rounded-end-0 {
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important
}

.rounded-end-1 {
  border-top-right-radius: var(--ct-border-radius-sm) !important;
  border-bottom-right-radius: var(--ct-border-radius-sm) !important
}

.rounded-end-2 {
  border-top-right-radius: var(--ct-border-radius) !important;
  border-bottom-right-radius: var(--ct-border-radius) !important
}

.rounded-end-3 {
  border-top-right-radius: var(--ct-border-radius-lg) !important;
  border-bottom-right-radius: var(--ct-border-radius-lg) !important
}

.rounded-end-4 {
  border-top-right-radius: var(--ct-border-radius-xl) !important;
  border-bottom-right-radius: var(--ct-border-radius-xl) !important
}

.rounded-end-5 {
  border-top-right-radius: var(--ct-border-radius-xxl) !important;
  border-bottom-right-radius: var(--ct-border-radius-xxl) !important
}

.rounded-end-circle {
  border-top-right-radius: 50% !important;
  border-bottom-right-radius: 50% !important
}

.rounded-end-pill {
  border-top-right-radius: var(--ct-border-radius-pill) !important;
  border-bottom-right-radius: var(--ct-border-radius-pill) !important
}

.rounded-bottom {
  border-bottom-right-radius: var(--ct-border-radius) !important;
  border-bottom-left-radius: var(--ct-border-radius) !important
}

.rounded-bottom-0 {
  border-bottom-right-radius: 0 !important;
  border-bottom-left-radius: 0 !important
}

.rounded-bottom-1 {
  border-bottom-right-radius: var(--ct-border-radius-sm) !important;
  border-bottom-left-radius: var(--ct-border-radius-sm) !important
}

.rounded-bottom-2 {
  border-bottom-right-radius: var(--ct-border-radius) !important;
  border-bottom-left-radius: var(--ct-border-radius) !important
}

.rounded-bottom-3 {
  border-bottom-right-radius: var(--ct-border-radius-lg) !important;
  border-bottom-left-radius: var(--ct-border-radius-lg) !important
}

.rounded-bottom-4 {
  border-bottom-right-radius: var(--ct-border-radius-xl) !important;
  border-bottom-left-radius: var(--ct-border-radius-xl) !important
}

.rounded-bottom-5 {
  border-bottom-right-radius: var(--ct-border-radius-xxl) !important;
  border-bottom-left-radius: var(--ct-border-radius-xxl) !important
}

.rounded-bottom-circle {
  border-bottom-right-radius: 50% !important;
  border-bottom-left-radius: 50% !important
}

.rounded-bottom-pill {
  border-bottom-right-radius: var(--ct-border-radius-pill) !important;
  border-bottom-left-radius: var(--ct-border-radius-pill) !important
}

.rounded-start {
  border-bottom-left-radius: var(--ct-border-radius) !important;
  border-top-left-radius: var(--ct-border-radius) !important
}

.rounded-start-0 {
  border-bottom-left-radius: 0 !important;
  border-top-left-radius: 0 !important
}

.rounded-start-1 {
  border-bottom-left-radius: var(--ct-border-radius-sm) !important;
  border-top-left-radius: var(--ct-border-radius-sm) !important
}

.rounded-start-2 {
  border-bottom-left-radius: var(--ct-border-radius) !important;
  border-top-left-radius: var(--ct-border-radius) !important
}

.rounded-start-3 {
  border-bottom-left-radius: var(--ct-border-radius-lg) !important;
  border-top-left-radius: var(--ct-border-radius-lg) !important
}

.rounded-start-4 {
  border-bottom-left-radius: var(--ct-border-radius-xl) !important;
  border-top-left-radius: var(--ct-border-radius-xl) !important
}

.rounded-start-5 {
  border-bottom-left-radius: var(--ct-border-radius-xxl) !important;
  border-top-left-radius: var(--ct-border-radius-xxl) !important
}

.rounded-start-circle {
  border-bottom-left-radius: 50% !important;
  border-top-left-radius: 50% !important
}

.rounded-start-pill {
  border-bottom-left-radius: var(--ct-border-radius-pill) !important;
  border-top-left-radius: var(--ct-border-radius-pill) !important
}

.visible {
  visibility: visible !important
}

.invisible {
  visibility: hidden !important
}

.z-n1 {
  z-index: -1 !important
}

.z-0 {
  z-index: 0 !important
}

.z-1 {
  z-index: 1 !important
}

.z-2 {
  z-index: 2 !important
}

.z-3 {
  z-index: 3 !important
}

.fs-10 {
  font-size: 10px !important
}

.fs-11 {
  font-size: 11px !important
}

.fs-12 {
  font-size: 12px !important
}

.fs-13 {
  font-size: 13px !important
}

.fs-14 {
  font-size: 14px !important
}

.fs-15 {
  font-size: 15px !important
}

.fs-16 {
  font-size: 16px !important
}

.fs-17 {
  font-size: 17px !important
}

.fs-18 {
  font-size: 18px !important
}

.fs-19 {
  font-size: 19px !important
}

.fs-20 {
  font-size: 20px !important
}

.fs-21 {
  font-size: 21px !important
}

.fs-22 {
  font-size: 22px !important
}

.fs-23 {
  font-size: 23px !important
}

.fs-24 {
  font-size: 24px !important
}

.fs-36 {
  font-size: 36px !important
}

.fs-48 {
  font-size: 48px !important
}

@media (min-width:576px) {
  .float-sm-start {
    float: left !important
  }
  .float-sm-end {
    float: right !important
  }
  .float-sm-none {
    float: none !important
  }
  .object-fit-sm-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important
  }
  .object-fit-sm-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important
  }
  .object-fit-sm-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important
  }
  .object-fit-sm-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important
  }
  .object-fit-sm-none {
    -o-object-fit: none !important;
    object-fit: none !important
  }
  .d-sm-inline {
    display: inline !important
  }
  .d-sm-inline-block {
    display: inline-block !important
  }
  .d-sm-block {
    display: block !important
  }
  .d-sm-grid {
    display: grid !important
  }
  .d-sm-inline-grid {
    display: inline-grid !important
  }
  .d-sm-table {
    display: table !important
  }
  .d-sm-table-row {
    display: table-row !important
  }
  .d-sm-table-cell {
    display: table-cell !important
  }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important
  }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important
  }
  .d-sm-none {
    display: none !important
  }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important
  }
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important
  }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important
  }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important
  }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important
  }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important
  }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important
  }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important
  }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important
  }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important
  }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important
  }
  .justify-content-sm-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important
  }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important
  }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important
  }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important
  }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important
  }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important
  }
  .order-sm-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important
  }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important
  }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important
  }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important
  }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important
  }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important
  }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important
  }
  .order-sm-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important
  }
  .m-sm-0 {
    margin: 0 !important
  }
  .m-sm-1 {
    margin: .375rem !important
  }
  .m-sm-2 {
    margin: .75rem !important
  }
  .m-sm-3 {
    margin: 1.5rem !important
  }
  .m-sm-4 {
    margin: 2.25rem !important
  }
  .m-sm-5 {
    margin: 4.5rem !important
  }
  .m-sm-auto {
    margin: auto !important
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important
  }
  .mx-sm-1 {
    margin-right: .375rem !important;
    margin-left: .375rem !important
  }
  .mx-sm-2 {
    margin-right: .75rem !important;
    margin-left: .75rem !important
  }
  .mx-sm-3 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important
  }
  .mx-sm-4 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important
  }
  .mx-sm-5 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important
  }
  .my-sm-1 {
    margin-top: .375rem !important;
    margin-bottom: .375rem !important
  }
  .my-sm-2 {
    margin-top: .75rem !important;
    margin-bottom: .75rem !important
  }
  .my-sm-3 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important
  }
  .my-sm-4 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important
  }
  .my-sm-5 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important
  }
  .mt-sm-0 {
    margin-top: 0 !important
  }
  .mt-sm-1 {
    margin-top: .375rem !important
  }
  .mt-sm-2 {
    margin-top: .75rem !important
  }
  .mt-sm-3 {
    margin-top: 1.5rem !important
  }
  .mt-sm-4 {
    margin-top: 2.25rem !important
  }
  .mt-sm-5 {
    margin-top: 4.5rem !important
  }
  .mt-sm-auto {
    margin-top: auto !important
  }
  .me-sm-0 {
    margin-right: 0 !important
  }
  .me-sm-1 {
    margin-right: .375rem !important
  }
  .me-sm-2 {
    margin-right: .75rem !important
  }
  .me-sm-3 {
    margin-right: 1.5rem !important
  }
  .me-sm-4 {
    margin-right: 2.25rem !important
  }
  .me-sm-5 {
    margin-right: 4.5rem !important
  }
  .me-sm-auto {
    margin-right: auto !important
  }
  .mb-sm-0 {
    margin-bottom: 0 !important
  }
  .mb-sm-1 {
    margin-bottom: .375rem !important
  }
  .mb-sm-2 {
    margin-bottom: .75rem !important
  }
  .mb-sm-3 {
    margin-bottom: 1.5rem !important
  }
  .mb-sm-4 {
    margin-bottom: 2.25rem !important
  }
  .mb-sm-5 {
    margin-bottom: 4.5rem !important
  }
  .mb-sm-auto {
    margin-bottom: auto !important
  }
  .ms-sm-0 {
    margin-left: 0 !important
  }
  .ms-sm-1 {
    margin-left: .375rem !important
  }
  .ms-sm-2 {
    margin-left: .75rem !important
  }
  .ms-sm-3 {
    margin-left: 1.5rem !important
  }
  .ms-sm-4 {
    margin-left: 2.25rem !important
  }
  .ms-sm-5 {
    margin-left: 4.5rem !important
  }
  .ms-sm-auto {
    margin-left: auto !important
  }
  .m-sm-n1 {
    margin: -.375rem !important
  }
  .m-sm-n2 {
    margin: -.75rem !important
  }
  .m-sm-n3 {
    margin: -1.5rem !important
  }
  .m-sm-n4 {
    margin: -2.25rem !important
  }
  .m-sm-n5 {
    margin: -4.5rem !important
  }
  .mx-sm-n1 {
    margin-right: -.375rem !important;
    margin-left: -.375rem !important
  }
  .mx-sm-n2 {
    margin-right: -.75rem !important;
    margin-left: -.75rem !important
  }
  .mx-sm-n3 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important
  }
  .mx-sm-n4 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important
  }
  .mx-sm-n5 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important
  }
  .my-sm-n1 {
    margin-top: -.375rem !important;
    margin-bottom: -.375rem !important
  }
  .my-sm-n2 {
    margin-top: -.75rem !important;
    margin-bottom: -.75rem !important
  }
  .my-sm-n3 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important
  }
  .my-sm-n4 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important
  }
  .my-sm-n5 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important
  }
  .mt-sm-n1 {
    margin-top: -.375rem !important
  }
  .mt-sm-n2 {
    margin-top: -.75rem !important
  }
  .mt-sm-n3 {
    margin-top: -1.5rem !important
  }
  .mt-sm-n4 {
    margin-top: -2.25rem !important
  }
  .mt-sm-n5 {
    margin-top: -4.5rem !important
  }
  .me-sm-n1 {
    margin-right: -.375rem !important
  }
  .me-sm-n2 {
    margin-right: -.75rem !important
  }
  .me-sm-n3 {
    margin-right: -1.5rem !important
  }
  .me-sm-n4 {
    margin-right: -2.25rem !important
  }
  .me-sm-n5 {
    margin-right: -4.5rem !important
  }
  .mb-sm-n1 {
    margin-bottom: -.375rem !important
  }
  .mb-sm-n2 {
    margin-bottom: -.75rem !important
  }
  .mb-sm-n3 {
    margin-bottom: -1.5rem !important
  }
  .mb-sm-n4 {
    margin-bottom: -2.25rem !important
  }
  .mb-sm-n5 {
    margin-bottom: -4.5rem !important
  }
  .ms-sm-n1 {
    margin-left: -.375rem !important
  }
  .ms-sm-n2 {
    margin-left: -.75rem !important
  }
  .ms-sm-n3 {
    margin-left: -1.5rem !important
  }
  .ms-sm-n4 {
    margin-left: -2.25rem !important
  }
  .ms-sm-n5 {
    margin-left: -4.5rem !important
  }
  .p-sm-0 {
    padding: 0 !important
  }
  .p-sm-1 {
    padding: .375rem !important
  }
  .p-sm-2 {
    padding: .75rem !important
  }
  .p-sm-3 {
    padding: 1.5rem !important
  }
  .p-sm-4 {
    padding: 2.25rem !important
  }
  .p-sm-5 {
    padding: 4.5rem !important
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important
  }
  .px-sm-1 {
    padding-right: .375rem !important;
    padding-left: .375rem !important
  }
  .px-sm-2 {
    padding-right: .75rem !important;
    padding-left: .75rem !important
  }
  .px-sm-3 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important
  }
  .px-sm-4 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important
  }
  .px-sm-5 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important
  }
  .py-sm-1 {
    padding-top: .375rem !important;
    padding-bottom: .375rem !important
  }
  .py-sm-2 {
    padding-top: .75rem !important;
    padding-bottom: .75rem !important
  }
  .py-sm-3 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important
  }
  .py-sm-4 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important
  }
  .py-sm-5 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important
  }
  .pt-sm-0 {
    padding-top: 0 !important
  }
  .pt-sm-1 {
    padding-top: .375rem !important
  }
  .pt-sm-2 {
    padding-top: .75rem !important
  }
  .pt-sm-3 {
    padding-top: 1.5rem !important
  }
  .pt-sm-4 {
    padding-top: 2.25rem !important
  }
  .pt-sm-5 {
    padding-top: 4.5rem !important
  }
  .pe-sm-0 {
    padding-right: 0 !important
  }
  .pe-sm-1 {
    padding-right: .375rem !important
  }
  .pe-sm-2 {
    padding-right: .75rem !important
  }
  .pe-sm-3 {
    padding-right: 1.5rem !important
  }
  .pe-sm-4 {
    padding-right: 2.25rem !important
  }
  .pe-sm-5 {
    padding-right: 4.5rem !important
  }
  .pb-sm-0 {
    padding-bottom: 0 !important
  }
  .pb-sm-1 {
    padding-bottom: .375rem !important
  }
  .pb-sm-2 {
    padding-bottom: .75rem !important
  }
  .pb-sm-3 {
    padding-bottom: 1.5rem !important
  }
  .pb-sm-4 {
    padding-bottom: 2.25rem !important
  }
  .pb-sm-5 {
    padding-bottom: 4.5rem !important
  }
  .ps-sm-0 {
    padding-left: 0 !important
  }
  .ps-sm-1 {
    padding-left: .375rem !important
  }
  .ps-sm-2 {
    padding-left: .75rem !important
  }
  .ps-sm-3 {
    padding-left: 1.5rem !important
  }
  .ps-sm-4 {
    padding-left: 2.25rem !important
  }
  .ps-sm-5 {
    padding-left: 4.5rem !important
  }
  .gap-sm-0 {
    gap: 0 !important
  }
  .gap-sm-1 {
    gap: .375rem !important
  }
  .gap-sm-2 {
    gap: .75rem !important
  }
  .gap-sm-3 {
    gap: 1.5rem !important
  }
  .gap-sm-4 {
    gap: 2.25rem !important
  }
  .gap-sm-5 {
    gap: 4.5rem !important
  }
  .row-gap-sm-0 {
    row-gap: 0 !important
  }
  .row-gap-sm-1 {
    row-gap: .375rem !important
  }
  .row-gap-sm-2 {
    row-gap: .75rem !important
  }
  .row-gap-sm-3 {
    row-gap: 1.5rem !important
  }
  .row-gap-sm-4 {
    row-gap: 2.25rem !important
  }
  .row-gap-sm-5 {
    row-gap: 4.5rem !important
  }
  .column-gap-sm-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important
  }
  .column-gap-sm-1 {
    -webkit-column-gap: .375rem !important;
    -moz-column-gap: .375rem !important;
    column-gap: .375rem !important
  }
  .column-gap-sm-2 {
    -webkit-column-gap: .75rem !important;
    -moz-column-gap: .75rem !important;
    column-gap: .75rem !important
  }
  .column-gap-sm-3 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important
  }
  .column-gap-sm-4 {
    -webkit-column-gap: 2.25rem !important;
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important
  }
  .column-gap-sm-5 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important
  }
  .text-sm-start {
    text-align: left !important
  }
  .text-sm-end {
    text-align: right !important
  }
  .text-sm-center {
    text-align: center !important
  }
}

@media (min-width:768px) {
  .float-md-start {
    float: left !important
  }
  .float-md-end {
    float: right !important
  }
  .float-md-none {
    float: none !important
  }
  .object-fit-md-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important
  }
  .object-fit-md-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important
  }
  .object-fit-md-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important
  }
  .object-fit-md-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important
  }
  .object-fit-md-none {
    -o-object-fit: none !important;
    object-fit: none !important
  }
  .d-md-inline {
    display: inline !important
  }
  .d-md-inline-block {
    display: inline-block !important
  }
  .d-md-block {
    display: block !important
  }
  .d-md-grid {
    display: grid !important
  }
  .d-md-inline-grid {
    display: inline-grid !important
  }
  .d-md-table {
    display: table !important
  }
  .d-md-table-row {
    display: table-row !important
  }
  .d-md-table-cell {
    display: table-cell !important
  }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important
  }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important
  }
  .d-md-none {
    display: none !important
  }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important
  }
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important
  }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important
  }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important
  }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important
  }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important
  }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important
  }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important
  }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important
  }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important
  }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important
  }
  .justify-content-md-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important
  }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important
  }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important
  }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important
  }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important
  }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important
  }
  .order-md-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important
  }
  .order-md-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important
  }
  .order-md-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important
  }
  .order-md-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important
  }
  .order-md-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important
  }
  .order-md-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important
  }
  .order-md-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important
  }
  .order-md-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important
  }
  .m-md-0 {
    margin: 0 !important
  }
  .m-md-1 {
    margin: .375rem !important
  }
  .m-md-2 {
    margin: .75rem !important
  }
  .m-md-3 {
    margin: 1.5rem !important
  }
  .m-md-4 {
    margin: 2.25rem !important
  }
  .m-md-5 {
    margin: 4.5rem !important
  }
  .m-md-auto {
    margin: auto !important
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important
  }
  .mx-md-1 {
    margin-right: .375rem !important;
    margin-left: .375rem !important
  }
  .mx-md-2 {
    margin-right: .75rem !important;
    margin-left: .75rem !important
  }
  .mx-md-3 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important
  }
  .mx-md-4 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important
  }
  .mx-md-5 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important
  }
  .my-md-1 {
    margin-top: .375rem !important;
    margin-bottom: .375rem !important
  }
  .my-md-2 {
    margin-top: .75rem !important;
    margin-bottom: .75rem !important
  }
  .my-md-3 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important
  }
  .my-md-4 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important
  }
  .my-md-5 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important
  }
  .mt-md-0 {
    margin-top: 0 !important
  }
  .mt-md-1 {
    margin-top: .375rem !important
  }
  .mt-md-2 {
    margin-top: .75rem !important
  }
  .mt-md-3 {
    margin-top: 1.5rem !important
  }
  .mt-md-4 {
    margin-top: 2.25rem !important
  }
  .mt-md-5 {
    margin-top: 4.5rem !important
  }
  .mt-md-auto {
    margin-top: auto !important
  }
  .me-md-0 {
    margin-right: 0 !important
  }
  .me-md-1 {
    margin-right: .375rem !important
  }
  .me-md-2 {
    margin-right: .75rem !important
  }
  .me-md-3 {
    margin-right: 1.5rem !important
  }
  .me-md-4 {
    margin-right: 2.25rem !important
  }
  .me-md-5 {
    margin-right: 4.5rem !important
  }
  .me-md-auto {
    margin-right: auto !important
  }
  .mb-md-0 {
    margin-bottom: 0 !important
  }
  .mb-md-1 {
    margin-bottom: .375rem !important
  }
  .mb-md-2 {
    margin-bottom: .75rem !important
  }
  .mb-md-3 {
    margin-bottom: 1.5rem !important
  }
  .mb-md-4 {
    margin-bottom: 2.25rem !important
  }
  .mb-md-5 {
    margin-bottom: 4.5rem !important
  }
  .mb-md-auto {
    margin-bottom: auto !important
  }
  .ms-md-0 {
    margin-left: 0 !important
  }
  .ms-md-1 {
    margin-left: .375rem !important
  }
  .ms-md-2 {
    margin-left: .75rem !important
  }
  .ms-md-3 {
    margin-left: 1.5rem !important
  }
  .ms-md-4 {
    margin-left: 2.25rem !important
  }
  .ms-md-5 {
    margin-left: 4.5rem !important
  }
  .ms-md-auto {
    margin-left: auto !important
  }
  .m-md-n1 {
    margin: -.375rem !important
  }
  .m-md-n2 {
    margin: -.75rem !important
  }
  .m-md-n3 {
    margin: -1.5rem !important
  }
  .m-md-n4 {
    margin: -2.25rem !important
  }
  .m-md-n5 {
    margin: -4.5rem !important
  }
  .mx-md-n1 {
    margin-right: -.375rem !important;
    margin-left: -.375rem !important
  }
  .mx-md-n2 {
    margin-right: -.75rem !important;
    margin-left: -.75rem !important
  }
  .mx-md-n3 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important
  }
  .mx-md-n4 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important
  }
  .mx-md-n5 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important
  }
  .my-md-n1 {
    margin-top: -.375rem !important;
    margin-bottom: -.375rem !important
  }
  .my-md-n2 {
    margin-top: -.75rem !important;
    margin-bottom: -.75rem !important
  }
  .my-md-n3 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important
  }
  .my-md-n4 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important
  }
  .my-md-n5 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important
  }
  .mt-md-n1 {
    margin-top: -.375rem !important
  }
  .mt-md-n2 {
    margin-top: -.75rem !important
  }
  .mt-md-n3 {
    margin-top: -1.5rem !important
  }
  .mt-md-n4 {
    margin-top: -2.25rem !important
  }
  .mt-md-n5 {
    margin-top: -4.5rem !important
  }
  .me-md-n1 {
    margin-right: -.375rem !important
  }
  .me-md-n2 {
    margin-right: -.75rem !important
  }
  .me-md-n3 {
    margin-right: -1.5rem !important
  }
  .me-md-n4 {
    margin-right: -2.25rem !important
  }
  .me-md-n5 {
    margin-right: -4.5rem !important
  }
  .mb-md-n1 {
    margin-bottom: -.375rem !important
  }
  .mb-md-n2 {
    margin-bottom: -.75rem !important
  }
  .mb-md-n3 {
    margin-bottom: -1.5rem !important
  }
  .mb-md-n4 {
    margin-bottom: -2.25rem !important
  }
  .mb-md-n5 {
    margin-bottom: -4.5rem !important
  }
  .ms-md-n1 {
    margin-left: -.375rem !important
  }
  .ms-md-n2 {
    margin-left: -.75rem !important
  }
  .ms-md-n3 {
    margin-left: -1.5rem !important
  }
  .ms-md-n4 {
    margin-left: -2.25rem !important
  }
  .ms-md-n5 {
    margin-left: -4.5rem !important
  }
  .p-md-0 {
    padding: 0 !important
  }
  .p-md-1 {
    padding: .375rem !important
  }
  .p-md-2 {
    padding: .75rem !important
  }
  .p-md-3 {
    padding: 1.5rem !important
  }
  .p-md-4 {
    padding: 2.25rem !important
  }
  .p-md-5 {
    padding: 4.5rem !important
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important
  }
  .px-md-1 {
    padding-right: .375rem !important;
    padding-left: .375rem !important
  }
  .px-md-2 {
    padding-right: .75rem !important;
    padding-left: .75rem !important
  }
  .px-md-3 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important
  }
  .px-md-4 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important
  }
  .px-md-5 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important
  }
  .py-md-1 {
    padding-top: .375rem !important;
    padding-bottom: .375rem !important
  }
  .py-md-2 {
    padding-top: .75rem !important;
    padding-bottom: .75rem !important
  }
  .py-md-3 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important
  }
  .py-md-4 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important
  }
  .py-md-5 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important
  }
  .pt-md-0 {
    padding-top: 0 !important
  }
  .pt-md-1 {
    padding-top: .375rem !important
  }
  .pt-md-2 {
    padding-top: .75rem !important
  }
  .pt-md-3 {
    padding-top: 1.5rem !important
  }
  .pt-md-4 {
    padding-top: 2.25rem !important
  }
  .pt-md-5 {
    padding-top: 4.5rem !important
  }
  .pe-md-0 {
    padding-right: 0 !important
  }
  .pe-md-1 {
    padding-right: .375rem !important
  }
  .pe-md-2 {
    padding-right: .75rem !important
  }
  .pe-md-3 {
    padding-right: 1.5rem !important
  }
  .pe-md-4 {
    padding-right: 2.25rem !important
  }
  .pe-md-5 {
    padding-right: 4.5rem !important
  }
  .pb-md-0 {
    padding-bottom: 0 !important
  }
  .pb-md-1 {
    padding-bottom: .375rem !important
  }
  .pb-md-2 {
    padding-bottom: .75rem !important
  }
  .pb-md-3 {
    padding-bottom: 1.5rem !important
  }
  .pb-md-4 {
    padding-bottom: 2.25rem !important
  }
  .pb-md-5 {
    padding-bottom: 4.5rem !important
  }
  .ps-md-0 {
    padding-left: 0 !important
  }
  .ps-md-1 {
    padding-left: .375rem !important
  }
  .ps-md-2 {
    padding-left: .75rem !important
  }
  .ps-md-3 {
    padding-left: 1.5rem !important
  }
  .ps-md-4 {
    padding-left: 2.25rem !important
  }
  .ps-md-5 {
    padding-left: 4.5rem !important
  }
  .gap-md-0 {
    gap: 0 !important
  }
  .gap-md-1 {
    gap: .375rem !important
  }
  .gap-md-2 {
    gap: .75rem !important
  }
  .gap-md-3 {
    gap: 1.5rem !important
  }
  .gap-md-4 {
    gap: 2.25rem !important
  }
  .gap-md-5 {
    gap: 4.5rem !important
  }
  .row-gap-md-0 {
    row-gap: 0 !important
  }
  .row-gap-md-1 {
    row-gap: .375rem !important
  }
  .row-gap-md-2 {
    row-gap: .75rem !important
  }
  .row-gap-md-3 {
    row-gap: 1.5rem !important
  }
  .row-gap-md-4 {
    row-gap: 2.25rem !important
  }
  .row-gap-md-5 {
    row-gap: 4.5rem !important
  }
  .column-gap-md-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important
  }
  .column-gap-md-1 {
    -webkit-column-gap: .375rem !important;
    -moz-column-gap: .375rem !important;
    column-gap: .375rem !important
  }
  .column-gap-md-2 {
    -webkit-column-gap: .75rem !important;
    -moz-column-gap: .75rem !important;
    column-gap: .75rem !important
  }
  .column-gap-md-3 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important
  }
  .column-gap-md-4 {
    -webkit-column-gap: 2.25rem !important;
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important
  }
  .column-gap-md-5 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important
  }
  .text-md-start {
    text-align: left !important
  }
  .text-md-end {
    text-align: right !important
  }
  .text-md-center {
    text-align: center !important
  }
}

@media (min-width:992px) {
  .float-lg-start {
    float: left !important
  }
  .float-lg-end {
    float: right !important
  }
  .float-lg-none {
    float: none !important
  }
  .object-fit-lg-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important
  }
  .object-fit-lg-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important
  }
  .object-fit-lg-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important
  }
  .object-fit-lg-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important
  }
  .object-fit-lg-none {
    -o-object-fit: none !important;
    object-fit: none !important
  }
  .d-lg-inline {
    display: inline !important
  }
  .d-lg-inline-block {
    display: inline-block !important
  }
  .d-lg-block {
    display: block !important
  }
  .d-lg-grid {
    display: grid !important
  }
  .d-lg-inline-grid {
    display: inline-grid !important
  }
  .d-lg-table {
    display: table !important
  }
  .d-lg-table-row {
    display: table-row !important
  }
  .d-lg-table-cell {
    display: table-cell !important
  }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important
  }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important
  }
  .d-lg-none {
    display: none !important
  }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important
  }
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important
  }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important
  }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important
  }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important
  }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important
  }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important
  }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important
  }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important
  }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important
  }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important
  }
  .justify-content-lg-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important
  }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important
  }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important
  }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important
  }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important
  }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important
  }
  .order-lg-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important
  }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important
  }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important
  }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important
  }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important
  }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important
  }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important
  }
  .order-lg-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important
  }
  .m-lg-0 {
    margin: 0 !important
  }
  .m-lg-1 {
    margin: .375rem !important
  }
  .m-lg-2 {
    margin: .75rem !important
  }
  .m-lg-3 {
    margin: 1.5rem !important
  }
  .m-lg-4 {
    margin: 2.25rem !important
  }
  .m-lg-5 {
    margin: 4.5rem !important
  }
  .m-lg-auto {
    margin: auto !important
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important
  }
  .mx-lg-1 {
    margin-right: .375rem !important;
    margin-left: .375rem !important
  }
  .mx-lg-2 {
    margin-right: .75rem !important;
    margin-left: .75rem !important
  }
  .mx-lg-3 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important
  }
  .mx-lg-4 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important
  }
  .mx-lg-5 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important
  }
  .my-lg-1 {
    margin-top: .375rem !important;
    margin-bottom: .375rem !important
  }
  .my-lg-2 {
    margin-top: .75rem !important;
    margin-bottom: .75rem !important
  }
  .my-lg-3 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important
  }
  .my-lg-4 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important
  }
  .my-lg-5 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important
  }
  .mt-lg-0 {
    margin-top: 0 !important
  }
  .mt-lg-1 {
    margin-top: .375rem !important
  }
  .mt-lg-2 {
    margin-top: .75rem !important
  }
  .mt-lg-3 {
    margin-top: 1.5rem !important
  }
  .mt-lg-4 {
    margin-top: 2.25rem !important
  }
  .mt-lg-5 {
    margin-top: 4.5rem !important
  }
  .mt-lg-auto {
    margin-top: auto !important
  }
  .me-lg-0 {
    margin-right: 0 !important
  }
  .me-lg-1 {
    margin-right: .375rem !important
  }
  .me-lg-2 {
    margin-right: .75rem !important
  }
  .me-lg-3 {
    margin-right: 1.5rem !important
  }
  .me-lg-4 {
    margin-right: 2.25rem !important
  }
  .me-lg-5 {
    margin-right: 4.5rem !important
  }
  .me-lg-auto {
    margin-right: auto !important
  }
  .mb-lg-0 {
    margin-bottom: 0 !important
  }
  .mb-lg-1 {
    margin-bottom: .375rem !important
  }
  .mb-lg-2 {
    margin-bottom: .75rem !important
  }
  .mb-lg-3 {
    margin-bottom: 1.5rem !important
  }
  .mb-lg-4 {
    margin-bottom: 2.25rem !important
  }
  .mb-lg-5 {
    margin-bottom: 4.5rem !important
  }
  .mb-lg-auto {
    margin-bottom: auto !important
  }
  .ms-lg-0 {
    margin-left: 0 !important
  }
  .ms-lg-1 {
    margin-left: .375rem !important
  }
  .ms-lg-2 {
    margin-left: .75rem !important
  }
  .ms-lg-3 {
    margin-left: 1.5rem !important
  }
  .ms-lg-4 {
    margin-left: 2.25rem !important
  }
  .ms-lg-5 {
    margin-left: 4.5rem !important
  }
  .ms-lg-auto {
    margin-left: auto !important
  }
  .m-lg-n1 {
    margin: -.375rem !important
  }
  .m-lg-n2 {
    margin: -.75rem !important
  }
  .m-lg-n3 {
    margin: -1.5rem !important
  }
  .m-lg-n4 {
    margin: -2.25rem !important
  }
  .m-lg-n5 {
    margin: -4.5rem !important
  }
  .mx-lg-n1 {
    margin-right: -.375rem !important;
    margin-left: -.375rem !important
  }
  .mx-lg-n2 {
    margin-right: -.75rem !important;
    margin-left: -.75rem !important
  }
  .mx-lg-n3 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important
  }
  .mx-lg-n4 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important
  }
  .mx-lg-n5 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important
  }
  .my-lg-n1 {
    margin-top: -.375rem !important;
    margin-bottom: -.375rem !important
  }
  .my-lg-n2 {
    margin-top: -.75rem !important;
    margin-bottom: -.75rem !important
  }
  .my-lg-n3 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important
  }
  .my-lg-n4 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important
  }
  .my-lg-n5 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important
  }
  .mt-lg-n1 {
    margin-top: -.375rem !important
  }
  .mt-lg-n2 {
    margin-top: -.75rem !important
  }
  .mt-lg-n3 {
    margin-top: -1.5rem !important
  }
  .mt-lg-n4 {
    margin-top: -2.25rem !important
  }
  .mt-lg-n5 {
    margin-top: -4.5rem !important
  }
  .me-lg-n1 {
    margin-right: -.375rem !important
  }
  .me-lg-n2 {
    margin-right: -.75rem !important
  }
  .me-lg-n3 {
    margin-right: -1.5rem !important
  }
  .me-lg-n4 {
    margin-right: -2.25rem !important
  }
  .me-lg-n5 {
    margin-right: -4.5rem !important
  }
  .mb-lg-n1 {
    margin-bottom: -.375rem !important
  }
  .mb-lg-n2 {
    margin-bottom: -.75rem !important
  }
  .mb-lg-n3 {
    margin-bottom: -1.5rem !important
  }
  .mb-lg-n4 {
    margin-bottom: -2.25rem !important
  }
  .mb-lg-n5 {
    margin-bottom: -4.5rem !important
  }
  .ms-lg-n1 {
    margin-left: -.375rem !important
  }
  .ms-lg-n2 {
    margin-left: -.75rem !important
  }
  .ms-lg-n3 {
    margin-left: -1.5rem !important
  }
  .ms-lg-n4 {
    margin-left: -2.25rem !important
  }
  .ms-lg-n5 {
    margin-left: -4.5rem !important
  }
  .p-lg-0 {
    padding: 0 !important
  }
  .p-lg-1 {
    padding: .375rem !important
  }
  .p-lg-2 {
    padding: .75rem !important
  }
  .p-lg-3 {
    padding: 1.5rem !important
  }
  .p-lg-4 {
    padding: 2.25rem !important
  }
  .p-lg-5 {
    padding: 4.5rem !important
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important
  }
  .px-lg-1 {
    padding-right: .375rem !important;
    padding-left: .375rem !important
  }
  .px-lg-2 {
    padding-right: .75rem !important;
    padding-left: .75rem !important
  }
  .px-lg-3 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important
  }
  .px-lg-4 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important
  }
  .px-lg-5 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important
  }
  .py-lg-1 {
    padding-top: .375rem !important;
    padding-bottom: .375rem !important
  }
  .py-lg-2 {
    padding-top: .75rem !important;
    padding-bottom: .75rem !important
  }
  .py-lg-3 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important
  }
  .py-lg-4 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important
  }
  .py-lg-5 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important
  }
  .pt-lg-0 {
    padding-top: 0 !important
  }
  .pt-lg-1 {
    padding-top: .375rem !important
  }
  .pt-lg-2 {
    padding-top: .75rem !important
  }
  .pt-lg-3 {
    padding-top: 1.5rem !important
  }
  .pt-lg-4 {
    padding-top: 2.25rem !important
  }
  .pt-lg-5 {
    padding-top: 4.5rem !important
  }
  .pe-lg-0 {
    padding-right: 0 !important
  }
  .pe-lg-1 {
    padding-right: .375rem !important
  }
  .pe-lg-2 {
    padding-right: .75rem !important
  }
  .pe-lg-3 {
    padding-right: 1.5rem !important
  }
  .pe-lg-4 {
    padding-right: 2.25rem !important
  }
  .pe-lg-5 {
    padding-right: 4.5rem !important
  }
  .pb-lg-0 {
    padding-bottom: 0 !important
  }
  .pb-lg-1 {
    padding-bottom: .375rem !important
  }
  .pb-lg-2 {
    padding-bottom: .75rem !important
  }
  .pb-lg-3 {
    padding-bottom: 1.5rem !important
  }
  .pb-lg-4 {
    padding-bottom: 2.25rem !important
  }
  .pb-lg-5 {
    padding-bottom: 4.5rem !important
  }
  .ps-lg-0 {
    padding-left: 0 !important
  }
  .ps-lg-1 {
    padding-left: .375rem !important
  }
  .ps-lg-2 {
    padding-left: .75rem !important
  }
  .ps-lg-3 {
    padding-left: 1.5rem !important
  }
  .ps-lg-4 {
    padding-left: 2.25rem !important
  }
  .ps-lg-5 {
    padding-left: 4.5rem !important
  }
  .gap-lg-0 {
    gap: 0 !important
  }
  .gap-lg-1 {
    gap: .375rem !important
  }
  .gap-lg-2 {
    gap: .75rem !important
  }
  .gap-lg-3 {
    gap: 1.5rem !important
  }
  .gap-lg-4 {
    gap: 2.25rem !important
  }
  .gap-lg-5 {
    gap: 4.5rem !important
  }
  .row-gap-lg-0 {
    row-gap: 0 !important
  }
  .row-gap-lg-1 {
    row-gap: .375rem !important
  }
  .row-gap-lg-2 {
    row-gap: .75rem !important
  }
  .row-gap-lg-3 {
    row-gap: 1.5rem !important
  }
  .row-gap-lg-4 {
    row-gap: 2.25rem !important
  }
  .row-gap-lg-5 {
    row-gap: 4.5rem !important
  }
  .column-gap-lg-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important
  }
  .column-gap-lg-1 {
    -webkit-column-gap: .375rem !important;
    -moz-column-gap: .375rem !important;
    column-gap: .375rem !important
  }
  .column-gap-lg-2 {
    -webkit-column-gap: .75rem !important;
    -moz-column-gap: .75rem !important;
    column-gap: .75rem !important
  }
  .column-gap-lg-3 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important
  }
  .column-gap-lg-4 {
    -webkit-column-gap: 2.25rem !important;
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important
  }
  .column-gap-lg-5 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important
  }
  .text-lg-start {
    text-align: left !important
  }
  .text-lg-end {
    text-align: right !important
  }
  .text-lg-center {
    text-align: center !important
  }
}

@media (min-width:1200px) {
  .float-xl-start {
    float: left !important
  }
  .float-xl-end {
    float: right !important
  }
  .float-xl-none {
    float: none !important
  }
  .object-fit-xl-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important
  }
  .object-fit-xl-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important
  }
  .object-fit-xl-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important
  }
  .object-fit-xl-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important
  }
  .object-fit-xl-none {
    -o-object-fit: none !important;
    object-fit: none !important
  }
  .d-xl-inline {
    display: inline !important
  }
  .d-xl-inline-block {
    display: inline-block !important
  }
  .d-xl-block {
    display: block !important
  }
  .d-xl-grid {
    display: grid !important
  }
  .d-xl-inline-grid {
    display: inline-grid !important
  }
  .d-xl-table {
    display: table !important
  }
  .d-xl-table-row {
    display: table-row !important
  }
  .d-xl-table-cell {
    display: table-cell !important
  }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important
  }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important
  }
  .d-xl-none {
    display: none !important
  }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important
  }
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important
  }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important
  }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important
  }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important
  }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important
  }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important
  }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important
  }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important
  }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important
  }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important
  }
  .justify-content-xl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important
  }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important
  }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important
  }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important
  }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important
  }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important
  }
  .order-xl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important
  }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important
  }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important
  }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important
  }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important
  }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important
  }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important
  }
  .order-xl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important
  }
  .m-xl-0 {
    margin: 0 !important
  }
  .m-xl-1 {
    margin: .375rem !important
  }
  .m-xl-2 {
    margin: .75rem !important
  }
  .m-xl-3 {
    margin: 1.5rem !important
  }
  .m-xl-4 {
    margin: 2.25rem !important
  }
  .m-xl-5 {
    margin: 4.5rem !important
  }
  .m-xl-auto {
    margin: auto !important
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important
  }
  .mx-xl-1 {
    margin-right: .375rem !important;
    margin-left: .375rem !important
  }
  .mx-xl-2 {
    margin-right: .75rem !important;
    margin-left: .75rem !important
  }
  .mx-xl-3 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important
  }
  .mx-xl-4 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important
  }
  .mx-xl-5 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important
  }
  .my-xl-1 {
    margin-top: .375rem !important;
    margin-bottom: .375rem !important
  }
  .my-xl-2 {
    margin-top: .75rem !important;
    margin-bottom: .75rem !important
  }
  .my-xl-3 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important
  }
  .my-xl-4 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important
  }
  .my-xl-5 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important
  }
  .mt-xl-0 {
    margin-top: 0 !important
  }
  .mt-xl-1 {
    margin-top: .375rem !important
  }
  .mt-xl-2 {
    margin-top: .75rem !important
  }
  .mt-xl-3 {
    margin-top: 1.5rem !important
  }
  .mt-xl-4 {
    margin-top: 2.25rem !important
  }
  .mt-xl-5 {
    margin-top: 4.5rem !important
  }
  .mt-xl-auto {
    margin-top: auto !important
  }
  .me-xl-0 {
    margin-right: 0 !important
  }
  .me-xl-1 {
    margin-right: .375rem !important
  }
  .me-xl-2 {
    margin-right: .75rem !important
  }
  .me-xl-3 {
    margin-right: 1.5rem !important
  }
  .me-xl-4 {
    margin-right: 2.25rem !important
  }
  .me-xl-5 {
    margin-right: 4.5rem !important
  }
  .me-xl-auto {
    margin-right: auto !important
  }
  .mb-xl-0 {
    margin-bottom: 0 !important
  }
  .mb-xl-1 {
    margin-bottom: .375rem !important
  }
  .mb-xl-2 {
    margin-bottom: .75rem !important
  }
  .mb-xl-3 {
    margin-bottom: 1.5rem !important
  }
  .mb-xl-4 {
    margin-bottom: 2.25rem !important
  }
  .mb-xl-5 {
    margin-bottom: 4.5rem !important
  }
  .mb-xl-auto {
    margin-bottom: auto !important
  }
  .ms-xl-0 {
    margin-left: 0 !important
  }
  .ms-xl-1 {
    margin-left: .375rem !important
  }
  .ms-xl-2 {
    margin-left: .75rem !important
  }
  .ms-xl-3 {
    margin-left: 1.5rem !important
  }
  .ms-xl-4 {
    margin-left: 2.25rem !important
  }
  .ms-xl-5 {
    margin-left: 4.5rem !important
  }
  .ms-xl-auto {
    margin-left: auto !important
  }
  .m-xl-n1 {
    margin: -.375rem !important
  }
  .m-xl-n2 {
    margin: -.75rem !important
  }
  .m-xl-n3 {
    margin: -1.5rem !important
  }
  .m-xl-n4 {
    margin: -2.25rem !important
  }
  .m-xl-n5 {
    margin: -4.5rem !important
  }
  .mx-xl-n1 {
    margin-right: -.375rem !important;
    margin-left: -.375rem !important
  }
  .mx-xl-n2 {
    margin-right: -.75rem !important;
    margin-left: -.75rem !important
  }
  .mx-xl-n3 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important
  }
  .mx-xl-n4 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important
  }
  .mx-xl-n5 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important
  }
  .my-xl-n1 {
    margin-top: -.375rem !important;
    margin-bottom: -.375rem !important
  }
  .my-xl-n2 {
    margin-top: -.75rem !important;
    margin-bottom: -.75rem !important
  }
  .my-xl-n3 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important
  }
  .my-xl-n4 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important
  }
  .my-xl-n5 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important
  }
  .mt-xl-n1 {
    margin-top: -.375rem !important
  }
  .mt-xl-n2 {
    margin-top: -.75rem !important
  }
  .mt-xl-n3 {
    margin-top: -1.5rem !important
  }
  .mt-xl-n4 {
    margin-top: -2.25rem !important
  }
  .mt-xl-n5 {
    margin-top: -4.5rem !important
  }
  .me-xl-n1 {
    margin-right: -.375rem !important
  }
  .me-xl-n2 {
    margin-right: -.75rem !important
  }
  .me-xl-n3 {
    margin-right: -1.5rem !important
  }
  .me-xl-n4 {
    margin-right: -2.25rem !important
  }
  .me-xl-n5 {
    margin-right: -4.5rem !important
  }
  .mb-xl-n1 {
    margin-bottom: -.375rem !important
  }
  .mb-xl-n2 {
    margin-bottom: -.75rem !important
  }
  .mb-xl-n3 {
    margin-bottom: -1.5rem !important
  }
  .mb-xl-n4 {
    margin-bottom: -2.25rem !important
  }
  .mb-xl-n5 {
    margin-bottom: -4.5rem !important
  }
  .ms-xl-n1 {
    margin-left: -.375rem !important
  }
  .ms-xl-n2 {
    margin-left: -.75rem !important
  }
  .ms-xl-n3 {
    margin-left: -1.5rem !important
  }
  .ms-xl-n4 {
    margin-left: -2.25rem !important
  }
  .ms-xl-n5 {
    margin-left: -4.5rem !important
  }
  .p-xl-0 {
    padding: 0 !important
  }
  .p-xl-1 {
    padding: .375rem !important
  }
  .p-xl-2 {
    padding: .75rem !important
  }
  .p-xl-3 {
    padding: 1.5rem !important
  }
  .p-xl-4 {
    padding: 2.25rem !important
  }
  .p-xl-5 {
    padding: 4.5rem !important
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important
  }
  .px-xl-1 {
    padding-right: .375rem !important;
    padding-left: .375rem !important
  }
  .px-xl-2 {
    padding-right: .75rem !important;
    padding-left: .75rem !important
  }
  .px-xl-3 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important
  }
  .px-xl-4 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important
  }
  .px-xl-5 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important
  }
  .py-xl-1 {
    padding-top: .375rem !important;
    padding-bottom: .375rem !important
  }
  .py-xl-2 {
    padding-top: .75rem !important;
    padding-bottom: .75rem !important
  }
  .py-xl-3 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important
  }
  .py-xl-4 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important
  }
  .py-xl-5 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important
  }
  .pt-xl-0 {
    padding-top: 0 !important
  }
  .pt-xl-1 {
    padding-top: .375rem !important
  }
  .pt-xl-2 {
    padding-top: .75rem !important
  }
  .pt-xl-3 {
    padding-top: 1.5rem !important
  }
  .pt-xl-4 {
    padding-top: 2.25rem !important
  }
  .pt-xl-5 {
    padding-top: 4.5rem !important
  }
  .pe-xl-0 {
    padding-right: 0 !important
  }
  .pe-xl-1 {
    padding-right: .375rem !important
  }
  .pe-xl-2 {
    padding-right: .75rem !important
  }
  .pe-xl-3 {
    padding-right: 1.5rem !important
  }
  .pe-xl-4 {
    padding-right: 2.25rem !important
  }
  .pe-xl-5 {
    padding-right: 4.5rem !important
  }
  .pb-xl-0 {
    padding-bottom: 0 !important
  }
  .pb-xl-1 {
    padding-bottom: .375rem !important
  }
  .pb-xl-2 {
    padding-bottom: .75rem !important
  }
  .pb-xl-3 {
    padding-bottom: 1.5rem !important
  }
  .pb-xl-4 {
    padding-bottom: 2.25rem !important
  }
  .pb-xl-5 {
    padding-bottom: 4.5rem !important
  }
  .ps-xl-0 {
    padding-left: 0 !important
  }
  .ps-xl-1 {
    padding-left: .375rem !important
  }
  .ps-xl-2 {
    padding-left: .75rem !important
  }
  .ps-xl-3 {
    padding-left: 1.5rem !important
  }
  .ps-xl-4 {
    padding-left: 2.25rem !important
  }
  .ps-xl-5 {
    padding-left: 4.5rem !important
  }
  .gap-xl-0 {
    gap: 0 !important
  }
  .gap-xl-1 {
    gap: .375rem !important
  }
  .gap-xl-2 {
    gap: .75rem !important
  }
  .gap-xl-3 {
    gap: 1.5rem !important
  }
  .gap-xl-4 {
    gap: 2.25rem !important
  }
  .gap-xl-5 {
    gap: 4.5rem !important
  }
  .row-gap-xl-0 {
    row-gap: 0 !important
  }
  .row-gap-xl-1 {
    row-gap: .375rem !important
  }
  .row-gap-xl-2 {
    row-gap: .75rem !important
  }
  .row-gap-xl-3 {
    row-gap: 1.5rem !important
  }
  .row-gap-xl-4 {
    row-gap: 2.25rem !important
  }
  .row-gap-xl-5 {
    row-gap: 4.5rem !important
  }
  .column-gap-xl-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important
  }
  .column-gap-xl-1 {
    -webkit-column-gap: .375rem !important;
    -moz-column-gap: .375rem !important;
    column-gap: .375rem !important
  }
  .column-gap-xl-2 {
    -webkit-column-gap: .75rem !important;
    -moz-column-gap: .75rem !important;
    column-gap: .75rem !important
  }
  .column-gap-xl-3 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important
  }
  .column-gap-xl-4 {
    -webkit-column-gap: 2.25rem !important;
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important
  }
  .column-gap-xl-5 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important
  }
  .text-xl-start {
    text-align: left !important
  }
  .text-xl-end {
    text-align: right !important
  }
  .text-xl-center {
    text-align: center !important
  }
}

@media (min-width:1400px) {
  .float-xxl-start {
    float: left !important
  }
  .float-xxl-end {
    float: right !important
  }
  .float-xxl-none {
    float: none !important
  }
  .object-fit-xxl-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important
  }
  .object-fit-xxl-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important
  }
  .object-fit-xxl-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important
  }
  .object-fit-xxl-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important
  }
  .object-fit-xxl-none {
    -o-object-fit: none !important;
    object-fit: none !important
  }
  .d-xxl-inline {
    display: inline !important
  }
  .d-xxl-inline-block {
    display: inline-block !important
  }
  .d-xxl-block {
    display: block !important
  }
  .d-xxl-grid {
    display: grid !important
  }
  .d-xxl-inline-grid {
    display: inline-grid !important
  }
  .d-xxl-table {
    display: table !important
  }
  .d-xxl-table-row {
    display: table-row !important
  }
  .d-xxl-table-cell {
    display: table-cell !important
  }
  .d-xxl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important
  }
  .d-xxl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important
  }
  .d-xxl-none {
    display: none !important
  }
  .flex-xxl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important
  }
  .flex-xxl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important
  }
  .flex-xxl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important
  }
  .flex-xxl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important
  }
  .flex-xxl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important
  }
  .flex-xxl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important
  }
  .flex-xxl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important
  }
  .flex-xxl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important
  }
  .flex-xxl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important
  }
  .flex-xxl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important
  }
  .flex-xxl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important
  }
  .flex-xxl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important
  }
  .justify-content-xxl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important
  }
  .justify-content-xxl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important
  }
  .justify-content-xxl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important
  }
  .justify-content-xxl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important
  }
  .justify-content-xxl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important
  }
  .justify-content-xxl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important
  }
  .align-items-xxl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important
  }
  .align-items-xxl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important
  }
  .align-items-xxl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important
  }
  .align-items-xxl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important
  }
  .align-items-xxl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important
  }
  .align-content-xxl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important
  }
  .align-content-xxl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important
  }
  .align-content-xxl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important
  }
  .align-content-xxl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important
  }
  .align-content-xxl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important
  }
  .align-content-xxl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important
  }
  .align-self-xxl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important
  }
  .align-self-xxl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important
  }
  .align-self-xxl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important
  }
  .align-self-xxl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important
  }
  .align-self-xxl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important
  }
  .align-self-xxl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important
  }
  .order-xxl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important
  }
  .order-xxl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important
  }
  .order-xxl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important
  }
  .order-xxl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important
  }
  .order-xxl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important
  }
  .order-xxl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important
  }
  .order-xxl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important
  }
  .order-xxl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important
  }
  .m-xxl-0 {
    margin: 0 !important
  }
  .m-xxl-1 {
    margin: .375rem !important
  }
  .m-xxl-2 {
    margin: .75rem !important
  }
  .m-xxl-3 {
    margin: 1.5rem !important
  }
  .m-xxl-4 {
    margin: 2.25rem !important
  }
  .m-xxl-5 {
    margin: 4.5rem !important
  }
  .m-xxl-auto {
    margin: auto !important
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important
  }
  .mx-xxl-1 {
    margin-right: .375rem !important;
    margin-left: .375rem !important
  }
  .mx-xxl-2 {
    margin-right: .75rem !important;
    margin-left: .75rem !important
  }
  .mx-xxl-3 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important
  }
  .mx-xxl-4 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important
  }
  .mx-xxl-5 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important
  }
  .my-xxl-1 {
    margin-top: .375rem !important;
    margin-bottom: .375rem !important
  }
  .my-xxl-2 {
    margin-top: .75rem !important;
    margin-bottom: .75rem !important
  }
  .my-xxl-3 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important
  }
  .my-xxl-4 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important
  }
  .my-xxl-5 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important
  }
  .mt-xxl-0 {
    margin-top: 0 !important
  }
  .mt-xxl-1 {
    margin-top: .375rem !important
  }
  .mt-xxl-2 {
    margin-top: .75rem !important
  }
  .mt-xxl-3 {
    margin-top: 1.5rem !important
  }
  .mt-xxl-4 {
    margin-top: 2.25rem !important
  }
  .mt-xxl-5 {
    margin-top: 4.5rem !important
  }
  .mt-xxl-auto {
    margin-top: auto !important
  }
  .me-xxl-0 {
    margin-right: 0 !important
  }
  .me-xxl-1 {
    margin-right: .375rem !important
  }
  .me-xxl-2 {
    margin-right: .75rem !important
  }
  .me-xxl-3 {
    margin-right: 1.5rem !important
  }
  .me-xxl-4 {
    margin-right: 2.25rem !important
  }
  .me-xxl-5 {
    margin-right: 4.5rem !important
  }
  .me-xxl-auto {
    margin-right: auto !important
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important
  }
  .mb-xxl-1 {
    margin-bottom: .375rem !important
  }
  .mb-xxl-2 {
    margin-bottom: .75rem !important
  }
  .mb-xxl-3 {
    margin-bottom: 1.5rem !important
  }
  .mb-xxl-4 {
    margin-bottom: 2.25rem !important
  }
  .mb-xxl-5 {
    margin-bottom: 4.5rem !important
  }
  .mb-xxl-auto {
    margin-bottom: auto !important
  }
  .ms-xxl-0 {
    margin-left: 0 !important
  }
  .ms-xxl-1 {
    margin-left: .375rem !important
  }
  .ms-xxl-2 {
    margin-left: .75rem !important
  }
  .ms-xxl-3 {
    margin-left: 1.5rem !important
  }
  .ms-xxl-4 {
    margin-left: 2.25rem !important
  }
  .ms-xxl-5 {
    margin-left: 4.5rem !important
  }
  .ms-xxl-auto {
    margin-left: auto !important
  }
  .m-xxl-n1 {
    margin: -.375rem !important
  }
  .m-xxl-n2 {
    margin: -.75rem !important
  }
  .m-xxl-n3 {
    margin: -1.5rem !important
  }
  .m-xxl-n4 {
    margin: -2.25rem !important
  }
  .m-xxl-n5 {
    margin: -4.5rem !important
  }
  .mx-xxl-n1 {
    margin-right: -.375rem !important;
    margin-left: -.375rem !important
  }
  .mx-xxl-n2 {
    margin-right: -.75rem !important;
    margin-left: -.75rem !important
  }
  .mx-xxl-n3 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important
  }
  .mx-xxl-n4 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important
  }
  .mx-xxl-n5 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important
  }
  .my-xxl-n1 {
    margin-top: -.375rem !important;
    margin-bottom: -.375rem !important
  }
  .my-xxl-n2 {
    margin-top: -.75rem !important;
    margin-bottom: -.75rem !important
  }
  .my-xxl-n3 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important
  }
  .my-xxl-n4 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important
  }
  .my-xxl-n5 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important
  }
  .mt-xxl-n1 {
    margin-top: -.375rem !important
  }
  .mt-xxl-n2 {
    margin-top: -.75rem !important
  }
  .mt-xxl-n3 {
    margin-top: -1.5rem !important
  }
  .mt-xxl-n4 {
    margin-top: -2.25rem !important
  }
  .mt-xxl-n5 {
    margin-top: -4.5rem !important
  }
  .me-xxl-n1 {
    margin-right: -.375rem !important
  }
  .me-xxl-n2 {
    margin-right: -.75rem !important
  }
  .me-xxl-n3 {
    margin-right: -1.5rem !important
  }
  .me-xxl-n4 {
    margin-right: -2.25rem !important
  }
  .me-xxl-n5 {
    margin-right: -4.5rem !important
  }
  .mb-xxl-n1 {
    margin-bottom: -.375rem !important
  }
  .mb-xxl-n2 {
    margin-bottom: -.75rem !important
  }
  .mb-xxl-n3 {
    margin-bottom: -1.5rem !important
  }
  .mb-xxl-n4 {
    margin-bottom: -2.25rem !important
  }
  .mb-xxl-n5 {
    margin-bottom: -4.5rem !important
  }
  .ms-xxl-n1 {
    margin-left: -.375rem !important
  }
  .ms-xxl-n2 {
    margin-left: -.75rem !important
  }
  .ms-xxl-n3 {
    margin-left: -1.5rem !important
  }
  .ms-xxl-n4 {
    margin-left: -2.25rem !important
  }
  .ms-xxl-n5 {
    margin-left: -4.5rem !important
  }
  .p-xxl-0 {
    padding: 0 !important
  }
  .p-xxl-1 {
    padding: .375rem !important
  }
  .p-xxl-2 {
    padding: .75rem !important
  }
  .p-xxl-3 {
    padding: 1.5rem !important
  }
  .p-xxl-4 {
    padding: 2.25rem !important
  }
  .p-xxl-5 {
    padding: 4.5rem !important
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important
  }
  .px-xxl-1 {
    padding-right: .375rem !important;
    padding-left: .375rem !important
  }
  .px-xxl-2 {
    padding-right: .75rem !important;
    padding-left: .75rem !important
  }
  .px-xxl-3 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important
  }
  .px-xxl-4 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important
  }
  .px-xxl-5 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important
  }
  .py-xxl-1 {
    padding-top: .375rem !important;
    padding-bottom: .375rem !important
  }
  .py-xxl-2 {
    padding-top: .75rem !important;
    padding-bottom: .75rem !important
  }
  .py-xxl-3 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important
  }
  .py-xxl-4 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important
  }
  .py-xxl-5 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important
  }
  .pt-xxl-0 {
    padding-top: 0 !important
  }
  .pt-xxl-1 {
    padding-top: .375rem !important
  }
  .pt-xxl-2 {
    padding-top: .75rem !important
  }
  .pt-xxl-3 {
    padding-top: 1.5rem !important
  }
  .pt-xxl-4 {
    padding-top: 2.25rem !important
  }
  .pt-xxl-5 {
    padding-top: 4.5rem !important
  }
  .pe-xxl-0 {
    padding-right: 0 !important
  }
  .pe-xxl-1 {
    padding-right: .375rem !important
  }
  .pe-xxl-2 {
    padding-right: .75rem !important
  }
  .pe-xxl-3 {
    padding-right: 1.5rem !important
  }
  .pe-xxl-4 {
    padding-right: 2.25rem !important
  }
  .pe-xxl-5 {
    padding-right: 4.5rem !important
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important
  }
  .pb-xxl-1 {
    padding-bottom: .375rem !important
  }
  .pb-xxl-2 {
    padding-bottom: .75rem !important
  }
  .pb-xxl-3 {
    padding-bottom: 1.5rem !important
  }
  .pb-xxl-4 {
    padding-bottom: 2.25rem !important
  }
  .pb-xxl-5 {
    padding-bottom: 4.5rem !important
  }
  .ps-xxl-0 {
    padding-left: 0 !important
  }
  .ps-xxl-1 {
    padding-left: .375rem !important
  }
  .ps-xxl-2 {
    padding-left: .75rem !important
  }
  .ps-xxl-3 {
    padding-left: 1.5rem !important
  }
  .ps-xxl-4 {
    padding-left: 2.25rem !important
  }
  .ps-xxl-5 {
    padding-left: 4.5rem !important
  }
  .gap-xxl-0 {
    gap: 0 !important
  }
  .gap-xxl-1 {
    gap: .375rem !important
  }
  .gap-xxl-2 {
    gap: .75rem !important
  }
  .gap-xxl-3 {
    gap: 1.5rem !important
  }
  .gap-xxl-4 {
    gap: 2.25rem !important
  }
  .gap-xxl-5 {
    gap: 4.5rem !important
  }
  .row-gap-xxl-0 {
    row-gap: 0 !important
  }
  .row-gap-xxl-1 {
    row-gap: .375rem !important
  }
  .row-gap-xxl-2 {
    row-gap: .75rem !important
  }
  .row-gap-xxl-3 {
    row-gap: 1.5rem !important
  }
  .row-gap-xxl-4 {
    row-gap: 2.25rem !important
  }
  .row-gap-xxl-5 {
    row-gap: 4.5rem !important
  }
  .column-gap-xxl-0 {
    -webkit-column-gap: 0 !important;
    -moz-column-gap: 0 !important;
    column-gap: 0 !important
  }
  .column-gap-xxl-1 {
    -webkit-column-gap: .375rem !important;
    -moz-column-gap: .375rem !important;
    column-gap: .375rem !important
  }
  .column-gap-xxl-2 {
    -webkit-column-gap: .75rem !important;
    -moz-column-gap: .75rem !important;
    column-gap: .75rem !important
  }
  .column-gap-xxl-3 {
    -webkit-column-gap: 1.5rem !important;
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important
  }
  .column-gap-xxl-4 {
    -webkit-column-gap: 2.25rem !important;
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important
  }
  .column-gap-xxl-5 {
    -webkit-column-gap: 4.5rem !important;
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important
  }
  .text-xxl-start {
    text-align: left !important
  }
  .text-xxl-end {
    text-align: right !important
  }
  .text-xxl-center {
    text-align: center !important
  }
}

@media (min-width:1200px) {
  .fs-1 {
    font-size: 2.1875rem !important
  }
  .fs-2 {
    font-size: 1.82rem !important
  }
  .fs-3 {
    font-size: 1.46125rem !important
  }
}

@media print {
  .d-print-inline {
    display: inline !important
  }
  .d-print-inline-block {
    display: inline-block !important
  }
  .d-print-block {
    display: block !important
  }
  .d-print-grid {
    display: grid !important
  }
  .d-print-inline-grid {
    display: inline-grid !important
  }
  .d-print-table {
    display: table !important
  }
  .d-print-table-row {
    display: table-row !important
  }
  .d-print-table-cell {
    display: table-cell !important
  }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important
  }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important
  }
  .d-print-none {
    display: none !important
  }
}

.logo-lg img {
  height: var(--ct-logo-lg-height)
}

.logo-sm img {
  height: var(--ct-logo-sm-height)
}

.logo {
  display: block;
  top: 0;
  position: sticky;
  text-align: center;
  line-height: var(--ct-topbar-height);
  padding: 0 calc(var(--ct-leftbar-width-sm) * .5 - var(--ct-logo-sm-height) * .7);
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out
}

.logo span.logo-lg {
  display: block
}

.logo span.logo-sm {
  display: none
}

.logo.logo-light {
  display: none
}

.logo.logo-dark {
  display: block
}

html[data-bs-theme=dark] .logo.logo-light,
html[data-menu-color=brand] .logo.logo-light,
html[data-menu-color=dark] .logo.logo-light {
  display: block
}

html[data-bs-theme=dark] .logo.logo-dark,
html[data-menu-color=brand] .logo.logo-dark,
html[data-menu-color=dark] .logo.logo-dark {
  display: none
}

.help-box {
  border-radius: 5px;
  padding: 20px;
  margin: 65px 25px 25px;
  position: relative;
  background-color: var(--ct-help-box-bg)
}

.help-box .close-btn {
  right: 10px;
  top: 10px;
  position: absolute
}

.wrapper {
  height: 100%;
  width: 100%
}

.content-page {
  position: relative;
  margin-left: var(--ct-leftbar-width);
  min-height: calc(100vh - var(--ct-topbar-height) - 2px);
  padding: 0 .75rem var(--ct-footer-height);
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out
}

.leftside-menu {
  z-index: 1000;
  bottom: 0;
  top: 0;
  position: fixed;
  width: var(--ct-leftbar-width);
  min-width: var(--ct-leftbar-width);
  padding-bottom: calc(var(--ct-footer-height) + .75rem);
  background: var(--ct-menu-bg);
  -webkit-box-shadow: var(--ct-box-shadow);
  box-shadow: var(--ct-box-shadow);
  border-right: var(--ct-theme-card-border-width) solid var(--ct-border-color);
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out
}

.leftbar-user {
  padding: 30px 20px;
  text-align: center;
  display: none
}

.leftbar-user .leftbar-user-name {
  font-weight: 700;
  color: var(--ct-menu-item-color);
  white-space: nowrap;
  display: block
}

html[data-sidenav-user=true] .leftbar-user {
  display: block
}

.side-nav {
  padding-left: 0;
  list-style-type: none
}

.side-nav ul {
  list-style-type: none
}

.side-nav .side-nav-link {
  display: block;
  list-style: none;
  position: relative;
  white-space: nowrap;
  color: var(--ct-menu-item-color);
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
  font-size: var(--ct-menu-item-font-size);
  padding: var(--ct-menu-item-padding-y) var(--ct-menu-item-padding-x)
}

.side-nav .side-nav-link:active,
.side-nav .side-nav-link:focus,
.side-nav .side-nav-link:hover {
  color: var(--ct-menu-item-hover-color);
  text-decoration: none
}

.side-nav .side-nav-link span {
  vertical-align: middle
}

.side-nav .side-nav-link i {
  display: inline-block;
  vertical-align: middle;
  text-align: center;
  font-size: var(--ct-menu-item-icon-size);
  line-height: var(--ct-menu-item-icon-size);
  width: var(--ct-menu-item-icon-width)
}

.side-nav .menu-arrow {
  display: inline-block;
  text-rendering: auto;
  position: absolute;
  top: 50%;
  right: calc(var(--ct-menu-item-padding-x) * 1.5);
  -webkit-transition: -webkit-transform .15s;
  transition: -webkit-transform .15s;
  transition: transform .15s;
  transition: transform .15s, -webkit-transform .15s;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  line-height: var(--ct-menu-item-icon-size);
  font-size: calc(var(--ct-menu-item-font-size) * 1.18)
}

.side-nav .menu-arrow:before {
  content: "\ea6e";
  font-family: remixicon
}

.side-nav .badge {
  margin-top: calc(var(--ct-menu-item-font-size) * .25);
  position: absolute;
  right: 0;
  margin-right: calc(var(--ct-menu-item-padding-x) * 3)
}

.side-nav .side-nav-title {
  letter-spacing: .05em;
  pointer-events: none;
  cursor: default;
  white-space: nowrap;
  text-transform: uppercase;
  color: var(--ct-menu-item-color);
  font-weight: 700;
  font-size: calc(var(--ct-menu-item-font-size) * .74);
  padding: var(--ct-menu-item-padding-y) calc(var(--ct-menu-item-padding-x) * 2)
}

.side-nav .side-nav-item>a[aria-expanded=true]>span.menu-arrow {
  -webkit-transform: translate(-50%, -50%) rotate(90deg);
  transform: translate(-50%, -50%) rotate(90deg)
}

.side-nav .side-nav-item.menuitem-active>a:not(.collapsed)>span.menu-arrow {
  -webkit-transform: translate(-50%, -50%) rotate(90deg);
  transform: translate(-50%, -50%) rotate(90deg)
}

.side-nav .menuitem-active>a {
  color: var(--ct-menu-item-active-color);
  font-weight: 500
}

.side-nav .menuitem-active>a:active,
.side-nav .menuitem-active>a:focus,
.side-nav .menuitem-active>a:hover {
  color: var(--ct-menu-item-active-color)
}

.side-nav .menuitem-active .menuitem-active .active {
  color: var(--ct-menu-item-active-color);
  font-weight: 500
}

.side-nav.bottom {
  bottom: 0;
  width: 100%;
  position: absolute
}

[dir=ltr] .side-nav .side-nav-item .menu-arrow:before {
  content: "\f0141" !important
}

.side-nav-forth-level .side-nav-item,
.side-nav-forth-level li,
.side-nav-second-level .side-nav-item,
.side-nav-second-level li,
.side-nav-third-level .side-nav-item,
.side-nav-third-level li {
  padding: 0
}

.side-nav-forth-level .side-nav-item .side-nav-link,
.side-nav-forth-level .side-nav-item a,
.side-nav-forth-level li .side-nav-link,
.side-nav-forth-level li a,
.side-nav-second-level .side-nav-item .side-nav-link,
.side-nav-second-level .side-nav-item a,
.side-nav-second-level li .side-nav-link,
.side-nav-second-level li a,
.side-nav-third-level .side-nav-item .side-nav-link,
.side-nav-third-level .side-nav-item a,
.side-nav-third-level li .side-nav-link,
.side-nav-third-level li a {
  white-space: nowrap;
  color: var(--ct-menu-item-color);
  display: block;
  position: relative;
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
  font-size: calc(var(--ct-menu-item-font-size) * .95);
  padding: calc(var(--ct-menu-item-padding-y) * .6) calc(var(--ct-menu-item-padding-x) * 1.5)
}

.side-nav-forth-level .side-nav-item .side-nav-link:active,
.side-nav-forth-level .side-nav-item .side-nav-link:focus,
.side-nav-forth-level .side-nav-item .side-nav-link:hover,
.side-nav-forth-level .side-nav-item a:active,
.side-nav-forth-level .side-nav-item a:focus,
.side-nav-forth-level .side-nav-item a:hover,
.side-nav-forth-level li .side-nav-link:active,
.side-nav-forth-level li .side-nav-link:focus,
.side-nav-forth-level li .side-nav-link:hover,
.side-nav-forth-level li a:active,
.side-nav-forth-level li a:focus,
.side-nav-forth-level li a:hover,
.side-nav-second-level .side-nav-item .side-nav-link:active,
.side-nav-second-level .side-nav-item .side-nav-link:focus,
.side-nav-second-level .side-nav-item .side-nav-link:hover,
.side-nav-second-level .side-nav-item a:active,
.side-nav-second-level .side-nav-item a:focus,
.side-nav-second-level .side-nav-item a:hover,
.side-nav-second-level li .side-nav-link:active,
.side-nav-second-level li .side-nav-link:focus,
.side-nav-second-level li .side-nav-link:hover,
.side-nav-second-level li a:active,
.side-nav-second-level li a:focus,
.side-nav-second-level li a:hover,
.side-nav-third-level .side-nav-item .side-nav-link:active,
.side-nav-third-level .side-nav-item .side-nav-link:focus,
.side-nav-third-level .side-nav-item .side-nav-link:hover,
.side-nav-third-level .side-nav-item a:active,
.side-nav-third-level .side-nav-item a:focus,
.side-nav-third-level .side-nav-item a:hover,
.side-nav-third-level li .side-nav-link:active,
.side-nav-third-level li .side-nav-link:focus,
.side-nav-third-level li .side-nav-link:hover,
.side-nav-third-level li a:active,
.side-nav-third-level li a:focus,
.side-nav-third-level li a:hover {
  color: var(--ct-menu-item-hover-color)
}

.side-nav-forth-level .side-nav-item.active>a,
.side-nav-forth-level li.active>a,
.side-nav-second-level .side-nav-item.active>a,
.side-nav-second-level li.active>a,
.side-nav-third-level .side-nav-item.active>a,
.side-nav-third-level li.active>a {
  color: var(--ct-menu-item-active-color)
}

.side-nav-forth-level .side-nav-item.active>a:active,
.side-nav-forth-level .side-nav-item.active>a:focus,
.side-nav-forth-level .side-nav-item.active>a:hover,
.side-nav-forth-level li.active>a:active,
.side-nav-forth-level li.active>a:focus,
.side-nav-forth-level li.active>a:hover,
.side-nav-second-level .side-nav-item.active>a:active,
.side-nav-second-level .side-nav-item.active>a:focus,
.side-nav-second-level .side-nav-item.active>a:hover,
.side-nav-second-level li.active>a:active,
.side-nav-second-level li.active>a:focus,
.side-nav-second-level li.active>a:hover,
.side-nav-third-level .side-nav-item.active>a:active,
.side-nav-third-level .side-nav-item.active>a:focus,
.side-nav-third-level .side-nav-item.active>a:hover,
.side-nav-third-level li.active>a:active,
.side-nav-third-level li.active>a:focus,
.side-nav-third-level li.active>a:hover {
  color: var(--ct-menu-item-active-color)
}

.side-nav-second-level {
  margin-top: calc(var(--ct-menu-item-padding-y) * -.5);
  padding-left: var(--ct-menu-item-icon-width)
}

.side-nav-forth-level,
.side-nav-third-level {
  padding-left: calc(var(--ct-menu-item-padding-x) * 2)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .navbar-custom {
  z-index: 1005;
  margin-left: var(--ct-leftbar-width-sm)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu {
  position: absolute;
  width: var(--ct-leftbar-width-sm);
  min-width: var(--ct-leftbar-width-sm)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .simplebar-content-wrapper,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .simplebar-mask {
  overflow: visible !important
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .simplebar-scrollbar {
  display: none !important
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .simplebar-offset {
  bottom: 0 !important
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .logo {
  z-index: 1;
  background: var(--ct-menu-bg)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .logo span.logo-lg {
  display: none
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .logo span.logo-sm {
  display: block
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing {
  display: none;
  height: inherit !important;
  -webkit-transition: none !important;
  transition: none !important
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-forth-level,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-second-level,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-third-level,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-forth-level,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-second-level,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-third-level {
  display: none !important;
  padding: 0;
  margin-top: 0
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-forth-level li .side-nav-link::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-forth-level li a::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-second-level li .side-nav-link::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-second-level li a::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-third-level li .side-nav-link::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-third-level li a::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-forth-level li .side-nav-link::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-forth-level li a::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-second-level li .side-nav-link::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-second-level li a::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-third-level li .side-nav-link::before,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-third-level li a::before {
  display: none
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-forth-level .menu-arrow,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-second-level .menu-arrow,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapse .side-nav-third-level .menu-arrow,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-forth-level .menu-arrow,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-second-level .menu-arrow,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .collapsing .side-nav-third-level .menu-arrow {
  right: var(--ct-menu-item-padding-x);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item {
  position: relative;
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item .side-nav-link {
  -webkit-transition: none;
  transition: none;
  padding: calc(var(--ct-menu-item-padding-y) + 4px) var(--ct-menu-item-padding-x)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item .side-nav-link i {
  min-width: calc(var(--ct-leftbar-width-sm) - var(--ct-menu-item-padding-x) * 2);
  font-size: 1.25rem
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item .side-nav-link:active,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item .side-nav-link:focus,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item .side-nav-link:hover {
  color: var(--ct-menu-item-hover-color)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item .side-nav-link span {
  visibility: hidden
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item .side-nav-link .menu-arrow {
  -webkit-transform: translate(-50%, -50%) rotate(90deg);
  transform: translate(-50%, -50%) rotate(90deg);
  padding-left: 0 !important
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover .side-nav-link {
  position: relative;
  color: #fff;
  background: var(--ct-menu-condensed-link-bg);
  width: var(--ct-leftbar-width)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover .side-nav-link span {
  visibility: visible
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover .side-nav-link span:not(.badge) {
  margin-left: var(--ct-menu-item-padding-x)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapse,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapsing {
  display: block !important;
  -webkit-transition: none !important;
  transition: none !important
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapse>ul,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapsing>ul {
  display: block !important;
  left: var(--ct-leftbar-width-sm);
  position: absolute;
  background: var(--ct-menu-bg);
  -webkit-box-shadow: 0 0 45px 0 rgba(var(--ct-body-color-rgb), .2);
  box-shadow: 0 0 45px 0 rgba(var(--ct-body-color-rgb), .2);
  width: calc(var(--ct-leftbar-width) - var(--ct-leftbar-width-sm))
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapse>ul a,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapsing>ul a {
  -webkit-box-shadow: none;
  box-shadow: none;
  position: relative;
  width: calc(var(--ct-leftbar-width) - var(--ct-leftbar-width-sm));
  padding: calc(var(--ct-menu-item-padding-y) * .9) calc(var(--ct-menu-item-padding-x) * 2)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapse>ul a:hover,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapsing>ul a:hover {
  color: var(--ct-menu-item-hover-color)
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapse>ul li:hover>.collapse,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapse>ul li:hover>.collapsing,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapsing>ul li:hover>.collapse,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapsing>ul li:hover>.collapsing {
  display: block !important;
  height: auto !important;
  -webkit-transition: none !important;
  transition: none !important
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapse>ul li:hover>.collapse>ul,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapse>ul li:hover>.collapsing>ul,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapsing>ul li:hover>.collapse>ul,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item:hover>.collapsing>ul li:hover>.collapsing>ul {
  display: block !important;
  position: absolute !important;
  top: 0;
  left: calc(var(--ct-leftbar-width) - var(--ct-leftbar-width-sm));
  width: calc(var(--ct-leftbar-width) - var(--ct-leftbar-width-sm))
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .help-box,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftbar-user,
html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .side-nav-title {
  display: none
}

html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .content-page {
  margin-left: var(--ct-leftbar-width-sm);
  min-height: var(--ct-leftbar-condensed-height)
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .navbar-custom {
  margin-left: var(--ct-leftbar-width-md)
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu {
  width: var(--ct-leftbar-width-md);
  min-width: var(--ct-leftbar-width-md)
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-title {
  text-align: center;
  padding: var(--ct-menu-item-padding-y) calc(var(--ct-menu-item-padding-x))
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-item {
  text-align: center;
  padding: var(--ct-menu-item-padding-y) calc(var(--ct-menu-item-padding-x) * 1.5)
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-link {
  padding: var(--ct-menu-item-padding-y) var(--ct-menu-item-padding-x);
  text-align: center
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-link i {
  display: block;
  text-align: center;
  margin: 0 0 calc(var(--ct-menu-item-padding-y) * 1 / 3);
  width: auto
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-link span {
  margin-left: 0
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-link .badge {
  display: none
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-forth-level,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-second-level,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-third-level {
  padding: 0
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-forth-level .menu-arrow,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-second-level .menu-arrow,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-third-level .menu-arrow {
  display: inline-block;
  right: var(--ct-menu-item-padding-x)
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-forth-level li .side-nav-link,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-forth-level li a,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-second-level li .side-nav-link,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-second-level li a,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-third-level li .side-nav-link,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .leftside-menu .side-nav .side-nav-third-level li a {
  padding: calc(var(--ct-menu-item-padding-y) * .8) calc(var(--ct-menu-item-padding-x));
  text-align: center
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .help-box,
html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .menu-arrow {
  display: none
}

html[data-sidenav-size=compact]:not([data-layout=topnav]) .wrapper .content-page {
  margin-left: var(--ct-leftbar-width-md)
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .content-page {
  margin-left: var(--ct-leftbar-width-sm)
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .navbar-custom {
  margin-left: var(--ct-leftbar-width-sm)
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .navbar-custom .button-toggle-menu {
  display: none
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .navbar-custom .app-search {
  padding-left: 10px
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) {
  width: var(--ct-leftbar-width-sm);
  min-width: var(--ct-leftbar-width-sm)
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .simplebar-scrollbar:before {
  background: 0 0
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .logo .logo-sm {
  display: block;
  text-align: center
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .logo .logo-lg {
  display: none
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .side-nav-item .side-nav-link span {
  visibility: hidden
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .side-nav-item .side-nav-link i {
  min-width: calc(var(--ct-leftbar-width-sm) - var(--ct-menu-item-padding-x) * 2);
  font-size: 1.25rem
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .leftbar-user,
html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .side-nav-title {
  display: none
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .button-sm-hover,
html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .help-box {
  visibility: hidden
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .side-nav-forth-level,
html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .side-nav-second-level,
html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:not(:hover) .side-nav-third-level {
  height: 0;
  opacity: 0
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu .simplebar-horizontal .simplebar-scrollbar:before {
  background: 0 0
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu .logo {
  text-align: left
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu:hover {
  z-index: 1045
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu .button-sm-hover {
  display: block
}

html[data-sidenav-size=sm-hover]:not([data-layout=topnav]) .wrapper .leftside-menu .help-box {
  display: none
}

.button-sm-hover {
  cursor: pointer;
  display: none;
  right: calc(var(--ct-leftbar-width-sm) * .5 - var(--ct-logo-sm-height) * .7);
  top: 0;
  position: absolute;
  font-size: var(--ct-menu-item-icon-size);
  line-height: var(--ct-topbar-height);
  z-index: 1;
  color: var(--ct-menu-item-color)
}

.button-sm-hover:active,
.button-sm-hover:focus,
.button-sm-hover:hover {
  color: var(--ct-menu-item-hover-color)
}

html[data-sidenav-size=sm-hover-active]:not([data-layout=topnav]) .button-toggle-menu {
  display: none
}

html[data-sidenav-size=sm-hover-active]:not([data-layout=topnav]) .app-search {
  padding-left: 10px
}

html[data-sidenav-size=sm-hover-active]:not([data-layout=topnav]) .leftside-menu .logo {
  text-align: left
}

html[data-sidenav-size=sm-hover-active]:not([data-layout=topnav]) .leftside-menu .button-sm-hover {
  display: block
}

html[data-sidenav-size=sm-hover-active]:not([data-layout=topnav]) .leftside-menu .button-sm-hover .ri-checkbox-blank-circle-line:before {
  content: "\f05a"
}

.button-close-fullsidebar {
  cursor: pointer;
  display: none;
  right: calc(var(--ct-leftbar-width-sm) * .5 - var(--ct-logo-sm-height) * .7);
  top: 0;
  position: absolute;
  font-size: var(--ct-menu-item-icon-size);
  line-height: var(--ct-topbar-height);
  z-index: 1;
  color: var(--ct-menu-item-color)
}

.button-close-fullsidebar:active,
.button-close-fullsidebar:focus,
.button-close-fullsidebar:hover {
  color: var(--ct-menu-item-hover-color)
}

html[data-sidenav-size=full]:not([data-layout=topnav]) .navbar-custom {
  margin-left: 0
}

html[data-sidenav-size=full]:not([data-layout=topnav]) .navbar-custom .logo-topbar {
  display: inline-block
}

html[data-sidenav-size=full]:not([data-layout=topnav]) .button-close-fullsidebar {
  display: block
}

html[data-sidenav-size=full]:not([data-layout=topnav]) .leftside-menu {
  margin-left: calc(var(--ct-leftbar-width) * -1);
  border-color: transparent;
  opacity: 0
}

html[data-sidenav-size=full]:not([data-layout=topnav]) .leftside-menu .logo {
  text-align: left
}

html[data-sidenav-size=full]:not([data-layout=topnav]) .content-page {
  margin-left: 0
}

html[data-sidenav-size=full]:not([data-layout=topnav]).sidebar-enable .leftside-menu {
  opacity: 1;
  z-index: 1055;
  margin-left: 0
}

html[data-sidenav-size=fullscreen]:not([data-layout=topnav]) .navbar-custom {
  margin-left: 0
}

html[data-sidenav-size=fullscreen]:not([data-layout=topnav]) .leftside-menu {
  margin-left: calc(var(--ct-leftbar-width) * -1);
  opacity: 0
}

html[data-sidenav-size=fullscreen]:not([data-layout=topnav]) .content-page {
  margin-left: 0
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .wrapper {
  max-width: 95%;
  margin: 0 auto
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .wrapper .navbar-custom {
  z-index: 1005;
  margin: 0 -2.65%
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .wrapper .navbar-custom .topbar {
  max-width: 95%
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .wrapper .leftside-menu {
  bottom: .75rem;
  top: calc(var(--ct-topbar-height) + 1.5rem * .5);
  border-radius: .5rem;
  border: var(--ct-theme-card-border-width) solid var(--ct-border-color);
  padding-bottom: 0
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .wrapper .leftside-menu .button-sm-hover {
  top: var(--ct-menu-item-padding-y);
  line-height: 1
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .wrapper .footer {
  right: .75rem;
  left: .75rem;
  bottom: .75rem;
  border-radius: .5rem;
  border: 1px solid var(--ct-border-color)
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .logo {
  visibility: hidden;
  height: 0
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .logo-topbar {
  display: block
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .leftbar-user {
  background: url(../images/waves.png) no-repeat
}

html[data-layout-mode=detached]:not([data-layout=topnav])[data-sidenav-size=full] .wrapper .leftside-menu {
  padding-bottom: calc(var(--ct-footer-height) + .75rem);
  top: .75rem;
  left: .75rem
}

html[data-layout-mode=detached]:not([data-layout=topnav])[data-sidenav-size=full] .wrapper .leftside-menu .logo {
  top: .75rem;
  visibility: visible;
  height: auto
}

html[data-layout-mode=detached]:not([data-layout=topnav])[data-sidenav-size=full] .wrapper .leftside-menu .logo span.logo-lg {
  display: block
}

@media (min-width:1400px) {
  html[data-layout-mode=boxed] body {
    background-color: var(--ct-tertiary-bg)
  }
  html[data-layout-mode=boxed] .wrapper {
    margin: 0 auto;
    -webkit-box-shadow: var(--ct-box-shadow);
    box-shadow: var(--ct-box-shadow);
    max-width: 1300px;
    background-color: var(--ct-body-bg)
  }
}

@media (min-width:992px) {
  html[data-layout-position=scrollable] .wrapper {
    display: block
  }
  html[data-layout-position=scrollable] .wrapper .leftside-menu {
    position: absolute;
    padding-top: 0 !important
  }
  html[data-layout-position=scrollable] .wrapper .leftside-menu .logo {
    position: relative
  }
  html[data-layout-position=scrollable] .wrapper .leftside-menu #leftside-menu-container {
    height: calc(100% - var(--ct-topbar-height)) !important
  }
  html[data-layout-position=scrollable] .navbar-custom {
    position: static !important
  }
  html[data-layout-position=scrollable][data-layout=topnav] .topnav {
    position: static;
  }
}

@media (max-width:767.98px) {
  html[data-layout-mode=detached]:not([data-layout=topnav]) .wrapper {
    max-width: 100% !important
  }
  html[data-layout-mode=detached]:not([data-layout=topnav]) .wrapper .navbar-custom {
    margin: 0;
    padding: 0
  }
}

.navbar-custom {
  background: var(--ct-topbar-bg);
  -webkit-box-shadow: var(--ct-box-shadow);
  box-shadow: var(--ct-box-shadow);
  min-height: var(--ct-topbar-height);
  margin-left: var(--ct-leftbar-width);
  position: sticky;
  top: 0;
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
  z-index: 1000;
  border-bottom: var(--ct-theme-card-border-width) solid var(--ct-border-color)
}

.navbar-custom .topbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin: 0 auto
}

.navbar-custom .topbar .app-search form {
  height: var(--ct-topbar-height);

}

.navbar-custom .topbar .app-search form .form-control {
  color: var(--ct-topbar-item-color);
  background-color: var(--ct-topbar-search-bg)
}

.navbar-custom .topbar .app-search form span.search-icon {
  color: var(--ct-topbar-item-color)
}

.navbar-custom .topbar-menu {
  position: relative;
  list-style-type: none;
  margin-bottom: 0
}

.navbar-custom .topbar-menu li {
  max-height: var(--ct-topbar-height)
}

.navbar-custom .topbar-menu li .nav-link.show {
  color: var(--ct-topbar-item-hover-color)
}

.navbar-custom .topbar-menu .nav-link {
  padding: 0;
  position: relative;
  color: var(--ct-topbar-item-color);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  height: var(--ct-topbar-height);
  cursor: pointer
}

.navbar-custom .topbar-menu .nav-link:hover {
  color: var(--ct-topbar-item-hover-color)
}

.logo-topbar {
  float: left;
  display: none;
  line-height: var(--ct-topbar-height);
  padding: 0 .75rem
}

.logo-topbar .logo-sm {
  display: none
}

.logo-topbar .logo-light {
  display: none
}

.logo-topbar .logo-dark {
  display: block
}

html[data-bs-theme=dark] .logo-topbar .logo-light,
html[data-topbar-color=brand] .logo-topbar .logo-light,
html[data-topbar-color=dark] .logo-topbar .logo-light {
  display: block
}

html[data-bs-theme=dark] .logo-topbar .logo-dark,
html[data-topbar-color=brand] .logo-topbar .logo-dark,
html[data-topbar-color=dark] .logo-topbar .logo-dark {
  display: none
}

html[data-bs-theme=dark] #light-dark-mode .ri-moon-line::before {
  content: "\f1bf"
}

.button-toggle-menu {
  border: none;
  color: var(--ct-topbar-item-color);
  width: 60px;
  background-color: transparent;
  font-size: 24px;
  cursor: pointer;
  z-index: 1;
  position: relative
}

.app-search {
  position: static;
  overflow-y: hidden
}

.app-search form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center
}

.app-search form .form-control {
  border: none;
  height: calc(1.5em + .9rem + calc(var(--ct-border-width) * 2));
  padding-left: 35px;
  padding-right: 20px;
  background-color: var(--ct-light);
  -webkit-box-shadow: none;
  box-shadow: none;
  width:100%;
}

.app-search form span.search-icon {
  position: absolute;
  z-index: 4;
  font-size: 16px;
  line-height: 38px;
  left: 10px;
  top: 0;
  z-index: 5;
  color: var(--ct-secondary)
}

.app-search form .input-group-text {
  margin-left: 0;
  z-index: 4
}

.app-search form .dropdown-menu {
  z-index: 1060
}

.notification-list {
  margin-left: 0
}

.notification-list .noti-title {
  background-color: transparent;
  padding: 15px 20px
}

.notification-list .noti-icon-badge {
  display: inline-block;
  position: absolute;
  top: 22px;
  right: 1px;
  border-radius: 50%;
  height: 7px;
  width: 7px;
  background-color: #f15776
}

.notification-list .notify-item {
  padding: 10px 20px
}

.notification-list .notify-item.unread-noti {
  background-color: var(--ct-tertiary-bg)
}

.notification-list .notify-item.read-noti {
  background-color: transparent;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out
}

.notification-list .notify-item.read-noti:hover {
  background-color: var(--ct-tertiary-bg)
}

.notification-list .notify-item .card-body {
  padding: 14px
}

.notification-list .notify-item .card-body .noti-close-btn {
  position: absolute;
  top: 3px;
  right: 15px
}

.notification-list .notify-item .card-body .noti-item-title {
  margin: 0 0 2px
}

.notification-list .notify-item .card-body .noti-item-subtitle,
.notification-list .notify-item .card-body .noti-item-title {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap
}

.notification-list .notify-item .notify-icon {
  float: left;
  height: 36px;
  width: 36px;
  line-height: 36px;
  text-align: center;
  border-radius: 50%;
  color: #fff
}

.notification-list .notify-item .notify-details {
  margin-bottom: 0;
  overflow: hidden;
  margin-left: 45px
}

.notification-list .notify-item .notify-details b {
  font-weight: 500
}

.notification-list .notify-item .notify-details .small,
.notification-list .notify-item .notify-details small {
  display: block
}

.profile-dropdown {
  min-width: 170px
}

.nav-user {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  gap: 10px;
  border-width: 0 1px;
  border-style: solid;
  border-color: var(--ct-topbar-user-border);
  background-color: var(--ct-topbar-user-bg);
  min-height: var(--ct-topbar-height);
  -webkit-transition: none;
  transition: none
}

.fullscreen-enable .ri-fullscreen-line::before {
  content: "\ed9a"
}

@media (max-width:375px) {
  .navbar-custom .button-toggle-menu {
    width: auto
  }
  .logo-topbar {
    display: none !important
  }
}

@media (max-width:575.98px) {
  .navbar-custom .topbar-menu {
    position: initial
  }
  .navbar-custom .dropdown {
    position: static
  }
  .navbar-custom .dropdown .dropdown-menu {
    left: 10px !important;
    right: 10px !important
  }
}

@media (max-width:767.98px) {
  .navbar-custom {
    padding: 0 .75rem
  }
  .logo-topbar {
    display: block
  }
  .logo-topbar span.logo-lg {
    display: none;
  }
  .logo-topbar span.logo-sm {
    display: block
  }
}

#theme-settings-offcanvas {
  width: 260px
}

.page-title-box .page-title {
  font-size: 18px;
  margin: 0;
  line-height: 75px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis
}

.page-title-box .page-title-right {
  float: right;
  margin-top: 20px
}

.page-title-box .breadcrumb {
  padding-top: 8px
}

.page-title-box-sm .page-title {
  line-height: 1 !important;
  margin-bottom: 25px
}

.page-title-box-sm .page-title-right {
  float: right;
  margin-top: 0
}

.page-title-box-sm .breadcrumb {
  padding-top: 0;
  margin-top: -3px !important
}

.text-title {
  color: var(--ct-secondary-color)
}

.text-title:hover {
  color: var(--ct-tertiary-color)
}

@media (max-width:767.98px) {
  .page-title-box .page-title {
    display: block;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    line-height: 70px
  }
  .page-title-box .breadcrumb {
    display: none
  }
  .page-title-box .page-title-right {
    display: none
  }
}

@media (max-width:419px) {
  .page-title-box .breadcrumb {
    display: none
  }
}

.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  height: var(--ct-footer-height);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0 1.5rem;
  color: var(--ct-gray-600);
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
  border-top: 1px solid var(--ct-border-color)
}

.footer .footer-links a {
  color: var(--ct-gray-600);
  margin-left: 1.5rem;
  -webkit-transition: all .4s;
  transition: all .4s
}

.footer .footer-links a:hover {
  color: var(--ct-gray-600)
}

.footer .footer-links a:first-of-type {
  margin-left: 0
}

.footer-alt {
  border: none;
  text-align: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center
}

html[data-layout-mode=detached]:not([data-layout=topnav]) .footer .container-fluid,
html[data-layout-mode=detached]:not([data-layout=topnav]) .footer .container-lg,
html[data-layout-mode=detached]:not([data-layout=topnav]) .footer .container-md,
html[data-layout-mode=detached]:not([data-layout=topnav]) .footer .container-sm,
html[data-layout-mode=detached]:not([data-layout=topnav]) .footer .container-xl,
html[data-layout-mode=detached]:not([data-layout=topnav]) .footer .container-xxl {
  max-width: 100%;
  padding: 0
}

@media (max-width:767.98px) {
  .footer {
    text-align: center
  }
}

html[data-layout=topnav] .navbar-custom {
  margin: 0;
  padding: 0;
  z-index: 1005;
  -webkit-box-shadow: none;
  box-shadow: none
}

html[data-layout=topnav] .navbar-custom .logo-topbar {
  display: block
}

html[data-layout=topnav] .navbar-custom .button-toggle-menu {
  display: none
}

html[data-layout=topnav] .content-page {
  margin-left: 0;
  padding: 0 0 var(--ct-topbar-height)
}

html[data-layout=topnav] .container-fluid,
html[data-layout=topnav] .container-lg,
html[data-layout=topnav] .container-md,
html[data-layout=topnav] .container-sm,
html[data-layout=topnav] .container-xl,
html[data-layout=topnav] .container-xxl {
  padding-right: 1.5rem;
  padding-left: 1.5rem
}

html[data-layout=topnav] .topnav {
  width: 100%;
  z-index: 1000;
  position: sticky;
  top: var(--ct-topbar-height);
  background: var(--ct-menu-bg);
  -webkit-box-shadow: var(--ct-box-shadow);
  box-shadow: var(--ct-box-shadow);
  border-top: 1px solid var(--ct-topbar-user-border)
}

html[data-layout=topnav] .topnav .navbar {
  margin: 0;
  padding: 0
}

html[data-layout=topnav] .topnav .navbar-nav .nav-link {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  position: relative;
  font-size: var(--ct-menu-item-font-size);
  padding: 5px 10px 5px 10px;
}

html[data-layout=topnav] .topnav .navbar-nav .nav-link i {
  font-size: var(--ct-menu-item-icon-size);
  margin-right: calc(var(--ct-menu-item-icon-size) * .5)
}

html[data-layout=topnav] .topnav .navbar-nav .dropdown .dropdown-menu {
  font-size: calc(.875rem - 0)
}

html[data-layout=topnav] .topnav .navbar-nav .dropdown .dropdown-menu .dropdown-item {
  padding: calc(var(--ct-menu-item-padding-y) * .75) calc(var(--ct-menu-item-padding-x) * 2.4)
}

html[data-layout=topnav] .topnav .nav-item .nav-link,
html[data-layout=topnav] .topnav .nav-item>a {
  color: var(--ct-menu-item-color)
}

html[data-layout=topnav] .topnav .nav-item .nav-link:hover,
html[data-layout=topnav] .topnav .nav-item>a:hover {
  color: var(--ct-menu-item-hover-color)
}

html[data-layout=topnav] .topnav .nav-item.active>a {
  color: var(--ct-menu-item-active-color)
}

html[data-layout=topnav] .arrow-down {
  display: inline-block;
  display: inline-block;
  text-rendering: auto;
  margin-left: calc(var(--ct-menu-item-padding-x) * 1);
  font-size: calc(var(--ct-menu-item-font-size) * 1.18)
}

html[data-layout=topnav] .arrow-down:before {
  content: "\ea4e";
  font-family: remixicon
}

html[data-layout=topnav] #layout-detached,
html[data-layout=topnav] #sidebar-size,
html[data-layout=topnav] #sidebar-user {
  display: none
}

html[data-layout=topnav] #topnav-color {
  display: block
}

#topnav-color {
  display: none
}

.navbar-toggle {
  display: none;
  position: relative;
  cursor: pointer;
  float: left;
  padding: 0;
  background-color: transparent;
  color: var(--ct-topbar-item-color);
  border: none
}

.navbar-toggle .lines {
  width: 25px;
  display: block;
  position: relative;
  height: 16px;
  -webkit-transition: all .5s ease;
  transition: all .5s ease
}

.navbar-toggle span {
  height: 2px;
  width: 100%;
  background-color: var(--ct-topbar-item-color);
  display: block;
  margin-bottom: 5px;
  -webkit-transition: -webkit-transform .5s ease;
  transition: -webkit-transform .5s ease;
  transition: transform .5s ease;
  transition: transform .5s ease, -webkit-transform .5s ease
}

.navbar-toggle.open span {
  position: absolute
}

.navbar-toggle.open span:first-child {
  top: 7px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg)
}

.navbar-toggle.open span:nth-child(2) {
  visibility: hidden
}

.navbar-toggle.open span:last-child {
  width: 100%;
  top: 7px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg)
}

@media (min-width:992px) {
  html[data-layout=topnav] .container-fluid,
  html[data-layout=topnav] .container-lg,
  html[data-layout=topnav] .container-md,
  html[data-layout=topnav] .container-sm,
  html[data-layout=topnav] .container-xl,
  html[data-layout=topnav] .container-xxl {
    max-width: 95%
  }
  html[data-layout=topnav][data-layout-mode=boxed] .container-fluid,
  html[data-layout=topnav][data-layout-mode=boxed] .container-lg,
  html[data-layout=topnav][data-layout-mode=boxed] .container-md,
  html[data-layout=topnav][data-layout-mode=boxed] .container-sm,
  html[data-layout=topnav][data-layout-mode=boxed] .container-xl,
  html[data-layout=topnav][data-layout-mode=boxed] .container-xxl {
    max-width: 97%
  }
  .topnav .navbar-nav .nav-item:first-of-type .nav-link {
    padding-left: 0
  }
  .topnav .dropdown .dropdown-menu {
    margin-top: 0;
    border-radius: 0 0 .375rem .375rem;
    min-width: calc(var(--ct-dropdown-min-width) + var(--ct-menu-item-font-size) * 1.5);
    font-size: calc(.875rem - 0)
  }
  .topnav .dropdown .dropdown-menu .arrow-down {
    font-size: var(--ct-menu-item-font-size);
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg);
    position: absolute;
    right: var(--ct-menu-item-padding-x)
  }
  .topnav .dropdown .dropdown-menu .dropdown .dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    display: none
  }
  .topnav .dropdown:hover>.dropdown-menu {
    display: block
  }
  .topnav .dropdown:hover>.dropdown-menu>.dropdown:hover>.dropdown-menu {
    display: block
  }
  .topnav .dropdown.active>a.dropdown-item {
    color: var(--ct-tertiary-color);
    background-color: var(--ct-tertiary-bg)
  }
}

@media (max-width:991.98px) {
  html[data-layout=topnav] .topnav {
    max-height: 360px;
    overflow-y: auto
  }
  html[data-layout=topnav] .topnav .navbar-nav .nav-link {
    padding: calc(var(--ct-menu-item-padding-y) * .8) calc(var(--ct-menu-item-padding-x) * 2)
  }
  html[data-layout=topnav] .topnav .dropdown .dropdown-menu {
    background-color: transparent;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding-left: calc(var(--ct-menu-item-padding-x) * 3);
    margin-top: calc(var(--ct-menu-item-padding-y) * -.75)
  }
  html[data-layout=topnav] .topnav .dropdown .dropdown-menu .dropdown-menu {
    margin-top: calc(var(--ct-menu-item-padding-y) * -.5);
    padding-left: calc(var(--ct-menu-item-padding-x) * 1.5)
  }
  html[data-layout=topnav] .topnav .dropdown .dropdown-item {
    position: relative;
    background-color: transparent
  }
  html[data-layout=topnav] .topnav .dropdown .dropdown-item {
    color: var(--ct-menu-item-color)
  }
  html[data-layout=topnav] .topnav .dropdown .dropdown-item.hover {
    color: var(--ct-menu-item-hover-color)
  }
  html[data-layout=topnav] .topnav .dropdown .dropdown-item.active,
  html[data-layout=topnav] .topnav .dropdown .dropdown-item:active {
    color: var(--ct-menu-item-active-color)
  }
  html[data-layout=topnav] .topnav .dropdown.active>a.dropdown-item {
    color: var(--ct-menu-item-active-color)
  }
  html[data-layout=topnav] .topnav .arrow-down {
    font-size: var(--ct-menu-item-font-size);
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg);
    position: absolute;
    right: var(--ct-menu-item-padding-x)
  }
  html[data-layout=topnav] .navbar-toggle {
    display: block
  }
}

@media (min-width:1400px) {
  html[data-layout=topnav] .container-fluid,
  html[data-layout=topnav] .container-lg,
  html[data-layout=topnav] .container-md,
  html[data-layout=topnav] .container-sm,
  html[data-layout=topnav] .container-xl,
  html[data-layout=topnav] .container-xxl {
    max-width: 85%
  }
}

[data-bs-theme=dark] {
  --ct-light: #464f5b;
  --ct-light-rgb: 70, 79, 91;
  --ct-dark: #637385;
  --ct-dark-rgb: 99, 115, 133
}

.accordion-header {
  margin: 0
}

.accordion>.card>.card-header {
  border-radius: 0;
  margin-bottom: -1px
}

.avatar-xxs {
  height: 1.5rem;
  width: 1.5rem
}

.avatar-xs {
  height: 2rem;
  width: 2rem
}

.avatar-sm {
  height: 3rem;
  width: 3rem
}

.avatar-md {
  height: 4.5rem;
  width: 4.5rem
}

.avatar-lg {
  height: 6rem;
  width: 6rem
}

.avatar-xl {
  height: 7.5rem;
  width: 7.5rem
}

.avatar-title {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  background-color: var(--ct-primary);
  color: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-weight: 600;
  height: 100%;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 100%
}

.avatar-group {
  padding-left: 12px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap
}

.avatar-group .avatar-group-item {
  margin-left: -12px;
  border-radius: 50%;
  -webkit-transition: all .2s;
  transition: all .2s
}

.avatar-group .avatar-group-item:hover {
  position: relative;
  -webkit-transform: translateY(-2px);
  transform: translateY(-2px);
  z-index: 1
}

.breadcrumb-item+.breadcrumb-item::before {
  font-family: remixicon;
  font-size: 16px;
  line-height: 1.3
}

.btn-primary {
  --ct-btn-bg: var(--ct-primary);
  --ct-btn-border-color: var(--ct-primary);
  --ct-btn-hover-bg: var(--ct-primary-text-emphasis);
  --ct-btn-hover-border-color: var(--ct-primary-text-emphasis);
  --ct-btn-focus-shadow-rgb: var(--ct-primary-rgb);
  --ct-btn-active-bg: var(--ct-primary-text-emphasis);
  --ct-btn-active-border-color: var(--ct-primary-text-emphasis)
}

.btn-outline-primary {
  --ct-btn-color: var(--ct-primary);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: var(--ct-primary);
  --ct-btn-hover-bg: var(--ct-primary);
  --ct-btn-hover-border-color: var(--ct-primary);
  --ct-btn-focus-shadow-rgb: var(--ct-primary-rgb);
  --ct-btn-active-bg: var(--ct-primary);
  --ct-btn-active-border-color: var(--ct-primary)
}

.btn-soft-primary {
  --ct-btn-color: var(--ct-primary);
  --ct-btn-bg: var(--ct-primary-bg-subtle);
  --ct-btn-border-color: transparent;
  --ct-btn-hover-bg: var(--ct-primary);
  --ct-btn-hover-border-color: var(--ct-primary);
  --ct-btn-active-bg: var(--ct-primary);
  --ct-btn-active-border-color: var(--ct-primary);
  --ct-btn-disabled-color: var(--ct-primary);
  --ct-btn-disabled-bg: var(--ct-primary);
  --ct-btn-disabled-border-color: var(--ct-primary);
  --ct-btn-focus-shadow-rgb: 0 0 0 $btn-focus-width rgba(var(--ct-primary)-rgb, 0.5)
}

.btn-secondary {
  --ct-btn-bg: var(--ct-secondary);
  --ct-btn-border-color: var(--ct-secondary);
  --ct-btn-hover-bg: var(--ct-secondary-text-emphasis);
  --ct-btn-hover-border-color: var(--ct-secondary-text-emphasis);
  --ct-btn-focus-shadow-rgb: var(--ct-secondary-rgb);
  --ct-btn-active-bg: var(--ct-secondary-text-emphasis);
  --ct-btn-active-border-color: var(--ct-secondary-text-emphasis)
}

.btn-outline-secondary {
  --ct-btn-color: var(--ct-secondary);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: var(--ct-secondary);
  --ct-btn-hover-bg: var(--ct-secondary);
  --ct-btn-hover-border-color: var(--ct-secondary);
  --ct-btn-focus-shadow-rgb: var(--ct-secondary-rgb);
  --ct-btn-active-bg: var(--ct-secondary);
  --ct-btn-active-border-color: var(--ct-secondary)
}

.btn-soft-secondary {
  --ct-btn-color: var(--ct-secondary);
  --ct-btn-bg: var(--ct-secondary-bg-subtle);
  --ct-btn-border-color: transparent;
  --ct-btn-hover-bg: var(--ct-secondary);
  --ct-btn-hover-border-color: var(--ct-secondary);
  --ct-btn-active-bg: var(--ct-secondary);
  --ct-btn-active-border-color: var(--ct-secondary);
  --ct-btn-disabled-color: var(--ct-secondary);
  --ct-btn-disabled-bg: var(--ct-secondary);
  --ct-btn-disabled-border-color: var(--ct-secondary);
  --ct-btn-focus-shadow-rgb: 0 0 0 $btn-focus-width rgba(var(--ct-secondary)-rgb, 0.5)
}

.btn-success {
  --ct-btn-bg: var(--ct-success);
  --ct-btn-border-color: var(--ct-success);
  --ct-btn-hover-bg: var(--ct-success-text-emphasis);
  --ct-btn-hover-border-color: var(--ct-success-text-emphasis);
  --ct-btn-focus-shadow-rgb: var(--ct-success-rgb);
  --ct-btn-active-bg: var(--ct-success-text-emphasis);
  --ct-btn-active-border-color: var(--ct-success-text-emphasis)
}

.btn-outline-success {
  --ct-btn-color: var(--ct-success);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: var(--ct-success);
  --ct-btn-hover-bg: var(--ct-success);
  --ct-btn-hover-border-color: var(--ct-success);
  --ct-btn-focus-shadow-rgb: var(--ct-success-rgb);
  --ct-btn-active-bg: var(--ct-success);
  --ct-btn-active-border-color: var(--ct-success)
}

.btn-soft-success {
  --ct-btn-color: var(--ct-success);
  --ct-btn-bg: var(--ct-success-bg-subtle);
  --ct-btn-border-color: transparent;
  --ct-btn-hover-bg: var(--ct-success);
  --ct-btn-hover-border-color: var(--ct-success);
  --ct-btn-active-bg: var(--ct-success);
  --ct-btn-active-border-color: var(--ct-success);
  --ct-btn-disabled-color: var(--ct-success);
  --ct-btn-disabled-bg: var(--ct-success);
  --ct-btn-disabled-border-color: var(--ct-success);
  --ct-btn-focus-shadow-rgb: 0 0 0 $btn-focus-width rgba(var(--ct-success)-rgb, 0.5)
}

.btn-info {
  --ct-btn-bg: var(--ct-info);
  --ct-btn-border-color: var(--ct-info);
  --ct-btn-hover-bg: var(--ct-info-text-emphasis);
  --ct-btn-hover-border-color: var(--ct-info-text-emphasis);
  --ct-btn-focus-shadow-rgb: var(--ct-info-rgb);
  --ct-btn-active-bg: var(--ct-info-text-emphasis);
  --ct-btn-active-border-color: var(--ct-info-text-emphasis)
}

.btn-outline-info {
  --ct-btn-color: var(--ct-info);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: var(--ct-info);
  --ct-btn-hover-bg: var(--ct-info);
  --ct-btn-hover-border-color: var(--ct-info);
  --ct-btn-focus-shadow-rgb: var(--ct-info-rgb);
  --ct-btn-active-bg: var(--ct-info);
  --ct-btn-active-border-color: var(--ct-info)
}

.btn-soft-info {
  --ct-btn-color: var(--ct-info);
  --ct-btn-bg: var(--ct-info-bg-subtle);
  --ct-btn-border-color: transparent;
  --ct-btn-hover-bg: var(--ct-info);
  --ct-btn-hover-border-color: var(--ct-info);
  --ct-btn-active-bg: var(--ct-info);
  --ct-btn-active-border-color: var(--ct-info);
  --ct-btn-disabled-color: var(--ct-info);
  --ct-btn-disabled-bg: var(--ct-info);
  --ct-btn-disabled-border-color: var(--ct-info);
  --ct-btn-focus-shadow-rgb: 0 0 0 $btn-focus-width rgba(var(--ct-info)-rgb, 0.5)
}

.btn-warning {
  --ct-btn-bg: var(--ct-warning);
  --ct-btn-border-color: var(--ct-warning);
  --ct-btn-hover-bg: var(--ct-warning-text-emphasis);
  --ct-btn-hover-border-color: var(--ct-warning-text-emphasis);
  --ct-btn-focus-shadow-rgb: var(--ct-warning-rgb);
  --ct-btn-active-bg: var(--ct-warning-text-emphasis);
  --ct-btn-active-border-color: var(--ct-warning-text-emphasis)
}

.btn-outline-warning {
  --ct-btn-color: var(--ct-warning);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: var(--ct-warning);
  --ct-btn-hover-bg: var(--ct-warning);
  --ct-btn-hover-border-color: var(--ct-warning);
  --ct-btn-focus-shadow-rgb: var(--ct-warning-rgb);
  --ct-btn-active-bg: var(--ct-warning);
  --ct-btn-active-border-color: var(--ct-warning)
}

.btn-soft-warning {
  --ct-btn-color: var(--ct-warning);
  --ct-btn-bg: var(--ct-warning-bg-subtle);
  --ct-btn-border-color: transparent;
  --ct-btn-hover-bg: var(--ct-warning);
  --ct-btn-hover-border-color: var(--ct-warning);
  --ct-btn-active-bg: var(--ct-warning);
  --ct-btn-active-border-color: var(--ct-warning);
  --ct-btn-disabled-color: var(--ct-warning);
  --ct-btn-disabled-bg: var(--ct-warning);
  --ct-btn-disabled-border-color: var(--ct-warning);
  --ct-btn-focus-shadow-rgb: 0 0 0 $btn-focus-width rgba(var(--ct-warning)-rgb, 0.5)
}

.btn-danger {
  --ct-btn-bg: var(--ct-danger);
  --ct-btn-border-color: var(--ct-danger);
  --ct-btn-hover-bg: var(--ct-danger-text-emphasis);
  --ct-btn-hover-border-color: var(--ct-danger-text-emphasis);
  --ct-btn-focus-shadow-rgb: var(--ct-danger-rgb);
  --ct-btn-active-bg: var(--ct-danger-text-emphasis);
  --ct-btn-active-border-color: var(--ct-danger-text-emphasis)
}

.btn-outline-danger {
  --ct-btn-color: var(--ct-danger);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: var(--ct-danger);
  --ct-btn-hover-bg: var(--ct-danger);
  --ct-btn-hover-border-color: var(--ct-danger);
  --ct-btn-focus-shadow-rgb: var(--ct-danger-rgb);
  --ct-btn-active-bg: var(--ct-danger);
  --ct-btn-active-border-color: var(--ct-danger)
}

.btn-soft-danger {
  --ct-btn-color: var(--ct-danger);
  --ct-btn-bg: var(--ct-danger-bg-subtle);
  --ct-btn-border-color: transparent;
  --ct-btn-hover-bg: var(--ct-danger);
  --ct-btn-hover-border-color: var(--ct-danger);
  --ct-btn-active-bg: var(--ct-danger);
  --ct-btn-active-border-color: var(--ct-danger);
  --ct-btn-disabled-color: var(--ct-danger);
  --ct-btn-disabled-bg: var(--ct-danger);
  --ct-btn-disabled-border-color: var(--ct-danger);
  --ct-btn-focus-shadow-rgb: 0 0 0 $btn-focus-width rgba(var(--ct-danger)-rgb, 0.5)
}

.btn-light {
  --ct-btn-bg: var(--ct-light);
  --ct-btn-border-color: var(--ct-light);
  --ct-btn-hover-bg: var(--ct-light-text-emphasis);
  --ct-btn-hover-border-color: var(--ct-light-text-emphasis);
  --ct-btn-focus-shadow-rgb: var(--ct-light-rgb);
  --ct-btn-active-bg: var(--ct-light-text-emphasis);
  --ct-btn-active-border-color: var(--ct-light-text-emphasis)
}

.btn-outline-light {
  --ct-btn-color: var(--ct-light);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: var(--ct-light);
  --ct-btn-hover-bg: var(--ct-light);
  --ct-btn-hover-border-color: var(--ct-light);
  --ct-btn-focus-shadow-rgb: var(--ct-light-rgb);
  --ct-btn-active-bg: var(--ct-light);
  --ct-btn-active-border-color: var(--ct-light)
}

.btn-soft-light {
  --ct-btn-color: var(--ct-light);
  --ct-btn-bg: var(--ct-light-bg-subtle);
  --ct-btn-border-color: transparent;
  --ct-btn-hover-bg: var(--ct-light);
  --ct-btn-hover-border-color: var(--ct-light);
  --ct-btn-active-bg: var(--ct-light);
  --ct-btn-active-border-color: var(--ct-light);
  --ct-btn-disabled-color: var(--ct-light);
  --ct-btn-disabled-bg: var(--ct-light);
  --ct-btn-disabled-border-color: var(--ct-light);
  --ct-btn-focus-shadow-rgb: 0 0 0 $btn-focus-width rgba(var(--ct-light)-rgb, 0.5)
}

.btn-dark {
  --ct-btn-bg: var(--ct-dark);
  --ct-btn-border-color: var(--ct-dark);
  --ct-btn-hover-bg: var(--ct-dark-text-emphasis);
  --ct-btn-hover-border-color: var(--ct-dark-text-emphasis);
  --ct-btn-focus-shadow-rgb: var(--ct-dark-rgb);
  --ct-btn-active-bg: var(--ct-dark-text-emphasis);
  --ct-btn-active-border-color: var(--ct-dark-text-emphasis)
}

.btn-outline-dark {
  --ct-btn-color: var(--ct-dark);
  --ct-btn-bg: transparent;
  --ct-btn-border-color: var(--ct-dark);
  --ct-btn-hover-bg: var(--ct-dark);
  --ct-btn-hover-border-color: var(--ct-dark);
  --ct-btn-focus-shadow-rgb: var(--ct-dark-rgb);
  --ct-btn-active-bg: var(--ct-dark);
  --ct-btn-active-border-color: var(--ct-dark)
}

.btn-soft-dark {
  --ct-btn-color: var(--ct-dark);
  --ct-btn-bg: var(--ct-dark-bg-subtle);
  --ct-btn-border-color: transparent;
  --ct-btn-hover-bg: var(--ct-dark);
  --ct-btn-hover-border-color: var(--ct-dark);
  --ct-btn-active-bg: var(--ct-dark);
  --ct-btn-active-border-color: var(--ct-dark);
  --ct-btn-disabled-color: var(--ct-dark);
  --ct-btn-disabled-bg: var(--ct-dark);
  --ct-btn-disabled-border-color: var(--ct-dark);
  --ct-btn-focus-shadow-rgb: 0 0 0 $btn-focus-width rgba(var(--ct-dark)-rgb, 0.5)
}

.btn-soft-primary {
  --ct-btn-active-color: #fff;
  --ct-btn-hover-color: #fff
}

.btn-soft-secondary {
  --ct-btn-active-color: #fff;
  --ct-btn-hover-color: #fff
}

.btn-soft-success {
  --ct-btn-active-color: #fff;
  --ct-btn-hover-color: #fff
}

.btn-soft-info {
  --ct-btn-active-color: #fff;
  --ct-btn-hover-color: #fff
}

.btn-soft-warning {
  --ct-btn-active-color: #fff;
  --ct-btn-hover-color: #fff
}

.btn-soft-danger {
  --ct-btn-active-color: #fff;
  --ct-btn-hover-color: #fff
}

.btn-soft-light {
  --ct-btn-active-color: #212529;
  --ct-btn-hover-color: #212529
}

.btn-soft-dark {
  --ct-btn-active-color: #fff;
  --ct-btn-hover-color: #fff
}

[data-bs-theme=dark] .btn-light {
  --ct-btn-color: #fff;
  --ct-btn-active-color: #fff;
  --ct-btn-hover-color: #fff
}

.badge-outline-primary {
  --ct-badge-color: var(--ct-primary);
  border: 1px solid var(--ct-primary);
  background-color: transparent
}

.badge-outline-primary[href] {
  color: var(--ct-primary);
  text-decoration: none;
  background-color: var(--ct-primary-bg-subtle)
}

.badge-outline-primary[href]:is(:hover,
  :focus) {
    color: var(--ct-primary);
    text-decoration: none;
    background-color: var(--ct-primary-bg-subtle)
  }

  .badge-outline-secondary {
    --ct-badge-color: var(--ct-secondary);
    border: 1px solid var(--ct-secondary);
    background-color: transparent
  }

  .badge-outline-secondary[href] {
    color: var(--ct-secondary);
    text-decoration: none;
    background-color: var(--ct-secondary-bg-subtle)
  }

  .badge-outline-secondary[href]:is(:hover,
    :focus) {
      color: var(--ct-secondary);
      text-decoration: none;
      background-color: var(--ct-secondary-bg-subtle)
    }

    .badge-outline-success {
      --ct-badge-color: var(--ct-success);
      border: 1px solid var(--ct-success);
      background-color: transparent
    }

    .badge-outline-success[href] {
      color: var(--ct-success);
      text-decoration: none;
      background-color: var(--ct-success-bg-subtle)
    }

    .badge-outline-success[href]:is(:hover,
      :focus) {
        color: var(--ct-success);
        text-decoration: none;
        background-color: var(--ct-success-bg-subtle)
      }

      .badge-outline-info {
        --ct-badge-color: var(--ct-info);
        border: 1px solid var(--ct-info);
        background-color: transparent
      }

      .badge-outline-info[href] {
        color: var(--ct-info);
        text-decoration: none;
        background-color: var(--ct-info-bg-subtle)
      }

      .badge-outline-info[href]:is(:hover,
        :focus) {
          color: var(--ct-info);
          text-decoration: none;
          background-color: var(--ct-info-bg-subtle)
        }

        .badge-outline-warning {
          --ct-badge-color: var(--ct-warning);
          border: 1px solid var(--ct-warning);
          background-color: transparent
        }

        .badge-outline-warning[href] {
          color: var(--ct-warning);
          text-decoration: none;
          background-color: var(--ct-warning-bg-subtle)
        }

        .badge-outline-warning[href]:is(:hover,
          :focus) {
            color: var(--ct-warning);
            text-decoration: none;
            background-color: var(--ct-warning-bg-subtle)
          }

          .badge-outline-danger {
            --ct-badge-color: var(--ct-danger);
            border: 1px solid var(--ct-danger);
            background-color: transparent
          }

          .badge-outline-danger[href] {
            color: var(--ct-danger);
            text-decoration: none;
            background-color: var(--ct-danger-bg-subtle)
          }

          .badge-outline-danger[href]:is(:hover,
            :focus) {
              color: var(--ct-danger);
              text-decoration: none;
              background-color: var(--ct-danger-bg-subtle)
            }

            .badge-outline-light {
              --ct-badge-color: var(--ct-light);
              border: 1px solid var(--ct-light);
              background-color: transparent
            }

            .badge-outline-light[href] {
              color: var(--ct-light);
              text-decoration: none;
              background-color: var(--ct-light-bg-subtle)
            }

            .badge-outline-light[href]:is(:hover,
              :focus) {
                color: var(--ct-light);
                text-decoration: none;
                background-color: var(--ct-light-bg-subtle)
              }

              .badge-outline-dark {
                --ct-badge-color: var(--ct-dark);
                border: 1px solid var(--ct-dark);
                background-color: transparent
              }

              .badge-outline-dark[href] {
                color: var(--ct-dark);
                text-decoration: none;
                background-color: var(--ct-dark-bg-subtle)
              }

              .badge-outline-dark[href]:is(:hover,
                :focus) {
                  color: var(--ct-dark);
                  text-decoration: none;
                  background-color: var(--ct-dark-bg-subtle)
                }

                .card {
                  -webkit-box-shadow: var(--ct-box-shadow);
                  box-shadow: var(--ct-box-shadow);
                  margin-bottom: 1.25rem
                }

                .card .header-title {
                  margin-bottom: .5rem;
                  font-size: 1rem;
                  margin-top: 0
                }

                .card .card-drop {
                  font-size: 20px;
                  color: inherit
                }

                .card .card-widgets {
                  float: right;
                  height: 16px
                }

                .card .card-widgets>a {
                  color: inherit;
                  font-size: 18px;
                  display: inline-block;
                  line-height: 1;
                  min-width: 20px
                }

                .card .card-widgets>a.collapsed i:before {
                  content: "\ea13"
                }

                .card-header,
                .card-title {
                  margin-top: 0
                }

                .card-header .header-title,
                .card-title .header-title {
                  margin-bottom: 0
                }

                .card-disabled {
                  position: absolute;
                  left: 0;
                  right: 0;
                  top: 0;
                  bottom: 0;
                  border-radius: var(--ct-border-radius);
                  background: rgba(242, 242, 247, .8);
                  cursor: progress
                }



                .content-wrapper.iframe-mode .tab-content {
                  position: relative;
                }

                .content-wrapper.iframe-mode .tab-pane + .tab-empty {
                  display: none;
                }

                .content-wrapper.iframe-mode .tab-empty {
                  width: 100%;
                  display: -ms-flexbox;
                  display: flex;
                  -ms-flex-pack: center;
                  justify-content: center;
                  -ms-flex-align: center;
                  align-items: center;
                }

                .content-wrapper.iframe-mode .tab-loading {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  display: none;
                  background-color: #f4f6f9;
                }

                .content-wrapper.iframe-mode .tab-loading > div {
                  display: -ms-flexbox;
                  display: flex;
                  -ms-flex-pack: center;
                  justify-content: center;
                  -ms-flex-align: center;
                  align-items: center;
                  width: 100%;
                  height: 100%;
                }

                .content-wrapper.iframe-mode iframe {
                  border: 0;
                  width: 100%;
                  height: 87vh;
                  margin-bottom: -8px;
                }

                .content-wrapper.iframe-mode iframe .content-wrapper {
                  padding-bottom: 0 !important;
                }

                body.iframe-mode-fullscreen .content-wrapper.iframe-mode {
                  position: absolute;
                  left: 0;
                  top: 0;
                  right: 0;
                  bottom: 0;
                  margin-left: 0 !important;
                  height: 100%;
                  min-height: 100%;
                  z-index: 1048;
                }

                .permanent-btn-iframe-close .btn-iframe-close {
                  -webkit-animation: none !important;
                  animation: none !important;
                  visibility: visible !important;
                  opacity: 1;
                }

                .dark-mode .content-wrapper.iframe-mode .tab-loading {
                  background-color: #343a40;
                }
                .tez_float{
                  position:absolute;
                  width:50px;
                  height:40px;
                  bottom:10px;
                  right:-40px;
                  background-color:#0C9;
                  color:#FFF;
                  border-radius:40px 0px 0px 40px;
                  text-align:center;
                  z-index:99;
                  border:0px;

                }
                .tez_float_ipd{
                  position:fixed;
                  width:80px;
                  height:40px;
                  bottom:20px;
                  right:-40px;
                  background-color:#0C9;
                  color:#FFF;
                  text-align:center;
                  z-index:99;
                  border:0px;

                }

                .card-disabled .card-portlets-loader {
                  background-color: var(--ct-gray-900);
                  -webkit-animation: rotatebox 1.2s infinite ease-in-out;
                  animation: rotatebox 1.2s infinite ease-in-out;
                  height: 30px;
                  width: 30px;
                  border-radius: 3px;
                  position: absolute;
                  left: 50%;
                  top: 50%;
                  margin-left: -.75rem;
                  margin-top: -.75rem
                }

                @-webkit-keyframes rotatebox {
                  0% {
                    -webkit-transform: perspective(120px) rotateX(0) rotateY(0);
                    transform: perspective(120px) rotateX(0) rotateY(0)
                  }
                  50% {
                    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0);
                    transform: perspective(120px) rotateX(-180.1deg) rotateY(0)
                  }
                  100% {
                    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg)
                  }
                }

                @keyframes rotatebox {
                  0% {
                    -webkit-transform: perspective(120px) rotateX(0) rotateY(0);
                    transform: perspective(120px) rotateX(0) rotateY(0)
                  }
                  50% {
                    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0);
                    transform: perspective(120px) rotateX(-180.1deg) rotateY(0)
                  }
                  100% {
                    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg)
                  }
                }

                .card-h-100 {
                  height: calc(100% - 1.5rem)
                }

                .form-checkbox-primary .form-check-input:checked,
                .form-radio-primary .form-check-input:checked {
                  background-color: var(--ct-primary);
                  border-color: var(--ct-primary)
                }

                .form-checkbox-secondary .form-check-input:checked,
                .form-radio-secondary .form-check-input:checked {
                  background-color: var(--ct-secondary);
                  border-color: var(--ct-secondary)
                }

                .form-checkbox-success .form-check-input:checked,
                .form-radio-success .form-check-input:checked {
                  background-color: var(--ct-success);
                  border-color: var(--ct-success)
                }

                .form-checkbox-info .form-check-input:checked,
                .form-radio-info .form-check-input:checked {
                  background-color: var(--ct-info);
                  border-color: var(--ct-info)
                }

                .form-checkbox-warning .form-check-input:checked,
                .form-radio-warning .form-check-input:checked {
                  background-color: var(--ct-warning);
                  border-color: var(--ct-warning)
                }

                .form-checkbox-danger .form-check-input:checked,
                .form-radio-danger .form-check-input:checked {
                  background-color: var(--ct-danger);
                  border-color: var(--ct-danger)
                }

                .form-checkbox-light .form-check-input:checked,
                .form-radio-light .form-check-input:checked {
                  background-color: var(--ct-light);
                  border-color: var(--ct-light)
                }

                .form-checkbox-dark .form-check-input:checked,
                .form-radio-dark .form-check-input:checked {
                  background-color: var(--ct-dark);
                  border-color: var(--ct-dark)
                }

                .dropdown-menu {
                  -webkit-box-shadow: var(--ct-dropdown-box-shadow);
                  box-shadow: var(--ct-dropdown-box-shadow)
                }

                .dropdown-header {
                  margin-top: 0
                }

                .dropdown-toggle-split:before {
                  content: "";
                  position: absolute;
                  background-color: rgba(33, 37, 41, .08);
                  top: -1px;
                  bottom: -1px;
                  right: -1px;
                  left: 0;
                  border-radius: 0 .25rem .25rem 0
                }

                .dropstart .dropdown-toggle-split:before {
                  background-color: inherit;
                  position: relative;
                  inset: auto;
                  border-radius: 0
                }

                .dropstart .dropdown-toggle-split:after {
                  content: "aa" !important;
                  position: absolute;
                  background-color: rgba(33, 37, 41, .08);
                  top: -1px;
                  bottom: -1px;
                  right: -1px;
                  left: 0;
                  border-radius: 0 .25rem .25rem 0
                }

                .hover-dropdown:hover .dropdown-menu {
                  display: block !important;
                  top: 100% !important
                }

                .dropdown-menu-animated {
                  -webkit-animation-name: DropDownSlide;
                  animation-name: DropDownSlide;
                  -webkit-animation-duration: .3s;
                  animation-duration: .3s;
                  -webkit-animation-fill-mode: both;
                  animation-fill-mode: both;
                  position: absolute;
                  margin: 0;
                  z-index: 1000
                }

                .dropdown-menu-animated.show {
                  top: 100% !important
                }

                .dropdown-menu-animated.dropdown-menu-end[style] {
                  left: auto;
                  right: 0
                }

                .dropdown-menu-animated i {
                  display: inline-block
                }

                .dropdown-menu-animated.dropdown-menu[data-popper-placement^=left],
                .dropdown-menu-animated.dropdown-menu[data-popper-placement^=right],
                .dropdown-menu-animated.dropdown-menu[data-popper-placement^=top] {
                  top: auto !important;
                  -webkit-animation: none !important;
                  animation: none !important
                }

                @-webkit-keyframes DropDownSlide {
                  100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0)
                  }
                  0% {
                    -webkit-transform: translateY(10px);
                    transform: translateY(10px)
                  }
                }

                @keyframes DropDownSlide {
                  100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0)
                  }
                  0% {
                    -webkit-transform: translateY(10px);
                    transform: translateY(10px)
                  }
                }

                @media (min-width:576px) {
                  .dropdown-lg {
                    width: 320px
                  }
                }

                .dropdown-icon-item {
                  display: block;
                  border-radius: 3px;
                  line-height: 34px;
                  text-align: center;
                  padding: 15px 0 9px;
                  display: block;
                  border: 1px solid transparent;
                  color: var(--ct-body-color)
                }

                .dropdown-icon-item img {
                  height: 24px
                }

                .dropdown-icon-item span {
                  display: block;
                  overflow: hidden;
                  text-overflow: ellipsis;
                  white-space: nowrap
                }

                .dropdown-icon-item:hover {
                  background-color: var(--ct-tertiary-bg);
                  color: var(--ct-tertiary-color)
                }

                .arrow-none:after {
                  display: none
                }

                .form-control-light {
                  background-color: var(--ct-tertiary-bg) !important;
                  border-color: var(--ct-border-color) !important;
                  border-width: var(--ct-theme-card-border-width);
                  border-style: solid;
                  border-color: var(--ct-border-color)
                }

                input.form-control[type=color],
                input.form-control[type=range] {
                  min-height: 39px
                }

                .custom-select.is-invalid:focus,
                .custom-select.is-valid:focus,
                .custom-select:invalid:focus,
                .custom-select:valid:focus,
                .form-control.is-invalid:focus,
                .form-control.is-valid:focus,
                .form-control:invalid:focus,
                .form-control:valid:focus {
                  -webkit-box-shadow: none !important;
                  box-shadow: none !important
                }

                select.form-control:not([size]):not([multiple]) {
                  height: calc(1.5em + .9rem + calc(var(--ct-border-width) * 2))
                }

                select.form-control-sm:not([size]):not([multiple]) {
                  height: calc(1.5em + .56rem + calc(var(--ct-border-width) * 2))
                }

                .password-eye {
                  cursor: pointer
                }

                .password-eye:before {
                  font-family: remixicon;
                  content: "\ecb5";
                  font-style: normal;
                  font-weight: 400;
                  font-variant: normal;
                  vertical-align: middle;
                  line-height: 1.2;
                  font-size: 16px
                }

                .show-password .password-eye:before {
                  content: "\ecb7"
                }

                .modal-dialog {
                  -webkit-box-shadow: var(--ct-box-shadow);
                  box-shadow: var(--ct-box-shadow)
                }

                .modal-title {
                  margin-top: 0
                }

                .modal-full-width {
                  width: 95%;
                  max-width: none
                }

                .modal-top {
                  margin: 0 auto
                }

                .modal-right {
                  position: absolute;
                  right: 0;
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-orient: vertical;
                  -webkit-box-direction: normal;
                  -ms-flex-flow: column nowrap;
                  flex-flow: column nowrap;
                  -webkit-box-pack: center;
                  -ms-flex-pack: center;
                  justify-content: center;
                  height: 100%;
                  margin: 0;
                  background-color: var(--ct-secondary-bg);
                  -ms-flex-line-pack: center;
                  align-content: center;
                  -webkit-transform: translate(25%, 0) !important;
                  transform: translate(25%, 0) !important
                }

                .modal-right button.btn-close {
                  position: fixed;
                  top: 20px;
                  right: 20px;
                  z-index: 1
                }

                .modal.show .modal-left,
                .modal.show .modal-right {
                  -webkit-transform: translate(0, 0) !important;
                  transform: translate(0, 0) !important
                }

                .modal-bottom {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-orient: vertical;
                  -webkit-box-direction: normal;
                  -ms-flex-flow: column nowrap;
                  flex-flow: column nowrap;
                  -ms-flex-pack: end;
                  -webkit-box-pack: end;
                  justify-content: flex-end;
                  height: 100%;
                  margin: 0 auto;
                  -ms-flex-line-pack: center;
                  align-content: center
                }

                .modal-colored-header {
                  border-radius: 0
                }

                .modal-colored-header .modal-title {
                  color: #fff !important
                }

                .modal-filled {
                  color: #fff
                }

                .modal-filled .modal-header {
                  background-color: rgba(255, 255, 255, .07)
                }

                .modal-filled .modal-title {
                  color: #fff
                }

                .modal-filled .modal-footer,
                .modal-filled .modal-header {
                  border: none
                }

                .nav-pills>li>a,
                .nav-tabs>li>a {
                  color: var(--ct-secondary-color);
                  font-weight: 600
                }

                .nav-pills>a {
                  color: var(--ct-gray-700);
                  font-weight: 600
                }

                .bg-nav-pills {
                  background-color: var(--ct-tertiary-bg)
                }

                .nav-tabs.nav-bordered {
                  border-bottom: 2px solid var(--ct-border-color)
                }

                .nav-tabs.nav-bordered .nav-item {
                  margin-bottom: -1px
                }

                .nav-tabs.nav-bordered li a {
                  border: 0;
                  padding: .625rem 1.25rem
                }

                .nav-tabs.nav-bordered li a.active {
                  border-bottom: 2px solid var(--ct-primary)
                }

                .pagination-rounded .page-link {
                  border-radius: 30px !important;
                  margin: 0 3px !important;
                  border: none
                }

                .popover-header {
                  margin-top: 0
                }

                .primary-popover {
                  --ct-popover-max-width: 200px !important;
                  --ct-popover-border-color: var(--ct-primary) !important;
                  --ct-popover-header-bg: var(--ct-primary) !important;
                  --ct-popover-header-color: var(--ct-white) !important;
                  --ct-popover-body-padding-x: 1rem !important;
                  --ct-popover-body-padding-y: .5rem !important
                }

                .secondary-popover {
                  --ct-popover-max-width: 200px !important;
                  --ct-popover-border-color: var(--ct-secondary) !important;
                  --ct-popover-header-bg: var(--ct-secondary) !important;
                  --ct-popover-header-color: var(--ct-white) !important;
                  --ct-popover-body-padding-x: 1rem !important;
                  --ct-popover-body-padding-y: .5rem !important
                }

                .success-popover {
                  --ct-popover-max-width: 200px !important;
                  --ct-popover-border-color: var(--ct-success) !important;
                  --ct-popover-header-bg: var(--ct-success) !important;
                  --ct-popover-header-color: var(--ct-white) !important;
                  --ct-popover-body-padding-x: 1rem !important;
                  --ct-popover-body-padding-y: .5rem !important
                }

                .info-popover {
                  --ct-popover-max-width: 200px !important;
                  --ct-popover-border-color: var(--ct-info) !important;
                  --ct-popover-header-bg: var(--ct-info) !important;
                  --ct-popover-header-color: var(--ct-white) !important;
                  --ct-popover-body-padding-x: 1rem !important;
                  --ct-popover-body-padding-y: .5rem !important
                }

                .warning-popover {
                  --ct-popover-max-width: 200px !important;
                  --ct-popover-border-color: var(--ct-warning) !important;
                  --ct-popover-header-bg: var(--ct-warning) !important;
                  --ct-popover-header-color: var(--ct-white) !important;
                  --ct-popover-body-padding-x: 1rem !important;
                  --ct-popover-body-padding-y: .5rem !important
                }

                .danger-popover {
                  --ct-popover-max-width: 200px !important;
                  --ct-popover-border-color: var(--ct-danger) !important;
                  --ct-popover-header-bg: var(--ct-danger) !important;
                  --ct-popover-header-color: var(--ct-white) !important;
                  --ct-popover-body-padding-x: 1rem !important;
                  --ct-popover-body-padding-y: .5rem !important
                }

                .light-popover {
                  --ct-popover-max-width: 200px !important;
                  --ct-popover-border-color: var(--ct-light) !important;
                  --ct-popover-header-bg: var(--ct-light) !important;
                  --ct-popover-header-color: var(--ct-white) !important;
                  --ct-popover-body-padding-x: 1rem !important;
                  --ct-popover-body-padding-y: .5rem !important
                }

                .dark-popover {
                  --ct-popover-max-width: 200px !important;
                  --ct-popover-border-color: var(--ct-dark) !important;
                  --ct-popover-header-bg: var(--ct-dark) !important;
                  --ct-popover-header-color: var(--ct-white) !important;
                  --ct-popover-body-padding-x: 1rem !important;
                  --ct-popover-body-padding-y: .5rem !important
                }

                @media print {
                  .end-bar,
                  .footer,
                  .leftside-menu,
                  .navbar-custom,
                  .page-title-box {
                    display: none
                  }
                  .card-body,
                  .content,
                  .content-page,
                  .end-bar,
                  body {
                    padding: 0;
                    margin: 0
                  }
                  .card {
                    -webkit-box-shadow: none;
                    box-shadow: none
                  }
                }

                .progress-sm {
                  height: 5px
                }

                .progress-md {
                  height: 8px
                }

                .progress-lg {
                  height: 12px
                }

                .progress-xl {
                  height: 15px
                }

                html {
                  position: relative;
                  min-height: 100%
                }

                @supports (-webkit-overflow-scrolling:touch) {
                  body {
                    cursor: pointer
                  }
                }

                body {
                  overflow-x: hidden
                }

                a,
                button {
                  outline: 0 !important
                }

                label {
                  font-weight: 600
                }

                address.address-lg {
                  line-height: 24px
                }

                b,
                strong {
                  font-weight: 700
                }

                .table-centered td,
                .table-centered th {
                  vertical-align: middle !important
                }

                .table .table-user img {
                  height: 30px;
                  width: 30px
                }

                .table>:not(caption)>*>* {
                  background-color: var(--ct-table-bg) !important
                }

                .table.table-bordered tbody {
                  border-top: 1px solid;
                  border-top-color: inherit
                }

                .table-sm .action-icon {
                  font-size: 1rem
                }

                .table-nowrap td,
                .table-nowrap th {
                  white-space: nowrap
                }

                .primary-tooltip {
                  --ct-tooltip-bg: var(--ct-primary) !important
                }

                .secondary-tooltip {
                  --ct-tooltip-bg: var(--ct-secondary) !important
                }

                .success-tooltip {
                  --ct-tooltip-bg: var(--ct-success) !important
                }

                .info-tooltip {
                  --ct-tooltip-bg: var(--ct-info) !important
                }

                .warning-tooltip {
                  --ct-tooltip-bg: var(--ct-warning) !important
                }

                .danger-tooltip {
                  --ct-tooltip-bg: var(--ct-danger) !important
                }

                .light-tooltip {
                  --ct-tooltip-bg: var(--ct-light) !important
                }

                .dark-tooltip {
                  --ct-tooltip-bg: var(--ct-dark) !important
                }

                .progress-w-percent {
                  min-height: 20px;
                  margin-bottom: 20px
                }

                .progress-w-percent .progress {
                  width: calc(100% - 50px);
                  float: left;
                  margin-top: 8px
                }

                .progress-w-percent .progress-value {
                  width: 40px;
                  float: right;
                  text-align: right;
                  line-height: 20px
                }

                .widget-flat {
                  position: relative;
                  overflow: hidden
                }

                @media (min-width:1200px) and (max-width:1500px) {
                  .widget-flat i.widget-icon {
                    display: none
                  }
                }

                .widget-icon {
                  color: var(--ct-primary);
                  font-size: 20px;
                  background-color: rgba(var(--ct-primary-rgb), .25);
                  height: 40px;
                  width: 40px;
                  text-align: center;
                  line-height: 40px;
                  border-radius: 3px;
                  display: inline-block
                }

                .dash-item-overlay {
                  position: absolute;
                  text-align: left;
                  left: 8%;
                  max-width: 350px;
                  padding: 20px;
                  z-index: 1
                }

                .chart-widget-list p {
                  border-bottom: 1px solid var(--ct-border-color);
                  margin-bottom: .5rem;
                  padding-bottom: .5rem
                }

                .timeline-alt {
                  padding: 20px 0;
                  position: relative
                }

                .timeline-alt .timeline-item {
                  position: relative
                }

                .timeline-alt .timeline-item:before {
                  background-color: var(--ct-tertiary-bg);
                  bottom: 0;
                  content: "";
                  left: 9px;
                  position: absolute;
                  top: 20px;
                  width: 2px;
                  z-index: 0
                }

                .timeline-alt .timeline-item .timeline-icon {
                  float: left;
                  height: 20px;
                  width: 20px;
                  border-radius: 50%;
                  border: 2px solid transparent;
                  font-size: 12px;
                  text-align: center;
                  line-height: 16px;
                  background-color: #fff
                }

                .timeline-alt .timeline-item .timeline-item-info {
                  margin-left: 30px
                }

                .timeline-alt .timeline-item:last-of-type::before {
                  display: none
                }

                .inbox-widget .inbox-item {
                  border-bottom: 1px solid var(--ct-border-color);
                  overflow: hidden;
                  padding: .625rem 0;
                  position: relative
                }

                .inbox-widget .inbox-item:last-of-type {
                  border-bottom: none
                }

                .inbox-widget .inbox-item .inbox-item-img {
                  display: block;
                  float: left;
                  margin-right: 15px;
                  width: 40px
                }

                .inbox-widget .inbox-item .inbox-item-img img {
                  width: 40px
                }

                .inbox-widget .inbox-item .inbox-item-author {
                  color: var(--ct-tertiary-color);
                  display: block;
                  margin-bottom: 3px
                }

                .inbox-widget .inbox-item .inbox-item-text {
                  color: var(--ct-gray-500);
                  display: block;
                  font-size: .8125rem;
                  margin: 0
                }

                .inbox-widget .inbox-item .inbox-item-date {
                  color: var(--ct-gray-600);
                  font-size: .6875rem;
                  position: absolute;
                  right: 5px;
                  top: 10px
                }

                .tilebox-one i {
                  position: absolute;
                  right: 1.5rem;
                  font-size: 2rem;
                  opacity: .3
                }

                .toll-free-box i {
                  position: absolute;
                  left: 0;
                  bottom: -15px;
                  font-size: 4rem;
                  opacity: .4;
                  -webkit-transform: rotate(30deg);
                  transform: rotate(30deg)
                }

                .cta-box .cta-box-title {
                  font-size: 20px;
                  line-height: 30px
                }

                .conversation-list {
                  list-style: none;
                  padding: 0 15px
                }

                .conversation-list li {
                  margin-bottom: 20px
                }

                .conversation-list li .conversation-actions {
                  float: right;
                  display: none
                }

                .conversation-list li:hover .conversation-actions {
                  display: block
                }

                .conversation-list .chat-avatar {
                  float: left;
                  text-align: center;
                  width: 32px
                }

                .conversation-list .chat-avatar img {
                  border-radius: 100%;
                  width: 100%
                }

                .conversation-list .chat-avatar i {
                  font-size: 12px;
                  font-style: normal
                }

                .conversation-list .ctext-wrap {
                  background: var(--ct-light);
                  border-radius: 3px;
                  display: inline-block;
                  padding: 12px;
                  position: relative
                }

                .conversation-list .ctext-wrap i {
                  display: block;
                  font-size: 12px;
                  font-style: normal;
                  font-weight: 700;
                  position: relative
                }

                .conversation-list .ctext-wrap p {
                  margin: 0;
                  padding-top: 3px
                }

                .conversation-list .ctext-wrap:after {
                  left: -11px;
                  top: 0;
                  border: solid transparent;
                  content: " ";
                  height: 0;
                  width: 0;
                  position: absolute;
                  pointer-events: none;
                  border-top-color: var(--ct-light);
                  border-width: 6px;
                  margin-right: -1px;
                  border-right-color: var(--ct-light)
                }

                .conversation-list .conversation-text {
                  float: left;
                  margin-left: 12px;
                  width: 70%
                }

                .conversation-list .odd .chat-avatar {
                  float: right !important
                }

                .conversation-list .odd .conversation-text {
                  float: right !important;
                  margin-right: 12px;
                  text-align: right;
                  width: 70% !important;
                  color: #fff
                }

                .conversation-list .odd .ctext-wrap {
                  background-color: var(--ct-primary)
                }

                .conversation-list .odd .ctext-wrap:after {
                  border-color: transparent;
                  border-left-color: var(--ct-primary);
                  border-top-color: var(--ct-primary);
                  right: -8px;
                  left: auto
                }

                .conversation-list .odd .conversation-actions {
                  float: left
                }

                .calendar-widget .datepicker-inline,
                .calendar-widget table {
                  width: 100%
                }

                .calendar-widget .datepicker-inline tr td,
                .calendar-widget .datepicker-inline tr td.active.day,
                .calendar-widget .datepicker-inline tr td.today.day,
                .calendar-widget .datepicker-inline tr th,
                .calendar-widget table tr td,
                .calendar-widget table tr td.active.day,
                .calendar-widget table tr td.today.day,
                .calendar-widget table tr th {
                  background-color: transparent !important
                }

                .calendar-widget .datepicker-inline tr td.active.day,
                .calendar-widget .datepicker-inline tr td.today.day,
                .calendar-widget table tr td.active.day,
                .calendar-widget table tr td.today.day {
                  color: #f15776 !important;
                  text-shadow: none;
                  font-weight: 700
                }

                .calendar-widget .datepicker-inline tr td.active.day:hover,
                .calendar-widget .datepicker-inline tr td.today.day:hover,
                .calendar-widget table tr td.active.day:hover,
                .calendar-widget table tr td.today.day:hover {
                  background-color: transparent !important
                }

                .calendar-widget .datepicker-inline td,
                .calendar-widget .datepicker-inline th,
                .calendar-widget table td,
                .calendar-widget table th {
                  height: 45px
                }

                .calendar-widget .datepicker-inline .datepicker-switch,
                .calendar-widget .datepicker-inline .next,
                .calendar-widget .datepicker-inline .prev,
                .calendar-widget table .datepicker-switch,
                .calendar-widget table .next,
                .calendar-widget table .prev {
                  font-size: 1.1rem;
                  background-color: rgba(var(--ct-primary-rgb), .1) !important;
                  border-radius: 0;
                  color: var(--ct-primary)
                }

                .card-bg-img {
                  background-size: cover;
                  background-position: right center;
                  background-repeat: no-repeat
                }

                .social-list-item {
                  height: 2rem;
                  width: 2rem;
                  line-height: calc(2rem - 4px);
                  display: block;
                  border: 2px solid var(--ct-gray-500);
                  border-radius: 50%;
                  color: var(--ct-gray-500)
                }

                .social-list-item:hover {
                  color: var(--ct-gray-600);
                  border-color: var(--ct-gray-600)
                }

                .horizontal-steps {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  position: relative;
                  -webkit-box-orient: horizontal;
                  -webkit-box-direction: normal;
                  -ms-flex-direction: row;
                  flex-direction: row;
                  -webkit-box-pack: justify;
                  -ms-flex-pack: justify;
                  justify-content: space-between;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  width: 100%
                }

                .horizontal-steps:before {
                  content: "";
                  display: block;
                  position: absolute;
                  width: 100%;
                  height: .2em;
                  background-color: var(--ct-border-color)
                }

                .horizontal-steps .process-line {
                  display: block;
                  position: absolute;
                  width: 50%;
                  height: .2em;
                  background-color: var(--ct-primary)
                }

                .horizontal-steps .horizontal-steps-content {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  position: relative;
                  -webkit-box-orient: horizontal;
                  -webkit-box-direction: normal;
                  -ms-flex-direction: row;
                  flex-direction: row;
                  -webkit-box-pack: justify;
                  -ms-flex-pack: justify;
                  justify-content: space-between;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  width: 100%
                }

                .horizontal-steps .horizontal-steps-content .step-item {
                  display: block;
                  position: relative;
                  bottom: calc(100% + 1em);
                  height: 8px;
                  width: 8px;
                  margin: 0 2em;
                  -webkit-box-sizing: content-box;
                  box-sizing: content-box;
                  color: var(--ct-primary);
                  background-color: currentColor;
                  border: .25em solid var(--ct-body-bg);
                  border-radius: 50%;
                  z-index: 5
                }

                .horizontal-steps .horizontal-steps-content .step-item:first-child {
                  margin-left: 0
                }

                .horizontal-steps .horizontal-steps-content .step-item:last-child {
                  margin-right: 0;
                  color: #47ad77
                }

                .horizontal-steps .horizontal-steps-content .step-item span {
                  position: absolute;
                  top: calc(100% + 1em);
                  left: 50%;
                  -webkit-transform: translateX(-50%);
                  transform: translateX(-50%);
                  white-space: nowrap;
                  color: var(--ct-gray-500)
                }

                .horizontal-steps .horizontal-steps-content .step-item.current:before {
                  content: "";
                  display: block;
                  position: absolute;
                  top: 48%;
                  left: 48%;
                  padding: 1em;
                  background-color: currentColor;
                  border-radius: 50%;
                  opacity: 0;
                  z-index: -1;
                  -webkit-animation-name: animation-steps-current;
                  animation-name: animation-steps-current;
                  -webkit-animation-duration: 2s;
                  animation-duration: 2s;
                  -webkit-animation-iteration-count: infinite;
                  animation-iteration-count: infinite;
                  -webkit-animation-timing-function: ease-out;
                  animation-timing-function: ease-out
                }

                .horizontal-steps .horizontal-steps-content .step-item.current span {
                  color: var(--ct-primary) !important
                }

                @-webkit-keyframes animation-steps-current {
                  from {
                    -webkit-transform: translate(-50%, -50%) scale(0);
                    transform: translate(-50%, -50%) scale(0);
                    opacity: 1
                  }
                  to {
                    -webkit-transform: translate(-50%, -50%) scale(1);
                    transform: translate(-50%, -50%) scale(1);
                    opacity: 0
                  }
                }

                @keyframes animation-steps-current {
                  from {
                    -webkit-transform: translate(-50%, -50%) scale(0);
                    transform: translate(-50%, -50%) scale(0);
                    opacity: 1
                  }
                  to {
                    -webkit-transform: translate(-50%, -50%) scale(1);
                    transform: translate(-50%, -50%) scale(1);
                    opacity: 0
                  }
                }




  </style>
</head>
<body class="authentication-bg position-relative">
  <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">

  </div>
  <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-4 col-lg-5">
          <div class="card">
            <div class="card-body p-4">

              <div class="text-center w-75 m-auto">
                <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                <p class="text-muted mb-4">You hospital Administration login portal.</p>
              </div>
              <?php if(!empty($error_message)): ?>
                <div class="alert alert-danger" role="alert"><?= $error_message ?></div>
              <?php endif; ?>
              <form class="loginn" action="http://localhost/lab/index.php/system/login" method="post" method="post">

                <div class="mb-3">
                  <label for="emailaddress" class="form-label">Username</label>
                  <input class="form-control" type="email" name="username" id="emailaddress" required="" placeholder="Enter your email">
                </div>

                <div class="mb-3">
                  <a href="auth-recoverpw.html" class="text-muted float-end fs-12">Forgot your password?</a>
                  <label for="password" class="form-label">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                    <div class="input-group-text" data-password="false">
                      <i class="fa fa-eye password-addon"></i> 
                    </div>
                  </div>
                </div>

                <div class="mb-3 mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                  </div>
                </div>

                <div class="mb-3 mb-0 text-center">
                  <button class="btn btn-primary" id="shri" type="submit"> Log In </button>
                </div>

              </form>
            </div> <!-- end card-body -->
          </div>
          <!-- end card -->

          <div class="row mt-3">
            <div class="col-12 text-center">
              <p class="text-muted bg-body">Do you want to automate your health institution? <a href="https://tez.live/front/pricing" class="text-muted ms-1 link-offset-3 text-decoration-underline"><b>Book Now</b></a></p>
            </div> <!-- end col -->
          </div>
          <!-- end row -->

        </div> <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end page -->
  
<script>

var element = document.getElementById("eye_change");
if (document.getElementById('password-addon')) {
  document.getElementById('password-addon').addEventListener('click', function () {
    var passwordInput = document.getElementById("password");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      element.classList.add("fa-eye-slash");
      element.classList.remove("fa-eye");
    } else {
      passwordInput.type = "password";
      element.classList.add("fa-eye");
      element.classList.remove("fa-eye-slash");
    }
  });
}

</script>

</body>
</html>

