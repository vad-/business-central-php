<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Project
 * Auto-generated on: 2020-05-11 13:56:11
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 *
 */
class Project extends Entity
{
    protected static $schema_type = 'project';

    protected $fillable = [
        'number',
        'displayName',
    ];

    protected $guarded  = [
        'id',
    ];
}