<?php
namespace Framework\DatabaseModule;
require '../framework/includes/connect.php';
use Framework\Includes\Connect as Connect;

class Database extends Connect
{
    private $db;

    public function __construct()
    {
        $this->db = Connect::getInstance("warfire", "root", "")->getConnection();
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