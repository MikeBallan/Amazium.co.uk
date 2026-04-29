<aside class="aside">
	<div class="aside--header">
		<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 63" class="icon icon--amazium"><path d="M63 0v63H0V0zm-3 3H3v57h57zM25.044 18l10.352 28h-6.863l-2.043-5.88H15.77L13.728 46H7l10.352-28zM54 26v4.71l-8.332 9.643H54V46H37.354v-4.567l8.332-9.786h-8.332V26zm-32.802-1-3.427 9h6.854zm30.18-14.233q.224 0 .392.172a.574.574 0 0 1 0 .811.533.533 0 0 1-.786 0 .57.57 0 0 1-.002-.81.54.54 0 0 1 .396-.173m3.402-2.7v.807h-1.437l-.015.595h.361l.2.008q.481.044.768.304.343.312.343.83 0 .597-.392.955-.392.36-1.002.359-.41 0-.751-.144a1.8 1.8 0 0 1-.452-.27l-.124-.114.422-.643.111.094q.122.091.289.165.25.111.5.111.251 0 .385-.123a.43.43 0 0 0 .133-.331q0-.38-.511-.422l-.136-.006h-.907l.047-2.174zM48.956 8q.382 0 .693.128.31.13.498.38a.95.95 0 0 1 .188.585q0 .584-.554.85.645.267.645.88a.92.92 0 0 1-.2.59 1.23 1.23 0 0 1-.532.38 2 2 0 0 1-.738.129q-.407 0-.738-.128a1.23 1.23 0 0 1-.532-.382.92.92 0 0 1-.2-.588q0-.617.642-.882-.55-.265-.55-.85 0-.332.187-.583a1.15 1.15 0 0 1 .496-.38Q48.573 8 48.956 8m-1.767.068v.687l-1.447 3.1h-1.011l1.446-2.973h-1.643v-.814zm1.767 2.212a.62.62 0 0 0-.388.12.39.39 0 0 0-.157.326q0 .207.156.32a.64.64 0 0 0 .389.113.64.64 0 0 0 .386-.113.37.37 0 0 0 .156-.32.39.39 0 0 0-.157-.327.6.6 0 0 0-.385-.119m0-1.504a.53.53 0 0 0-.338.106.35.35 0 0 0-.134.295q0 .192.134.301.134.11.338.11a.5.5 0 0 0 .335-.11.37.37 0 0 0 .134-.301.35.35 0 0 0-.134-.295.53.53 0 0 0-.335-.106"/></svg></a>
	</div>
	<div class="aside--body">
		<ol class="nav--aside">
			<li class="label"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="icon"><path d="M80-160v-480h120v-160h240v160h80v-160h240v160h120v480zm80-80h640v-320H160zm120-400h80v-80h-80zm320 0h80v-80h-80zM160-240h640zm120-400h80zm320 0h80z"/></svg>Foundations</li>
			<li <?php if ($strSelf=="Foundations") { echo "class='active'"; } ?>><a href="foundations.php">Overview</a></li>
			<li <?php if ($strSelf=="BEM methodology") { echo "class='active'"; } ?>><a href="bem-methodology.php">BEM methodology</a></li>
			<li <?php if ($strSelf=="Color") { echo "class='active'"; } ?>><a href="color.php">Color</a></li>
			<li <?php if ($strSelf=="Iconography") { echo "class='active'"; } ?>><a href="iconography.php">Iconography</a></li>
			<li <?php if ($strSelf=="Media Queries") { echo "class='active'"; } ?>><a href="media-queries.php">Media Queries</a></li>
			<li <?php if ($strSelf=="Typography") { echo "class='active'"; } ?>><a href="typography.php">Typography</a></li>
			<li <?php if ($strSelf=="Utilities") { echo "class='active'"; } ?>><a href="utilities.php">Utilities</a></li>

			<li class="label"><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 -960 960 960"><path d="M120-280v-400q0-33 23.5-56.5T200-760h560q33 0 56.5 23.5T840-680v400q0 33-23.5 56.5T760-200H200q-33 0-56.5-23.5T120-280m293-240h347v-160H413zm214 240h133v-160H627zm-214 0h134v-160H413zm-213 0h133v-400H200z"/></svg>Grids</li>
			<li <?php if ($strSelf=="Grid") { echo "class='active'"; } ?>><a href="grid.php">Overview</a></li>
			<li <?php if ($strSelf=="Grid Basics") { echo "class='active'"; } ?>><a href="grid-basics.php">Getting started</a></li>
			<li <?php if ($strSelf=="Fluid Grid") { echo "class='active'"; } ?>><a href="fluid-grid.php">Fluid / Responsive</a></li>
			<li <?php if ($strSelf=="Nested grid") { echo "class='active'"; } ?>><a href="nested-grid.php">Nested grids</a></li>
			<li <?php if ($strSelf=="Offsetting Grids") { echo "class='active'"; } ?>><a href="offsetting-grids.php">Offsetting</a></li>
			<li <?php if ($strSelf=="Ordering Grids") { echo "class='active'"; } ?>><a href="ordering-grids.php">Ordering</a></li>

			<li class="label"><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 -960 960 960"><path d="m424-312 282-282-56-56-226 226-114-114-56 56zM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120zm0-80h560v-560H200zm0-560v560z"/></svg>Forms</li>
			<li <?php if ($strSelf=="Form") { echo "class='active'"; } ?>><a href="form.php">Overview</a></li>
			<li <?php if ($strSelf=="Form Basics") { echo "class='active'"; } ?>><a href="form-basics.php">Getting started</a></li>
			<li <?php if ($strSelf=="Checkbox") { echo "class='active'"; } ?>><a href="checkbox.php">Checkbox</a></li>
			<li <?php if ($strSelf=="Label") { echo "class='active'"; } ?>><a href="label.php">Label</a></li>
			<li <?php if ($strSelf=="Radio") { echo "class='active'"; } ?>><a href="radio.php">Radio</a></li>
			<li <?php if ($strSelf=="Radio Boxed") { echo "class='active'"; } ?>><a href="radio-boxed.php">Radio: Boxed</a></li>
			<li <?php if ($strSelf=="Select") { echo "class='active'"; } ?>><a href="select.php">Select</a></li>
			<li <?php if ($strSelf=="Switch") { echo "class='active'"; } ?>><a href="switch.php">Switch</a></li>
			<li <?php if ($strSelf=="Textarea") { echo "class='active'"; } ?>><a href="textarea.php">Text area</a></li>
			<li <?php if ($strSelf=="Text Field") { echo "class='active'"; } ?>><a href="text-field.php">Text field</a></li>
			<li <?php if ($strSelf=="Toggle") { echo "class='active'"; } ?>><a href="toggle.php">Toggle</a></li>

			<li class="label"><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 -960 960 960"><path d="M120-200v-240h320v240zm400 0v-240h320v240zm-320-80h160v-80H200zm400 0h160v-80H600zM120-520v-240h320v240zm400 0v-240h320v240zm-320-80h160v-80H200zm80-40"/></svg>Components</li>
			<li <?php if ($strSelf=="Components") { echo "class='active'"; } ?>><a href="components.php">Overview</a></li>
			<li <?php if ($strSelf=="Avatar") { echo "class='active'"; } ?>><a href="avatar.php">Avatar</a></li>
			<li <?php if ($strSelf=="Badge") { echo "class='active'"; } ?>><a href="badge.php">Badge</a></li>
			<li <?php if ($strSelf=="Blockquote") { echo "class='active'"; } ?>><a href="blockquote.php">Blockquote</a></li>
			<li <?php if ($strSelf=="Button") { echo "class='active'"; } ?>><a href="button.php">Button</a></li>
			<li <?php if ($strSelf=="Card") { echo "class='active'"; } ?>><a href="card.php">Card</a></li>
			<li <?php if ($strSelf=="Code") { echo "class='active'"; } ?>><a href="code.php">Code</a></li>
			<li <?php if ($strSelf=="Table") { echo "class='active'"; } ?>><a href="table.php">Dynamic table</a></li>
			<li <?php if ($strSelf=="Image") { echo "class='active'"; } ?>><a href="image.php">Image</a></li>
			<li <?php if ($strSelf=="List") { echo "class='active'"; } ?>><a href="list.php">List</a></li>
			<li <?php if ($strSelf=="Modal") { echo "class='active'"; } ?>><a href="modal.php">Modal dialog</a></li>
			<li <?php if ($strSelf=="Message") { echo "class='active'"; } ?>><a href="message.php">Section message</a></li>
		</ol>
	</div>
	<div class="aside--footer">
		<a href="https://github.com/MikeBallan/Amazium-5" target="_blank"><svg aria-hidden="true" class="icon" width="64" height="64" viewBox="0 0 64 64"><path d="M32 0L32 0C14.3 0 0 15.3 0 33.4c0 14.4 9.2 26.3 21.7 30.6 1.6 0.3 2.3-0.7 2.3-1.6 0-0.7 0-3 0-5.6 -9 2-10.9-4.3-10.9-4.3 -1.3-3.6-3.5-4.9-3.5-4.9 -2.9-2 0.3-2 0.3-2 3.2 0.3 4.8 3.3 4.8 3.3 2.9 5.3 7.7 3.9 9.3 3 0.3-2 1-3.6 1.9-4.3 -6.7-1-14.5-3.6-14.5-16.4 0-3.6 1.3-6.6 3.2-8.9 -0.3-0.7-1.3-3.9 0.3-8.5 0 0 2.6-1 8.7 3.3 2.9-0.7 5.8-1 8.4-1s5.5 0.3 8 1c6.1-4.3 8.7-3.3 8.7-3.3 1.6 4.6 0.6 7.9 0.3 8.5 1.9 2.3 3.2 5.3 3.2 8.9 0 12.5-7.3 15.4-14.6 16.1 1.3 1 2.4 3 2.4 6.2 0 4.3 0 7.9 0 8.9 0 1 0.5 2 2.1 1.6C55 59.7 64 47.8 64 33.4 64.3 15.3 49.6 0 32 0z"></path></svg>Download</a>
	</div>
</aside>