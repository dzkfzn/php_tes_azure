<div class="row">
    <div class="col-lg-6">
        <form action="" method="POST">

            <div class="form-group">
                <label>Kode Prodi</label>
                <input type="text" value="<?= $row[0] ?>" class="form-control" name="kode_prodi" readonly>
            </div>
            <div class="form-group">
                <label>Nama Prodi</label>
                <input type="text" value="<?= $row[1] ?>" class="form-control" name="nama_prodi">
            </div>
            <div class="form-group">
                <label>Singkatan</label>
                <input type="text" value="<?= $row[2] ?>" class="form-control" name="singkatan">
            </div>
            <div class="form-group">
                <label>Biaya Kuliah</label>
                <input type="text" value="<?= $row[3] ?>" class="form-control" name="biaya_kuliah">
            </div>
            <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Update">
        </form>
    </div>
</div>
<?php
if (ISSET($_POST['submit'])) {
    //JIKA BUTTOM SUBMIT DI KLIK MAKA PANGGil fungsi insert pada controller ea
    $main = new prodicontroller();
    $main->update();
}
?>