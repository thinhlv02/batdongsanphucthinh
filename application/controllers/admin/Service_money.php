<?php

Class Service_money extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ads_model');
        $this->load->model('employees_model');
    }

    function index()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $input = array();
        $input['order'] = array('highlight', 'desc');
        $ads = $this->ads_model->get_list($input);
        $this->data['ads'] = $ads;
        $this->data['_uid'] = $this->_uid;
        $this->data['tab'] = 1;
        $this->data['temp'] = 'admin/ads/index';
        $this->data['view'] = 'admin/ads/list';
        $this->load->view('admin/layout', $this->data);
    }

    function edit()
    {
        $emps= $this->employees_model->get_list(array('where' => array('type' => 1)));
        $this->data['emps'] = $emps;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $id = $this->uri->segment(4);
        $ads = $this->ads_model->get_info($id);
//        var_dump($ads);
        if (!$ads) {
            redirect(base_url('admin/ads'));
        }

        if ($this->input->post('btnEdit')) {
            $data = array(
                'service_money' => $this->input->post('txtName'),
                'make_money_by' => $this->input->post('txtContent'),
            );

            if ($this->ads_model->update($id, $data)) {
                $this->session->set_flashdata('message', 'Cập nhật  thành công');
                redirect(base_url('admin/ads'));
            } else {
                $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
            }
        }
        $this->data['tab'] = 3;
        $this->data['ads'] = $ads;
        $this->data['temp'] = 'admin/ads/index';
        $this->data['view'] = 'admin/ads/edit';
        $this->load->view('admin/layout', $this->data);
    }

}