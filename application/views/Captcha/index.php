<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- captcha refresh code -->
        <script>
            $(document).ready(function () {
                $('.refreshCaptcha').on('click', function () {
                    $.get('<?php echo base_url() . 'captcha/refresh'; ?>', function (data) {
                        $('#captImg').html(data);
                    });
                });
            });
        </script>
    </head>
    <body>
        <div>TODO write content</div>
        <h4>Submit Captcha Code</h4>
        <p id="captImg"><?php echo $captchaImg; ?></p>
        <p>Can't read the image? click <a href="javascript:void(0);" class="refreshCaptcha">here</a> to refresh.</p>
        <form method="post">
            Enter the code : 
            <input type="text" name="captcha" value=""/>
            <input type="submit" name="submit" value="SUBMIT"/>
        </form>
    </body>

    <
</html>
