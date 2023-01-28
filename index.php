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
    <audio autoplay loop>
        <source src="audio/The Wannadies  You  Me Song Official Video.mp3" type="audio/mpeg">
    </audio>
    <main>

        <div class="menu-bar">
            <img src="img/bar-left.png">
            <img src="img/bar-right.png">
        </div>
        <div class="navigation">
            <ul>
                <li <?php if (isset($_GET['page']) && $_GET['page'] == "invitation") { ?> class="active" <?php } ?>>
                    <a href=".?page=invitation">
                        <img src="img/Invitation-icon.png" alt="">
                        <span class="icon-title">Invitation</span>
                    </a>
                </li>
                <li <?php if (isset($_GET['page']) && $_GET['page'] == "bridge") { ?> class="active" <?php   }  ?>>
                    <a href=".?page=bridge">
                        <img src="img/Bridge-icon.png" alt="">
                        <span class="icon-title">Bridge</span>
                    </a>
                </li>
                <li <?php if (isset($_GET['page']) && $_GET['page'] == "moment") { ?> class="active" <?php   }  ?>>
                    <a href=".?page=moment">
                        <img src="img/Moment-icon.png" alt="">
                        <span class="icon-title">Moment</span>
                    </a>
                </li>
                <li <?php if (isset($_GET['page']) && $_GET['page'] == "vanue") { ?> class="active" <?php   }  ?>>
                    <a href=".?page=vanue">
                        <img src="img/Vanue-icon.png" alt="">
                        <span class="icon-title">Vanue</span>
                    </a>
                </li>
                <li <?php if (isset($_GET['page']) && $_GET['page'] == "outfits") { ?> class="active" <?php   }  ?>>
                    <a href=".?page=outfits">
                        <img src="img/Outfits-icon.png" alt="">
                        <span class="icon-title">Outfits</span>
                    </a>
                </li>
                <li <?php if (isset($_GET['page']) && $_GET['page'] == "coming") { ?> class="active" <?php   }  ?>>
                    <a href=".?page=coming">
                        <img src="img/Coming-icon.png" alt="">
                        <span class="icon-title">Coming?</span>
                    </a>
                </li>

            </ul>
        </div>
        <section class="section">
            <?php
            $page = @$_GET['page'];
            $hal = "page/$page.php";
            $home = "page/invitation.php";
            if (!empty($page) && file_exists($hal)) {
                include $hal;
            } else {
                include $home;
            }

            ?>
        </section>

    </main>
</body>

</html>