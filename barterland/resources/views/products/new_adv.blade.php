@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newitem.css')}}">
<head>
    <title>{{ __('بارترلند -> ثبت آگهی') }}</title>
</head>
<!--Headline -->
<div class="ui vertical center aligned fluid container pad50" style="background-color: #eff6fb;" id="header">
    <h1 class="text-black-50">{{ __('ثبت آگهی') }}</h1>
</div>
<svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(239, 246, 251, 1)" offset="0%"></stop>
            <stop stop-color="rgba(239, 246, 251, 1)" offset="100%"></stop>
        </linearGradient>
    </defs>
    <path style="transform:translate(0, 0px); opacity:1"
        fill="url(#sw-gradient-0)" d="M0,80L10.4,75C20.9,70,42,60,63,58.3C83.5,57,104,63,125,63.3C146.1,63,167,57,188,48.3C208.7,40,230,30,250,35C271.3,40,292,60,313,58.3C333.9,57,355,33,376,30C396.5,27,417,43,438,55C459.1,67,480,73,501,63.3C521.7,53,543,27,563,16.7C584.3,7,605,13,626,28.3C647,43,668,67,689,78.3C709.6,90,730,90,751,88.3C772.2,87,793,83,814,73.3C834.8,63,856,47,877,45C897.4,43,918,57,939,60C960,63,981,57,1002,45C1022.6,33,1043,17,1064,23.3C1085.2,30,1106,60,1127,71.7C1147.8,83,1169,77,1190,68.3C1210.4,60,1231,50,1252,51.7C1273,53,1294,67,1315,60C1335.7,53,1357,27,1377,13.3C1398.3,0,1419,0,1440,15C1460.9,30,1482,60,1492,75L1502.6,90L1502.6,100L1492.2,100C1481.7,100,1461,100,1440,100C1419.1,100,1398,100,1377,100C1356.5,100,1336,100,1315,100C1293.9,100,1273,100,1252,100C1231.3,100,1210,100,1190,100C1168.7,100,1148,100,1127,100C1106.1,100,1085,100,1064,100C1043.5,100,1023,100,1002,100C980.9,100,960,100,939,100C918.3,100,897,100,877,100C855.7,100,835,100,814,100C793,100,772,100,751,100C730.4,100,710,100,689,100C667.8,100,647,100,626,100C605.2,100,584,100,563,100C542.6,100,522,100,501,100C480,100,459,100,438,100C417.4,100,397,100,376,100C354.8,100,334,100,313,100C292.2,100,271,100,250,100C229.6,100,209,100,188,100C167,100,146,100,125,100C104.3,100,83,100,63,100C41.7,100,21,100,10,100L0,100Z">
    </path>
</svg>

@if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif

<div class="item-form clearfix">
    <div class="card-body">
        <form method="POST"
            action="{{ route('storeAdv') }}"
            enctype="multipart/form-data">
        @csrf
            <div class="row">
                <label for="category" class="col-md-4 col-form-label">{{ __('دسته بندی') }}</label>
                <div class="col-md-12 toto">
                    <select id="category" name="category" class="form-control form-select placeholder @error('category') is-invalid @enderror">
                        <option value="" disabled selected hidden>{{ __('دسته بندی ها') }}</option>
                        @foreach($publishedCategories as $category)
                            <option
                            @if(old('category')==$category->id) selected @endif
                             value="{{ $category->id }}">
                                {{ ucfirst($category->name) }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="adv_name" class="col-md-4 col-form-label ">{{ __('عنوان اگهی') }}</label>
                <div class="col-md-12 toto">
                    <input  id="adv_name" name="adv_name" type="text" class="form-control @error('adv_name') is-invalid @enderror" placeholder="عنوان مناسبی برای آگهی تان وارد کنید." value="{{ old('adv_name') }}" autocomplete="adv_name">
                    @error('adv_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="description" class="col-md-4 col-form-label">{{ __('توضیحات') }}</label>
                <div class="col-md-12 toto">
                    <textarea id="description" name="description" type="text" rows="3" class="form-control @error('description') is-invalid @enderror" placeholder="توضیحات مناسبی برای آگهی تان وارد کنید.">{{old('description')}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="exchangedesc" class="col-md-6 col-form-label " >{{ __('توضیحات کالای موردمعاوضه') }}</label>
                <div class="col-md-12">
                    <textarea id="exchangedesc" name="exchangedesc" type="text" rows="3" class="form-control @error('exchangedesc') is-invalid @enderror" placeholder="توضیحات کالایی که قصد معاوضه با آن را دارید">{{old('exchangedesc')}}</textarea>
                    @error('exchangedesc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="contactway" class="col-md-4 col-form-label ">{{ __('راه ارتباطی') }}</label>
                <div class="col-md-12 toto">
                    <input id="contactway" name="contactway" type="text" class="form-control @error('contactway') is-invalid @enderror" placeholder="شماره تماس با آگهی" value="{{ old('contactway') }}" autocomplete="contactway">
                    @error('contactway')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="city" class="col-md-4 col-form-label ">{{ __('شهر') }}</label>
                <div class="col-md-12 toto">
                    <select id="city" name="city" class="form-control form-select placeholder @error('city') is-invalid @enderror">
                        <option disabled selected hidden value="">{{ __('شهرها') }}</option>
                        @foreach($publishedCities as $city)
                            <option
                                @if(old('city')==$city->id) selected @endif
                             value="{{ $city->id }}">
                                {{ ucfirst($city->name) }}
                            </option>
                        @endforeach
                    </select>
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="university" class="col-md-4 col-form-label ">{{ __('دانشگاه') }}</label>
                <div class="col-md-12 toto">
                    <select id="university" name="university" class="form-control form-select placeholder @error('university') is-invalid @enderror">
                        <option value="" disabled selected hidden>{{ __('دانشگاه ها') }}</option>
                        @foreach($publishedUniversities as $university)
                            <option
                            @if(old('university')==$university->id) selected @endif
                             value="{{ $university->id }}">
                                {{ ucfirst($university->name) }}
                            </option>
                        @endforeach
                    </select>
                    @error('university')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <label for="images" class="col-md-4 col-form-label pr-0">{{ __('تصویر آگهی') }}</label>
            <input multiple id="images" name="images[]" type="file" style="border-radius: 0.25rem;" 
                class="block shadow-sm1 mb-3 p-3 w-100 placeholder-gray-400 @error('images') is-invalid @enderror">

                @error('images')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            <div class="row justify-content-center" style="margin-top:32px">
                <div class="col-md-6">
                    <div class="row mb-0">
                        <div class="mx-auto">
                            <button type="submit"
                                class="btn btn-outline-primary"
                                value="submit">
                                {{ __('ثبت اگهی') }}
                            </button>
                            <a href="{{ route('dashboard') }}"
                                class="btn btn-outline-danger"
                                role="button"
                                value="delete">{{ __('انصراف') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection