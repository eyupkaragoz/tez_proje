<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustam.com</title>
    <link rel="" href="logo.png" type="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>
    <?php include("navbar.php") ?>
    <section class="siparis_tablo">
        <main class="table">
            <section class="table_header">
                <h1>Siparişler</h1>
            </section>
            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                            <th>Sipariş id</th>
                            <th>Müşteri İsim</th>
                            <th>Lokasyon</th>
                            <th>Sipariş tarihi</th>
                            <th>Durumu</th>
                            <th>Açıklama</th>
                            <th><strong>Numara</strong></th>
                            <th>İşi Al</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>131231</td>
                            <td>Eyüp karagöz</td>
                            <td>Erzurum</td>
                            <td>11/12/2024</td>
                            <td>
                                <p>Tadilatta</p>
                            </td>
                            <td>Evimin bir odasına parke yaptırmak istiyorum odanın boyu 4 metrekare</td>
                            <td>05416603074</td>
                            <td><a href="">Başvur</a></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </section>

    <?php include("footer.php") ?>
</body>

</html>