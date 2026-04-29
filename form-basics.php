<?
  $strSelf = "Form Basics";
  $strParent = "Form";
  $strPrev = "Form";
  $strNext = "Checkbox";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Getting started</h1>
      <p>Forms have never been more intuitive! With <strong>global styling</strong>, all <strong>text inputs, selects, and textareas</strong> maintain a uniform appearance, ensuring a <strong>consistent user experience</strong>.</p>
      <p>By default, all form elements are set to <strong>100% width</strong> with a <strong>1px border</strong>. When focused, the border turns blue, making it easy for users to identify the active field.</p>
    </div>
  </div>
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <fieldset>
              <label for="text">First Name</label>
              <p class="txt--subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <div class="input">
                <input type="text" name="text" id="text" placeholder="Enter your first name">
              </div>
            </fieldset>

            <fieldset>
              <label for="text">Last Name</label>
              <div class="input">
                <input type="text" name="text" id="text" placeholder="Enter your last name">
              </div>
            </fieldset>

            <fieldset>
              <label for="text">Your age</label>
              <div class="input input--select">
                <select>
                  <option disabled>-- Choose your age --</option>
                  <option value="">0 - 10</option>
                  <option value="">11 - 20</option>
                  <option value="">21 - 30</option>
                  <option value="">31 - 40</option>
                  <option value="">41 - 50</option>
                  <option value="">50+</option>
                </select>
              </div>
            </fieldset>

            <fieldset>
              <label for="text">Message</label>
              <div class="input">
                <textarea cols="50" rows="4" name="comment" placeholder="Write your message here"></textarea>
              </div>
            </fieldset>

            <fieldset>
              <button class="btn btn--positive">Save</button>
            </fieldset>
          </form>
        </div>
        <pre class="demo"><code>&lt;form action="javascript:void(0);"&gt;
  &lt;fieldset&gt;
    &lt;label for="text"&gt;First Name&lt;/label&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
    &lt;div class="input"&gt;
      &lt;input type="text" name="text" id="text" placeholder="Enter your first name"&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;

  &lt;fieldset&gt;...&lt;/fieldset&gt;

  &lt;fieldset&gt;...&lt;/fieldset&gt;
&lt;/form&gt;</code></pre>
      </div>

      <hr>

      <h4>Fieldset - Max Width</h4>
      <p>To ensure elements do not exceed a certain width, apply the <code>.fieldset--widthMax</code> class.</p>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <div class="inline">
              <fieldset class="fieldset--widthMax">
                <label for="text">input</label>
                <div class="input">
                  <input type="text" name="text" id="text" placeholder="Enter a new film title">
                </div>
              </fieldset>
            </div>
          </form>
        </div>
        <pre class="demo"><code>&lt;fieldset class="fieldset--widthMax"&gt;...&lt;/fieldset&gt;</code></pre>
      </div>

      <hr>

      <h4>Overriding Default Widths</h4>
      <p>By default, inputs are <strong>100% width</strong>, but you can override this using <code>.input--10pc</code> to <code>.input--90pc</code>.</p>
      <table class="table--mobile table--rowHover" summary="This is an example of a table">
        <thead>
          <tr>
            <th>Class:</th>
            <th>Width:</th>
            <th>Example:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--10pc</code></span></td>
            <td data-title="Width"><span class="cell-content">10%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--10pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--20pc</code></span></td>
            <td data-title="Width"><span class="cell-content">20%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--20pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--30pc</code></span></td>
            <td data-title="Width"><span class="cell-content">30%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--30pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--40pc</code></span></td>
            <td data-title="Width"><span class="cell-content">40%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--40pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--50pc</code></span></td>
            <td data-title="Width"><span class="cell-content">50%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--50pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--60pc</code></span></td>
            <td data-title="Width"><span class="cell-content">60%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--60pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--70pc</code></span></td>
            <td data-title="Width"><span class="cell-content">70%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--70pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--80pc</code></span></td>
            <td data-title="Width"><span class="cell-content">80%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--80pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
          <tr>
            <td data-title="Class"><span class="cell-content"><code>.input--90pc</code></span></td>
            <td data-title="Width"><span class="cell-content">90%</span></td>
            <td data-title="Example">
              <span class="cell-content">
                <form action="javascript:void(0);">
                  <fieldset class="fieldset--widthMax">
                    <div class="input input--90pc">
                      <input type="text" name="text" id="text" placeholder="Width 10%">
                    </div>
                  </fieldset>
                </form>
              </span>
            </td>
          </tr>
        </tbody>
      </table>

      <hr>

      <h4>Inline Fieldsets & Elements</h4>
      <p>Need multiple inputs side by side? Wrap them inside a <code>.inline</code> <strong>div</strong>, and apply <code>.inline__child</code> to each fieldset.</p>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <div class="inline">
              <fieldset class="inline__child">
                <label for="text">First Name</label>
                <div class="input">
                  <input type="text" name="text" id="text" placeholder="First name">
                </div>
              </fieldset>
              <fieldset class="inline__child">
                <label for="text">Last Name</label>
                <div class="input">
                  <input type="text" name="text" id="text" placeholder="Last name">
                </div>
              </fieldset>
            </div>
          </form>
        </div>
        <pre class="demo"><code>&lt;div class="inline"&gt;
  &lt;fieldset class="inline__child"&gt;...&lt;/fieldset&gt;
  &lt;fieldset class="inline__child"&gt;...&lt;/fieldset&gt;
&lt;/div&gt;</code></pre>
      </div>

      <hr>

      <h4>Inline Children (Width Modifier)</h4>
      <p>You can also adjust the width of <strong>inline children</strong> using <code>.inline__child--grid-X</code>, where <strong>X</strong> is the number of columns.</p>
      <div class="wrapper">
        <div class="example">
          <form action="javascript:void(0);">
            <div class="inline">
              <fieldset class="inline__child">
                <label for="text">First Name</label>
                <div class="input">
                  <input type="text" name="text" id="text" placeholder="Guy">
                </div>
              </fieldset>
              <fieldset class="inline__child inline__child--grid-2">
                <label for="text">Middle Name</label>
                <div class="input">
                  <input type="text" name="text" id="text" placeholder="Dude">
                </div>
              </fieldset>
              <fieldset class="inline__child">
                <label for="text">Last Name</label>
                <div class="input">
                  <input type="text" name="text" id="text" placeholder="Man">
                </div>
              </fieldset>
            </div>
          </form>
        </div>
        <pre class="demo"><code>&lt;div class="inline"&gt;
  &lt;fieldset class="inline__child"&gt;...&lt;/fieldset&gt;
  &lt;fieldset class="inline__child inline__child--grid-2"&gt;...&lt;/fieldset&gt;
  &lt;fieldset class="inline__child"&gt;...&lt;/fieldset&gt;
&lt;/div&gt;</code></pre>
      </div>

    </div>
  </div>
</section>

<? include "includes/footer-alt.php"; ?>