<?php
class Students extends Trongate {

    public function manage() {
        $data['headline'] = 'Headline Ahoy';
        $data['students'] = $this->model->get_students();
        $data['view_file'] = 'students_list';
        $this->templates->admin($data);
    }

    public function delete() {
        $update_id = segment(3);
        $this->db->delete($update_id, 'students');
        echo 'Deleted';
    }

    public function demo() {
        $json_str = '{"headline":"Headline Ahoy","students":[{"first_name":"Harry","last_name":"Malone","city":"London"},{"first_name":"Eric","last_name":"Clapton","city":"Manchester"},{"first_name":"Jimi","last_name":"Hendrix","city":"New York"}],"view_file":"students_list"}';

        $data = json_decode($json_str);
        json($data);
    }

}