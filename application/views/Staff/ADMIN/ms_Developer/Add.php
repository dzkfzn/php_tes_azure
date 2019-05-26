<?php $this->load->view('Staff/ADMIN/header'); ?>
<?php
if ($aksi == 'aksi_add') {
    $id = "";
    $name = "";
    $wallet = "";
    $email = "";
    $address = "";
    $hp = "";
    $username = "";
    $password = "";
    $repassword = "";
    $img = "";
} else {
    foreach ($qdata as $rowdata) {
        $id = $rowdata->DeveloperID;
        $name = $rowdata->DeveloperName;
        $wallet = $rowdata->DeveloperWallet;
        $email = $rowdata->DeveloperEmail;
        $address = $rowdata->DeveloperAddress;
        $hp = $rowdata->DeveloperPhoneNumber;
        $username = $rowdata->DeveloperUsername;
        $password = $rowdata->DeveloperPassword;
        $repassword = $rowdata->DeveloperPassword;
        $img = $rowdata->DeveloperImagePath;
    }
}
?> 

<!-- Single pro tab start-->
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="fa fa-plus" aria-hidden="true"></i> Add Developer</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="<?php echo base_url() ?>developer/form/<?php echo $aksi ?>" method="post" onSubmit="return validate()">

                                    <div class="row">


                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro" hidden="true">ID</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" hidden="true">
                                                            <input type="text" onkeypress="return isNumber(event)" name="DeveloperID" value="<?php echo $id ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Company Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required onkeypress="return onlyAlphabets(event)" name="DeveloperName" value="<?php echo $name ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Email</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="email" required name="DeveloperEmail" value="<?php echo $email ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Phone</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required onkeypress="return isNumber(event)" inputmode="isNumber" maxlength="13" minlength="10" name="DeveloperPhoneNumber" value="<?php echo $hp ?>" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Address</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <textarea required onkeypress="return onlyAlphabets(event)" name="DeveloperAddress" value="<?php echo $address ?>" class="form-control" ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                  </div>
                                        </div>

                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Username</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                                            <input required class="form-control" type="text" value="<?php echo $username ?>" name="DeveloperUsername" id="DeveloperUsername"   >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Password</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                                            <input class="form-control" required type="password" value="<?php echo $password ?>" name="DeveloperPassword" id="DeveloperPassword"  onkeypress="return RestrictSpace()" required  >
                                                            <input type="checkbox" onclick="myFunction()">Show Password
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Re-Password</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                                            <input class="form-control" type="password"  value="<?php echo $repassword ?>" name="DeveloperRePassword" id="DeveloperRePassword" onkeypress="return RestrictSpace()" required  onkeyup="checkPass(); return false;">  <span id="confirmMessage"  class="confirmMessage"></span><br><input type="checkbox" onclick="myFunction2()" >Show Password
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Developer Photo</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12" >
                                                            <input accept="image/*" name="DeveloperImg" value="<?php echo $img ?>" required class="form-control" id="inputFile" type="file"/>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                          


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                </button>
                                                <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form> 

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var todo = document.getElementById("DeveloperPassword");
var todo2 = document.getElementById("DeveloperRePassword");

if(todo != todo2) { 
     
}
</script>
<script type="text/javascript">
      function validate(){

    if(!document.getElementById("DeveloperPassword").value==document.getElementById("DeveloperRePassword").value)alert("Passwords do no match");
    return document.getElementById("DeveloperPassword").value==document.getElementById("DeveloperRePassword").value;
   return $('#<%=Label1.ClientID%>').html("hello");
    }
</script>
<script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("DeveloperPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  function myFunction2() {
  var x = document.getElementById("DeveloperRePassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

 function RestrictSpace() {
        if (event.keyCode == 32) {
            return false;
        }
    }


    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('DeveloperPassword');
        var pass2 = document.getElementById('DeveloperRePassword');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
        if (pass1.value == pass2.value) {
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!";
            document.getElementById("Button").disabled = false;

        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!";
            document.getElementById("Button").disabled = true;

        }
    }
    ;
</script>

<!-- /container --> 
<?php $this->load->view('Staff/ADMIN/footer'); ?>