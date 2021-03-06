<?php

namespace Matthv\LaravelDingoTransform;

use Illuminate\Support\Str;

/**
 * Class Transformations
 *
 * @category Laravel-dingo-transform
 * @package  Laravel-dingo-transform
 * @author   Matthieu Videaud <matthv@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://www.matthieuvideaud.fr
 */
class Transformations
{
	/**
	 * @param $data
	 * @param string $type
	 * @return array|mixed
	 * @throws \ReflectionException
	 */
	public static function transform($data, $type = 'snake') {
		$method = new \ReflectionMethod(Str::class, $type);
		if (is_array($data)) {
			$newData = [];
			foreach ($data as $key => $value) {
				$key = $method->invoke(new Str(), $key);
				if (is_array($value)) {
                    $value = self::transform($value, $type);
                }
				$newData[$key] = $value;
			}
			return $newData;
		}
		else {
			return $method->invoke(new Str(), $data);
		}
	}
}
