<?php

namespace App;

class Main
{
	const map = [
		1 => 'I',
		4 => 'IV',
		5 => 'V',
		9 => 'IX',
		10 => 'X',
		40 => 'XL',
		50 => 'L',
		90 => 'XC',
		100 => 'C',
		400 => 'CD',
		500 => 'D',
		900 => 'CM',
		1000 => 'M',
	];

	public function convert(int $number): string|false
	{
		return match ($number) {
			1 => 'I',
			4 => 'IV',
			5 => 'V',
			9 => 'IX',
			10 => 'X',
			40 => 'XL',
			50 => 'L',
			90 => 'XC',
			100 => 'C',
			400 => 'CD',
			500 => 'D',
			900 => 'CM',
			1000 => 'M',
			default => false,
		};
	}

	public function getArray(int $number): array
	{
		$array = [];
		// get array of numbers from arabic number
		do {
			$low = $this->findClosesLow($number);
			$array[] = $low;
			$number -= $low;
		} while ($number > 0);

//		$nums = str_split(strrev((string)$number));
//		$array = [];
//
//		foreach ($nums as $key) {
//			$array[] = $key;
//		}

		return $array;
	}

	public function parse(int $number): string
	{
		$array = $this->getArray($number);
		$str = '';
		foreach ($array as $a) {
			$str .= $this->convert($a);
		}
		return $str;
	}

	public function findClosesLow(int $number): int|false
	{
		$var = false;

		foreach (array_reverse([1000,900, 500,400, 100,90, 50,40, 10, 5,4, 1]) as $value) {
			if ($value <= $number) {
				$var = $value;
			}
		}

		return $var;
	}

	public function findClosestHigh(int $number): int|false
	{
		$var = false;

		foreach ([1000, 500, 100, 50, 10, 5, 1] as $value) {
			if ($value > $number) {
				$var = $value;
			}
		}

		return $var;
	}
}
