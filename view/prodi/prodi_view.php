<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="row">
    <div class="col-lg-12">
        <a href='index.php?url=prodicontroller&ip=add' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
        <table class="table table-hover table-bordered" style="margin-top: 10px">
            <tr class="success">
                <th width="5'kode_prodi'px">No</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Singkatan</th>
                <th>Biaya Kuliah</th>
                <th style="text-align: center;">Actions</th>
            </tr>
            <?php
            $a = 1;
            while ($row = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?= $a ?></td>
                    <td><?php echo $row['kode_prodi'] ?></td>
                    <td><?php echo $row['nama_prodi'] ?></td>
                    <td><?php echo $row['singkatan'] ?></td>
                    <td><?php echo $row['biaya_kuliah'] ?></td>


                    <td style="text-align: center;">
                        <a onclick="return confirm('Apakah yakin data akan di hapus?')" href='index.php?url=prodicontroller&dp=<?php echo $row['kode_prodi'] ?>' class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                        <a href='index.php?url=prodicontroller&ep=<?php echo $row[0] ?>' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>

                        <!--<a href='index.php?url=prodicontroller&kode_prodi=<?php echo $row['kode_prodi'] ?>?>' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>-->
                    </td>
                </tr>
                <?php
                $a++;
            }
            mysqli_free_result($data);
            ?>
        </table>
    </div>
</div>
