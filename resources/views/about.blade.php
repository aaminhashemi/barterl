@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/about.css')}}">

@section('content')
<head>
    <title>{{ __('درباره ی بارترلند') }}</title>
</head>

<!--Headline -->
<div id="header">
    <h2 class="text-black-50" style="padding: 50px 0;">
        {{ __('درباره بارترلند') }}
    </h2>
</div>

<div class=" about-us__description-text">
    <div class="sect">
        <p>
            بارترلند، سامانه ای برای مبادله ی کالای دانشجویی می باشد
            <br/>
            شما دانشجوی عزیز، تنها با ایجاد حساب کاربری در این وب سایت، می توانید اقلامی از قبیل کتاب، جزوه و خدمات آموزشی خود را در قالب آگهی در سایت ثبت کنید و کالایی که نیاز دارید را در سایت سرچ کرده و مبادله کنید
            <br/>
            این استارت آپ در تیرماه 1400 تاسیس شد و در مهرماه 1400 رونمایی شد
            <br/>
            اعضای تیم بارترلند پذیرا و مشتاق نظرات و پیشنهادات شما کاربران گرامی می باشند.
        </p>
    </div>
</div>

<!--Headline -->
<div  id="header2">
    <h2 class="text-black-50 pb-3" style="padding: 60px 0;">اعضای تیم</h2>
</div>
    <div class="row">
        <div class="member center aligned four wide computer four wide tablet eight wide mobile column"style="float:right">
            <img alt="فاطمه فلاح"title="فاطمه فلاح ورودی ۹۶"
                style="width: 200px;border-radius: 500rem;"
                class="ui circular image" src="fateme.jpg">
            <p>فاطمه فلاح</p>
        </div>

        <div class="member center aligned four wide computer four wide tablet eight wide mobile column" style="float:left">
            <img alt="ریماوهبی"title="ریماوهبی ورودی ۹۶"
            style="width: 200px;border-radius: 500rem;"
            class="ui circular image" src="rima.jpg">
            <p>ریماوهبی</p>
        </div>
    </div>
@endsection
