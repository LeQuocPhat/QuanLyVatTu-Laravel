@extends('layout')
@section('content')
			<div  class="row container-fluid" style="padding: 0px; margin: 0px">
			@foreach($product as $p)
				<div class="col-md-3 col-md-3 gir">
					<a href="{{route('proddetail',['ProductId'=>$p->ProductId])}}">
						{{$p->ProductName}}
					</a>
					<br>
					<a href="{{route('proddetail',['ProductId'=>$p->ProductId])}}">
						<img src="images/{{$p->Img}}" height="50">
					</a>
					<br>@php echo number_format($p->Price, 0);
					 @endphp
				</div>
			@endforeach
			</div><br/>
			{{$product->links()}}
@stop	