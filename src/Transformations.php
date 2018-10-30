<?php

namespace Matthv\LaravelDingoTransform;

use Illuminate\Support\Str;

class Transformations
{
	/**
	 * @param array $data
	 * @param string $type
	 * @return array
	 * @throws \ReflectionException
	 */
    public static function transform(array $data, $type = 'snake') {
        $newData = [];
        foreach ($data as $key => $value) {
            $method = new \ReflectionMethod(Str::class, $type);
            $key = $method->invoke(new Str(), $key);

            if (is_array($value)) $value = self::transform($value, $type);

			$newData[$key] = $value;
        }
        return $newData;
    }
}
