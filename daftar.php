<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="daftar.php" method="post" name="form1" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr> 
                <td></td>
                <td><input type="submit" name="daftar" value="Daftar"></td>
            </tr>
        </table>
    </form>

<?php

    // mengecek saat data dikirim dengan nama variabel dan nama yang ada di database
    if(isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
		
        //memanggil file koneksi.php agar dapat terhubung antara database dan file 
        include_once("koneksi.php");

        // menambah user data baru ke database yaitu tabel pengguna dengan perintah sql
        $result = mysqli_query($mysqli, "INSERT INTO pengguna
											(nama,username,password) 
										 VALUES
											('$nama','$username',md5('$password'))");

        echo "Biodata user telah ditambahkan, Terimakasih. <a href='index_login.php'>Login</a>";
    }
    ?>
</body>
</html>	
	