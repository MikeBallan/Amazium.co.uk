<?
  $strSelf = "Typography";
  $strParent = "Foundations";
  $strPrev = "Media Queries";
  $strNext = "Utilities";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Typography</h1>
      <p>Typography defines the visual hierarchy and readability of content in Amazium. A consistent type scale and set of design tokens are used to control font size, line height, and spacing across all UI elements.</p>
      <p>Typography in Amazium is built using scalable units and design tokens, ensuring consistent sizing and responsive behaviour across different screen sizes.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h3>Custom Fonts</h3>
      <p>Typography in Amazium is controlled using the `@font-face` declarations defined at the top of the typography stylesheet. These font families are applied globally to body and heading styles using design tokens.</p>
      <p>To change the font across the system, update the font files and `font-family` values within the `@font-face` declarations, then assign them to the appropriate text roles.</p>
      <pre class="demo"><code>@font-face {
  font-family:'txt-body';
  src:url('../font/your-font-regular.woff') format('woff');
  font-weight:400;
  font-style:normal;
  font-display:swap;
}

@font-face {
  font-family:'txt-title';
  src:url('../font/your-font-heading.woff') format('woff');
  font-weight:400;
  font-style:normal;
  font-display:swap;
}</code></pre>

      <hr>
      <h3>Headings</h3>
      <p>Heading styles are available for both semantic HTML elements (`h1`–`h6`) and utility classes (`.h1`–`.h6`). This allows visual styles to be applied independently of document structure when needed.</p>

      <h1>H1 heading: 40px/48px</h1>
      <h2>H2 heading: 36px/44px</h2>
      <h3>H3 heading: 32px/40px</h3>
      <h4>H4 heading: 28px/36px</h4>
      <h5>H5 heading: 24px/32px</h5>
      <h6>H6 heading: 20px/28px</h6>
      <p>Body Copy: 16px/24px</p>
      <p><small>Small Label: 12px/16px</small></p>

      <hr>
      <h3>Paragraph Behaviour</h3>
      <p>Paragraphs in Amazium are designed to optimise readability across all screen sizes. Line length, wrapping behaviour, and spacing are controlled to maintain comfortable reading rhythm and visual consistency.</p>
      <p>Paragraph text uses a maximum line length and controlled wrapping to improve legibility and reduce visual fatigue on larger screens.</p>

      <pre class="demo"><code>p {
  max-width:65ch;
  text-wrap:pretty;
}</code></pre>
      <p>The `max-width` property limits line length for optimal readability, while `text-wrap: pretty` improves line breaking to avoid awkward spacing and improve overall text flow.</p>
      <p>On larger screens, paragraph width remains constrained to maintain readability rather than expanding with the container.</p>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>