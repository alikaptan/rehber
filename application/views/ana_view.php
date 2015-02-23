<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rehber Uygulama</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <style>
        *{margin:0;padding:0;font:14px Tahoma;}
        .genel{border :1px solid #d3d3d3;width: 300px;height: 130px;background: #eee;}
        .uyegiris{border: 1px solid #0086b3;background: #dd1144;padding: 8px; }
        input#button{float:right;}
        table td a{text-decoration: none;}
    </style>
</head>
<body>
<div class="genel">
    <div class="uyegiris">Üye Paneli</div>
    <table cellpadding="5" cellspacing="5">
    <form action="http://localhost:8090/rehber/index.php/anasayfa/girisKontrol" method="post" id="form1">
        <tr>
            <td>Kullanıcı Ad</td>
            <td><input type="text" name="kadi"/></td>
        </tr>
        <tr>
            <td>Şifre</td>
            <td><input type="password" name="sifre"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Giris" name="button" id="button"/></td>
        </tr>
        <tr>

        </tr>
    </form>
        <td><a href="http://localhost:8090/rehber/index.php/anasayfa/yeniKayit">Yeni Kayit</a></td>
    </table>
</div>

</body>
</html>