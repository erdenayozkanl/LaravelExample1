@extends('layout')
@section('title','Ürünleri Listele')
@section('content')
<div class="col-md-12">
	<a class="btn btn-success pull-right" style="margin-bottom:20px;padding:5px 30px;" href="{{route('urun.create')}}">Ekle</a>
	<table class="table table-bordered table-striped">
		<thead>
			<th>#</th>
			<th>Ürün Adı</th>
			<th>Ürün Açıklama</th>
			<th style="width:100px">Ürün Fiyatı</th>
			<th style="width:220px;">Aksiyonlar</th>
		</thead>
		<tbody>
			@forelse($all_urun as $urun)
			<tr>
				<td>{{$urun->id}}</td>
				<td>{{$urun->urun_adi}}</td>
				<td>{{$urun->urun_aciklama}}</td>
				<td>{{$urun->urun_fiyat}}</td>
				<td>
					<center>
						<a class="btn btn-flat btn-info" href="{{route('urun.show',['urun' => $urun->id,'page' => $all_urun->currentPage()])}}">Göster</a>
						<a class="btn btn-flat btn-success" href="{{route('urun.edit',['urun' => $urun->id,'page' => $all_urun->currentPage()])}}">Düzenle</a>
						<a class="btn btn-flat btn-danger" href="{{route('urun.destroy',$urun->id)}}" onclick="return kontrol()">Sil</a>
					</center>
				</td>
			</tr>
			@empty
			<td colspan="5"><h4 style="text-align: center">Ürün Mevcut Değil</h4></td>
			@endforelse
		</tbody>
	</table>
	<center>{{ $all_urun->links() }}</center>
</div>
@endsection
@section('js-code')
<script>
	function kontrol(){
		return confirm('Silmek İstediğine Emin Misin ?');
	}
</script>
@endsection