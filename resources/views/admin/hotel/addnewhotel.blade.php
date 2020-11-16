@extends('layouts.app')

@section('content')
<div class="container">
 


<div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
       
        <a href="{{ route('hotel') }}"> <button type="button"  class="btn btn-primary">Back</button></a>
        </div>
    </div>
   

    <!-- Add Hotel -->
    
    <div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto" style="border-style: solid;">
          <h1>Collect New Hotels</h1>
            <form  action ="/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Hotel Name</label>
                        <input type="text" class="form-control" id="inputFirstname" placeholder="Hotel Name" name="hotel_name">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Hotel Location</label>
                        <input type="text" class="form-control" id="inputLastname" placeholder="Hotel Location" name="hotel_location">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Hotel ownear</label>
                        <input type="text" class="form-control" id="inputAddressLine1" placeholder="Hotel ownear" name="hotel_ownear">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Ownear Address</label>
                        <input type="text" class="form-control" id="inputAddressLine2" placeholder="Ownear Address" name="hotel_address">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="City" name="city">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" id="inputState" placeholder="State" name="state">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">Postal Code</label>
                        <input type="text" class="form-control" id="inputPostalCode" placeholder="Postal Code" name="postal_code">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Contact Number</label>
                        <input type="number" class="form-control" id="inputContactNumber" placeholder="Contact Number" name="cont_number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Website</label>
                        <input type="text" class="form-control" id="inputWebsite" placeholder="Website" name="website">
                    </div>  
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Hotel Main image</label>
                        
                        <div >
                            
                            <input type="file" name="hotel_main_image">
                        </div>

                    </div>
                   
                </div>
                <div style="padding-bottom: 60px;">
                    <button type="submit" class="btn btn-primary px-4 float-right">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
    


</div>
@endsection