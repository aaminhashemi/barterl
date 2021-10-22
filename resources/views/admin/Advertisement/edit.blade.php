@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
        <div class="col-8 bg-white">
            <p class="box__title">{{'ویرایش دسته بندی'.' '.$category->name}}</p>
            <form action="{{route('category_update',$category->id)}}" method="post" class="padding-30">
                @csrf
                <input type="text" placeholder="نام دسته بندی" name="name" class="text" value="{{$category->name}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-webamooz_net">ویرایش</button>
            </form>
        </div>
    </div>
</div>

@stop