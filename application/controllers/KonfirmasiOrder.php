<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class KonfirmasiOrder extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MKonfirmasiOrder');
        $this->load->helper(array('form', 'url'));
        // if ($this->session->userdata('logged_in') !== TRUE) {
        //     redirect('login');
        // }
    }

    // awal tampil index
    public function index() {
        $data['qorder'] = $this->MKonfirmasiOrder->get_allorder();

        $this->load->view('Staff/FINANCE/KonfirmasiView', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);


        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Tambah Bank';
            $data['master'] = 'Bank';
            $data['aksi'] = 'aksi_add';
            $this->load->view('Staff/FINANCE/ms_Bank/Add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MBank->get_bank_byid($idu);
            $data['title'] = 'Edit Bank';
            $data['master'] = 'Bank';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Staff/FINANCE/ms_Bank/Add', $data);
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'BankID' => $id,
                'BankName' => $nama,
                'BankNoRek' => $norek
            );

            $this->MBank->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('bank');
        } elseif ($mau_ke == "Detail") {
            $orderID = addslashes($this->input->post('OrderID'));
            $data['qdetail'] = $this->MKonfirmasiOrder->get_detail($idu);
            $data['qdata'] = $this->MKonfirmasiOrder->get_detail2($idu);
            $this->load->view('Staff/FINANCE/ViewDetailOrder', $data);
        } elseif ($mau_ke == "DetailHistory") {
            $orderID = addslashes($this->input->post('OrderID'));
            $data['qdetail'] = $this->MKonfirmasiOrder->get_detail($idu);
            $data['qdata'] = $this->MKonfirmasiOrder->get_detail2($idu);
            $this->load->view('Staff/FINANCE/ViewDetail', $data);
        }
    }

    public function History() {
        $data['qorder'] = $this->MKonfirmasiOrder->get_historyorder();

        $this->load->view('Staff/FINANCE/HistoryConfirmation', $data);
    }

    // fungsi hapus bank
    public function hapus($id) {
        //$this->MBank->del_bank($id);
        $data = array(
            'BankStatusActive' => '0'
        );
        $this->MBank->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");
        redirect('bank');
    }

    public function Approve($id) {

        $idcust="";
        foreach ($this->MKonfirmasiOrder->get_detail($id) as $key => $val) {
            $email = $val->CustomerEmail;
            $nama = $val->CustomerName;
            $idorder = $val->OrderID;
            $idcust = $val->CustomerID;
        }

        foreach ($this->MKonfirmasiOrder->get_detail_games($id) as $key2 => $val2) {
            $gid = $val2->GamesID;
            $this->MKonfirmasiOrder->get_update_library_set_to_active($gid, $idcust);
        }

        //$this->MBank->del_bank($id);
        $data = array(
            'OrderStatusActive' => '1'
        );
        $this->MKonfirmasiOrder->get_update($id, $data);
        $this->sendTerima($email, $nama, $idorder);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Order Confirmed. </div>");
        redirect('KonfirmasiOrder');
    }

    public function Reject($id) {
        //$this->MBank->del_bank($id);
        foreach ($this->MKonfirmasiOrder->get_detail($id) as $key => $val) {
            $email = $val->CustomerEmail;
            $nama = $val->CustomerName;
            $idorder = $val->OrderID;
        }
        $data = array(
            'OrderStatusActive' => '2'
        );
        $this->MKonfirmasiOrder->get_update($id, $data);
        $this->sendTolak($email, $nama, $idorder);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Order Rejected. </div>");
        redirect('KonfirmasiOrder');
    }

    function sendTerima($email, $nama, $idorder) {
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

        $mail->Subject = 'Confirmation Order';

        /* -----------email body ends----------- */
        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
//        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
//            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $this->emailHtmlTerima($nama, $idorder);
        // $mail->Body = "wkwk";
        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            $err = 'Mailer Error: ' . $mail->ErrorInfo;
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> $err. </div>");
            //redirect('Register');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Success Accepted</div>");
        }
        redirect('KonfirmasiOrder/History');
    }

    function sendTolak($email, $nama, $idorder) {
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

        $mail->Subject = 'Confirmation Order';

        /* -----------email body ends----------- */
        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
//        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
//            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $this->emailHtmlTolak($nama, $idorder);
        // $mail->Body = "wkwk";
        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            $err = 'Mailer Error: ' . $mail->ErrorInfo;
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> $err. </div>");
            //redirect('Register');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Rejected</div>");
        }
        redirect('KonfirmasiOrder/History');
    }

    public function emailHtmlTerima($name, $idorder) {
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
     
     Congratulations , your purchase with id <strong> ' . $idorder . ' </strong> accepted ,<br> 
     
     
     <br>
     <br>
     Now you can check your library to see your new games, 
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

    public function emailHtmlTolak($name, $idorder) {
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
     
     Sorry because your purchase with id <strong> ' . $idorder . '. </strong> rejected because the amount you just transfered less than total amount,<br> 
     
     
     <br>
     <br>
     Please check again your order!, 
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

?>