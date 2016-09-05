<?php
namespace Framework\Includes;

class Connect
{
	private $_connection;
	private static $_instance;
    
	private function __construct($dbname, $username, $password) 
    {
        try
        {
		    $this->_connection = new \PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
        }
        catch(PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }

	public static function getInstance($dbname, $username, $password)
    {
		if(!self::$_instance) 
        { 
			self::$_instance = new self($dbname, $username, $password);
		}
		return self::$_instance;
	}
    public function getConnection()
    {
        return $this->_connection;
    }

}