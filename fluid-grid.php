<?
  $strSelf = "Fluid Grid";
  $strParent = "Grid";
  $strPrev = "Grid Basics";
  $strNext = "Nested grid";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Fluid / Responsive</h1>
      <p>The Amazium grid system supports a fluid mode that allows layouts to adapt to the full width of their container instead of using a fixed maximum width.</p>
      <hr>
      <h4>How it works:</h4>
      <ol>
        <li>The <code>.grid--fluid</code> modifier removes the fixed container constraint, allowing the grid to expand to <strong>100% width</strong> of its parent element.</li>
        <li>Columns remain based on the same span system but scale dynamically with the available viewport width.</li>
      </ol>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-4 grid__item--demo">Four</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Four</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Four</div>

    <div class="grid__item grid__item--span-3 grid__item--demo">Three</div>
    <div class="grid__item grid__item--span-6 grid__item--demo">Six</div>
    <div class="grid__item grid__item--span-3 grid__item--demo">Three</div>

    <div class="grid__item grid__item--span-2 grid__item--demo">Two</div>
    <div class="grid__item grid__item--span-8 grid__item--demo">Eight</div>
    <div class="grid__item grid__item--span-2 grid__item--demo">Two</div>
    <div class="grid__item grid__item--span-12 grid__item--demo">Twelve</div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <pre class="demo"><code>&lt;div class="grid grid--fluid"&gt;
  &lt;div class="grid__item grid__item--span-4"&gt;...&lt;/div&gt;
  &lt;div class="grid__item grid__item--span-6"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <div class="message message--info">
        <p><strong>Use Case:</strong></p>
        <p>Use .grid--fluid for layouts that need to stretch across the full width of the viewport or parent container, particularly in dashboards, marketing pages, or data-heavy interfaces.</p>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>