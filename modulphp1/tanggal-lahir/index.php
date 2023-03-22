<!DOCTYPE html>
<html>
<head>
     <title>Tanggal Lahir</title>
</head>
<body bgcolor="pink">
     <h3 align="center">3. memecahkan tanggal lahir yang di susun</h3>
     <form method="post">
          <table cellpadding="10">
               <tr>
                    <input style="width: 700px;" type="submit" name="submit" value="Pecahkan">
               </tr>
               <tr>
                    <td>Tanggal <input type="text" name="tanggal"></td>
                    <td>Bulan <input type="text" name="bulan"></td>
                    <td>Tahun <input type="text" name="tahun"></td>
               </tr>
          </table>
     </form>
     
</body>
</html>

<?php  

     if (isset($_POST['submit'])) {
          $tanggal = $_POST['tanggal'];
          $bulan = $_POST['bulan'];
          $tahun = $_POST['tahun'];     

          echo "<h3>Tanggal Lahir " . $tanggal . "-". $bulan . "-" . $tahun;

     }
?>