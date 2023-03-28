<?php

    class ha_model {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllPaket()
        {
            $this->db->query('SELECT * from paket');
            return $this->db->resultSet();
        }

        public function getAllPetugas()
        {
            $this->db->query('SELECT * from petugas');
            return $this->db->resultSet();

        }
        public function getAllAkun()
        {
            $this->db->query('SELECT * from akun_petugas');
            return $this->db->resultSet();

        }
        public function hapusDataPaket($id)
        {
            $query = "DELETE FROM paket WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();

            return $this->db->rowCount();
        }
        public function hapusDataAkun($id)
        {
            $query = "DELETE FROM akun_petugas WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();

            return $this->db->rowCount();
        }
        public function hapusDataPetugas($id)
        {
            $query = "DELETE FROM petugas WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();

            return $this->db->rowCount();
        }

        public function getAkunById($id){
            $this->db->query('SELECT * FROM akun_petugas WHERE id = :id');
            $this->db->bind('id',$id);
            return $this->db->single();

        }
        public function getPetugasById($id){
            $this->db->query('SELECT * FROM petugas WHERE id = :id');
            $this->db->bind('id',$id);
            return $this->db->single();
        }

        public function getPaketById($id){
            $this->db->query('SELECT * FROM paket WHERE id = :id');
            $this->db->bind('id',$id);
            return $this->db->single();

        }




        // method insert
        public function tambahDataPetugas($data)
        {
            $query = "INSERT INTO petugas
                        VALUES
                    ( :id, :nama, :nomer)";
            
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nomer', $data['nomer']);

            $this->db->execute();

            return $this->db->rowCount();
        }
        public function tambahDataPaket($data)
        {
            $query = "INSERT INTO paket
                        VALUES
                    ( :id, :jenis_paket, :harga)";
            
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('jenis_paket', $data['jenis_paket']);
            $this->db->bind('harga', $data['harga']);

            $this->db->execute();

            return 1;
        }
        public function tambahDataAkun($data)
        {
            $query = "INSERT INTO akun_petugas
                        VALUES
                    (null, :username, :password)";
            
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);

            $this->db->execute();
            return $this->db->rowCount();
        }


        public function ubahDataAkun($data)
        {
            $query = "UPDATE akun_petugas SET
                        username = :username,
                        password = :password
                    WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        }
        public function ubahDataPaket($data)
        {
            $query = "UPDATE paket SET
                        jenis_paket = :jenis_paket,
                        harga = :harga
                    WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('jenis_paket', $data['jenis_paket']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        }
        public function ubahDataPetugas($data)
        {
            $query = "UPDATE petugas SET
                        nama = :nama,
                        nomer = :nomer
                    WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nomer', $data['nomer']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        }
        
        public function ubahDataselesai($data)
        {
            $query = "UPDATE order_member SET
                        keterangan = 'Selesai',
                    WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }


?>