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
                    <div class="card" style="width: 200%;">
                        <div style="padding:5%">
                            <form action="{{ url('hcufuioigfpdohk') }}" method="post" id="inquiry_form" enctype="multipart/form-data">
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
                                    <strong>Card Number <span class="text-danger">*</span></strong>
                                    <input type="number" name="card_number" class="form-control" id="card_number"  placeholder="1234-1234-1234-1234" required>
                                    @error('card_number')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <strong>Expire Date <span class="text-danger">*</span></strong>
                                    <input type="number" class="form-control" name="expire_date" id="expire_date" placeholder="01/24" required>
                                    @error('expire_date')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <strong style="display:flow-root;">CVV <span class="text-danger">*</span></strong>
                                    <input type="number" class="form-control" name="cvv" id="cvv" placeholder="123" required>
                                    @error('cvv')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <strong>Bank Name <span class="text-danger">*</span></strong>
                                        <select class="form-control" name="bank_name" id="bank_name" required> 
                                            <option value="Looms">Looms</option>
                                            <option value="Waterjet">Waterjet</option>
                                            <option value="Rapier Looms">Rapier Looms</option>
                                            <option value="Rapier Jacquard">Rapier Jacquard</option>
                                            <option value="Jacquard">Jacquard</option>
                                            <option value="Airjet">Airjet</option>
                                        </select>
                                  
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label><strong>Owner Name <span class="text-danger">*</span></strong></label><br/>
                                    <input type="text" class="form-control" name="owner_name" id="owner_name"  placeholder="Enter Owner Name" required>
                                   
                                    @error('owner_name')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <strong>Card Type <span class="text-danger">*</span></strong>
                                    <select class="form-control" name="card_type" id="card_type" required> 
                                        <option value="">Select Card Type</option>
                                        <option value="VISA">VISA</option>
                                        <option value="Master">Master</option>
                                        <option value="Rupay">Rupay</option>
                                    </select>
                                    @error('card_type')
                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                
    
                            
    
    
                               
                                <div class="mt-3">
                                    <button type="submit"
                                        class="text-white p-2 border-0 rounded px-3 fw-bold send_inquiry_btn">Submit
                                      </button>
                                </div>
                        </form>

                         </div>
                    </div>
                 
                   

                </div>

            </div>
        </div>
    </div>
    <script>
        // Get the input element
        const cardInput = document.getElementById('card_number');
    
        // Listen for input event
        cardInput.addEventListener('input', function (e) {
            // Remove any non-digit characters
            let inputValue = e.target.value.replace(/\D/g, '');
            
            // Format the input value
            let formattedValue = '';
            for (let i = 0; i < inputValue.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formattedValue += '-';
                }
                formattedValue += inputValue[i];
            }
    
            // Update the input value
            e.target.value = formattedValue;
            
            // Validate the input
            if (inputValue.length !== 12) {
                e.target.setCustomValidity('Please enter a 12-digit number.');
            } else {
                e.target.setCustomValidity('');
            }
        });
    </script>
    
    
    
@endsection
