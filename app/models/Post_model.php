<?php


class Post_model extends Model{
    private $table = 'post';

    public function getAll_post()
    {
        $statement = $this->db->query('SELECT * FROM ' . $this->table);
        return $statement->fetchAll();
    }
    
    public function getPostById($id)
    {
        try {
            $query = "SELECT * FROM post where post_id=:id";
            $statement = $this->db->prepare($query);

            $statement->execute(['id' => $id]);

            return $statement->fetch(PDO::FETCH_ASSOC);

        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function create_post($data)
    {
        try {
            $query = "INSERT INTO post(title, admin_id, contain) Values (:title, :admin_id, :contain )";
            $statement = $this->db->prepare($query);

            $statement->execute($data);

            return $statement->rowCount();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function update_post($data)
    {
        try {
            $query = "UPDATE post SET title = :title, contain = :contain where post_id=:id";
            
            $statement = $this->db->prepare($query);

            $statement->execute(['title' => $data['title'], 'contain' => $data['contain'], 'id' => $data['id']]);

            return $statement->rowCount();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function delete_post($id)
    {
        try {
            $query = "DELETE FROM post Where post_id=:id";
            $statement = $this->db->prepare($query);

            $statement->execute(['id' => $id]);

            return $statement->rowCount();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }
}