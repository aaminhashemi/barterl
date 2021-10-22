@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
<head>
    <title>{{ __('صفحه اصلی بارترلند') }}</title>
</head>
<!-- Header -->
<section id="app_name"
    class=" ui vertical masthead center aligned segment"
    style="justify-content: center; background-image: linear-gradient(white, #eff6fb);border-bottom: none;min-height:200px;">
    <h2 class="section">بارتـرلند</h2>
    <div class="section introtext clearfix pt-0 pb-0">
        <strong>
            برای مبادله ی هر آنچه که یک دانشجو نیاز دارد
        </strong>
    </div>
    <div style="width: 100%;position: absolute;bottom: -80px;padding: 511px;">
        <div style="width: 100%; justify-content: center; display: flex;">
            <img class="ui big image"  src="https://static.quera.ir/college/images/theme/home.0-7b1895be4de0.svg">
        </div>
    </div>
</section>
<img class="hide-in-mobile"
    style="width: 100%;"
    src="https://static.quera.ir/college/images/theme/arc.0-2309348228a7.svg">

<!-- Search bar -->
<section class="search-sec">
    <div class="container">
        <form id="search_form" action="{{ route('searchAdv')}}" method="get" novalidate="novalidate">
            {{ csrf_field() }}
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-4 col-md-2 col-sm-12 p-0">
                        <input type="search" name="item_name" id="item_name" class="form-control search-slt rounded-right @error('item_name') is-invalid @enderror" value="{{ old('item_name') }}" autocomplete="item_name" placeholder="جستجو...">
                        @error('item_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                        <select id="cat_id" name="cat_id" class="form-control search-slt" >
                            <option value="" disabled selected hidden>{{ __('دسته بندی') }}</option>
                            @foreach($publishedCategories as $category)
                                <option value="{{$category->id}}">
                                    {{ucfirst($category->name)}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                        <select id="uni_id" name="uni_id" class="form-control search-slt" >
                            <option value="" disabled selected hidden>{{ __('دانشگاه') }}</option>
                            @foreach($publishedUniversities as $university)
                                <option value="{{$university->id}}">
                                    {{ucfirst($university->name)}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                        <select id="city_id" name="city_id" class="form-control search-slt" >
                            <option value="" disabled selected hidden>{{ __('شهر') }}</option>
                            @foreach($publishedCities as $city)
                                <option value="{{$city->id}}">
                                    {{ucfirst($city->name)}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 col-md-2 col-sm-12 p-0">
                        <button type="submit" value="search" class="btn wrn-btn btn-search rounded-left">
                            {{ __('جستجو') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Ctegories -->
<section id="categories" class="section">
    <h5 class="font-weight-bold" style="color:#1bb9b7;">دسته بندی ها</h5>
</section>
<div class="cards-list">
    <div class="col-lg-12">
        <div class="row">
            <a class="card 1" style="text-decoration:none" href="{{ route('bookCategory') }}">
                <div class="card_image">
                    <img src="book.jpg"/>
                </div>
                <div class="card_title" style="color:#1bb9b7;">
                    <p style="margin-top: 0;">کتاب</p>
                </div>
            </a>
            <a class="card 2" style="text-decoration:none" href="{{ route('paperCategory') }}">
                <div class="card_image">
                    <img src="jozve.png"/>
                </div>
                <div class="card_title " style="color:#1bb9b7;">
                    <p style="margin-top: 0;">جزوه</p>
                </div>
                </a>
            <a class="card 3" style="text-decoration:none" href="{{ route('servicesCategory') }}">
                <div class="card_image">
                    <img src="khadamat.png"/>
                </div>
                <div class="card_title" style="color:#1bb9b7;">
                    <p style="margin-top: 0;">خدمات آموزشی</p>
                </div>
            </a>
        </div>
    </div>
</div>
<br/>

<!-- Latest Advertisments-->
<section id="latest_ads" class="section">
    <h5 class="font-weight-bold" style="color:#f2711c;">جدیدترین آگهی ها</h5>
</section>
<div class="ards-listc mb-xl-5">
    <div class="col-lg-12">
        <div class="row">
            @foreach ($items as $item)
                <a class="card-pv"
                    style="width:350px pb-5; text-decoration:none"
                    href="{{ route('advDetails', ['id'=>$item->id, 'name'=>$item->name]) }}">

                    <img
                    class="card-img-top"
                    src="{{ asset('images/' . $item->photo) }}"
                    style="height: 75%" width="75%"
                    alt=""
                    >
                    <div class="card-body">
                        <h6 class="card-title">{{ $item->name }}</h6>
                        <p class="card-text" style="margin-top: 0;">
                            <small class="text-muted">{{ $item->city_name }} / {{ $item->uni_name }}</small>
                        </p>
                        <p class="card-text" style="margin-top: -18px;float: left;">
                            <small class="text-muted">لحظاتی پیش</small>
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- ِDisplay All Advertisements-->
<div class="container text-center">
    <a class="btn btn-outline-primary btn-sm mt-2 mb-4 "
        href="{{ route('displayAllAds') }}"
        role="button">نمایش همه آگهی ها
    </a>
</div>
@endsection
