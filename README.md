# PHP implementation of Fowler–Noll–Vo 1a
Copyright 2017-2021 Philippe Paquet

---

### Description

Fowler–Noll–Vo 1a is a variant of the non-cryptographic hash function created by Glenn Fowler, Landon Curt Noll, and Kiem-Phong Vo.  

For the specifications, check the [IETF draft](https://tools.ietf.org/html/draft-eastlake-fnv-13).  

For some history, check [Landon Curt Noll website](http://www.isthe.com/chongo/tech/comp/fnv/index.html#history)

This implementation of FNV 1a includes all the specified bit sizes (32, 64, 128, 256, 512 and 1024 bits) and includes a set of test vectors.

---

### Usage

Include the header corresponding to the bit size required:

```php
require_once('include/fnv1a_32.inc.php');		// 32 bits
require_once('include/fnv1a_64.inc.php');		// 64 bits
require_once('include/fnv1a_128.inc.php');		// 128 bits
require_once('include/fnv1a_256.inc.php');		// 256 bits
require_once('include/fnv1a_512.inc.php');		// 512 bits
require_once('include/fnv1a_1024.inc.php');		// 1024 bits
```

Call the function corresponding to the bit size required:

```php
function fnv1a_32_str($string);		// 32 bits
function fnv1a_64_str($string);		// 64 bits
function fnv1a_128_str($string);	// 128 bits
function fnv1a_256_str($string);	// 256 bits
function fnv1a_512_str($string);	// 512 bits
function fnv1a_1024_str($string);	// 1024 bits
```

The functions take a string as input parameter and returns an hexadecimal string.

---

### Example

```php
<?php

require_once('include/fnv1a_32.inc.php');
require_once('include/fnv1a_64.inc.php');
require_once('include/fnv1a_128.inc.php');

$string = 'foobar';

echo 'String: ' . $string . PHP_EOL;
echo PHP_EOL;
echo 'FNV1a 32 bits: ' . fnv1a_32_str($string) . PHP_EOL;
echo 'FNV1a 64 bits: ' . fnv1a_64_str($string) . PHP_EOL;
echo 'FNV1a 128 bits: ' . fnv1a_128_str($string) . PHP_EOL;
```

Will display the following:

```
String: foobar

FNV1a 32 bits: bf9cf968
FNV1a 64 bits: 85944171f73967e8
FNV1a 128 bits: 343e1662793c64bf6f0d3597ba446f18
```

---

### Test vectors

You can use `test_vectors.php` to test the implementation:

```
php test_vectors.php
```

Should return the following:

```
fnv1a_32_str successfully tested
fnv1a_64_str successfully tested
fnv1a_128_str successfully tested
fnv1a_256_str successfully tested
fnv1a_512_str successfully tested
fnv1a_1024_str successfully tested
```

---

### Contributing

Bug reports and suggestions for improvements are most welcome.

---

### Contact

If you have any questions, comments or suggestions, do not hesitate to contact me at philippe@paquet.email
