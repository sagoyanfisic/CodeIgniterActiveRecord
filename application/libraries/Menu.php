<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu {
    private $arr_menu;
    public function __construct($arr){
        $this->arr_menu = $arr;

    }
    public function construirMenu(){
        $ret_menu = "<nav><ul>";
        foreach ($this->arr_menu as $opciones){
            $ret_menu .="<li>".$opciones."</li>";
        }
        $ret_menu .="</ul></nav>";
        return $ret_menu;

    }
}
?>