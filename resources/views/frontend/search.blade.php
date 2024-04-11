@extends('layouts.app')
@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');

* {
  
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.input1{
    border: 1px solid;
    border-radius: 75px;
    
}
body{
    background-color: #e7e7e1;
    margin: 0;
    padding: 0;
}
.back{
    background-color: white;
    margin: 1%;
   
}

.input-group {
    position: relative;
    /* margin: 20px 0; */
}

.input-group .legend {
    position: absolute;
    /* top: 50%; */
    left: 5px;
    transform: translateY(-30%);
    font-size: 16px;
    color: #fff;
    padding: 0 5px;
    pointer-events: none;
    /* transition: .5s; */
}
/*  */

.input-group .legend,
.input-group .legend {
    top: 0;
    font-size: 12px;
    border-radius: 75px;
    background: white;
    color: black;
}

.legend{
    background: white;
    color: black;
    width: 10%;
}
.form-check-label{
    font-size: 12px;

}
.check{
    font-size: 12px;

}
p {
    margin-top: 0!important;
    
}
h6{
    font-size: larger;
    font-weight: 700;
}
.two{
   
  background-color:#1cca55; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right,#1cca55 , #0a7f31);
  border-radius: 50px;
  color: white;
  font-weight: 500

 
}
</style>
    
@endsection

@section('content')
<section>
    <div class="col-12 m-3 d-flex justify-content-center align-items-center ">
        <div class="p-3">
            <strong>Search order</strong>
        </div>
    </div>
    



  <div class="container" style="background-color: white;padding: 2px;border-radius: 48px;box-shadow: -6px -9px 49px 17px rgba(0,0,0,0.51);" >
    <div class="row back" style="
    border-radius: 50px;
">
           <form action="" method="get">
        <fieldset class="input-group input1">
            <legend class="legend" >Search order</legend>
           
               
                <div class="container " style="margin: 10px;">
                    <div class="row p-1">
                            <div style="width: 3%">By</div>
                            <div class="form-check col-1">
                                <input class="form-check-input" type="radio" name="order_id" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    OrderId
                                </label>
                            </div>
                            <div class="form-check col-1">
                                <input class="form-check-input" type="radio" name="name" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Name
                                </label>
                            </div>
                            <div class="form-check col-1">
                                <input class="form-check-input" type="radio" name="phone" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Mobile
                                </label>
                            </div>
                            <div class="form-check col-1">
                                <input class="form-check-input" type="radio" name="email" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    Email
                                </label>
                            </div>
                            <div class="col-5" style="padding-right: 1%;">
                                <input class="form-control" type="text" placeholder="Search" name="data" aria-label="Search" style="border-radius: 70px; border: 1px solid black;">

                            </div>
                            <button type="submit" class="col-2 btn btn-default two">Search order</button>
                        </div>
                    
                </div>
            
        </fieldset>
    </form>


  
   
    </div>
  </div>
  @foreach ($results as $keys=>$result)
      
  <div class="container check mt-5" style="background-color: white">
    <div class="row m-3">
        <div  class="col-2 mt-3 "> 
            <h6>Order Date</h6>
            <span>{{$result->created_at}}</span>
        </div>
        <div  class="col-2 mt-3">
            <h6 style="color: #3f2def;">{{$result->custumer_id}}</h6>
            <span class="btn btn-success">{{$result->payment_type}}</span>
        </div>
        <div  class="col-2 mt-3">
            <h6>Buyer Details:</h6>
            <div class="col">
                <span><strong>123</strong></span><br>
                <span><strong>Addressa</strong> {{$result->address}}</span><br>
                <span><strong>Email:</strong> {{$result->email}}</span><br>
                <span><strong>Phone:</strong> {{$result->phone}}</span><br>
                <span><strong>Pincode:</strong> {{$result->pincode}}</span><br>
            </div>
           
        </div>
        <div  class="col-2 mt-3">
            <h6 style="color: red">Payment-awating</h6>
            <p>total:{{$result->price}}</p>
        </div>
        <div class="col-2 mt-3 ">
            <div class="p-1 btn btn-secondary ">
                Track
            </div>
        </div>
        
        <div  class="col-2 mt-3">
            <a href="" class="m-3" style="font-size: larger;color: #3f2def;font-weight: 700;"> Genrate invoice</a>
         </div>
     </div>
     <div class="contain">
        <div class="row">
            <div class="col-8">
                <div class="container">
                    <div class="card" style="
                    margin-bottom: 7%;
                ">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('img/laptop' . $result->custumer_id . '.jpeg') }}" alt="" srcset="" style="
                                width: 100%;
                            ">

                            </div>
                            <div class="col-9 ">
                                <a href="http://">{{$result->product_link}}</a>
                                <div class="d-flex">
                                    <div class="col check">
                                        <p><strong>Product Name:</strong>{{$result->product_name}}</p>
                                        <p><strong>Model:</strong>{{$result->product_model}}</p>
                                        <p><strong>Price:</strong> Rs.{{$result->price}}</p>
                                        <p><strong>Date:</strong> {{$result->created_at}}</p>
                                        <p><strong>Discount:</strong> {{$result->discount}}</p>
                                      </div>
                                      <div class="col check"> 
                                        <p><strong>Quantity:</strong> {{$result->quantity}}</p>
                                        <p><strong>Delivery Charge:</strong> Rs. {{$result->delivery_charge}}</p>
                                        <p><strong>Status:</strong> {{$result->order_status}}</p>
                                      </div>
                                </div>
                            </div>
                            </div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
     </div>
  </div>
  @endforeach
</section>

@endsection