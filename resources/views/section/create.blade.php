@extends('templates.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Data Section</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Data Section</h6>
        </div>
        <div class="card-body">
            <form action="/data-section/create" method="post">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter name section">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Enter description section">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Create Section</button>
                        <a href="/data-section" class="btn btn-secondary">Back to Page</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
