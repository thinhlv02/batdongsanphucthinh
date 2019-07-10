<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends MY_Controller
{
    public static $LIMIT_COMMENT_PER_PAGE = 2;

    function __construct()
    {
        parent::__construct();
//        $this->load->model('recruitment_model');
        $this->load->model('product_model');
        $this->load->model('questions_model');
        $this->load->model('contact_model');
        $this->load->model('news_model');
        $this->load->model('ads_model');
    }

    function index()
    {
        $this->data['li_1'] = 1;
        $news = $this->news_model->get_list(array('limit' => array(5, 0)));
        $this->data['news'] = $news;

        //ads vip
        $ads = $this->ads_model->get_list(array('where' => array('vip' => 1), 'limit' => array(4, 0)));
        $this->data['vip'] = $ads;

        //ads nổi bật
        $ads = $this->ads_model->get_list(array('where' => array('highlight' => 1), 'limit' => array(8, 0)));
        $this->data['ads'] = $ads;

        //ads new
        $ads_new = $this->ads_model->get_list(array('order' => array('id', 'desc'), 'limit' => array(8, 0)));
        $this->data['ads_new'] = $ads_new;

        //ads mới cập nhật
        $ads_new = $this->ads_model->get_list(array('order' => array('id', 'desc'), 'limit' => array(100, 0)));
        $this->data['ads_new'] = $ads_new;

        $this->data['temp'] = 'site/home/home';
        $this->load->view('site/layout/layout', $this->data);
    }

    function service_info($slug = '', $id = 0)
    {
        $this->data['li_2'] = 1;
        if (strlen($slug) > 0 && $id > 0) {
            $product = $this->product_model->get_info($id);
            if (!$product || create_slug($product->name) != $slug) {
                redirect(base_url('gioi-thieu-dich-vu.html'));
            }
            $this->data['product'] = $product;
        } else {
            $product = $this->product_model->get_list(array('order' => array('id', 'asc'), 'limit' => array(1, 0)));
            if (sizeof($product)) {
                $this->data['product'] = $product[0];
            }
        }

        $this->data['temp'] = 'site/pages/service_info';
        $this->load->view('site/layout/layout', $this->data);
    }

    function support($type = 1)
    {
        $this->data['li_3'] = 1;

        if ($type == "ky-thuat-vien" || $type == "ky-thuat-vien.html") {
            $type = 2;
        } else if ($type == "cong-tac-vien" || $type == "cong-tac-vien.html") {
            $type = 3;
        } else if ($type != 1) {
            redirect(base_url('ho-tro.html'));
        }
        $categories = $this->questions_model->get_list(array('where' => array('parent_id' => 0, 'type' => $type), 'order' => array('id', 'asc')));

        $this->data['categories'] = $categories;
//        $this->data['type'] = $type;
        $this->data['temp'] = 'site/pages/support_level_1';
        $this->load->view('site/layout/layout', $this->data);
    }

    function detail_support($slug = "", $id = 0)
    {
        $this->data['li_3'] = 1;
        if (strlen($slug) > 0 && $id > 0) {
            $question = $this->questions_model->get_info($id);
            if (!$question || create_slug($question->name) != $slug) {
                redirect(base_url('ho-tro.html'));
            }
            $categories = $this->questions_model->get_list(array('where' => array('parent_id' => 0, 'type' => $question->type)));
            $this->data['categories'] = $categories;
            $this->data['type'] = $question->type;
//            pre($question->type);
            if ($question->level == 1) {
                $questions = $this->questions_model->get_list(array('where' => array('parent_id' => $question->id), 'order' => array('id', 'asc')));
                $this->data['questions'] = $questions;
                $this->data['temp'] = 'site/pages/support_level_2';
            } else {
                $this->data['question'] = $question;
                $this->data['temp'] = 'site/pages/support_level_3';
            }
        } else {
            redirect(base_url('ho-tro.html'));
        }
        $this->load->view('site/layout/layout', $this->data);
    }

    function policy()
    {
        $this->data['li_4'] = 1;
        $policy = $this->contact_model->get_info(1)->policy;
        $this->data['title'] = "Điều khoản sử dụng";
        $this->data['page_content'] = $policy;
        $this->data['temp'] = 'site/pages/policy';
        $this->load->view('site/layout/layout', $this->data);
    }

    function privacy()
    {
        $this->data['li_4'] = 1;
        $privacy = $this->contact_model->get_info(1)->privacy;
        $this->data['title'] = "Chính sách bảo mật";
        $this->data['page_content'] = $privacy;
        $this->data['temp'] = 'site/pages/policy';
        $this->load->view('site/layout/layout', $this->data);
    }

    function contact()
    {
        $this->data['li_5'] = 1;
        $this->data['temp'] = 'site/pages/contact';
        $this->load->view('site/layout/layout', $this->data);
    }

    function download()
    {
//        $this->data['temp'] = 'site/pages/contact';
        $this->load->view('site/pages/download', $this->data);
    }

    function news()
    {
        $per_page = 10;
        $offset = $this->uri->segment(2);
        $offset = intval($offset);
        $input = array();
        $input['where'] = array('highlight' => 0);
        $total = $this->news_model->get_total($input);
        $paginator = config_pagination($per_page, 2, $total, base_url('tin-tuc'));

        if ($offset >= 1) {
            $offset -= 1;
            $offset = $offset * $per_page;
        }

        $input['limit'] = array($per_page, $offset);
        $news = $this->news_model->get_list($input);

        $highlight = $this->news_model->get_list(array('where' => array('highlight' => 1)));

        $this->data['paginator'] = $paginator;
        $this->data['news'] = $news;
        $this->data['highlight'] = $highlight;

        $this->data['li_6'] = 1;
//        $news = $this->news_model->get_list();
        $this->data['news'] = $news;
        $this->data['temp'] = 'site/pages/news';
        $this->load->view('site/layout/layout', $this->data);
    }

    function news_detail($slug, $id)
    {
        $news = $this->news_model->get_info($id);
        if (!$news || create_slug($news->name) != $slug) {
            redirect(base_url('tin-tuc'));
        }
        $this->data['news'] = $news;

        $highlight = $this->news_model->get_list(array('where' => array('highlight' => 1)));
        $this->data['highlight'] = $highlight;

        $this->data['title'] = $news->document_title;
        $this->data['title'] = $news->title;
        $this->data['description'] = $news->meta_description;
        $this->data['image'] = public_url('images/news/' . $news->img);
        $this->data['page_url'] = base_url('tin-tuc/' . create_slug($news->name) . '-' . $news->id);
        $this->data['robots'] = $news->robots_meta;
        $this->data['canonical'] = $news->canonical_url;
        $this->data['keywords'] = $news->meta_keywords;

        $this->data['li_6'] = 1;
        $this->data['temp'] = 'site/pages/news_detail';
        $this->load->view('site/layout/layout', $this->data);
    }

    function ads()
    {
        $per_page = 10;
        $offset = $this->uri->segment(2);
        $offset = intval($offset);
        $input = array();
        $input['where'] = array('highlight' => 0);
        $total = $this->ads_model->get_total($input);
        $paginator = config_pagination($per_page, 2, $total, base_url('rao-vat'));

        if ($offset >= 1) {
            $offset -= 1;
            $offset = $offset * $per_page;
        }

        $input['limit'] = array($per_page, $offset);
        $news = $this->ads_model->get_list($input);

        $highlight = $this->ads_model->get_list(array('where' => array('highlight' => 1)));

        $this->data['paginator'] = $paginator;
        $this->data['ads'] = $news;
        $this->data['highlight'] = $highlight;

        $this->data['li_6'] = 1;
//        $news = $this->ads_model->get_list();
        $this->data['ads'] = $news;
        $this->data['temp'] = 'site/pages/ads';
        $this->load->view('site/layout/layout', $this->data);
    }

    function ads_detail($slug, $id)
    {
        $ads = $this->ads_model->get_info($id);
        if (!$ads || create_slug($ads->title) != $slug) {
            redirect(base_url('tin-tuc'));
        }
        $this->data['ads'] = $ads;

        $highlight = $this->ads_model->get_list(array('where' => array('highlight' => 1)));
        $this->data['highlight'] = $highlight;

//        $this->data['title'] = $ads->document_title;
        $this->data['title'] = $ads->title;
        $this->data['description'] = $ads->meta_description;
        $this->data['image'] = public_url('images/ads/' . $ads->img);
        $this->data['page_url'] = base_url('rao-vat/' . create_slug($ads->title) . '-' . $ads->id);
//        $this->data['robots'] = $ads->robots_meta;
//        $this->data['canonical'] = $ads->canonical_url;
//        $this->data['keywords'] = $ads->meta_keywords;

        $this->data['li_6'] = 1;
        $this->data['temp'] = 'site/pages/ads_detail';
        $this->load->view('site/layout/layout', $this->data);
    }


    function product()
    {
        $product = $this->product_model->get_list();
        $this->data['li_product'] = 1;
        $this->data['product'] = $product;
        $this->data['temp'] = 'site/product/product';
        $this->load->view('site/layout/layout', $this->data);
    }

    function language()
    {
        $language = $this->uri->segment(1);
        $uri2 = $this->uri->segment(2);
        $uri3 = $this->uri->segment(3);
//        pre($uri2.'-'.$uri3);
        if ($language == 'vn') {
            $this->session->set_userdata('language', 'vn');
        } else if ($language == 'en') {
            $this->session->set_userdata('language', 'en');
        }
        if ($uri3) {
            redirect(base_url($uri2 . '/' . $uri3));
        } else if ($uri2) {
            redirect(base_url($uri2));
        } else {
            redirect(base_url());
        }
    }

    function agency()
    {
        $this->data['temp'] = 'site/pages/agency';
        $this->load->view('site/layout/layout', $this->data);
    }

    function sitemap()
    {
//        $data = $this->news_model->get_list(array('limit' => array(50, 0)));
//        header("Content-Type: text/xml;charset=iso-8859-1");
//        $data = array('news' => $news);
//        pre($data);
        $this->data['news'] = $this->news_model->get_list(array('limit' => array(50, 0)));
        $this->load->view("site/layout/sitemap", $this->data);
    }

    function update_view() {

        $id = $this->input->get('id');
        $ads = $this->ads_model->get_info($id);
        $view_old = $ads->view;
        $view_new = $view_old + 14;

        if ($ads) {
            $dataSubmit = array();
            $dataSubmit['view'] = $view_new;
//            var_dump($id. '-----');
//            var_dump($dataSubmit);
            $this->ads_model->update($id, $dataSubmit);
            echo $id.'=>'.$view_new;
        } else {
            echo 'not update';
        }

//        echo json_encode($res);

//        echo 'dcm';
//        die();

//        $id = $this->input->get('id');
//        echo $id;
    }

}