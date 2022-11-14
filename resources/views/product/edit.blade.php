@extends('layout.base')

@section('title','Cập nhật sản phẩm')
@section('title_content', 'Cập nhật sản phẩm')

@section('content')

    @if($product == null)
        <h1>Không có sản phẩm</h1>
    @else

    <div class="container">
        <form action="{{url('/admin/products/'.$product->id.'/edit')}}" method="POST">
            @csrf
            @method('put')
            <input value="{{ $product->name  }}"  name="pName" type="text" class="form-control" placeholder="Tên sản phẩm">
            <br>
            <input value="{{$product->price}}" name="pPrice" type="number" class="form-control" placeholder="Gía sản phẩm ">
            <br>
            <input value="{{$product->image}}" name="pImage" type="text" class="form-control" placeholder="Hình ảnh - URL">
            <br>
            <textarea name="pDescription" id="editor" >{{$product->description}}</textarea>
            <br>
            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
        </form>
    </div>
    @endif

@endsection

@section('js')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
