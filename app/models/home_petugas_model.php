<?php 

class home_petugas_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPelaundryBiasa()
    {
        $this->db->query('SELECT pelaundry_biasa.nama, pelaundry_biasa.nomer, paket.jenis_paket, pelaundry_biasa.deskripsi, paket.harga, pelaundry_biasa.jumlah, pelaundry_biasa.keterangan from pelaundry_biasa
        join paket ON (paket.id = pelaundry_biasa.jenis_paket);');
        return $this->db->resultSet();

    }
    public function getAllPelaundryMember()
    {
        $this->db->query('SELECT member.nama,member.nomer ,paket.jenis_paket, order_member.deskripsi, paket.harga,  order_member.jumlah, order_member.keterangan from order_member
        join member ON (member.id = order_member.id_member)
        join paket ON (paket.id = order_member.id_paket);');
        return $this->db->resultSet();

    }
    public function getAllPaket()
    {
        $this->db->query('SELECT * from paket');
        return $this->db->resultSet();
    }

    public function getAllMember()
    {
        $this->db->query('SELECT * from member');
        return $this->db->resultSet();

    }
    public function ubahstatusmember($id)
        {
            $query = "UPDATE order_member set keterangan = :keterangan WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->bind('keterangan', 'selesai');
            $this->db->execute();

            return $this->db->rowCount();

        }
    public function ubahstatuspelaundry_biasa($id)
        {
            $query = "UPDATE pelaundry_biasa set keterangan = :keterangan WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->bind('keterangan', 'selesai');
            $this->db->execute();

            return $this->db->rowCount();

        }

}