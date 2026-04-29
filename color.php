<?
  $strSelf = "Color";
  $strParent = "Foundations";
  $strPrev = "BEM methodology";
  $strNext = "Iconography";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Color</h1>
      <p>Color provides the foundation for visual consistency in Amazium. A defined palette of brand, semantic, accent, and neutral colors is used to guide interactions, communicate status, and support UI elements such as buttons, forms, and alerts, with each color group serving a specific role within the system.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-2">
      <h4>Brand</h4>
      <p>Brand colors provide the core visual identity and establish a consistent foundation across all products and experiences.</p>
    </div>
    <div class="grid__item grid__item--span-10">
      <ol class="colors">
        <li class="color-brand-100">color-brand-100</li>
        <li class="color-brand-200">color-brand-200</li>
        <li class="color-brand-300">color-brand-300</li>
        <li class="color-brand-400">color-brand-400</li>
        <li class="color-brand-500">color-brand-500 /<br> --color-primary</li>
        <li class="color-brand-600">color-brand-600</li>
        <li class="color-brand-700">color-brand-700</li>
        <li class="color-brand-800">color-brand-800</li>
        <li class="color-brand-900">color-brand-900</li>
      </ol>
    </div>
  </div>

  <hr/>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-2">
      <h4>Accent</h4>
      <p>Accent colors are used to highlight key elements and secondary actions without overpowering the primary brand.</p>
    </div>
    <div class="grid__item grid__item--span-10">
      <ol class="colors">
        <li class="color-accent-100">color-accent-100</li>
        <li class="color-accent-300">color-accent-300</li>
        <li class="color-accent-500">color-accent-500 /<br> --color-secondary</li>
        <li class="color-accent-700">color-accent-700</li>
        <li class="color-accent-800">color-accent-800</li>
      </ol>
    </div>
  </div>

  <hr/>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-2">
      <h4>Neutral / UI</h4>
      <p>Neutral colors are used for backgrounds, borders, and text to provide structure, clarity, and visual balance.</p>
    </div>
    <div class="grid__item grid__item--span-10">
      <ol class="colors">
        <li class="color-ui-0">--color-ui-0 /<br> --color-snow</li>
        <li class="color-ui-100">--color-ui-100 /<br> --color-haze</li>
        <li class="color-ui-200">--color-ui-200</li>
        <li class="color-ui-300">--color-ui-300</li>
        <li class="color-ui-400">--color-ui-400 /<br> --color-mist</li>
        <li class="color-ui-500">--color-ui-500</li>
        <li class="color-ui-600">--color-ui-600</li>
        <li class="color-ui-700">--color-ui-700</li>
        <li class="color-ui-800">--color-ui-800</li>
        <li class="color-ui-900">--color-ui-900 /<br> --color-black</li>
      </ol>
    </div>
  </div>

  <hr/>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-2">
      <h4>Information</h4>
      <p>Information colors are used for interactive elements such as buttons, links, and inputs to guide user interactions.</p>
    </div>
    <div class="grid__item grid__item--span-10">
      <ol class="colors">
        <li class="color-info-100">color-info-100</li>
        <li class="color-info-300">color-info-300</li>
        <li class="color-info-500">color-info-500</li>
        <li class="color-info-700">color-info-700</li>
        <li class="color-info-800">color-info-800</li>
      </ol>
    </div>
  </div>

  <hr/>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-2">
      <h4>Positive</h4>
      <p>Positive colors are used to indicate successful actions, confirmations, or upward trends.</p>
    </div>
    <div class="grid__item grid__item--span-10">
      <ol class="colors">
        <li class="color-positive-100">color-positive-100</li>
        <li class="color-positive-300">color-positive-300</li>
        <li class="color-positive-500">color-positive-500</li>
        <li class="color-positive-700">color-positive-700</li>
        <li class="color-positive-800">color-positive-800</li>
      </ol>
    </div>
  </div>

  <hr/>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-2">
      <h4>Negative</h4>
      <p>Negative colors are used to represent errors, destructive actions, or critical states requiring attention.</p>
    </div>
    <div class="grid__item grid__item--span-10">
      <ol class="colors">
        <li class="color-negative-100">color-negative-100</li>
        <li class="color-negative-300">color-negative-300</li>
        <li class="color-negative-500">color-negative-500</li>
        <li class="color-negative-700">color-negative-700</li>
        <li class="color-negative-800">color-negative-800</li>
      </ol>
    </div>
  </div>

  <hr/>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-2">
      <h4>Warning</h4>
      <p>Warning colors are used to highlight cautionary actions, pending states, or prompts that require user attention.</p>
    </div>
    <div class="grid__item grid__item--span-10">
      <ol class="colors">
        <li class="color-warning-100">color-warning-100</li>
        <li class="color-warning-300">color-warning-300</li>
        <li class="color-warning-500">color-warning-500</li>
        <li class="color-warning-700">color-warning-700</li>
        <li class="color-warning-800">color-warning-800</li>
      </ol>
    </div>
  </div>

  <ol class="pagination">
    <li>
      <a href="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon icon--onLeft"><path d="M24 40.55 7.45 24 24 7.45 27.35 10.75 16.5 21.65H40.55V26.35H16.5L27.35 37.2Z"></path></svg>
        Foundations
      </a>
    </li>
    <li>
      <a href="">
        Foundations: Iconography
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon icon--onRight"><path d="M24 40.55 20.65 37.15 31.5 26.35H7.45V21.65H31.5L20.65 10.8L24 7.45L40.55 24Z"></path></svg>
      </a>
    </li>
  </ol>
</section>

<? include "includes/footer-alt.php"; ?>