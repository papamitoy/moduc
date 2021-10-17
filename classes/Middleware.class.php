<?php 
class Middleware{
    public static function adviser($user){
        if(!isset($_SESSION['user'])){
            return false;
        }
        if($_SESSION['user']['type'] != "adviser"){
            return false;
        }
        return true; 
    }
    public static function admin($user){
        if(!isset($_SESSION['user'])){
            return false;
        }
        if($_SESSION['user']['type'] != "admin"){
            return false;
        }
        return true; 
    }
}