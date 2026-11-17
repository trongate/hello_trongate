<?php
class Students extends Trongate {

    public function manage() {
        $data['headline'] = 'Headline Ahoy';
        $data['students'] = $this->model->get_students();
        $data['view_file'] = 'students_list';
        $this->templates->custom($data);
    }

}