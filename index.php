<?php
get_header();
?>

<!-- wordpress blog -->
<!-- displaying blogs-->
<article>


<h1>display blogs</h1>
<?php
  if (have_posts()) {
    while (have_posts()) {

      the_post();

      get_template_part( 'template-parts/content', 'blogs' );
    }
  }
?>
</article>


<?php
get_footer();
?>