@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">

<head>
    <title>{{ __('بارترلند -> داشبورد') }}</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

@if (session('status'))
<!-- <div  class="alert alert-success" role="alert">
    {{ session('status') }}
</div> -->
<div class="alert alert-success messag mt-3" role="alert">
    <span class="closebtn">&times;</span>
    {{ session('status') }}
</div>
@endif

<!--Headline -->
<div class="ui vertical center aligned fluid container pad50" id="header">
    <h2 style="padding-right: 22px; color: #f2711c;">{{ __('آگهی های من') }}</h2>
</div>

<!-- Display All Advertisments -->
<div class="cards-list mb-xl-5">
    <div class="col-lg-12">
        <div class="row">
            @foreach ($items as $item)
            <div class="card" style="width:350px pb-lg-3">
                <img class="card-img-top" src="{{ asset('images/' . $item->photo) }}" style="height: 70%" width="70%"
                    alt="">
                <div class="card-body">
                    <a href="{{ route('myAdvDetails', ['id'=>$item->id, 'name'=>$item->name]) }}">
                        <h6 class="card-title2">
                            {{ $item->name }}
                        </h6>
                    </a>
                    <p class="card-text">
                        <small class="text-muted">{{ $item->city_name }} / {{ $item->uni_name }}</small>
                    <p>
                        <a href="/ads/edit/{{ $item->id }}" class="p-5" style="float:left">
                            <span>/</span>
                            {{ __('ویرایش') }}
                        </a>
                    </p>
                    <p>
                        <a class="p-5 text-danger" data-toggle="modal" data-target="{{'#exampleModal'.$item->id}}"
                            style="float:left; margin-left: 12px; margin-bottom:5px;">
                            {{ __('حذف') }}
                        </a>
                    </p>
                    <span class="card-text" style="float: right;">
                        <small class="text-muted">لحظاتی پیش</small>
                    </span>
                    </p>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="{{'exampleModal'.$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModal">ایا مطمئن هستید این آگهی حذف شود؟</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
                            <a type="button" href="{{route('deleteAdv', $item->id)}}"
                                class="btn btn-danger">
                                {{ __('حذف') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div style="text-align: center;">
    <div style="display: inline-block;">
        {{ $items->links() }}
    </div>
</div>

<script>
    var close = document.getElementsByClassName("closebtn");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function() {
                div.style.display = "none";
            }, 600);
        }
    }
</script>

@endsection
