<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Age_model extends CI_Model {

    public function get_age($dateOfBirth) {
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        $years = $diff->format('%y');
        $months = $diff->format('%m');
        $days = $diff->format('%d');
        return array(
            'years' => $years,
            'months' => $months,
            'days' => $days
        );
    }

}
