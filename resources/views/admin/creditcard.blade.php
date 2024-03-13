@extends('Superadmin.index')
@section('content')

<link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="dist/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Admin</h4>

                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if(session('delete_success'))
                    <div class="alert alert-success text-center">
                        {{ session('delete_success') }}
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                    @endif
                    @if(session('lock_success'))
                    <div class="alert alert-warning text-center">
                        {{ session('lock_success') }}
                    </div>
                    @endif
                    {{-- <h5 class="card-title">Basic Datatable</h5> --}}
                    <a type="" class="btn btn-default" href="{{ route('superadmin.addAdmin') }}">Add Credit Card</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($admins as $admin) --}}
                                <tr>
                                    {{-- <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->phone_number }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->start_date }}</td>
                                    <td>{{ $admin->end_date }}</td> --}}
                                    {{-- <td>
                                        <a href="{{ route('superadmin.editAdmin', ['id' => $admin->id]) }}" title="Edit" class="btn btn-primary fa fa-edit"></a>
                                        <a href="{{ route('superadmin.deleteAdmin', ['id' => $admin->id]) }}" onclick="return confirm('Are you sure you want to delete admin ??')" title="Delete" class="btn btn-danger fa fa-trash"></a>
                                        <a href="{{ route('superadmin.lockAdmin', ['id' => $admin->id]) }}" title="Lock" class="btn btn-warning fa fa-lock"></a>
                                    </td> --}}
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();

</script>

@endsection
