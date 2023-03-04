<?php

/*
     Variable sistem
     variable built in php (variable yang sudah ada di php)
*/
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br>';
    echo '<br>';



/*
    Variable user
    variable yang dibuat user
*/
    $name = "Rul";
    $age = 15;
    $weight = 50.5;

    $name = "Akmal";

    echo "Nama saya adalah " . $name;
    echo '<br>';
    echo '<br>';


  /*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
    define ("SITE_NAME", "Elena");
    const BASE_URL = "https://elena.nurulfikri.ac.id/";

    // Menampilkan variable konstanta
    echo "Site name: " . SITE_NAME . "<br/>";
    echo "URL: " . BASE_URL . "<br/>";
?>