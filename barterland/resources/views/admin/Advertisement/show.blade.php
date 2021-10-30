@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
        <div class="col-8 bg-white">
            <div class="col-6 info-amount padding-20 bg-white margin-bottom-12-p border-radius-3">
            <p class="title icon-outline-receipt">نام </p>
                <p class="amount-show color-444"><span> {{$itemDetail->name}} </span></p>
                <p class="title icon-outline-receipt">توضیحات </p>
                <p class="amount-show color-444"><span> {{$itemDetail->description}} </span></p>
                <p class="title icon-outline-receipt">شهر </p>
                <p class="amount-show color-444"><span> {{$itemDetail->cname}} </span></p>
                <p class="title icon-outline-receipt">دانشگاه </p>
                <p class="amount-show color-444"><span> {{$itemDetail->uni}} </span></p>
                <p class="title icon-outline-receipt">دسته بندی </p>
                <p class="amount-show color-444"><span> {{$itemDetail->cat}} </span></p>
                <p class="title icon-sync">شماره تماس</p>
                <p class="amount-show color-444"><span> {{$itemDetail->contactway}} </span></p>
            </div>
            <div class="col-8 info-amount padding-20 bg-white margin-bottom-12-p margin-bottom-10 border-radius-3">
                <p href="/" class=" all--text color-2b4a83">تصاویر </p>
                @foreach (json_decode($itemDetail->img) as $picture)
                <img src="{{ asset('images/'. $picture) }}" class="col-6" width="50%" />

                @endforeach
            </div>
        </div>
    </div>
</div>

@stop