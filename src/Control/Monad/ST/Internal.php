<?php

$map_ = function($f, $a = null) use (&$map_) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$map_) {

            return $map_(...\array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$a) { return $f($a()); };
};
$bind_ = function($a, $f = null) use (&$bind_) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$bind_) {

            return $bind_(...\array_merge($__args, $more));
        };
    }
    return function() use(&$a, &$f) { return $f($a())(); };
};
$pure_ = function($a) use (&$pure_) { return function() use(&$a) { return $a; }; };
$new = function($val) use (&$new) { return function() use(&$val) { return (object)['value' => $val]; }; };
$read = function($ref) use (&$read) { return function() use(&$ref) { return $ref->value; }; };
$modifyImpl = function($f, $ref = null) use (&$modifyImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$modifyImpl) {

            return $modifyImpl(...\array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; };
};
$write = function($val, $ref = null) use (&$write) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$write) {

            return $write(...\array_merge($__args, $more));
        };
    }
    return function() use(&$val, &$ref) { $ref->value = $val; return $val; };
};
$run = function($f) use (&$run) { return $f(); };
$while = function($f, $a = null) use (&$while) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$while) {

            return $while(...\array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$a) { while ($f()) { $a(); } return null; };
};
$for = function($lo, $hi = null, $f = null) use (&$for) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$for) {

            return $for(...\array_merge($__args, $more));
        };
    }
    return function() use(&$lo, &$hi, &$f) { for ($i = $lo; $i < $hi; $i++) { $f($i)(); } return null; };
};
$foreach = function($as, $f = null) use (&$foreach) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$foreach) {

            return $foreach(...\array_merge($__args, $more));
        };
    }
    return function() use(&$as, &$f) { foreach ($as as $a) { $f($a)(); } return null; };
};

$exports['map_'] = $map_;
$exports['bind_'] = $bind_;
$exports['pure_'] = $pure_;
$exports['new'] = $new;
$exports['read'] = $read;
$exports['modifyImpl'] = $modifyImpl;
$exports['write'] = $write;
$exports['run'] = $run;
$exports['while'] = $while;
$exports['for'] = $for;
$exports['foreach'] = $foreach;
return $exports;
