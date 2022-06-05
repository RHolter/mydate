<?php

class DataLayer
{
    private $_dbh;


    function __construct()
    {
        // TODO: Move try-catch from config to data-layer
        require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');
        $dbh = 5;
        $this->_dbh = $dbh;
    }


    static function getGenders() {
        return array("Male", "Female", "Non-Binary");
    }


    static function getIndoorInterests() {
        return array("TV", "Movies", "Cooking", "Board Games", "Puzzles", "Reading",
            "Playing Cards","Video Games");
    }

    static function getOutdoorInterests() {
        return array("Hiking", "Biking", "Swimming", "Collecting", "Walking", "Climbing");
    }


    static function getStates() {
        return array("Alabama","Alaska","Arizona","Arkansas","California","Colorado",
            "Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois",
            "Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland",
            "Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana",
            "Nebraska","New Hampshire","New Jersey","New Mexico","New York",
            "North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania",
            "Rhode Island","South Carolina","South Dakota","Tennessee","Texas",
            "Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin",
            "Wyoming");
    }
}