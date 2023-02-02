<?php

require 'connect.php';
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
    <title>Document</title>
</head>
<body>
    <div class="content " id="coming">
        <img src="img/coming.png" class="pd-content" alt="">
        <div class="pd-content">
            <form name="coming-form-invitation">
                <input type="text" placeholder="Name" class="input-username" name="nama">
                <select name="coming" id="coming" aria-placeholder="Coming ?" class="select-coming">
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
    <!-- <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbwWfAlbc1yDl1jCrRrJ7bhNHgAqb0CNtbOYW49CxvBqTA8O9mFVpSmgIgvNkPlpIj3gNw/exec'
  const form = document.forms['coming-form-invitation']
  form.addEventListener('submit', e => {e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)}).then(response => console.log('Success!', response)).catch(error => console.error('Error!', error.message))
  })
</script> -->
</body>
</html>
