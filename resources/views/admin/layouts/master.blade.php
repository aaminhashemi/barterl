<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
<body>
@include('admin.layouts.header')
<div class="content">
   
    <div class="breadcrumb">
        <ul>
            <li><a href="/admins" title="پیشخوان">پیشخوان</a></li>
          </ul>
    </div>
    @yield('content')

</div>
</body>
    @include('admin.layouts.footer')
</html>