@extends('layouts.layout')

@section('content')

@if( Auth::user()->role == 3 )
<div class="col-xl-6">
    <h6 class="text-muted">Basic</h6>
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
            Home
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
            Profile
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false">
            Messages
          </button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
          <p>
            Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps
            powder. Bear claw candy topping.
          </p>
          <p class="mb-0">
            Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
            jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow
            jujubes sweet.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
            cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
            cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
            cotton candy liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
            cupcake gummi bears cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
            roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
            jelly-o tart brownie jelly.
          </p>
        </div>
      </div>
    </div>
  </div>
@endif

@endsection
