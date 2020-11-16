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
          <h1>Add Room Details</h1>
            <form  action ="/storeRoom" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label >Hotel Name</label>

                        <div>
                        
                        <select class="form-control" id="sel1" name="hotel_id" style="text-align:right;">

                            @foreach ($hotel as $hol)
                            <option value="{{$hol->id}}">{{$hol->hotel_name}}</option>
                        
                            @endforeach
                            
                        </select>

                        </div>


                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Room Type</label>

                        <div>
                            <select class="form-control" id="sel1" name="room_type">
                            
                                <option value="Single room">Single room</option>
                                <option value="Double room">Double room</option>
                                <option value="Twin room ">Twin room </option>
                                <option value="Triple room">Triple room</option>
                                <option value="Quad/Family room">Quad/Family room</option>
                                <option value="Queen">Queen</option>
                                <option value="King">King </option>
                            </select>
                        </div>
                        
                       

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Room Description(1)</label>
                        <input type="text" class="form-control" id="inputAddressLine1" placeholder="Room Description(1)" name="room_description1">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Room Description(2)</label>
                        <input type="text" class="form-control" id="inputAddressLine2" placeholder="Room Description(2)" name="room_description2">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Room Description(3)</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Room Description(3)" name="room_description3">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">Sleeps</label>
                        
                        <div>
                            <select class="form-control" id="sel1" name="sleeps">
                            
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-sm-3">  
                        <label for="inputPostalCode">Current Room Price</label>
                        <div>
                            <input type="number" class="form-control" id="inputPostalCode" placeholder="Current Room Price" name="today_price">
                        </div>
                        
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Room Main Image</label>
                        <div>
                          <input type="file" name="room_main_image">
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