<?
  $strSelf = "Avatar";
  $strParent = "Components";
  $strPrev = "Components";
  $strNext = "Badge";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Avatar</h1>
      <p>An <strong>avatar</strong> is a <strong>visual representation</strong> of a user or entity. It helps personalize interactions, making user interfaces more engaging and recognizable. Avatars can display <strong>initials, images, or both</strong>, ensuring identification even when an image is unavailable.</p>
      <hr>
      <h4>Usage</h4>
      <p>Avatars are commonly used in:</p>
      <ul>
        <li><strong>User profiles</strong> – Displaying a user's identity in comments, dashboards, or account settings.</li>
        <li><strong>Team lists & messaging</strong> – Identifying participants in discussions.</li>
        <li><strong>Navigation & dropdowns</strong> – Representing users or entities in UI elements like menus.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default (Initials Only)</h4>
      <p>When an avatar image is unavailable or not specified, <strong>initials are displayed</strong> as a fallback.</p>
      <div class="wrapper">
        <div class="example">
          <span class="avatar">
            <span class="avatar__initials">AS</span>
          </span>
        </div>
        <pre class="demo"><code>&lt;span class="avatar"&gt;
  &lt;span class="avatar__initials"&gt;AS&lt;/span&gt;
&lt;/span&gt;</code></pre>
      </div>
      <p><strong>Best for</strong>: Ensuring a user or entity is still represented even if no image is available.</p>

      <hr>

      <h4>Avatar with Source (Image + Initials)</h4>
      <p>When a profile image is provided, it is displayed <strong>above the initials</strong>, ensuring a <strong>consistent backup</strong> in case of image loading errors.</p>
      <div class="wrapper">
        <div class="example">
          <span class="avatar">
            <span class="avatar__initials">AS</span>
            <span class="avatar__img"><img src="images/avatar.png"></span>
          </span>
        </div>
        <pre class="demo"><code>&lt;span class="avatar"&gt;
  &lt;span class="avatar__initials"&gt;AS&lt;/span&gt;
  &lt;span class="avatar__img"&gt;
    &lt;img src="images/avatar.png"&gt;
  &lt;/span&gt;
&lt;/span&gt;</code></pre>
      </div>
      <p><strong>Best for</strong>: User profiles, personalized dashboards, and team collaborations.</p>

      <hr>

      <h4>Size: Small (40px)</h4>
      <p>Small avatars are ideal for <strong>compact spaces</strong> like:</p>
      <ul>
        <li>Text fields</li>
        <li>Dropdown menus</li>
        <li>Notification indicators</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <span class="avatar avatar--s">
            <span class="avatar__initials">AS</span>
            <span class="avatar__img"><img src="images/avatar.png"></span>
          </span>
        </div>
        <pre class="demo"><code>&lt;span class="avatar avatar--s"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>

      <h4>Size: Large (Profile & Entity Representation)</h4>
      <p>Large avatars are <strong>prominent and visually distinct</strong>, often used for:</p>
      <ul>
        <li><strong>Profile headers</strong> in user account settings</li>
        <li><strong>Main entity identifiers</strong> (e.g., Jira projects, Confluence spaces)</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <span class="avatar avatar--l">
            <span class="avatar__initials">AS</span>
            <span class="avatar__img"><img src="images/avatar.png"></span>
          </span>
        </div>
        <pre class="demo"><code>&lt;span class="avatar avatar--l"&gt;...&lt;/span&gt;</code></pre>
      </div>

      <hr>
      <h4>Best Practices</h4>
      <ul>
        <li><strong>Fallback Handling</strong> – Always include initials for cases where images fail to load.</li>
        <li><strong>Context-Appropriate Sizing</strong> – Use <strong>small avatars</strong> for inline interactions and <strong>large avatars</strong> for profile representations.</li>
        <li><strong>Consistent Shape</strong> – Maintain <strong>circular avatars</strong> for users and <strong>square avatars</strong> for entities.</li>
      </ul>
      <p>Using avatars helps create a <strong>recognizable and user-friendly experience</strong> across all interfaces. Try implementing different sizes and sources to best fit your design needs!</p>

    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>