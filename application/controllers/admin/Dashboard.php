<?php

Class Dashboard extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('gmail_model');
    }

    function index()
    {
        $lstData= $this->gmail_model->get_list();
        $this->data['lstData'] = $lstData;

//        var_dump($lstData);
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/dashboard';
        $this->load->view('admin/layout', $this->data);
    }

    function lst_player()
    {


    }
}