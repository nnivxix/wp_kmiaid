<div class="blog grid grid-cols-2 bg-[#145c9e] text-[#FCFCFC] py-12 md:px-14" role="blog">
    <h1 class="text-3xl font-bold p-5 col-span-2">Berita dan Catatan</h1>
    <article class="p-5 col-span-2 md:col-span-1" >
      <h1 class="text-xl"><a href="<?php get_post_permalink(); ?>"> <?php the_title(); ?></a></h1>
      <p class="text-xs py-3"><?php the_author() . ' • ' . the_date() ; ?></p>
      <p><?php the_excerpt(); ?></p>
    </article>
</div>