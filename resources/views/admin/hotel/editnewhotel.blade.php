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
        <div class="col-md-10 mx-auto">
          
            <form  action =" {{URL::to('update/hotel/'.$hotel->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Hotel Name</label>
                        <input type="text" class="form-control" id="inputFirstname" value="{{$hotel->hotel_name}}" name="hotel_name">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Hotel Location</label>
                        <input type="text" class="form-control" id="inputLastname" value="{{$hotel->hotel_location}}" name="hotel_location">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Hotel ownear</label>
                        <input type="text" class="form-control" id="inputAddressLine1" value="{{$hotel->hotel_ownear}}" name="hotel_ownear">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Ownear Address</label>
                        <input type="text" class="form-control" id="inputAddressLine2" value="{{$hotel->hotel_address}}" name="hotel_address">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" value="{{$hotel->city}}"  name="city">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" id="inputState" value="{{$hotel->state}}" name="state">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">Postal Code</label>
                        <input type="text" class="form-control" id="inputPostalCode" value="{{$hotel->postal_code}}" name="postal_code">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Contact Number</label>
                        <input type="number" class="form-control" id="inputContactNumber" value="{{$hotel->cont_number}}" name="cont_number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Website</label>
                        <input type="text" class="form-control" id="inputWebsite" value="{{$hotel->website}}" name="website">
                    </div>  
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Hotel Main image</label>
                        
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Choose file</span>
                            <input type="file" name="hotel_main_image">
                        </div>
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Old Image :</span>
                            <img src="{{URL::to($hotel->hotel_main_image)}}" height="70px;" width="80px;">
                            <input type="hidden" name="old_hotel" value="{{$hotel->hotel_main_image}}">
                        </div>
                        

                    </div>
                   
                </div>

                <button type="submit" class="btn btn-primary px-4 float-right">Update</button>
            </form>
        </div>
    </div>
</div>
    
    


</div>
@endsection