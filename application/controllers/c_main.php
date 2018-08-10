<?php

class c_main extends CI_Controller {

 public function __construct(){
  parent::__construct();
  $this->load->helper('url');
 }

 public function index() {
  $this->load->view('loginpage');
 }

public function register() {
  $this->load->view('registerpage');
 }

public function home() {
  $this->load->view('home');
 }

public function v1() {
  $this->load->view('form1');
 }

public function v2() {
  $this->load->view('form2');
 } 

public function waktu() {
  $this->load->view('waktu');
 } 

public function area() {
  $this->load->view('area');
 } 

public function edit() {
  $this->load->view('edit');
 } 

 public function search() {
  $this->load->view('search');
 } 

  public function datauser() {
  $this->load->view('datauser');
 } 

 public function searchuser() {
  $this->load->view('searchuser');
 } 

public function contoh() {
  $this->load->view('contoh/contoh1');
  $this->load->view('contoh/ui');
  $this->load->view('contoh/table');
  $this->load->view('contoh/forms');
  $this->load->view('contoh/login');
  $this->load->view('contoh/blank');
  $this->load->view('contoh/login');
 }
}