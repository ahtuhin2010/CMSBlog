@extends('layouts.admin.app')

@section('title', 'All Category')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

@endpush

@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('category.create')}}" class="btn btn-primary">Add New</a>
                    @include('layouts.admin.partials.errors')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered datatable">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $key=>$category)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>{{ $category->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('category.edit', $category->id)}}" class="btn btn-info btn-sm"><i class="material-icons">edit</i></a>

                                                <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy', $category->id )}}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure? You Want To Delete This?'))
                                                    {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $category->id }}').submit();
                                                    }else{
                                                    event.preventDefault();
                                                    }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                "order": [
                    [0, "asc"]
                ]
            });
        });
    </script>
@endpush
