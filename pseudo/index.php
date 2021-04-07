<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR PSEUDO</title>
</head>

<body>
    <h1>DISINI TEMPAT BELAJAR PSEUDO KUNJUNGI LINK DITABEL </h1>
    <div class="table">
        <table border="1" cellpadding="10px" cellspacing="0px">
            <?php $i = 1; ?>
            <tr>
                <th>NO</th>
                <th>MATERI</th>
                <th>LINK</th>
            </tr>
            <tr>
                <td><?= $i++; ?></td>
                <td>AFTER</td>
                <td><a href="after/index.php">KLIK DISINI</a></td>
            </tr>
            <tr>
                <td><?= $i++; ?></td>
                <td>BEFORE</td>
                <td><a href="before/index.php">KLIK DISINI</a></td>
            </tr>
        </table>
    </div>

</body>

</html>