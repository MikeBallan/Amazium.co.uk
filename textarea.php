<?
  $strSelf = "Textarea";
  $strParent = "Form";
  $strPrev = "Switch";
  $strNext = "Text Field";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Textarea</h1>
      <p>Amazium provides a <strong>consistent, accessible styling</strong> for textareas, ensuring they look and behave the same across all browsers.</p>
      <ul>
        <li><strong>Full-width by default</strong> for better usability</li>
        <li><strong>Styled borders</strong> that highlight on focus</li>
        <li><strong>Supports placeholders and labels</strong> for clarity</li>
        <li><strong>Disabled and invalid states</strong> for error handling</li>
      </ul>
    </div>
  </div>
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Textarea</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">Label</label>
              <div class="input">
                <textarea cols="50" rows="4" name="comment" placeholder="Placeholder"></textarea>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input"&gt;
    &lt;textarea cols="50" rows="4" name="comment" placeholder="Placeholder"&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Disabled Textarea</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">Label</label>
              <div class="input">
                <textarea cols="50" rows="4" name="comment" placeholder="Placeholder" disabled></textarea>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input"&gt;
    &lt;textarea cols="50" rows="4" name="comment" placeholder="Placeholder" disabled&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Invalid Textarea</h4>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset class="invalid">
              <label for="text">Label</label>
              <div class="input">
                <textarea cols="50" rows="4" name="comment" placeholder="Placeholder"></textarea>
              </div>
              <p class="message">Sorry looks like you choose poorly.</p>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset class="invalid"&gt;
  &lt;label for="text"&gt;Label&lt;/label&gt;
  &lt;div class="input"&gt;
    &lt;textarea cols="50" rows="4" name="comment" placeholder="Placeholder"&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;p class="message">Sorry looks like you choose poorly.&lt;/p&gt;
&lt;/fieldset&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>