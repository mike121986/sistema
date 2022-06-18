<?php
    class Conexion
    {
        private $host = "localhost";
        private $user = "sistemayt";
        private $password = "MIKEtrujillo1986";
        private $db = "db_sistema";
        private $conect;

        public function __construct()
        {
            $connectionString = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";

            try {
                $this->conect = new PDO($connectionString,$this->user,$this->password);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                $this->conect = "ERROR DE CONEXION";
                echo "ERROR: ".$e->getMessage();
            }
            
        }

    }