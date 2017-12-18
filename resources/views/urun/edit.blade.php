@extends('layout')
@section('title','Ürün Düzenle')
@section('content')
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Ürün Düzenle</h3>
		</div>
		{!! BootForm::open()->action(route('urun.update',$urun->id)) !!}
		{!! method_field('PATCH') !!}
		{!! BootForm::bind($urun) !!}
		<div class="panel-body">
			@if(session()->has('message'))
			<div class="alert alert-success">
				<strong> {{ session()->get('message') }} </strong>
			</div>
			@endif
			{!! BootForm::text('Ürün Adı:','urun_adi') !!}
			{!! BootForm::textarea('Ürün Açıklama:','urun_aciklama')->Attribute('row','5') !!}
			{!! BootForm::text('Ürün Fiyatı:','urun_fiyat') !!}
		</div>
		<div class="panel-footer">
			<a class="btn btn-success btn-flat" href="{{route('urun.index',['page'=>$page])}}">Geri</a>
			{!! BootForm::submit('Kaydet')->addClass('pull-right btn-success') !!}
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
