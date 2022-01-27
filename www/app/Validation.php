<?php

namespace ToDo;

class Validation{
    private static $errors = [];
    public static function validator($post){
        if(strlen(trim($post['subject'])) == ''){
            self::$errors[] = 'Neįvesta užduotis';
        }
        if(!array_key_exists('priority', $post)){
            self::$errors[] = 'Nepasirinktas prioritetas';
        }
        if($post['dueDate'] == ''){
            self::$errors[] = 'Nepasirinkta data';
        }

        return self::$errors;
    }
}