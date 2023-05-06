@extends('templates.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Section Page</h1>
        <a href="data-section/create" class="btn btn-primary">Create Data Section</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Section Now!</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>XII RPL 1</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>
                                <a href="data-section/edit" class="btn btn-warning btn-sm">
                                    <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm">
                                    <i class="fa-regular fa-trash-can" style="color: #ffffff;"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
