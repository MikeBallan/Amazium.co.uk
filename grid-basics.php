<?
  $strSelf = "Grid Basics";
  $strParent = "Grid";
  $strPrev = "Grid";
  $strNext = "Fluid Grid";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Getting started</h1>
      <p>Amazium’s grid system is based on a 12-column layout by default, but it also supports alternate column modes for more flexible layout structures.</p>
      <p>By default, grid items use a 12-column system where layout is defined using span utilities from <code>.grid__item--span-1</code> to <code>.grid__item--span-12</code>.</p>
    </div>
  </div>

  <div class="grid">
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Four</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Four</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Four</div>
    <div class="grid__item grid__item--span-3 grid__item--demo">Three</div>
    <div class="grid__item grid__item--span-6 grid__item--demo">Six</div>
    <div class="grid__item grid__item--span-3 grid__item--demo">Three</div>
    <div class="grid__item grid__item--span-2 grid__item--demo">Two</div>
    <div class="grid__item grid__item--span-8 grid__item--demo">Eight</div>
    <div class="grid__item grid__item--span-2 grid__item--demo">Two</div>
    <div class="grid__item grid__item--span-3 grid__item--demo">Three</div>
    <div class="grid__item grid__item--span-9 grid__item--demo">Nine</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Four</div>
    <div class="grid__item grid__item--span-8 grid__item--demo">Eight</div>
    <div class="grid__item grid__item--span-5 grid__item--demo">Five</div>
    <div class="grid__item grid__item--span-7 grid__item--demo">Seven</div>
    <div class="grid__item grid__item--span-6 grid__item--demo">Six</div>
    <div class="grid__item grid__item--span-6 grid__item--demo">Six</div>
    <div class="grid__item grid__item--span-12 grid__item--demo">Twelve</div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <pre class="demo"><code>&lt;div class="grid"&gt;
  &lt;div class="grid__item grid__item--span-4"&gt;...&lt;/div&gt;
  &lt;div class="grid__item grid__item--span-8"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
      <p><strong>Tip:</strong> Grid columns should typically total 12 per row to maintain balanced layout alignment.</p>

      <hr>
      <h4>Alternative column systems</h4>
      <p>The grid system can be modified using column count modifiers to support different layout structures such as 6-column or 8-column grids.</p>
    </div>
  </div>

  <div class="grid grid--6">
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-1 grid__item--demo">One</div>
    <div class="grid__item grid__item--span-2 grid__item--demo">Two</div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <pre class="demo"><code>&lt;div class="grid grid--6"&gt;
  &lt;div class="grid__item grid__item--span-1"&gt;...&lt;/div&gt;
  &lt;div class="grid__item grid__item--span-5"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
    </div>
  </div>
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <div class="message message--info">
        <p><strong>Use Case:</strong></p>
        <p> If your design only needs 6 columns instead of 12, this approach keeps things simpler and more structured.</p>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>