<div id="form1" class="row">
    <div class="col-lg-6">
        <form action="" method="POST">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" value="" class="form-control" name="nim">

                <div  class="form-group">
                    <label>Grade Seleksi</label><br/>
                    <input class="radio-inline"  type="radio" name="grade" value="A"> A
                    <br/><input class="radio-inline" type="radio" name="grade" value="B"> B
                    <br/><input class="radio-inline" type="radio" name="grade" value="C"> C

                </div>
                <br/>
                <label>Cari</label>
                <!--<a href='index.php?url=tr_daftar_ulangcontroller&ut=<?php $_POST['nim'] ?>' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search"></span> Cari</a>-->
                <input type="submit" class="btn btn-primary btn-sm" name="cari" value="Cari">


                <!--            </div>
                            <div class="form-group">
                                <br/>
                                <label>Nama Mahasiswa</label>
                                <input readonly type="text" value="" class="form-control" name="nama_mhs">
                            </div>
                            <div class="form-group">
                                <label>Program Studi</label>
                                <input readonly type="text" value="" class="form-control" name="nama_prodi">
                            </div>
                            <div class="form-group">
                                <label>Biaya Kuliah</label>
                                <input readonly type="text" value="" class="form-control" name="biaya_kuliah">
                            </div>
                
                            <div  class="form-group">
                                <label>Grade Seleksi</label><br/>
                                <input class="radio-inline"  type="radio" name="grade" value="A"> A
                                <br/><input class="radio-inline" type="radio" name="grade" value="B"> B
                                <br/><input class="radio-inline" type="radio" name="grade" value="C"> C
                
                            </div>
                
                            <div class="form-group">
                                <label>Porongan Biaya</label>
                                <input readonly type="text" value="" class="form-control" name="potongan_biaya">
                            </div>
                            <div class="form-group">
                                <label>TOTAL BIAYA KULIAH</label>
                                <input readonly type="text" value="" class="form-control" name="total_biaya">
                            </div>-->
                <?php
                if (ISSET($_POST['cari'])) {
                    //JIKA BUTTOM SUBMIT DI KLIK MAKA PANGGil fungsi insert pada controller ea
                    $main = new tr_daftar_ulangcontroller();
                    $main->viewEdit();
                }
                ?>
                <?php
                if (ISSET($_POST['submit'])) {
                    //JIKA BUTTOM SUBMIT DI KLIK MAKA PANGGil fungsi insert pada controller ea
                    $main = new tr_daftar_ulangcontroller();
                    $main->insert();
                }
                ?>
<!--<input type="submit" class="btn btn-primary btn-sm" name="submit" value="Create">-->


                </form>
            </div>
    </div>

