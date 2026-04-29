<?
  $strSelf = "Message";
  $strParent = "Components";
  $strPrev = "Modal";
  $strNext = "";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Section message</h1>
      <p>Section messages are used to notify users about important events such as:</p>
      <ul>
        <li>Errors & validation messages</li>
        <li>Success confirmations</li>
        <li>Warnings or alerts</li>
        <li>Informational messages</li>
      </ul>


    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Message</h4>
      <p>A basic message block with a neutral "Slate" color.</p>
      <ul>
        <li>Uses the .message class for styling.</li>
        <li>No additional colors—defaults to a neutral look.</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus molestias, maxime quam odio velit commodi, nesciunt impedit deleniti praesentium. Quod necessitatibus animi quia cupiditate rerum, voluptate velit voluptas quasi aspernatur.</p>
        </div>
        <pre class="demo"><code>&lt;p class="message"&gt;...&lt;/p&gt;</code></pre>
      </div>

      <hr>

      <h4>Message Variants</h4>
      <p>You can modify the appearance using these additional classes:</p>
      <hr>
      <h4>Success / Positive Message</h4>
      <p>Use <code>.message--positive</code> for success confirmations (e.g., form submissions).</p>
      <div class="wrapper">
        <div class="example">
          <p class="message message--positive">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus molestias, maxime quam odio velit commodi, nesciunt impedit deleniti praesentium. Quod necessitatibus animi quia cupiditate rerum, voluptate velit voluptas quasi aspernatur.</p>
        </div>
        <pre class="demo"><code>&lt;p class="message message--positive"&gt;...&lt;/p&gt;</code></pre>
      </div>

      <h4>Informational Message</h4>
      <p>Use <code>.message--info</code> for general notices or updates.</p>
      <div class="wrapper">
        <div class="example">
          <p class="message message--info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus molestias, maxime quam odio velit commodi, nesciunt impedit deleniti praesentium. Quod necessitatibus animi quia cupiditate rerum, voluptate velit voluptas quasi aspernatur.</p>
        </div>
        <pre class="demo"><code>&lt;p class="message message--info"&gt;...&lt;/p&gt;</code></pre>
      </div>

      <h4>Warning Message</h4>
      <p>Use <code>.message--warning</code> for cautionary alerts (e.g., security warnings).</p>
      <div class="wrapper">
        <div class="example">
          <p class="message message--warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus molestias, maxime quam odio velit commodi, nesciunt impedit deleniti praesentium. Quod necessitatibus animi quia cupiditate rerum, voluptate velit voluptas quasi aspernatur.</p>
        </div>
        <pre class="demo"><code>&lt;p class="message message--warning"&gt;...&lt;/p&gt;</code></pre>
      </div>

      <h4>Error / Negative Message</h4>
      <p>Use <code>.message--negative</code> for errors or validation failures.</p>
      <div class="wrapper">
        <div class="example">
          <p class="message message--negative">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus molestias, maxime quam odio velit commodi, nesciunt impedit deleniti praesentium. Quod necessitatibus animi quia cupiditate rerum, voluptate velit voluptas quasi aspernatur.</p>
        </div>
        <pre class="demo"><code>&lt;p class="message message--negative"&gt;...&lt;/p&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>