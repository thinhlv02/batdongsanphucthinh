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
        $first = date('d-m-Y', strtotime(getFirstLastMonth(1)));
        $last = date('d-m-Y', strtotime(getFirstLastMonth(2)));


        $emps = $this->employees_model->get_list(array('where' => array('type' => 1)));

        $i = 0;
        $emps_arr = [];
        foreach ($emps as $key => $val)
        {
            $i++;
            $emps_arr[$val->id] = new stdClass();
            $emps_arr[$val->id]->id = $val->id;
            $emps_arr[$val->id]->name = $val->name;
        }
//        pre($emps_arr);
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        if ($this->input->post('btnAddSearch'))
        {
            $from = date('Y-m-d', strtotime($this->input->post('txtFrom')));
            $to = date('Y-m-d', strtotime($this->input->post('txtTo')));
            $make_money_by = $this->input->post('make_money_by');
            $check_money = $this->input->post('check_money');
            $input = [];
            $input['where'] = array(
                'created_at >=' => $from,
                'created_at <=' => $to
//                'pay_time >=' => $from,
//                'pay_time <=' => $to
            );

            $input['order'] = array('id', 'desc');

            if ($make_money_by != 99)
            {
                $input['where']['make_money_by'] = $make_money_by;
            }

            if ($check_money != -1)
            {
                if ($check_money == 1) //service_money
                {
                    $input['where'] += array('service_money > ' => 0);
                }

                if ($check_money == 0) //service_money
                {
                    $input['where'] += array('service_money = ' => 0);
                }

            }

            $ads = $this->ads_model->get_list($input);
//            pre($lstvip);
//            die();
//        }

//        $input = array();
//        $input['order'] = array('highlight', 'desc');
//        $input['order'] = array('id', 'desc');
//        $ads = $this->ads_model->get_list($input);

            $ads_end = [];
            $index = 0;
            foreach ($ads as $key => $val)
            {
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

                if ($val->make_money_by > 0)
                {
                    $ads_end[$index]->name_emp = isset($emps_arr[$val->make_money_by]) ? $emps_arr[$val->make_money_by]->name : 'dcm111111111';
                }
                else
                {
                    $ads_end[$index]->name_emp = '';
                }

            }

            $this->data['ads'] = $ads_end;
        }

        $this->data['first'] = $first;
        $this->data['last'] = $last;

        $this->data['_uid'] = $this->_uid;
        $this->data['emps'] = $emps;
        $this->data['tab'] = 1;
        $this->data['temp'] = 'admin/service_money/index';
        $this->data['view'] = 'admin/service_money/list';
        $this->load->view('admin/layout', $this->data);
    }

    function edit()
    {
        $emps = $this->employees_model->get_list(array('where' => array('type' => 1)));
        $this->data['emps'] = $emps;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $id = $this->uri->segment(4);
        $ads = $this->ads_model->get_info($id);
        $pay_time = $ads->pay_time;
        if ($pay_time == '0000-00-00')
        {
            $pay_time = date('d-m-Y');
        }
        else
        {
            $pay_time = date('d-m-Y', strtotime($ads->pay_time));
        }
//        var_dump($ads);
        if (!$ads)
        {
            redirect(base_url('admin/service_money'));
        }

        $date = $this->input->post('date');
        $date = date('Y-m-d', strtotime($date));

        $price = str_replace(',', '', $this->input->post('service_money'));
        $price = (is_numeric($price) && $price > 0) ? $price : 0;

        if ($this->input->post('btnEdit'))
        {
            $data = array(
                'service_money' => $price,
                'make_money_by' => $this->input->post('make_money_by'),
                'pay_time' => $date,
            );

            if ($this->ads_model->update($id, $data))
            {
                $this->session->set_flashdata('message', 'Cập nhật  thành công');
                redirect(base_url('admin/service_money'));
            }
            else
            {
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