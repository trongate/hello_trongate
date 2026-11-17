<?php
class Students extends Trongate {

    public function manage() {
        $data['headline'] = 'Headline Ahoy';
        $data['students'] = $this->model->get_students();
        $this->view('students_list', $data);
    }

}