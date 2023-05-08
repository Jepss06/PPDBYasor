<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ppdb_m extends CI_Model{
    function ambil($table){
        $this->db->get($table);
    }
} 
?>