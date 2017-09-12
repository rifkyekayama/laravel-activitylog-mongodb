<?php

namespace RifkyEkayama\Activitylog\Test\Models;

use RifkyEkayama\Activitylog\Models\Activity;

class CustomActivityModel extends Activity
{
    public function getCustomPropertyAttribute()
    {
        return $this->changes();
    }
}
