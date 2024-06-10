<?php
if (isset($_POST['Submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $result = mysqli_query($con, "INSERT INTO matakuliah(kode, nama, sks, semester) VALUES('$kode','$nama','$sks','$semester')");
    header("Location:?page=matakuliah-show");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Matakuliah</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="kode" class="control-label">Masukkan Kode</label>
                        <input type="text" class="form-control" name="kode" placeholder="Masukan kode..." required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="ontrol-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap..." required>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="control-label">Masukkan SKS</label>
                        <select class="form-control" name="sks">
                            <option disabled selected> Pilih </option>
                            <option value="22">22</option>
                            <option value="24">24</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="semester" class="control-label">Pilih Semester</label>
                        <input type="text" class="form-control" name="semester" placeholder="Masukan semester..." required>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>