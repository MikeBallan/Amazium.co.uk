<?
  $strSelf = "Nested grids";
  $strParent = "Grid";
  $strPrev = "Fluid Grid";
  $strNext = "Offsetting Grids";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Nested grids</h1>
      <p>Amazium supports nested grid structures, allowing grids to be placed inside grid items. This enables complex layouts without requiring additional CSS or custom grid definitions.</p>
      <hr>
      <h4>How it works:</h4>
      <p>Each .grid__item can contain its own .grid, which operates independently from its parent grid while maintaining the same grid system rules.</p>
      <ul>
        <li>Nested grids are self-contained layout systems</li>
        <li>Each grid maintains its own column structure</li>
        <li>Spacing and alignment are inherited from the parent container unless overridden</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12 grid__item--demo">
      Twelve
      <div class="grid grid--fluid">
        <div class="grid__item grid__item--span-4 grid__item--demo">Four</div>
        <div class="grid__item grid__item--span-8 grid__item--demo">
          Eight
          <div class="grid grid--fluid">
            <div class="grid__item grid__item--span-6 grid__item--demo">Six</div>
            <div class="grid__item grid__item--span-6 grid__item--demo">Six</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <pre class="demo"><code>&lt;div class="grid"&gt;
  &lt;div class="grid__item grid__item--span-12"&gt;
    ...
    &lt;div class="grid"&gt;
      &lt;div class="grid__item grid__item--span-4"&gt;...&lt;/div&gt;
      &lt;div class="grid__item grid__item--span-8"&gt;
        ...
        &lt;div class="grid"&gt;
          &lt;div class="grid__item grid__item--span-6"&gt;...&lt;/div&gt;
          &lt;div class="grid__item grid__item--span-6"&gt;...&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
    </div>
  </div>
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <div class="message message--info">
        <p><strong>Use Case:</strong></p>
        <p>Nested grids are ideal for complex UI structures such as dashboards, forms, and content-heavy layouts where sections require their own internal column structure.</p>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>