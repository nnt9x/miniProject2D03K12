@extends('layout.base')

@section('title','Quản lý sản phẩm')

@section('title_content', 'Quản lý sản phẩm')

@section('content')

    <table class="table table-bordered" id="myTable">
        <thead>
        <tr>
            <th>Sản phẩm</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
        <tr>
            <td>
                <p>{{ $product->name }}</p>
                <img src="{{$product->image}}" width="200px" >
            </td>
            <td>
                {{ $product->description  }}
            </td>
            <td>
                <a type="button" class="btn btn-warning" href="{{url('/admin/products/'.$product->id.'/edit')}}">Sửa</a>
                <br>
                <form onsubmit="return confirm('Bạn có đồng ý xóa?')" action="{{url('/admin/products/'.$product->id.'/delete')}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @empty
            <tr>
                <td>Không có dữ liệu</td>
            </tr>
        @endforelse
        </tbody>
    </table>



@endsection

@section('js')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        } );
    } );
</script>
@endsection
