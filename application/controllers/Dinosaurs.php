<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinosaurs extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load the model
        $this->load->model('Dinosaurs_model');
    }

    public function index() {
        // Load the view containing links to geological periods
        $this->load->view('periods');
    }

    public function getinfo($period) {
        // Get information about the specified period from the model
        $period_info = $this->Dinosaurs_model->get_period_info($period);
        
        // Pass the period information to the view
        $data['period_info'] = $period_info;
        
        // Load the view to display the information
        $this->load->view('period_info', $data);
    }
}
