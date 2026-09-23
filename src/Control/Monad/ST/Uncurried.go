package Control_Monad_ST_Uncurried

import "gopurs/output/gopurs_runtime"

// STFn values are ordinary gopurs_runtime.Value functions; the foreign bridge
// passes them without adapters, so runSTFn{N} applies them directly.

func MkSTFn1(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}
func MkSTFn2(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}
func MkSTFn3(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}
func MkSTFn4(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}
func MkSTFn5(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}
func MkSTFn6(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}
func MkSTFn7(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}
func MkSTFn8(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}
func MkSTFn9(fn gopurs_runtime.Value) gopurs_runtime.Value {
	return fn
}

func RunSTFn1(fn gopurs_runtime.Value, a gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply(fn, a)
}
func RunSTFn2(fn gopurs_runtime.Value, a gopurs_runtime.Value, b gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply2(fn, a, b)
}
func RunSTFn3(fn gopurs_runtime.Value, a gopurs_runtime.Value, b gopurs_runtime.Value, c gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply3(fn, a, b, c)
}
func RunSTFn4(fn gopurs_runtime.Value, a gopurs_runtime.Value, b gopurs_runtime.Value, c gopurs_runtime.Value, d gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply4(fn, a, b, c, d)
}
func RunSTFn5(fn gopurs_runtime.Value, a gopurs_runtime.Value, b gopurs_runtime.Value, c gopurs_runtime.Value, d gopurs_runtime.Value, e gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply5(fn, a, b, c, d, e)
}
func RunSTFn6(fn gopurs_runtime.Value, a gopurs_runtime.Value, b gopurs_runtime.Value, c gopurs_runtime.Value, d gopurs_runtime.Value, e gopurs_runtime.Value, f gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply6(fn, a, b, c, d, e, f)
}
func RunSTFn7(fn gopurs_runtime.Value, a gopurs_runtime.Value, b gopurs_runtime.Value, c gopurs_runtime.Value, d gopurs_runtime.Value, e gopurs_runtime.Value, f gopurs_runtime.Value, g gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply7(fn, a, b, c, d, e, f, g)
}
func RunSTFn8(fn gopurs_runtime.Value, a gopurs_runtime.Value, b gopurs_runtime.Value, c gopurs_runtime.Value, d gopurs_runtime.Value, e gopurs_runtime.Value, f gopurs_runtime.Value, g gopurs_runtime.Value, h gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply8(fn, a, b, c, d, e, f, g, h)
}
func RunSTFn9(fn gopurs_runtime.Value, a gopurs_runtime.Value, b gopurs_runtime.Value, c gopurs_runtime.Value, d gopurs_runtime.Value, e gopurs_runtime.Value, f gopurs_runtime.Value, g gopurs_runtime.Value, h gopurs_runtime.Value, i gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply9(fn, a, b, c, d, e, f, g, h, i)
}

// STFn10 and runSTFn10 are not implemented in this runtime; the bridge keeps
// its not-implemented fallback for them.
