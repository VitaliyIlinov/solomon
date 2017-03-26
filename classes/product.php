<?php
class Product{

    public static function sortByPrice($a,$b){
        if ($a['price'] == $b['price']) {
            return 0;
        }
        return ($a['price'] < $b['price']) ? -1 : 1;
    }

    public static function sortByName($a,$b){
        return strcasecmp ($a["name"], $b["name"]);
    }
    public static function sortByNew($a,$b){
        return strtotime($b['date']) - strtotime($a['date']);
    }
}