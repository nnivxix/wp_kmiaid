<footer class="bg-[#3C4F76] px-20 flex flex-col items-center py-16 w-full  text-[#fcfcfc] font-semibold">
    <img src="<?php echo get_template_directory_uri( )  . "/assets/logo-iaid.png" ; ?>" alt="" class="h-[56px]">
    <h1 class="text-xl pt-4">KM IAID</h1>
    <nav class="w-full py-8 md:w-1/2 ">
      <ul class="flex justify-between">
        <li><a href="#">Tentang</a></li>
        <li><a href="#">Organisasi</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>
    <ul class="flex w-full md:w-1/2 justify-between">
      <li><a href="#"><img src="<?php echo get_template_directory_uri() . "./assets/socmed/facebook.svg" ?>"  alt="" srcset=""></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri() . "./assets/socmed/instagram.svg"?> " alt="" srcset=""></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri() . "./assets/socmed/tiktok.svg"?> " alt="" srcset=""></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri() . "./assets/socmed/twitter.svg" ?>" alt="" srcset=""></a></li>
    </ul>
  </footer>
  <?php
wp_footer();
?>


</html>