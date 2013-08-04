<?php

class Products extends CI_Controller {

    var $template = 'template';

    function __construct() {
        parent::__construct();
       $this->load->model('Product');
       $this->load->model('Category');
        $this->load->library('pagination');
        
    }

    function index() {

        if($this->uri->segment(3)==""){
            $offset=0;
        }else{
            $offset=$this->uri->segment(3);
        }
        $limit = 4;
        $data['products'] = $this->Product->getProductsPublished($offset, $limit);
        $data['counts'] = $this->Product->getProductsPublished_count();
        
         $config = array();
        $config['base_url'] = base_url(). 'products/index/';
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 5;

        $config['first_tag_open'] = '<li>';
        $config['first_link'] = 'First';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_link'] = 'Last';
        $config['last_tag_close'] = '</li>';
        $config['total_rows'] = $data['counts'];


         $this->pagination->initialize($config);
        $this->session->set_userdata('row', $this->uri->segment(3));
        
          
         if ($this->input->get('q')) {
            $data['products'] = $this->Product->getProductsPublished($config['per_page'], $this->uri->segment(4), $this->input->get('q'));
            if (empty($data['products'])) {
                $this->session->set_flashdata('error', 'I am sorry, we could not find any product !');
                redirect('products');
            }
        } else {
            //$data['products'] = $this->Product->getProductsPublished($config['per_page'], $this->uri->segment(4));
        $data['products'] = $this->Product->getProductsPublished($offset, $limit);
        
        }

        $data['pagination'] = $this->pagination->create_links();
        $data['content'] = 'products/index';
        $this->load->view($this->template, $data);
    }

    function detail($permalink) {

        $data['product'] = $this->Product->getProductByPermalink($permalink);
        if (empty($data['product'])) {
            $this->session->set_flashdata('error', 'Invalid product');
            redirect('products');
        }
        $data['content'] = 'products/detail';
        $this->load->view($this->template, $data);
    }
/* Category */
    function category($permalink, $page = null) {
        $data['category'] = $this->Category->getCategoryByPermalink($permalink);
        $products = $this->Product->getProductsByCategoryId($data['category']['id']);
        if (empty($products)) {
            $this->session->set_flashdata('error', 'There is no item in this category');
            redirect('products');
        }
        $config['uri_segment'] = 4;
        $config['total_rows'] = count($products);
        $config['per_page'] = 9;
        $config['base_url'] = base_url() . 'products/category/' . $permalink . '/';
        $this->pagination->initialize($config);
        $pages_count = ceil($config['total_rows'] / $config['per_page']);
        $page = ($page == 0) ? 1 : $page;
        $offset = $config['per_page'] * ($page - 1);

        $data['products'] = $this->Product->getProductsByCategoryId($data['category']['id'], $config['per_page'], $offset);
        $data['pagination'] = $this->pagination->create_links();
        $data['content'] = 'products/category';
        $this->load->view($this->template, $data);
    }

    function add_cart($permalink) {
        $product = $this->Product->getProductByPermalink($permalink);

        $media = $this->general->getSingleMedia('product', $product['id']);

        $data = array(
            'id' => $product['code'],
            'qty' => 1,
            'price' => $product['net_price'],
            'name' => $product['name'],
            'options' => array('pic' => $media['path'], 'discount_percent' => $product['discount_percent'])
        );

        if ($this->cart->insert($data)) {
            $this->session->set_flashdata('success', 'Item has  added to cart');
            redirect('products/detail/' . $permalink);
        }
    }

}


