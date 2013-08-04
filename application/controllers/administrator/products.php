<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Products extends CI_Controller {

    var $template = 'admin/template';
    var $path = 'public/products/';

    function __construct() {
        parent::__construct();
        $this->general->cekAdminLogin();
        $this->load->model('Product');
        $this->load->model('Category');
        $this->load->model('Media');
        $this->load->library('pagination');
        $this->load->library('general');

        
        $this->load->helper('url');
    }

    function index($page = null) {

        #Pagination COde ----------------------------------
        $products = $this->Product->getProducts();
        

   //pengaturan pagination
        $config['uri_segment'] = 3;
        $config['total_rows'] =count($products);
        // $config['per_page'] = 5;
        $config['per_page'] =$this->general->getSetting('paginationLimit');
        $config['base_url'] = base_url() . 'administrator/products/index/';
        $this->pagination->initialize($config);

        if ($this->input->get('q')):
            $data['products'] = $this->Product->getProducts($config['per_page'], $this->uri->segment(4), $this->input->get('q'));
        else:
            $data['products'] = $this->Product->getProducts($config['per_page'],  $this->uri->segment(4));
        endif;

        $data['pagination'] = $this->pagination->create_links();
        #end Pagination Code --------------------------

        $data['status'] = $this->Product->status;
        $data['content'] = 'admin/products/index';
        $this->load->view($this->template, $data);
    }

    function add() {
        $this->form_validation->set_rules('code', 'code', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('price', 'price', 'required|numeric');
        $this->form_validation->set_rules('description', 'description', '');
        $this->form_validation->set_rules('stock', 'stock', 'required|numeric');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('category_id', 'category', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            if ($this->Product->create()) {

                if ($_FILES['image']['error'] != 4) {
                    $config['upload_path'] = $this->path;
                     $config['allowed_types'] = 'gif|jpeg|png|jpg';
          $config['max_size'] = 2000;
          $config['max_height'] = 2000;
          $config['max_width'] = 2000;
        //  $config['encrypt_name'] = TRUE;
                   // $config['allowed_types'] = $this->general->getSetting('imageAllowed');
                   // $config['max_size'] = $this->general->getSetting('maxImageSize');

                    $this->load->library('upload', $config);


                    if (!$this->upload->do_upload("image")) {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('administrator/products/index');
                    } else {
                        $data = $this->upload->data();

                        $filename = $data['orig_name'];
                        $media = array(
                            'type' => 'product',
                            'key' => $this->db->insert_id(),
                            'mime' => $data['file_type'],
                            'path' => $this->path . $filename,
                            'description' => $this->input->post('name'),
                            'created' => date('Y-m-d H:i:s')
                        );
                        $this->Media->create($media);
                    }
                } //if ($_FILES
                $this->session->set_flashdata('success', 'Product created');
                redirect('administrator/products/index');
            } else {
                $this->session->set_flashdata('error', 'Failed, try again !');
                redirect('administrator/products/add');
            }//if $this
        }//if falid

        $data['status'] = $this->Product->status;
        $data['categories'] = $this->Category->getDropDown();
        $data['content'] = 'admin/products/add';
        $this->load->view($this->template, $data);
    }

    function edit($id = null) {

        if ($id == null) {
            $id = $this->input->post('id');
        }
        $this->form_validation->set_rules('code', 'code', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('price', 'price', 'required|numeric');
        $this->form_validation->set_rules('description', 'description', '');
        $this->form_validation->set_rules('stock', 'stock', 'required|numeric');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('category_id', 'category', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {

            if ($this->Product->update($id)) {

                if ($_FILES['image']['error'] != 4) {

                    $config['upload_path'] = $this->path;
                     $config['allowed_types'] = 'gif|jpeg|png|jpg';
          $config['max_size'] = 2000;
          $config['max_height'] = 2000;
          $config['max_width'] = 2000;
         // $config['encrypt_name'] = TRUE;
                //    $config['allowed_types'] = $this->general->getSetting('imageAllowed');
                //    $config['max_size'] = $this->general->getSetting('maxImageSize');

                    $this->load->library('upload', $config);


                    if (!$this->upload->do_upload("image")) {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('administrator/products/index');
                    } else {
                        $data = $this->upload->data();

                        $filename = $data['orig_name'];
                        $media = array(
                            'type' => 'product',
                            'key' => $id,
                            'mime' => $data['file_type'],
                            'path' => $this->path . $filename,
                            'description' => $this->input->post('name'),
                            'created' => date('Y-m-d H:i:s')
                        );
                        $this->Media->create($media);
                    }
                }
                $this->session->set_flashdata('success', 'Product edited');
                redirect('administrator/products/index');
            } else {
                $this->session->set_flashdata('error', 'Failed, try again !');
                redirect('administrator/products/edit/' . $id);
            }
        }
        $data['product'] = $this->Product->getProductsById($id);
        $data['status'] = $this->Product->status;
        $data['categories'] = $this->Category->getDropDown();
        $data['content'] = 'admin/products/edit';
        $this->load->view($this->template, $data);
    }

    function delete($id = null) {
        if ($id == null) {
            $this->session->set_flashdata('error', 'Invalid product');
            redirect('administrator/products/index');
        } else {
            if ($this->Product->delete($id)) {
                $this->Media->deleteByTypeAndKey('product', $id);
                $this->session->set_flashdata('success', 'Product deleted');
            } else {
                $this->session->set_flashdata('error', 'Failed, try again!');
            }
            redirect('administrator/products/index');
        }
    }

}

?>
