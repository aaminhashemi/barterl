@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/all_ads.css')}}">
<link rel="stylesheet" href="{{ asset('css/service_category.css')}}">

<head>
    <title>{{ __('بارترلند -> خدمات آموزشی') }}</title>
</head>
<!-- nav -->
<div class="container">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between bg-white ">
        <div class="nav-text" >
            <nav id="breadcrumbs">
            <ul>
            <li>
                <a href="http://127.0.0.1:8000/category/services">خدمات آموزشی</a>
            </li>

            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-left pb-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
                <a href="http://127.0.0.1:8000#categories">دسته بندی ها</a>
            </li>

            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-left pb-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
                <a href="http://127.0.0.1:8000/ads">همه آگهی ها</a>
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

<!--Headline -->
<div class="ui vertical center aligned fluid container pt-3" id="header">
        <h2 class="color-headline" style="padding-right: 22px;">{{ __('خدمات آموزشی') }}</h2>
    </div>

<!-- Display specific category -->
<div class="cards-list mb-xl-5 pt-5">
    <div class="col-lg-12">
        <div class="row">
            @foreach ($items as $item)
                <a class="card"
                    style="width:350px pb-5;text-decoration:none"
                    href="{{ route('advDetails', ['id'=>$item->item_id, 'name'=>$item->adv_name]) }}">
                    <img
                    class="card-img-top"
                    src="{{ asset('images/' . $item->img) }}"
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