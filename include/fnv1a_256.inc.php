<?php

/*
 *
 *  fnv-1a_256.inc.php
 *
 *  Fowler-Noll-Vo 1a 256 bits
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
// 0xdd268dbcaac550362d98c384c4e576ccc8b1536847b6bbb31023b4c8caee0535
// as a base 2^16 array
//

define('FNV1A_256_OFFSET_0', 0x0535);
define('FNV1A_256_OFFSET_1', 0xcaee);
define('FNV1A_256_OFFSET_2', 0xb4c8);
define('FNV1A_256_OFFSET_3', 0x1023);
define('FNV1A_256_OFFSET_4', 0xbbb3);
define('FNV1A_256_OFFSET_5', 0x47b6);
define('FNV1A_256_OFFSET_6', 0x5368);
define('FNV1A_256_OFFSET_7', 0xc8b1);
define('FNV1A_256_OFFSET_8', 0x76cc);
define('FNV1A_256_OFFSET_9', 0xc4e5);
define('FNV1A_256_OFFSET_10', 0xc384);
define('FNV1A_256_OFFSET_11', 0x2d98);
define('FNV1A_256_OFFSET_12', 0x5036);
define('FNV1A_256_OFFSET_13', 0xaac5);
define('FNV1A_256_OFFSET_14', 0x8dbc);
define('FNV1A_256_OFFSET_15', 0xdd26);

//
// Prime
//
// 2^168 + 2^8 + 0x63
// 0x1000000000000000000000000000000000000000163
// as PRIME_LOW and PRIME_SHIFT
//

define('FNV1A_256_PRIME_LOW', 0x163);
define('FNV1A_256_PRIME_SHIFT', 8);





//
// FNV-1a 256 hash on a string
//

function fnv1a_256_str($string)
{
	// Create the offset basis as a base 2^16 array
    $hash[16];
    $hash[0] = FNV1A_256_OFFSET_0;
    $hash[1] = FNV1A_256_OFFSET_1;
    $hash[2] = FNV1A_256_OFFSET_2;
    $hash[3] = FNV1A_256_OFFSET_3;
    $hash[4] = FNV1A_256_OFFSET_4;
    $hash[5] = FNV1A_256_OFFSET_5;
    $hash[6] = FNV1A_256_OFFSET_6;
    $hash[7] = FNV1A_256_OFFSET_7;
    $hash[8] = FNV1A_256_OFFSET_8;
    $hash[9] = FNV1A_256_OFFSET_9;
    $hash[10] = FNV1A_256_OFFSET_10;
    $hash[11] = FNV1A_256_OFFSET_11;
    $hash[12] = FNV1A_256_OFFSET_12;
    $hash[13] = FNV1A_256_OFFSET_13;
    $hash[14] = FNV1A_256_OFFSET_14;
    $hash[15] = FNV1A_256_OFFSET_15;

	// If we have characters to process
	if (strlen($string) > 0) {

		// Make a character array from the string
		$string_array = str_split($string);

		// For each character
		foreach ($string_array as $chr) {

			// Xor the bottom number with the current character
			$hash[0] ^= ord($chr);

			// Multiply by the lowest order digit base 2^16
			$tmp[16];
			for ($i = 0; $i <= 15; $i++) {
				$tmp[$i] = $hash[$i] * FNV1A_256_PRIME_LOW;
			}

			// Multiply by the other non-zero digit
			for ($i = 10; $i <= 15; $i++) {
				$tmp[$i] += $hash[$i - 10] << FNV1A_256_PRIME_SHIFT;
			}

			// Propagate carries
			for ($i = 1; $i <= 15; $i++) {
				$tmp[$i] += ($tmp[$i - 1] >> 16);
			}

			// Clamp
			for ($i = 0; $i <= 15; $i++) {
				$hash[$i] = $tmp[$i] & 0xffff;
			}
		}
	}

	// Return the final hash as an hexadecimal string
	$final_hash = '';
	for ($i = 15; $i >= 0; $i--) {
		$final_hash .= str_pad(dechex($hash[$i]), 4, '0', STR_PAD_LEFT);
	}
	return $final_hash;
}

