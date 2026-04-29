<?
  $strSelf = "List";
  $strParent = "Components";
  $strPrev = "Image";
  $strNext = "Modal";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>List</h1>
      <p>ists are essential for structuring content in a clear, hierarchical format. Amazium provides styling for:</p>
      <ul>
        <li>Unordered Lists (<code>&lt;ul&gt;</code>) – Ideal for general items without a specific order.</li>
        <li>Ordered Lists (<code>&lt;ol&gt;</code>) – Useful when sequence matters.</li>
        <li>Definition Lists (<code>&lt;dl&gt;</code>) – Best for terms and their descriptions.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Unordered Lists</h4>
      <p>Unordered lists use bullet points (•) to organize items.</p>
      <ul>
        <li>Use <code>&lt;ul&gt;</code> when order does not matter.
        <li>Nest lists inside <code>&lt;li&gt;</code> elements for hierarchical structure.
      </ul>
      <div class="wrapper">
        <div class="example">
          <ul>
            <li>Nullam id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</li>
            <li>Donec sed odio dui. Curabitur blandit tempus por</span>
              <ul>
                <li>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui.</li>
              </ul>
            </li>
          </ul>
        </div>
        <pre class="demo"><code>&lt;ul&gt;
  &lt;li&gt;Nullam id dolor id...&lt;/li&gt;
  &lt;li&gt;
    Donec sed odio dui....
    &lt;ul&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
      </div>

      <hr>

      <h4>Ordered Lists</h4>
      <p>Ordered lists display items with numerical indicators (1, 2, 3...).</p>
      <ul>
        <li>Use <code>&lt;ol&gt;</code> when sequence is important (e.g., steps in a process).</li>
        <li>Nested <code>&lt;ol&gt;</code> elements will use different numbering styles (1, a, i, etc.).</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <ol>
            <li>Nullam id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</li>
            <li>Donec sed odio dui. Curabitur blandit tempus por</span>
              <ol>
                <li>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui.</li>
              </ol>
            </li>
          </ol>
        </div>
        <pre class="demo"><code>&lt;ol&gt;
  &lt;li&gt;Nullam id dolor id...&lt;/li&gt;
  &lt;li&gt;
    Donec sed odio dui....
    &lt;ol&gt;
      &lt;li&gt;...&lt;/li&gt;
    &lt;/ol&gt;
  &lt;/li&gt;
&lt;/ol&gt;</code></pre>
      </div>

      <hr>

      <h4>Definition Lists</h4>
      <p>Definition lists pair terms (<code>&lt;dd&gt;</code>) with their descriptions (<code>&lt;dt&gt;</code>).</p>
      <ul>
        <li>Best for glossaries, FAQs, or term descriptions.</li>
        <li>The <code>&lt;dd&gt;</code> element represents the term, and <code>&lt;dt&gt;</code> holds its definition.</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <dl>
            <dt>Title</dt>
            <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nullam Ligula</dd>
            <dt>Another title</dt>
            <dd>Sed fugit nobis, natus consequatur eos nemo animi, labore aliquam temporibus, magnam modi iste doloribus illum laboriosam qui odit cumque tenetur molestias.</dd>
          </dl>
        </div>
        <pre class="demo"><code>&lt;dl&gt;
  &lt;dd&gt;Title&lt;/dd&gt;
  &lt;dt&gt;Lorem ipsum dolor sit amet...&lt;/dt&gt;
  &lt;dd&gt;Another title&lt;/dd&gt;
  &lt;dt&gt;ed fugit nobis, natus consequatur...&lt;/dt&gt;
&lt;/dl&gt;</code></pre>
      </div>

      <hr>

      <h4>Inline Definition Lists</h4>
      <p>Inline definition lists are a compact variation, displayed in a single line.</p>
      <div class="wrapper">
        <div class="example">
          <dl class="dl-inline">
            <dt>Title</dt>
            <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nullam Ligula</dd>
            <dt>Another title</dt>
            <dd>Sed fugit nobis, natus consequatur eos nemo animi, labore aliquam temporibus, magnam modi iste doloribus illum laboriosam qui odit cumque tenetur molestias.</dd>
          </dl>
        </div>
        <pre class="demo"><code>&lt;dl class="dl-inline"&gt;
  &lt;dd&gt;Title&lt;/dd&gt;
  &lt;dt&gt;Lorem ipsum dolor sit amet...&lt;/dt&gt;
  &lt;dd&gt;Another title&lt;/dd&gt;
  &lt;dt&gt;ed fugit nobis, natus consequatur...&lt;/dt&gt;
&lt;/dl&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>