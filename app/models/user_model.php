<?php
require_once 'Model.php';

class User_model extends Model {
    private $table = 'users';


    public function getAll_user()
    {
        $state = $this->db->query('SELECT * FROM ' . $this->table);
        return $state->fetchAll();
    }

// class User_model{
//     private $dbh;
//     private $stmt;
    
//     public function __construct()
//     {
//         $dsn = 'mysql:host=localhost;dbname=phpmvc';

//         try{
//             $this->dbh = new PDO($dsn, 'root', '');
//         }catch(PDOException $e){
//             die($e->getMessage());
//         }
//     }


//     public function getAll_user()
//     {
//         $this->stmt = $this->dbh->prepare('SELECT * FROM users');
//         $this->stmt->execute();
//         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
//     }
}