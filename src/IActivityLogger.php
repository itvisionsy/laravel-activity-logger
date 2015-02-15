<?php

/*
 * 
 * Copyright (c) 2014 muhannad.
 * All rights reserved. This file is a property of Homely.ae.
 * 
 */

namespace ItvisionSy\LaravelActivityLogger;

use ActivityLog;

/**
 * Activity logger
 */
interface IActivityLogger {

    public static function log($userType, $userId, $event, IJSONable $data = null);
}
