<?
  $strSelf = "Offsetting Grids";
  $strParent = "Grid";
  $strPrev = "Nested grid";
  $strNext = "Ordering Grids";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Offsetting</h1>
      <p>Amazium provides offset utilities that allow grid items to be shifted horizontally within the active grid without the need for empty spacer elements.</p>
      <hr>
      <h4>How it works:</h4>
      <p>Offsets are applied using .grid__item--offset-* classes, which shift an element to the right by a defined number of grid columns.</p>
      <p>Offsets respect the active grid system (12-column layout by default) and do not require manual empty columns or additional markup.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-8 grid__item--demo">Item</div>
    <div class="grid__item grid__item--span-2 grid__item--start-10 grid__item--demo">Item</div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-4 grid__item--demo">Item</div>
    <div class="grid__item grid__item--span-4 grid__item--start-10 grid__item--demo">Item</div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-7 grid__item--start-5 grid__item--demo">Item</div>
  </div>

  <div class="grid grid--fluid grid--dividerTop">
    <div class="grid__item grid__item--span-12">
      <pre class="demo"><code>&lt;div class="grid grid--6"&gt;
  &lt;div class="grid__item--8"&gt;...&lt;/div&gt;
  &lt;div class="grid__item--2 grid__item--start-10"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>

      <h4>Breakdown:</h4>
      <ol>
        <li>Offsets are based on the active grid column system</li>
        <li>They shift elements horizontally without requiring empty grid items</li>
        <li>They work in combination with .grid__item--span-*</li>
        <li>Offsets should align with the active grid mode (6, 8, or 12 columns)</li>
      </ol>
    </div>
  </div>
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <div class="message message--info">
        <p><strong>Use Case:</strong></p>
        <p>Offsets are useful for:</p>
        <ol>
          <li>Centering content within a grid</li>
          <li>Creating intentional whitespace</li>
          <li>Building asymmetric layouts</li>
          <li>Fine-tuning alignment without restructuring markup</ol>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>