<?php 
require_once APPPATH . 'third_party/Google/autoload.php';

class Google {
	protected $CI;

	public function __construct(){
		$this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->config->load('google_config');
        $this->client = new Google_Client();
		$this->client->setClientId($this->CI->config->item('348984212294-2r54goe1t29onr0bbbrgo6tgqcolrcfm.apps.googleusercontent.com'));
		$this->client->setClientSecret($this->CI->config->item('rVVDifTI5IRTCRqVy9K9OnFz'));
		$this->client->setRedirectUri($this->CI->config->item('http://localhost:10/PRG5/PROJECT/GameGevity/authx'));
		$this->client->setScopes(array(
			"https://www.googleapis.com/auth/plus.login",
			"https://www.googleapis.com/auth/plus.me",
			"https://www.googleapis.com/auth/userinfo.email",
			"https://www.googleapis.com/auth/userinfo.profile"
			)
		);
  

	}

	public function get_login_url(){
		return  $this->client->createAuthUrl();

	}

	public function validate(){		
		if (isset($_GET['code'])) {
		  $this->client->authenticate($_GET['code']);
		  $_SESSION['access_token'] = $this->client->getAccessToken();

		}
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
		  $this->client->setAccessToken($_SESSION['access_token']);
		  $plus = new Google_Service_Plus($this->client);
			$person = $plus->people->get('me');
			$info['id']=$person['id'];
			$info['email']=$person['emails'][0]['value'];
			$info['name']=$person['displayName'];
			$info['link']=$person['url'];
			$info['profile_pic']=substr($person['image']['url'],0,strpos($person['image']['url'],"?sz=50")) . '?sz=800';

		   return  $info;
		}


	}

}