<?
  $strSelf = "Media Queries";
  $strParent = "Foundations";
  $strPrev = "Iconography";
  $strNext = "Typography";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Media Queries</h1>
      <p>Amazium uses a mobile-first responsive system to ensure layouts and components scale consistently across screen sizes. Styles are applied to smaller screens by default and progressively enhanced using min-width media queries.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Breakpoint Sizes</h4>
      <p>Breakpoints define the screen widths at which layouts and components adapt to larger viewports.</p>
      <table class="table--mobile table--rowHover" summary="This is an example of a table">
        <thead>
          <tr>
            <th>Breakpoint:</th>
            <th>Device Type:</th>
            <th>Min-Width:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-title="Breakpoint"><span class="cell-content">Mobile HD</span></td>
            <td data-title="Device Type"><span class="cell-content">Large smartphones</span></td>
            <td data-title="Min-Width"><span class="cell-content">420px</span></td>
          </tr>
          <tr>
            <td data-title="Breakpoint"><span class="cell-content">Tablet</span></td>
            <td data-title="Device Type"><span class="cell-content">Tablets & small laptops</span></td>
            <td data-title="Min-Width"><span class="cell-content">750px</span></td>
          </tr>
          <tr>
            <td data-title="Breakpoint"><span class="cell-content">Desktop</span></td>
            <td data-title="Device Type"><span class="cell-content">Standard desktops</span></td>
            <td data-title="Min-Width"><span class="cell-content">1000px</span></td>
          </tr>
          <tr>
            <td data-title="Breakpoint"><span class="cell-content">Desktop HD </span></td>
            <td data-title="Device Type"><span class="cell-content">Large desktop screens</span></td>
            <td data-title="Min-Width"><span class="cell-content">1200px</span></td>
          </tr>
        </tbody>
      </table>

      <hr>
      <h4>Usage</h4>
      <p>Breakpoints are used to adjust layout, spacing, and component behaviour as screen size increases. This includes grid changes, visibility utilities, and component scaling.</p>

      <hr>
      <h4>Media Queries</h4>
      <p>Media queries follow a consistent mobile-first pattern using min-width conditions.</p>
      <pre class="demo"><code>/* Mobile-first approach: Default styles apply to all devices */

/* Mobile HD - Applies from 420px onwards */
@media (min-width: 420px) {
  /* Styles for larger smartphones */
}

/* Tablet - Applies from 750px onwards */
@media (min-width: 750px) {
  /* Styles for tablets and small laptops */
}

/* Desktop - Applies from 1000px onwards */
@media (min-width: 1000px) {
  /* Styles for standard desktops */
}

/* Desktop HD - Applies from 1200px onwards */
@media (min-width: 1200px) {
  /* Styles for high-resolution desktops */
}</code></pre>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>