<?php
class Students extends Trongate {

    public function manage() {
        $student['first_name'] = 'Harry';
        $student['last_name'] = 'Malone';
        $student['city'] = 'London';
        $students[] = $student;

        $student['first_name'] = 'Eric';
        $student['last_name'] = 'Clapton';
        $student['city'] = 'Manchester';
        $students[] = $student;

        $student['first_name'] = 'Jimi';
        $student['last_name'] = 'Hendrix';
        $student['city'] = 'New York';
        $students[] = $student;

        $data['headline'] = 'Headline Ahoy';
        $data['students'] = $students; 
        $this->view('students_list', $data);
    }

}