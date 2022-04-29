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
        return DB::query('SELECT count(ID) FROM colors', DB::SELECT)->execute()->as_array(); 
    }
    public static function get_namesArray()
    {
        return DB::query('SELECT Name, HexValue  FROM colors', DB::SELECT)->execute()->as_array(); 
    }
}
?>