<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="row">
    <div class="col-lg-12">
        <a href='reportMahasiswaPDF.php' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-list"></span> Cetak Report PDF</a>
        <a href='reportMahasiswalExcel.php' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-list"></span> Cetak Report Excel</a>
        
        <br/>
        <br/>
        <a href='index.php?url=mahasiswacontroller&i=add' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
        <table class="table table-hover table-bordered" style="margin-top: 10px">
            <tr class="success">
                <th width="5'nim'px">No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>

                <th style="text-align: center;">Actions</th>
            </tr>
            <?php
            $a = 1;
            while ($row = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?= $a ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['nama_mhs'] ?></td>
                    <td><?php echo $row['nama_prodi'] ?></td>


                    <td style="text-align: center;">
                        <a onclick="return confirm('Apakah yakin data akan di hapus?')" href='index.php?url=mahasiswacontroller&d=<?php echo $row['nim'] ?>' class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                        <a href='index.php?url=mahasiswacontroller&e=<?php echo $row['nim'] ?>&prodi=<?php echo $row['kode_prodi'] ?>?>' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
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
