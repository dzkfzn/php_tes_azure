<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- display status message -->
        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>

        <!-- file upload form -->
        <form method="post" action="<?php echo base_url() ?>Upload_files/" enctype="multipart/form-data">
            <div class="form-group">
                <label>Choose Files</label>
                <input type="file" name="files[]" multiple/>
            </div>
            <div class="form-group">
                <input type="submit" name="fileSubmit" value="UPLOAD"/>
            </div>
        </form>

        
    </body>
</html>
