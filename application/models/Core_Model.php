<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Core_Model extends CI_Model{
    public function getData($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

    public function getWhere($table, $where){
        $res = $this->db->get_where($table, $where); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res;
    }

    public function selectFrom($field, $table, $limit){
        
        if ($limit == NULL)
        {
            $query = "SELECT $field FROM $table";
        }
        elseif($limit != NULL)
        {
            $query = "SELECT $field FROM $table LIMIT $limit";
        }
        
        return $this->db->query($query);

        // $this->db->select($field);
        // $res = $this->db->get($table);
        // return $res;
    }
    public function selectWhere($field, $table, $where)
    {
        $this->db->select($field);
        $res = $this->db->get_where($table, $where);
        return $res;
    }

    public function register($table, $data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
 
    public function update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }
 
    public function delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }
}
?>