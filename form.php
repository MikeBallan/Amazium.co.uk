<?
  $strSelf = "Form";
  $strParent = "";
  $strPrev = "Ordering Grids";
  $strNext = "Form Basics";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Form</h1>
      <p>Forms are essential for user interaction, enabling users to enter and submit information seamlessly. Form inputs can be used <strong>individually</strong> or in <strong>combination with other elements</strong> to create structured, accessible forms.</p>
      <p>Each input should be <strong>clearly labeled</strong> to guide users on its purpose. This can be done using <strong>placeholder text</strong> or a <strong>visible label</strong> to ensure clarity and usability across different devices.</p>
      <p>Amazium provides a <strong>consistent and responsive</strong> form system designed for <strong>efficiency, accessibility, and ease of use</strong>.</p>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <ol class="cards cards--hover">
        <li>
          <div class="card__body">
            <a href="form-basics.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380 212" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#9DA3AE" width="270" height="14" rx="7"/>
                  <rect fill="#FFF" y="30" width="380" height="54" rx="10"/>
                  <g transform="translate(0 132)">
                    <rect fill="#0060F5" width="30" height="30" rx="4"/>
                    <path fill="#FFF" fill-rule="nonzero" d="M11.882 22.44 5 15.557l1.321-1.321 5.56 5.56L23.68 8 25 9.321 11.882 22.439z"/>
                    <rect fill="#9DA3AE" x="50" y="8" width="270" height="14" rx="7"/>
                  </g>
                  <rect fill="#6A7281" y="182" width="30" height="30" rx="4"/>
                  <rect fill="#9DA3AE" x="50" y="190" width="150" height="14" rx="7"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Getting started</h2>
            <p>The Amazium form system provides <strong>consistent, accessible form elements</strong> that adapt to different screen sizes. Use the available form components to create intuitive user interactions.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="checkbox.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 130" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#0060F5" width="30" height="30" rx="4"/>
                  <path fill="#FFF" fill-rule="nonzero" d="M11.882 22.44 5 15.557l1.321-1.321 5.56 5.56L23.68 8 25 9.321 11.882 22.439z"/>
                  <rect fill="#9DA3AE" x="50" y="8" width="270" height="14" rx="7"/>
                  <rect fill="#6A7281" y="50" width="30" height="30" rx="4"/>
                  <rect fill="#9DA3AE" x="50" y="58" width="150" height="14" rx="7"/>
                  <rect fill="#0060F5" y="100" width="30" height="30" rx="4"/>
                  <path fill="#FFF" fill-rule="nonzero" d="M11.882 122.44 5 115.557l1.321-1.321 5.56 5.56L23.68 108l1.32 1.321-13.118 13.118z"/>
                  <rect fill="#9DA3AE" x="50" y="108" width="220" height="14" rx="7"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Checkbox</h2>
            <p>Checkboxes allow users to <strong>select multiple options</strong> from a list. They are commonly used in settings, preferences, or multiple-choice selections.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="label.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 44" class="icon">
                <g fill="#9DA3AE" fill-rule="evenodd">
                  <rect width="140" height="14" rx="7"/>
                  <rect width="320" height="14" rx="7" transform="translate(0 30)"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Label</h2>
            <p>Clear labels help users understand <strong>what to enter in an input field</strong>. Labels should be concise, descriptive, and positioned effectively for <strong>readability</strong>.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="radio.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 130" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#6A7281" width="30" height="30" rx="15"/>
                  <rect fill="#EBEFF7" x="4" y="4" width="22" height="22" rx="11"/>
                  <rect fill="#9DA3AE" x="50" y="8" width="270" height="14" rx="7"/>
                  <rect fill="#0060F5" y="50" width="30" height="30" rx="15"/>
                  <rect fill="#9DA3AE" x="50" y="58" width="150" height="14" rx="7"/>
                  <rect fill="#6A7281" y="100" width="30" height="30" rx="15"/>
                  <rect fill="#EBEFF7" x="4" y="104" width="22" height="22" rx="11"/>
                  <rect fill="#9DA3AE" x="50" y="108" width="220" height="14" rx="7"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Radio</h2>
            <p>A radio input allows users to select only one option from a number of choices. Radio is generally displayed in a radio group.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="radio-boxed.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 420 70" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#FFF" width="204" height="70" rx="10"/>
                  <rect fill="#6A7281" x="11" y="20" width="30" height="30" rx="15"/>
                  <rect fill="#FFF" x="15" y="24" width="22" height="22" rx="11"/>
                  <rect fill="#9DA3AE" x="51" y="28" width="123" height="14" rx="7"/>
                  <g transform="translate(216)">
                    <rect fill="#FFF" width="204" height="70" rx="10"/>
                    <rect fill="#0060F5" x="11" y="20" width="30" height="30" rx="15"/>
                    <rect fill="#9DA3AE" x="51" y="28" width="83" height="14" rx="7"/>
                  </g>
                </g>
              </svg>
            </div>
            <h2 class="h6">Radio - Boxed</h2>
            <p>A variation of the radio button, the <strong>boxed radio</strong> visually emphasizes each option, making selection <strong>more distinct and intuitive</strong>.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="select.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380 84" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#9DA3AE" width="270" height="14" rx="7"/>
                  <rect fill="#FFF" y="30" width="380" height="54" rx="10"/>
                  <path fill="#9DA3AE" fill-rule="nonzero" d="m360 52.775-10 10-10-10L341.775 51 350 59.225 358.225 51z"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Select</h2>
            <p>The select component presents a <strong>dropdown menu</strong>, enabling users to choose <strong>one or multiple options</strong> from a predefined list.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="switch.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 60" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#6A7281" width="120" height="60" rx="30"/>
                  <rect fill="#FFF" x="5" y="5" width="50" height="50" rx="25"/>
                  <rect fill="#0060F5" x="150" width="120" height="60" rx="30"/>
                  <rect fill="#FFF" x="215" y="5" width="50" height="50" rx="25"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Switch</h2>
            <p>Switches provide a <strong>toggle-style control</strong> for enabling or disabling settings. They offer <strong>instant feedback</strong> and are great for <strong>on/off interactions</strong>.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="textarea.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380 204" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#9DA3AE" width="270" height="14" rx="7"/>
                  <rect fill="#FFF" y="30" width="380" height="174" rx="10"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Text area</h2>
            <p>A <strong>multi-line input field</strong> for longer text entries, such as <strong>comments, descriptions, or messages</strong>. Useful when more than a single line of text is required.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="text-field.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380 84" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#9DA3AE" width="270" height="14" rx="7"/>
                  <rect fill="#FFF" y="30" width="380" height="54" rx="10"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Text field</h2>
            <p>A standard <strong>single-line input field</strong> for entering short pieces of text, such as <strong>names, email addresses, or search queries</strong>.</p>
          </div>
        </li>

        <li>
          <div class="card__body">
            <a href="toggle.php" class="overall"></a>
            <div class="thumb--image">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 60" class="icon">
                <g fill="none" fill-rule="evenodd">
                  <rect fill="#FFF" width="310" height="60" rx="10"/>
                  <rect fill="#0060F5" x="155" y="5" width="149.259" height="50" rx="10"/>
                </g>
              </svg>
            </div>
            <h2 class="h6">Toggle</h2>
            <p>Toggles allow users to <strong>switch between states</strong>, such as <strong>enabled/disabled</strong>. They are useful for <strong>preferences, filters, and visibility controls</strong>.</p>
          </div>
        </li>
      </ol>
    </div>
  </div>

</section>


<? include "includes/footer-alt.php"; ?>