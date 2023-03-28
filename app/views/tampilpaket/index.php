<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>jenis_paket</td>
                <td>harga</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data['paketan'] as $paketan):?>
            <tr>
                <td><?=$paketan['id'];?></td>
                <td><?=$paketan['jenis_laundry'];?></td>
                <td><?=$paketan['harga'];?></td>
            </tr>
            <?php
                endforeach?>
        </tbody>
        <form action="<?=BASEURL?>/tampilpaket/tambah" method="post">
            <label for="id">id</label><br>
            <input type="text" id="id" name="id"><br>
            <label for="jenis_laundry">jenis_laundry</label><br>
            <input type="text" id="jenis_laundry" name="jenis_laundry"><br>
            <label for="harga">harga</label><br>
            <input type="number" id="harga" name="harga"><br>
            <button type="submit">kirim</button>
        </form>

    </table>
</body>

</html>