@extends('layout.base')

@section('title','Chi tiết sản phẩm')
@section('title_content', 'Chi tiết sản phẩm')

@section('content')
    @if(empty($product))
        <h2>Không có sản phẩm</h2>
    @else
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>{{$product->name}}</h2>
                    <img src="{{ $product->image }}" class="img-fluid">
                    <br>
                    <b>{{$product->price}} </b>
                </div>
                <div class="col-8">
                    {!!  $product->description!!}
                </div>
            </div>
        </div>
    @endif
@endsection
