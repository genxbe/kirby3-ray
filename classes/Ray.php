<?php

namespace X;

class Ray
{
    private static $options;

    public static function ray($obj, string $color = null)
    {
        if(function_exists('ray') && self::option('enabled'))
        {
            if(!empty($color))
            {
                ray($obj)->color($color);

                return $obj;
            }

            ray($obj);
        }

        return $obj;
    }

    /**
     * Inspired on code from the fantastic Bnomei
     * @param string|null $key
     * @return array
     */
    private static function option(?string $key = null)
    {
        if(empty(self::$options))
        {
            self::$options = [
                'enabled' => option('genxbe.ray.enabled', false),
            ];
        }

        if ($key) {
            return \A::get(self::$options, $key);
        }

        return self::$options;
    }
}
