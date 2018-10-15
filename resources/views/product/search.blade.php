{!! Form::open(['method'=>'GET','url'=>$url])  !!}
<div class="row"> 
	<div class="col-md-8">
    	<input type="text" class="form-control" name="search" placeholder="Từ khóa...">
	</div>
	<div class="col-md-2">
	    <input style="margin-top: 0px;" class="btn btn-primary" type="submit" value="Tìm kiếm">
	</div>
	<div class="col-md-2">
	    <a style="margin-top: 0px;"  href="{{url('backend/articles/create')}}" class="btn btn-success pull-right">Tạo mới</a>
	</div>
</div>
{!! Form::close() !!}