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

<div class="text-center">
    {{('.متاسفم! آگهی موردنظر شما وجود ندارد') }}
</div>

@stop

