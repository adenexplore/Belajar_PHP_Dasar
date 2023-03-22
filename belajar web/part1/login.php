<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="css/gaya.css">
</head>

<style type="text/css">
	h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
	box-shadow: 0px 0px 100px 4px #d6d6d6;
}

label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #2aa7e2;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
	cursor:pointer;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}

</style>
<body>
	<?php
        include "config/koneksi.php";

        if(isset($_POST['btn'])){
            $user = $_POST['username'];
            $pass =($_POST['password']);

            $sql = mysqli_query($koneksi,"SELECT username,password,name FROM login where username = '$user' and password = '$pass'");
            $num = mysqli_num_rows($sql);
            
            if ($num > 0) {
                $row = mysqli_fetch_array($sql);
                session_start();
                $_SESSION['username'] = $row['password'];
                $_SESSION['data_user'] = $row;
                echo "
                    <script>
                        alert('Selamat Datang ".$row['name']."!');
                        document.location.href = 'list/index.php';
                    </script>
                    ";
            } else {
                echo "
                    <script>
                        alert('Username atau password Yang Anda Masukkan Salah!');
                        document.location.href = 'login.php';
                    </script>
                    ";
            }
        }
    ?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form  method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN" name="btn">

		</form>
		
	</div>
 
 
</body>
</html>