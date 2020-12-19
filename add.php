<?php
require 'functions.php';

if( isset($_POST["submit"]) ){

	if(tambah($_POST) > 0) {
		echo "
		<script>
		alert('great :)' );
		document.location.href = 'pembelian.php';
		</script>";
	} else {
		echo "
		<script>
		alert('can't submit your request :)' );
		document.location.href = 'pembelian.php';
		</script>";
	}
	
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="add.css"> 
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

	<div class="formpembelian">
		<h1>BUY ANOTHER ITEMS</h1>
		<form action="" method="post">
			<table>
                <tr>
					<td width="160">
					<label for="Nama_buku" >Book's Name:</label>
					<input type ="text" name="Nama_Buku" id="Nama_Buku" required>
					</td>
                </tr>
                <tr>
					<td>
					<label for="Jumlah_Item" >Items:</label>
					<input type ="text" name="Jumlah_Item" id="Jumlah_Item" required>
					</td>
                </tr>
                <tr>
					<td>
					<label for="Alamat" >Address:</label>
					<input type ="text" name="Alamat" id="Alamat" required>
					</td>
                </tr>
                <tr>
					<td>
					<label for="Nomor_Telepon" >Telephone Numbers:</label>
					<input type ="text" name="Nomor_Telepon" id="Nomor_Telepon" required>
					</td>
                </tr>
                <tr>
					<td>
					<label for="Metode_Pembayaran" >Payment Method:</label>
					<input type ="text" name="Metode_Pembayaran" id="Metode_Pembayaran" required>
                    </td>
                </tr>
                <tr>
                    <td>
                    <td><button type="submit" name="submit">Confirm</button>
                    </td>
                </tr>         
            </table>    				
		</form>
	</div>

	<div class="footer">
        <p>Copyright 2020 - <a href="contact.html">Kelompok Dua</a></p>
   </div>	
</body>
</html>
