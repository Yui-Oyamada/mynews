{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'Profileの編集'を埋め込む --}}
@section('title', 'Profileの編集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Profile編集</h2>
            </div>
        </div>
    </div>
@endsection