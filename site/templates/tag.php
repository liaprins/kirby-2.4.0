<?php snippet('head-open') ?>


<?php snippet('share-settings-common') ?>


<?php snippet('share-settings-other') ?>


<?php snippet('head-close') ?>


    <!-- I MOVED THE HOME GLASSES ICON INTO THE 'menu' SNIPPET SO CALLING IT NOW INSTEAD OF 'internal-menu' SNIPPET -->
    <?php snippet('menu') ?>
   
    <main class="desktopcontent">

        <!-- titling the page after the tag that brought us here -->
        <!-- NOT SURE IF THIS WILL STAY AS <p> -->
        <p id="tagpagename" class="xl-textface">
            #<?php echo param('tag') ?>
        </p>

        <!-- pulling any introductory text for the page, if there's any from the panel -->
        <span class="l-textface">
            <?php echo $page->text()->kirbytext() ?>
        </span>

    </main>


    <!-- establishing a separate div so I can make it wider in screens with more than one result wide to accommodate margins I need to put on both L + R sides of all results so they have proper spacing between each other, but don't look like they're extending past the page margins -->
    <div class="resultarea"> 

        <div class="resultcolumn">

        <!-- resulting article attributes defined in results snippet -->
        <?php foreach($site->page('blog')
                           ->children()
                           ->visible() 
                           ->filterBy('tags', param('tag'), ',')
                           ->flip() as $result): ?>

            <?php snippet('result', array('result' => $result)) ?>
	
        <?php endforeach ?>

        </div>    <!-- closing #column div -->

    </div>    <!-- closing "searchtagresult" div -->










<div id="columncontainer">

  <div id="columns">
    
    <img class="puppy" src="http://www.cutestpaw.com/wp-content/uploads/2011/11/How-is-it-so-fluffy.jpg">

    <img class="puppy" src="http://www.cutestpaw.com/wp-content/uploads/2011/11/Possessed.jpeg">

    <img class="puppy" src="https://s-media-cache-ak0.pinimg.com/736x/05/e3/c5/05e3c5c27d1ea030e30ff81d4dad681b.jpg">

    <img class="puppy" src="https://i.ytimg.com/vi/dAJlMUOjv1U/hqdefault.jpg">

    <img class="puppy" src="http://www.zarias.com/wp-content/uploads/2015/12/61-cute-puppies.jpg">

    <img class="puppy" src="http://www.petyourdog.com/uploads/dog_pictures/large/1392625476~Bulldog-puppy-in-the-morning.jpg">

    <img class="puppy" src="http://1funny.com/wp-content/uploads/2015/04/ultimate-cute-puppies-compilatio.jpg">

    <img class="puppy" src="http://www.surewise.com/sww.v4/wp-content/uploads/2015/09/Schanuzer.png">

    <img class="puppy" src="https://s-media-cache-ak0.pinimg.com/736x/67/f4/56/67f456c884e6b8c9e75a0f26582b6676.jpg">
  
  </div>

</div>










    <?php snippet('footer') ?>




