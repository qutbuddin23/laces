<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php
		include_once('common/header.php');
	?>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php
						include_once('common/menu.php');
					?>
				<div id="main">
						<div class="inner">
							<h1>
							<?php
								$type = $_GET['type'];
								$laces = [
									'aarushi',
									'white-cotton-suite-laces',
									'EMBROIDERY',
									'saree-border',
									'fancy-saree',
									'aditya-laces',
									'embroidery-red',
									'ribbon-gold',
									'aarushi-fashion',
									'gpo-laces',
									'designer-laces',
									'diamond-laces',
								];

								if(! in_array($type, $laces)) {
									echo "This lace is not found!";
								} else {
									echo strtoupper($type);
								}
							?>
							</h1>
							<?php 
								if($type == 'aarushi') { ?>
							<!-- Text -->
								<section>
										<h2>Text</h2>
										<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
										This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
										This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
										<hr />
										<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
										<hr />
									</section>
								<?php } ?>


								<?php 
								if($type == 'aarushi') { ?>
							<!-- Text -->
								<section>
										<h2>Text</h2>
										<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
										This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
										This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
										<hr />
										<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
										<hr />
									</section>
								<?php } ?>

								
								</div>
							</div>


				<!-- Footer -->
                <?php
                    include_once('common/footer.php');
                ?>	

			</div>