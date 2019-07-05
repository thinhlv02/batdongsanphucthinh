<?php
Class Devices extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('devices_model');
    }

    function index()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $input = array();
        $input['order'] = array('highlight','desc');
        $devices = $this->devices_model->get_list($input);
        $this->data['devices'] = $devices;
        $this->data['tab'] = 1;
        $this->data['temp'] = 'admin/devices/index';
        $this->data['view'] = 'admin/devices/list';
        $this->load->view('admin/layout', $this->data);
    }

    function add(){
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        if($this->input->post('btnAdd')){
            $config['upload_path'] = './public/images/devices';
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG';
            $this->load->library("upload", $config);
            if ($this->upload->do_upload('img_news')) {
                $file_data = $this->upload->data();
                $data = array(
                    'name' => $this->input->post('txtName'),
                    'content' => $this->input->post('txtContent'),
                    'intro' => $this->input->post('txtIntro'),
                    'document_title' => $this->input->post('txtDocumentTitle'),
//                    'meta_description' => $this->input->post('txtMetaDescription'),
//                    'meta_keywords' => $this->input->post('txtMetaKeywords'),
//                    'canonical_url' => $this->input->post('txtCanonicalUrl'),
//                    'robots_meta' => implode(', ',$this->input->post('robots_meta')),
                    'img' => $file_data['file_name'],
                );
                if($this->devices_model->create($data)){
                    $this->session->set_flashdata('message', 'Thêm tin tức thành công');
                    redirect(base_url('admin/devices'));
                }
                else{
                    $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
                }
            }
            else{
                $this->session->set_flashdata('message', $this->upload->display_errors('', ''));
            }
        }
        $this->data['tab'] = 2;
        $this->data['temp'] = 'admin/devices/index';
        $this->data['view'] = 'admin/devices/add';
        $this->load->view('admin/layout', $this->data);
    }

    function edit(){
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $id = $this->uri->segment(4);
        $devices = $this->devices_model->get_info($id);
        if(!$devices){
            redirect(base_url('admin/devices'));
        }

        if($this->input->post('btnEdit')){
            $data = array(
                'name' => $this->input->post('txtName'),
                'content' => $this->input->post('txtContent'),
                'intro' => nl2br($this->input->post('txtIntro')),
                'document_title' => $this->input->post('txtDocumentTitle'),
//                'meta_description' => $this->input->post('txtMetaDescription'),
//                'meta_keywords' => $this->input->post('txtMetaKeywords'),
//                'canonical_url' => $this->input->post('txtCanonicalUrl'),
//                'robots_meta' => implode(', ',$this->input->post('robots_meta')),
            );

            $config['upload_path'] = './public/images/devices';
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG';
            $this->load->library("upload", $config);
            if ($this->upload->do_upload('img_news')) {
                $file_data = $this->upload->data();
                $data['img'] = $file_data['file_name'];
                unlink('./public/images/devices/'.$devices->img);
            }
            else{
                $this->session->set_flashdata('message', $this->upload->display_errors('', ''));
            }
            if($this->devices_model->update($id, $data)){
                $this->session->set_flashdata('message', 'Cập nhật tin tức thành công');
                redirect(base_url('admin/devices'));
            }
            else{
                $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
            }
        }
        $this->data['tab'] = 3;
        $this->data['devices'] = $devices;
        $this->data['temp'] = 'admin/devices/index';
        $this->data['view'] = 'admin/devices/edit';
        $this->load->view('admin/layout', $this->data);
    }

    function del(){
        $id = $this->uri->segment(4);
        $devices = $this->devices_model->get_info($id);
        if($devices){
            $this->devices_model->delete($id);
            unlink('./public/images/devices/'.$devices->img);
        }
        redirect(base_url('admin/devices'));
    }

    function highlight(){
        $id = $_POST['id'];
        $devices = $this->devices_model->get_info($id);
        $res = array("status" => 0);
        if($devices){
            $res['status'] = 1;
            $dataSubmit = array();
            if($devices->highlight){
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['highlight'] = 0;
            }
            else{
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['highlight'] = 1;
            }
            $this->devices_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }
}