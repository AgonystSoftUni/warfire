<?php

class Connection 
{
	private $_connection;
	private static $_instance;
    
	private function __construct($dbname, $username, $password) 
    {
        try
        {
		    $this->_connection = new PDO('mysql:host=localhost;dbname=$dbname', $username, $password);
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }

	public static function getInstance()
    {
		if(!self::$_instance) 
        { 
			self::$_instance = new self();
		}
		return self::$_instance;
	}
    public function getConnection()
    {
        return $this->_connection;
    }

}