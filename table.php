<?
  $strSelf = "Table";
  $strParent = "Components";
  $strPrev = "Code";
  $strNext = "Image";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Dynamic table</h1>
      <p>Tables are a powerful way to display structured data. However, viewing complex tables on mobile devices can be challenging. Amazium’s dynamic table styling ensures tables remain readable and responsive by adapting their layout for smaller screens.</p>
      <p>Each &lt;td&gt; element should include a data-title attribute that matches the respective column title. Wrapping content inside <code>&lt;span class="cell-content"&gt;...&lt;/span&gt;</code> ensures optimal styling on mobile devices.</p>
      <hr>
      <h4>Usage:</h4>
      <ul>
        <li>Responsive Design – Automatically adapts for mobile screens.</li>
        <li>Data Titles – Keeps column labels visible on smaller screens.</li>
        <li>Easy Implementation – Just add data-title to each <code>&lt;td&gt;</code>.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Desktop View</h4>
      <table class="table--mobile table--rowHover" summary="This is an example of a table">
        <thead>
          <tr>
            <th>Actor:</th>
            <th>Film:</th>
            <th>Quote:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-title="Actor"><span class="cell-content">Robert Downey Jr</span></td>
            <td data-title="Film"><span class="cell-content">Ironman 3</span></td>
            <td data-title="Quote"><span class="cell-content">A famous man once said, 'We create our own demons.' Who said that? What does that even mean? Doesn't matter. I said it 'cause he said it. So now, he was famous and that basically getting said by two well-known guys. I don't, uh... I'm gonna start again.</span></td>
          </tr>
          <tr>
            <td data-title="Actor"><span class="cell-content">Marlon Brando</span></td>
            <td data-title="Film"><span class="cell-content">On the Waterfront</span></td>
            <td data-title="Quote"><span class="cell-content">You don't understand! I coulda had class. I coulda been a contender. I could've been somebody, instead of a bum, which is what I am.</span></td>
          </tr>
          <tr>
            <td data-title="Actor"><span class="cell-content">Matt Damon</span></td>
            <td data-title="Film"><span class="cell-content">The Martian</span></td>
            <td data-title="Quote"><span class="cell-content">If ruining the only religious icon I have leaves me vulnerable to Martian vampires, I'll have to risk it.</span></td>
          </tr>
          <tr>
            <td data-title="Actor"><span class="cell-content">Harrison Ford</span></td>
            <td data-title="Film"><span class="cell-content">Blade Runner</span></td>
            <td data-title="Quote"><span class="cell-content">You're in a desert walking along in the sand when all of the sudden you look down, and you see a tortoise, it's crawling toward you. You reach down, you flip the tortoise over on it's back. The tortoise lays on it's back, it's belly baking in the hot sun, beating it's legs trying to turn it'self over, but it can't, not without your help. But you're not helping. Why is that?</span></td>
          </tr>
        </tbody>
      </table>

      <h4>Mobile View (Restyled Automatically)</h4>
      <p>When viewed on a smaller screen, each row adapts to display content in a stacked format, preserving readability.</p>
      <pre class="demo"><code>&lt;table class="table--mobile"&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th&gt;Actor:&lt;/th&gt;
      &lt;th&gt;Quote:&lt;/th&gt;
      &lt;th&gt;Film:&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td data-title="Actor"&gt;&lt;span class="cell-content"&gt;...&lt;/span&gt;&lt;/td&gt;
      &lt;td data-title="Quote"&gt;&lt;span class="cell-content"&gt;...&lt;/span&gt;&lt;/td&gt;
      &lt;td data-title="Film"&gt;&lt;span class="cell-content"&gt;...&lt;/span&gt;&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>