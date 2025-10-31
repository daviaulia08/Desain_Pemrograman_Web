<html>
<head>
    <title>Halaman Home</title>
</head>
    <body>
        <?php
            session_start();
            if($_SESSION['status']=='login'){
                echo "Selamat datang " . $_SESSION['username'];
        ?>
                <br><a href="29.sessionLogout.php">Logout</a>
        <?php
            }
            else{
                echo "Anda belum login, silahkan";
        ?>
                <a href="26.sessionLoginForm.html">Login</a>
        <?php
            }
        ?>
    </body>
</html>