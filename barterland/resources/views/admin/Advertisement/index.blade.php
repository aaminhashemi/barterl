@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
        <div class="col-9 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">آگهی ها</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>نام آگهی</th>
                            <th>راه ارتباطی</th>
                            <th>کاربر درخواست دهنده</th>
                            <th>شهر</th>
                            <th>دسته بندی</th>
                            <th>دانشگاه</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ads as $ad)
                        <tr role="row" class="">
                            <td><a href="">{{$loop->iteration}}</a></td>
                            <td><a href="">{{$ad->name}}</a></td>
                            <td><a href="">{{$ad->contactway}}</a></td>
                            <td><a href="">{{$ad->uname}}</a></td>
                            <td><a href="">{{$ad->cname}}</a></td>
                            <td><a href="">{{$ad->cat}}</a></td>
                            <td><a href="">{{$ad->uni}}</a></td>
                            <td>
                                <a href="#" onclick=deleteItem(event,"{{route('adv_delete',$ad->id)}}",'tr') class="item-delete mlg-15" title="حذف"></a>
                                <a href="{{route('adv_show',$ad->id)}}" class="item-eye " title="مشاهده"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @include('admin.Advertisement.search')
    </div>

</div>
@stop
