@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('آدرس ایمیل خود را تایید کنید') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('لینک تایید حساب کاربری به ایمیل شما ارسال شد.') }}
                        </div>
                    @endif

                    {{ __('قبل از ادامه، لطفا ایمیل خودرا جهت تایید حساب کاربری چک کنید.') }}
                    {{ __('اگر هنوز ایمیلی به دست شما نرسیده') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('برای ارسال دوباره ی لینک اینجارا کلیک کنید') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
