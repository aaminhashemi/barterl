@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
    <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">دسته بندی ها</p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>نام دسته بندی</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                        <tr role="row" class="">
                            <td><a href="">{{$loop->iteration}}</a></td>
                            <td><a href="">{{$category->name}}</a></td>
                            <td>
                                <a href="" class="item-delete mlg-15" title="حذف"></a>
                                <a href="{{route('category_edit',$category->id)}}" class="item-edit " title="ویرایش"></a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('admin.category.create')
    </div>
</div>
@stop