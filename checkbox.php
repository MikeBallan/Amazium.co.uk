<?
  $strSelf = "Checkbox";
  $strParent = "Form";
  $strPrev = "Form Basics";
  $strNext = "Label";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Checkboxes</h1>
      <p>Use checkboxes when seeking <strong>yes or no</strong> answers or when users <strong>can select multiple options</strong>.</p>
      <p>The <code>for</code> attribute is required to bind a custom checkbox to the input. Make sure the <strong>input’s</strong> <code>id</code> matches the <code>for</code> attribute in the <strong>label</strong>.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset>
              <label>Label</label>
              <div class="input input--checkbox">
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
  &lt;div class="input input--checkbox"&gt;
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

      <h4>Disabled Checkbox</h4>
      <p>To <strong>disable checkboxes</strong>, wrap them inside a <code>&lt;fieldset disabled&gt;</code> element. Disabled checkboxes <strong>cannot be interacted with</strong>.</p>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset disabled>
              <label>Label</label>
              <div class="input input--checkbox">
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
  &lt;div class="input input--checkbox"&gt;
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

      <h4>Invalid Checkbox</h4>
      <p>To highlight <strong>invalid selections</strong>, add the <code>.invalid</code> class to the fieldset.</p>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset class="invalid">
              <label>Label</label>
              <div class="input input--checkbox">
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
  &lt;div class="input input--checkbox"&gt;
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