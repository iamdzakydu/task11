<html>
    <head>
    <link rel="stylesheet" href="styles.css">
        <title>item Table</title>
    </head>

<?php 

$data = [
    [
      "position" => 1,
      "url" => "https://www.nike.com/",
      "title" => "Nike. Just Do It. Nike.com",
      "description" => "Nike menghadirkan produk, pengalaman, dan layanan inovatif untuk menginspirasi para atlet."
    ],
    [
      "position" => 2,
      "url" => "https://www.instagram.com/nike/?hl=de",
      "title" => "Nike (@nike) • Instagram photos and videos",
      "description" => "255m Pengikut, 147 Pengikut, 1019 Postingan - Lihat foto dan video Instagram dari Nike (@nike)"
    ],
    [
      "position" => 3,
      "url" => "https://twitter.com/nike",
      "title" => "Nike - Twitter",
      "description" => "Selamat datang di NikeFC. Kami bukan klub. Kami adalah komunitas. Jika Anda menyukai permainan sepak bola, Anda adalah bagian dari Nike FC. Mari kita ubah permainannya,..."
    ],
    [
      "position" => 4,
      "url" => "https://en.wikipedia.org/wiki/Nike,_Inc.",
      "title" => "Nike, Inc. - Wikipedia",
      "description" => "Nike, Inc adalah perusahaan multinasional Amerika yang bergerak dalam bidang desain, pengembangan, manufaktur, serta pemasaran dan penjualan alas kaki, ..."
    ],
    [
      "position" => 5,
      "url" => "https://www.youtube.com/user/nike",
      "title" => "Nike - YouTube",
      "description" => "Kami akan terus membela kesetaraan dan berupaya mendobrak hambatan bagi atlet* di seluruh dunia. Kami akan melakukan dan berinvestasi lebih banyak untuk menjunjung ..."
    ],
    
  ]

?>
<table>
    <tr>
        <th class="thmain">Position</th>
        <th class="thmain">Url</th>
        <th class="thmain">Title</th>
        <th class="thmain">Description</th>
    </tr>
    <?php 
    foreach ($data as $item): 
        ?>
    <tr>
        <td class="tdmain"><?php echo $item['position'] ?></td>
        <td class="tdmain"><a href="<?php echo $item['url'] ?>" target="_blank"><?php echo $item['url'] ?></td>
        <td class="tdmain"><?php echo $item['title'] ?></td>
        <td class="tdmain"><?php echo $item['description'] ?></td>
    </tr>
    <br /> 
    <?php endforeach; ?>
</table>


</html>