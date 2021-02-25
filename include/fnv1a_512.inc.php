<?php

/*
 *
 *  fnv-1a_512.inc.php
 *
 *  Fowler-Noll-Vo 1a 512 bits
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
// 0xb86db0b1171f4416dca1e50f309990acac87d059c90000000000000000000d21e948f68a34c192f62ea79bc942dbe7ce182036415f56e34bac982aac4afe9fd9
// as a base 2^16 array
//

define('FNV1A_512_OFFSET_0', 0x9fd9);
define('FNV1A_512_OFFSET_1', 0x4afe);
define('FNV1A_512_OFFSET_2', 0x2aac);
define('FNV1A_512_OFFSET_3', 0xac98);
define('FNV1A_512_OFFSET_4', 0xe34b);
define('FNV1A_512_OFFSET_5', 0x5f56);
define('FNV1A_512_OFFSET_6', 0x3641);
define('FNV1A_512_OFFSET_7', 0x1820);
define('FNV1A_512_OFFSET_8', 0xe7ce);
define('FNV1A_512_OFFSET_9', 0x42db);
define('FNV1A_512_OFFSET_10', 0x9bc9);
define('FNV1A_512_OFFSET_11', 0x2ea7);
define('FNV1A_512_OFFSET_12', 0x92f6);
define('FNV1A_512_OFFSET_13', 0x34c1);
define('FNV1A_512_OFFSET_14', 0xf68a);
define('FNV1A_512_OFFSET_15', 0xe948);
define('FNV1A_512_OFFSET_16', 0x0d21);
define('FNV1A_512_OFFSET_17', 0x0000);
define('FNV1A_512_OFFSET_18', 0x0000);
define('FNV1A_512_OFFSET_19', 0x0000);
define('FNV1A_512_OFFSET_20', 0x0000);
define('FNV1A_512_OFFSET_21', 0xc900);
define('FNV1A_512_OFFSET_22', 0xd059);
define('FNV1A_512_OFFSET_23', 0xac87);
define('FNV1A_512_OFFSET_24', 0x90ac);
define('FNV1A_512_OFFSET_25', 0x3099);
define('FNV1A_512_OFFSET_26', 0xe50f);
define('FNV1A_512_OFFSET_27', 0xdca1);
define('FNV1A_512_OFFSET_28', 0x4416);
define('FNV1A_512_OFFSET_29', 0x171f);
define('FNV1A_512_OFFSET_30', 0xb0b1);
define('FNV1A_512_OFFSET_31', 0xb86d);

//
// Prime
//
// 2^344 + 2^8 + 0x57
// 0x100000000000000000000000000000000000000000000000000000000000000000000000000000000000157
// as PRIME_LOW and PRIME_SHIFT
//

define('FNV1A_512_PRIME_LOW', 0x157);
define('FNV1A_512_PRIME_SHIFT', 8);





//
// FNV-1a 512 hash on a string
//

function fnv1a_512_str($string)
{
	// Create the offset basis as a base 2^16 array
	$hash[32];
	$hash[0] = FNV1A_512_OFFSET_0;
	$hash[1] = FNV1A_512_OFFSET_1;
	$hash[2] = FNV1A_512_OFFSET_2;
	$hash[3] = FNV1A_512_OFFSET_3;
	$hash[4] = FNV1A_512_OFFSET_4;
	$hash[5] = FNV1A_512_OFFSET_5;
	$hash[6] = FNV1A_512_OFFSET_6;
	$hash[7] = FNV1A_512_OFFSET_7;
	$hash[8] = FNV1A_512_OFFSET_8;
	$hash[9] = FNV1A_512_OFFSET_9;
	$hash[10] = FNV1A_512_OFFSET_10;
	$hash[11] = FNV1A_512_OFFSET_11;
	$hash[12] = FNV1A_512_OFFSET_12;
	$hash[13] = FNV1A_512_OFFSET_13;
	$hash[14] = FNV1A_512_OFFSET_14;
	$hash[15] = FNV1A_512_OFFSET_15;
	$hash[16] = FNV1A_512_OFFSET_16;
	$hash[17] = FNV1A_512_OFFSET_17;
	$hash[18] = FNV1A_512_OFFSET_18;
	$hash[19] = FNV1A_512_OFFSET_19;
	$hash[20] = FNV1A_512_OFFSET_20;
	$hash[21] = FNV1A_512_OFFSET_21;
	$hash[22] = FNV1A_512_OFFSET_22;
	$hash[23] = FNV1A_512_OFFSET_23;
	$hash[24] = FNV1A_512_OFFSET_24;
	$hash[25] = FNV1A_512_OFFSET_25;
	$hash[26] = FNV1A_512_OFFSET_26;
	$hash[27] = FNV1A_512_OFFSET_27;
	$hash[28] = FNV1A_512_OFFSET_28;
	$hash[29] = FNV1A_512_OFFSET_29;
	$hash[30] = FNV1A_512_OFFSET_30;
	$hash[31] = FNV1A_512_OFFSET_31;

	// If we have characters to process
	if (strlen($string) > 0) {

		// Make a character array from the string
		$string_array = str_split($string);

		// For each character
		foreach ($string_array as $chr) {

			// Xor the bottom number with the current character
			$hash[0] ^= ord($chr);

			// Multiply by the lowest order digit base 2^16
			$tmp[32];
			for ($i = 0; $i <= 31; $i++) {
				$tmp[$i] = $hash[$i] * FNV1A_512_PRIME_LOW;
			}

			// Multiply by the other non-zero digit
			for ($i = 21; $i <= 31; $i++) {
				$tmp[$i] += $hash[$i - 21] << FNV1A_512_PRIME_SHIFT;
			}

			// Propagate carries
			for ($i = 1; $i <= 32; $i++) {
				$tmp[$i] += ($tmp[$i - 1] >> 16);
			}

			// Clamp
			for ($i = 0; $i <= 31; $i++) {
				$hash[$i] = $tmp[$i] & 0xffff;
			}
		}
	}

	// Return the final hash as an hexadecimal string
	$final_hash = '';
	for ($i = 31; $i >= 0; $i--) {
		$final_hash .= str_pad(dechex($hash[$i]), 4, '0', STR_PAD_LEFT);
	}
	return $final_hash;
}

