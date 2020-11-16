@extends('layouts.app')

@section('content')
<div class="container">

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hotel Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#room" role="tab" aria-controls="profile" aria-selected="false">Room Description</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"></a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


  <h2>Register Hotels</h2>
    <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4">

        <div style="padding-bottom: 20px;padding-left: 120px;">
          <a href="{{route('addhotels.index')}}"> <button type="button"  class="btn btn-primary">Register Hotel</button></a>
        </div>
        <div style="padding-bottom: 20px;padding-left: 120px;">
        <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
        </div>
        </div>
    </div>


    <!-- ViewHotel -->
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Hotel Name</th>
      <th scope="col">Hotel Location</th>
      <th scope="col">Hotel Ownear</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Postal Code</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Website</th>
      <th scope="col">Hotel Main Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  @isset($hotel)


  @foreach ($hotel as $hol)
  <tbody>
    <tr>
    <th scope="row">{{$hol->id}}</th>
      <td>{{$hol->hotel_name}}</td>
      <td>{{$hol->hotel_location}}</td>
      <td>{{$hol->hotel_ownear}}</td>
      <td>{{$hol->hotel_address}}</td>
      <td>{{$hol->city}}</td>
      <td>{{$hol->state}}</td>
      <td>{{$hol->postal_code}}</td>
      <td>{{$hol->cont_number}}</td>
      <td>{{$hol->website}}</td>
      <td><img src="{{URL::to($hol->hotel_main_image)}}" height="70px;" width="80px;"></td>
      <td> <a href="{{URL::to('edit/hotel/'.$hol->id)}}"><button type="button" class="btn btn-primary">Edit</button>  </a></td>
      <td><a  href="{{URL::to('delete/hotel/'.$hol->id)}}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>

  </tbody>

  @endforeach
  @endisset
</table>











    </div>
    <div class="tab-pane fade" id="room" role="tabpanel" aria-labelledby="profile-tab">



    <h2>Register Rooms</h2>
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

        <a href="{{route('room')}}"> <button type="button"  class="btn btn-primary">Add Rooms Details</button></a>
        </div>
    </div>


    <!-- ViewHotel -->
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Hotel Name</th>
      <th scope="col">Room Type</th>
      <th scope="col">Room Description 1</th>
      <th scope="col">Room Description 2</th>
      <th scope="col">Room Description 3</th>
      <th scope="col">Sleeps</th>
      <th scope="col">Today Price</th>
      <th scope="col">Add Room Images</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
@isset($rooms)


  @foreach ($rooms as $ro)
  <tbody>
    <tr>
    <th scope="row">{{$ro->id}}</th>
    <td>{{$ro->room_type}}</td>
    <td>{{$ro->room_description1}}</td>
    <td>{{$ro->room_description2}}</td>
    <td>{{$ro->room_description3	}}</td>
    <td>{{$ro->sleeps}}</td>
    <td>{{$ro->today_price}}</td>
    <td> <a href="{{URL::to('addroomimages/'.$ro->id)}}"><button type="button" class="btn btn-primary">Add Room Images</button>  </a></td>
    <td> <a href="{{URL::to('edit/room/'.$ro->id.'/'.$ro->hotel_id)}}"><button type="button" class="btn btn-primary">Edit</button>  </a></td>
    <td><a  href="{{URL::to('delete/room/'.$ro->id)}}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger">Delete</button></a></td>

    </tr>

  </tbody>

  @endforeach
  @endisset
  </table>






    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


    <h2>Register Rooms</h2>
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

        <!-- room images -->
        </div>
    </div>







</div>




@endsection
