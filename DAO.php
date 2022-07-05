<?php

/** CATATAN
 * MySQLi = versi `improved` dan lebih aman dari MySQL
 * PDO = versi OOP dan lebih aman dari MySQLi
 */


// $con = mysqli_connect("localhost", "root", "", "db_appdevo");

/** PERSIAPAN PDO */
$konfigurasi = "mysql:host=localhost;dbname=db_appdevo";
$username = "root";
$password = "";
$con = new PDO($konfigurasi, $username, $password);

/** READ: DAPATKAN SEMUA DATA */
$data = null;
$query = $con->prepare("SELECT * FROM kontak");
$query->execute();
$data = $query->fetchAll();

/** CREATE: MELAKUKAN PROSES INSERT */
if (!empty($_POST['insert'])) {

    /** PDO */
    $query = $con->prepare("INSERT INTO kontak (nama, no_hp, email) VALUES (:nama, :no_hp, :email)");
    $query->bindParam(":nama", $_POST['nama']);
    $query->bindParam(":no_hp", $_POST['no_hp']);
    $query->bindParam(":email", $_POST['email']);

    if ($query->execute()) {
        // echo "Data berhasil ditambahkan!";
        header("Location: indexx.php");
    } else {
        echo "Data gagal ditambahkan!";
    }

}

if (!empty($_POST['update'])) {
    //fungsi update;
}

if (!empty($_POST['delete'])) {
    //fungsi delete;
}
