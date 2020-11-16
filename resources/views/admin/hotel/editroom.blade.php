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
          <h1>Edit Room Details</h1>
            <form  action ="{{URL::to('update/room/'.$room->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Hotel ID</label>
                        
                        <select class="form-control" id="sel1" name="hotel_id">

                            <option >{{$room->hotel_id }}</option>
                         
                            
                        </select>

                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Room Type</label>
                        
                        <select class="form-control" id="sel1" name="room_type">
                            <option value="{{$room->room_type}}">{{$room->room_type}}</option>
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
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Room Description(1)</label>
                        <input type="text" class="form-control" id="inputAddressLine1" placeholder="Room Description(1)" name="room_description1" value="{{$room->room_description1}}">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Room Description(2)</label>
                        <input type="text" class="form-control" id="inputAddressLine2" placeholder="Room Description(2)" name="room_description2" value="{{$room->room_description2}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Room Description(3)</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Room Description(3)" name="room_description3" value="{{$room->room_description3}}">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">Sleeps</label>
                        
                        <select class="form-control" id="sel1" name="sleeps">
                            <option value="{{$room->sleeps}}">{{$room->sleeps}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>

                        </select>
                    </div>
                    <div class="col-sm-3">  
                        <label for="inputPostalCode">Current Room Price</label>
                        <input type="number" class="form-control" id="inputPostalCode" placeholder="Current Room Price" name="today_price" value="{{$room->today_price}}">
                    </div>
                </div>

       

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Room Image(1)</label>
                        
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Choose file</span>
                            <input type="file" name="room_image1">
                        </div>

                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Old Image :</span>
                            <img src="{{URL::to($room->room_image1)}}" height="70px;" width="80px;">
                            <input type="hidden" name="old_hotel" value="{{$room->room_image1}}">
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Room Image(2)</label>
                        
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Choose file</span>
                            <input type="file" name="room_image2">
                        </div>
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Old Image :</span>
                            <img src="{{URL::to($room->room_image2)}}" height="70px;" width="80px;">
                            <input type="hidden" name="old_hotel" value="{{$room->room_image2}}">
                        </div>

                    </div>
                    
                   
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Room Image(3)</label>
                        
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Choose file</span>
                            <input type="file" name="room_image3">
                        </div>
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Old Image :</span>
                            <img src="{{URL::to($room->room_image3)}}" height="70px;" width="80px;">
                            <input type="hidden" name="old_hotel" value="{{$room->room_image3}}">
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Room Image(4)</label>
                        
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Choose file</span>
                            <input type="file" name="room_image4">
                        </div>
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <span>Old Image :</span>
                            <img src="{{URL::to($room->room_image4)}}" height="70px;" width="80px;">
                            <input type="hidden" name="old_hotel" value="{{$room->room_image4}}">
                        </div>

                    </div>
                    
                   
                </div>


                <button type="submit" class="btn btn-primary px-4 float-right">Edit</button>
            </form>
        </div>
    </div>
</div>
    
    


</div>
@endsection