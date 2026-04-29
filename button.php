<?
  $strSelf = "Button";
  $strParent = "Components";
  $strPrev = "Blockquote";
  $strNext = "Card";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Button</h1>
      <p>Buttons are the most common interactive element on a website, used to trigger actions, submit forms, or navigate users. Amazium provides simple, adaptable button styles to meet various design needs.</p>
      <hr>
      <h4>Usage</h4>
      <ul>
        <li>Primary Actions – Highlight the most important action on a page.</li>
        <li>Secondary Actions – Offer additional actions with less emphasis.</li>
        <li>Disabled States – Indicate actions that are unavailable.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default</h4>
      <p>The default button style is versatile and used in most cases where a primary action isn’t required.</p>
      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn">Type: Link</a>
            <button class="btn">Type: Button</button>
            <input class="btn" value="Type: Input" type="button">
            <input class="btn" value="Type: Submit" type="submit">
            <!-- <a href="#" class="btn"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path class="st0" d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg></a> -->
            <button class="btn" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn"&gt;...&lt;/a&gt;
&lt;button class="btn"&gt;...&lt;/button&gt;
&lt;input class="btn" value="..." type="button"&gt;
&lt;input class="btn" value="..." type="submit"&gt;
&lt;input class="btn" disabled value="..." type="button"&gt;</code></pre>
      </div>

      <hr>

      <h4>Appearance</h4>
      <p>Buttons can convey different meanings using color-coded styles:</p>
      <ul>
        <li>Info (btn--info) – Represents general actions.</li>
        <li>Negative (btn--negative) – Indicates a destructive or cautionary action.</li>
        <li>Positive (btn--positive) – Suggests confirmation or success.</li>
        <li>Warning (btn--warning) – Highlights cautionary actions.</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--info">Type: Link</a>
            <button class="btn btn--info">Type: Button</button>
            <input class="btn btn--info" value="Type: Input" type="button">
            <input class="btn btn--info" value="Type: Submit" type="submit">
            <button class="btn btn--info" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--info"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--negative">Type: Link</a>
            <button class="btn btn--negative">Type: Button</button>
            <input class="btn btn--negative" value="Type: Input" type="button">
            <input class="btn btn--negative" value="Type: Submit" type="submit">
            <button class="btn btn--negative" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--negative"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--positive">Type: Link</a>
            <button class="btn btn--positive">Type: Button</button>
            <input class="btn btn--positive" value="Type: Input" type="button">
            <input class="btn btn--positive" value="Type: Submit" type="submit">
            <button class="btn btn--positive" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--positive"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--warning">Type: Link</a>
            <button class="btn btn--warning">Type: Button</button>
            <input class="btn btn--warning" value="Type: Input" type="button">
            <input class="btn btn--warning" value="Type: Submit" type="submit">
            <button class="btn btn--warning" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--warning"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <hr>

      <h4>Secondary / Ghost Buttons</h4>
      <p>Ghost buttons are used for less prominent actions, offering a subtle alternative to traditional buttons. Ghost buttons can change color on hover using these classes:</p>
      <ul>
        <li>.btn--hoverInfo</li>
        <li>.btn--hoverNegative</li>
        <li>.btn--hoverPositive</li>
        <li>.btn--hoverWarning</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--ghost">Type: Link</a>
            <button class="btn btn--ghost">Type: Button</button>
            <input class="btn btn--ghost" value="Type: Input" type="button">
            <input class="btn btn--ghost" value="Type: Submit" type="submit">
            <!-- <a href="#" class="btn btn--ghost"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path class="st0" d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg></a> -->
            <button class="btn btn--ghost" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--ghost"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--ghost btn--hoverInfo">Type: Link</a>
            <button class="btn btn--ghost btn--hoverInfo">Type: Button</button>
            <input class="btn btn--ghost btn--hoverInfo" value="Type: Input" type="button">
            <input class="btn btn--ghost btn--hoverInfo" value="Type: Submit" type="submit">
            <button class="btn btn--ghost btn--hoverInfo" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--ghost btn--hoverInfo"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--ghost btn--hoverNegative">Type: Link</a>
            <button class="btn btn--ghost btn--hoverNegative">Type: Button</button>
            <input class="btn btn--ghost btn--hoverNegative" value="Type: Input" type="button">
            <input class="btn btn--ghost btn--hoverNegative" value="Type: Submit" type="submit">
            <button class="btn btn--ghost btn--hoverNegative" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--ghost btn--hoverNegative"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--ghost btn--hoverPositive">Type: Link</a>
            <button class="btn btn--ghost btn--hoverPositive">Type: Button</button>
            <input class="btn btn--ghost btn--hoverPositive" value="Type: Input" type="button">
            <input class="btn btn--ghost btn--hoverPositive" value="Type: Submit" type="submit">
            <button class="btn btn--ghost btn--hoverPositive" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--ghost btn--hoverPositive"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--ghost btn--hoverWarning">Type: Link</a>
            <button class="btn btn--ghost btn--hoverWarning">Type: Button</button>
            <input class="btn btn--ghost btn--hoverWarning" value="Type: Input" type="button">
            <input class="btn btn--ghost btn--hoverWarning" value="Type: Submit" type="submit">
            <button class="btn btn--ghost btn--hoverWarning" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--ghost btn--hoverWarning"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <hr>

      <h4>Button Sizes</h4>
      <p>Buttons are available in multiple sizes to fit different layouts and use cases.</p>
      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--sm">Type: Link</a>
            <button class="btn btn--sm">Type: Button</button>
            <input class="btn btn--sm" value="Type: Input" type="button">
            <input class="btn btn--sm" value="Type: Submit" type="submit">
            <button class="btn btn--sm" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--sm"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--md">Type: Link</a>
            <button class="btn btn--md">Type: Button</button>
            <input class="btn btn--md" value="Type: Input" type="button">
            <input class="btn btn--md" value="Type: Submit" type="submit">
            <button class="btn btn--md" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--md"&gt;...&lt;/a&gt;</code></pre>
      </div>

      <div class="wrapper">
        <div class="example">
          <div class="btnContainer">
            <a href="#" class="btn btn--lg">Type: Link</a>
            <button class="btn btn--lg">Type: Button</button>
            <input class="btn btn--lg" value="Type: Input" type="button">
            <input class="btn btn--lg" value="Type: Submit" type="submit">
            <button class="btn btn--lg" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--lg"&gt;...&lt;/a&gt;</code></pre>
      </div>



      <hr>

      <h4>Button Groups</h4>
      <p>...</p>
      <div class="wrapper">
        <div class="example">
          <div class="btn-group">
            <a href="#" class="btn">Type: Link</a>
            <button class="btn">Type: Button</button>
            <input class="btn" value="Type: Input" type="button">
            <input class="btn" value="Type: Submit" type="submit">
            <button class="btn" disabled>Disabled</button>
          </div>
        </div>
        <pre class="demo"><code>&lt;a href="#" class="btn btn--sm"&gt;...&lt;/a&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>