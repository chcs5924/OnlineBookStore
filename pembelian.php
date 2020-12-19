<?php
require 'functions.php';

$pembeli = query("SELECT * FROM datapembelian");

$result = mysqli_query($conn, "SELECT * FROM datapembelian");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> BUYING LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="pem.css">
</head>
<body>
   <div class="header">
        <div class="logo">
            <h1>WIZARDING WORLD STORE</h1>
        </div>

        <div class="navbar">
            <ul>
               <li><a href="onlinebookstore.html">Home</a></li>
               <li><a href="Images.html">Images</a></li>
               <li><a href="aboutus.html">About</a></li>
               <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>


<div class="container">
  <div class="buy">
  <h1>BUYING DETAILS </h1>
  <a href="add.php" class="btn btn-secondary" role="button">BUY ANOTHER ITEMS</a>
  <br><br>
  </div>


  
  <table class="table table-secondary table-secondary">
  <thead>
    <tr class="table-secondary">
      <th>NO.</th>
      <th>ACTION</th>
      <th>Book's Name</th>
      <th>Items</th>
      <th>Address</th>
      <th>Telephone Numbers</th>
      <th>Paymnet Method</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>

    <?php foreach($pembeli as $row) :?>
    <tr>
      <td><?= $i ?></td>
      <td class="table-secondary">
        <a href="change.php?id=<?= $row["ID"]; ?>">Change</a>|
        <a href="delete.php?id=<?= $row["ID"]; ?>">Delete</a>
      </td>
      <td><?= $row["Nama_Buku"]; ?></td>
      <td><?= $row["Jumlah_Item"]; ?></td>
      <td><?= $row["Alamat"]; ?></td>
      <td><?= $row["Nomor_Telepon"]; ?></td>
      <td><?= $row["Metode_Pembayaran"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
  </table>
  </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>