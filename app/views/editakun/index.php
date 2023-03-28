<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?=BASEURL?>/css/bootstrap.css " />
    <link rel="stylesheet" type="text/css" href="<?=BASEURL?>/css/style.css" />
    <style>
        .form_cont {
            border: 2px solid grey;
            border-radius: 5px;
            background-color: #00ffff;
            width: 500px;
            height: 430px;
            padding: 30px;
            margin-top: 20px;
            margin-left: 30%;
            color: black;
        }

        .form {
            padding-left: 45px;
        }
    </style>
</head>

<body>
    <div class="form_cont">
        <h2 align="center">Edit Data Akun</h2>
        <form class="form" action="home_admin/ubahakun" method="post">
            <label for="id">Id Kamar :</label><br>
            <input type="number" name="id" readonly value="<?=$data['akun_petugas']['id']?>"><br><br>
            <label for="username">Username :</label><br>
            <input type="text" name="username" <br><br>
            <label for="password">Password :</label><br>
            <input type="text" name="password" ><br><br>
            <button type="submit">Kirim</button>

        </form>
        <div>
</body>

</html>