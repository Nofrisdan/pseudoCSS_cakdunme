<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: after</title>
    <style>
        body {
            text-align: center;
        }

        .after h1 {
            font-size: 90px;
        }

        /* code Penggunaan AFTER */
        .after:hover::after {
            content: "HALLO INI AFTER MUNCUL SETELAH ELEMEN";
            font-size: 50px;
            color: red;
        }
    </style>
</head>

<body>
    <!-- 
        SESUAI DENGAN YANG DIJELASKAN DI BLOG BAHWA AFTER BEFUNGSI
        UNTUK MENYISIPKAN SEBUAH ELEMEN SETELAH ELEMEN UTAMA PERHATIKAN 
        DI STYLE DIATAS
     -->
    <div class="after">
        <h1>HALLO</h1>
    </div>

    <a href="../index.php">Kembali</a>
</body>

</html>