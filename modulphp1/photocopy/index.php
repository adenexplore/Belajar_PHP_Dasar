<!DOCTYPE html>
<html>
<head>
     <title>Data Biaya Fotocopy</title>
</head>
<body bgcolor="teal">
     <h3 align="center">2.menentukan biaya fotocopy</h3>
     <form method="post">
          <table align= "center" border="5">
               <tr>
                    <td>Tipe Pelanggan</td>
                    <td>
                         <input type="radio" name="tipe langganan" value="Non Member">NonMember
                         <input type="radio" name="tipe langganan" value="Member">Member
                    </td>

                    <tr>
                         <td>Harga Fotocopy Perlembar</td>
                         <td><input type="text" name="harga"
                              
                              <?php
                                   if (isset($_POST['nonmember'])) {
                                        echo "100";         
                                   }
                                   elseif (isset($_POST['member'])) {
                                        echo "85";          
                                   }
                              ?>
                              >
                         </td>
                    </tr>

                    <tr>
                         <td>Jumlah Fotocopy</td>
                         <td><input type="text" name="jumlah"></td>
                    </tr>

                    <tr><td></td>
                         <td><input type="submit" name="submit" value="Hitung"></td>
                    </tr>

                    <tr><td>Total Bayar</td>
                         <td><input type="text" name="total"></td>
               </tr>
          </table>
     </form>

</body>
</html>
<br>
<br>
<?php 

     if (isset($_POST['submit'])) {
          $harga = @$_POST['harga'];
          $jumlah = @$_POST['jumlah'];
          $total = $harga * $jumlah;

          if (empty($harga || $jumlah)) {
               echo "";
          }
          else {
               echo "Total biaya Fotocopy yang harus di bayar sebesar Rp " . $total;
          }
     }

?>