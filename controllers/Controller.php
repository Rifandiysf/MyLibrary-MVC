<?php

class Controller{
    protected static function view($page, $data = [], $dataMember=[], $dataLoan=[]){
        $data;
        $dataMember;
        $dataLoan;
        require $page;
    }
}