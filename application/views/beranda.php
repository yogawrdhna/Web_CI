<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
</head>
<body>
    <header class="ob" style="background-color: black;">
        <div class="atas">
            <div id="logo"><img style="width: 127px;" alt=""></div>
            <nav>
                <ul>
                    <li><a href="<?= base_url() ?>index.php/Welcome/utama"><b>Home</b></a></li>
                    <li><a href="<?= base_url() ?>index.php/Welcome/event"><b>Event</b></a></li>
                    <li><a href="<?= base_url() ?>index.php/Welcome/gallery"><b>Gallery</b></a></li>
                    <li><a style="margin-left: 10px;" href="<?= base_url() ?>index.php/Welcome/contact"><b>Contact</b></a></li>
                    <li><a style="margin-left: 18px;" href="<?= base_url() ?>index.php/Welcome/profil"><b>Myprofil</b></a></li>
                </ul>
            </nav>
        </div>
    </header>
      <div class="wrapper">
        <p style="text-align: center; font-family: sans-serif;"><b>Car Photograph</b></p>
        <h1><b> - Japan Garage - </b></h1>
        <p style="text-align: center; font-family: sans-serif;"><b>ASIA</b></p>
      </div>
    <h1 align="center" style="color: #81C784; text-align: left; font-size: 10.3mm; margin-top: 97px; margin-left: 12px; font-family: sans-serif;">Selamat Datang <?= $nama_lengkap?> 
    <br>Berperilakulah seperti <?= $jenis_kelamin?></h1>

    <p style="font-size: 20px; margin-left: 56px; margin-top: 39px; font-family: sans-serif;">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Vero, aut! Dolores consectetur adipisci delectus fugit sed impedit dolorum inventore recusandae doloremque temporibus nemo nisi consequatur, 
    quasi ipsum voluptate?
    </p>
    <img style="width: 823px; margin-left: 518px; margin-top: -312px;" src="<?= base_url() ?>assets/back.png" alt="">
</body>
</html>