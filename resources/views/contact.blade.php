@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css')}}">
<head>
    <title>{{ __('بارترلند -> ارتباط با ما') }}</title>
</head>
@if (session('status'))
    <div class="alert alert-success messag mt-3" role="alert">
        <span class="closebtn">&times;</span>
            {{ session('status') }}
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 slide-bottom">
            <div class="card">
                <div class="card-header">{{ __('ارتباط با ما') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeMessage') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل') }}</label>
                            <div class="col-md-6">
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن همراه') }}</label>
                            <div class="col-md-6">
                                <input id="phone" name="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="شماره تلفن همراه" value="{{ old('phone') }}" autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right" >{{ __('اظهار نظر') }}</label>
                            <div class="col-md-6">
                                <textarea id="message" name="message" type="message" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="اظهار نظر"></textarea>
                            
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-outline-primary">
                                    {{ __('ارسال') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
    }
</script>
@endsection
