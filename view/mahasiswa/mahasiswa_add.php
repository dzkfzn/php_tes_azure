<div class="row">
    <div class="col-lg-6">
        <form action="" method="POST">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" value="" class="form-control" name="nim" required onkeypress="return isNumber(event)">
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" value="" class="form-control" name="nama_mhs" required onkeypress="return onlyAlphabets(event)">
            </div>
            <div class="form-group">
                <label>Program Studi</label>

                <select class="form-control" name="kode_prodi" >
                    <option>Pilih Program Studi</option>
                    <?php
                    // Add options to the drop down
                    while ($row = mysqli_fetch_array($data)) {
                        echo '<option value="' . $row['kode_prodi'] . '">' . $row['singkatan'] . '</option>';
                    }
                    // Output dropdown menu
                    ?>
                </select>

            </div>
            
            <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Create">
        </form>
    </div>
</div>
<?php
if (ISSET($_POST['submit'])) {
    //JIKA BUTTOM SUBMIT DI KLIK MAKA PANGGil fungsi insert pada controller ea
    $main = new mahasiswacontroller();
    $main->insert();
}
?>