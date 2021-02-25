<?php

/*
 *
 *  fnv-1a_64.inc.php
 *
 *  Fowler-Noll-Vo 1a 64 bits
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
// 0xcbf29ce484222325
// as a base 2^16 array
//

define('FNV1A_64_OFFSET_0', 0x2325);
define('FNV1A_64_OFFSET_1', 0x8422);
define('FNV1A_64_OFFSET_2', 0x9ce4);
define('FNV1A_64_OFFSET_3', 0xcbf2);

//
// Prime
//
// 2^40 + 2^8 + 0xb3
// 0x100000001b3
// as PRIME_LOW and PRIME_SHIFT
//

define('FNV1A_64_PRIME_LOW', 0x1b3);
define('FNV1A_64_PRIME_SHIFT', 8);





//
// FNV-1a 64 hash on a string
//

function fnv1a_64_str($string)
{
	// Create the offset basis as a base 2^16 array
	$hash[4];
	$hash[0] = FNV1A_64_OFFSET_0;
	$hash[1] = FNV1A_64_OFFSET_1;
	$hash[2] = FNV1A_64_OFFSET_2;
	$hash[3] = FNV1A_64_OFFSET_3;

	// If we have characters to process
	if (strlen($string) > 0) {

		// Make a character array from the string
		$string_array = str_split($string);

		// For each character
		foreach ($string_array as $chr) {

			// Xor the bottom number with the current character
			$hash[0] ^= ord($chr);

			// Multiply by the lowest order digit base 2^16
			$tmp[4];
			for ($i = 0; $i <= 3; $i++) {
				$tmp[$i] = $hash[$i] * FNV1A_64_PRIME_LOW;
			}

			// Multiply by the other non-zero digit
			for ($i = 2; $i <= 3; $i++) {
				$tmp[$i] += $hash[$i - 2] << FNV1A_64_PRIME_SHIFT;
			}

			// Propagate carries
			for ($i = 1; $i <= 3; $i++) {
				$tmp[$i] += ($tmp[$i - 1] >> 16);
			}

			// Clamp
			for ($i = 0; $i <= 3; $i++) {
				$hash[$i] = $tmp[$i] & 0xffff;
			}
		}
	}

	// Return the final hash as an hexadecimal string
	$final_hash = '';
	for ($i = 3; $i >= 0; $i--) {
		$final_hash .= str_pad(dechex($hash[$i]), 4, '0', STR_PAD_LEFT);
	}
	return $final_hash;
}

