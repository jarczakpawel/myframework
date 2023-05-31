<?php
namespace Core;

class Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    protected function view($viewName, $data = [])
    {
        extract($data);
        require_once "../app/Views/{$viewName}.php";
    }
}
