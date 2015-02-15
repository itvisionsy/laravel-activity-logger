<?php

/*
 * Copyright (c) 2014 muhannad.
 * All rights reserved. This file is a property of Homely.ae.
 */

namespace ItvisionSy\LaravelActivityLogger;

/**
 * Description of JSONable
 *
 * @author muhannad
 */
class JSONable implements IJSONable {

    protected $data;

    public function __construct(array $data = []) {
        $this->data = $data;
    }

    public function setData(array $data = []) {
        $this->data = $data;
        return $this;
    }

    public function getData() {
        return $this->data;
    }

    public static function create(array $data = []) {
        return new JSONable($data);
    }

    public static function createFromJSON($json) {
        return new JSONable($this->data = json_decode($json, true));
    }

    public function fromJSON($json) {
        $this->data = $this->data = json_decode($json, true);
        return $this;
    }

    public function toJSON() {
        return json_encode($this->data);
    }

    public function __toString() {
        return $this->toJSON();
    }

    public function __get($name) {
        return @$this->data[$name]? : null;
    }

    public function toArray() {
        return $this->data;
    }

}
