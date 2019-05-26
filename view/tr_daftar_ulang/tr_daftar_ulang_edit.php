

<div  class="form-group">
    <label>NIM</label>
    <input type="text"  value="<?= $row[0] ?>" class="form-control" name="nimQ">
    <br/>


</div>

<div class="form-group">
    <br/>
    <label>Nama Mahasiswa</label>
    <input readonly type="text" value="<?= $row[1] ?>" class="form-control" name="nama_mhs">
</div>
<div class="form-group">
    <label>Program Studi</label>
    <input readonly type="text" value="<?= $row['nama_prodi'] ?>" class="form-control" name="nama_prodi">
</div>
<div class="form-group">
    <label>Biaya Kuliah</label>
    <input readonly type="text" value="<?= $row['biaya_kuliah'] ?>" class="form-control" name="biaya_kuliah">
</div>



<div class="form-group">
    <label>Porongan Biaya</label>
    <input readonly type="text" value="<?= $potongan_biaya ?>" class="form-control" name="potongan_biaya">
</div>
<div class="form-group">
    <label>TOTAL BIAYA KULIAH</label>
    <input readonly type="text" value="<?= $total_biaya_kuliah ?>" class="form-control" name="total_biaya">
</div>
<input type="submit" class="btn btn-primary btn-sm" name="submit" value="Tambah ">



