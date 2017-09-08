<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Our student class, contains basic information about a student such as grades,
 * names, and email.
 * 
 * Also contains methods to calculate the students average as well as convert 
 * all the information to a readable string format.
 *
 * @author Paul
 */
class Student {

    //Constructor; initializes all information but does not provide info
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    //Adds an email to the student using provided parameters
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //Adds a grade to the student using provided parameters
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    //Calclates and returs the average of all the current grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    //Returns the first and last name as well as the emails of the student in a
    //readable string format
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
