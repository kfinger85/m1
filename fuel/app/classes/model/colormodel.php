<?php
namespace Model;
use \DB;


class ColorModel extends \Model {

    public static function add_color($name, $hex){
    DB::insert('colors')->set(array
    (
    'Name' => $name,
    'HexValue' => $hex
    ))->execute();   
    }
    public static function get_total()
    {
        return DB::query('SELECT count(ID) AS total FROM colors', DB::SELECT)->execute()->as_array(); 
    }
    public static function get_Table()
    {
        return DB::query('SELECT Name, HexValue  FROM colors', DB::SELECT)->execute()->as_array(); 
    }
    public static function set_name($newname, $prevname)
    {
        DB::query('UPDATE colors SET Name=\''. $newname .'\' WHERE Name=\'' . $prevname . '\'')->execute(); 
    }

    public static function delete_color($name)
    {
        DB::query('DELETE FROM colors WHERE Name=\'' . $name . '\'')->execute(); 
    }
    public static function restart_color()
    {

        DB::query("DROP TABLE IF EXISTS colors; 
        CREATE TABLE colors (ID int NOT NULL  AUTO_INCREMENT, Name VARCHAR(15), HexValue VARCHAR(15), PRIMARY KEY(ID)) ;
        ALTER TABLE colors ADD UNIQUE (Name);")->execute(); 

        DB::query("INSERT INTO colors (Name, HexValue) VALUES
        ('red', 	'FF0000'),
        ('orange', 	'FFA500'),
        ('yellow', 	'FFFF00'),
        ('green', 	'008000'),
        ('blue', 	'0000FF'),
        ('purple', 	'800080'),
        ('grey', 	'808080'),
        ('brown', 	'A52A2A'),
        ('black', 	'000000'),
        ('teal', 	'008080');
        "
        )->execute(); 
    }
}
?>