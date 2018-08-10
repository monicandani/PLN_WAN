<?php

class c_form extends CI_Controller {

 public function form_layanan(){
  $this->load->view('form_layanan');
 }

 public function form_tambah_layanan(){
  $this->load->view('form_tambah_layanan');
 }

public function form_edit_layanan(){
  $this->load->view('form_edit_layanan');
 }

 public function form_edit_user(){
  $this->load->view('form_edit_user');
 }

 public function jenislayanan() {
  $this->load->view('jenislayanan');
 } 

 public function form_tambah_jenis_layanan(){
  $this->load->view('form_tambah_jenis_layanan');
 }

 public function form_edit_jenis_layanan(){
  $this->load->view('form_edit_jenis_layanan');
 }


 public function formuser() {
  $this->load->view('formuser');
 } 

  public function jenisgangguan() {
  $this->load->view('jenisgangguan');
 } 


}

?>