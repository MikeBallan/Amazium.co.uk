<?
  $strSelf = "Utilities";
  $strParent = "Foundations";
  $strPrev = "Typography";
  $strNext = "Grid";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Utilities</h1>
      <p>Utilities in Amazium are small, single-purpose classes used to apply common styling patterns quickly. They cover layout, typography, visibility, and resets, helping reduce the need for custom CSS in components.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Text Utilities</h4>
      <p>Text utilities control alignment, wrapping, and overflow behaviour for typography.</p>
      <table class="table--mobile table--rowHover table--demo" summary="Text Utilities">
        <thead>
          <tr>
            <th>Utility Class:</th>
            <th>Description:</th>
            <th>Example:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.txt--truncate</span></td>
            <td data-title="Description"><span class="cell-content">Truncates text with an ellipsis (...) when it overflows.</span></td>
            <td data-title="Example"><span class="cell-content"><p class="txt--truncate" style="max-width:80%;">I've seen things you people wouldn't believe. Attack ships on fire off the shoulder of Orion.</p></span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.txt--left</span></td>
            <td data-title="Description"><span class="cell-content">Aligns text to the left.</span></td>
            <td data-title="Example"><span class="cell-content"><p class="txt--left">Left-aligned text</p></span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.txt--right </span></td>
            <td data-title="Description"><span class="cell-content">Aligns text to the right.</span></td>
            <td data-title="Example"><span class="cell-content"><p class="txt--right">Right-aligned text</p></span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.txt--center</span></td>
            <td data-title="Description"><span class="cell-content">Centers the text horizontally.</span></td>
            <td data-title="Example"><span class="cell-content"><p class="txt--center">Centered text</p></span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.txt--justify</span></td>
            <td data-title="Description"><span class="cell-content">Justifies text for full-width alignment.</span></td>
            <td data-title="Example"><span class="cell-content"><p class="txt--justify">Justified text - I've seen things you people wouldn't believe. Attack ships on fire off the shoulder of Orion. I watched C-beams glitter in the dark near the Tannhäuser Gate. All those moments will be lost in time, like tears in rain.</p></span></td>
          </tr>
        </tbody>
      </table>
   
      <hr>
      <h4>Border Utilities</h4>
      <p>Border utilities control the corner radius of elements using the Amazium design tokens. These utilities map directly to the global radius scale to ensure consistent visual treatment across components.</p>
      <table class="table--mobile table--rowHover" summary="This is an example of a table">
        <thead>
          <tr>
            <th>Utility Class:</th>
            <th>Description:</th>
            <th>Example:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.radius--none</span>
            <td data-title="Description"><span class="cell-content">Removes border radius</span>
            <td data-title="Example"><span class="cell-content"><span class="demo-box radius--none"></span></span></td>
          </td>
            <tr>
            <td data-title="Utility Class"><span class="cell-content">.radius--sm</span>
            <td data-title="Description"><span class="cell-content">Applies small radius (4px)</span>
            <td data-title="Example"><span class="cell-content"><span class="demo-box radius--sm"></span></span></td>
          </td>
            <tr>
            <td data-title="Utility Class"><span class="cell-content">.radius--md</span>
            <td data-title="Description"><span class="cell-content">Applies medium radius (6px)</span>
            <td data-title="Example"><span class="cell-content"><span class="demo-box radius--md"></span></span></td>
          </td>
            <tr>
            <td data-title="Utility Class"><span class="cell-content">.radius--lg</span>
            <td data-title="Description"><span class="cell-content">Applies large radius (12px)</span>
            <td data-title="Example"><span class="cell-content"><span class="demo-box radius--lg"></span></span></td>
          </td>
            <tr>
            <td data-title="Utility Class"><span class="cell-content">.radius--xl</span>
            <td data-title="Description"><span class="cell-content">Applies extra large radius (24px)</span>
            <td data-title="Example"><span class="cell-content"><span class="demo-box radius--xl"></span></span></td>
          </td>
            <tr>
            <td data-title="Utility Class"><span class="cell-content">.radius--pill</span>
            <td data-title="Description"><span class="cell-content">Applies fully rounded pill radius (999px)</span>
            <td data-title="Example"><span class="cell-content"><span class="demo-box radius--pill"></span></span></td>
          </td>
            <tr>
            <td data-title="Utility Class"><span class="cell-content">.rounded</span>
            <td data-title="Description"><span class="cell-content">Alias for fully rounded pill radius </span>
            <td data-title="Example"><span class="cell-content"><span class="demo-box rounded"></span></span></td>
          </td>
        </tbody>
      </table>

      <hr>
      <h4>Spacing Resets</h4>
      <p>Reset utilities remove default browser spacing and styling.</p>
      <table class="table--mobile table--rowHover" summary="This is an example of a table">
        <thead>
          <tr>
            <th>Utility Class</th>
            <th>Description:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.reset--padding</span></td>
            <td data-title="Description"><span class="cell-content">Removes padding from an element.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.reset--margin</span></td>
            <td data-title="Description"><span class="cell-content">Removes margin from an element.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.reset--indent</span></td>
            <td data-title="Description"><span class="cell-content">Removes text indentation.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.reset--bullet</span></td>
            <td data-title="Description"><span class="cell-content">Removes bullet points from lists.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.reset--styling</span></td>
            <td data-title="Description"><span class="cell-content">Resets all default styling for an element.</span></td>
          </tr>
        </tbody>
      </table>

      <hr>
      <h4>Display Utilities</h4>
      <p>Display utilities control how elements are rendered in the layout.</p>
      <table class="table--mobile table--rowHover" summary="This is an example of a table">
        <thead>
          <tr>
            <th>Utility Class:</th>
            <th>Description:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.inline</span></td>
            <td data-title="Description"><span class="cell-content">Displays an element inline.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.block</span></td>
            <td data-title="Description"><span class="cell-content">Displays an element as a block.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.show</span></td>
            <td data-title="Description"><span class="cell-content">Forces an element to be visible.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.hidden</span></td>
            <td data-title="Description"><span class="cell-content">Hides an element while keeping its space in the layout.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.hide</span></td>
            <td data-title="Description"><span class="cell-content">Completely removes an element from the layout.</span></td>
          </tr>
        </tbody>
      </table>

      <hr>
      <h4>Visibility Utilities</h4>
      <p>Visibility utilities control whether elements are visible while maintaining or removing layout space.</p>
      <table class="table--mobile table--rowHover" summary="This is an example of a table">
        <thead>
          <tr>
            <th>Utility Class:</th>
            <th>Description:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.invisible</span></td>
            <td data-title="Description"><span class="cell-content">Hides an element while keeping it accessible to screen readers.</span></td>
          </tr>
          <tr>
            <td data-title="Utility Class"><span class="cell-content">.visible</span></td>
            <td data-title="Description"><span class="cell-content">Makes an element explicitly visible.</span></td>
          </tr>
        </tbody>
      </table>  

      <hr>
      <h4>Responsive Show & Hide Classes</h4>
      <p>Responsive visibility utilities control element visibility across breakpoints.</p>
      <ol class="cards">
        <li>
          <div class="card__body">
            .show--mobile
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icon icon--lg show--mobile"><path d="M280-40q-33 0-56.5-23.5T200-120v-720q0-33 23.5-56.5T280-920h400q33 0 56.5 23.5T760-840v720q0 33-23.5 56.5T680-40H280Zm0-200v120h400v-120H280Zm200 100q17 0 28.5-11.5T520-180q0-17-11.5-28.5T480-220q-17 0-28.5 11.5T440-180q0 17 11.5 28.5T480-140ZM280-320h400v-400H280v400Zm0-480h400v-40H280v40Zm0 560v120-120Zm0-560v-40 40Z"/></svg>
          </div>
        </li>
        <li>
          <div class="card__body">
            .show--tablet
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icon icon--lg show--tablet"><path d="M480-140q17 0 28.5-11.5T520-180q0-17-11.5-28.5T480-220q-17 0-28.5 11.5T440-180q0 17 11.5 28.5T480-140ZM200-40q-33 0-56.5-23.5T120-120v-720q0-33 23.5-56.5T200-920h560q33 0 56.5 23.5T840-840v720q0 33-23.5 56.5T760-40H200Zm0-200v120h560v-120H200Zm0-80h560v-400H200v400Zm0-480h560v-40H200v40Zm0 0v-40 40Zm0 560v120-120Z"/></svg>
          </div>
        </li>
        <li>
          <div class="card__body">
            .show--screen
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icon icon--lg show--screen"><path d="M80-160q-33 0-56.5-23.5T0-240h160q-33 0-56.5-23.5T80-320v-440q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v440q0 33-23.5 56.5T800-240h160q0 33-23.5 56.5T880-160H80Zm400-40q17 0 28.5-11.5T520-240q0-17-11.5-28.5T480-280q-17 0-28.5 11.5T440-240q0 17 11.5 28.5T480-200ZM160-320h640v-440H160v440Zm0 0v-440 440Z"/></svg>
          </div>
        </li>
        <li>
          <div class="card__body">
            .hide--mobile
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icon icon--lg hide--mobile"><path d="M280-40q-33 0-56.5-23.5T200-120v-720q0-33 23.5-56.5T280-920h400q33 0 56.5 23.5T760-840v720q0 33-23.5 56.5T680-40H280Zm0-200v120h400v-120H280Zm200 100q17 0 28.5-11.5T520-180q0-17-11.5-28.5T480-220q-17 0-28.5 11.5T440-180q0 17 11.5 28.5T480-140ZM280-320h400v-400H280v400Zm0-480h400v-40H280v40Zm0 560v120-120Zm0-560v-40 40Z"/></svg>
          </div>
        </li>
        <li>
          <div class="card__body">
            .hide--tablet
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icon icon--lg hide--tablet"><path d="M480-140q17 0 28.5-11.5T520-180q0-17-11.5-28.5T480-220q-17 0-28.5 11.5T440-180q0 17 11.5 28.5T480-140ZM200-40q-33 0-56.5-23.5T120-120v-720q0-33 23.5-56.5T200-920h560q33 0 56.5 23.5T840-840v720q0 33-23.5 56.5T760-40H200Zm0-200v120h560v-120H200Zm0-80h560v-400H200v400Zm0-480h560v-40H200v40Zm0 0v-40 40Zm0 560v120-120Z"/></svg>
          </div>
        </li>
        <li>
          <div class="card__body">
            .hide--screen
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icon icon--lg hide--screen"><path d="M80-160q-33 0-56.5-23.5T0-240h160q-33 0-56.5-23.5T80-320v-440q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v440q0 33-23.5 56.5T800-240h160q0 33-23.5 56.5T880-160H80Zm400-40q17 0 28.5-11.5T520-240q0-17-11.5-28.5T480-280q-17 0-28.5 11.5T440-240q0 17 11.5 28.5T480-200ZM160-320h640v-440H160v440Zm0 0v-440 440Z"/></svg>
          </div>
        </li>
      </ol>
      <hr>
      <h4>Best Practices</h4>
      <p>Utilities should be used for small, reusable styling adjustments. Avoid overusing utilities for complex layouts where components or custom CSS are more appropriate. Combine utilities where necessary to reduce duplication and maintain consistency.</p>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>