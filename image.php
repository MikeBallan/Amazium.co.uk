<?
  $strSelf = "Image";
  $strParent = "Components";
  $strPrev = "Table";
  $strNext = "List";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Image</h1>
      <p>Images play an essential role in web design, enhancing content visually. Amazium provides simple classes for <strong>floating images</strong> and <strong>responsive scaling</strong> to ensure they adapt well to different layouts and screen sizes.</p>
      <ul>
        <li><strong>Float Support</strong> – Align images to the left or right with automatic margins.</li>
        <li><strong>Full-Width Scaling</strong> – Make images fully responsive to their container.</li>
        <li><strong>Media Support</strong> – Easily make videos responsive with a wrapper class.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Floating Images</h4>
      <p>You can float an image <strong>left</strong> or <strong>right</strong> using <code>img--left</code> or <code>img--right</code>. The appropriate margins are applied automatically to maintain spacing.</p>

      <hr>
      <h4>Image on Left</h4>
      <p>The image floats <strong>left</strong>, and the text wraps around it on the right.</p>
      <div class="wrapper">
        <div class="example">
          <p><img src="images/owly-slide-01.png" width="250" border="0" alt="blank image" class="img--left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        </div>
        <pre class="demo"><code>&lt;img src="" class="img--left"&gt;</code></pre>
      </div>

      <hr>

      <h4>Image on Right</h4>
      <p>The image floats <strong>right</strong>, and the text wraps around it on the left.</p>
      <div class="wrapper">
        <div class="example">
          <p><img src="images/owly-slide-02.png" width="250" border="0" alt="blank image" class="img--right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        </div>
        <pre class="demo"><code>&lt;img src="" class="img--right"&gt;</code></pre>
      </div>

      <hr>

      <h4>Full-Width Images</h4>
      <p>To make an image <strong>100% width of its parent container</strong>, use <code>img--max</code>. This ensures the image scales responsively while maintaining its aspect ratio.</p>
      <ul>
        <li>The image width will adjust dynamically to fit its container.</li>
        <li>Height is automatically set to maintain proportions.</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <img src="images/owly-slide-03.png" width="250" border="0" alt="blank image" class="img--max">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <pre class="demo"><code>&lt;img src="" class="img--max"&gt;</code></pre>
      </div>

      <hr>

      <h4>Responsive Media (Videos & Iframes)</h4>
      <p>To make videos or embedded content <strong>100% responsive</strong>, wrap them inside a <code>&lt;div&gt;</code> with the class <code>media</code>.</p>
      <div class="wrapper">
        <div class="example">
          <div class="media">
            <iframe src="https://www.youtube.com/embed/iKBs9l8jS6Q?si=CQ4DEtOV2pWBygI6"></iframe>
          </div>
        </div>
        <pre class="demo"><code>&lt;div class="media"&gt;
  &lt;iframe src="video_link_here" frameborder="0"&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
      </div>
      <p><em>The embedded content (e.g., YouTube or Vimeo videos) will stretch to fit the width of its parent element while maintaining aspect ratio.</em></p>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>