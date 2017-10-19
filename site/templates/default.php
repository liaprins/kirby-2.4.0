<?php snippet('head-open') ?>


<?php snippet('share-settings-common') ?>


<?php snippet('share-settings-other') ?>


<?php snippet('head-close') ?>


    <?php snippet('menu') ?>

    <!-- calling the JS scripts used on everypage -->
    <?php snippet('scripts-sitewide') ?>


    <!-- This encompasses everything within <body> except for <nav>
    This is so that there is an element that can be clicked on that will be anything except <nav>,
    that will be recognized in JS menu.js script, that can have an event listener applied when it is clicked on, that will close the <nav> -->
    <div id="everythingexceptnav">


    <main>

        <div class="desktopcontent">

            <!-- NOT SURE THAT THIS WILL STAY AS <h2> -->
            <h2 class="extracontentpagetitle">
                <?php echo $page->title()->html() ?>
            </h2>

            <!-- text for the page -->
            <span class="l-textface">
                <?php echo $page->text()->kirbytext() ?>
            </span>
    

            <!-- Image of broken glasses -->

            <!-- <img src= "<?php echo url('assets/images/broken-glasses.gif') ?>" alt="Illustration of broken glasses" id="brokenglasses"> -->
            <img src= "<?php echo url('content/error/broken-glasses.gif') ?>" alt="Illustration of broken glasses" id="brokenglasses">

            <!--
            <?php if(!$page->illustration()->empty()): ?>
                <?php echo kirbytext($page->illustration()) ?>
            <?php endif ?>
            -->

        </div>

    </main>


    <?php snippet('footer') ?>
