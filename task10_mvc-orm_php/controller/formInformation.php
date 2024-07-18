<?php

class students {

    public $firstName ;
    public $lastName ;
    protected $stdid;
    protected $stdmeli;

    function __construct($fname,$lname,$stdid,$stdmeli) {
        $this -> firstName = $fname;
        $this -> lastName = $lname;
        $this -> stdid = $stdid;
        $this -> stdmeli = $stdmeli;

    }

    function get_firstName() {
        return $this -> firstName;
    }

    function get_lastName() {
        return $this -> lastName;
    }

    function get_melliId() {
        return $this -> stdmeli;
    }

    function get_id() {
        return $this -> stdid;
    }


    function set_fname($fname){
        $this -> firstName = $fname;
    }

    function set_lname($lname){
        $this -> lastName = $lname;
    }

    function set_id($id){
        $this -> stdid = $id;
    }

    function set_melliId($melliId){
        $this -> stdmeli = $melliId;
    }


}

