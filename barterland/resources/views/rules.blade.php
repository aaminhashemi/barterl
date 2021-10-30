@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/rules.css')}}">

<head>
  <title>{{ __('بارترلند -> قوانین و مقررات') }}</title>
</head>

<!--Headline -->
<div class="ui vertical text-center aligned fluid container pad50" id="header">
  <h2 class=" text-black-50" style="padding-right: 22px;">قوانین و مقررات</h2>
</div>

<!--Accordion wrapper-->
<section class=" p-4  mb-4">
  <div class="row">

<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

<!-- Accordion card 1 -->
<div class="card1">

  <!-- Card header 1 -->
  <div class="card-header1" role="tab" id="headingOne1">
    <a data-toggle="collapse"  href="#collapseOne1" aria-expanded="true"
      aria-controls="collapseOne1">
      <h5 class="mb-0">
      ضوابط و شرایط استفاده از خدمات بارترلند 
      </h5>
    </a>
  </div>

  <!-- Card body 1 -->
  <div id="collapseOne1" class="collapse show p-4"
    role="tabpanel" aria-labelledby="headingOne1">
    <div class="card-body">
    کاربرانی که قصد استفاده از خدمات بارترلند را دارند، لازم است این ضوابط و شرایط را به طور کامل مطالعه و سپس اقدام به عضویت و یا درج آگهی خود در پایگاه اینترنتی و برنامه بارترلند (سامانه بارترلند) نمایند. عضویت و درج آگهی در سامانه بارترلند به منزله علم و آگاهی کلیه کاربران نسبت به ضوابط و شرایط خدمات مورد درخواست می باشد. لازم به ذکر است که کاربران با درج آگهی، ثبت درخواست خدمات و یا عضویت در سامانه بارترلند ، در واقع اعلام می نمایند که کلیه ضوابط و مقررات را مطالعه نموده و ملتزم به آن می باشند و طبق ماده ۱۰ قانون مدنی با درج آگهی و ثبت درخواست خدمات در سامانه در واقع قراردادی بین کاربر و بارترلند منعقد می گردد که طرفین طبق ضوابط و مفاد ذیل متعهد به آن می باشند. لذا هرگونه ادعایی مبنی بر بی اطلاعی نسبت به ضوابط مسموع نمی باشد و بارترلند در این خصوص مسئولیتی ندارد.
    همچنین کاربر باید توجه نماید که این ضوابط و مقررات در طول زمان قابل تغییر است و این تغییرات در پایگاه اینترنتی، برنامه و سامانه بارترلند به روز رسانی می گردد، لذا مسئولیت مطالعه و آگاهی از این تغییرات بر عهده کاربران می باشد.
    </div>
  </div>

</div>

<!-- Accordion card 2 -->
<div class="card1">

  <!-- Card header 2 -->
  <div class="card-header1" role="tab" id="headingTow2">
    <a data-toggle="collapse"  href="#collapseTow2"
      aria-expanded="true" aria-controls="collapseTow2">
      <h5 class="mb-0">
        حفظ حریم شخصی و امنیت اطلاعات
      </h5>
    </a>
  </div>

  <!-- Card body 2 -->
  <div id="collapseTow2" class="collapse p-4"
    role="tabpanel" aria-labelledby="headingTow2">
      <div class="card-body">
      1.	بارترلند ضمن احترامی که برای حفظ حریم شخصی کاربران قائل است، برای استفاده از امکانات پایگاه اینترنتی و برنامه بارترلند توسط کاربران، اطلاعاتی را از کاربران درخواست می کند تا بتواند خدمات امن و مطمئنی را به کاربران خود ارائه نماید. بارترلند درخصوص این اطلاعات مطابق با قانون حریم خصوصی جمهوری اسلامی ایران عمل می کند.<br/><br/>
      2.	 بارترلند تعهد می نماید که از اطلاعات جمع آوری شده توسط سرورهای بارترلند با استفاده از روش ها و ابزارهای عرفی متعدد از جمله رمزگذاری، پسووردها، امنیت فیزیکی و... محافظت نماید. در صورتیکه علیرغم اتخاذ اقدامات احتیاطی و حفاظتی معمول، اشخاص ثالث به اطلاعات جمع آوری شده دسترسی غیر مجاز و غیر قانونی پیدا نمایند بارترلند بارترلند هیچگونه مسئولیتی در این خصوص نخواهد داشت.<br/><br/>
      3.	 بارترلند بنا به صلاحدید ممکن است اطلاعات شخصی کاربر را به منظور پاسخگویی به درخواست‏های قانونی صادره از مراجع ذیصلاح و یا پاسخ ‏دهی به ادعاهایی مبنی بر این که موضوع یا مضمونی مخل حقوق دیگران شده، یا برای حمایت از حقوق مالکیت و یا امنیت هر شخص ثالثی، استفاده یا افشاء نماید. لذا با تایید این ضوابط و مقررات، کاربران صراحتاً رضایت خود را با جمع‏ آوری، نگهداری، استفاده و افشاء اطلاعات شخصی خود، در چارچوب شرایطی که در این بخش از ضوابط مشخص شده است، اعلام می‏کنند.<br/><br/>
      4.	  اطلاعاتی که ممکن است توسط بارترلند جمع آوری، ذخیره و یا استفاده گردد، به شرح ذیل می باشد:<br/>
  -                نشانی پست الکترونیکی، شماره تلفن، اطلاعات تماس (با توجه به خدمات استفاده شده)<br/><br/>

  5.  مسئولیت حفظ و نگهداری از اطلاعات لازم برای ورود به حساب کاربری شامل نام کاربری، رمز عبور و اطلاعات شخصی درج شده در حساب کاربری، بر عهده کاربران می باشد. لذا برای جلوگیری از هرگونه سوء استفاده احتمالی، کاربران نباید این اطلاعات را برای شخص دیگری فاش نمایند. کاربران باید توجه داشته باشند که همواره و در هر شرایطی، دارنده حساب کاربری نسبت به بارترلند ، مسئول قلمداد می گردد. <br/><br/>
  6. کاربر بارترلند مجاز نمی باشد اطلاعات کاربران دیگر را بدون کسب رضایت صریح آنها جمع آوری، ذخیره، استفاده و یا بازنشر نماید.<br/><br/>

    </div>
  </div>

</div>

<!-- Accordion card 3 -->
<div class="card1">

  <!-- Card header 3 -->
  <div class="card-header1" role="tab" id="headingThree3">
    <a data-toggle="collapse"  href="#collapseThree3" aria-expanded="true"
      aria-controls="collapseThree3">
      <h5 class="mb-0">
      شرایط و تعهدات عمومی کاربران بارترلند
      </h5>
    </a>
  </div>

  <!-- Card body 3 -->
  <div id="collapseThree3" class="collapse p-4"
    role="tabpanel" aria-labelledby="headingThree3">
    <div class="card-body">
    1.	برای استفاده از هرگونه خدمات بارترلند و درج آگهی سن کاربر باید حداقل ۱۸ سال تمام باشد. در صورت بروز هرگونه مشکل و ایجاد مسئولیت های قانونی ناشی از درج آگهی در سامانه بارترلند توسط کاربری که کمتر از ۱۸ سال داشته باشد، کلیه مسئولیت های قانونی مربوط به معاملات و درج آگهی وی در سامانه بارترلند متوجه شخص درج کننده آگهی و ولی قانونی وی می باشد و بارترلند مسئولیتی در این زمینه ندارد.<br/><br/>
    2.	کاربر تعهد می نماید که کالاها و خدماتی که در آگهی درج می نماید متعلق به خود وی می باشد و یا مجوزهای لازم از سوی مالک و یا نهادهای ذیصلاح جهت معاوضه ی آن کالا یا خدمات را دارا می باشد. در صورتی که خلاف آن کشف گردد، کلیه مسئولیت های ناشی از فروش و یا ارایه خدمات غیرمجاز به عهده کاربر بوده و بارترلند در این زمینه مسئولیتی ندارد. <br/><br/>
    3.	مسئولیت قانونی و حقوقی آگهی درج شده توسط کاربر در سامانه بارترلند به عهده کاربر می باشد. لذا مسئولیت بررسی صحت اطلاعات و مطابقت آن با قوانین و مقررات، اخلاق حسنه و عرف اسلامی برعهده کاربر بوده و کاربر تعهد می نماید که از درج آگهی های مرتبط با کالا و خدماتی که طبق قوانین و مقررات جمهوری اسلامی غیر مجاز می باشد، خودداری نماید. بدیهی است بارترلند مسئولیتی در خصوص آگهی های درج شده خلاف قانون و مقررات کشور و آگهی های مخل حقوق اشخاص ثالث، ضوابط و سیاست های بارترلند ندارد.<br/><br/>
    4.	کاربر تعهد می نماید که از روبات، اسپایدر، اسکریپر یا سایر وسایل اتوماتیک جهت دسترسی به سایت و سامانه بارترلند به هر دلیل و یا با هر قصدی بدون دریافت مجوز صریح و کتبی از بارترلند استفاده ننماید، در غیر اینصورت مسئول کلیه خسارات وارده به سامانه بارترلند می باشد.<br/><br/>
    5.	کاربر تعهد می نماید اطلاعات درخواست شده در سامانه را به درستی اعلام نماید. بارترلند مسئولیتی در قبال هر گونه مشکلی که به علت عدم ثبت صحیح اطلاعات ایجاد گردد، ندارد.<br/><br/>
    6.	کاربر تعهد می نماید از انجام هر عملی که ممکن است بی دلیل، ناخواسته یا به طور نامناسب فشار زیادی را به زیرساخت های فنی بارترلند تحمیل کند، خودداری نماید، در غیر این صورت متعهد به پرداخت خسارت وارده می باشد. میزان خسارات وارده به تشخیص کارشناسان بارترلند ارزیابی و اعلام می گردد.<br/><br/>
    7.	 کاربر تعهد می نماید از کپی کردن، جعل، خلق مجدد و ویرایش هر مضمونی از سایت‏های متعلق به اشخاص ثالث و عرضه و نمایش عمومی آن در سامانه بارترلند خودداری نماید مگر آنکه پیشاپیش مجوز صریح و مکتوب بارترلند و یا شخص ثالث مربوطه را دریافت کرده باشد.<br/>
    </div>
  </div>

</div>

<!-- Accordion card 4 -->
<div class="card1">

  <!-- Card header 4 -->
  <div class="card-header1" role="tab" id="heading4">
    <a data-toggle="collapse"  href="#collapse4" aria-expanded="true"
      aria-controls="collapse4">
      <h5 class="mb-0">
      شرایط و تعهدات عمومی بارترلند
      </h5>
    </a>
  </div>

  <!-- Card body 4 -->
  <div id="collapse4" class="collapse  p-4" role="tabpanel" aria-labelledby="heading4"
    >
    <div class="card-body">
    1.	سامانه بارترلند صرفاً محلی برای درج آگهی ها بوده و به عنوان فروشگاه فعالیت نمی نماید و تنها معاوضه کنندگان را بدون واسطه در ارتباط مستقیم با یکدیگر قرار می دهد، لذا بررسی کیفیت، استاندارد و رعایت قوانین و مقررات کشور جهت معاوضه ی کالا و خدمات، قانونی بودن کالا و خدمات آگهی شده و صحت مضامین آگهی‏ های کاربران بر عهده کاربر می باشد. بارترلند ، کارمندان، مدیران و سهامداران آن هیچ مسئولیت قانونی و اخلاقی در قبال محصولات و خدماتی که از طریق سامانه‏ بارترلند توسط اشخاص ثالث به عموم عرضه و آگهی می شود، یا درخصوص محتوای آگهی های منتشره در سامانه‏ بارترلند که توسط اشخاص ثالث تولید شده، ندارد و صرفاً در حدود قانون، آگهی‏ های اشخاص ثالث را در سامانه‏ بارترلند درج می‏کند.<br/><br/>
    2.	بارترلند هیچگونه مسئولیتی در معاملات فی مابین معاوضه کنندگان ندارد. بدیهی است بارترلند مسئولیتی نیز در قبال ورود ضرر و زیان، خدشه به حسن نیت یا اعتبار، یا هرگونه خسارت مستقیم یا غیرمستقیم که ممکن است در نتیجه استفاده از سامانه بارترلند به کاربر وارد آید، ندارد.<br/><br/>
    3.	 بارترلند هیچ مسئولیتی در قبال لینک‏ سایت‏ها، فایل‏ها و مضامینی که توسط کاربران در سامانه‏ بارترلند درج و یا بارگذاری می گردد و در دسترس عموم قرار می گیرد، ندارد. بدیهی است بارترلند ، از کیفیت خدمات یا محصولات مرتبط به این سایت‏ها، فایل ها و مضامین مطلع نبوده و آنها را تضمین نمی نماید.<br/><br/>
    4.	بارترلند می تواند حساب های کاربری تأیید نشده یا حساب های کاربری که برای مدت طولانی فعال نبوده اند را لغو نماید و همچنین می تواند محتوای آگهی های منتشره در سامانه بارترلند را به منظور رعایت قوانین کشور اصلاح، ویرایش و حذف کند. در صورتی که کاربر الزامات قانونی را زیر پا گذارد، به حقوق معنوی و یا قانونی شخص ثالث تجاوز ‏کند، یا تعهدات مندرج در این ضوابط را نقض نماید، بارترلند می تواند برحسب مورد، خدمات و حساب کاربری کاربر را محدود نماید یا به تعلیق درآورد و یا آن را مسدود کند، به گونه ‏ای که از دسترسی کاربر به سامانه بارترلند ممانعت به عمل آید.<br/>

    </div>
  </div>

</div>

<!-- Accordion card 5 -->
<div class="card1">

  <!-- Card header 5 -->
  <div class="card-header1" role="tab" id="heading5">
    <a data-toggle="collapse"  href="#collapse5" aria-expanded="true"
      aria-controls="collapse5">
      <h5 class="mb-0">
      شرایط و ضوابط درج آگهی در سامانه بارترلند      </h5>
    </a>
  </div>

  <!-- Card body 5 -->
  <div id="collapse5" class="collapse  p-4" role="tabpanel" aria-labelledby="heading5"
    >
    <div class="card-body">
    <b>الف- شرایط آگهی</b><br/>
    کاربر باید توجه نماید که ضرورت دارد هر آگهی صرفاً در راستای تبلیغ معاوضه ی یک کالا و خدمات خاص باشد و حاوی تصویر واقعی از کالا و یا خدمات درج شده در آگهی باشد. چنانچه تصاویر و یا آگهی درج شده با هر یک از ضوابط و شرایط بارترلند مغایرت داشته باشد، صرف نظر از اینکه مسئولیت های قانونی مربوطه بر عهده آگهی دهنده می باشد، به مجرد اطلاع بارترلند آگهی و یا تصویر توسط ناظر بارترلند حذف می گردد. در موارد زیر آگهی یا تصویر آگهی حذف می گردد:<br/><br/>
    -          درج آگهی تکراری، مشابه و یا درج چند آگهی با یک تصویر، استفاده از آگهی کاربران دیگر، استفاده از فونت درشت و نامناسب و رنگی به نحوی که تصویر آگهی را غیرقابل مشاهده نماید؛<br/><br/>
    -          ثبت تصویر نامرتبط با کالا و یا خدمات آگهی شده، ثبت آگهی با خدمات نامشخص و کلی، ثبت آگهی کالا با مشخصات و توضیحات نامرتبط، ارایه اطلاعات مخدوش، نادرست و غیر موثق و استفاده از متون و عبارات اغراق آمیز در آگهی از قبیل یک شبه پولدار شوید، زیر قیمت واقعی، مفت، ارزان و..... به نحوی که مشتری را گمراه نماید؛<br/><br/>
    -          ثبت آگهی اعضای بدن؛<br/><br/>
    -          ثبت آگهی مربوط به کالاهای قاچاق و غیرقانونی؛<br/><br/>
    -          ثبت آگهی کالاهایی که طبق قوانین جمهوری اسلامی معامله آنها ممنوع است؛<br/><br/>
    -          ثبت آگهی اموال مسروقه یا کالاهایی که از ارتکاب جرم و یا به واسطه نقض مقررات جمهوری اسلامی ایران به دست آمده باشد؛<br/><br/>
    -          ثبت آگهی مواد مخدر و روان گردان، عناصر سازنده و یا متعلقات آن و به طور کلی کالاهایی که برای مصرف کننده می تواند خطرناک باشد؛<br/><br/>
    -          ثبت آگهی کالاهایی که معامله آنها دارای تشریفات و الزامات قانونی و مقررات خاصی است؛<br/><br/>
    -          ثبت آگهی کالاهای خلاف شئون اجتماعی و اخلاقی جامعه و یا آگهی هایی که دارای محتوا و تصاویر خلاف شئون جامعه باشد؛<br/><br/>
    -          ثبت آگهی کالاهای مرتبط با قمار، بخت آزمایی و شرط بندی؛<br/><br/>
    -          ثبت آگهی کالای مرتبط با بازاریابی شبکه ای، چند مرحله ای، هرمی، ماتریسی و......؛<br/><br/>
    -          استفاده از لغات یا عبارات نامناسب و توهین آمیز در متن و یا تصویر آگهی؛<br/><br/>
    -          ثبت آگهی کالاهایی که در توضیح آنها از مفاهیم انتزاعی در حوزه دین و اعتقادات مردمی استفاده شده است مانند دعا، طلسم، سحر، جادو و جنبل، بخت، شانس، اقبال، یمن، گشایش امور و....؛<br/><br/>
    -          ثبت آگهی کالاهای مربوط به میراث فرهنگی کشور؛<br/><br/>
    -          ثبت آگهی کالاهای ممنوع ذکر شده در سایت کارگروه تعیین مصادیق محتوای مجرمانه به آدرس <a href="http://internet.ir">http://internet.ir</a><br/><br/>
    -          درج لینک و یا هرگونه تبلیغ سایت نیازمندیها و یا فروشگاه های اینترنتی و درج لینک و یا آی دی شبکه های اجتماعی در محتوا، عنوان و یا تصویر آگهی؛<br/><br/>
    -          استفاده از نام فروشگاه ها، بازاریابی یا تبلیغات کسب و کار و یا فروش عمده کالا در عنوان آگهی<br/><br/>
    <b>ب- فعالیت های ممنوعه</b><br/>
    کاربر به هیچ عنوان نباید از طریق درج آگهی و فعالیت درسامانه بارترلند اعمال غیرقانونی یا مجرمانه (فعالیت های ممنوعه) مرتکب گردد. در صورت ارتکاب فعالیت های ممنوعه، بارترلند می تواند راساً و بدون هیچگونه اخطار قانونی، حساب کاربری کاربر را مسدود و علیه وی اقدامات قانونی لازم را به عمل آورد. بدیهی است بارترلند هیچگونه مسئولیتی درمورد فعالیت و آگهی که خلاف این ضوابط درج گردیده، ندارد. فعالیت های ممنوعه مندرج در ذیل من باب تمثیل بوده و محدود و منحصر به موارد ذیل نیست و هر فعالیت خلاف قوانین و مقررات حاکم بر کشور را شامل می شود:<br/><br/>
    -          توهین به ادیان رسمی کشور، قومیت ها، گویش های مختلف، توهین به اشخاص عادی و یا مقامات حکومتی؛<br/><br/>
    -          درخواست کمک نقدی از طریق آگهی و به هرروشی، انجام امور خیریه و جمع آوری کمک های مالی از طریق سامانه بارترلند<br/><br/>
    -          افشا یا انتشار اطلاعات کاربران و یا استفاده از این اطلاعات به هر دلیلی؛<br/><br/>
    -          تخطی از قوانین جمهوری اسلامی ایران شامل و نه محدود به قوانین جزایی، مدنی، مالی، تجاری، بانکی، مالیاتی، گمرکی، قوانین تجارت الکترونیک، قانون حمایت از حقوق پدیدآورندگان نرم افزارهای رایانه ای، قانون ثبت اختراعات، قانون جرایم رایانه ای و قانون مبارزه با پولشویی و .....؛<br/><br/>
    -           معاوضه کالاهای تقلبی و قاچاق؛<br/><br/>
    -          اشاعه و تبلیغ های صنفی و حزبی؛<br/><br/>
    -          ارسال پیام های الکترونیکی و هرزنامه از طریق سامانه به سایر کاربران؛<br/><br/>
    -          تلاش برای مداخله و یا اخلال در سایت و سامانه بارترلند ، استفاده از نرم افزارهای اخلالگر مانند ویروس ها، تروجان ها و کرم های اینترنتی که موجب اخلال در کار رایانه های شرکت یا سرقت اطلاعات شود؛ <br/><br/>
    -          انجام فعالیت های ممنوع ذکر شده در سایت کارگروه تعیین مصادیق محتوای مجرمانه به آدرس <a href="http://internet.ir">http://internet.ir</a><br/><br/>
    <b>ت- معاملات ممنوع در بارترلند</b><br/>
    کاربر تعهد می نماید که از طریق درج آگهی در سامانه بارترلند اقدام به انجام معاملات ذیل ننماید:<br/><br/>
    -          معاملات مربوط به کالاهایی که متعلق به فروشنده نبوده و یا فروشنده مجوزهای قانونی لازم جهت فروش آنها را ندارد؛  <br/><br/>
    -          معاملات مربوط به کالاهایی که حقوق مالکیت فکری افراد را نقض نموده است؛<br/><br/>
    -          معاملات مرتبط با اموال تاریخی و فرهنگی به دست آمده از حفاری غیر مجاز؛<br/><br/>
    -          معاملاتی که اطلاعات شخصی افراد دیگر را به صورت غیر قانونی فاش کند؛<br/><br/>
    -          معاملات مربوط به شرکتهای هرمی، برنامه های شبکه ای و برنامه های بازاریابی، قمار و شرط بندی و سایر فعالیتهایی که با دریافت مبلغی برای شرکت در مسابقه جایزه می دهند؛<br/><br/>
    -           معاملاتی که توسط افرادی غیر از مالکین و به نمایندگی از طرف آنها وجوه دریافت و جمع آوری گردد؛ و<br/><br/>
    -          کلیه معاملاتی که طبق قوانین جمهوری اسلامی ممنوع و غیر مجاز است.
    </div>
  </div>

</div>
</div>
<!-- Accordion wrapper -->
</div>
</section>
@endsection