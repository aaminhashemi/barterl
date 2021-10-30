@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
        <div class="col-8 bg-white">
            <div class="col-4 info-amount padding-20 bg-white margin-bottom-12-p border-radius-3">
                <p class="title icon-outline-receipt">ایمیل </p>
                <p class="amount-show color-444"><span> {{$message->email}} </span></p>
                <p class="title icon-sync">شماره تماس</p>
                <p class="amount-show color-444"><span> {{$message->phone}} </span></p>
            </div>
            <div class="col-8 info-amount padding-20 bg-white margin-bottom-12-p margin-bottom-10 border-radius-3">
                <p href="/" class=" all--text color-2b4a83">متن پیام</p>
                <textarea class="txt" cols='10' rows='10' readonly placeholder="توضیحات">{{$message->message}}</textarea>
            </div>
        </div>
    </div>
</div>

@stop