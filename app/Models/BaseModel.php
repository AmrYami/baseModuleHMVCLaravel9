<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;
use ReflectionClass;

class BaseModel extends Model
{
    protected $connection = 'mysql';


    use LogsActivity;
    use HasTranslations;


    protected static $logName;

    // Automatically initialize logging
    protected static function boot()
    {
        parent::boot();
        static::retrieved(function ($model) {
            $model->init();
        });
    }

    public function init()
    {
        self::$logName = get_called_class();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->getFillableAttributes());
    }

    /**
     * Get the fillable attributes of the child model dynamically.
     */
    protected function getFillableAttributes(): array
    {
        $reflection = new ReflectionClass($this);
        $property = $reflection->getProperty('fillable');
        $property->setAccessible(true);

        return $property->getValue($this);
    }

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
