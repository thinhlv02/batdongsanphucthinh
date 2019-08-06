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
//        var_dump($this->_device_type);
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $input = array();
        $input['order'] = array('id', 'desc');
        $money_lost = $this->money_lost_model->get_list($input);

        $money_lost_end = [];
        $index = 0;
        foreach ($money_lost as $key => $val) {
            $index++;
            $money_lost_end[$index] = new stdClass();
            $money_lost_end[$index]->id = $val->id;
            $money_lost_end[$index]->name = $val->name;
            $money_lost_end[$index]->price = $val->price;
            $money_lost_end[$index]->description = $val->description;
            $money_lost_end[$index]->created_by = $val->created_by;
            $money_lost_end[$index]->created_at = $val->created_at;
//            $money_lost_end[$key]->id = $val->id;
        }
//        echo '<pre>',print_r($money_lost_end,1),'</pre>';

        $this->data['money_lost'] = $money_lost_end;
        $this->data['device_type'] = $this->_device_type;
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

                $data = array(
                    'name' => $this->input->post('txtName'),
                    'description' => $this->input->post('txtDes'),
                    'price' => $this->input->post('txtPrice'),
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
            $data = array(
                'name' => $this->input->post('txtName'),
                'price' => $this->input->post('txtPrice'),
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