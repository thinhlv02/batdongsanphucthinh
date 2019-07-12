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
        $emps= $this->employees_model->get_list(array('where' => array('type' => 1)));
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $input = array();
        $input['order'] = array('highlight', 'desc');
        $ads = $this->ads_model->get_list($input);

        $ads_end = [];
        $index = 0;
        foreach ($ads as $key => $val) {
            $index++;
            $ads_end[$index] = new stdClass();
            $ads_end[$index]->id = $val->id;
            $ads_end[$index]->code = $val->code;
            $ads_end[$index]->img = $val->img;
            $ads_end[$index]->title = $val->title;
            $ads_end[$index]->price = $val->price;
            $ads_end[$index]->acreage = $val->acreage;
            $ads_end[$index]->area = $val->area;
            $ads_end[$index]->service_money = $val->service_money;
            $ads_end[$index]->make_money_by = $val->make_money_by;
            $ads_end[$index]->pay_time = $val->pay_time;
            $ads_end[$index]->created_at = $val->created_at;

            if ($val->make_money_by > 0) {
                $ads_end[$index]->name_emp = isset($emps[$val->make_money_by]) ? $emps->name: 'dcm';
            } else {
                $ads_end[$index]->name_emp = '';
            }

//            $devices_end[$key]->id = $val->id;
        }


        $this->data['ads'] = $ads_end;
        $this->data['_uid'] = $this->_uid;
        $this->data['tab'] = 1;
        $this->data['temp'] = 'admin/service_money/index';
        $this->data['view'] = 'admin/service_money/list';
        $this->load->view('admin/layout', $this->data);
    }

    function edit()
    {
//        die('aaaaa');
        $emps= $this->employees_model->get_list(array('where' => array('type' => 1)));
        $this->data['emps'] = $emps;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $id = $this->uri->segment(4);
        $ads = $this->ads_model->get_info($id);
        $pay_time = $ads->pay_time;
        if ($pay_time == '0000-00-00') {
            $pay_time = date('d-m-Y');
        }
         else {
             $pay_time = date('d-m-Y', strtotime($ads->pay_time));
         }
//        var_dump($ads);
        if (!$ads) {
            redirect(base_url('admin/service_money'));
        }

        $date =  $this->input->post('date');
        $date = date('Y-m-d', strtotime($date));

        if ($this->input->post('btnEdit')) {
            $data = array(
                'service_money' => $this->input->post('service_money'),
                'make_money_by' => $this->input->post('make_money_by'),
                'pay_time' => $date,
            );

//            var_dump($data);
//            die();

            if ($this->ads_model->update($id, $data)) {
                $this->session->set_flashdata('message', 'Cập nhật  thành công');
                redirect(base_url('admin/service_money'));
            } else {
                $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
            }
        }
        $this->data['tab'] = 3;
        $this->data['pay_time'] = $pay_time;
        $this->data['ads'] = $ads;
        $this->data['temp'] = 'admin/service_money/index';
        $this->data['view'] = 'admin/service_money/edit';
        $this->load->view('admin/layout', $this->data);
    }

}