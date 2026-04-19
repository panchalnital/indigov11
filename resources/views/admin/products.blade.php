@extends('admin.layout.app')

@section('content');


      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa fa-star"></i> Products deatils</h3>
        <div class="card-body">
  
            @session('success')
                <div class="alert alert-success" role="alert"> 
                    {{ $value }}
                </div>
            @endsession
  
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
  
            <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
  
                <input type="file" name="file" class="form-control">

                <br>
                <button class="btn btn-success"><i class="fa fa-file"></i> Import producst Data</button>
            </form>
    
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        List Of Products
                        <a class="btn btn-warning float-end" href="{{ route('products.export') }}"><i class="fa fa-download"></i> Export User Data</a>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>description</th>
                    <th>sku</th>
                    <th>price</th>
                    <th>stock</th>
                    <th>category_id</th>
                    <th>image_url</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->image_url }}</td>
                </tr>
                @endforeach
            </table>
    
        </div>
    </div>
</div>
       
@endsection