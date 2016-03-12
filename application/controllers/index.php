<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public $data;

    public function __construct() {
        parent::__construct();
//        $this->load->model('data_model');
        $this->load->helper( array( 'form', 'url' ) );
    }
    
    function _load_view() {
        $this->load->view("temp", $this->data);
    }
    
    public function index() {  
        $this->data ['main']        = "index";
        $this->data ['title']       = "Bush Contractors Co. Ltd";
        $this->data ['description'] = "Leading Building & Construction, Civil Engineering and Electricals service providers in South Sudan.";
        $this->_load_view();
    }
    
    public function about() {
        $this->data ['main']        = "about";
        $this->data ['title']       = "Bush Contractors Co. Ltd";
        $this->data ['description'] = "Leading Building & Construction, Civil Engineering and Electricals service providers in South Sudan.";
        $this->_load_view();
    }
    
    public function contact() {
        $this->data ['main']        = "contact";
        $this->data ['title']       = "Bush Contractors Co. Ltd";
        $this->data ['description'] = "Leading Building & Construction, Civil Engineering and Electricals service providers in South Sudan.";
        $this->_load_view();
    }
    
    public function services() {
        $this->data ['main']        = "services";
        $this->data ['title']       = "Bush Contractors Co. Ltd";
        $this->data ['description'] = "Leading Building & Construction, Civil Engineering and Electricals service providers in South Sudan.";
        $this->_load_view();
    }
    
    public function portfolio() {
        $this->data ['main']        = "portfolio";
        $this->data ['title']       = "Bush Contractors Co. Ltd";
        $this->data ['description'] = "Leading Building & Construction, Civil Engineering and Electricals service providers in South Sudan.";
        $this->_load_view();
    }
    
    public function portfolio_details() {
        $this->data ['main']        = "portfolio_details";
        $this->data ['title']       = "Bush Contractors Co. Ltd";
        $this->data ['description'] = "Leading Building & Construction, Civil Engineering and Electricals service providers in South Sudan.";
        $this->_load_view();
    }
}

