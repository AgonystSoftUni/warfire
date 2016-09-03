<?php
include 'connect.php';

class Query extends Connection
{
    private $db;

    public function __construct()
    {
        $this->db = Connection::getInstance()->getConnection();
    }

    public function select($query)
    {
        $data = $this->db->prepare($query);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }
    public function callDbQuery($query)
    {
        $data = $this->db->prepare($query);
        try 
        {
            $data->execute();
        } 
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}