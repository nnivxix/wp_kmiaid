<div class="container">
  <div class="post mb-5">
    <div class="media">

      <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url( "thumbnail" ) ?>" alt="<?php the_title(); ?>">
      <div class="media-body">
        <h3 class="title mb-1"><a href="<?php echo 'hello' ?>"><?php the_title(); ?></a></h3>
        <div class="meta mb-1"><span class="date">Published <?php the_date(); ?>
        </div>
        <div class="intro">
        </div>
        <a class="more-link" href="<?php the_permalink(); ?>"> Read More &rarr;</a>
      </div>
      <!--//media-body-->
    </div>
    <!--//media-->
  </div>
</div>