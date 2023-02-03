<?php

require 'config/connect.php';
if (isset($_POST['simpan'])) {
    $username = $_POST['nama'];
    $kehadiran = $_POST['coming'];
    $greeting = $_POST['greetings'];

    $query = "INSERT INTO tb_greetings (nama,status_kehadiran,ucapan) VALUES ('$username','$kehadiran','$greeting')";

    $result = mysqli_query($koneksi, $query);
    header('location:?page=coming');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silky & Abiyasa</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="img/iconbrowser.png">
</head>

<body>
    <div class="popup" id="popUp">
        <div class="content pb-div">
            <img src="img/invitation-img.png" alt="">
            <h1 class="nama-pasangan">Silky
                and
                Abiyasa
            </h1>
            <a href="#">
                <p id="open-invitation-awal" class="subtitle">Open Ivitation
                </p>
            </a>
        </div>
    </div>

    <audio loop id="song">
        <source src="audio/The Wannadies  You  Me Song Official Video.mp3" type="audio/mpeg">
    </audio>
    <main>
        <div class="menu-bar">
            <img src="img/bar-left.png">
            <img src="img/bar-right.png">
        </div>
        <div class="navigation">
            <ul>
                <li id="nav-invitation">
                    <a href="#">
                        <img src="img/Invitation-icon.png" alt="">
                        <span class="icon-title">Invitation</span>
                    </a>
                </li>
                <li id="nav-bride">
                    <a href="#">
                        <img src="img/Bridge-icon.png" alt="">
                        <span class="icon-title">Bride</span>
                    </a>
                </li>
                <li id="nav-moment">
                    <a href="#">
                        <img src="img/Moment-icon.png" alt="">
                        <span class="icon-title">Moment</span>
                    </a>
                </li>
                <li id="nav-vanue">
                    <a href="#">
                        <img src="img/Vanue-icon.png" alt="">
                        <span class="icon-title">Venue</span>
                    </a>
                </li>
                <li id="nav-outfit">
                    <a href="#">
                        <img src="img/Outfits-icon.png" alt="">
                        <span class="icon-title">Outfits</span>
                    </a>
                </li>
                <li id="nav-coming">
                    <a href="#">
                        <img src="img/Coming-icon.png" alt="">
                        <span class="icon-title">Coming?</span>
                    </a>
                </li>

            </ul>
        </div>
        <section class="section">
            <!-- Invitation -->
            <div class="content pb-div" id="invitation">
                <img src="img/invitation-img.png" alt="">
                <h1 class="nama-pasangan">Silky
                    <br>
                    and
                    Abiyasa
                </h1>
                <a href="#">
                    <p id="open-invitation" class="subtitle">
                    </p>
                </a>
            </div>
            <!-- Bride -->
            <div class="content pd-content pb-div" id="bridge">
                <img src="img/bride-img1.png" alt="">
                <hr>
                <img src="img/bride-img2.png" alt="">
            </div>
            <!-- Moment -->
            <div class="content pb-div" id="moment">
                <img src="img/moment-img.png" alt="">
            </div>
            <!-- Vanue -->
            <div class="content pd-content pb-div" id="vanue">
                <img src="img/party-title.png" alt="">
                <p>Date: Saturday, February 18th 2023</p>
                <p>Time: 18.00 - 20.00</p>
                <hr>
                <img class="place" src="img/vanue-img1.png" alt="">
                <p>The Sixth Rooftop</p>
                <p> Daima Norwood hotel</p>
                <hr>
                <img src="img/party-title.png" alt="">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="237px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=237&amp;height=130&amp;hl=en&amp;q=DAIMA NORWOOD HOTEL&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdf download">Pdf download</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 237px;
                            height: 130px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 237px;
                            height: 130px;
                        }

                        .gmap_iframe {
                            width: 237px;
                            height: 130px !important;
                        }
                    </style>
                </div>
                <p class="mt-2">Jl. Teuku Cik Ditiro II No.2, Gondangdia, Kec. Menteng, Kota Jakarta Pusat</p>
                <br>
                <p>It will be better, if you come with public
                    transportation because of limited parking area. <br>
                    We’re sorry :(</p>
            </div>
            <!-- Outfit -->
            <div class="content " id="outfits">
                <img src="img/dresscode-title.png" class="pd-content" alt="">
                <div class="row pd-content">
                    <div class="col">
                        <img src="img/dresscode-img1.png" alt="">
                    </div>
                    <div class="col">
                        <img src="img/dresscode-img2.png" alt="">
                    </div>
                    <div class="col">
                        <img src="img/dresscode-img3.png" alt="">
                    </div>
                    <div class="col">
                        <img src="img/dresscode-img4.png" alt="">
                    </div>
                </div>
                <img class="mt-2" src="img/Title Bar.png" width="100%" alt="">
                <p>This is pretentious casual bbq party, so white shirt or white dress is a mandatory. Don't be a fool.
                    <br><br>
                    x No Batik
                    <br>
                    x No Dark Color
                </p>
            </div>
            <!-- Coming -->
            <div class="content " id="coming">
                <img src="img/coming.png" class="pd-content" alt="">
                <div class="pd-content">
                    <form name="coming-form-invitation">
                        <input type="text" placeholder="Name" class="input-username" name="nama">
                        <select name="coming" aria-placeholder="Coming ?" class="select-coming">
                            <option value="come">Come</option>
                            <option value="bailed">Bailed</option>
                            <option value="maybe">Maybe</option>
                        </select>
                        <input type="text" placeholder="Greetings" class="input-greetings" name="greetings">
                        <button type="submit" class="btn-submit" name="simpan">submit</button>
                    </form>
                </div>
                <img class="notes" src="img/greeting-title-bar.png" width="100%" alt="">
                <?php
                include 'config/connect.php';
                $greetings = mysqli_query($koneksi, "SELECT * FROM tb_greetings  Order by id DESC");
                ?>
                <div class="output">
                    <?php
                    while ($ucapan = mysqli_fetch_array($greetings)) { ?>
                        <h4 class="nama-tamu"><?php echo $ucapan['nama']  ?>
                            <?php if ($ucapan['status_kehadiran'] == "come") { ?>
                                <span class="bg-hadir"><?php echo $ucapan['status_kehadiran'] ?></span>
                            <?php } elseif ($ucapan['status_kehadiran'] == "bailed") { ?>
                                <span class="bg-bailed"><?php echo $ucapan['status_kehadiran'] ?></span>
                            <?php } elseif ($ucapan['status_kehadiran'] == "maybe") { ?>
                                <span class="bg-maybe"><?php echo $ucapan['status_kehadiran'] ?></span>
                            <?php } ?>
                        </h4>
                        <p class="ucapan"><?php echo $ucapan['ucapan'] ?></p>
                        <hr>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    <script src="js/action-nav.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>