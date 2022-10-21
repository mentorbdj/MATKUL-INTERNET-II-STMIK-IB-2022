<?php

namespace Models;

class Database
{
    public $koneksi = null;

    private $host    = DB_HOST;
    private $user    = DB_USER;
    private $pass    = DB_PASS;
    private $db_name = DB_NAME;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->user, $this->pass, $this->db_name) or die('Unable Connection!');
    }
}
