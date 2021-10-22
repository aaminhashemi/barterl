@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/adv_details.css')}}">
<head>
    <title>{{ __('بارترلند -> جزئیات آگهی') }}</title>
</head>

<!-- nav -->
<div class="container">
  <div class="flex justify-center mt-4 sm:items-center sm:justify-between bg-white ">
    <div class="nav-text" >
      <nav id="breadcrumbs">
        <ul>
          <li>
            <a href="">جزئیات آگهی </a>
          </li>

          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-left pb-2" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
            <a href="{{ route('displayAllAds') }}">همه آگهی ها</a>
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

<!--card-details -->
<div class="d-flex justify-content-center container mt-2 " style="justify-content: right!important;margin-top: 2.5rem !important;">
  @foreach ($itemdetail as $detail)
    <!--product-details-->
    <div class="col-lg-6  pt-0 bg-white div-details"
      style="direction: rtl;margin-right: 4rem !important;">
      <div class="stats mt-2">
        <p class="font-weight-bold">
          {{ __('دسته بندی') }}
        </p>
        <p class="p1">{{ $detail->cate_name }}</p>
        <hr id="h">

        <p class="font-weight-bold">
          {{ __('توضیحات آگهی') }}
        </p>
        <p class="p1">{{ $detail->adv_description }}</p>
        <hr id="h">

        <p class="font-weight-bold">
          {{ __('توضیحات کالای مورد معاوضه') }}
        </p>
        <p class="p1">{{ $detail->exchangedesc }}</p>
        <hr id="h">

        <p class="font-weight-bold">
          {{ __('دانشگاه') }}
        </p>
        <p class="p1">{{ $detail->uni_name }}</p>
        <hr id="h">

        <p class="font-weight-bold">
          {{ __('شهر ') }}
        </p>
        <p class="p1">{{ $detail->city_name }}</p>
        <hr id="h">

        <p class="font-weight-bold">
          {{ __('راه ارتباطی') }}
        </p>
        <p class="p1">{{ $detail->contactway }}</p>
      </div>
    </div>

    <!-- Carousel -->
    <div class="about-product text-center mt-2 mr-3" style="float:left">
      <div class="cards-list">
        <div class="col-lg-4">
          <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                @foreach($album as $pic)
                <li data-target="#carouselExampleIndicators"
                  data-slide-to="{{ $loop->index }}"
                  class="">
                </li>
                @endforeach
              </ol>
              <div class="carousel-inner">
                @foreach($album as $pic)
                @foreach (json_decode($pic) as $picture)

                  <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ asset('images/'. $picture) }}"
                        style="width:300px;height:350px;"/>
                  </div>
                  @endforeach

                @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only" >Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only" >Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    <div>
    <h4 id="adv_title"
      class="font-weight-bold pt-3">
      {{ $detail->adv_name }}
    </h4>
    </div>
  </div>
  @endforeach
</div>
<br/><br/><br/><br/><br/>

<div class="ui vertical center aligned fluid container pt-1" id="header">
  <h2 class="color-headline" style="padding-right: 22px;">آگهی های پیشنهادی</h2>
</div>

<!-- Display suggestion Advertisments -->
<div class="h-scroll-wrapper">
  <ul class="cols" data-h-scroll="" data-track="[{&quot;category&quot;:&quot;OfferView&quot;,&quot;action&quot;:&quot;RelatedListing&quot;,&quot;label&quot;:&quot;Open&quot;}]" data-track-selector="a">
    
    @foreach($realted as $item)
    <li class="item-tiny card">
      <a href="#">
        <span class="item-image">
          <img width="206" height="151"
            src="https://cdn.sheypoor.com/imgs/2021/10/03/396079496/206x151_af/396079496_56e12bff7abcf0f021e5b47001dc8f61.jpg">
        </span>
        <p>
          <span>{{$item->name}}</span>
        </p>
        <p>
          <span class="item-price" style="color:black">{{$item->cname}}</span>
          <br>
          <small class="ellipsis" style="color:black">{{$item->uni}}</small>
        </p>
      </a>
    </li>

    @endforeach

  </ul>
  <div class="btn-next active">
    <span class="button round icon-right-open"></span>
  </div>
  <div class="btn-prev">
    <span class="button round icon-left-open"></span>
  </div>
</div>
@endsection
