@extends('layouts.master')

@section('headers')
<!-- Title -->
<title>Order Product | Yadav ji Dairy</title>
<meta name="description" content="asd asd asd asd asdasd asd asdasd asd asdsd asd asd asdas">
<meta name="keywords" content="asd asd asd asd asdasd asd asdasd asd asdsd asd asd asdas">
@endsection

@section('content')


           
                <div class="gal-head home-section-head" style="background: url(https://assets.limetray.com/assets/image_manager/uploads/6053/omsweets-cover-1.png);">
                    <section class="about-sec" >
<div class="container">
<div class="row" align="center">

<div class="content-wrap best-prod animate animated" >
    <h1 style="color:red;">Complete Your Order</h1>
    <br>
   <form action="/action_page.php" style="padding-left:200px;">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
       
     <div class="row">
      <div class="col-25">
        <label for="fname">Mobile No</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your Mobile no..">
      </div>
    </div>
       
       
     <div class="row">
      <div class="col-25">
        <label for="fname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your Email..">
      </div>
    </div>
       
       
     <div class="row">
      <div class="col-25">
        <label for="fname">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name.." value="{{ $product->name }}">
      </div>
    </div>
       
     <div class="row">
      <div class="col-25">
        <label for="fname">Price and Quantity</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name.." value="{{ $price }}">
      </div>
    </div>
       
    
    <div class="row">
      <div class="col-25">
        <label for="subject">Any Message</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div><br>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</div>
</div>
</section>
                </div>
           
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
    form{
        padding-left: 0px;
    }
}
</style>
@endsection