<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Load cart library
        // $this->load->library('cart');
        // // Load product model
        $this->load->model('MRegister');
        $this->load->library('form_validation');
    }

    function index() {
        $data = array();

        // Fetch products from the database
        // $data['products'] = $this->MProduct->getRows();
        // $data['cartItems'] = $this->cart->contents();
        // Load the product list view
        $this->load->view('user/register/register');
    }
    
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form, sebelah kanan dari form, sebelah kiri variable controller
        $id = $this->MRegister->get_new_id();
        $username = addslashes($this->input->post('username'));
        $email = addslashes($this->input->post('email'));
        $pass = addslashes($this->input->post('pass'));



        if ($mau_ke == "add") {
            $data['title'] = 'Add Event';
            $data['aksi'] = 'aksi_add';
            $data['master'] = 'Event';

            $this->load->view('Staff/ADMIN/ms_Event/Add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MEvent->get_event_byid($idu);

            $data['master'] = 'Event';
            $data['title'] = 'Edit Event';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('staff/ADMIN/ms_Event/Add', $data);
        } elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data

            $data = array(
                'CustomerID' => $id,
                'CustomerUsername' => $username,
                'CustomerEmail' => $email,
                'CustomerPassword' => $pass
            );

            $this->MRegister->get_insert($data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");
           
            $this->senduser($email);
            
            redirect('login_user');
            
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $date = str_replace('/', '-', $startDate);
            $newDateStart = date("Y-m-d", strtotime($startDate));

            $date2 = str_replace('/', '-', $endDate);
            $newDateEnd = date("Y-m-d", strtotime($endDate));
            $data = new stdClass();
            $data = array(
                'EventID' => addslashes($this->input->post('EventID')),
                'EventName' => $event,
                'EventStartDate' => $newDateStart,
                'EventEndDate' => $newDateEnd
            );

            $this->MEvent->get_update(addslashes($this->input->post('EventID')), $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('Event');
        }
    }

    function cek() {
        if (isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['pass']) && !empty($_POST['pass'])) {
            $username = $_POST['username']; // Turn our post into a local variable
            $email = $_POST['email']; // Turn our post into a local variable
            $pass = $_POST['pass'];
            $code = md5(rand(0, 1000));
            $id = $this->MRegister->get_new_id();
            $this->send($username, $email, $pass, $code, $id);

            // if(!("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
            //     // Return Error - Invalid Email
            //     $msg = 'The email you have entered is invalid, please try again.';
            // }else{
            //     // Return Success - Valid Email
            //     $msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
            // }
            //         }
        }
    }
    
    function senduser($email) {
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

        $mail->Subject = 'Verification Email Registration on GameGevity as Customer';

        /* -----------email body ends----------- */
        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
//        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
//            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $this->emailHtml();
        // $mail->Body = "wkwk";
        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            $err = 'Mailer Error: ' . $mail->ErrorInfo;
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> $err. </div>");
            redirect('Register');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. Please tell them to confirm Email</div>");
        }
        redirect('login_user');
    }


    function send($email) {
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

        $mail->Subject = 'Verification Email Registration on GameGevity as Customer';

        /* -----------email body ends----------- */
        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
//        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
//            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $this->emailHtml();
        // $mail->Body = "wkwk";
        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            $err = 'Mailer Error: ' . $mail->ErrorInfo;
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> $err. </div>");
            redirect('Register');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. Please tell them to confirm Email</div>");
        }
        redirect('Login');
    }

    public function emailHtml() {
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
     
     Congratulations on your entry in this company as our <strong> Customer. </strong> ,<br> 
     
     
     <br>
     <br>
     Now you can buy all games in our store, 
      <br><br>
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
          
        <!--[if gte mso 9]>
              </td>
            </tr>
          </table>
        <![endif]-->

        </td>
      </tr>
    </tbody></table>
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
