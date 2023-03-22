<!DOCTYPE html>
<html>
<head>
    <title>Ini Nomor 1</title>
</head>
<body>
    <h3 align="center">study kasus 1</h3>
    <form method="post">
        <table align="center" border="2">
            <tr>
                <td>Kata 1</td>
                <td><input type="text" name="katahiji"></td>
            </tr>
            <tr>
                <td>Kata 2</td>
                <?php 
                    if (isset($_POST['pindahkan'])) {
                ?>
                <td><input type="text" name="katadua" value="<?php echo $_POST['katahiji'];?>"></td>
                <?php
                    }else{
                ?>
                <td><input type="text" name="katadua"></td>
                <?php }?>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="pindahkan" value="Pindahkan"></td>
            </tr>
        </table>
    </form>
</body>
</html>