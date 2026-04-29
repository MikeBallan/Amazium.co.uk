<?
  $strSelf = "Switch";
  $strParent = "Form";
  $strConnection = "Checkbox";
  $strPrev = "Select";
  $strNext = "Textarea";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Switch (Restyled Checkbox)</h1>
      <p>Amazium provides a <strong>custom-styled switch</strong>, which is simply a <strong>checkbox redesigned to function as a toggle switch</strong>. This makes it easy for users to enable or disable options with a <strong>modern, interactive UI</strong>.</p>
      <ul>
        <li>Styled to resemble a traditional on/off switch</li>
        <li>Works identically to a checkbox under the hood</li>
        <li>Provides clear feedback on enabled/disabled states</li>
        <li>Accessible and keyboard-navigable</li>
      </ul>
      <p>To implement a switch, just use a <strong>checkbox input</strong> inside a div with the class <code>.input--switch</code>.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Switch</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset>
              <label>Label</label>
              <div class="input input--switch">
                <span>
                  <input type="checkbox" tabindex="" name="checkbox1" id="checkbox1" checked>
                  <label for="checkbox1">Checkbox 1</label>
                </span>

                <span>
                  <input type="checkbox" tabindex="" name="checkbox2" id="checkbox2">
                  <label for="checkbox2">Checkbox 2</label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;div class="input input--switch"&gt;
    &lt;span&gt;
      &lt;input type="checkbox" tabindex="" name="checkbox1" id="checkbox1" checked&gt;
      &lt;label for="checkbox1"&gt;Checkbox 1&lt;/label&gt;
    &lt;/span&gt;

    &lt;span&gt;
      &lt;input type="checkbox" tabindex="" name="checkbox2" id="checkbox2"&gt;
      &lt;label for="checkbox2"&gt;Checkbox 2&lt;/label&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;p class="message"&gt;Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Disabled Switch</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset disabled>
              <label>Label</label>
              <div class="input input--switch">
                <span>
                  <input type="checkbox" tabindex="" name="checkbox3" id="checkbox3" checked>
                  <label for="checkbox3">Checkbox 1</label>
                </span>

                <span>
                  <input type="checkbox" tabindex="" name="checkbox4" id="checkbox4">
                  <label for="checkbox4">Checkbox 2</label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset disabled&gt;
  &lt;div class="input input--switch"&gt;
    &lt;span&gt;
      &lt;input type="checkbox" tabindex="" name="checkbox1" id="checkbox1" checked&gt;
      &lt;label for="checkbox1"&gt;Checkbox 1&lt;/label&gt;
    &lt;/span&gt;

    &lt;span&gt;
      &lt;input type="checkbox" tabindex="" name="checkbox2" id="checkbox2"&gt;
      &lt;label for="checkbox2"&gt;Checkbox 2&lt;/label&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;p class="message"&gt;Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Invalid Switch</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset class="invalid">
              <label>Label</label>
              <div class="input input--switch">
                <span>
                  <input type="checkbox" tabindex="" name="checkbox5" id="checkbox5" checked>
                  <label for="checkbox5">Checkbox 1</label>
                </span>

                <span>
                  <input type="checkbox" tabindex="" name="checkbox6" id="checkbox6">
                  <label for="checkbox6">Checkbox 2</label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset class="invalid"&gt;
  &lt;div class="input input--switch"&gt;
    &lt;span&gt;
      &lt;input type="checkbox" tabindex="" name="checkbox1" id="checkbox1" checked&gt;
      &lt;label for="checkbox1"&gt;Checkbox 1&lt;/label&gt;
    &lt;/span&gt;

    &lt;span&gt;
      &lt;input type="checkbox" tabindex="" name="checkbox2" id="checkbox2"&gt;
      &lt;label for="checkbox2"&gt;Checkbox 2&lt;/label&gt;
    &lt;/span&gt;
  &lt;/div&gt;
  &lt;p class="message"&gt;Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>