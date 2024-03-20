<?php

    //! Cara Pertama 

    $koneksi = mysqli_connect('localhost', 'root', '', 'siswa');

    //! Cara Kedua

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $databaseName = 'siswa';

    $koneksi = mysqli_connect($hostname, $username, $password, $databaseName);
?>