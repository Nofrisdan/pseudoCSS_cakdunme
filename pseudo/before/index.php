<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: before</title>
    <style>
        body {
            text-align: center;
        }

        .after h1 {
            font-size: 90px;
        }

        /* code Penggunaan AFTER */
        .before:hover::before {
            content: "HALO INI HASIL BEFORE MUNCUL SEBELUM ELEMEN ";
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
    <div class="before">
        <h1>HALLO</h1>
    </div>

    <a href="../index.php">Kembali</a>
</body>

</html>