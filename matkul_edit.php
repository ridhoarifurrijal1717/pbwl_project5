<?php

require_once "inc/Koneksi.php";
require_once "app/Matakuliah.php";

$matkul = new App\Matakuliah();

$id = $_GET['id'] ?? '';

$row = $matkul->edit($id);

?>

<h2 class="fw-bold mb-3">Edit Matakuliah</h2>
<div class="row">
    <div class="col-md-6">

        <div class="card">
            <div class="card-body">

                <form action="matkul_proses.php?action=update" method="post">
                    <input type="hidden" name="matkul_id" value="<?php echo $row['matkul_id']; ?>">
                    <div class="mb-3">
                        <label for="matkul_kode" class="form-label">Kode Matakuliah</label>
                        <input type="text" value="<?php echo $row['matkul_kode']; ?>" class="form-control" name="matkul_kode" placeholder="Kode Matakuliah" required>
                    </div>
                    <div class="mb-3">
                        <label for="matkul_nama" class="form-label">Nama Matakuliah</label>
                        <input type="text" value="<?php echo $row['matkul_nama']; ?>" class="form-control" name="matkul_nama" placeholder="Nama Matakuliah" required>
                    </div>
                    <div class="mb-3">
                        <label for="matkul_sks" class="form-label">SKS</label>
                        <input type="number" value="<?php echo $row['matkul_sks']; ?>" class="form-control" name="matkul_sks" placeholder="SKS" min="1" max="6" required>
                    </div>
                    <div class="mb-3">
                        <label for="matkul_semester" class="form-label">Semester</label>
                        <input type="number" value="<?php echo $row['matkul_semester']; ?>" class="form-control" name="matkul_semester" placeholder="Semester" min="1" max="14" required>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <a href="index.php?page=matkul" class="btn btn-secondary">Batal</a>
                </form>

            </div>
        </div>

    </div>
</div>