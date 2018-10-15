@extends('backend.tblTemplate')
@section('title',$title)
@section('body')
    @include('messages.flash_message')
    @include('product.search', ['url'=>'backend/articles/search'])
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Slug</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Size</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Front Image</th>
            <th>Side Image</th>
            <th>Left Image</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $p)
            {{-- {{ dd($p->size) }}--}}
            <tr>
                <td>{{ $p->product_id }}</td>
                <td>{{ $p->slug }}</td>
                <td>{{ $p->name}}</td>
                <td>{{ $p->brands->brand }}</td>
                <td>{{implode(",", $p->size->pluck("size")->all())}}</td>
                <td>{{ $p->category->cat }}</td>
                <td>{{ $p->quantity }}</td>
                <td>{{ $p->price }}</td>

                <td><img src="{{asset('images/products/'.$p->a_img)}}" height="35" width="25"></td>
                <td><img src="{{asset('images/products/'.$p->b_img)}}" height="35" width="25"></td>
                <td><img src="{{asset('images/products/'.$p->c_img)}}" height="35" width="25"></td>
                <td><a href="{{route('articles.show',$p->product_id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                <td><a href="{{route('articles.edit',$p->product_id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['articles.destroy', $p->product_id]]) !!}
                    {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit','class' => 'btn btn-danger','onclick'=>'return confirm("Bạn chắc muốn xóa dữ liệu này?")']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <nav>
            {!! $products->appends(Input::except('page'))->render() !!}
        </nav>
    </div>
    <div class="row">
    </div>
@endsection