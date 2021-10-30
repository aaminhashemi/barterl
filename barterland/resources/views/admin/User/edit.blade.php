@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
        <div class="col-8 bg-white">
            <div class="how-to-become-a-teacher">
            
                <div class="how-to-become-a--teacher">
                    <h2>
                        ویرایش اطلاعات کاربر
                    </h2>

                    <form action="" class="how-to-become-a--teacher-form">
                        <input type="text" class="txt" placeholder="نام و نام خانوادگی">
                        <input type="text" class="txt txt-l" placeholder="ایمیل">
                        <input type="text" class="txt txt-l" placeholder="شماره موبایل">
                        <input type="text" class="txt txt-l" placeholder="ایدی یا شماره تلگرام">
                        <input type="text" class="txt" placeholder="موضوع دوره">
                        <textarea class="txt" placeholder="توضیحات"></textarea>
                        <br>
                        <button class="btn i-t">ارسال</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop