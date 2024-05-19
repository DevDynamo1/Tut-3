<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinosaurs_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Define the array containing period information
        $this->periods_info = array(
            'Triassic' => array(
                'dinosaurs' => array('Plesiosaurs', 'Stegosaurus', 'Allosaurus'),
                'description' => 'The Triassic period lasted from about 252 million to 201 million years ago.'
            ),
            'Jurassic' => array(
                'dinosaurs' => array('Brachiosaurus', 'Triceratops', 'Velociraptor'),
                'description' => 'The Jurassic period lasted from about 201 million to 145 million years ago.'
            ),
            // Add more periods and their information as needed
        );
    }

    public function get_period_info($period) {
        // Get information about the specified period
        if (array_key_exists($period, $this->periods_info)) {
            return $this->periods_info[$period];
        } else {
            return null;
        }
    }
}
