<?php
get_header();
?>
<div class="hero grid grid-cols-1 text-center text-[#145C9E] my-10" role="hero">
    <h1 class="text-[48px] font-bold">Satu Website</h1>
    <h1 class="text-[48px] font-bold">Untuk Semuanya</h1>
    <h2 class="px-12 mb-8 text-2xl">Membangun dan membantu kampus Darussalam menjadi lebih baik dan transparan.</h2>
    <img class="my-10 w-full" loading="lazy" src="<?php echo get_template_directory_uri(). "/assets/hero_img.png"; ?>"" alt="hero image">
  </div>

  <div class="about text-center px-12 mb-8 grid grid-cols-2" role="about">
    <img src="<?php echo get_template_directory_uri() . "/assets/tentang.png" ;?> "alt="tentang"  srcset="" class="hidden md:block col-span-1 row-span-2 w-[420px] justify-self-center">
    <h1 class="text-2xl font-bold col-span-2 lg:col-span-1 md:text-4xl lg:self-center">Tentang KM IAID</h1>
    <h2 class="text-md pt-3 col-span-2 lg:col-span-1 md:text-xl lg:px-[100px]">Dewan Perwakilan Mahasiswa atau disebut dengan DPM merupakan badan legislatif yang bernaung di wilayah kampus untuk membuat dan mengatur aturan-aturan yang berkaitan dengan kebijakan-kebijakan di organisasi kampus.</h2>
  </div>

  <div class="blog grid grid-cols-2 bg-[#145c9e] text-[#FCFCFC] py-12 md:px-14" role="blog">
    <h1 class="text-3xl font-bold p-5 col-span-2">Berita dan Catatan</h1>
    <article class="p-5 col-span-2 md:col-span-1" >
      <h1 class="text-xl">Tujuan Pembentukan Organisasi</h1>
      <p class="text-xs py-3">Jakob Workman • 12/28/2021</p>
      <p>Tujuan Organisasi Jenis dan Faktor Pembentuknya. Tujuan organisasi adalah sesuatu yang ingin dicapai dengan segala kemampuan yang dimiliki oleh organisasi tersebut. manfaat-manfaat yang diperoleh dari penetapan tujuan adalah sebagai berikut: Membantu memperkenalkan atau menonjolkan eksistensi organisasi di mata pemerintah, konsumen...</p>
    </article>

    <article class="p-5 col-span-2 md:col-span-1" >
      <h1 class="text-xl">Tujuan Pembentukan Organisasi</h1>
      <p class="text-xs py-3">Jakob Workman • 12/28/2021</p>
      <p>Tujuan Organisasi Jenis dan Faktor Pembentuknya. Tujuan organisasi adalah sesuatu yang ingin dicapai dengan segala kemampuan yang dimiliki oleh organisasi tersebut. manfaat-manfaat yang diperoleh dari penetapan tujuan adalah sebagai berikut: Membantu memperkenalkan atau menonjolkan eksistensi organisasi di mata pemerintah, konsumen...</p>
    </article>

    <article class="p-5 col-span-2 md:col-span-1" >
      <h1 class="text-xl">Tujuan Pembentukan Organisasi</h1>
      <p class="text-xs py-3">Jakob Workman • 12/28/2021</p>
      <p>Tujuan Organisasi Jenis dan Faktor Pembentuknya. Tujuan organisasi adalah sesuatu yang ingin dicapai dengan segala kemampuan yang dimiliki oleh organisasi tersebut. manfaat-manfaat yang diperoleh dari penetapan tujuan adalah sebagai berikut: Membantu memperkenalkan atau menonjolkan eksistensi organisasi di mata pemerintah, konsumen...</p>
    </article>

    <article class="p-5 col-span-2 md:col-span-1" >
      <h1 class="text-xl">Tujuan Pembentukan Organisasi</h1>
      <p class="text-xs py-3">Jakob Workman • 12/28/2021</p>
      <p>Tujuan Organisasi Jenis dan Faktor Pembentuknya. Tujuan organisasi adalah sesuatu yang ingin dicapai dengan segala kemampuan yang dimiliki oleh organisasi tersebut. manfaat-manfaat yang diperoleh dari penetapan tujuan adalah sebagai berikut: Membantu memperkenalkan atau menonjolkan eksistensi organisasi di mata pemerintah, konsumen...</p>
    </article>
  </div>

  <?php
    the_content(  );
  ?>
<?php
get_footer()
?>