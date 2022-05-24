<?php

/*
 * mydate/model/data-layer.php
 * Returns data for the diner app
 */

class DataLayer
{
    //Static methods do not access instance data (fields)

    // Get the name for the summary form
    static function getFname()
    {
        return array("breakfast", "brunch", "lunch", "dinner");
    }

    // Get the condiments for the order form
    static function getCondiments()
    {
        return array("ketchup", "mustard","mayo", "sriracha", "soy sauce", "malt vinegar");
    }
}
