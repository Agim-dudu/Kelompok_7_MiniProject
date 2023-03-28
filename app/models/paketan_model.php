<?php 

class paketan_model {
    private $table = 'paketan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPaketan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataPaketan($data)
    {
        $query = "INSERT INTO paketan
                    VALUES
                  ( :id, :jenis_laundry, :harga)";
        
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('jenis_laundry', $data['jenis_laundry']);
        $this->db->bind('harga', $data['harga']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}