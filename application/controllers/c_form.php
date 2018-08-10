<?php

class c_form extends CI_Controller {

 public function form_layanan(){
  $this->load->view('form_layanan');
 }

 public function form_tambah_layanan(){
  $this->load->view('form_tambah_layanan');
 }


}

?>