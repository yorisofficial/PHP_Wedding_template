<?php
	
	include 'koneksi.php';

	if (isset($_POST['post_comment'])) {

		$nama = $_POST['nama'];
		$komen = $_POST['komen'];
		
		$sql = "INSERT INTO latihan (nama, komen)
		VALUES ('$nama', '$komen')";

        if ($conn->query($sql) === TRUE) {
            echo "";
            
        } else {
            echo "Error: ";
        }
	}

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Premium-gold | Andrea & Julia</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/latihan-1/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/latihan-1/assets/css/styles.css">
    
</head>

<body class="body-main">
    <section class="content-intro">
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1">
                    <h1 class="heading-time-top">the wedding of</h1>
                    <h1 class="colum-text-intro" data-aos="zoom-in" data-aos-duration="1000" >
                        Andrea
                        <br>
                        <br>
                        Julia
                    </h1>
                    <h1 class="heading-time-bottom">1 january 2022</h1>
                </div>
            </div>
            <img id="icon" src="/latihan-1/assets/img/play.png" alt="">
            <audio  id="mysong" >
                <source src="/latihan-1/assets/music/NEFFEX - Grateful [Copyright Free].mp3" type="audio/mp3" onload="">
            </audio>
        </div>
        <div>
            <img class="footer-image" src="/latihan-1/assets/img/purana-divider.png">
        </div>
    </section>
    <section class="content-couple-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6 text-center">
                    <img data-aos="zoom-in" data-aos-duration="1000" class="img-couple-profile" src="/latihan-1/assets/img/male-active.jpg" width="320px">
                    <h1 class="couple-info">Andrea Heroscout</h1>
                    <p class="couple-info-text">Anak pertama dari pasangan<br>Genta Heroscout &amp; Kimi Heroscout</p>
                </div>
                <div class="col-sm-12 col-md-6 text-center">
                    <img data-aos="zoom-in" data-aos-duration="1000" class="img-couple-profile" src="/latihan-1/assets/img/female-active.jpg" width="320px">
                    <h1 class="couple-info">Arabelle Julia </h1>
                    <p class="couple-info-text">Anak ke-dua dari pasangan<br>Haushine Lee &amp; Bimala Lee</p>
                </div>
                <div class="col-12 text-center">
                    <img class="footer-image" src="/latihan-1/assets/img/purana-divider.png">
                </div>
            </div>
        </div>
    </section>
    <section class="content-event-wedding">
        <div class="container">
            <div class="heading-event-hero">
                <h1 class="heading-tittle">Om Swastyastu</h1>
                <div class="row list-event-text">
                    <div class="col-md-8 offset-md-2">
                        <p>Atas Asung Kerta Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa, kami bermaksud mengundang Bapak/Ibu/Saudara/i, pada Acara Pawiwahan (Pernikahan) kami, yang akan dilaksanakan pada:</p>
                    </div>
                </div>
                <div class="row list-event">
                    <div data-aos="zoom-in" data-aos-duration="500" class="col-md-4 col-list-event"><i class="far fa-calendar-alt"></i>
                        <p>1 januari 2022</p>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="500" class="col-md-4 col-list-event"><i class="fas fa-clock"></i>
                        <p>07.00 - 20.00</p>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="500" class="col-md-4 col-list-event"><i class="fas fa-map-marker-alt"></i>
                        <p> jl. raya sema, des.bedungan</p>
                    </div>
                </div>
                <div class="row list-event-text">
                    <div class="col-md-8 offset-md-2">
                        <p>Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir untuk memberikan doa restu kepada kami.<br><br>Atas kehadiran dan doa restunya kami ucapkan terimakasih.</p>
                    </div>
                    <h1 class="heading-tittle">Om Shanti Shanti Shanti Om</h1>
                    <div class="col-12 text-center">
                        <img class="footer-image" src="/latihan-1/assets/img/purana-divider.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="time-warm">
        <div class="container content-count">
            <h1 data-aos="zoom-in" data-aos-duration="1000" class="heading-tittle">Count down event</h1>
            <div data-aos="zoom-in" data-aos-duration="500" id="demo" class="row count-down">
                <div class="col count-list" style="border-style: solid;border-radius: 20px;">
                    <h1 id="Days">- -d</h1>
                    <p>Days</p>
                </div>
                <div class="col count-list">
                    <h1 id="Hours">- -h</h1>
                    <p>Hour</p>
                </div>
                <div class="col count-list">
                    <h1 id="Minutes">- -m</h1>
                    <p>Minute</p>
                </div>
                <div class="col count-list">
                    <h1 id="Seconds">- -s</h1>
                    <p>Second</p>
                </div>
                <div>
                    <a class="btn btn-link-active" role="link" href="#">
                        Tambahkan Pengingat
                    </a>
                </div>
            </div>
            <div  class="row" style="padding-top: 70px;">
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.322195299445!2d115.17914911475438!3d-8.66087619377673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24757a722a9bb%3A0x1dbbbed7f8f1cf3e!2sJl.%20Tangkuban%20Perahu%2C%20Padangsambian%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali!5e0!3m2!1sid!2sid!4v1637207867543!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
                </div>
            </div>
            <div>
                <a class="btn btn-link-active" role="link" href="https://goo.gl/maps/aeR6SFSEKeKRUPX79">
                    open maps
                </a>
            </div>
            <div class="">
                <img class="footer-image" src="/latihan-1/assets/img/purana-divider.png">
            </div>
        </div>
    </section>
    <section class="content-galery-image">
        <div class="container content-galery">
            <h1 class="heading-tittle">galery photo</h1>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-4"><img src="/latihan-1/assets/img/slider-intro.jpg" width="100%"></div>
                <div class="col-md-4"><img src="/latihan-1/assets/img/slider%202.jpeg" width="100%"></div>
                <div class="col-md-4"><img src="/latihan-1/assets/img/slider-cover.jpg" width="100%"></div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-4"><img src="/latihan-1/assets/img/slider-intro.jpg" width="100%"></div>
                <div class="col-md-4"><img src="/latihan-1/assets/img/slider%202.jpeg" width="100%"></div>
                <div class="col-md-4"><img src="/latihan-1/assets/img/slider-cover.jpg" width="100%"></div>
            </div>
            <div>
                <img class="footer-image" src="/latihan-1/assets/img/purana-divider.png">
            </div>
        </div>
    </section>
    
<!--  -->
<section id="guest-book">
    <div class="container guest-container">
        <div class="text-center heading-guest">
            <h1 class="heading-tittle">Buku Tamu<br /></h1>
        </div>
        <div class="row guest-book-form">
            <div class="col-sm-12 col-md-6 input-book">
                <form class="input-book" method="post">
                    <div class="text-start name-guest-form">
                        <label class="form-label">Nama</label>
                        <input name="nama" class="form-control name-guest-input" type="text" placeholder="Masukan Nama Anda Disini" required/>
                    </div>
                    <div class="commant-guest-form">
                        <label class="form-label">Masukan Ucapan dan doa terbaik</label>
                        <textarea name="komen" class="form-control commant-guest-input" placeholder="Berikan Ucapan dan doa restu pasangan pengantin" required></textarea>
                    </div>
                    <div class="text-sm-center text-md-start btn-submit-guest">
                        <button name="post_comment" class="btn btn-link-active" type="submit">kirim</button>
                    </div>
                </form>
            </div>
            <div class="col output-book">
                <div class="guest-list">
                    <div class="card output-daftar-komen">
                        <div class="card-header text-capitalize text-center" style="color: var(--text);background: var(--primary);">
                            <h4>Daftar ucapan</h4>
                        </div>
                        <div class="card-body output-daftar-komen">
                            <ul>
                                <li>
                                <?php

                                        $sql = "SELECT * FROM latihan";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                        
                                    ?>
                                    <div class="list-komen">
                                        <h4 class="guest-name"><?php echo $row['nama']; ?></h4>
                                        <p><?php echo $row['komen']; ?></p>
                                    </div>
                                    <?php } } 
                                ?>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center"><img class="footer-image" src="/latihan-1/assets/img/purana-divider.png" /></div>
            </div>
        </div>
    </div>
</section>

<script src="/latihan-1/assets/js/apps.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
AOS.init();
</script>

<script>
var mysong = document.getElementById("mysong");
var icon = document.getElementById("icon");

icon.onclick = function(){
    if (mysong.paused){
    mysong.play();
    icon.src = "/latihan-1/assets/img/pause.png";
    }else{
    mysong.pause();
    icon.src = "/latihan-1/assets/img/play.png"; 
    } 
}

</script>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null, null, window.location.href)
    }
</script>


</body>
</html>