@extends('admin.index')
@section('content')
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h4>Edit Admin</h4>
                    <div class="card" style="width: 200%;">
                        <div style="padding:5%">
                            <form action="" method="post" id="admin_form" enctype="multipart/form-data">
                            @csrf
                            @if (session()->has('success_inquiry'))
                                <div class="alert alert-success p-2">
                                    {{ session()->get('success_inquiry') }}
                                </div>
                            @endif

                            @if (session()->has('error_inquiry'))
                                <div class="alert alert-danger p-2">
                                    {{ session()->get('error_inquiry') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <strong>Name<span class="text-danger">*</span></strong>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ $admin->name }}" placeholder="Enter Name">
                                    @error('name')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <strong>Start Date<span class="text-danger">*</span></strong>
                                    <input type="date" class="form-control" name="start_date" value="{{ old('start_date') }}" id="start_date">
                                    @error('start_date')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <strong style="display:flow-root;">Phone Number <span class="text-danger">*</span></strong>
                                    <input type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" id="phone_number" placeholder="Enter Phone Number">
                                    @error('phone_number')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <strong>Expiry Date<span class="text-danger">*</span></strong>
                                    <input type="date" class="form-control" name="end_date" value="{{ old('end_date') }}" id="end_date">
                                    @error('end_date')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label><strong>Email<span class="text-danger">*</span></strong></label><br/>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"  placeholder="Enter Email Address">

                                    @error('email')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                </form>

                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                    class="text-white p-2 border-0 rounded px-3 fw-bold send_inquiry_btn btn btn-primary">Update Admin
                                  </button>
                            </div>
                    </div>



                </div>

            </div>
        </div>
    </div>

@endsection
