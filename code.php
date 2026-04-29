<?
  $strSelf = "Code";
  $strParent = "Components";
  $strPrev = "Card";
  $strNext = "Table";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Code Block</h1>
      <p>Code formatting is used to highlight inline code snippets or display block code samples. This enhances readability and ensures clarity in documentation, tutorials, and technical content.</p>
      <hr>
      <h4>Usage:</h4>
      <ul>
        <li>Inline Code – For small code snippets inside text.</li>
        <li>Block Code – For larger, structured code examples.</li>
        <li>Syntax Highlighting – Improves readability for developers.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Inline Code</h4>
      <pre>Use inline code when referencing commands, functions, or variables within a paragraph.</pre>
      <div class="wrapper">
        <div class="example">
          <p>To start creating a changeset, run <code>yarn changeset</code>. Then you'll be prompted to select packages for release.</p>
        </div>
        <pre class="demo"><code>To start creating a changeset, run &lt;code&gt;yarn changeset&lt;/code&gt;. Then you'll be prompted to select packages for release.</code></pre>
      </div>

      <hr>

      <h4>Block Code</h4>
      <p>Use block code to display larger code samples, such as HTML, CSS, or JavaScript snippets.</p>
      <div class="wrapper">
        <div class="example">
          <pre><code>&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="utf-8" /&gt;
  &lt;title&gt;MyWebsite&lt;/title&gt;
  &lt;meta name="description" content=""&gt;
  &lt;meta name="author" content=""&gt;

  &lt;!-- Mobile Specific Metas --&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /&gt;

  &lt;!-- CSS --&gt;
  &lt;link rel="stylesheet" href="path/to/amazium.css"&gt;
  &lt;link rel="stylesheet" href="styles/layout/layout.css"&gt;

  &lt;!-- Favicons --&gt;
  &lt;link rel="shortcut icon" href="img/favicon.ico"&gt;
  &lt;link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon.png"&gt;
&lt;/head&gt;
&lt;body&gt;

  ...

&lt;/body&gt;
&lt;/html&gt;</code></pre>
        </div>
        <pre class="demo"><code>&lt;code&gt;
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
&lt;/code&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>