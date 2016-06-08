<?php
namespace App\Helpers;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }
    public static function getPositions($fd)
    {
        if($fd=='f') return array('lw', 'c', 'rw');
        else return array('ld', 'rd');
    }
    public static function getLineClass($line)
    {
        $classes = array('bg-info', 'bg-warning', 'bg-green', 'bg-danger');
        return $classes[$line-1];
    }
    public static function getCurrentLineup() // siirrä FilterHelperiin
    {
        return 1; //$value = $request->cookie('name'); (from Illuminate\Http\Request)
    }
}