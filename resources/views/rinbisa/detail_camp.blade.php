@extends('layouts.app')

@section('content')
			
@foreach($detail as $det)
<div class="container">
	<h2>{{ $det->judul}}</h2>
	<div class="col-md-6">
		<img src="{{ asset('storage/rinbisa/campaign/' . $det->foto_camp )}}" width="500">
	</div>
	<div class="col-md-6">
			<h3>{{ 'Rp ' . number_format($det->target_don) }}</h3>
			<a href="{{ route('rinbisa.viewproses', $det->id_camp) }}" class="btn btn-danger">Donasi Sekarang</a>
	</div>
</div>
<br><br>
<div class="container">
		<ul class="nav nav-tabs">
            <li class="active"><a href="#Detail" data-toggle="tab">Detail</a></li>
            <li><a href="#Fundraiser" data-toggle="tab">Fundraiser</a></li>
            <li><a href="#Pesan" data-toggle="tab">Pesan</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="Detail">
                <p>{{ $det->desk_camp }}</p>
            </div>
            <div class="tab-pane" id="Fundraiser">
                <h1>Fundraising</h1>
			        @foreach($users as $user)
			        	<p>
			        		{{$user['name']}} (Rp. {{$user['nominal']}}) <br>
			        		{{ $user['komentar']}}
			        	</p>
			        @endforeach
            </div>
            <div class="tab-pane" id="Pesan">
             	<form>
             		<div class="form-group">
             			<label>Nama Lengkap</label>
             			<input type="text" name="" class="form-control" required>
             		</div>
             		<div class="form-group">
             			<label>Email</label>
             			<input type="email" name="" class="form-control">
             		</div>
             		<div class="form-group">
             			<label>Perihal</label>
             			<input type="text" name="" class="form-control">
             		</div>
             		<textarea name="editor1" class="form-control" id="article-ckeditor"></textarea>
             		
             		<div class="form-group">
             			<label>Pesan</label>
             			<textarea class="form-control"></textarea>
             		</div>
             		<input type="submit" name="" class="btn btn-primary">
             	</form>  
            </div>
        </div>
</div>
@endforeach
		
@endsection

@section('js')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
 @append