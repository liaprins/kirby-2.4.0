<?php snippet('head-open') ?>


<?php snippet('head-title-all-but-home') ?>


<?php snippet('share-settings-common') ?>


<?php snippet('share-settings-hello') ?>

 	<!-- Calls the stylesheet that zeroes out the default browser renderings -->
 	<?php echo css('assets/css/reset.css') ?>

 	<!-- Calls the stylesheet that hold the designs -->
 	<!-- Will combine these into one style sheet by copying and pasting the contents together, once 100% finished, for performance reasons -->
 	<?php echo css('assets/css/fonts.css') ?>
 	<?php echo css('assets/css/qqnavfooter.css') ?>

 	<?php echo css('assets/css/somepages.css') ?>
 	<?php echo css('assets/css/text.css') ?>
 	<?php echo css('assets/css/menu-hamburger.css') ?>

 	<!-- Media queries -->
 	<?php echo css('assets/css/mediaqueries.css') ?>
 	<?php echo css('assets/css/qqmediaqueries-override.css') ?>
 	<?php echo css('assets/css/qq-position-override.css') ?>


</head>

<!-- Adding opening body tag here, since all templates call this head-close.php snippet -->
<body>
    <!-- reveal content script -->
    <script src="assets/js/qq.js">
    </script>

    <!-- positions glasses -->
    
    <script src="assets/js/qq-position.js">
    </script>
	

    <!-- parallax scroll -->
    <script src="assets/js/qq-parallax.js">
    </script>
	

    <!-- TEST!!! boxes -->
    <!-- UNCOMMENT BELOW + UNCOMMENT "BOXES" BELOW TO MAKE THEM SHOW -->
    <!--
    <script src="assets/js/qq-position-boxes.js">
    </script>
    
    <script src="assets/js/qq-parallax-boxes.js">
    </script>
	-->

	<!-- positioning the content boxes relative to binocs -->
    <script src="assets/js/qq-content.js">
    </script>
	

<!-- *************************************** ^^^^^ LEAVE ALONE ^^^^^ *************************************** -->


			<!-- title of the page -->
			<h2 id="qqpagetitle">
				<?php echo $page->title()->kirbytext() ?>
			</h2>

			<!-- intro text for QQ page -->
			<span id="qqpagetext" class="l-textface">
				<?php echo $page->text()->kirbytext() ?>
			</span>

			<p id="qqtest">hola</p>

			<!-- </div> -->

	        <!-- images + info (as metadata) stored in QQ content folder directly -->
        	<div id="qqparent">

        		<!-- USE "ORIGINAL METHOD" IF I WANT ANY NEWLY ADDED QUESTION IN THE PANEL TO BE AT THE TOP; WHOLE GROUP OF LARGE GLASSES NEED TO BE AT THE END OF THE ORDER TO SHOW UP ON TOP LAYER -->
        		<!-- "ORIGINAL METHOD" = (without "->flip()") -->
	        	<!-- USE "FLIP METHOD" IF I WANT TO REVERSE THE ORDER OF GLASSES WITHIN EACH GROUP, BUT ALLOW GROUP OF LARGE GLASSES TO BE AT THE TOP OF THE PANEL AND STILL SHOW UP ON TOP LAYER, TOO-->
	        	<!-- "FLIP METHOD" = ADD "->flip()" RIGHT AFTER "->sortBy('sort', 'asc')" TO GET THE GLASSES TO REVERSE ORDER FROM HOW THEY ARE IN PANEL -->
	        	<?php foreach ($page->images()->sortBy('sort', 'asc') as $qqfile): ?>
	    	    
		        <?php $qqsubpage = $qqfile->name(); ?>

		        <!-- Setting up the margin-width randomizer for binoculars' relative positions -->
                <?php $margins = array('0rem', '0.5rem', '1rem', '1.5rem', '2rem', '2.5rem'); ?>
                <?php $rand_margin = $margins[array_rand($margins)]; ?>
    	    	<span class="qqpiece" style="margin-left: <?= $rand_margin ?>; margin-top: <?= $rand_margin ?>">
    	    	<!-- <span class="qqpiece <?php if ($qqfile->category() == 'large'): ?>largeqqpiece<?php endif ?><?php if ($qqfile->category() == 'medium'): ?>mediumqqpiece<?php endif ?><?php if ($qqfile->category() == 'small'): ?>smallqqpiece<?php endif ?>" style="margin-left: <?= $rand_margin ?>; margin-top: <?= $rand_margin ?>"> -->
				
				<!-- <span class="qqpiece"> -->
					
					<div data-clickable="yes" data-id="<?php echo $qqfile->name() ?>" class="qqglassescontainer <?php if ($qqfile->category() == 'large'): ?>largeqqglasses<?php endif ?><?php if ($qqfile->category() == 'medium'): ?>mediumqqglasses<?php endif ?><?php if ($qqfile->category() == 'small'): ?>smallqqglasses<?php endif ?>" title="<?php echo $qqfile->question() ?>" alt="<?php echo $qqfile->question() ?>">
    			    	<div data-innards-clickable="yes" class="lens l-lens" style="background-image: url(<?php echo $qqfile->url() ?>)"></div>
    			    	<div data-innards-clickable="yes" class="knob"></div>
	    		    	<div data-innards-clickable="yes" class="<?php if ($qqfile->category() == 'large'): ?>trapezoid-large<?php endif ?><?php if ($qqfile->category() == 'medium'): ?>trapezoid-medium<?php endif ?><?php if ($qqfile->category() == 'small'): ?>trapezoid-small<?php endif ?>"></div>
    		    		<div data-innards-clickable="yes" class="lens r-lens" style="background-image: url(<?php echo $qqfile->url() ?>)"></div>
    		    	</div>

					<div class="qqcontents <?php if ($qqfile->category() == 'large'): ?>qqcontents-large<?php endif ?><?php if ($qqfile->category() == 'medium'): ?>qqcontents-medium<?php endif ?><?php if ($qqfile->category() == 'small'): ?>qqcontents-small<?php endif ?>" style="display: none;">
						<img src= "<?php echo url('assets/images/x.svg') ?>" alt="close" id="qq-x" class="yellowhover close-x">
						<div class="qqquestion s-display"><?php echo $qqfile->question() ?></div>
						<div class="qqdescription s-textface"><?php echo $qqfile->explanation() ?></div>
					</div>
					
				</span>


				<!-- BOXES UNCOMMENT BELOW + UNCOMMENT qq-position-boxes.js + qq-parallax-boxes.js ABOVE TO MAKE THEM SHOW -->
				<!--
				<div data-id="<?php echo $qqfile->name() ?>" class="qqbox <?php if ($qqfile->category() == 'large'): ?>largeqqbox<?php endif ?><?php if ($qqfile->category() == 'medium'): ?>mediumqqbox<?php endif ?><?php if ($qqfile->category() == 'small'): ?>smallqqbox<?php endif ?>">
				</div>
				-->

    		    <?php endforeach ?>

    		</div>    <!-- close .qqparent -->

    <div id="background"></div>

	<?php snippet('footer-sitewide') ?>


<!-- *************************************** vvvvv footer.php snippet vvvvv LEAVE ALONE vvvvv *************************************** -->


</body>

</html>





























