@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
        <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">کاربران</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr role="row" class="">
                            <td><a href="">{{$loop->iteration}}</a></td>
                            <td><a href="">{{$user->firstname}}</a></td>
                            <td><a href="">{{$user->lastname}}</a></td>
                            <td><a href="">{{$user->email}}</a></td>
                            <td>
                                <a href="{{route('user_delete',$user->id)}}" class="item-delete mlg-15" title="حذف"></a>
                                <a href="{{route('user_set_admin',$user->id)}}" class="item-eye mlg-15" title="تنظیم به عنوان ادمین"></a>
                                <a href="{{route('user_edit',$user->id)}}" class="item-edit " title="ویرایش"></a>
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