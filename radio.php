<?
  $strSelf = "Radio";
  $strParent = "Form";
  $strPrev = "Label";
  $strNext = "Radio Boxed";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Radio</h1>
      <p>Radio buttons allow users to <strong>select only one option</strong> from a group. Unlike checkboxes, selecting one <strong>automatically deselects</strong> any previously selected option in the same group.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Radio</h4>
      <p>A simple <strong>radio button group</strong> where one option is <strong>checked by default</strong>.</p>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset>
              <label>Label</label>
              <div class="input input--toggle">
                <span>
                  <input type="radio" checked="checked" name="radio" id="radio1">
                  <label for="radio1">
                    <span>Radio - Checked</span>
                  </label>
                </span>
                <span>
                  <input type="radio" name="radio" id="radio2">
                  <label for="radio2">
                    <span>Radio - Unchecked</span>
                  </label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;div class="input input--radio"&gt;
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

      <h4>Disabled Radio</h4>
      <p>A <strong>disabled</strong> radio button group prevents users from interacting with the options.</p>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset disabled>
              <label>Label</label>
              <div class="input input--radio">
                <span>
                  <input type="radio" checked="checked" name="radio" id="radio3">
                  <label for="radio3">
                    <span>Radio - Checked</span>
                  </label>
                </span>
                <span>
                  <input type="radio" name="radio" id="radio3">
                  <label for="radio3">
                    <span>Radio - Unchecked</span>
                  </label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset disabled&gt;
  &lt;div class="input input--radio"&gt;
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

      <h4>Invalid Radio</h4>
      <p>To <strong>highlight an error</strong>, use the <code>.invalid</code> class to visually indicate the issue.</p>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset class="invalid">
              <label>Label</label>
              <div class="input input--radio">
                <span>
                  <input type="radio" checked="checked" name="radio" id="radio5">
                  <label for="radio5">
                    <span>Radio - Checked</span>
                  </label>
                </span>
                <span>
                  <input type="radio" name="radio" id="radio6">
                  <label for="radio6">
                    <span>Radio - Unchecked</span>
                  </label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset class="invalid"&gt;
  &lt;div class="input input--radio"&gt;
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