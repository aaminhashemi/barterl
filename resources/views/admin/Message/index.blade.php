@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
        <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">پیغام های کاربران</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>ایمیل</th>
                            <th>شماره تماس</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                        <tr role="row" class="">
                            <td><a href="">{{$loop->iteration}}</a></td>
                            <td><a href="">{{$message->email}}</a></td>
                            <td><a href="">{{$message->phone}}</a></td>
                            <td>
                                <a href="{{route('message_view',$message->id)}}" class="item-eye mlg-15" title="مشاهده"></a>
                                <a href="{{route('message_delete',$message->id)}}" class="item-delete " title="حذف"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop