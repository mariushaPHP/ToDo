<?php

namespace ToDo;

class Validation{
    private $data;
    private $errors = [];
    private static $fields = ['subject', 'priority', 'dueDate'];

    public function __construct($post_data){
        $this->data = $post_data;
    }

    public function validateForm(){
        foreach (self::$fields as $field){

            if(!array_key_exists($field, $this->data)){
                trigger_error("$field nesuvestas");
                //return;
            }
        }
        $this->validateSubject();
        $this->validatePriority();
        $this->validateDate();
        return $this->errors;
    }

    public function validateSubject(){
        $value = $this->data['subject'];
        if(empty($value)){
            $this->addError('subject','Neįvesta užduotis!');
        }
    }

    public function validatePriority(){
        $value = $this->data['priority'];
        if(empty($value)){
            $this->addError('priority','Nepasirinktas prioritetas!');
        }
    }

    public function validateDate(){
        $value = $this->data['dueDate'];
        if(empty($value)){
            $this->addError('dueDate','Nepasirinkta data!');
        }
    }

    public function addError($key, $value){
        $this->errors[$key] = $value;
    }
}