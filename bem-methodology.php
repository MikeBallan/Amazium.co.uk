<?
  $strSelf = "BEM methodology";
  $strParent = "Foundations";
  $strPrev = "Foundations";
  $strNext = "Color";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>BEM methodology</h1>
      <p>Amazium uses the BEM (Block Element Modifier) methodology to create a consistent and scalable CSS architecture. This approach ensures clear structure, predictable naming, and easier maintenance across components.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Blocks, Elements &amp; Modifiers</h4>
      <p>BEM organizes styles into blocks, elements, and modifiers, each with a specific role in structuring and extending UI components.</p>
      
      <ol class="cards">
        <li>
          <div class="card__body">
            <h3 class="h6">Block</h3>
            <p>Blocks are standalone components that define reusable parts of the interface. Each block represents a distinct piece of UI and can be used independently or alongside other blocks.</p>
          </div>
          <div class="card__demo">
            <pre class="demo"><code>&lt;div class="block"&gt;...&lt;/div&gt;</code></pre>
          </div>
        </li>

        <li>
          <div class="card__body">
            <h3 class="h6">Element</h3>
            <p>Elements are parts of a block that depend on their parent for context. They cannot be used independently and are always scoped to a specific block.</p>
          </div>
          <div class="card__demo">
            <pre class="demo"><code>&lt;div class="block"&gt;
  &lt;div class="block__element"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
          </div>
        </li>

        <li>
          <div class="card__body">
            <h3 class="h6">Modifier</h3>
            <p>Modifiers are used to adjust the appearance or state of a block or element, allowing variations without changing the core structure.</p>            
          </div>
          <div class="card__demo">
            <pre class="demo"><code>&lt;div class="block block--modifier"&gt;...&lt;/div&gt;</code></pre>
          </div>
        </li>
      </ol>
      <hr>

      <h4>Naming Rules</h4>
      <p>Blocks use `.block`, elements use `.block__element`, and modifiers use `.block--modifier`. Names should be lowercase and use hyphen separation for readability.</p>
      <hr>

      <h4>All together</h4>
      <p>Blocks, elements, and modifiers work together to create flexible and maintainable components. The example below shows how a card component is structured using BEM naming conventions.</p>
      <div class="card card--width-half">
        <div class="card__body">
          <p><strong>Card</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      
      <pre class="demo"><code>&lt;div class="card card--width-half"&gt;
  &lt;div class="card__body"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
    </div>
    
  </div>
</section>

<? include "includes/footer-alt.php"; ?>