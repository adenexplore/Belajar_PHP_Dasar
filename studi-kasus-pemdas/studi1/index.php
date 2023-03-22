<!DOCTYPE html>
<html>
<head>
    <title>study kasus pertama</title>
</head>
<body>
    <center>
        <h3>STUDY KASUS 1</h3>
    </center>
    <br>
        <div class="proses">
            <div class="judul">
                <p><b>Konversi Suhu Reamur Ke Celcius dan Fahrenheit</b></p>
             </div>
                <form method="post">
                    <table class="pertama">
                    <tr>
                        <td>Reamur</td>
                        <td>=</td>
                        <td><input type="number" name="gatau" > °R</td>
                    </tr>
                </table>
        
            <table class="kedua">
            <tr>
                <td><input type="submit" name="submit" value="Konversi"></td>
                <td></td>
            </tr>
            </table>
            <br>
            <div class="hasil">
                <?php 
                    if (isset($_POST['submit'])) {
                        $reamur = $_POST['gatau'];
                        $celcius =(5/4) * $reamur;
                        $Fahrenheit = (9/4) * $reamur + 32;
                      echo "celcius = " . $celcius. "°C";
                      echo "<br>Fahrenheit = ". $Fahrenheit. "°F";
                  }
                ?>
            </div>
            <div class="nama">
             <p><u>12007623 ADEN AHMAD RIFAI X3</u></p>
        </div>
        </form>
    </div>
    <style type="text/css">
        @font-face {font-family: Comfortaa; src: url('Comfortaa/Comfortaa-VariableFont_wght.ttf');}

        .proses {width: 35%;height: auto; background-color:#8bff00; color:black; border-radius: 10px; margin: 60px auto;}

        .judul { text-align: center; margin-top: -50px; border-radius: 5px 5px 0 0 ; background-color:gray; color:white;}

        .judul p { padding: 10px; font-size: 10px;}

        .pertama {margin: auto 50px;}

        .pertama,.kedua, .hasil {margin: 0 50px;}

        .pertama input { border-radius: 5px; }

        .kedua input { background-color:gray; color:white; padding: 4px 50px;}

        .hasil { color:black; padding-bottom: 45px;}
        
        .nama { text-align: center; margin-top: -50px; background-color:gray; color:black;border-radius: 0 0 5px 5px;}

        .nama p { padding: 10px; font-size: 10px;}
    </style>
</body>
</html>
