<?php

/*
 *
 *  fnv-1a_128.inc.php
 *
 *  Fowler-Noll-Vo 1a 128 bits
 *
 *  Copyright 2017-2021 Philippe Paquet
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */





//
// Offset basis
//
// 0x6c62272e07bb014262b821756295c58d
// as a base 2^16 array
//

define('FNV1A_128_OFFSET_0', 0xc58d);
define('FNV1A_128_OFFSET_1', 0x6295);
define('FNV1A_128_OFFSET_2', 0x2175);
define('FNV1A_128_OFFSET_3', 0x62b8);
define('FNV1A_128_OFFSET_4', 0x0142);
define('FNV1A_128_OFFSET_5', 0x07bb);
define('FNV1A_128_OFFSET_6', 0x272e);
define('FNV1A_128_OFFSET_7', 0x6c62);

//
// Prime
//
// 2^88 + 2^8 + 0x3b
// 0x1000000000000000000013b
// as PRIME_LOW and PRIME_SHIFT
//

define('FNV1A_128_PRIME_LOW', 0x13b);
define('FNV1A_128_PRIME_SHIFT', 8);





//
// FNV-1a 128 hash on a string
//

function fnv1a_128_str($string)
{
	// Create the offset basis as a base 2^16 array
    $hash[8];
    $hash[0] = FNV1A_128_OFFSET_0;
    $hash[1] = FNV1A_128_OFFSET_1;
    $hash[2] = FNV1A_128_OFFSET_2;
    $hash[3] = FNV1A_128_OFFSET_3;
    $hash[4] = FNV1A_128_OFFSET_4;
    $hash[5] = FNV1A_128_OFFSET_5;
    $hash[6] = FNV1A_128_OFFSET_6;
    $hash[7] = FNV1A_128_OFFSET_7;

	// If we have characters to process
	if (strlen($string) > 0) {

		// Make a character array from the string
		$string_array = str_split($string);

		// For each character
		foreach ($string_array as $chr) {

			// Xor the bottom number with the current character
			$hash[0] ^= ord($chr);

			// Multiply by the lowest order digit base 2^16
			$tmp[8];
			for ($i = 0; $i <= 7; $i++) {
				$tmp[$i] = $hash[$i] * FNV1A_128_PRIME_LOW;
			}

			// Multiply by the other non-zero digit
			for ($i = 5; $i <= 7; $i++) {
				$tmp[$i] += $hash[$i - 5] << FNV1A_128_PRIME_SHIFT;
			}

			// Propagate carries
			for ($i = 1; $i <= 7; $i++) {
				$tmp[$i] += ($tmp[$i - 1] >> 16);
			}

			// Clamp
			for ($i = 0; $i <= 7; $i++) {
				$hash[$i] = $tmp[$i] & 0xffff;
			}
		}
	}

	// Return the final hash as an hexadecimal string
	$final_hash = '';
	for ($i = 7; $i >= 0; $i--) {
		$final_hash .= str_pad(dechex($hash[$i]), 4, '0', STR_PAD_LEFT);
	}
	return $final_hash;
}

