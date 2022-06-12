@extends('layout')
@section('content')
			<div  class="productdetail">
				Mã sản phẩm: {{$prod->ProductId}}<br>
				Tên sản phẩm: {{$prod->ProductName}}<br>
				Đơn vị tính : {{$prod->Unit}}<br>
				Đơn giá: @php echo number_format($prod->Price); @endphp <br>
				<img src="images/{{$prod->Img}}" width="250px" height="300px">
			</div>
@stop	