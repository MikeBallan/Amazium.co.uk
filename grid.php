<?
  $strSelf = "Grid";
  $strParent = "";
  $strPrev = "Utilities";
  $strNext = "Grid Basics";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Grids</h1>
      <p>Grids provide structure and alignment in UI design, ensuring layouts are flexible and responsive. Amazium's grid system is built with SCSS, allowing for customization of parameters like grid width, column count, and gutter spacing.</p>
      <p>Explore the grid system and its modifiers to create adaptive and structured designs.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <ol class="cards cards--hover">
        <li>
          <div class="card__body">
            <a href="grid-basics.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 154" class="icon">
                <g fill="#9DA3AE" fill-rule="evenodd">
                  <rect width="30" height="36" rx="10"/>
                  <rect x="33" width="30" height="36" rx="10"/>
                  <rect x="65" width="30" height="36" rx="10"/>
                  <rect x="98" width="30" height="36" rx="10"/>
                  <rect x="131" width="30" height="36" rx="10"/>
                  <rect x="164" width="30" height="36" rx="10"/>
                  <rect x="196" width="30" height="36" rx="10"/>
                  <rect x="229" width="30" height="36" rx="10"/>
                  <rect x="262" width="30" height="36" rx="10"/>
                  <rect x="295" width="30" height="36" rx="10"/>
                  <rect x="327" width="30" height="36" rx="10"/>
                  <rect x="360" width="30" height="36" rx="10"/>
                  <g transform="translate(0 38)">
                    <rect width="194" height="36" rx="10"/>
                    <rect x="196" width="194" height="36" rx="10"/>
                  </g>
                  <g transform="translate(0 78)">
                    <rect width="259" height="36" rx="10"/>
                    <rect x="262" width="128" height="36" rx="10"/>
                  </g>
                  <rect width="390" height="36" rx="10" transform="translate(0 118)"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Getting started</h2>
            <p>Customize your grid with SCSS—set column count, gutter width, and overall grid width to fit your design needs.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="fluid-grid.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 134" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <path fill="#6A7281" fill-rule="nonzero" d="m470 67-10 10-1.781-1.75 7-7H450v-2.5h15.219l-7-7L460 57zM0 67l10 10 1.781-1.75-7-7H20v-2.5H4.781l7-7L10 57z"/>
                  <g transform="translate(40)" fill="#9DA3AE">
                    <rect width="30" height="134" rx="10"/>
                    <rect x="33" width="30" height="134" rx="10"/>
                    <rect x="65" width="30" height="134" rx="10"/>
                    <rect x="98" width="30" height="134" rx="10"/>
                    <rect x="131" width="30" height="134" rx="10"/>
                    <rect x="164" width="30" height="134" rx="10"/>
                    <rect x="196" width="30" height="134" rx="10"/>
                    <rect x="229" width="30" height="134" rx="10"/>
                    <rect x="262" width="30" height="134" rx="10"/>
                    <rect x="295" width="30" height="134" rx="10"/>
                    <rect x="327" width="30" height="134" rx="10"/>
                    <rect x="360" width="30" height="134" rx="10"/>
                  </g>
                </g>
              </svg>
            </div>
            <h2 class="h6">Fluid / Responsive</h2>
            <p>Make your layouts fully responsive by adding .grid--fluid, ensuring seamless scaling across all screen sizes.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="nested-grid.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 154" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#6A7281" width="390" height="154" rx="10"/>
                  <rect fill="#9DA3AE" x="10" y="38" width="239" height="78.5" rx="10"/>
                  <rect fill="#9DA3AE" x="272" y="38" width="108" height="78.5" rx="10"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Nested grids items</h2>
            <p>Easily nest grids within grids without extra CSS. Structure complex layouts effortlessly.</p>
          </div>
        </li>
        
        <li>
          <div class="card__body">
            <a href="offsetting-grids.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 116" class="icon">
                <g fill="#9DA3AE" fill-rule="evenodd">
                  <rect width="161" height="36" rx="10"/>
                  <rect x="196" width="194" height="36" rx="10"/>
                  <g transform="translate(65 40)">
                    <rect width="194" height="36" rx="10"/>
                    <rect x="230" width="95" height="36" rx="10"/>
                  </g>
                  <rect width="259" height="36" rx="10" transform="translate(98 80)"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Offsetting</h2>
            <p>Use offset classes to add extra space between columns for a more balanced layout.</p>
          </div>
        </li>
        
        <li>
          <div class="card__body">
            <a href="ordering-grids.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 389 156" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <g fill="#9DA3AE">
                    <rect width="95" height="156" rx="10"/>
                    <rect x="196" width="95" height="156" rx="10"/>
                    <rect x="98" width="95" height="156" rx="10"/>
                    <rect x="294" width="95" height="156" rx="10"/>
                  </g>
                  <path d="M55.586 91.665V64h-6.253a12.187 12.187 0 0 1-3.34 4.305c-1.422 1.162-3.42 2.158-5.993 2.987v6.197c1.744-.532 3.194-1.088 4.351-1.67 1.157-.581 2.353-1.342 3.59-2.282v18.128h7.645ZM154.354 91.665v-5.084h3.415v-5.863h-3.415V64h-6.586L134 80.365v6.216h13.768v5.084h6.586Zm-6.586-10.947h-7.274l7.274-8.554v8.554ZM254.674 91.665v-6.16h-11.801c.693-.68 1.296-1.23 1.81-1.651.512-.421 1.53-1.157 3.051-2.208 2.56-1.806 4.327-3.464 5.298-4.973.97-1.51 1.456-3.093 1.456-4.75 0-1.559-.423-2.966-1.27-4.221-.848-1.256-2.01-2.187-3.489-2.793-1.478-.606-3.547-.909-6.207-.909-2.548 0-4.542.319-5.983.956-1.442.637-2.558 1.552-3.35 2.746-.791 1.193-1.335 2.854-1.632 4.982l7.57.612c.21-1.534.622-2.604 1.234-3.21.612-.606 1.4-.91 2.366-.91.927 0 1.697.295 2.31.882.612.588.918 1.296.918 2.125 0 .767-.31 1.577-.928 2.43-.618.854-2.034 2.103-4.249 3.748-3.624 2.685-6.095 5.013-7.412 6.986-1.318 1.973-2.106 4.08-2.366 6.318h22.674ZM341.504 92.129c2.536 0 4.583-.393 6.142-1.178 1.558-.786 2.752-1.905 3.58-3.359.83-1.453 1.244-2.972 1.244-4.555 0-1.262-.25-2.347-.752-3.256a5.884 5.884 0 0 0-2.106-2.199c-.556-.346-1.36-.65-2.412-.91 1.299-.717 2.27-1.552 2.913-2.504a5.575 5.575 0 0 0 .965-3.191c0-2.004-.792-3.668-2.375-4.992-1.583-1.323-4.15-1.985-7.7-1.985-3.093 0-5.483.606-7.171 1.818-1.689 1.213-2.83 2.957-3.424 5.233l7.144 1.28c.198-1.348.575-2.291 1.132-2.83.556-.538 1.28-.807 2.17-.807.866 0 1.547.248 2.042.743.494.494.742 1.156.742 1.985 0 .866-.331 1.614-.993 2.245-.662.63-1.487.946-2.477.946-.235 0-.563-.03-.983-.092l-.39 5.399c1.039-.297 1.855-.445 2.45-.445 1.112 0 1.994.346 2.643 1.039.65.692.974 1.67.974 2.931 0 1.237-.337 2.227-1.01 2.97-.675.741-1.52 1.112-2.534 1.112-.964 0-1.76-.293-2.384-.881-.625-.588-1.085-1.642-1.382-3.164L330 84.484c.495 1.695 1.203 3.102 2.125 4.222.921 1.119 2.096 1.97 3.525 2.55 1.429.582 3.38.873 5.854.873Z" fill="#FFF" fill-rule="nonzero"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Ordering</h2>
            <p>Reorder grid items dynamically with modifier classes—move columns to the first or last position.</p>
          </div>
        </li>
      </ol>
    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>