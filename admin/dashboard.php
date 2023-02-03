<?php
require '../page/connect.php';
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM tb_greetings
                WHERE id = '$_POST[id]'
            ");

    // header('location: member.php');

    if ($hapus) {
        echo "<script>
           alert('data berhasil di hapus');
                })
          </script>";
        header('location: dashboard.php');
    } else {
        echo "<script>
        alert('data gagal di hapus');
             })
       </script>";
        header('location: dashboard.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper" style="background: white;">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>Silky & Aby</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Data Tamu</a>

                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Tamu Undangan</h2>
                </div>
                <div class="d-flex justify-content-between">
                    <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah" style="margin-left: 130px;">
                        Tambah data
                    </button> -->
                    <!-- <a href="create.php" class="btn btn-primary p-2" style="margin-left: 605px;">Tambah</a> -->

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status kehadiran</th>
                                <th>Greeting</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../page/connect.php';
                            $no = 1;
                            $tamu = mysqli_query($koneksi, "SELECT * FROM tb_greetings Order by id DESC");
                            while ($row = mysqli_fetch_array($tamu)) {
                                $id_tamu = $row['id'];
                                $nama = $row['nama'];
                                $status = $row['status_kehadiran'];
                                $ucapan = $row['ucapan'];

                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $status ?></td>
                                    <td><?php echo $ucapan ?></td>
                                    <td>
                                        <!-- <div class="d-flex gap-5"> -->
                                        <!-- <a href="#" class="btn btn-warning rounded-circle" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>"><i class="fas fa-edit"></i></a> -->
                                        <a href="#" class="btn btn-danger rounded-circle" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>"><i class="fas fa-trash"></i>
                                        </a>
                                        <!-- </div> -->
                                    </td>
                                </tr>
                                <!-- <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data
                                                    Tamu Undangan</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="POST">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_pembeli" id="id_pembeli" value="<?= $row['id'];  ?>">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama" name="nama" value="<?= $nama ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Status Kehadiran</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username" name="status_kehadiran" value="<?= $status ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Greeting</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email" name="greetings" value="<?= $ucapan ?>" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" name="bUbah">Ubah</button>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data Tamu</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="POST">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" id="id" value="<?= $id_tamu  ?>">
                                                    <h5 class="text-center">Apakah anda yakin akan menghapus data ini ? <br>
                                                        <span class="text-danger"><?= $row['nama'] ?> - <?= $row['status_kehadiran']  ?></span>
                                                    </h5>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>