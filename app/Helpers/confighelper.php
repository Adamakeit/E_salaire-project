<?php

namespace app\Helpers;

use App\Models\Configuration;

class confighelper
{
    public static function getappname()
    {
        $appname = Configuration::where('type', 'APP_NAME')->value('value');
        return $appname;
    }
}
