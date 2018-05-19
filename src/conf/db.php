<?php


     class db{

              private $dbhost  = 'localhost';
              private $dbuser  = 'mohammed';
              private $dbpass  = '123wwe36';
              private $dbname  = 'customers';

        public function connect(){

        $mysql_connect_str = "mysql:host=$this->dbhost;name=$this->dbname";
        $dbConnect = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
        $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnect;


        }


     }
