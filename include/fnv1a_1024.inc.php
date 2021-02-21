<?php

/*
 *
 *  fnv-1a_1024.inc.php
 *
 *  Fowler-Noll-Vo 1a 1024 bits
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
// 0x5f7a76758ecc4d32e56d5a591028b74b29fc4223fdada16c3bf34eda3674da9a21d9000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000004c6d7eb6e73802734510a555f256cc005ae556bde8cc9c6a93b21aff4b16c71ee90b3
// as a base 2^16 array
//

define('FNV1A_1024_OFFSET_0', 0x90b3);
define('FNV1A_1024_OFFSET_1', 0x71ee);
define('FNV1A_1024_OFFSET_2', 0xb16c);
define('FNV1A_1024_OFFSET_3', 0xaff4);
define('FNV1A_1024_OFFSET_4', 0x3b21);
define('FNV1A_1024_OFFSET_5', 0xc6a9);
define('FNV1A_1024_OFFSET_6', 0x8cc9);
define('FNV1A_1024_OFFSET_7', 0x6bde);
define('FNV1A_1024_OFFSET_8', 0xae55);
define('FNV1A_1024_OFFSET_9', 0xc005);
define('FNV1A_1024_OFFSET_10', 0x256c);
define('FNV1A_1024_OFFSET_11', 0x555f);
define('FNV1A_1024_OFFSET_12', 0x510a);
define('FNV1A_1024_OFFSET_13', 0x2734);
define('FNV1A_1024_OFFSET_14', 0x7380);
define('FNV1A_1024_OFFSET_15', 0xeb6e);
define('FNV1A_1024_OFFSET_16', 0xc6d7);
define('FNV1A_1024_OFFSET_17', 0x0004);
define('FNV1A_1024_OFFSET_18', 0x0000);
define('FNV1A_1024_OFFSET_19', 0x0000);
define('FNV1A_1024_OFFSET_20', 0x0000);
define('FNV1A_1024_OFFSET_21', 0x0000);
define('FNV1A_1024_OFFSET_22', 0x0000);
define('FNV1A_1024_OFFSET_23', 0x0000);
define('FNV1A_1024_OFFSET_24', 0x0000);
define('FNV1A_1024_OFFSET_25', 0x0000);
define('FNV1A_1024_OFFSET_26', 0x0000);
define('FNV1A_1024_OFFSET_27', 0x0000);
define('FNV1A_1024_OFFSET_28', 0x0000);
define('FNV1A_1024_OFFSET_29', 0x0000);
define('FNV1A_1024_OFFSET_30', 0x0000);
define('FNV1A_1024_OFFSET_31', 0x0000);
define('FNV1A_1024_OFFSET_32', 0x0000);
define('FNV1A_1024_OFFSET_33', 0x0000);
define('FNV1A_1024_OFFSET_34', 0x0000);
define('FNV1A_1024_OFFSET_35', 0x0000);
define('FNV1A_1024_OFFSET_36', 0x0000);
define('FNV1A_1024_OFFSET_37', 0x0000);
define('FNV1A_1024_OFFSET_38', 0x0000);
define('FNV1A_1024_OFFSET_39', 0x0000);
define('FNV1A_1024_OFFSET_40', 0x0000);
define('FNV1A_1024_OFFSET_41', 0x0000);
define('FNV1A_1024_OFFSET_42', 0xd900);
define('FNV1A_1024_OFFSET_43', 0x9a21);
define('FNV1A_1024_OFFSET_44', 0x74da);
define('FNV1A_1024_OFFSET_45', 0xda36);
define('FNV1A_1024_OFFSET_46', 0xf34e);
define('FNV1A_1024_OFFSET_47', 0x6c3b);
define('FNV1A_1024_OFFSET_48', 0xada1);
define('FNV1A_1024_OFFSET_49', 0x23fd);
define('FNV1A_1024_OFFSET_50', 0xfc42);
define('FNV1A_1024_OFFSET_51', 0x4b29);
define('FNV1A_1024_OFFSET_52', 0x28b7);
define('FNV1A_1024_OFFSET_53', 0x5910);
define('FNV1A_1024_OFFSET_54', 0x6d5a);
define('FNV1A_1024_OFFSET_55', 0x32e5);
define('FNV1A_1024_OFFSET_56', 0xcc4d);
define('FNV1A_1024_OFFSET_57', 0x758e);
define('FNV1A_1024_OFFSET_58', 0x7a76);
define('FNV1A_1024_OFFSET_59', 0x005f);
define('FNV1A_1024_OFFSET_60', 0x0000);
define('FNV1A_1024_OFFSET_61', 0x0000);
define('FNV1A_1024_OFFSET_62', 0x0000);
define('FNV1A_1024_OFFSET_63', 0x0000);

//
// Prime
//
// 2^680 + 2^8 + 0x8d
// 0x10000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000018d
// as PRIME_LOW and PRIME_SHIFT
//

define('FNV1A_1024_PRIME_LOW', 0x18d);
define('FNV1A_1024_PRIME_SHIFT', 8);





//
// FNV-1a 1024 hash on a string
//

function fnv1a_1024_str($string)
{
	// Create the offset basis as a base 2^16 array
    $hash[64];
    $hash[0] = FNV1A_1024_OFFSET_0;
    $hash[1] = FNV1A_1024_OFFSET_1;
    $hash[2] = FNV1A_1024_OFFSET_2;
    $hash[3] = FNV1A_1024_OFFSET_3;
    $hash[4] = FNV1A_1024_OFFSET_4;
    $hash[5] = FNV1A_1024_OFFSET_5;
    $hash[6] = FNV1A_1024_OFFSET_6;
    $hash[7] = FNV1A_1024_OFFSET_7;
    $hash[8] = FNV1A_1024_OFFSET_8;
    $hash[9] = FNV1A_1024_OFFSET_9;
    $hash[10] = FNV1A_1024_OFFSET_10;
    $hash[11] = FNV1A_1024_OFFSET_11;
    $hash[12] = FNV1A_1024_OFFSET_12;
    $hash[13] = FNV1A_1024_OFFSET_13;
    $hash[14] = FNV1A_1024_OFFSET_14;
    $hash[15] = FNV1A_1024_OFFSET_15;
    $hash[16] = FNV1A_1024_OFFSET_16;
    $hash[17] = FNV1A_1024_OFFSET_17;
    $hash[18] = FNV1A_1024_OFFSET_18;
    $hash[19] = FNV1A_1024_OFFSET_19;
    $hash[20] = FNV1A_1024_OFFSET_20;
    $hash[21] = FNV1A_1024_OFFSET_21;
    $hash[22] = FNV1A_1024_OFFSET_22;
    $hash[23] = FNV1A_1024_OFFSET_23;
    $hash[24] = FNV1A_1024_OFFSET_24;
    $hash[25] = FNV1A_1024_OFFSET_25;
    $hash[26] = FNV1A_1024_OFFSET_26;
    $hash[27] = FNV1A_1024_OFFSET_27;
    $hash[28] = FNV1A_1024_OFFSET_28;
    $hash[29] = FNV1A_1024_OFFSET_29;
    $hash[30] = FNV1A_1024_OFFSET_30;
    $hash[31] = FNV1A_1024_OFFSET_31;
    $hash[32] = FNV1A_1024_OFFSET_32;
    $hash[33] = FNV1A_1024_OFFSET_33;
    $hash[34] = FNV1A_1024_OFFSET_34;
    $hash[35] = FNV1A_1024_OFFSET_35;
    $hash[36] = FNV1A_1024_OFFSET_36;
    $hash[37] = FNV1A_1024_OFFSET_37;
    $hash[38] = FNV1A_1024_OFFSET_38;
    $hash[39] = FNV1A_1024_OFFSET_39;
    $hash[40] = FNV1A_1024_OFFSET_40;
    $hash[41] = FNV1A_1024_OFFSET_41;
    $hash[42] = FNV1A_1024_OFFSET_42;
    $hash[43] = FNV1A_1024_OFFSET_43;
    $hash[44] = FNV1A_1024_OFFSET_44;
    $hash[45] = FNV1A_1024_OFFSET_45;
    $hash[46] = FNV1A_1024_OFFSET_46;
    $hash[47] = FNV1A_1024_OFFSET_47;
    $hash[48] = FNV1A_1024_OFFSET_48;
    $hash[49] = FNV1A_1024_OFFSET_49;
    $hash[50] = FNV1A_1024_OFFSET_50;
    $hash[51] = FNV1A_1024_OFFSET_51;
    $hash[52] = FNV1A_1024_OFFSET_52;
    $hash[53] = FNV1A_1024_OFFSET_53;
    $hash[54] = FNV1A_1024_OFFSET_54;
    $hash[55] = FNV1A_1024_OFFSET_55;
    $hash[56] = FNV1A_1024_OFFSET_56;
    $hash[57] = FNV1A_1024_OFFSET_57;
    $hash[58] = FNV1A_1024_OFFSET_58;
    $hash[59] = FNV1A_1024_OFFSET_59;
    $hash[60] = FNV1A_1024_OFFSET_60;
    $hash[61] = FNV1A_1024_OFFSET_61;
    $hash[62] = FNV1A_1024_OFFSET_62;
    $hash[63] = FNV1A_1024_OFFSET_63;

	// If we have characters to process
	if (strlen($string) > 0) {

		// Make a character array from the string
		$string_array = str_split($string);

		// For each character
		foreach ($string_array as $chr) {

			// Xor the bottom number with the current character
			$hash[0] ^= ord($chr);

			// Multiply by the lowest order digit base 2^16
			$tmp[64];
			for ($i = 0; $i <= 63; $i++) {
				$tmp[$i] = $hash[$i] * FNV1A_1024_PRIME_LOW;
			}

			// Multiply by the other non-zero digit
			for ($i = 42; $i <= 63; $i++) {
				$tmp[$i] += $hash[$i - 42] << FNV1A_1024_PRIME_SHIFT;
			}

			// Propagate carries
			for ($i = 1; $i <= 63; $i++) {
				$tmp[$i] += ($tmp[$i - 1] >> 16);
			}

			// Clamp
			for ($i = 0; $i <= 63; $i++) {
				$hash[$i] = $tmp[$i] & 0xffff;
			}
		}
	}

	// Return the final hash as an hexadecimal string
	$final_hash = '';
	for ($i = 63; $i >= 0; $i--) {
		$final_hash .= str_pad(dechex($hash[$i]), 4, '0', STR_PAD_LEFT);
	}
	return $final_hash;
}

