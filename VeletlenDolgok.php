<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of VeletlenDolgok
 *
 * @author diak
 */
class VeletlenDolgok {
    static private $nevek=["Kiss", "Nagy", "Kovács", "Tóth", "Varga"];
    static private $nyelvek=["angol", "kínai", "orosz", "német", "francia", "spanyol", "portugál", "magyar"];
    static function VeletlenNev() {
        shuffle(VeletlenDolgok::$nevek);
        return VeletlenDolgok::$nevek[0];
    }
    static function VeletlenKor() {
        return random_int(18, 99);
    }
    static function VeletlenNyelv(){
        $i=rand(0,count(VeletlenDolgok::$nyelvek)-1);
        return VeletlenDolgok::$nyelvek[$i];
    }
}
