
<!--CLOSED CONTENT-->
<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




<!-- jquery
                ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/bootstrap.min.js"></script>
<!-- wow JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/wow.min.js"></script>
<!-- price-slider JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/owl.carousel.min.js"></script>
<!-- sticky JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/jquery.sticky.js"></script>
<!-- scrollUp JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Admin/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Admin/js/metisMenu/metisMenu-active.js"></script>
<!-- tab JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/tab.js"></script>
<!-- icheck JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/icheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Admin/js/icheck/icheck-active.js"></script>
<!-- plugins JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/plugins.js"></script>
<!-- main JS
            ============================================ -->
<script src="<?php echo base_url(); ?>assets/Admin/js/main.js"></script>
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
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                return true;

            else
                return false;

        } catch (err) {

            alert(err.Description);

        }

    }

    function ValidateEmailID(txtEmailID) {

        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        if (txtEmailID.value == "") {

            document.getElementById("error").style.display = "none";


            return true;

        } else if (filter.test(txtEmailID.value)) {

            document.getElementById("error").style.display = "none";

            return true;

        } else {

            document.getElementById("error").style.display = "block";

            return false;

        }

    }
</script>
<script type="text/javascript">
    $('#email_address').on('keypress', function () {
        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
        if (!re) {
            $('#error').show();
        } else {
            $('#error').hide();
        }
    })
</script>

