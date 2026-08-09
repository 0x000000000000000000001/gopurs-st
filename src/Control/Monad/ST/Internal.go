package Internal

func Map_(f func(interface{}) interface{}, a func(interface{}) interface{}, _ interface{}) interface{} {
	return f(a(nil))
}

func Pure_(a interface{}, _ interface{}) interface{} {
	return a
}

func Bind_(a func(interface{}) interface{}, f func(interface{}) func(interface{}) interface{}, _ interface{}) interface{} {
	return f(a(nil))(nil)
}

func Run(f func(interface{}) interface{}) interface{} {
	return f(nil)
}

func While(f func() bool, a func(interface{}) interface{}, _ interface{}) interface{} {
	for f() {
		a(nil)
	}
	return nil
}

func ForImpl(lo int64, hi int64, f func(int64) func(interface{}) interface{}, _ interface{}) interface{} {
	for i := lo; i < hi; i++ {
		f(i)(nil)
	}
	return nil
}

func Foreach(as []interface{}, f func(interface{}) func(interface{}) interface{}, _ interface{}) interface{} {
	for _, item := range as {
		f(item)(nil)
	}
	return nil
}

func NewImpl(val interface{}, _ interface{}) interface{} {
	v := val
	return &v
}

func Read(ref interface{}, _ interface{}) interface{} {
	ptr := ref.(*interface{})
	return *ptr
}

func ModifyImpl(f func(interface{}) interface{}, ref interface{}, _ interface{}) interface{} {
	ptr := ref.(*interface{})
	t := f(*ptr)

	dict := t.(map[string]interface{})
	*ptr = dict["state"]
	return dict["value"]
}

func Write(a interface{}, ref interface{}, _ interface{}) interface{} {
	ptr := ref.(*interface{})
	*ptr = a
	return a
}
