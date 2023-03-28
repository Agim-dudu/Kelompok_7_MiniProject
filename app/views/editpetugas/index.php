<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?=BASEURL?>/css/bootstrap.css " />
    <link rel="stylesheet" type="text/css" href="<?=BASEURL?>/css/Edit-Data.css" />
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
            font-size: 18px;
        }

        .form {
            padding-left: 45px;
        }
    </style>
</head>

<body>
    <div class="form_cont">
        <h2 align="center">Edit Data Petugas</h2><br>
        <form class="form" action="home_admin/ubahpetugas" method="post">
            <label for="id">Id Petugas :</label><br>
            <input type="text" name="id" readonly value="<?=$data['petugas']['id']?>"><br><br><br>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama"><br><br>
            <label for="nomor">Nomor :</label><br>
            <input type="text" name="nomor" ><br><br>
            <button type="submit">kirim</button>
        </form>
        <div>
</body>

</html>