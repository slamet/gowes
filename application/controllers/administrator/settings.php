<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Settings extends CI_Controller {

    var $template = 'admin/template';

    function __construct() {
        parent::__construct();
        $this->general->cekAdminLogin();
        $this->load->model('Setting');
    }

    function index() {

        $data['settings'] = $this->Setting->getSettings();
        $data['content'] = 'administrator/settings/index';
        $this->load->view($this->template, $data);
    }

    function edit($id = null) {
        if ($id == null) {
            $id = $this->input->post('id');
        }

        $this->form_validation->set_rules('value', 'value', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->Setting->update($id);
            $this->session->set_flashdata('success', 'Setting edited');
            redirect('administrator/settings');
        }

        $data['setting'] = $this->Setting->getSettingByid($id);
        $data['content'] = 'administrator/settings/edit';
        $this->load->view($this->template, $data);
    }

    function add() {
        $this->form_validation->set_rules('key', 'key', 'required');
        $this->form_validation->set_rules('value', 'value', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->Setting->create();
            $this->session->set_flashdata('success', 'Setting added');
            redirect('administrator/settings');
        }


        $data['content'] = 'administrator/settings/add';
        $this->load->view($this->template, $data);
    }

}

?>
