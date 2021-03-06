<?php namespace AzylAlfa\Dogbreeder\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'azylalfa_dogbreeder_categories';

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name', 'description'];

    public $hasMany = [
        'dogs' => 'AzylAlfa\Dogbreeder\Models\Dog'
    ];
}