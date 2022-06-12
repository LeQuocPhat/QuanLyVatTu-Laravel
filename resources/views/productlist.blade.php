@extends('layout')
@section('content')
	<div class="row container-fluid">
		<h2> Danh sách sản phẩm</h2>
		<table class="table table-striped">
			<tr>
				<td>Mã SP</td>
				<td>Tên sản phẩm</td>
				<td>Đơn vị tính</td>
				<td>Đơn giá</td>
				<td>Loại</td>
				<td>Hình sản phẩm</td>
			</tr>
			@foreach($product as $p)
			<tr>
				<td>{{$p->ProductId}}</td>
				<td>{{$p->ProductName}}</td>
				<td>{{$p->Unit}}</td>
				<td>{{$p->Price}}</td>
				<td>{{$p->Category->CategoryName}}</td>
				<td>
					<img src="images/{{$p->Img}}" width="50" height="40">
				</td>
				<td>
					<a href="{{route('proddel',['ProductId'=>$p->ProductId])}}">Delete</a>
				</td>
			</tr>
			@endforeach
		</table>
		{{$product->links()}}
	</div>
@stop