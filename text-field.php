<?
  $strSelf = "Text Field";
  $strParent = "Form";
  $strPrev = "Textarea";
  $strNext = "Toggle";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Text field</h1>
      <p>Amazium ensures text fields are <strong>uniform, accessible, and easy to use</strong> across all browsers.</p>
      <ul>
        <li><strong>Full-width by default</strong> for better responsiveness</li>
        <li><strong>Clear labels and placeholders</strong> for guidance</li>
        <li><strong>Styled focus states</strong> to enhance visibility</li>
        <li><strong>Disabled and error states</strong> for better UX</li>
    </div>
  </div>
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Text Field</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">Label</label>
              <div class="input">
                <input type="text" name="text" id="text" placeholder="Input">
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input"&gt;
    &lt;input type="text" name="text" id="text" placeholder="Input" /&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Disabled Text Field</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">Label</label>
              <div class="input">
                <input type="text" name="text" id="text" placeholder="Input" disabled>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input"&gt;
    &lt;input type="text" name="text" id="text" placeholder="Input" /&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Invalid Text Field</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset class="invalid">
              <label for="text">Label</label>
              <div class="input">
                <input type="text" name="text" id="text" placeholder="Input">
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset class="invalid"&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input"&gt;
    &lt;input type="text" name="text" id="text" placeholder="Input" /&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>