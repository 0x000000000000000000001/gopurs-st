package Internal

import "gopurs/output/gopurs_runtime"

// The ST primitives operate on gopurs_runtime.Value functions directly. The
// foreign bridge passes such arguments through without building any-adapters
// or boxing, which matters for the monadic steps of generated ST loops.

var unit = gopurs_runtime.Value{}

func Map_(f gopurs_runtime.Value, a gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply(f, gopurs_runtime.Apply(a, unit))
}

func Pure_(a gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return a
}

func Bind_(a gopurs_runtime.Value, f gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply(gopurs_runtime.Apply(f, gopurs_runtime.Apply(a, unit)), unit)
}

func Run(f gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.Apply(f, unit)
}

func While(f gopurs_runtime.Value, a gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	for gopurs_runtime.Apply(f, unit).BoolVal() {
		gopurs_runtime.Apply(a, unit)
	}
	return unit
}

func ForImpl(lo int64, hi int64, f gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	for i := lo; i < hi; i++ {
		gopurs_runtime.Apply(gopurs_runtime.Apply(f, gopurs_runtime.Int(i)), unit)
	}
	return unit
}

func Foreach(as gopurs_runtime.Value, f gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	if as.Type == gopurs_runtime.TypeIntArray {
		for _, item := range *(*[]int64)(as.UnsafePtr) {
			gopurs_runtime.Apply(gopurs_runtime.Apply(f, gopurs_runtime.Int(item)), unit)
		}
		return unit
	}
	for _, item := range gopurs_runtime.ArrayValues(as) {
		gopurs_runtime.Apply(gopurs_runtime.Apply(f, item), unit)
	}
	return unit
}

func NewImpl(val gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.NewSTRef(val)
}

func Read(ref gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.ReadSTRef(ref)
}

func ModifyImpl(f gopurs_runtime.Value, ref gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	updated := gopurs_runtime.Apply(f, gopurs_runtime.ReadSTRef(ref))
	gopurs_runtime.WriteSTRef(ref, gopurs_runtime.RecordGet(updated, "state"))
	return gopurs_runtime.RecordGet(updated, "value")
}

func Write(a gopurs_runtime.Value, ref gopurs_runtime.Value, _ gopurs_runtime.Value) gopurs_runtime.Value {
	return gopurs_runtime.WriteSTRef(ref, a)
}
