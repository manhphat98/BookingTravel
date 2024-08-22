@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header" style="display: flex; justify-content: center; align-items: center;">
        <h4 class="card-title">Liệt kê Danh Mục</h4>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</div>
@endsection

@endsection
