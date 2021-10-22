@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/all_ads.css')}}">
<head>
    <title>{{ __('بارترلند -> نتایج') }}</title>
</head>

<!--Headline -->
<div class="ui vertical center aligned fluid container pad50" id="header">
    <h2 class=" text-black-50" style="padding-right: 22px;">نتایج</h2>
</div>

<!-- Display All Advertisments -->
<div class="cards-list mb-xl-5">
    <div class="col-lg-12">
        <div class="row">
            @foreach ($results as $item)
                <a class="card"
                    style="width:350px pb-5; text-decoration:none"
                    href="{{ route('advDetails', ['id'=>$item->itemid, 'name'=>$item->itemname]) }}">
                    <img
                    class="card-img-top"
                    src="{{ asset('images/' . $item->img) }}"
                    style="height: 75%" width="75%"
                    alt=""
                    >
                    <div class="card-body">
                        <h6 class="card-title">{{ $item->itemname }}</h6>
                        <p class="card-text">
                            <small class="text-muted">{{ucfirst($item->cname)}} / {{ucfirst($item->uname)}}</small>
                        </p>
                        <p class="card-text" style="margin-top: -25px;float: left;">
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
        {{ $results->links() }}
    </div>
</div>
@endsection
