<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class ItungPerpustakaan extends CI_Controller {
 function __construct() {
parent::__construct();
 $this->load->library('perpustakaan');
}

function index(){
    $this->perpustakaan->itung(150,300,100,200);
     echo "<br/>";
 }
}