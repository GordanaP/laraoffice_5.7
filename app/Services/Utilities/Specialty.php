<?php

namespace App\Services\Utilities;

class Specialty
{
    /**
     * A list of doctor's specialties.
     *
     * @var array
     */
    protected static $specialties = [
        'cornea' => "Corneal diseases",
        'glaucoma' => "Glaucoma",
        'pediatrics' => "Pediatric ophtalmology",
        'retina' => "Retinal diseases",
        'oculoplastics' => "Orbital and tear system diseases",
    ];

    /**
     * Get all specialties.
     *
     * @return array
     */
    public static function all()
    {
        $specialties = static::$specialties;

        return $specialties;
    }

    /**
     * Get the specialties' key names.
     *
     * @return array
     */
    public static function keyNames()
    {
        $key_names = array_keys(static::all());

        return $key_names;
    }
}