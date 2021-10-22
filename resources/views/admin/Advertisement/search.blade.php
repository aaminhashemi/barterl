<div class="col-2 bg-white">
    <p class="box__title">جستجو</p>
    <form action="{{route('adv_search')}}" method="post" class="padding-30">
        @csrf
        <input type="text" readonly autocomplete="off" id="date" placeholder="از تاریخ " class="text" name="start_date">
        @error('start_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" readonly autocomplete="off" id="date1" placeholder="تا تاریخ" class="text" name="end_date">
        @error('end_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-webamooz_net">فیلتر بر اساس تاریخ</button>
    </form>
</div>