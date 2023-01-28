<?php

require 'connect.php';
if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $kehadiran = $_POST['coming'];
    $greeting = $_POST['greeting'];

    $query = "INSERT INTO tb_greetings (nama,status_kehadiran,ucapan) VALUES ('$username','$kehadiran','$greeting')";

    $result = mysqli_query($koneksi, $query);
    header('location:?page=coming');
}


?>

<div class="content " id="coming">
    <img src="img/coming.png" class="pd-content" alt="">
    <div class="pd-content">
        <form action="" method="POST">
            <input type="text" placeholder="Name" class="input-username" name="username">
            <select name="coming" id="coming" aria-placeholder="Coming ?" class="select-coming">
                <option value="come">Come</option>
                <option value="bailed">Bailed</option>
                <option value="maybe">Maybe</option>
            </select>
            <input type="text" placeholder="Greetings" class="input-greetings" name="greeting">
            <button type="submit" class="btn-submit" name="simpan">submit</button>
        </form>
    </div>
    <img class="notes" src="img/greeting-title-bar.png" width="100%" alt="">
    <?php
    include 'connect.php';
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