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
        //echo "Form Kayıt İşlemi" ;
        $data = array(
            "name"      => $this->input->post("name"),
            "email"     => $this->input->post("email"),
            "service"   => $this->input->post("service"),
            "budget"    => $this->input->post("budget"),
            "message"   => $this->input->post("message")
        );

        $this->load->model("FormApp_Model");
        $insert = $this->FormApp_Model->insert($data);
        if ($insert) {
            echo "Kayıt işlemi başarılı.";
        }
    }
}
