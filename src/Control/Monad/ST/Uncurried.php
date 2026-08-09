<?php

$mkSTFn1 = function($fn) use (&$mkSTFn1) {
    return function($x) use ($fn) { return $fn($x)(); };
};
$mkSTFn2 = function($fn) use (&$mkSTFn2) {
    return function($a, $b) use ($fn) { return $fn($a)($b)(); };
};
$mkSTFn3 = function($fn) use (&$mkSTFn3) {
    return function($a, $b, $c) use ($fn) { return $fn($a)($b)($c)(); };
};
$mkSTFn4 = function($fn) use (&$mkSTFn4) {
    return function($a, $b, $c, $d) use ($fn) { return $fn($a)($b)($c)($d)(); };
};
$mkSTFn5 = function($fn) use (&$mkSTFn5) {
    return function($a, $b, $c, $d, $e) use ($fn) { return $fn($a)($b)($c)($d)($e)(); };
};
$mkSTFn6 = function($fn) use (&$mkSTFn6) {
    return function($a, $b, $c, $d, $e, $f) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)(); };
};
$mkSTFn7 = function($fn) use (&$mkSTFn7) {
    return function($a, $b, $c, $d, $e, $f, $g) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)(); };
};
$mkSTFn8 = function($fn) use (&$mkSTFn8) {
    return function($a, $b, $c, $d, $e, $f, $g, $h) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)(); };
};
$mkSTFn9 = function($fn) use (&$mkSTFn9) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)($i)(); };
};
$mkSTFn10 = function($fn) use (&$mkSTFn10) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)($i)($j)(); };
};

$runSTFn1 = function($fn, $a = null) use (&$runSTFn1) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn1) {

            return $runSTFn1(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a) { return $fn($a); };
};
$runSTFn2 = function($fn, $a = null, $b = null) use (&$runSTFn2) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn2) {

            return $runSTFn2(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b) { return $fn($a, $b); };
};
$runSTFn3 = function($fn, $a = null, $b = null, $c = null) use (&$runSTFn3) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn3) {

            return $runSTFn3(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c) { return $fn($a, $b, $c); };
};
$runSTFn4 = function($fn, $a = null, $b = null, $c = null, $d = null) use (&$runSTFn4) {
    if (\func_num_args() < 5) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn4) {

            return $runSTFn4(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d) { return $fn($a, $b, $c, $d); };
};
$runSTFn5 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null) use (&$runSTFn5) {
    if (\func_num_args() < 6) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn5) {

            return $runSTFn5(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e) { return $fn($a, $b, $c, $d, $e); };
};
$runSTFn6 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$runSTFn6) {
    if (\func_num_args() < 7) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn6) {

            return $runSTFn6(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f) { return $fn($a, $b, $c, $d, $e, $f); };
};
$runSTFn7 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$runSTFn7) {
    if (\func_num_args() < 8) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn7) {

            return $runSTFn7(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g) { return $fn($a, $b, $c, $d, $e, $f, $g); };
};
$runSTFn8 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$runSTFn8) {
    if (\func_num_args() < 9) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn8) {

            return $runSTFn8(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h) { return $fn($a, $b, $c, $d, $e, $f, $g, $h); };
};
$runSTFn9 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$runSTFn9) {
    if (\func_num_args() < 10) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn9) {

            return $runSTFn9(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i); };
};
$runSTFn10 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$runSTFn10) {
    if (\func_num_args() < 11) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn10) {

            return $runSTFn10(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i, $j); };
};

$exports['mkSTFn1'] = $mkSTFn1;
$exports['mkSTFn2'] = $mkSTFn2;
$exports['mkSTFn3'] = $mkSTFn3;
$exports['mkSTFn4'] = $mkSTFn4;
$exports['mkSTFn5'] = $mkSTFn5;
$exports['mkSTFn6'] = $mkSTFn6;
$exports['mkSTFn7'] = $mkSTFn7;
$exports['mkSTFn8'] = $mkSTFn8;
$exports['mkSTFn9'] = $mkSTFn9;
$exports['mkSTFn10'] = $mkSTFn10;
$exports['runSTFn1'] = $runSTFn1;
$exports['runSTFn2'] = $runSTFn2;
$exports['runSTFn3'] = $runSTFn3;
$exports['runSTFn4'] = $runSTFn4;
$exports['runSTFn5'] = $runSTFn5;
$exports['runSTFn6'] = $runSTFn6;
$exports['runSTFn7'] = $runSTFn7;
$exports['runSTFn8'] = $runSTFn8;
$exports['runSTFn9'] = $runSTFn9;
$exports['runSTFn10'] = $runSTFn10;
return $exports;
