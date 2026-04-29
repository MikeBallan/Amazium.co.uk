<?
  $strSelf = "Ordering Grids";
  $strParent = "Grid";
  $strPrev = "Offsetting Grids";
  $strNext = "Form";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Ordering Columns</h1>
      <p>There are times when you need to rearrange grid items dynamically based on different screen sizes. Amazium provides order modifier classes to help shift items to the start or end of a grid, both on desktop and mobile.</p>
      <hr>
      <h4>Available Classes:</h4>
      <ul>
        <li><code>.grid__item--alignStart</code> → Moves the item to the <strong>first position</strong> (all devices).</li>
        <li><code>.grid__item--alignEnd</code> → Moves the item to the <strong>last position</strong> (all devices).</li>
        <li><code>.grid__item--alignStartMobile</code> → Moves the item to the <strong>first position</strong> on <strong>mobile screens</strong>.</li>
        <li><code>.grid__item--alignEndMobile</code> → Moves the item to the <strong>last position</strong> on <strong>mobile screens</strong>.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-4 grid__item--alignEnd grid__item--demo">First, but last <code>.item--alignEnd</code></div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Second</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Third</div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-4 grid__item--demo">First</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Second</div>
    <div class="grid__item grid__item--span-4 grid__item--alignStart grid__item--demo">Third, but first <code>.item--alignStart</code></div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-4 grid__item--alignEndMobile grid__item--demo">First, but last on mobile <code>.item--alignEndMobile</code></div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Second</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Third</div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-4 grid__item--demo">First</div>
    <div class="grid__item grid__item--span-4 grid__item--demo">Second</div>
    <div class="grid__item grid__item--span-4 grid__item--alignStartMobile grid__item--demo">Third, but first on mobile <code>.item--alignStartMobile</code></div>
  </div>

  <div class="grid grid--fluid grid--dividerTop">
    <div class="grid__item grid__item--span-12">
      <h4>Breakdown:</h4>
      <ul>
        <li>The <strong>first item</strong> (with <code>.grid__item--alignEnd</code>) moves to the <strong>end</strong> of the grid <strong>on all devices</strong>.</li>
        <li>The <strong>third item</strong> (with <code>.grid__item--alignStartMobile</code>) moves to the <strong>start only on mobile screens</strong>.</li>
        <li>The second item stays in its default position.</li>
      </ul>
    </div>
  </div>
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <div class="message message--info">
        <p><strong>Why use These?</strong></p>
        <p>These classes allow you to <strong>adjust layouts for different screen sizes</strong> without modifying the HTML structure, making it <strong>easier to maintain</strong> and ensuring a <strong>responsive, flexible grid</strong>.</p>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>