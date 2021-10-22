@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/all_ads.css')}}">
<head>
    <title>{{ __('بارترلند -> همه آگهی ها') }}</title>
</head>

<!--Headline -->
<div class="ui vertical center aligned fluid container pt-1" id="header">
    <h2 class="color-headline" style="padding-right: 22px;">همه آگهی ها</h2>
</div>

<!-- nav -->
<div class="container">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between bg-white ">
        <div class="nav-text">
            <nav id="breadcrumbs">
                <ul>
                    <li>
                        <a href="">همه آگهی ها</a>
                    </li>

                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-left pb-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <a class="navbar-brand " href="{{ url('/') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
           </nav>
        </div>
    </div>
</div>

<!-- Search bar -->
<section class="search-sec">
    <div class="container">
        <form id="search_form" action="{{ route('searchAdv')}}" method="get" novalidate="novalidate">
            {{ csrf_field() }}
            <div class="col-lg-12">
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
                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                        <button type="submit" value="search" class="btn wrn-btn btn-search rounded-left">
                            {{ __('جستجو') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Display All Advertisments -->
<div class="cards-list mb-xl-5">
    <div class="col-lg-12">
        <div class="row">
            @foreach ($items as $item)
                <a class="card"
                    style="width:350px pb-lg-3; text-decoration:none"
                    href="{{ route('advDetails', ['id'=>$item->id, 'name'=>$item->adv_name]) }}">
                    <img
                    class="card-img-top"
                    src="{{ asset('images/' . $item->photo) }}"
                    style="height: 75%" width="75%"
                    alt=""
                    >
                    <div class="card-body">
                        <h6 class="card-title">{{ $item->adv_name }}</h6>
                        <p class="card-text">
                            <small class="text-muted">{{ $item->city_name }} / {{ $item->uni_name }}</small>
                        </p>
                        <p class="card-text" style="margin-top: -26px;float: left;">
                            <small class="text-muted">لحظاتی پیش</small>
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
<div style="text-align: center;">
    <div style="display: inline-block;">
        {{ $items->links() }}
    </div>
</div>
@endsection

