<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Welcome extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */

  public function index()
  {
    $client = new Client([
      'base_uri' => 'https://reqres.in',
      // default timeout 5 detik
      'timeout'  => 5,
    ]);

    $response = $client->request('GET', base_url('api/user'));
    $body = $response->getBody();
    $users = json_decode($body);

    $this->load->view('home', compact("users"));
  }
}
