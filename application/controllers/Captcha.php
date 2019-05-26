<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Load session library
        $this->load->library('session');

        // Load the captcha helper
        $this->load->helper('url');

        $this->load->helper('captcha');
    }

    public function index() {
        // If captcha form is submitted
        if ($this->input->post('submit')) {
            $inputCaptcha = $this->input->post('captcha');
            $sessCaptcha = $this->session->userdata('captchaCode');
            if ($inputCaptcha === $sessCaptcha) {
                echo 'Captcha code matched.';
            } else {
                echo 'Captcha code does not match, please try again.';
            }
        }

        // Captcha configuration
        $vals = array(
            'word' => 'Random word',
            'img_path' => './captcha/',
            'img_url' => 'http://example.com/captcha/',
            'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 7200,
            'word_length' => 8,
            'font_size' => 16,
            'img_id' => 'Imageid',
            'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );

        $captcha = create_captcha($vals);

        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);

        // Pass captcha image to view
        $data['captchaImg'] = $captcha['image'];

        // Load the view
        $this->load->view('Captcha/index', $data);
    }

    public function refresh() {
        // Captcha configuration
        $vals = array(
            'word' => 'Random word',
            'img_path' => './captcha/',
            'img_url' => 'http://example.com/captcha/',
            'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 7200,
            'word_length' => 8,
            'font_size' => 16,
            'img_id' => 'Imageid',
            'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );

        $captcha = create_captcha($vals);

        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);

        // Display captcha image
        echo $captcha['image'];
    }

}
