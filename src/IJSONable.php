<?php

/*
 * Copyright (c) 2014 muhannad.
 * All rights reserved. This file is a property of Homely.ae.
 */

namespace ItvisionSy\LaravelActivityLogger;

/**
 *
 * @author muhannad
 */
interface IJSONable {

    public function toArray();

    public function toJSON();

    public static function createFromJSON($json);

    public function fromJSON($json);
}
