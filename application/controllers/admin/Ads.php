<?php

Class Ads extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ads_model');
        $this->load->model('Province_model');
        $this->load->model('District_model');
        $this->load->model('Ward_model');
        $this->load->model('Street_model');
        $this->load->model('admin_model');
    }

    function index()
    {
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $input = array();
        $input['order'] = array('id', 'desc');
        $ads = $this->ads_model->get_list($input);
        $count = count($ads);
        $count = $count > 0 ? $count: 0;

        $emps = $this->admin_model->get_list();

        $i = 0;
        $admin_arr = [];
        foreach ($emps as $key => $val) {
            $i++;
            $admin_arr[$val->id] = new stdClass();
            $admin_arr[$val->id]->id = $val->id;
            $admin_arr[$val->id]->name = $val->fullname;
        }

        $ads_end = [];
        $index = 0;
        foreach ($ads as $key => $val) {
            $index++;
            $ads_end[$index] = new stdClass();
            $ads_end[$index]->id = $val->id;
            $ads_end[$index]->code = $val->code;
            $ads_end[$index]->img = $val->img;
            $ads_end[$index]->title = $val->title;
            $ads_end[$index]->phone = $val->phone;
            $ads_end[$index]->price = $val->price;
            $ads_end[$index]->acreage = $val->acreage;
            $ads_end[$index]->area = $val->area;
            $ads_end[$index]->service_money = $val->service_money;
            $ads_end[$index]->make_money_by = $val->make_money_by;
            $ads_end[$index]->pay_time = $val->pay_time;
            $ads_end[$index]->created_at = $val->created_at;
            $ads_end[$index]->ads_left= $val->ads_left;
            $ads_end[$index]->ads_right= $val->ads_right;
            $ads_end[$index]->ads_center= $val->ads_center;
            $ads_end[$index]->layer_left= $val->layer_left;
            $ads_end[$index]->layer_vip= $val->layer_vip;
            $ads_end[$index]->layer_right= $val->layer_right;
            $ads_end[$index]->icon_new= $val->icon_new;
            $ads_end[$index]->icon_vip= $val->icon_vip;
            $ads_end[$index]->icon_hot= $val->icon_hot;
            $ads_end[$index]->view= $val->view;
            $ads_end[$index]->created_name = isset($admin_arr[$val->created_by]) ? $admin_arr[$val->created_by]->name : 'dcm111111111';
        }


        $this->data['count'] = $count;
        $this->data['ads'] = $ads_end;
        $this->data['_uid'] = $this->_uid;
        $this->data['tab'] = 1;
        $this->data['temp'] = 'admin/ads/index';
        $this->data['view'] = 'admin/ads/list';
        $this->load->view('admin/layout', $this->data);
    }

    function add()
    {
        $lstProvince = $this->_province;
//        pre_arr($lstProvince);
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        if ($this->input->post('btnAdd')) {
            $config['upload_path'] = './public/images/ads';
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG|jfif|JFIF';
            $config['max_size'] = '10000';
            $this->load->library("upload", $config);

            $ward_str = $this->input->post('ward');
            $ward = '';
            if ($ward_str) {
                $ward = explode('|', $ward_str);
                $ward =$ward[0];
            }

//            $district = '';
//
//            if($this->input->post('district') != '') {
//                $district = $this->input->post('district');
//            }
//
//            if($this->input->post('ward') != '') {
//                $ward = $this->input->post('ward');
//            }
//
//            if($this->input->post('street') != '') {
//                $street = $this->input->post('street');
//            }

            $created_at =  $this->input->post('created_at');
            $created_at = date('Y-m-d', strtotime($created_at));

            $txtProvince = $this->input->post('province');
            $txtDistrict = $this->input->post('district');
            $txtStreet = $this->input->post('street');

            $province_name = '';
            $district_name = '';
            $ward_name = '';
            $street_name = '';
            if ($txtProvince != '') {
                $txProvince_info = $this->Province_model->get_info($txtProvince);
                $province_name = $txProvince_info->_name;
            }

            if ($txtDistrict != '') {
                $txtDistrict_info = $this->District_model->get_info($txtDistrict);
                $district_name = $txtDistrict_info->_name;
            }

            if ($ward != '') {
                $ward_info = $this->Ward_model->get_info($ward);
                $ward_name = $ward_info->_name;
            }

            if ($txtStreet != '') {
                $street_info = $this->Street_model->get_info($txtStreet);
                $street_name = $street_info->_name;
            }

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
                'useacreage' => $this->input->post('useacreage'),
                'width' => $this->input->post('width'),
                'landwidth' => $this->input->post('landwidth'),
                'province_id' => $txtProvince,
                'district_id' => $txtDistrict,
                'ward_id' => $ward,
                'street_id' => $this->input->post('street'),
                'province_name' => $province_name,
                'district_name' => $district_name,
                'ward_name' => $ward_name,
                'street_name' => $street_name,
                'created_at' => $created_at,
                'created_by' => $this->_uid,
            );

//            pre_arr($data);
//            die();

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
                    $path_name .= $fileData['file_name'] . '#';
                }

            }
            $path_name = substr($path_name, 0, -1);
            if ($path_name != '') {
             $data['lightSlider'] = $path_name;
            }

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
        $this->data['lstProvince'] = $lstProvince;
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
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG|jfif|JFIF';
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
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG|jfif|JFIF';
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
        $lstProvince = $this->_province;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $id = $this->uri->segment(4);
        $ads = $this->ads_model->get_info($id);
//        pre($ads);
        if (!$ads) {
            redirect(base_url('admin/ads'));
        }

        //get list district if isset province on table ads
        $district_arr = '';
        if ($ads->province_id != '' && $ads->district_id != '') {
            $district_arr = $this->District_model->get_list(array('where' => array('_province_id' => $ads->province_id)));
        }
        $this->data['district_arr'] = $district_arr;
//        pre($district_arr);

        //get list ward if isset district on table ads
        $ward_arr_end = '';
        if ($ads->province_id != '' && $ads->district_id != '' && $ads->ward_id != '') {
            $ward_arr = $this->Ward_model->get_list(array('where' => array('_district_id' => $ads->district_id)));

            $ward_arr_end = [];
            foreach ($ward_arr as $k => $value) {
                $ward_arr_end[$value->id]['id'] = $value->id.'|'.$value->_district_id;
                $ward_arr_end[$value->id]['_name'] = $value->_name;
            }

        }
        $this->data['ward_arr'] = $ward_arr_end;
//        pre($ward_arr_end);

        //get list street
        $street_arr = '';
        if ($ads->province_id != '' && $ads->district_id != '' && $ads->ward_id != '' && $ads->street_id != '') {

            $street_arr = $this->Street_model->get_list(array('where' => array('_district_id' => $ads->district_id)));
        }
        $this->data['street_arr'] = $street_arr;
//        pre($street_arr);

        if ($this->input->post('btnEdit')) {

            $ward_str = $this->input->post('ward');
            $ward = '';
            if ($ward_str) {
                $ward = explode('|', $ward_str);
                $ward =$ward[0];
            }

            $txtProvince = $this->input->post('province');
            $txtDistrict = $this->input->post('district');
            $txtStreet = $this->input->post('street');

            $province_name = '';
            $district_name = '';
            $ward_name = '';
            $street_name = '';
            if ($txtProvince != '') {
                $txProvince_info = $this->Province_model->get_info($txtProvince);
                $province_name = $txProvince_info->_name;
            }

            if ($txtDistrict != '') {
                $txtDistrict_info = $this->District_model->get_info($txtDistrict);
                $district_name = $txtDistrict_info->_name;
            }

            if ($ward != '') {
                $ward_info = $this->Ward_model->get_info($ward);
                $ward_name = $ward_info->_name;
            }

            if ($txtStreet != '') {
                $street_info = $this->Street_model->get_info($txtStreet);
                $street_name = $street_info->_name;
            }

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
                'useacreage' => $this->input->post('useacreage'),
                'width' => $this->input->post('width'),
                'landwidth' => $this->input->post('landwidth'),
                'province_id' => $txtProvince,
                'district_id' => $txtDistrict,
                'ward_id' => $ward,
                'street_id' => $txtStreet,
                'province_name' => $province_name,
                'district_name' => $district_name,
                'ward_name' => $ward_name,
                'street_name' => $street_name,
                'link' => $this->input->post('link'),
                'link_list' => $this->input->post('txtLinkSite'),
                'view' => $this->input->post('view')
            );

            $config['upload_path'] = './public/images/ads';
            $config['allowed_types'] = 'jpg|png|jpeg|JPEG|jfif|JFIF';
            $this->load->library("upload", $config);
            if ($this->upload->do_upload('img_news')) {
                $file_data = $this->upload->data();
                $data['img'] = $file_data['file_name'];
                if (isset($ads->img)) {

                    if ($ads->img != 'default.png') {
                        unlink('./public/images/ads/' . $ads->img);
                    }

                }
            } else {
                $this->session->set_flashdata('message', $this->upload->display_errors('', ''));
            }

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
            if (!empty($_FILES['files']['name'][0])) {
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

                    $path_name .= $fileData['file_name'] . '#';

                }
                $path_name = substr($path_name, 0, -1);
//                $data['lightSlider'] = $path_name != '' ? $path_name : 'default.png';
                $data['lightSlider'] = $path_name;

                //delete image slide OLD

                if ($path_name != '') {
                    $tags = explode('#', $ads->lightSlider);
                    foreach ($tags as $k => $val) {
                        unlink('./public/images/ads/' . $val);
                    }

                }

                //delete image slide OLD
            }


            //img slide


            if ($this->ads_model->update($id, $data)) {
                $this->session->set_flashdata('message', 'Cập nhật rao bán thành công');
//                redirect(base_url('admin/ads/edit/' . $id));
                redirect(base_url('admin/ads/edit'));
            } else {
                $this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
            }
        }
        $this->data['tab'] = 3;
        $this->data['ads'] = $ads;
        $this->data['province_id'] = $ads->province_id;
        $this->data['district_id'] = $ads->district_id;
        $this->data['ward_id'] = $ads->ward_id;
        $this->data['street_id'] = $ads->street_id;
        $this->data['lstProvince'] = $lstProvince;
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
            if ($ads->img != 'default.png') {
                unlink('./public/images/ads/' . $ads->img);
            }

            //delete image slide
            if ($ads->lightSlider != '') {
                $tags = explode('#', $ads->lightSlider);
                foreach ($tags as $k => $val) {
                    if ($val != 'default.png') {
                        unlink('./public/images/ads/' . $val);
                    }
                }

            }
            //delete image slide
        }
        redirect(base_url('admin/ads'));
    }

    function ads_left()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->ads_left) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['ads_left'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['ads_left'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function ads_right()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->ads_right) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['ads_right'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['ads_right'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function ads_center()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->ads_center) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['ads_center'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['ads_center'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function layer_left()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->layer_left) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['layer_left'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['layer_left'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function layer_vip()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->layer_vip) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['layer_vip'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['layer_vip'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function layer_right()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->layer_right) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['layer_right'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['layer_right'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function icon_new()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->icon_new) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['icon_new'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['icon_new'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function icon_vip()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->icon_vip) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['icon_vip'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['icon_vip'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function icon_hot()
    {
        $id = $_POST['id'];
        $ads = $this->ads_model->get_info($id);
        $res = array("status" => 0);
        if ($ads) {
            $res['status'] = 1;
            $dataSubmit = array();
            if ($ads->icon_hot) {
                $res['class'] = 'fa-toggle-off';
                $dataSubmit['icon_hot'] = 0;
            } else {
                $res['class'] = 'fa-toggle-on';
                $dataSubmit['icon_hot'] = 1;
            }
            $this->ads_model->update($id, $dataSubmit);
        }
        echo json_encode($res);
    }

    function ajax_get_list_district()
    {
        $id = $this->input->get('id');
//        var_dump($id);
//        $selected = $this->input->post('selected');

        //get list tbl_gift_item_info_by_type

        $lst_district = $this->District_model->get_list(array('where' => array('_province_id' => $id)));
//        $lst_district = $this->District_model->get_list();
//        var_dump($lst_district);
//        die;

        $lst_district_end = [];
        foreach ($lst_district as $k => $value) {
            $lst_district_end[$value->id]['id'] = $value->id;
            $lst_district_end[$value->id]['_name'] = $value->_name;
        }
//        pre_arr($lst_district_end);

//        pre($lst_district_end);
        $this->data['lstdata'] = $lst_district_end;

        $this->load->view('admin/ads/view_list_district', $this->data);
    }


    function ajax_get_list_ward()
    {
        $id = $this->input->get('id');
//        var_dump($id);
//        $selected = $this->input->post('selected');

        //get list tbl_gift_item_info_by_type

        $lst_ward = $this->Ward_model->get_list(array('where' => array('_district_id' => $id)));
//        $lst_ward = $this->District_model->get_list();
//        var_dump($lst_ward);
//        die;

        $lst_ward_end = [];
        foreach ($lst_ward as $k => $value) {
            $lst_ward_end[$value->id]['id'] = $value->id.'|'.$value->_district_id;
            $lst_ward_end[$value->id]['_name'] = $value->_name;
        }
//        pre_arr($lst_ward_end);

//        pre($lst_ward_end);
        $this->data['lstdata'] = $lst_ward_end;

        $this->load->view('admin/ads/view_list_ward', $this->data);
    }

    function ajax_get_list_street()
    {
        $id = $this->input->get('id');
        $street_id = explode('|', $id);
        $street_id = $street_id[1];

//        var_dump($id);
        $lst_ward = $this->Street_model->get_list(array('where' => array('_district_id' => $street_id)));
//        $lst_ward = $this->District_model->get_list();
//        var_dump($lst_ward);
//        die;

        $lst_ward_end = [];
        foreach ($lst_ward as $k => $value) {
            $lst_ward_end[$value->id]['id'] = $value->id;
            $lst_ward_end[$value->id]['_name'] = $value->_name;
        }
//        pre_arr($lst_ward_end);

//        pre($lst_ward_end);
        $this->data['lstdata'] = $lst_ward_end;

        $this->load->view('admin/ads/view_list_street', $this->data);
    }



}