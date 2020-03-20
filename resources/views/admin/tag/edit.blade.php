@extends('layouts.admin.app')

@section('title', 'Edit Tag')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit Category : {{ $tag->name }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('tag.update', $tag->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        @include('layouts.admin.partials.errors')
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $tag->name }}">

                                            @error('name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('tag.index')}}" class="btn btn-warning">Back</a>
                                <button type="submit" class="btn btn-primary">Update Tag</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
