<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="row">
    <div class="col-lg-12">
        <a href='index.php?url=tr_daftar_ulangcontroller&it=add' class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
        <table class="table table-hover table-bordered" style="margin-top: 10px">
            <tr class="success">
                <th width="5'nim'px">No</th>
                <th>NIM</th>
                <th>Grade</th>
                <th>Total Biaya</th>
            </tr>
            <?php
            $a = 1;
            while ($row = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?= $a ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['grade'] ?></td>
                    <td><?php echo $row['total_biaya'] ?></td>



                </tr>
                <?php
                $a++;
            }
            mysqli_free_result($data);
            ?>
        </table>
    </div>
</div>
