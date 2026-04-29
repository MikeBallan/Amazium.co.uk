<?
  $strSelf = "Modal";
  $strParent = "Components";
  $strPrev = "List";
  $strNext = "Message";
  include "includes/header.php";
?>

<? include "includes/aside.php"; ?>

<section class="section">
  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <? include "includes/breadcrumb.php"; ?>
      <h1>Modal dialog</h1>
      <p>Dialogs provide important prompts in a user flow. They can:</p>
      <ul>
        <li>Require an action (e.g., confirmations)</li>
        <li>Communicate important messages (e.g., alerts, notifications)</li>
        <li>Help users accomplish a task (e.g., form submission)</li>
      </ul>
      <hr>

      <h4>Use Cases:</h4>
      <ul>
        <li>Alerts – Notify users about system changes or warnings</li>
        <li>Confirmations – Require user approval before proceeding</li>
        <li>Quick Actions – Perform small tasks without leaving the page</li>
      </ul>
    </div>
  </div>

  <div class="grid grid--fluid">
    <div class="grid__item grid__item--span-12">
      <h4>Simple dialog</h4>
      <p>A basic dialog that interrupts the user with a message or information.</p>
      <ul>
        <li>Uses the <code>&lt;dialog&gt;</code> HTML element for native modal behavior.</dialog>
        <li><code>.show()</code> method opens the dialog, <colde>.close()</colde> dismisses it.</li>
        <li>Includes a <strong>close button</strong> inside the modal.</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <p><button onclick="window.dialogplain.show();" class="btn">Open simple dialog</button></p>
        </div>
        <pre class="demo"><code>&lt;button onclick="window.dialogplain.show();" class="btn"&gt;Open simple dialog&lt;/button&gt;

&lt;dialog id="dialog" class="dialog"&gt;
  &lt;div class="dialog__body"&gt;...&lt;/div&gt;
&lt;/dialog&gt;</code></pre>
      </div>

      <hr>

      <h4>Advanced dialog</h4>
      <p>An enhanced dialog with header, body, and footer sections.</p>
      <ul>
        <li>Includes a <strong>title</strong> in the header section.</li>
        <li>The <strong>footer</strong> provides <strong>action buttons</strong> (e.g., cancel/confirm).</li>
        <li>Uses <code>.close()</code> to dismiss the modal.</li>
      </ul>
      <div class="wrapper">
        <div class="example">
          <p><button onclick="window.dialog.show();" class="btn">Open advanced dialog</button></p>
        </div>
        <pre class="demo"><code>&lt;button onclick="window.dialog.show();" class="btn"&gt;Open simple dialog&lt;/button&gt;
          
&lt;dialog id="dialog" class="dialog"&gt;
  &lt;div class="dialog__header"&gt;...&lt;/div&gt;
  &lt;div class="dialog__body"&gt;...&lt;/div&gt;
  &lt;div class="dialog__footer"&gt;...&lt;/div&gt;
&lt;/dialog&gt;</code></pre>
      </div>
    </div>
  </div>
</section>

<dialog id="dialogplain" class="dialog">
  <div class="dialog__wrapper">
    <div class="dialog__body">
      <button onclick="window.dialogplain.close();" class="btn btn--dialog"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" class="icon"><path d="M24 1.013c.611.61.61 1.602 0 2.213l-9.287 9.283L24 21.792a1.565 1.565 0 1 1-2.213 2.214L12.5 14.72l-9.287 9.285A1.565 1.565 0 0 1 1 21.792l9.286-9.283L1 3.226a1.565 1.565 0 0 1 2.213-2.214l9.287 9.284 9.287-9.284a1.565 1.565 0 0 1 2.213 0Z"/></svg></button>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna. Nunc sed blandit libero volutpat sed cras ornare arcu. Eget nunc scelerisque viverra mauris in aliquam sem fringilla ut. Fermentum dui faucibus in ornare quam. Sagittis id consectetur purus ut faucibus. Tincidunt lobortis feugiat vivamus at. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Donec ac odio tempor orci dapibus ultrices in iaculis. Tristique senectus et netus et malesuada fames ac turpis. Lectus mauris ultrices eros in. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. Vestibulum sed arcu non odio euismod lacinia at quis risus. Proin nibh nisl condimentum id venenatis. Placerat in egestas erat imperdiet sed euismod. Semper auctor neque vitae tempus. Ac turpis egestas sed tempus urna et. Convallis posuere morbi leo urna molestie at elementum eu facilisis.</p>
      <p>Imperdiet massa tincidunt nunc pulvinar sapien et. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Sit amet cursus sit amet dictum sit amet justo. Eget aliquet nibh praesent tristique magna. Ullamcorper sit amet risus nullam eget felis eget. Vel quam elementum pulvinar etiam. Netus et malesuada fames ac turpis egestas maecenas. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae proin. Volutpat blandit aliquam etiam erat. Condimentum mattis pellentesque id nibh tortor id. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Libero justo laoreet sit amet cursus sit amet dictum. Egestas diam in arcu cursus euismod.</p>
    </div>
  </div>
</dialog>

<dialog id="dialog" class="dialog">
  <div class="dialog__header">
    <button onclick="window.dialog.close();" class="btn btn--dialog"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" class="icon"><path d="M24 1.013c.611.61.61 1.602 0 2.213l-9.287 9.283L24 21.792a1.565 1.565 0 1 1-2.213 2.214L12.5 14.72l-9.287 9.285A1.565 1.565 0 0 1 1 21.792l9.286-9.283L1 3.226a1.565 1.565 0 0 1 2.213-2.214l9.287 9.284 9.287-9.284a1.565 1.565 0 0 1 2.213 0Z"/></svg></button>
    <p>Header</p>
  </div>
  <div class="dialog__body">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna. Nunc sed blandit libero volutpat sed cras ornare arcu. Eget nunc scelerisque viverra mauris in aliquam sem fringilla ut. Fermentum dui faucibus in ornare quam. Sagittis id consectetur purus ut faucibus. Tincidunt lobortis feugiat vivamus at. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Donec ac odio tempor orci dapibus ultrices in iaculis. Tristique senectus et netus et malesuada fames ac turpis. Lectus mauris ultrices eros in. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. Vestibulum sed arcu non odio euismod lacinia at quis risus. Proin nibh nisl condimentum id venenatis. Placerat in egestas erat imperdiet sed euismod. Semper auctor neque vitae tempus. Ac turpis egestas sed tempus urna et. Convallis posuere morbi leo urna molestie at elementum eu facilisis.</p>
    <p>Imperdiet massa tincidunt nunc pulvinar sapien et. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Sit amet cursus sit amet dictum sit amet justo. Eget aliquet nibh praesent tristique magna. Ullamcorper sit amet risus nullam eget felis eget. Vel quam elementum pulvinar etiam. Netus et malesuada fames ac turpis egestas maecenas. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae proin. Volutpat blandit aliquam etiam erat. Condimentum mattis pellentesque id nibh tortor id. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Libero justo laoreet sit amet cursus sit amet dictum. Egestas diam in arcu cursus euismod.</p>
  </div>
  <div class="dialog__footer">
    <div class="btn-group">
      <button onclick="window.dialog.close();" class="btn btn--ghost">Button</button>
      <button onclick="window.dialog.close();" class="btn btn--positive">Button</button>
    </div>
  </div>
</dialog>

<? include "includes/footer-alt.php"; ?>