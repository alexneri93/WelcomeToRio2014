<?php

/**
 * Establirem la conexio amb la base de dades utilitzant el PDO
 */

class Database extends PDO
{
    private static $instance = null;
            
    CONST dsn = 'mysql:host=localhost;dbname=merktravel';
    CONST user = 'root';
    CONST password = '';

    public function __construct()
    {
            try{
                parent::__construct(self::dsn,  self::user, self::password);
            }
            catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }

    }

    public static function singleton()
    {
            if( self::$instance == null )
            {
                    self::$instance = new self();
            }
            return self::$instance;
    }
}

?>
