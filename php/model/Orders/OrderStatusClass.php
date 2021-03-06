<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderStatusClass
 *
 * @author victor
 */

require_once "../model/EntityInterface.php";

class OrderStatusClass{

    private $id;
    private $name;

    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getAll() {
        $data = [];

        $data['id'] = $this->getId();
        $data['name'] = $this->getName();

        return $data;
    }

}
