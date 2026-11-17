<?php
class Students_model extends Model {

    public function get_students() {
        $students = [
            [
                'first_name' => 'Harry',
                'last_name'  => 'Malone',
                'city'       => 'London',
            ],
            [
                'first_name' => 'Eric',
                'last_name'  => 'Clapton',
                'city'       => 'Manchester',
            ],
            [
                'first_name' => 'Jimi',
                'last_name'  => 'Hendrix',
                'city'       => 'New York',
            ],
        ];

        return $students;
    }

}