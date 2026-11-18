<?php
class Students_model extends Model {

    public function get_students() {
        $students = $this->db->get('id', 'students');
        return $students;
    }

}