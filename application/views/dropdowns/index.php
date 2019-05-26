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
        <style type="text/css">
            .select-boxes{width: 280px;text-align: center;margin: 0 auto;}
            select {
                background-color: #F5F5F5;
                border: 1px double #FB4314;
                color: #55BB91;
                font-family: Georgia;
                font-weight: 14px;
                height: 39px;
                padding: 7px 8px;
                width: 250px;
                outline: none;
                margin: 10px 0 10px 0;
            }
            select option{
                font-family: Georgia;
                font-size: 14px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                /* Populate data to regency dropdown */
                $('#province').on('change', function () {
                    var provinceID = $(this).val();
                    if (provinceID) {
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php/dropdowns/getRegencies',
                            data: 'province_id=' + provinceID,
                            success: function (data) {
                                $('#regency').html('<option value="">Select regency</option>');
                                $('#district').html('<option value="">Select regency first</option>');
                                $('#village').html('<option value="">Select district first</option>');
                                var dataObj = jQuery.parseJSON(data);
                                if (dataObj) {
                                    $(dataObj).each(function () {
                                        var option = $('<option />');
                                        option.attr('value', this.id).text(this.name);
                                        $('#regency').append(option);
                                    });
                                } else {
                                    $('#regency').html('<option value="">regency not available</option>');
                                }
                            }
                        });
                    } else {
                        $('#regency').html('<option value="">Select province first</option>');
                        $('#district').html('<option value="">Select regency first</option>');
                        $('#village').html('<option  value="">Select district first</option>');
                    }
                });

                /* Populate data to district dropdown */
                $('#regency').on('change', function () {
                    var regencyID = $(this).val();
                    if (regencyID) {
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php/dropdowns/getDistricts',
                            data: 'regency_id=' + regencyID,
                            success: function (data) {
                                $('#district').html('<option value="">Select regency</option>');
                                $('#village').html('<option value="">Select district first</option>');
                                var dataObj = jQuery.parseJSON(data);
                                if (dataObj) {
                                    $(dataObj).each(function () {
                                        var option = $('<option />');
                                        option.attr('value', this.id).text(this.name);
                                        $('#district').append(option);
                                    });
                                } else {
                                    $('#district').html('<option value="">district not available</option>');
                                }
                            }
                        });
                    } else {
                        $('#district').html('<option d value="">Select regency first</option>');
                        $('#village').html('<option disable value="">Select district first</option>');

                    }
                });

                /* Populate data to district dropdown */
                $('#district').on('change', function () {
                    var districtID = $(this).val();
                    if (districtID) {
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php/dropdowns/getVillages',
                            data: 'district_id=' + districtID,
                            success: function (data) {
                                $('#village').html('<option value="">Select villages</option>');
                                var dataObj = jQuery.parseJSON(data);
                                if (dataObj) {
                                    $(dataObj).each(function () {
                                        var option = $('<option />');
                                        option.attr('value', this.id).text(this.name);
                                        $('#village').append(option);
                                    });
                                } else {
                                    $('#village').html('<option value="">villages not available</option>');
                                }
                            }
                        });
                    } else {
                        $('#village').html('<option d value="">Select district first</option>');
                    }
                });

            });

        </script>
    </head>
    <body>
        <div class="container">
            <div class="select-boxes">

                <!-- Country dropdown -->
                <select id="province">
                    <option   value="">Select province</option>
                    <?php
                    if (!empty($provinces)) {
                        foreach ($provinces as $row) {
                            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                        }
                    } else {
                        echo '<option value="">province not available</option>';
                    }
                    ?>
                </select>

                <!-- State dropdown -->
                <select id="regency">
                    <option value="">Select province first</option>
                </select>

                <!-- City dropdown -->
                <select id="district">
                    <option value="">Select regency first</option>
                </select>

                <!-- villages dropdown -->
                <select id="village">
                    <option value="">Select district first</option>
                </select>

            </div>
        </div>
    </body>

</html>

