@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/questions.css')}}">
<head>
  <title>{{ __('بارترلند -> سوالات متداول') }}</title>
</head>
    <!--Headline -->
    <div class="ui vertical text-center aligned fluid container pad50" id="header">
        <h2 class=" text-black-50" style="padding-right: 22px;">سوالات متداول</h2>
    </div>

<!--Accordion wrapper-->
<section class=" p-4  mb-4">
  <div class="row">
    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

      <!-- Accordion card 1 -->
      <div class="card">
        <!-- Card header 1 -->
        <div class="card-header" role="tab" id="headingOne1">
          <a data-toggle="collapse"  href="#collapseOne1" aria-expanded="true"
            aria-controls="collapseOne1">
            <h5 class="mb-0">
              بارترلند چیست؟
              <svg class="svgpv" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg>
            </h5>
          </a>
        </div>
        <!-- Card body 1 -->
        <div id="collapseOne1" class="collapse show p-4"
          role="tabpanel" aria-labelledby="headingOne1">
          <div class="card-body">
              بارترلند سایتی برای مبادله ی کالاهای موردنیاز دانشجویان است. از قبیل کتاب درسی، جزوه و خدمات آموزشی. با 
              ثبت نام و ثبت آگهی در بارترلند، میتوانید کالای خودرا با کالای دانشجویی دیگر، مبادله کنید. 
      فقط کافیه همین الان <a href="http://127.0.0.1:8000/register">ثبت نام کنید !</a>
          </div>
        </div>
      </div>

      <!-- Accordion card 2 -->
      <div class="card">
        <!-- Card header 2 -->
        <div class="card-header" role="tab" id="headingTwo2">
          <a class="collapsed" data-toggle="collapse"  href="#collapseTwo2"
            aria-expanded="false" aria-controls="collapseTwo2">
            <h5 class="mb-0">
              چطور می توانم آگهی ثبت کنم؟
              <svg class="svgpv" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg>
            </h5>
          </a>
        </div>
        <!-- Card body 2 -->
        <div id="collapseTwo2" class="collapse p-4" role="tabpanel" aria-labelledby="headingTwo2" >
          <div class="card-body">
            برای ثبت آگهی ابتدا باید حساب کاربری داشته باشید، سپس زمانی که وارد حساب خود شده اید، با کلیک رو روی
            <span>
              <a style="color: #25c257 !important;" href="http://127.0.0.1:8000/advform">
                "ثبت آگهی"
              </a>
            </span>مشخصات موردنیاز کالای خود را وارد کنید.<br/>
            <span style="color:red">
              نکته:
            </span>حتما تمام بخش های مورد نیاز برای ثبت آگهی را پر کنید، در غیر این صورت آگهی شما ثبت نخواهد شد. 
          </div>
        </div>
      </div>

      <!-- Accordion card 3 -->
      <div class="card">
        <!-- Card header 3 -->
        <div class="card-header" role="tab" id="headingThree3">
          <a class="collapsed" data-toggle="collapse" href="#collapseThree3"
            aria-expanded="false" aria-controls="collapseThree3">
            <h5 class="mb-0">
              چطوری آگهی خود را ویرایش کنم؟
              <svg class="svgpv" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg>
            </h5>
          </a>
        </div>
        <!-- Card body 3 -->
        <div id="collapseThree3" class="collapse p-4" role="tabpanel" aria-labelledby="headingThree3">
          <div class="card-body">
          برای ویرایش آگهی ، کافیست از بخش "حساب من" بر روی "آگهی های من" کلیک کرده و وارد داشبورد خود 
          شوید. سپس با کلیک کردن بر روی لینک <span style="color:#3490dc">"ویرایش"</span> روی آگهی مدنظر، می توانید جزئیات آن را ویرایش کنید. 
          </div>
        </div>
      </div>

      <!-- Accordion card 4 -->
      <div class="card">
        <!-- Card header 4  -->
        <div class="card-header" role="tab" id="heading4">
          <a class="collapsed" data-toggle="collapse" href="#collapse4"
            aria-expanded="false" aria-controls="collapse4">
            <h5 class="mb-0">
              چطوری آگهی خود را حذف کنم؟
              <svg class="svgpv" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg> 
            </h5>
          </a>
        </div>
        <!-- Card body -->
        <div id="collapse4" class="collapse p-4" role="tabpanel" aria-labelledby="heading4">
          <div class="card-body">
          برای حذف آگهی ، کافیست از بخش "حساب من" بر روی "آگهی های من" کلیک کرده و وارد داشبورد خود شوید. 
          سپس با کلیک کردن بر روی لینک <span style="color:red">"حذف"</span> روی آگهی مدنظر، می توانید آن آگهی را حذف کنید.
        </div>
      </div>

      <!-- Accordion card 5 -->
      <div class="card">
        <!-- Card header 5 -->
        <div class="card-header" role="tab" id="heading5">
          <a class="collapsed" data-toggle="collapse" href="#collapse5"
            aria-expanded="false" aria-controls="collapse5">
            <h5 class="mb-0">
            آیا بارترلند روی معاملات نظارت دارد و امنیت معاملات را تضمین می‏ کند؟
            <svg class="svgpv" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
            </h5>
          </a>
        </div>
        <!-- Card body 5 -->
        <div id="collapse5" class="collapse p-4" role="tabpanel" aria-labelledby="heading5">
          <div class="card-body">
          اصولاً ماهیت سایت نیازمندی ‏ها به گونه ‏ای است که به دلیل حجم بالای معاملات امکان نظارت روی آنها وجود ندارد 
          و سایت چگونگی انجام معاملات را تعیین نمی ‏کند. بارترلند نیز از این قاعده مستثنی نیست و نمی ‏تواند روی 
          معاملات نظارت نماید اما سایت ما برای جلوگیری از تقلب ‏های احتمالی توسط افراد سودجو به کاربران پیشنهاد می 
          دهد که برای مبادله، کالا را به صورت حضوری ببینند و از صحت کامل آن اطمینان خاطر پیدا کنند.
      </div>
      <!-- Accordion card -->
    </div>
  <!-- Accordion wrapper -->
  </div>
</section>

@endsection