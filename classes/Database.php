<?php
class DatabaseManager {

    static $DatabaseObject = null;

    static function getDatabaseObject() {

        if(DatabaseManager::$DatabaseObject != null) return DatabaseManager::$DatabaseObject;

        $host = DATABASE_HOST;
        $dbname = DATABASE_NAME;
        $username = DATABASE_USERNAME;
        $password = DATABASE_PASSWORD;

        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        try
        {
            DatabaseManager::$DatabaseObject = new PDO("mysql:dbname={$dbname};host={$host};charset=utf8", $username, $password, $options);
        }
        catch(PDOException $ex)
        {
            die("db error: " . $ex->getMessage());
        }

        DatabaseManager::$DatabaseObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        DatabaseManager::$DatabaseObject->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
        {
            function undo_magic_quotes_gpc(&$array)
            {
                foreach($array as &$value)
                {
                    if(is_array($value))
                    {
                        undo_magic_quotes_gpc($value);
                    }
                    else
                    {
                        $value = stripslashes($value);
                    }
                }
            }

            undo_magic_quotes_gpc($_POST);
            undo_magic_quotes_gpc($_GET);
            undo_magic_quotes_gpc($_COOKIE);
        }
        return DatabaseManager::$DatabaseObject;
    }
}
?>
