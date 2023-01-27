<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silky & Abiyasa</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <main>
        <div class="menu-bar">
            <img src="img/bar-left.png">
            <img src="img/bar-right.png">
        </div>
        <div class="navigation">
            <ul>
                <li>
                    <a href=".?page=invitation">
                        <img src="img/Invitation-icon.png" alt="">
                        <span class="icon-title">Invitation</span>
                    </a>
                </li>
                <li>
                    <a href=".?page=bridge">
                        <img src="img/Bridge-icon.png" alt="">
                        <span class="icon-title">Bridge</span>
                    </a>
                </li>
                <li>
                    <a href="#section1">
                        <img src="img/Moment-icon.png" alt="">
                        <span class="icon-title">Moment</span>
                    </a>
                </li>
                <li>
                    <a href="#section1">
                        <img src="img/Vanue-icon.png" alt="">
                        <span class="icon-title">Vanue</span>
                    </a>
                </li>
                <li>
                    <a href="#section1">
                        <img src="img/Outfits-icon.png" alt="">
                        <span class="icon-title">Outfits</span>
                    </a>
                </li>
                <li>
                    <a href="#section1">
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