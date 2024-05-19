<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgeCalculator extends CI_Controller {

    public function index() {
        $this->load->helper('url'); // Load URL helper
        $this->load->view('dob_form');
    }

    public function calculate_age() {
        $dateOfBirth = $this->input->post('dob');
        $this->load->helper('url'); // Load URL helper
        $this->load->model('Age_model');
        $age = $this->Age_model->get_age($dateOfBirth);
        $data['age'] = $age;
        $this->load->view('age_result', $data);
    }
}
