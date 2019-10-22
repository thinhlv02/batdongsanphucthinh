<?php

Class MY_Controller extends CI_Controller
{
    var $_template_f = '';
    public $data = array();

    var $_uid = '';
    var $_uname = '';
    var $_device_type = '';
    var $_province = '';
    protected $_langcode = '';
    // common lang
    protected $_common_lang = NULL;
    protected $_login_lang = NULL;
    protected $_function = '';
    protected $_content = '';
    protected $_contact = '';
    protected $_products = '';
    protected $_prices = '';
    protected $_agencies = '';
    protected $_user_login = '';

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $new_url = $this->uri->segment(1);

        $this->_uid = $this->_session_uid();
        $this->_uname = $this->_session_uname();
        $this->_device_type = $this->_func_device_type();
        $this->_province = $this->_func_province();
        $this->_template_f = TEMPLATE_FOLDER;

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
                $this->load->model('price_model');
                $this->load->model('agency_model');
                $this->load->model('content_model');
                $contact = $this->contact_model->get_info(1);
                $this->_contact = $contact;
                $products = $this->product_model->get_list(array('order' => array('id', 'asc')));
                $this->_products = $products;
                $prices = $this->price_model->get_list(array('order' => array('id', 'asc')));
                $this->_prices = $prices;
                $this->_content = $this->content_model->get_info(1);
                $this->_agencies = $this->agency_model->get_list(array('order' => array('id', 'asc')));
                $this->_user_login = $this->session->userdata('user_login');

                //fix sgc

                $language = $this->session->userdata('language');
                if (!$language) {
                    $this->session->set_userdata('language', 'vn');
                    $language = 'vn';
                }
//                var_dump($language);
                if ($language == 'vn') {
                    $this->_langcode = 'vietnamese';
                } else {
                    $this->_langcode = 'english';
                }
                $this->data['language'] = $language;
                $this->_language = $language;
                $this->lang->load($language, 'language');
                //fix sgc

                //load common lang
                $this->load->language('common', $this->_langcode);
                $this->load->language('login/login', $this->_langcode);

                $this->_common_lang = $this->lang->line('common_lang');
                $this->_login_lang = $this->lang->line('login_lang');

                $this->data['user'] = $this->session->userdata('user');
//                var_dump($this->data['user']);
            }
        }

        // init and assign common value to view: language, common lang
        $preHeader = array();
        $preHeader['common_lang'] = $this->_common_lang;
        $preHeader['template_f'] = $this->_template_f;
        $preHeader['login_lang'] = $this->_login_lang;
        $preHeader['language'] = $this->_langcode;
        $preHeader['content'] = $this->_content;
        $preHeader['contact'] = $this->_contact;
        $preHeader['products'] = $this->_products;
        $preHeader['prices'] = $this->_prices;
        $preHeader['agencies'] = $this->_agencies;
        $preHeader['user_login'] = $this->_user_login;
        // assign all common param to view
        $this->load->view($this->_template_f . 'preheader_view', $preHeader);
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

    protected function _loadHeader($data = NULL, $loadHeader = TRUE)
    {
        $header = array();
        $header['function'] = $this->_function;
        $header['title'] = isset($data['title']) ? $data['title'] : '';
        $header['image'] = isset($data['image']) ? $data['image'] : '';
        $header['li_1'] = isset($data['li_1']) ? $data['li_1'] : '';
        $header['li_2'] = isset($data['li_2']) ? $data['li_2'] : '';
        $header['li_3'] = isset($data['li_3']) ? $data['li_3'] : '';
        $header['li_4'] = isset($data['li_4']) ? $data['li_4'] : '';
        $header['li_5'] = isset($data['li_5']) ? $data['li_5'] : '';
        $header['li_6'] = isset($data['li_6']) ? $data['li_6'] : '';
        $header['li_7'] = isset($data['li_7']) ? $data['li_7'] : '';
        $header['li_8'] = isset($data['li_8']) ? $data['li_8'] : '';
        $header['li_9'] = isset($data['li_9']) ? $data['li_9'] : '';
        $header['li_10'] = isset($data['li_10']) ? $data['li_10'] : '';
//        $header['metaTitle'] = isset($data['metaTitle']) ? $data['metaTitle'] : '';
//        $header['metaKeyword'] = isset($data['metaKeyword']) ? $data['metaKeyword'] : '';
//        $header['metaDesc'] = isset($data['metaDesc']) ? $data['metaDesc'] : '';
//        $header['metaImage'] = isset($data['metaImage']) ? $data['metaImage'] : '';
        $header['loadHeader'] = $loadHeader;

        // load header
        $this->load->view($this->_template_f . 'header_view', $header);
    }

    protected function _loadFooter()
    {
        $footerData = array();
        $footerData['function'] = $this->_function;
        $this->load->view($this->_template_f . 'footer_view', $footerData);
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