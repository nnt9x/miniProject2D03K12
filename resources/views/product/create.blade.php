@extends('layout.base')

@section('title','Thêm sản phẩm')
@section('title_content', 'Thêm sản phẩm')

@section('content')
    <div class="container">
        <form action="{{url('/admin/products/create')}}" method="POST">
            @csrf
            <input name="pName" type="text" class="form-control" placeholder="Tên sản phẩm">
            <br>
            <input name="pPrice" type="number" class="form-control" placeholder="Gía sản phẩm ">
            <br>
            <input name="pImage" type="text" class="form-control" placeholder="Hình ảnh - URL">
            <br>
            <textarea name="pDescription" id="editor" ></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </div>

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
