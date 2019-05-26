<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Load form library & helper
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        // Load cart library
        $this->load->library('cart');

        // Load product model
        $this->load->model('MProduct');

        $this->controller = 'checkout';
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login_user');
        }
    }

    function index() {
        // Redirect if the cart is empty
        if ($this->cart->total_items() <= 0) {
            redirect('products/');
        }
        $data['cartItems'] = $this->cart->contents();


        $submit = $this->input->post('placeOrder');
        if (isset($submit)) {
            $this->BuyOrder();
        }

        $data['qbank'] = $this->MProduct->get_allbank();


        // Pass products data to the view
        $this->load->view('Customer/tr_order/checkout/2 bayar wallet', $data);
    }

    function BuyOrder() {

        $id = $this->MProduct->get_new_id();
        $order = $this->placeOrderWallet($id, "wallet", 1);
        // If the order submission is successful
        if ($order) {
            $this->session->set_userdata('success_msg', 'Order placed successfully.');
            $this->orderSuccess($id);
        } else {
            $data['error_msg'] = 'Order submission failed, please try again.';
        }
    }

    function BuyOrder_Transfer() {

        $norek = addslashes($this->input->post('PaymentNoRek'));
        $nama_norek = addslashes($this->input->post('PaymentNamaRek'));
        $id_bank = ($this->input->post('PaymentBank_ID'));
        //$id_bank = 2;

        $id = $this->MProduct->get_new_id();
        $order = $this->placeOrderTransfer($id, "transfer", 0);

        $transferData = array(
            'OrderID' => $id,
            'BankID' => $id_bank,
            'TransferRekFrom' => $norek,
            'TransferAtasNamaFrom' => $nama_norek
        );
        $this->MProduct->input_transfer($transferData);

        // If the order submission is successful
        if ($order) {
            $this->session->set_userdata('success_msg', 'Order placed successfully.');
            $this->orderSuccessTransfer($id, $norek, $nama_norek, $id_bank);
        } else {
            $data['error_msg'] = 'Order submission failed, please try again.';
        }
    }

    function placeOrderWallet($id, $payment, $status) {
        // Insert order data
        $ordData = array(
            'OrderID' => $id,
            'CustomerID' => $this->session->userdata('CustomerID'),
            'OrderTotal' => $this->cart->total(),
            'OrderPayment' => $payment,
            'OrderStatusActive' => $status
        );

        $CustID = $this->session->userdata('CustomerID');
        $total = $this->cart->total();

        $insertPembayaran = $this->MProduct->pembayaran($CustID, $total);
        $insertOrder = $this->MProduct->insertOrder($ordData);

        if ($insertOrder) {
            // Retrieve cart data from the session
            $cartItems = $this->cart->contents();

            // Cart items
            $ordItemData = array();
            $i = 0;
            foreach ($cartItems as $item) {
                $ordItemData[$i]['OrderID'] = $id;
                $ordItemData[$i]['GamesID'] = $item['id'];
//                $ordItemData[$i]['quantity'] = $item['qty'];
                $ordItemData[$i]['UnitPrice'] = $item["subtotal"];



                $insertOrderItems = $this->MProduct->insertGamesToLibrary($item['id'], $this->session->userdata('CustomerID'));


                $i++;
            }

            if (!empty($ordItemData)) {
                // Insert order items
                $insertOrderItems = $this->MProduct->insertOrderItems($ordItemData);

                if ($insertOrderItems) {
                    // Remove items from the cart
                    $this->cart->destroy();

                    // Return order ID
                    return $insertOrder;
                }
            }
        }
        return false;
    }

    function placeOrderTransfer($id, $payment, $status) {
        // Insert order data
        $ordData = array(
            'OrderID' => $id,
            'CustomerID' => $this->session->userdata('CustomerID'),
            'OrderTotal' => $this->cart->total(),
            'OrderPayment' => $payment,
            'OrderStatusActive' => $status
        );

        $CustID = $this->session->userdata('CustomerID');
        $total = $this->cart->total();

        $insertOrder = $this->MProduct->insertOrder($ordData);

        if ($insertOrder) {
            // Retrieve cart data from the session
            $cartItems = $this->cart->contents();

            // Cart items
            $ordItemData = array();
            $i = 0;
            foreach ($cartItems as $item) {
                $ordItemData[$i]['OrderID'] = $id;
                $ordItemData[$i]['GamesID'] = $item['id'];
//                $ordItemData[$i]['quantity'] = $item['qty'];
                $ordItemData[$i]['UnitPrice'] = $item["subtotal"];

                $insertOrderItems = $this->MProduct->insertGamesToLibrary_Pending($item['id'], $this->session->userdata('CustomerID'));

                $i++;
            }

            if (!empty($ordItemData)) {
                // Insert order items
                $insertOrderItems = $this->MProduct->insertOrderItems($ordItemData);

                if ($insertOrderItems) {
                    // Remove items from the cart
                    $this->cart->destroy();

                    // Return order ID
                    return $insertOrder;
                }
            }
        }
        return false;
    }

    function orderSuccess($ordID) {
        // Fetch order data from the database
        $data['order'] = $this->MProduct->getOrder($ordID);
        // Load order details view
        $this->load->view('Customer/tr_order/checkout/beta', $data);
    }

    function orderSuccessTransfer($ordID, $norek, $nama_norek, $id_bank) {

        $this->load->model('MBank');
        $data['qbank'] = $this->MBank->get_bank_byid($id_bank);

        // Fetch order data from the database
        $data['order'] = $this->MProduct->getOrder($ordID);
        // Load order details view
        $this->load->view('Customer/tr_order/checkout/bankConfirm', $data);
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
        $mail->Password = 'ketikaja';
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

}
