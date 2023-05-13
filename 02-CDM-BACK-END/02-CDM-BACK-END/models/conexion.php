<?php

    class Conexion{


        public function get_conexion(){

            $host = 'localhost';
            $pass = '';
            $user = 'root';
            $dbname = 'inmueble';

            try{

                $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);
                return $conexion;

            } catch(PDOException $e){

                echo 'ERROR'.$e->getMessage();
                die;
            }

        }
    }