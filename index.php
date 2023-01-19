<?php
    require_once"./classes/Product.php";
    require_once"./classes/Category.php";

  /*   creo le categorie
 */
    $cat = new Category("gatto",);
    $food = new Category("cibo",);
    $dog = new Category("cane",);
    $dogBed = new Category("cuccetta per cani",);
    $catBed = new Category("cuccetta per gatti",);

    $croccantiniGenerici = new Product ("croccantini per tutti",5.50,$dog,true,77,"https://picsum.photos/id/237/200/300");
    $tiragraffi = new Product ("Tiragraffi",8.0,$cat);


    $storeProducts = [ 
        $croccantiniGenerici,
        $tiragraffi
        
    ];

    var_dump($storeProducts);
?>    