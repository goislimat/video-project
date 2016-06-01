<?php
/**
 * Created by PhpStorm.
 * User: thiagogois
 * Date: 31/05/16
 * Time: 19:27
 */

namespace App\Http\Utils;


class Document
{
    protected static $documents = [
        1 => 'RG',
        2 => 'CPF',
        3 => 'CNPJ'
    ];
    
    public static function all()
    {
        return static::$documents;
    }
    
    public static function getDocument($type)
    {
        return static::$documents[$type];
    }
}