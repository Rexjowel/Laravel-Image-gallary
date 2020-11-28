@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload Image') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}

                    <form action="/image" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="image[]" class="form-control-image" multiple accept="image/*">
                        </div>
                        <input type="submit" value="upload" class="btn btn-primary">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
