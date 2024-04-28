<?php

namespace App\Traits;

trait EnumHasSerialization
{
    /**
     * Return enum entries as a json encoded string
     *
     * @return string
     */
    public static function toJson(): string
    {
        return json_encode(self::toArray());
    }

    /**
     * Return enum all entries as a key value pair list
     * @return array<string, mixed>
     */
    public static function toArray(): array
    {
        return array_combine(self::values(), self::names());
    }

    /**
     * Return enum all items values as list or array
     * @return array<mixed>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Return a enum cases as array
     * @return array<string>
     */
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

}
