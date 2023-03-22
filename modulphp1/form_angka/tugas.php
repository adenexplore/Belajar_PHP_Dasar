
<DOCTYPE! HTML>
<html>
<head>
     <title> Modul Trello </title>
</head>
<body bgcolor="turquoise">
     <table align= "center" border="5">
          <div class="body1">
                   <h1 align="center">1.menentukan perbandingan bilangan</h1>
              </div>
          <form method="POST">
               <tr>
                    <td>Nilai A</td>
                    <br>
                    <td><input type="number" name="nilai_a"></td>
               </tr>
               <tr>
                    <td>Nilai B</td>
                    <br>
                    <td><input type="number" name="nilai_b"></td>
               </tr>
               <tr>
                    <br>
                    <td><input type="submit" name="submit" value="cek"></td>
               </tr>
          </form>
     </table>

     <?php
          if(isset($_POST['submit'])){
               $nilai_a = $_POST['nilai_a'];
               $nilai_b = $_POST['nilai_b'];

               if($nilai_a > $nilai_b){
                    echo "<br>Nilai Tertinggi adalah " . $nilai_a . "(Nilai A)";
               }elseif($nilai_a < $nilai_b){
                    echo "<br>Nilai Tertinggi adalah " . $nilai_b . "(Nilai B)";
               }else{
                    echo "<br>Nilainya sama";
               }
          }
     ?>