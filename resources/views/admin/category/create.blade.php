@extends('layouts.admin')

@section('css')
    <link href="{{ asset('admins/misc/add/add.css') }}" rel="stylesheet" />
@endsection

@section('title')
    <title>Create new Category</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content-header', ['name' => 'Category', 'key' => 'Create'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Category name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Enter new category" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Select Parent Category</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Select Parent Category</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
