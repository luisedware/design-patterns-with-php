<?php
namespace Factory\FirstExample;

use Factory\FirstExample\ApptEncoder;

abstract class CommsManager
{
    abstract public function getHeaderText():string;

    abstract public function getApptEncoder():ApptEncoder;

    abstract public function getFooterText():string;
}