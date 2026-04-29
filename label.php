<?
  $strSelf = "Label";
  $strParent = "Form";
  $strPrev = "Checkbox";
  $strNext = "Radio";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Label & Subtext</h1>
      <p>Effective labeling helps users understand <strong>what information</strong> to enter into a text input.</p>
      <p><strong>Text fields should always have a label</strong>. In <strong>rare cases</strong>, where the context makes the label unnecessary, consult an accessibility expert before using a label-less design.
    </div>
  </div>
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Label</h4>
      <p>A simple <code>label</code> should always be associated with an input using the <code>for</code> attribute.</p>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">Label</label>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Label & Subtext</h4>
      <p>For <strong>additional guidance</strong>, use <strong>subtext</strong> below the label to provide <strong>extra context</strong>.</p>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">Label</label>
              <p class="txt--subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;p class="txt--subtext"&gt;...&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Invalid</h4>
      <p>To indicate <strong>errors or invalid input</strong>, apply the <code>.invalid</code> class to the fieldset and <strong>ensure the subtext provides useful feedback</strong>.</p>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset class="invalid">
              <label for="text">Label</label>
              <p class="txt--subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;p class="txt--subtext"&gt;...&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>