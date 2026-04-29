<?
  $strSelf = "Badge";
  $strParent = "Components";
  $strPrev = "Avatar";
  $strNext = "Blockquote";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Badge / Pills</h1>
      <p>Badges (or Pills) are used to convey <strong>dynamic information</strong> such as counts, status, or other secondary data. They can include labels, <strong>icons, or numbers</strong> and are typically used alongside text to <strong>enhance user understanding</strong> of key information.</p>
      <hr>
      <h4>Usage</h4>
      <p>Badges are ideal for:</p>
      <ul>
        <li><strong>Displaying status indicators</strong> – Show the status of a task, user, or item.</li>
        <li><strong>Count notifications</strong> – Display the number of unread messages, tasks, or notifications.</li>
        <li><strong>Supplementing labels</strong> – Add extra context to an item without overwhelming the layout.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default </h4>
      <p>A simple badge displaying only text, often used for status or count notifications. Add an icon to the badge for extra context or visual emphasis. Icons can help clarify the message.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill">Default</span>
            <span class="pill"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Default + icon</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>

      <h4>Size: Small</h4>
      <p>Small badges are compact, often used next to text or within tight spaces, like <strong>notification counters</strong> or <strong>inline indicators</strong>.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill pill--sm">Default</span>
            <span class="pill pill--sm"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Default + icon</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill pill--sm"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>

      <h4>Size: Large</h4>
      <p>Large badges are more prominent and used for primary status indicators. Ideal for <strong>profile views, task boards</strong>, or <strong>sidebars</strong>.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill pill--lg">Default</span>
            <span class="pill pill--lg"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Default + icon</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill pill--lg"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>
      <h4>Default: Solid</h4>
      <p>The solid badge design is the standard look, with a filled background. Ideal for general use.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill pill--default-solid"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Default: Solid</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill pill--default-solid"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>
      <h4>Ghost</h4>
      <p>The ghost badge has a transparent background with only the border and text visible. It’s subtle and used when minimal emphasis is required.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill pill--ghost"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Ghost</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill pill--ghost"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>
      <h4>Info: Solid</h4>
      <p>The info badge style is used to indicate neutral, informational status, typically showing background details that don’t require immediate action.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill pill--info"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Info</span>
            <span class="pill pill--info-solid"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Info: Solid</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill pill--info"&gt;...&lt;/span&gt;
&lt;span class="pill pill--info-solid"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>
      <h4>Negative: Solid</h4>
      <p>The negative badge design indicates negative statuses such as errors or issues. It is used to alert users to important problems.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill pill--negative"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Negative</span>
            <span class="pill pill--negative-solid"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Negative: Solid</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill pill--negative"&gt;...&lt;/span&gt;
&lt;span class="pill pill--negative-solid"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>
      <h4>Positive: Solid</h4>
      <p>The positive badge is used to indicate success or favorable outcomes, such as completion, approval, or success.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill pill--positive"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Positive</span>
            <span class="pill pill--positive-solid"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Positive: Solid</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill pill--positive"&gt;...&lt;/span&gt;
&lt;span class="pill pill--positive-solid"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>
      <h4>Warning: Solid</h4>
      <p>The warning badge indicates potential issues or conditions requiring attention but not necessarily errors. Often used for precautionary messages.</p>
      <div class="wrapper">
        <div class="example">
          <p>
            <span class="pill pill--warning"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Warning</span>
            <span class="pill pill--warning-solid"><svg class="icon" aria-hidden="true" width="64" height="64" viewBox="0 0 64 64"><path d="M0 4v56c0 2.2 1.8 4 4 4h56c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4zM5 9.2L27.8 32 5 54.8V9.2zM9.2 5h45.5L32 27.8 9.2 5zM32 36.2L54.8 59H9.2L32 36.2zM36.2 32L59 9.2v45.5L36.2 32z"></path></svg>Warning: Solid</span>
          </p>
        </div>
        <pre class="demo"><code>&lt;span class="pill pill--warning"&gt;...&lt;/span&gt;
&lt;span class="pill pill--warning-solid"&gt;...&lt;/span&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>