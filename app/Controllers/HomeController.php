<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $stmt = $this->db->query('SELECT * FROM `test`');
        $data['data'] = $stmt->fetchAll();
        $this->view('HomeView', $data);
    }
}
