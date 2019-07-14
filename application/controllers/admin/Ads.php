<?php

Class Ads extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ads_model');
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

    function add()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        if ($this->input->post('btnAdd')) {
            $config['upload_path'] = './public/images/ads';
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG';
            $config['max_size'] = '10000';
            $this->load->library("upload", $config);

            $data = array(
                'title' => $this->input->post('txtName'),
                'code' => generateRandomString(6),
                'view' => generateRandomString(2),
                'content' => $this->input->post('txtContent'),
                'area' => $this->input->post('area'),
                'phone' => $this->input->post('phone'),
                'intro' => $this->input->post('txtIntro'),
                'price' => $this->input->post('price'),
                'acreage' => $this->input->post('acreage'),
                'created_by' => $this->_uid,
            );

            $filesCount = count($_FILES['files']['name']);
            $path_name = '';
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                }

                  $path_name .= $fileData['file_name'].'#';

            }
            $path_name = substr($path_name, 0, -1);
            $data['lightSlider'] = $path_name ;

//            echo pre_arr($path_name);
//            echo pre_arr($uploadData);
//            var_dump($uploadData);
//            die('');

            if ($this->upload->do_upload('img_news')) {
                $file_data = $this->upload->data();
                $data['img'] = $file_data['file_name'];
            } else {
                $data['img'] = 'default.png';
                $this->session->set_flashdata('message', $this->upload->display_errors('', ''));
            }

            if ($this->ads_model->create($data)) {
                $this->session->set_flashdata('message', 'Thêm rao bán thành công');
                redirect(base_url('admin/ads'));
            } else {
                $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
            }

        }
        $this->data['tab'] = 2;
        $this->data['temp'] = 'admin/ads/index';
        $this->data['view'] = 'admin/ads/add';
        $this->load->view('admin/layout', $this->data);
    }

    function add12()
    {
//        die('fuck');
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        if ($this->input->post('btnAdd')) {
            $config['upload_path'] = './public/images/ads';
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG';
            $config['max_size'] = '10000';
            $this->load->library("upload", $config);

            $data = array(
                'title' => $this->input->post('txtName'),
                'code' => generateRandomString(6),
                'view' => generateRandomString(2),
                'content' => $this->input->post('txtContent'),
                'area' => $this->input->post('area'),
                'phone' => $this->input->post('phone'),
                'intro' => $this->input->post('txtIntro'),
                'price' => $this->input->post('price'),
                'acreage' => $this->input->post('acreage'),
                'created_by' => $this->_uid,
            );

            if ($this->upload->do_upload('img_news')) {
                $file_data = $this->upload->data();
                $data['img'] = $file_data['file_name'];
            } else {
                $data['img'] = 'default.png';
                $this->session->set_flashdata('message', $this->upload->display_errors('', ''));
            }

            if ($this->ads_model->create($data)) {
                $this->session->set_flashdata('message', 'Thêm rao bán thành công');
                redirect(base_url('admin/ads'));
            } else {
                $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
            }

        }
        $this->data['tab'] = 2;
        $this->data['temp'] = 'admin/ads/index';
        $this->data['view'] = 'admin/ads/add';
        $this->load->view('admin/layout', $this->data);
    }

    function add_old()
    {
//        die('fuck');
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        if ($this->input->post('btnAdd')) {
            $config['upload_path'] = './public/images/ads';
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG';
            $config['max_size'] = '10000';
            $this->load->library("upload", $config);
//            var_dump($this->upload->do_upload('img_news'));

//            die();
            if ($this->upload->do_upload('img_news')) {
                $file_data = $this->upload->data();
                $data = array(
                    'title' => $this->input->post('txtName'),
                    'code' => generateRandomString(6),
                    'view' => generateRandomString(2),
                    'content' => $this->input->post('txtContent'),
                    'area' => $this->input->post('area'),
                    'phone' => $this->input->post('phone'),
                    'intro' => $this->input->post('txtIntro'),
                    'price' => $this->input->post('price'),
//                    'unit' => $this->input->post('unit'),
                    'acreage' => $this->input->post('acreage'),
//                    'document_title' => $this->input->post('txtDocumentTitle'),
//                    'meta_description' => $this->input->post('txtMetaDescription'),
//                    'meta_keywords' => $this->input->post('txtMetaKeywords'),
//                    'canonical_url' => $this->input->post('txtCanonicalUrl'),
//                    'robots_meta' => implode(', ',$this->input->post('robots_meta')),
                    'img' => $file_data['file_name'],
                    'created_by' => $this->_uid,

                );
//                echo '<pre>',print_r($data,1),'</pre>';
                if ($this->ads_model->create($data)) {
                    $this->session->set_flashdata('message', 'Thêm rao bán thành công');
                    redirect(base_url('admin/ads'));
                } else {
//                    die('ảnh trống');
                    $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
                }
            } else {
                $this->session->set_flashdata('message', $this->upload->display_errors('', ''));
            }
        }
        $this->data['tab'] = 2;
        $this->data['temp'] = 'admin/ads/index';
        $this->data['view'] = 'admin/ads/add';
        $this->load->view('admin/layout', $this->data);
    }

    function edit()
    {
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
                'title' => $this->input->post('txtName'),
                'content' => $this->input->post('txtContent'),
                'area' => $this->input->post('area'),
                'phone' => $this->input->post('phone'),
                'intro' => nl2br($this->input->post('txtIntro')),
//                'document_title' => $this->input->post('txtDocumentTitle'),
                'price' => $this->input->post('price'),
//                'unit' => $this->input->post('unit'),
                'acreage' => $this->input->post('acreage'),
                'link' => $this->input->post('link'),
                'view' => $this->input->post('view')
            );

            $config['upload_path'] = './public/images/ads';
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG';
            $this->load->library("upload", $config);
            if ($this->upload->do_upload('img_news')) {
                $file_data = $this->upload->data();
                $data['img'] = $file_data['file_name'];
                unlink('./public/images/ads/' . $ads->img);
            } else {
                $this->session->set_flashdata('message', $this->upload->display_errors('', ''));
            }



//
//            if(!empty($_FILES['files']['name'][0])) {
////                    $filesCount = count($_FILES['files']['name']);
//
//                var_dump($_FILES['files']['name'][0]);
////                var_dump($filesCount);
//                echo "<pre>",print_r($_FILES['files']['name'],1),"</pre>";
////                var_dump($_FILES['files']['name']);
////                echo 1;
//
//            } else {
////                $filesCount = count($_FILES['files']['name']);
////                var_dump($filesCount);
////                var_dump($_FILES['files']['name']);
//                echo "<pre>",print_r($_FILES['files']['name'],1),"</pre>";
//
//
//            }
//            die();

            //img slide
//            if(!empty($_FILES['files']['name'])) {
                if(!empty($_FILES['files']['name'][0])) {
                $filesCount = count($_FILES['files']['name']);
                $path_name = '';
                for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                    $this->upload->initialize($config);

                    // Upload file to server
                    if ($this->upload->do_upload('file')) {
                        // Uploaded file data
                        $fileData = $this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name'];
                    }

                    $path_name .= $fileData['file_name'] .'#';

                }
                $path_name = substr($path_name, 0, -1);
                $data['lightSlider'] = $path_name != '' ? $path_name : 'default.png';
            }
            //img slide


            if ($this->ads_model->update($id, $data)) {
                $this->session->set_flashdata('message', 'Cập nhật rao bán thành công');
                redirect(base_url('admin/ads/edit/' . $id));
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

    function del()
    {
        $id = $this->uri->segment(4);
        $ads = $this->ads_model->get_info($id);
        if ($ads) {
            $this->ads_model->delete($id);
            unlink('./public/images/ads/' . $ads->img);
        }
        redirect(base_url('admin/ads'));
    }

    function vip()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->vip) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['vip'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['vip'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function highlight()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->highlight) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['highlight'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['highlight'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

}