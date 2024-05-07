<?php

namespace Bcs;

use Contao\Database;

class Handler
{
    protected static $arrUserOptions = array();

    public function onCreateNewUser(int $userId, array $userData, Module $module): void
    {
        echo "BLAM";
        die();
    }
  
}
