<?
  $strSelf = "Toggle";
  $strParent = "Form";
  $strConnection = "Radio";
  $strPrev = "Text Field";
  $strNext = "Components";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Toggle (Restyled Radio Button)</h1>
      <p>A <strong>toggle</strong> is a visually enhanced <strong>radio button</strong> that allows users to select a <strong>single option</strong> from a set. Amazium applies custom styling to ensure consistent appearance across all browsers.</p>
      <ul>
        <li><strong>Modern switch-like styling</strong> for better UX</li>
        <li><strong>Supports enabled, disabled, and invalid states</strong></li>
        <li><strong>Fully accessible with keyboard navigation</strong></li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Toggle</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset>
              <label>Label</label>
              <div class="input input--toggle">
                <span>
                  <input type="radio" checked="checked" name="radio1" id="radio1">
                  <label for="radio1">Radio - Checked</label>
                </span>
                <span>
                  <input type="radio" name="radio1" id="radio2">
                  <label for="radio2">Radio - Unchecked</label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;div class="input input--toggle"&gt;
    &lt;span&gt;
      &lt;input type="radio" checked="checked" name="radio" id="radio1"&gt;
      &lt;label for="radio1"&gt;
        &lt;span&gt;Radio - Checked&lt;/span&gt;
      &lt;/label&gt;
    &lt;/span&gt;
    &lt;span&gt;
      &lt;input type="radio" name="radio" id="radio2"&gt;
      &lt;label for="radio2"&gt;
        &lt;span&gt;Radio - Unchecked&lt;/span&gt;
      &lt;/label&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;p class="message"&gt;Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Disabled Toggle</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset disabled>
              <label>Label</label>
              <div class="input input--toggle">
                <span>
                  <input type="radio" checked="checked" name="radio10" id="radio10">
                  <label for="radio10">Radio - Checked</label>
                </span>
                <span>
                  <input type="radio" name="radio10" id="radio20">
                  <label for="radio20">Radio - Unchecked</label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset disabled&gt;
  &lt;div class="input input--toggle"&gt;
    &lt;span&gt;
      &lt;input type="radio" checked="checked" name="radio" id="radio1"&gt;
      &lt;label for="radio1"&gt;
        &lt;span&gt;Radio - Checked&lt;/span&gt;
      &lt;/label&gt;
    &lt;/span&gt;
    &lt;span&gt;
      &lt;input type="radio" name="radio" id="radio2"&gt;
      &lt;label for="radio2"&gt;
        &lt;span&gt;Radio - Unchecked&lt;/span&gt;
      &lt;/label&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;p class="message"&gt;Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Invalid Toggle</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset class="invalid">
              <label>Label</label>
              <div class="input input--toggle">
                <span>
                  <input type="radio" checked="checked" name="radio100" id="radio100">
                  <label for="radio100">Radio - Checked</label>
                </span>
                <span>
                  <input type="radio" name="radio100" id="radio200">
                  <label for="radio200">Radio - Unchecked</label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset class="invalid"&gt;
  &lt;div class="input input--toggle"&gt;
    &lt;span&gt;
      &lt;input type="radio" checked="checked" name="radio" id="radio1"&gt;
      &lt;label for="radio1"&gt;
        &lt;span&gt;Radio - Checked&lt;/span&gt;
      &lt;/label&gt;
    &lt;/span&gt;
    &lt;span&gt;
      &lt;input type="radio" name="radio" id="radio2"&gt;
      &lt;label for="radio2"&gt;
        &lt;span&gt;Radio - Unchecked&lt;/span&gt;
      &lt;/label&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;p class="message"&gt;Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>