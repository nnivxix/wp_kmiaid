<!DOCTYPE html>
<html lang="en">
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Website Kwluarga IAID CIAMIS">
<meta name="author" content="KM IAID">
<link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<?php
wp_head();
?>

</head>

<body class="bg-[#fcfcfc]" style="background-color: #fcfcfc;">

  <nav class="flex items-center justify-between flex-wrap bg-white p-6 nav-top " style="background-color:#fcfcfc ;">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <?php
      if (function_exists('the_custom_logo')) {
        $custom_logo = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo);
      }
      ?>
      <img src="<?php echo $logo[0] ?>" class="lg:h-10 h-8" alt="<?php echo bloginfo(); ?>">
      <a href="<?php echo get_site_url()  ; ?>"><h1 class="pl-5 text-2xl text-gray-800 font-bold">KM IAID</h1></a>
      
    </div>

    <label id="menu-toggle1" class="block lg:hidden cursor-pointer flex items-center px-3 py-2 border rounded text-gray-800 border-gray-800 hover:text-gray-800 hover:border-gray-800" for="menu-toggle"><svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
      </svg></label>
    <input class="hidden" type="checkbox" id="menu-toggle" />



    <?php
    wp_nav_menu(array(
      'menu' => 'primary',
      'menu_id' => 'menu',
      'container' => 'ul',
      'container_id' => 'menu',
      'menu_class' => 'hidden  w-full block flex-grow lg:flex text-left lg:text-right justify-end  lg:items-center lg:w-auto',
      'theme_location' => 'primary',
      'container_class' => 'text-sm lg:flex-grow',
      'items_wrap'     => '<ul id="%1$s" class="%2$s test">%3$s</ul>',
    ));
    ?>

    </div>
  </nav>