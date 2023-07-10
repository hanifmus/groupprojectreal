<?php

    class Dbh{
        public function connect(){
            try{

                $username = 'root';
                $password = '1234';
                $conn = new PDO("mysql:host=localhost;dbname=dbhotel",$username,$password);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                return $conn;
            }catch(PDOException $e){
                echo 'Error ' . $e->getMessage();
            }
        }

        public function insert(){
            try{

                $username = 'root';
                $password = '1234';
                $conn = new PDO("mysql:host=localhost;dbname=dbhotel",$username,$password);
                return $conn;
            }catch(PDOException $e){
                echo 'Error ' . $e->getMessage();
            }
        }
    }
    