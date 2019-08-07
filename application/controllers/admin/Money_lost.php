<?php

Class Money_lost extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('money_lost_model');
    }

    function index()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        if ($this->input->post('btnAddSearch')) {
            $from = date('Y-m-d', strtotime($this->input->post('txtFrom')));
            $to = date('Y-m-d', strtotime($this->input->post('txtTo')));
            $input = [];
            $input['where'] = array(
                'created_at >=' => $from,
                'created_at <=' => $to
            );

            $input['order'] = array('id', 'desc');

            $money_lost_end = $this->money_lost_model->get_list($input);

            $this->data['money_lost'] = $money_lost_end;
        }

        $this->data['tab'] = 1;
        $this->data['temp'] = 'admin/money_lost/index';
        $this->data['view'] = 'admin/money_lost/list';
        $this->load->view('admin/layout', $this->data);
    }

    function add()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        if ($this->input->post('btnAdd')) {
            $created_at = $this->input->post('created_at');
            $created_at = date('Y-m-d', strtotime($created_at));

            $data = array(
                'name' => $this->input->post('txtName'),
                'description' => $this->input->post('txtDes'),
                'price' => $this->input->post('txtPrice'),
                'created_at' => $created_at,
                'created_by' => $this->_uid
            );
            if ($this->money_lost_model->create($data)) {
                $this->session->set_flashdata('message', 'Thêmthành công');
                redirect(base_url('admin/money_lost'));
            } else {
                $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
            }

        }
        $this->data['tab'] = 2;
        $this->data['device_type'] = $this->_device_type;
        $this->data['temp'] = 'admin/money_lost/index';
        $this->data['view'] = 'admin/money_lost/add';
        $this->load->view('admin/layout', $this->data);
    }

    function edit()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $id = $this->uri->segment(4);
        $money_lost = $this->money_lost_model->get_info($id);
        if (!$money_lost) {
            redirect(base_url('admin/money_lost'));
        }

        if ($this->input->post('btnEdit')) {
            $created_at = $this->input->post('created_at');
            $created_at = date('Y-m-d', strtotime($created_at));
            $data = array(
                'name' => $this->input->post('txtName'),
                'price' => $this->input->post('txtPrice'),
                'created_at' => $created_at,
                'description' => $this->input->post('txtDes'),
            );

            if ($this->money_lost_model->update($id, $data)) {
                $this->session->set_flashdata('message', 'Cập nhật thành công');
                redirect(base_url('admin/money_lost'));
            } else {
                $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
            }
        }
        $this->data['tab'] = 3;
        $this->data['money_lost'] = $money_lost;
//        var_dump($money_lost);
        $this->data['device_type'] = $this->_device_type;
        $this->data['temp'] = 'admin/money_lost/index';
        $this->data['view'] = 'admin/money_lost/edit';
        $this->load->view('admin/layout', $this->data);
    }

    function del()
    {
        $id = $this->uri->segment(4);
        $money_lost = $this->money_lost_model->get_info($id);
        if ($money_lost) {
            $this->money_lost_model->delete($id);
        }
        redirect(base_url('admin/money_lost'));
    }

}