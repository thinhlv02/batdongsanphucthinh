<?php

Class Ads_type extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ads_type_model');
    }

    function index()
    {
        $questions = $this->ads_type_model->get_list(array('where' => array('parent_id' => 0, 'type' => 1), 'order' => array('id', 'asc')));
//        pre($questions);
        $this->data['tab'] = 1;
        $this->data['questions'] = $questions;
        $this->data['temp'] = 'admin/ads_type/index';
        $this->data['view'] = 'admin/ads_type/question';
        $this->load->view('admin/layout', $this->data);
    }

    function get_list_by_type()
    {
        $type = intval($_POST['type']);
        $questions = $this->ads_type_model->get_list(array('where' => array('parent_id' => 0, 'type' => $type)));
        $this->data['questions'] = $questions;
        $this->load->view('admin/ads_type/table_question', $this->data);
    }

    function add()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['tab'] = 2;
        if ($this->input->post('btnAdd')) {
            $data_submit = array(
                'name' => $this->input->post('txtName'),
                'content' => '',
                'type' => intval($this->input->post('slType')),
                'parent_id' => 0,
                'level' => 1,
            );
            if ($this->ads_type_model->create($data_submit)) {
                $this->session->set_flashdata('message', 'Thêm thành công!');
                redirect(base_url('admin/ads_type'));
            } else {
                $this->session->set_flashdata('message', 'Có lỗi xảy ra, vui lòng thử lại!');
                redirect(base_url('admin/ads_type/add'));
            }
        }
        $this->data['temp'] = 'admin/ads_type/index';
        $this->data['view'] = 'admin/ads_type/add';
        $this->load->view('admin/layout', $this->data);
    }

    function edit()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $id = $this->uri->segment(4);
        $question = $this->ads_type_model->get_info($id);
        if (!$question) {
            redirect(admin_url('ads_type'));
        }

        if ($question->level == 1) {
            $questions = $this->ads_type_model->get_list(array('where' => array('parent_id' => $question->id)));
            $this->data['questions'] = $questions;
            $this->data['view'] = 'admin/ads_type/edit_level_1';
        }

        if ($this->input->post('btnEditLevel1')) {
            $data_submit = array(
                'name' => $this->input->post('txtName'),
            );
            if ($this->ads_type_model->update($id, $data_submit)) {
                $this->session->set_flashdata('message', 'Cập nhật thành công!');
                redirect(base_url('admin/ads_type/edit/' . $id));
            } else {
                $this->session->set_flashdata('message', 'Có lỗi xảy ra, vui lòng thử lại!');
                redirect(base_url('admin/ads_type/edit/' . $id));
            }
        }

        if ($this->input->post('btnEditLevel2')) {
            $data_submit = array(
                'name' => $this->input->post('txtName'),
                'content' => $this->input->post('txtContent')
            );
            $parent_id = $question->parent_id;
            if ($this->ads_type_model->update($id, $data_submit)) {
                $this->session->set_flashdata('message', 'Cập nhật thành công!');
                redirect(base_url('admin/ads_type/edit/' . $parent_id));
            } else {
                $this->session->set_flashdata('message', 'Có lỗi xảy ra, vui lòng thử lại!');
                redirect(base_url('admin/ads_type/edit/' . $id));
            }
        }

        if ($this->input->post('btnAdd')) {
            $data_submit = array(
                'name' => $this->input->post('txtNameAdd'),
                'content' => $this->input->post('txtContentAdd'),
                'parent_id' => $question->id,
                'level' => 2,
                'type' => $question->type
            );
            if ($this->ads_type_model->create($data_submit)) {
                $this->session->set_flashdata('message', 'Thêm thành công!');
                redirect(base_url('admin/ads_type/edit/' . $id));
            } else {
                $this->session->set_flashdata('message', 'Có lỗi xảy ra, vui lòng thử lại!');
                redirect(base_url('admin/ads_type/edit/' . $id));
            }
        }

        $this->data['tab'] = 3;
        $this->data['question'] = $question;
        $this->data['temp'] = 'admin/ads_type/index';
        $this->load->view('admin/layout', $this->data);
    }

    function del()
    {
//        pre(1);
        $id = $this->uri->segment(4);
        $question = $this->ads_type_model->get_info($id);
        if (!$question) {
            redirect(admin_url('ads_type'));
        }
        $this->ads_type_model->delete($id);
        $this->session->set_flashdata('message', 'Xoá thành công!');
        if ($question->level == 1) {
            redirect(admin_url('ads_type'));
        } else {
            redirect(admin_url('ads_type/edit/' . $question->parent_id));
        }

    }
}