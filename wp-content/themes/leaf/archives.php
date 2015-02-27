<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div id="overcontent">

  <div id="contentarea">

    <div id="content">

      <div class="topleftpost">
        <div class="topright">
          <div class="bottomleft">
            <div class="bottomright">
              <div class="hpost">
                <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                <h2>Archives by Month:</h2>
                <ul>
                  <?php wp_get_archives('type=monthly'); ?></ul>

                <h2>Archives by Subject:</h2>
                <ul>
                  <?php wp_list_cats(); ?></ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php get_sidebar(); ?></div>
</div>
<?php get_footer(); ?>