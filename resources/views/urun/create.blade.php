@extends('layout')
@section('title','Ürün Oluştur')
@section('content')
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Ürün Ekle</h3>
		</div>
		{!! BootForm::open()->action(route('urun.store')) !!}
		<div class="panel-body">
			{!! BootForm::text('Ürün Adı:','urun_adi') !!}
			{!! BootForm::textarea('Ürün Açıklama:','urun_aciklama')->Attribute('row','5') !!}
			{!! BootForm::text('Ürün Fiyatı:','urun_fiyat') !!}
		</div>
		<div class="panel-footer">
			<a class="btn btn-success btn-flat" href="{{route('urun.index')}}">Geri</a>
			{!! BootForm::submit('Kaydet')->addClass('pull-right btn-success') !!}
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
