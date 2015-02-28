<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        ul#menu li{text-decoration: none;list-style-type: none;float: left;padding-left: 10px;border: 2px solid #009900;cursor: pointer}
        ul li a{text-decoration: none}
        ul{margin: 0;padding: 0;}
    </style>
</head>
<body>

<h2>Admin View</h2>
<ul id="menu">
    <li><a href="http://localhost:8090/rehber/index.php/anasayfa/uyeGoster">Listele</a></li>
    <li><a href="http://localhost:8090/rehber/index.php/anasayfa/kisiEkle">Ekleme</a></li><br>
</ul>

   <?php
   for($sayi = 0; $sayi < 5; $sayi++) {
       ?>
       <table cellpadding="5" cellspacing="5">
        <tr>
            <td>adı</td>
            <td><?php echo @$liste[$sayi]["ad"]; ?></td>
            <td>Soyadı</td>
            <td><?php echo @$liste[$sayi]["soyad"]; ?></td>
            <td>tel</td>
            <td><?php echo @$liste[$sayi]["tel"]; ?></td>
        </tr>
       </table>
 <?php
   }
   ?>


</body>
</html>