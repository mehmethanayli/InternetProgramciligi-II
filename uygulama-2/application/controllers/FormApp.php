<?php

class FormApp extends CI_Controller
{

    /* Sınıfın yapıcı metodu. Sınıf çağırıldığında otomatik çalışır. */
    public function __construct()
    {
        parent::__construct();
    }

    /* Kayıt formunun ekrana basılması işlemidir. */
    public function index()
    {
        $this->load->view("form");
    }
    public function insert()
    {
        echo "Form Kayıt İşlemi";
    }
}
