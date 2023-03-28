
<?php 

class login_petugas_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLogin(){
        $this->db->query('SELECT * FROM akun_petugas WHERE id = 1');
        return $this->db->single();
    }
    public function confirmlogin($data){
        $input= array("username"=>$data['username'], "password"=>$data['password']);
        return $input;
    }
}

?>