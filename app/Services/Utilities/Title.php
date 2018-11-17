<?php

namespace App\Services\Utilities;

class Title
{
    /**
     * A list of doctor's titles.
     *
     * @var array
     */
    protected static $titles = [
        'Dr' => "Dr",
        'Prim. Dr' => "Prim. Dr",
        'Ass. Dr' => "Ass. dr",
        'Doc. Dr' => "Doc. dr",
        'Prof.dr' => "Prof. dr",
    ];

    /**
     * Get all titles.
     *
     * @return array
     */
    public static function all()
    {
        $titles = static::$titles;

        return $titles;
    }

    /**
     * Get the titles' key names.
     *
     * @return array
     */
    public static function keyNames()
    {
        $key_names = array_keys(static::all());

        return $key_names;
    }
}