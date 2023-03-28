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
        <h2 align="center">Edit Data Paket</h2>
        <form class="form" action="home_admin/ubahpaket" method="post">
            <label for="id">Id Kamar :</label><br>
            <input type="text" name="id" readonly value="<?=$data['paket']['id']?>"><br><br>
            <label for="jenis_paket">Nama Paket :</label><br>
            <input type="text" name="jenis_paket" id="jenis_paket"><br><br>
            <label for="harga">Harga :</label><br>
            <input type="number" name="harga" id="harga"><br><br>
            <button type="submit">kirim</button>

        </form>
        <div>
</body>

</html>