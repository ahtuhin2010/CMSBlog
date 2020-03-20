@extends('layouts.admin.app')

@section('title', 'Create Tag')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Tag</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('tag.store')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        @include('layouts.admin.partials.errors')
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                            @error('name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('tag.index')}}" class="btn btn-warning">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
