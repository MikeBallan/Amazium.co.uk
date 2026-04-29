<?
  $strSelf = "Card";
  $strParent = "Components";
  $strPrev = "Button";
  $strNext = "Code";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Card</h1>
      <p>Cards are versatile containers used to group related information in a flexible layout. They can include text, images, actions, and metadata, making them perfect for dashboards, previews, and listings.</p>
      <hr>
      <h4>Usage:</h4>
      <ul>
        <li>Content Organization – Group related information for clarity.</li>
        <li>Modular Layouts – Easily arrange elements like headers, bodies, and footers.</li>
        <li>Flexible Components – Cards can be used for lists, profiles, notifications, and more.</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Default Card</h4>
      <p>A basic card consists of a container that holds content. This is the minimal structure required for a card.</p>    

      <div class="card">
        <div class="card__body">
          <p><strong>Body</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <pre class="demo"><code>&lt;div class="card"&gt;
  &lt;div class="card__body"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>

      <hr>

      <h4>Card with Header & Footer</h4>
      <p>Cards can include headers for titles and footers for additional actions or metadata.</p>
      <div class="card">
        <div class="card__header">
          <strong>Header</strong>
        </div>
        <div class="card__body">
          <p><strong>Body</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="card__footer">
          <strong>Footer</strong> - Nam at lectus urna duis convallis. Aliquam nulla facilisi cras fermentum odio eu feugiat pretium nibh.
        </div>
      </div>
      <pre class="demo"><code>&lt;div class="card"&gt;
  &lt;div class="card__header"&gt;...&lt;/div&gt;
  &lt;div class="card__body"&gt;...&lt;/div&gt;
  &lt;div class="card__footer"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
      
      <hr>

      <h4>Card List</h4>
      <p>A list of cards is useful for displaying structured data, such as items in a collection.</p>    

      <ol class="cards">
        <li>
          <div class="card__body">
            <strong>Iron Man</strong>
            <p>After the demonstration of the new "Jericho" missile, the convoy is ambushed and Stark is critically wounded by a missile used by the attackers: one of his company's own.</p>
          </div>
        </li>
        <li>
          <div class="card__body">
            <strong>The Incredible Hulk</strong>
            <p>At Culver University in Virginia, General Thaddeus "Thunderbolt" Ross meets with Dr. Bruce Banner, the colleague and boyfriend of his daughter Betty, regarding an experiment that Ross claims is meant to make humans immune to gamma radiation.</p>
          </div>
        </li>
        <li>
          <div class="card__body">
            <strong>Iron Man 2</strong>
            <p>In Russia, the media covers Tony Stark's disclosure of his identity as Iron Man. Ivan Vanko, whose father, Anton Vanko, a former Stark Industries employee, has just died, sees this and begins building a miniature arc reactor similar to Stark's.</p>
          </div>
        </li>
        <li>
          <div class="card__body">
            <strong>Thor</strong>
            <p>In 965 AD, Odin, king of Asgard, wages war against the Frost Giants of Jotunheim and their leader Laufey, to prevent them from conquering the Nine Realms, starting with Earth.</p>
          </div>
        </li>
        <li>
          <div class="card__body">
            <strong>Captain America</strong>
            <p>In New York City, Steve Rogers is rejected for World War II military recruitment due to his various health and physical problems.</p>
          </div>
        </li>
        <li>
          <div class="card__body">
            <strong>The Avengers</strong>
            <p>The Asgardian Loki encounters the Other, the leader of an extraterrestrial race known as the Chitauri.</p>
          </div>
        </li>
        <li>
          <div class="card__body">
            <strong>Guardians of the Galaxy</strong>
            <p>In 1988, following his mother's death, a young Peter Quill is abducted from Earth by a group of alien thieves and smugglers called the Ravagers led by Yondu Udonta.</p>
          </div>
        </li>
      </ol>
      <pre class="demo"><code>&lt;ol class="cards"&gt;
  &lt;li&gt;
    &lt;div class="card__header"&gt;...&lt;/div&gt;
    &lt;div class="card__body"&gt;...&lt;/div&gt;
  &lt;/li&gt;
&lt;/ol&gt;</code></pre>


    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>