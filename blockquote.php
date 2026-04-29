<?
  $strSelf = "Blockquote";
  $strParent = "Components";
  $strPrev = "Badge";
  $strNext = "Button";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Blockquote</h1>
      <p>Blockquotes are used to highlight quoted text from another source, providing visual distinction and proper attribution.</p>
      <hr>
      <h4>Correct Usage of &lt;blockquote&gt; and &lt;figcaption&gt;</h4>
      <ul>
        <li>Quoting external sources – Clearly attribute content from other authors or references.</li>
        <li>Emphasizing key statements – Draw attention to important text in an article or document.</li>
        <li>Citing references correctly – Ensure sources are formatted appropriately for accessibility and clarity.</li>
      </ul>
      <p>Previously, <code>&lt;cite&gt;</code> was used inside blockquotes for source attribution. However, the correct approach is to place the source inside the <code>&lt;blockquote&gt;</code> tag while using <code>&lt;figcaption&gt;</code> for attribution.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <div class="wrapper">
        <div class="example">
          <figure>
            <blockquote cite="http://www.amazium.co.uk">
              <p>"Voilà! In view, a humble vaudevillian veteran, cast vicariously as both victim and villain by the vicissitudes of Fate. This visage, no mere veneer of vanity, is a vestige of the vox populi, now vacant, vanished. However, this valorous visitation of a by-gone vexation, stands vivified and has vowed to vanquish these venal and virulent vermin vanguarding vice and vouchsafing the violently vicious and voracious violation of volition.</p>
              <p>The only verdict is vengeance; a vendetta, held as a votive, not in vain, for the value and veracity of such shall one day vindicate the vigilant and the virtuous. Verily, this vichyssoise of verbiage veers most verbose, so let me simply add that it's my very good honor to meet you and you may call me V."</p>
            </blockquote>
            <figcaption>
              V - The man in room five<br><span>V for Vendetta</span>
            </figcaption>
          </figure>
        </div>
        <pre><code>&lt;figure&gt;
  &lt;blockquote cite="http://www.warnerbros.com/v-vendetta"&gt;
    &lt;p&gt;Voilà! In view, a humble vaudevillian veteran...&lt;/p&gt;
    &lt;p&gt;The only verdict is vengeance; a vendetta...&lt;/p&gt;
  &lt;/blockquote&gt;
  &lt;figcaption&gt;
    V - The man in room five
    &lt;span&gt;V for Vendetta&lt;/span&gt;
  &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>