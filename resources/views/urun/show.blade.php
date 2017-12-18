@extends('layout')
@section('title','Ürün Göster')
@section('content')
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>{{$urun->urun_adi}}</h3>
		</div>
		<div class="panel-body">
			<label>Ürün Açıklaması :</label> {{$urun->urun_aciklama}}
		</br>
			<label>Ürün Fiyatı :</label> {{$urun->urun_fiyat}}
		</div>
		<div class="panel-footer">
			<a class="btn btn-success btn-flat" href="{{route('urun.index',['page'=>$page])}}">Geri</a>
		</div>
	</div>
	@endsection
