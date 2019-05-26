<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staff extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MStaff');
        $this->load->model('dropdown');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

//        if ($this->session->userdata('logged_in') !== TRUE) {
//            redirect('login');
    }

    // awal tampil index
    public function index() {
        $data['master'] = 'Staff';
        $data['title'] = 'Add Staff';
        $data['aksi'] = 'aksi_add';
        $data['master'] = 'Staff';
        $data['qrole'] = $this->MStaff->get_allrole();
        $data['LoginStaffName'] = $this->session->userdata('StaffName');
        $data['LoginStaffID'] = $this->session->userdata('StaffID');
        //data ddl
        $data['provinces'] = $this->dropdown->getProvinceRows();
        $data['qstaff'] = $this->MStaff->get_allstaff($this->session->userdata('StaffID'));

        $this->load->view('Staff/SUPER_ADMIN/ms_Staff/view', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        $id = addslashes($this->input->post('StaffID'));
        $id_role = addslashes($this->input->post('RoleID'));
        // ambil variabel dari form, sebelah kanan dari form, sebelah kiri variable controller
        $nama_role = $this->MStaff->get_role_name($id_role);
        $name = strtoupper(addslashes($this->input->post('StaffName')));
        $email = addslashes($this->input->post('StaffEmail'));
        $username = str_replace('@', '', addslashes($this->input->post('StaffUsername')));
        $password = $this->randomPassword();
        $pass_hash = md5($password);
        $address = addslashes($this->input->post('StaffAddress'));
        $phone = addslashes($this->input->post('StaffPhoneNum'));
        $gender = addslashes($this->input->post('StaffGender'));
        $createdBy = $this->session->userdata('StaffID');

        $StaffAddress = strtoupper(addslashes($this->input->post('StaffAddress')));

        $StaffProvince = addslashes($this->input->post('StaffProvince'));
        $StaffRegency = addslashes($this->input->post('StaffRegency'));
        $StaffDistrict = addslashes($this->input->post('StaffDistrict'));
        $StaffVillage = addslashes($this->input->post('StaffVillage'));
        $StaffZipCode = addslashes($this->input->post('StaffZipCode'));
        $StaffImage = addslashes($this->input->post('StaffImage'));


        if ($mau_ke == "add") {
            $data['title'] = 'Add Staff';
            $data['aksi'] = 'aksi_add';
            $data['master'] = 'Staff';
            $data['qrole'] = $this->MStaff->get_allrole();
            //data ddl
//            $data['provinces'] = $this->dropdown->getProvinceRows();

            $this->load->view('Staff/SUPER_ADMIN/ms_Staff/View', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MStaff->get_staff_byid_edit($idu);
            $data['qrole'] = $this->MStaff->get_allrole();

            //convert dari std class ke array
            $tes = json_encode($data['qdata'][0], TRUE);
            $json = json_decode($tes, true);

            $province = $json['StaffProvince'];
            $regency = $json['StaffRegency'];
            $district = $json['StaffDistrict'];
            $village = $json['StaffVillage'];

            $data['province'] = $this->MStaff->get_province_byid();
            $data['regency'] = $this->MStaff->get_regency_byid($province);
            $data['districts'] = $this->MStaff->get_district_byid($regency);
            $data['villages'] = $this->MStaff->get_village_byid($district);

            $data['master'] = 'Staff';
            $data['title'] = 'Edit Staff';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Staff/SUPER_ADMIN/ms_Staff/Edit', $data);
        } elseif ($mau_ke == "detail") {

            $array = $this->MStaff->get_staff_byid($idu);

            $data['qdata'] = $array['dataStaff'];
            $data['isLengkap'] = $array['i'];

            $data['master'] = 'Staff';
            $data['title'] = 'Detail Staff';
            $this->load->view('Staff/SUPER_ADMIN/ms_Staff/Detail', $data);
        } elseif ($mau_ke == "aksi_add") {
            $id = $this->MStaff->get_new_id($id_role);

            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $code = md5(rand(0, 1000));
            $data = new stdClass();
            $data = array(
                'StaffID' => $id,
                'RoleID' => $id_role,
                'StaffName' => $name,
                'StaffEmail' => $email,
                'StaffUsername' => $username,
                'StaffPassword' => $pass_hash,
                'StaffAddress' => $address,
                'StaffPhoneNum' => $phone,
                'StaffStatusActive' => '0',
                'StaffHash' => $code,
                'StaffGender' => $gender,
                'StaffCreatedBy' => $createdBy,
                'StaffCreatedDate' => date('Y-m-j H:i:s'),
                'StaffModifiedBy' => $createdBy,
//                'StaffModifiedDate' => $modifiedDate,
//                'StaffLastAccess' => $lastAccess
            );

            $this->MStaff->get_insert($data);
            $this->send($name, $email, $username, $password, $id, $code, $nama_role);
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update

            if ($_FILES['StaffImage']['size'] == 0) {
                $data = array(
                    'StaffID' => $id,
                    'RoleID' => $id_role,
                    'StaffName' => $name,
                    'StaffEmail' => $email,
                    'StaffUsername' => "@" . $username,
                    'StaffAddress' => $address,
                    'StaffPhoneNum' => $phone,
                    'StaffAddress' => $StaffAddress,
                    'StaffProvince' => $StaffProvince,
                    'StaffRegency' => $StaffRegency,
                    'StaffDistrict' => $StaffDistrict,
                    'StaffVillage' => $StaffVillage,
                    'StaffZipCode' => $StaffZipCode,
                    'StaffGender' => $gender,
                );
            } else {
                $pict = $this->aksi_upload($id, $name);

                $data = array(
                    'StaffID' => $id,
                    'RoleID' => $id_role,
                    'StaffName' => $name,
                    'StaffEmail' => $email,
                    'StaffUsername' => "@" . $username,
                    'StaffAddress' => $address,
                    'StaffPhoneNum' => $phone,
                    'StaffAddress' => $StaffAddress,
                    'StaffProvince' => $StaffProvince,
                    'StaffRegency' => $StaffRegency,
                    'StaffDistrict' => $StaffDistrict,
                    'StaffVillage' => $StaffVillage,
                    'StaffZipCode' => $StaffZipCode,
                    'StaffPicture' => $pict,
                    'StaffGender' => $gender,
                );
            }




            $this->MStaff->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('staff');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'StaffID' => $id,
                'RoleID' => $id_role,
                'StaffName' => $name,
                'StaffEmail' => $email,
                'StaffUsername' => $username,
                'StaffPassword' => md5($password),
                'StaffAddress' => $address,
                'StaffPhoneNum' => $phone,
            );


            $this->MStaff->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('staff');
        }
    }

    public function registrasi() {

        $StaffID = addslashes($this->input->post('StaffID'));
        $StaffName = addslashes($this->input->post('StaffName'));
        $StaffUsername = addslashes($this->input->post('StaffUsername'));
        $StaffPassword = addslashes($this->input->post('StaffPassword'));
        $StaffBirthDate = date("Y-m-d", strtotime(addslashes($this->input->post('StaffBirthDate'))));
        $StaffProvince = addslashes($this->input->post('StaffProvince'));
        $StaffRegency = addslashes($this->input->post('StaffRegency'));
        $StaffDistrict = addslashes($this->input->post('StaffDistrict'));
        $StaffVillage = addslashes($this->input->post('StaffVillage'));
        $StaffZipCode = addslashes($this->input->post('StaffZipCode'));
        $StaffAddress = strtoupper(addslashes($this->input->post('StaffAddress')));
        $StaffImage = addslashes($this->input->post('StaffImage'));
        $pict = $this->aksi_upload($StaffID, $StaffName, $StaffImage);

        $data = array(
            'StaffUsername' => $StaffUsername,
            'StaffUsername' => "@" . $StaffUsername,
            'StaffPassword' => md5($StaffPassword),
            'StaffBirthDate' => $StaffBirthDate,
            'StaffAddress' => $StaffAddress,
            'StaffProvince' => $StaffProvince,
            'StaffRegency' => $StaffRegency,
            'StaffDistrict' => $StaffDistrict,
            'StaffVillage' => $StaffVillage,
            'StaffZipCode' => $StaffZipCode,
            'StaffPicture' => $pict,
            'StaffStatusVerif' => 1,
            'StaffStatusActive' => 1,
        );


        $this->MStaff->get_update($StaffID, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Your Account Has been actived, now you can login!. </div>");

        redirect('login');
    }

    public function aksi_upload($StaffID, $StaffName) {
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $StaffID . "-" . $StaffName;
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('StaffImage')) {
            $foto = $this->upload->data();
            return $foto['file_name'];
        } else {
            return "default.jpg";
        }
    }

    //DDL
    public function getRegencies() {
        $regencies = array();
        $province_id = $this->input->post('province_id');
        if ($province_id) {
            $con['conditions'] = array('province_id' => $province_id);
            $regencies = $this->dropdown->getRegencyRows($con);
        }
        echo json_encode($regencies);
    }

    public function getDistricts() {
        $districts = array();
        $regency_id = $this->input->post('regency_id');
        if ($regency_id) {
            $con['conditions'] = array('regency_id' => $regency_id);
            $districts = $this->dropdown->getDistrictRows($con);
        }
        echo json_encode($districts);
    }

    public function getVillages() {
        $villages = array();
        $district_id = $this->input->post('district_id');
        if ($district_id) {
            $con['conditions'] = array('district_id' => $district_id);
            $villages = $this->dropdown->getVillageRows($con);
        }
        echo json_encode($villages);
    }

    function check_email_avalibility() {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo '<label id="verifInvalid" class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';
        } else {
            $this->load->model("MStaff");
            if ($this->MStaff->is_email_available($_POST["email"])) {
                echo '<label id="verifFailed" class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';
            } else {
                echo '<label id="verifSucces" class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';
            }
        }
    }

    // fungsi hapus staff
    public function hapus($id) {
        //$this->MStaff->del_staff($id);
        $data = array(
            'StaffStatusActive' => '0'
        );
        $this->MStaff->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('staff');
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function aktif($id) {
        //$this->MStaff->del_staff($id);
        $data = array(
            'StaffStatusActive' => '1'
        );
        $this->MStaff->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Your Account has been actived. </div>");
        redirect('Staff');
    }

    public function send($name, $email, $username, $password, $id, $code, $nama_role) {
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'game.gevity.Inc@gmail.com';
        $mail->Password = 'ketikaja123';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('info@gmail.com', 'GameGevity');
        $mail->addReplyTo('info@gmail.com', 'GameGevity');

        // Add a recipient
        $mail->addAddress($email);
        
        $mail->Subject = 'Verification Email Registration on GameGevity as Staff';

        /* -----------email body ends----------- */
        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
//        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
//            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->AddEmbeddedImage( base_url('Developer/GamesThumbnail/1.jpg'), "logo_2u", "1.jpg");
        $mail->Body = $this->emailHtml($name, $email, $username, $password, $id, $code, $nama_role);

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            $err = 'Mailer Error: ' . $mail->ErrorInfo;
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> $err. </div>");
            redirect('Staff');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. Please tell them to confirm Email</div>");
            redirect('Staff');
        }
    }

    public function verify() {


        $result = $this->MStaff->get_hash_value($_GET['nik']); //get the hash value which belongs to given email from database
        if ($result) {
            if ($result == $_GET['hash']) {  //check whether the input hash value matches the hash value retrieved from the database
                $data['StaffID'] = $_GET['nik'];
                $data['StaffName'] = $_GET['name'];
                $verif = $this->MStaff->verify_user($_GET['nik']);
                if ($verif[0]['StaffStatusVerif'] == 1) {
                    $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> You have registered, please login!! </div>");
                    redirect('login');
                } else {
                    $data['provinces'] = $this->dropdown->getProvinceRows();
                    $this->load->view('Staff/SUPER_ADMIN/ms_Staff/reg', $data);
                }
            }
        }
    }

    public function emailHtml($name, $email, $username, $password, $id, $code, $nama_role) {
        $body = '<head>

  <!--[if gte mso 9]><xml>
  <o:OfficeDocumentSettings>
  <o:AllowPNG/>
  <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
  </xml><![endif]-->
  <title>Udacity_email</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--[if !mso]><!-- --><meta content="IE=edge" http-equiv="X-UA-Compatible"><!--<![endif]-->
  <!--[if !mso]><!-- --><link href="https://fonts.googleapis.com/css?family=Open+Sans:600,400,300" rel="stylesheet" type="text/css"><!--<![endif]-->
  <style type="text/css">html, body { background-color:#fafbfc; }
    img { display:block; }
    .ReadMsgBody {width: 100%; }
    .ExternalClass {width: 100%; }
    * { -webkit-text-size-adjust: none; }
    .whiteLinks a:link, .whiteLinks a:visited { color:#ffffff!important;}
    .appleLinksGrey a { color:#b7bdc1!important; text-decoration:none!important; }
    table {border-collapse:collapse;}
    .preheader{ font-size: 1px; line-height:1px; display: none!important; mso-hide:all; }

    /* AOL Mail td overrides */
    #maincontent td{color:#525C65;}
  </style>
  <!--[if mso]>
  <style type="text/css">
  body, table, td, a {font-family: Arial, Helvetica, sans-serif !important;}
  </style>
  <![endif]-->

</head>
<body bgcolor="#fafbfc" style="Margin:0; padding:0;" yahoo="fix">
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr>
      <td style="background-color:#fafbfc">
        <center bgcolor="#fafbfc" style="width:100%;background-color:#fafbfc;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">
          <div id="maincontent" style="max-width:620px; font-size:0;margin:0 auto;">
            <div class="preheader" style="font-size: 1px; line-height:1px; display: none!important; mso-hide:all;">
              One more step to get started
            </div>
            <!--[if gte mso 9]>
              <table border="0" cellpadding="0" cellspacing="0" style="width:620px;">
                <tr>
                  <td valign="top">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
              <tbody><tr>
                <td>
                  <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                    <tbody><tr>
                      <td align="center" style="padding-bottom:20px;">
                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:\'Open+Sans\', \'Open Sans\', Helvetica, Arial, sans-serif; font-size:13px; line-height:18px; color:#00C0EA; text-align:center; width:152px;">
                          
                          <tbody><tr>
                            <td style="padding:20px 0 10px 0;">
                              <a href="#tba" style="text-decoration:none;" target="_blank"><img alt="Udacity" border="0" src="https://i.imgur.com/1VS4h4H.png" style="display:block; width:152px !important; font-family:\'Open+Sans\', \'Open Sans\', Helvetica, Arial, sans-serif; font-size:22px; line-height:26px; color:#000000; text-transform:uppercase; text-align:center; letter-spacing:1px;" width="152"></a>
                            </td>
                          </tr>
                          
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
              
              <tr>
                <td>
                  <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                    <tbody><tr>
                      <td bgcolor="#fafbfc" style="width:7px; font-size:1px;">&nbsp;</td>
                      <td bgcolor="#f5f6f7" style="width:1px; font-size:1px;">&nbsp;</td>
                      <td bgcolor="#f0f2f3" style="width:1px; font-size:1px;">&nbsp;</td>
                      <td bgcolor="#edeef1" style="width:1px; font-size:1px;">&nbsp;</td>
                      <td bgcolor="#ffffff">
                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                          <tbody><tr>
                            <td style="text-align:center; padding:40px 40px 40px 40px; border-top:3px solid #ff003f;">
                            <!--[if gte mso 9]>
                              <table border="0" cellpadding="0" cellspacing="0" style="width:520px;">
                                <tr>
                                  <td valign="top">
                            <![endif]-->
                              <div style="display:inline-block; width:100%; max-width:520px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="font-family:\'Open+Sans\', \'Open Sans\', Helvetica, Arial, sans-serif; font-size:14px; line-height:24px; color:#525C65; text-align:left; width:100%;">
                                  <tbody><tr>
                                    <td>
                                      <p style="Margin:0; font-size:18px; line-height:23px; color:#102231; font-weight:bold;">
                                        <strong>
                                          Hi
                                         ' . $name . ',</strong><br><br>
                                      </p>
                                      



                                    </td>
                                  </tr>
                                  
<tr>
  <td>
     
     Congratulations on your entry in this company as our <strong>' . $nama_role . '</strong> ,<br> 
     Here\'s your login detail:<br><br>
     <table>
      <tr>
      <td><strong>NIK</strong></td>
      <td><strong> :</strong></td>
      <td><strong>' . $id . '</strong></td>
      </tr>
      <tr>
      <td><strong>Password</strong></td>
      <td><strong> :</strong></td>
      <td><strong>' . $password . '</strong></td>
      </tr>

  
     </table>
     <br>
     <br>
     To complete your sign up, 
     please verify your email and change password on the button below: <br><br>
  </td>
</tr>
<tr>
  <td align="center" style="padding:15px 0 40px 0; border-bottom:1px solid #f3f6f9; ">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate !important; border-radius:15px; width:210px;">
      <tbody><tr>
        <td align="center" valign="top">
        <!--[if gte mso 9]>
          <table border="0" cellspacing="0" cellpadding="0" style="width:210px">
            <tr>
              <td bgcolor="#01b3e3" style="padding:0px 10px; text-align:center;" valign="top">
        <![endif]-->
          <a href="' . base_url() . 'index.php/Staff/verify?' . 'nik=' . $id . '&name=' . $name . '&hash=' . $code . '" target="_blank" style="background-color:#ff003f; border-collapse:separate !important; border-top:10px solid #ff003f; border-bottom:10px solid #ff003f; border-right:45px solid #ff003f; border-left:45px solid #ff003f; border-radius:4px; color:#ffffff; display:inline-block; font-family:\'Open+Sans\',\'Open Sans\',Helvetica, Arial, sans-serif; font-size:13px; font-weight:bold; text-align:center; text-decoration:none; letter-spacing:2px;">VERIFY EMAIL</a>
        <!--[if gte mso 9]>
              </td>
            </tr>
          </table>
        <![endif]-->

        </td>
      </tr>
    </tbody></table>
                 <img src="cid:logo_2u" />

  </td>
</tr>
<tr>
  <td style="padding-top:30px;">
    <p style="Margin:20px 0 20px 0;">If you have any issues confirming your email, we will be happy to help you.<br> You can contact us on <a>support@gamegevity.com</a><br><br>
    Or copy this link and paste in your web browser</p>
    <p style="Margin:20px 0; font-size:12px; line-height:17px; word-wrap:break-word; word-break:break-all;"><a href="https://www.udacity.com/" style="color:#5885ff; text-decoration:underline;" target="_blank">' . base_url() . 'index.php/Staff/verify?' . 'nik=' . $id . '&hash=' . $code . '</a></p>
  </td>
</tr>

                                  <tr>
                                    <td style="font:14px/16px Arial, Helvetica, sans-serif; color:#363636; padding:0 0 14px;">
                                      Cheers,
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="font:bold 14px/16px Arial, Helvetica, sans-serif; color:#363636; padding:0 0 7px;">
                                      Dzaki & Aisyah
                                    </td>
                                  </tr>
                                  
                                </tbody></table>
                              </div>
                              <!--[if gte mso 9]>
                                    </td>
                                  </tr>
                                </table>
                              <![endif]-->
                            </td>
                          </tr>
                          <tr>
                            <td bgcolor="#e0e2e5" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>
                          </tr>
                          <tr>
                            <td bgcolor="#e0e2e4" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>
                          </tr>
                          <tr>
                            <td bgcolor="#e8ebed" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>
                          </tr>
                          <tr>
                            <td bgcolor="#f1f3f6" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>
                          </tr>
                        </tbody></table>
                      </td>
                      <td bgcolor="#edeef1" style="width:1px; font-size:1px;">&nbsp;</td>
                      <td bgcolor="#f0f2f3" style="width:1px; font-size:1px;">&nbsp;</td>
                      <td bgcolor="#f5f6f7" style="width:1px; font-size:1px;">&nbsp;</td>
                      <td bgcolor="#fafbfc" style="width:7px; font-size:1px;">&nbsp;</td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
              <tr>
                <td style="text-align:center; padding:0;">
                <!--[if gte mso 9]>
                  <table border="0" cellpadding="0" cellspacing="0" style="width:520px;">
                    <tr>
                      <td valign="top">
                <![endif]-->
                  
                  <div style="display:inline-block; width:100%; max-width:520px; vertical-align:top;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                      <tbody><tr>
                        <td align="center" style="padding:30px 0; border-bottom:1px solid #e5ebef;">
                          <table border="0" cellpadding="0" cellspacing="0" style="width:265px;">
                            <tbody><tr>
                              <td align="center">
                                <a href="https://itunes.apple.com/us/app/id819700933?mt=8" target="_blank"><img alt="IOS" border="0" height="44" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/ios-btn.gif" style="display:block; width:120px!important;" width="120"></a>
                              </td>
                              <td align="center">
                                <a href="https://play.google.com/store/apps/details?id=com.udacity.android" target="_blank"><img alt="Android" border="0" height="44" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/android-btn.gif" style="display:block; width:120px!important;" width="120"></a>
                              </td>
                            </tr>
                          </tbody></table>
                        </td>
                      </tr>
                    </tbody></table>
                  </div>
                  
                  <!--[if gte mso 9]>
                        </td>
                      </tr>
                    </table>
                  <![endif]-->
                </td>
              </tr>
              <tr>
                <td align="center" style="padding:30px 0 20px 0;">
                  
                  <table border="0" cellpadding="0" cellspacing="0" style="width:220px;">
                    <tbody><tr>
                      <td align="center">
                        <a href="https://twitter.com/udacity" target="_blank"><img alt="Twitter" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/twitter.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>
                      </td>
                      <td align="center">
                        <a href="https://www.facebook.com/Udacity" target="_blank"><img alt="Facebook" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/facebook.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>
                      </td>
                      <td align="center">
                        <a href="https://plus.google.com/+Udacity" target="_blank"><img alt="Google" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/google.jpg" style="display:block; width:28px!important; height:26px!important;" width="28"></a>
                      </td>
                      <td align="center">
                        <a href="https://www.linkedin.com/company/udacity" target="_blank"><img alt="Linkedin" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/linkedin.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>
                      </td>
                    </tr>
                  </tbody></table>
                  
                </td>
              </tr>
              <tr>
                <td align="center" style="padding-bottom:40px;">
                  <table border="0" cellpadding="0" cellspacing="0" style="font-family:\'Open+Sans\', \'Open Sans\', Helvetica, Arial, sans-serif; font-size:12px; line-height:18px;  text-align:center; width:auto;">
                    <tbody><tr>
                      <td style="color:#b7bdc1;">
                        
                        <p style="Margin:0;"><span class="appleLinksGrey">2465 Latham St.</span> &nbsp;•&nbsp; <span class="appleLinksGrey">Mountain View, CA 94040</span></p>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          <!--[if gte mso 9]>
                </td>
              </tr>
            </table>
          <![endif]-->
          </div>
          
          <div style=" width:100%;">
            <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
              <tbody><tr>
                <td align="center" bgcolor="#ff003f" style="padding:10px 0;">
                  <table border="0" cellpadding="0" cellspacing="0" style="font-family:\'Open+Sans\', \'Open Sans\', Helvetica, Arial, sans-serif; font-size:14px; line-height:19px;  text-align:center; width:auto;">
                    <tbody><tr>
                      <td style="color:#ffffff;">
                        Be in demand
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          </div>
          
        </center>
      </td>
    </tr>
  </tbody></table>



</body>'
        ;
        return $body;
    }

}

?>