<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>UTS</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">HOME</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?url=mahasiswacontroller">Mahasiswa</a></li>
                        <li><a href="index.php?url=prodicontroller">Program Studi</a></li>
                        <li><a href="index.php?url=tr_daftar_ulangcontroller">Daftar Ulang</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>


        <div class="container">

            <?php
            if (isset($_GET['url'])) {
                $controller = $_GET['url'];
                include "controller/" . $controller . ".php";

                $main = new $controller();
                //mahasiswa
                if (isset($_GET['e'])) {
                    
                    $nim = $_GET['e'];
                    $kode_prodi = $_GET['prodi'];
                   
                    $main->viewEdit($nim,$kode_prodi);    
                    
                } else if (isset($_GET['d'])) {
                    $nim = $_GET['d'];
                    $main->delete($nim);
                } else if (isset($_GET['i'])) {
                    $main->viewInsert();
                } 
                //prodi mahasiswa
                else if (isset($_GET['ep'])) {
                    $kode_prodi = $_GET['ep'];
                    $main->viewEdit($kode_prodi);
                } else if (isset($_GET['dp'])) {
                    $kode_prodi = $_GET['dp'];
                    $main->delete($kode_prodi);
                } else if (isset($_GET['ip'])) {
                    $main->viewInsert();
                } 
                //tr_daftar_ulang
                else if (isset($_GET['ut'])) {
                    $nim = $_GET['ut'];
                    $main->viewEdit($nim);
                    
                } else if (isset($_GET['it'])) {
                    $main->viewInsert();
                }
                else {
                    $main->index();
                }
            }
            ?>

        </div> 


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
       <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>


<script type="text/javascript">
	function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }

    function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }

                else if (e) {
                    var charCode = e.which;
                }

                else { return true; }

                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))

                    return true;

                else

                    return false;

            }

            catch (err) {

                alert(err.Description);

            }

        }

        function ValidateEmailID(txtEmailID) {

            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

            if (txtEmailID.value == "") {

                document.getElementById("error").style.display = "none";
                

                return true;

            }

            else if (filter.test(txtEmailID.value)) {

                document.getElementById("error").style.display = "none";

                return true;

            }

            else {

                document.getElementById("error").style.display = "block";

                return false;

            }

        }
</script>
<script type="text/javascript">
	$('#email_address').on('keypress', function() {
	    var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	    if(!re) {
	        $('#error').show();
	    } else {
	        $('#error').hide();
	    }
	})
</script>