<?
  $strSelf = "Select";
  $strParent = "Form";
  $strPrev = "Radio Boxed";
  $strNext = "Switch";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Select</h1>
      <p>Amazium ensures that <strong>select dropdowns</strong> have a <strong>consistent look and feel across all browsers</strong>. By default, native select elements render differently on various operating systems and browsers. To address this, Amazium applies <strong>global styles</strong> that:</p>
       <ul>
        <li>Remove the default system styling</li>
        <li>Ensure uniform padding, borders, and font size</li>
        <li>Add a custom dropdown arrow for a consistent UI</li>
        <li>Provide visual feedback on focus and invalid states</li>
      </ul>
      <p>To style a <code>&lt;select&gt;</code> dropdown, simply <strong>wrap it in a container div</strong> with the class <code>.input--select</code>.</select>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Select</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">Label</label>
              <div class="input input--select">
                <select>
                  <option selected="" disabled="">Please select...</option>
                  <option value="">...</option>
                  <option value="">...</option>
                </select>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input input--select"&gt;
    &lt;select&gt;
      &lt;option selected disabled&gt;Please select...&lt;/option&gt;
      &lt;option value=""&gt;...&lt;/option&gt;
      &lt;option value=""&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Disabled Select</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">Label</label>
              <div class="input input--select">
                <select disabled>
                  <option selected="" disabled="">Please select...</option>
                  <option value="">...</option>
                  <option value="">...</option>
                </select>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input input--select"&gt;
    &lt;select disabled&gt;
      &lt;option selected disabled&gt;Please select...&lt;/option&gt;
      &lt;option value=""&gt;...&lt;/option&gt;
      &lt;option value=""&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Invalid Select</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset class="invalid">
              <label for="text">Label</label>
              <div class="input input--select">
                <select>
                  <option selected="" disabled="">Please select...</option>
                  <option value="">...</option>
                  <option value="">...</option>
                </select>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset class="invalid"&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input input--select"&gt;
    &lt;select disabled&gt;
      &lt;option selected disabled&gt;Please select...&lt;/option&gt;
      &lt;option value=""&gt;...&lt;/option&gt;
      &lt;option value=""&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>