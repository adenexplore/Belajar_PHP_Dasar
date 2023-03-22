<!DOCTYPE html>
<html>
<head>
	<title>penggunaan POST</title>
</head>
<body>
     <form method="post">
     	<table>
     		<tr>
     			<td>NIS</td>
     			<td></td>
     			<td><input type="number" name="nis"></td>

     		</tr>
     		<tr>
     			<td>NAMA</td>
     			<td></td>
     			<td><input type="text" name="namanya"></td>

     		</tr>
     		<tr>
     			<td></td>
     			<td></td>
     			<td><input type="submit" name="simpan" value="POST"></td>

     		  </tr>
     		<tr>
     	 </table>
     	</form>

     	<?php 

          if($_SERVER['REQUEST_METHOD'] == "POST"){
               $nis= $_POST['nis']; 
               $nama= $_POST['namanya'];
               echo "NIS :".$nis;
               echo "<br>nama : ". $nama;
          }
          if (isset($_POST['simpan'])) {
          $nis = $_POST['nis'];
          $nama = $_POST['namanya'];
          echo "<br>NIS:".$nis;
          echo " <br>Nama:".$nama;
     }
     ?>



 </body>
</html>