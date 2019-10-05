<?php

Class MY_Controller extends CI_Controller
{
    public $data = array();

    var $_uid = '';
    var $_uname = '';
    var $_device_type = '';
    var $_province = '';

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $new_url = $this->uri->segment(1);

        $this->_uid = $this->_session_uid();
        $this->_uname = $this->_session_uname();
        $this->_device_type = $this->_func_device_type();
        $this->_province = $this->_func_province();

//        var_dump($new_url);
        switch ($new_url) {
            case 'admin' :
            {
//                pre('abc');
                $this->_check_login();
                $this->data['admin'] = $this->session->userdata('admin');
                break;
            }

            default:
            {
                $this->load->model('contact_model');
                $this->load->model('product_model');
                $this->load->model('agency_model');
                $this->load->model('content_model');
                $contact = $this->contact_model->get_info(1);
                $this->data['contact'] = $contact;
                $products = $this->product_model->get_list(array('order' => array('id', 'asc')));
                $this->data['products'] = $products;
                $this->data['content'] = $this->content_model->get_info(1);
                $this->data['agencies'] = $this->agency_model->get_list(array('order' => array('id', 'asc')));
//                pre($this->data['content']);
                //fix sgc

                $language = $this->session->userdata('language');
                if (!$language) {
                    $this->session->set_userdata('language', 'vn');
                    $language = 'vn';
                }
                $this->data['language'] = $language;
                $this->lang->load($language, 'language');
                //fix sgc
            }
        }
    }

    private function _check_login()
    {
        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);

        $login = $this->session->userdata('login');
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if (!$login && $controller != 'login') {
            redirect(base_url('admin/login'));
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if ($login && $controller == 'login') {
            redirect(base_url('admin/ads'));
        }
    }

    protected function _session_uid()
    {
        if ($this->session->userdata('admin')) {
            $_data = trim($this->session->userdata('admin')->id);
            return $_data;
        }
    }

    protected function _session_uname()
    {
        if ($this->session->userdata('admin')) {
            $_uid = trim($this->session->userdata('admin')->username);
            return $_uid;
        }
    }

    protected function _func_device_type()
    {
        return $this->config->config["device_type"];
    }

    protected function _func_province()
    {
        $this->load->model('Province_model');
        $lstData = $this->Province_model->get_list(array('order' => array('_name', 'asc')));
        return $lstData;

    }
}