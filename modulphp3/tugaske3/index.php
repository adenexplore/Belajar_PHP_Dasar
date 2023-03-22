<!DOCTYPE html>
<html>
<head>
     <title>study kasus 3</title>
</head>
<body>
     
     <h2>3.form pendaftaran</h2>
     <form method="post" action="simpan.php">
          <table cellpadding="3">
               <tr>
                    <td>NISN</td>
                    <td><input type="text" name="nisn"></td>
               </tr>
               <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
               </tr>
               <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                         <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
                         <input type="radio" name="jeniskelamin" value="Laki-laki">Laki-laki
                    </td>
               </tr>
               <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal"></td>
               </tr>
               <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat"></textarea></td>
               </tr>
               <tr>
                    <td>Agama<td>
                    <select name="agama">
                         <option selected="selected">Kristen</option>
                         <option selected="selected">Katolik</option>
                         <option selected="selected">Hindu</option>
                         <option selected="selected">Buddha</option>
                         <option selected="selected">Konghucu</option>
                         <option selected="selected">Islam</option>
                    </select>
                    </td>
               </tr>
          </table>
          
          <br>

          <table cellpadding="3">
               Pengolahan Nilai
               <tr>
                    <td>B.Indonesia </td>
                    <td><input type="text" name="indo"></td>
                    <td>Matematika </td>
                    <td><input type="text" name="mtk"></td>
               </tr>
               <tr>
                    <td>B.Inggris </td>
                    <td><input type="text" name="inggris"></td>
                    <td>Produktif</td>
                    <td><input type="text" name="produktif"></td>
               </tr>
          </table>

          <input type="submit" name="submit" value="Proses">
     </form>

<br><br>
</body>
</html>