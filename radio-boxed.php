<?
  $strSelf = "Radio Boxed";
  $strParent = "Form";
  $strConnection = "Radio";
  $strPrev = "Radio";
  $strNext = "Select";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Radio: Boxed</h1>
      <p>The <strong>boxed radio buttons</strong> work exactly like standard radio buttons but have an <strong>inline visual style</strong> for better distinction.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Boxed Radio</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset>
              <label>Label</label>
              <div class="input input--radio input--boxed">
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
  &lt;div class="input input--radioBoxed"&gt;
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

      <h4>Disabled Boxed Radio</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset disabled>
              <label>Label</label>
              <div class="input input--radio input--boxed">
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
  &lt;div class="input input--radioBoxed"&gt;
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

      <h4>Invalid Boxed Radio</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset class="invalid">
              <label>Label</label>
              <div class="input input--radio input--boxed">
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
  &lt;div class="input input--radioBoxed"&gt;
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

      <h4>Boxed Radio - Stacked</h4>
      <div class="wrapper">
        <div class="example">
          <form>
            <fieldset>
              <label>Label</label>
              <div class="input input--radio input--boxed input--stacked">
                <span>
                  <input type="radio" checked="checked" name="radio" id="radio7">
                  <label for="radio7">
                    <span>Radio - Checked</span>
                  </label>
                </span>
                <span>
                  <input type="radio" name="radio" id="radio8">
                  <label for="radio8">
                    <span>Radio - Unchecked</span>
                  </label>
                </span>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset class="invalid"&gt;
  &lt;div class="input input--radioBoxed"&gt;
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