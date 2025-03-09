<?php
if (isset($_POST['is_kayit'])) {
    $hizmet_baslik = $_POST['hizmet_baslik'];
    $hizmet_aciklama = $_POST['hizmet_aciklama'];
    $dosya_adi = $_FILES["hizmet_img"]["name"];
    $yeni_ad = "../img/" . $dosya_adi;
    if (move_uploaded_file($_FILES["hizmet_img"]["tmp_name"], $yeni_ad)) {

        $sorgu = $db->prepare("INSERT INTO hizmetler SET
      hizmet_baslik = ?,
      hizmet_aciklama = ?,
      hizmet_img = ?
    ");
        $sorgu->execute([$hizmet_baslik, $hizmet_aciklama, $dosya_adi]);
        if ($sorgu) {
            echo "<script>
      location.href='hizmetler.php';
      alert('Yükleme başarılı.');
      </script>";
        } else {
            echo "<script>
        location.href='hizmet_kayit.php';
        alert('Bir problem oluştu.');
        </script>";
        }
    } else {
        echo "<script>
      location.href='hizmet_kayit.php';
      alert('Lütfen fotoğraf seçiniz.');
      </script>";
    }
}





?>
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

<body class="urun_kayit">
    <section class="container">
        <header>İş Oluşturma Kayıt Formu</header>
        <form action="#" class="form">
            <div class="input-box">
                <label>Ad-Soyad</label>
                <input type="text" placeholder="Adınız ve Soyadınızı giriniz" required />
            </div>
            <div class="input-box">
                <label>Numara</label>
                <input type="number" placeholder="Telefon numaranızı giriniz" required />
            </div>
            <br>
            <div>
                <label>İş türü</label>
                <div class="select-box">
                    <select placeholder="Hangi ünvanda bir çalışana ihtiyacınız var?">
                        <option hidden> </option>
                        <option>Parke</option>
                        <option>Boya-Sıva Tadilatçı</option>
                        <option>Kombici</option>
                        <option>Elektrikçi</option>
                        <option>Su Tesisatçı</option>
                        <option>Peyzajcı</option>
                        <option>Temizlikçi</option>
                        <option>Pimapenci</option>
                        <option>Marangoz</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="column">
                <div class="aciklama">
                    <label>Açıklama</label>
                    <textarea type="text" placeholder="İş ile alakalı bir yazı yazın (büyüklük,isteklerim vs)"
                        required></textarea>
                </div>
                <div class="input-box">
                    <label>iş Tarihi</label>
                    <input type="date" placeholder="İşinizi ne zaman yaptırmak istediğiniz tarihi girin" required />
                </div>
            </div>
            <div class="input-box address">
                <label>Adres</label>
                <input type="text" placeholder="Adres başlık" required />
                <input type="text" placeholder="Açık Adres" required />
                <div class="column">
                    <input type="text" placeholder="İlçe" required />
                </div>
                <div class="column">
                    <input type="text" placeholder="Şehir" required />
                </div>
            </div>
            <button name="is_kayit">Kaydet</button>
        </form>
    </section>
</body>

</html>