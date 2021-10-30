<div class="col-4 bg-white">
    <p class="box__title">ایجاد دسته بندی جدید</p>
    <form action="{{route('category_create')}}" method="post" class="padding-30">
        @csrf
        <input type="text" placeholder="نام دسته بندی" class="text" name="name">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-webamooz_net">اضافه کردن</button>
    </form>
</div>