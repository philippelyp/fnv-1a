<?php

/*
 *
 *  test_vectors.php
 *
 *  Fowler-Noll-Vo 1a
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
// includes
//

require_once('include/fnv1a_32.inc.php');
require_once('include/fnv1a_64.inc.php');
require_once('include/fnv1a_128.inc.php');
require_once('include/fnv1a_256.inc.php');
require_once('include/fnv1a_512.inc.php');
require_once('include/fnv1a_1024.inc.php');





//
// 32 bits test vectors
//

$fnv1a_32_vectors = array(	'' =>			'811c9dc5',
							'a' =>			'e40c292c',
							'b' =>			'e70c2de5',
							'c' =>			'e60c2c52',
							'd' =>			'e10c2473',
							'e' =>			'e00c22e0',
							'f' =>			'e30c2799',
							'fo' =>			'6222e842',
							'foo' =>		'a9f37ed7',
							'foob' =>		'3f5076ef',
							'fooba' =>		'39aaa18a',
							'foobar' =>		'bf9cf968');

//
// 64 bits test vectors
//

$fnv1a_64_vectors = array(	'' =>			'cbf29ce484222325',
							'a' =>			'af63dc4c8601ec8c',
							'b' =>			'af63df4c8601f1a5',
							'c' =>			'af63de4c8601eff2',
							'd' =>			'af63d94c8601e773',
							'e' =>			'af63d84c8601e5c0',
							'f' =>			'af63db4c8601ead9',
							'fo' =>			'08985907b541d342',
							'foo' =>		'dcb27518fed9d577',
							'foob' =>		'dd120e790c2512af',
							'fooba' =>		'cac165afa2fef40a',
							'foobar' =>		'85944171f73967e8');

//
// 128 bits test vectors
//

$fnv1a_128_vectors = array(	'' =>			'6c62272e07bb014262b821756295c58d',
							'a' =>			'd228cb696f1a8caf78912b704e4a8964',
							'b' =>			'd228cb69721a8caf78912b704e4a8d15',
							'c' =>			'd228cb69711a8caf78912b704e4a8bda',
							'd' =>			'd228cb696c1a8caf78912b704e4a85b3',
							'e' =>			'd228cb696b1a8caf78912b704e4a8478',
							'f' =>			'd228cb696e1a8caf78912b704e4a8829',
							'fo' =>			'08809542c0ab1be95aa0733055b5ae22',
							'foo' =>		'a68d5ed15f8b5822836dbc79768d78bf',
							'foob' =>		'696a39196d757277b806e974e013b7ef',
							'fooba' =>		'2a9456013d83d94f708142cfb842dbba',
							'foobar' =>		'343e1662793c64bf6f0d3597ba446f18');

//
// 256 bits test vectors
//

$fnv1a_256_vectors = array(	'' =>			'dd268dbcaac550362d98c384c4e576ccc8b1536847b6bbb31023b4c8caee0535',
							'a' =>			'63323fb0f35303ec28dc751d0a33bdfa4de6a99b7266494f6183b2716811637c',
							'b' =>			'63323fb0f35303ec28dc781d0a33bdfa4de6a99b7266494f6183b271681167a5',
							'c' =>			'63323fb0f35303ec28dc771d0a33bdfa4de6a99b7266494f6183b27168116642',
							'd' =>			'63323fb0f35303ec28dc721d0a33bdfa4de6a99b7266494f6183b27168115f53',
							'e' =>			'63323fb0f35303ec28dc711d0a33bdfa4de6a99b7266494f6183b27168115df0',
							'f' =>			'63323fb0f35303ec28dc741d0a33bdfa4de6a99b7266494f6183b27168116219',
							'fo' =>			'f4f7a1c2efd0e1e4bb177a4525c0721a06dd328fa3d7a91439a07343501b89a2',
							'foo' =>		'8b0e658c2f1c837f8d185ae359de3a1784bd1d30340f770be97fd65816301747',
							'foob' =>		'e46ddd4ed460b1f6d8dd2e459f2a8e9d123f79d831721584cc463c26c4b0184f',
							'fooba' =>		'366f691cc852f0136acf588bb803c3d04e05f6cc9133d727456569c2c03187ca',
							'foobar' =>		'b055ea2f306cadad4f0f81c02d3889dc32453dad5ae35b753ba1a91084af3428');

//
// 512 bits test vectors
//

$fnv1a_512_vectors = array(	'' =>			'b86db0b1171f4416dca1e50f309990acac87d059c90000000000000000000d21e948f68a34c192f62ea79bc942dbe7ce182036415f56e34bac982aac4afe9fd9',
							'a' =>			'e43a992dc8fc5ad7de493e3d696d6f85d64326ec07000000000000000011986f90c2532caf5be7d88291baa894a395225328b196bd6a8a643fe12cd87b27ff88',
							'b' =>			'e43a992dc8fc5ad7de493e3d696d6f85d64326ec0a000000000000000011986f90c2532caf5be7d88291baa894a395225328b196bd6a8a643fe12cd87b28038d',
							'c' =>			'e43a992dc8fc5ad7de493e3d696d6f85d64326ec09000000000000000011986f90c2532caf5be7d88291baa894a395225328b196bd6a8a643fe12cd87b280236',
							'd' =>			'e43a992dc8fc5ad7de493e3d696d6f85d64326ec0c000000000000000011986f90c2532caf5be7d88291baa894a395225328b196bd6a8a643fe12cd87b28063b',
							'e' =>			'e43a992dc8fc5ad7de493e3d696d6f85d64326ec0b000000000000000011986f90c2532caf5be7d88291baa894a395225328b196bd6a8a643fe12cd87b2804e4',
							'f' =>			'e43a992dc8fc5ad7de493e3d696d6f85d64326ec0e000000000000000011986f90c2532caf5be7d88291baa894a395225328b196bd6a8a643fe12cd87b2808e9',
							'fo' =>			'7317dfed6c70dfec6adfced2a5e04d7eec744e4f480000000000000017933d7af45d70def423a316f14117df272cd0fd6b85f0f7c9bf6c5196b3160d02a36b8a',
							'foo' =>		'142433ed48a78bb429a7dba8911e8824dcd78fa55d0000000000001f96475fbd69323ab91bbf83bd3e36fbfd7d0c038b1075dbff4f7a2150e9f28b6e88f58fd3',
							'foob' =>		'f9fe9eefe38ca43fcf36c8fbc0d25bef535a6c1f4c00000000002a5259a146c7f24cae042d99828e5baba0a28b18bf530de9c3137ca2a36973f8d11981038627',
							'fooba' =>		'96b20c29347dfb41b5e3ebf2c34d2679c7a7e1751a0000000038b4561715d5e5a4bd279918adecbcd2f439c85e285847a4345f1bfde8f24a6260292bdbb8e7ca',
							'foobar' =>		'b0ec738d9c6fd969d05f0b35f6c0ed53adcacccd8e0000004bf99f58ee4196afb9700e20110830fea5396b76280e47fd022b6e81331ca1a9ced729c364be7788');

//
// 1024 bits test vectors
//

$fnv1a_1024_vectors = array(	'' =>			'0000000000000000005f7a76758ecc4d32e56d5a591028b74b29fc4223fdada16c3bf34eda3674da9a21d9000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000004c6d7eb6e73802734510a555f256cc005ae556bde8cc9c6a93b21aff4b16c71ee90b3',
								'a' =>			'000000000000000098d7c19fbce653df221b9f717d3490ff95ca87fdaef30d1b823372f85b24a372f50e570000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000007685cd81a491dbccc21ad06648d09a5c8cf5a78482054e91470b33dde77252caef695aa',
								'b' =>			'000000000000000098d7c19fbce653df221b9f717d3490ff95ca87fdaef30d1b823372f85b24a372f50e560000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000007685cd81a491dbccc21ad06648d09a5c8cf5a78482054e91470b33dde77252caef6941d',
								'c' =>			'000000000000000098d7c19fbce653df221b9f717d3490ff95ca87fdaef30d1b823372f85b24a372f50e550000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000007685cd81a491dbccc21ad06648d09a5c8cf5a78482054e91470b33dde77252caef69290',
								'd' =>			'000000000000000098d7c19fbce653df221b9f717d3490ff95ca87fdaef30d1b823372f85b24a372f50e5c0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000007685cd81a491dbccc21ad06648d09a5c8cf5a78482054e91470b33dde77252caef69d6b',
								'e' =>			'000000000000000098d7c19fbce653df221b9f717d3490ff95ca87fdaef30d1b823372f85b24a372f50e5b0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000007685cd81a491dbccc21ad06648d09a5c8cf5a78482054e91470b33dde77252caef69bde',
								'f' =>			'000000000000000098d7c19fbce653df221b9f717d3490ff95ca87fdaef30d1b823372f85b24a372f50e5a0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000007685cd81a491dbccc21ad06648d09a5c8cf5a78482054e91470b33dde77252caef69a51',
								'fo' =>			'00000000000000f46ef41cd23a4dcdd406834963b78e82241a6f5cb06f403cbd5a7c8903cef6a5f4fddbd00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000b7cd7fb20c3631dc8903952e9eeb7f618698f4c87da23ad74b2c5f6f1fec4a64b546d3226',
								'foo' =>		'000000000001868ce88bd2c7cdc5fa5e52ebb9925ff5ea668dff4576aa4ba65819176ce6b925a8421b13d9000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000011d09af071cf00b53007a8e594c73348a3dbb339aead4953fdf93cfff54816f5e2d1ed56fb35',
								'foob' =>		'00000000026f791f9147aedad1354bef7d238f3219005cbd6e8d664f6b4eefdbe94929e41548c07154c2dc000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001ba08046e07e0418fb7be0ec07b8ea87a61bb4f073e2bab740db8398ef60cb9b50bf8d0fe3c5eb',
								'fooba' =>		'00000003e27f563b2ca82d6f6b22a35117ddfb386bab86b4e52a63e0aa457ba1b5d6c2505291fcd055f4b60000000000000000000000000000000000000000000000000000000000000000000000000000000000000000002ad7e6edea236c5abdff1bce07f9c3b45c98f798e3b69b8e2f946b142b391bbfdc390dc1a4395702',
								'foobar' =>		'00000631175fa7ae643ad08723d312c9fd024adb91f77f6b19587197a22bcdf23727166c4572d0b985d5ae00000000000000000000000000000000000000000000000000000000000000000000000000000000000000004270d11ef418ef08b8a49e1e825e547eb39937f819222f3b7fc92a0e4707900888847a554bacec98b0');





//
// Test vectors for 32 bits
//

function test_vectors_32()
{
	global $fnv1a_32_vectors;

	// The test pass unless we have at least one fail
	$failed = FALSE;

	// Go through test vectors
	foreach($fnv1a_32_vectors as $string => $result) {
		if (fnv1a_32_str($string) != $result) {
			echo 'fnv1a_32_str test failed for "' . $string . '"' . PHP_EOL;
			echo fnv1a_32_str($string) . ' returned' . PHP_EOL;
			echo $result . ' expected' . PHP_EOL;
			$failed = TRUE;
		}
	}

	// Check results
	if (FALSE == $failed) {
		echo 'fnv1a_32_str successfully tested' . PHP_EOL;
	}
}



//
// Test vectors for 64 bits
//

function test_vectors_64()
{
	global $fnv1a_64_vectors;

	// The test pass unless we have at least one fail
	$failed = FALSE;

	// Go through test vectors
	foreach($fnv1a_64_vectors as $string => $result) {
		if (fnv1a_64_str($string) != $result) {
			echo 'fnv1a_64_str test failed for "' . $string . '"' . PHP_EOL;
			echo fnv1a_64_str($string) . ' returned' . PHP_EOL;
			echo $result . ' expected' . PHP_EOL;
			$failed = TRUE;
		}
	}

	// Check results
	if (FALSE == $failed) {
		echo 'fnv1a_64_str successfully tested' . PHP_EOL;
	}
}



//
// Test vectors for 128 bits
//

function test_vectors_128()
{
	global $fnv1a_128_vectors;

	// The test pass unless we have at least one fail
	$failed = FALSE;

	// Go through test vectors
	foreach($fnv1a_128_vectors as $string => $result) {
		if (fnv1a_128_str($string) != $result) {
			echo 'fnv1a_128_str test failed for "' . $string . '"' . PHP_EOL;
			echo fnv1a_128_str($string) . ' returned' . PHP_EOL;
			echo $result . ' expected' . PHP_EOL;
			$failed = TRUE;
		}
	}

	// Check results
	if (FALSE == $failed) {
		echo 'fnv1a_128_str successfully tested' . PHP_EOL;
	}
}



//
// Test vectors for 256 bits
//

function test_vectors_256()
{
	global $fnv1a_256_vectors;

	// The test pass unless we have at least one fail
	$failed = FALSE;

	// Go through test vectors
	foreach($fnv1a_256_vectors as $string => $result) {
		if (fnv1a_256_str($string) != $result) {
			echo 'fnv1a_256_str test failed for "' . $string . '"' . PHP_EOL;
			echo fnv1a_256_str($string) . ' returned' . PHP_EOL;
			echo $result . ' expected' . PHP_EOL;
			$failed = TRUE;
		}
	}

	// Check results
	if (FALSE == $failed) {
		echo 'fnv1a_256_str successfully tested' . PHP_EOL;
	}
}



//
// Test vectors for 512 bits
//

function test_vectors_512()
{
	global $fnv1a_512_vectors;

	// The test pass unless we have at least one fail
	$failed = FALSE;

	// Go through test vectors
	foreach($fnv1a_512_vectors as $string => $result) {
		if (fnv1a_512_str($string) != $result) {
			echo 'fnv1a_512_str test failed for "' . $string . '"' . PHP_EOL;
			echo fnv1a_512_str($string) . ' returned' . PHP_EOL;
			echo $result . ' expected' . PHP_EOL;
			$failed = TRUE;
		}
	}

	// Check results
	if (FALSE == $failed) {
		echo 'fnv1a_512_str successfully tested' . PHP_EOL;
	}
}



//
// Test vectors for 1024 bits
//

function test_vectors_1024()
{
	global $fnv1a_1024_vectors;

	// The test pass unless we have at least one fail
	$failed = FALSE;

	// Go through test vectors
	foreach($fnv1a_1024_vectors as $string => $result) {
		if (fnv1a_1024_str($string) != $result) {
			echo 'fnv1a_1024_str test failed for "' . $string . '"' . PHP_EOL;
			echo fnv1a_1024_str($string) . ' returned' . PHP_EOL;
			echo $result . ' expected' . PHP_EOL;
			$failed = TRUE;
		}
	}

	// Check results
	if (FALSE == $failed) {
		echo 'fnv1a_1024_str successfully tested' . PHP_EOL;
	}
}





//
// Test vectors
//

test_vectors_32();
test_vectors_64();
test_vectors_128();
test_vectors_256();
test_vectors_512();
test_vectors_1024();
