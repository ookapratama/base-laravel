@extends('layouts/layoutMaster')

@section('title', 'Tabs and pills - UI elements')

@section('content')
<!-- Tabs -->
<h5 class="py-4 my-6">Tabs</h5>

<div class="row">
  <div class="col-xl-6">
    <h6 class="text-muted">Basic</h6>
    <div class="card mb-6">
      <div class="card-header p-0">
        <div class="nav-align-top">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">Home</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="false">Messages</button>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-body pt-5">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
            <p>
              Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
              claw
              candy topping.
            </p>
            <p class="mb-0">
              Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
              jelly-o ice
              cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
            </p>
          </div>
          <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
            <p>
              Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
              halvah
              tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
            </p>
            <p class="mb-0">
              Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
              liquorice caramels.
            </p>
          </div>
          <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
            <p>
              Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
              bears
              cake chocolate.
            </p>
            <p class="mb-0">
              Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
              sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
              jelly.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <h6 class="text-muted">Filled Tabs</h6>
    <div class="card mb-6">
      <div class="card-header p-0">
        <div class="nav-align-top">
          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true"><span class="d-none d-sm-block"><i class="tf-icons ri-home-smile-line me-2"></i> Home <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-2 pt-50">3</span></span><i class="ri-home-smile-line ri-20px d-sm-none"></i></button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false"><span class="d-none d-sm-block"><i class="tf-icons ri-user-3-line me-2"></i> Profile</span><i class="ri-user-3-line ri-20px d-sm-none"></i></button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="false"><span class="d-none d-sm-block"><i class="tf-icons ri-message-2-line me-2"></i> Messages</span><i class="ri-message-2-line ri-20px d-sm-none"></i></button>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-body pt-5">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
            <p>
              Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
              claw
              candy topping.
            </p>
            <p class="mb-0">
              Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
              jelly-o ice
              cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
            </p>
          </div>
          <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
            <p>
              Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
              halvah
              tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
            </p>
            <p class="mb-0">
              Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
              liquorice caramels.
            </p>
          </div>
          <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
            <p>
              Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
              bears
              cake chocolate.
            </p>
            <p class="mb-0">
              Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
              sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
              jelly.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <h6 class="text-muted">Vertical</h6>
    <div class="card mb-6">
      <div class="card-body ps-0">
        <div class="nav-align-left">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-left-home" aria-controls="navs-left-home" aria-selected="true">Home</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-left-profile" aria-controls="navs-left-profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-left-messages" aria-controls="navs-left-messages" aria-selected="false">Messages</button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-left-home">
              <p>
                Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
                claw
                candy topping.
              </p>
              <p class="mb-0">
                Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
                jelly-o ice
                cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
              </p>
            </div>
            <div class="tab-pane fade" id="navs-left-profile">
              <p>
                Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
                halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
              </p>
              <p class="mb-0">
                Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
                liquorice caramels.
              </p>
            </div>
            <div class="tab-pane fade" id="navs-left-messages">
              <p>
                Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
                bears cake chocolate.
              </p>
              <p class="mb-0">
                Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
                sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
                jelly.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <h6 class="text-muted">Stacked Icons</h6>
    <div class="card text-center mb-4">
      <div class="card-header p-0">
        <div class="nav-align-top">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link d-flex flex-column gap-1 active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-home-card" aria-controls="navs-home-card" aria-selected="true"><i class="tf-icons ri-home-smile-line"></i> Home</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link d-flex flex-column gap-1" role="tab" data-bs-toggle="tab" data-bs-target="#navs-profile-card" aria-controls="navs-profile-card" aria-selected="false"><i class="tf-icons ri-user-3-line"></i> Profile</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link d-flex flex-column gap-1" role="tab" data-bs-toggle="tab" data-bs-target="#navs-messages-card" aria-controls="navs-messages-card" aria-selected="false"><i class="tf-icons ri-message-2-line"></i> Messages</button>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content pb-0">
          <div class="tab-pane fade show active" id="navs-home-card" role="tabpanel">
            <h4 class="card-title">Home</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="tab-pane fade" id="navs-profile-card" role="tabpanel">
            <h4 class="card-title">Profile</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
          </div>
          <div class="tab-pane fade" id="navs-messages-card" role="tabpanel">
            <h4 class="card-title">Message</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Tabs -->

<hr class="container-m-nx border-light mt-12" />

<!-- Pills -->
<h5 class="py-4 my-6">Pills</h5>

<div class="row">
  <div class="col-xl-6">
    <h6 class="text-muted">Basic</h6>
    <div class="nav-align-top mb-6">
      <ul class="nav nav-pills mb-4" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false">Messages</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
          <p>
            Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
            claw
            candy topping.
          </p>
          <p class="mb-0">
            Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
            jelly-o ice
            cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
            halvah
            tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
            liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
            bears
            cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
            jelly.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6">
    <h6 class="text-muted">Filled Pills</h6>
    <div class="nav-align-top mb-6">
      <ul class="nav nav-pills mb-4 nav-fill" role="tablist">
        <li class="nav-item mb-1 mb-sm-0">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true"><i class="tf-icons ri-home-smile-line me-2"></i> Home <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger ms-2 pt-50">3</span></button>
        </li>
        <li class="nav-item mb-1 mb-sm-0">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false"><i class="tf-icons ri-user-3-line me-2"></i> Profile</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-messages" aria-controls="navs-pills-justified-messages" aria-selected="false"><i class="tf-icons ri-message-2-line me-2"></i> Messages</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
          <p>
            Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
            claw
            candy topping.
          </p>
          <p class="mb-0">
            Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
            jelly-o ice
            cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
            halvah
            tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
            liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
            bears
            cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
            jelly.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <h6 class="text-muted">Vertical</h6>
    <div class="nav-align-left mb-6">
      <ul class="nav nav-pills me-4" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-left-home" aria-controls="navs-pills-left-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-left-profile" aria-controls="navs-pills-left-profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-left-messages" aria-controls="navs-pills-left-messages" aria-selected="false">Messages</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-left-home" role="tabpanel">
          <p>
            Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
            claw
            candy topping.
          </p>
          <p class="mb-0">
            Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
            jelly-o ice
            cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-pills-left-profile" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
            halvah
            tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
            liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-pills-left-messages" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
            bears
            cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
            jelly.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <h6 class="text-muted">Stacked Icons Within cards</h6>
    <div class="card text-center mb-4">
      <div class="card-header">
        <div class="nav-align-top">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link d-flex flex-column gap-1 active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-within-card-active" aria-controls="navs-pills-within-card-active" aria-selected="true"><i class="tf-icons ri-home-smile-line"></i> Active</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link d-flex flex-column gap-1" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-within-card-link" aria-controls="navs-pills-within-card-link" aria-selected="false"><i class="tf-icons ri-links-line"></i> Link</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link d-flex flex-column gap-1 disabled" role="tab" data-bs-toggle="tab" aria-selected="false"><i class="tf-icons ri-prohibited-line"></i> Disabled</button>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-pills-within-card-active" role="tabpanel">
            <h4 class="card-title">Special active title</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="tab-pane fade" id="navs-pills-within-card-link" role="tabpanel">
            <h4 class="card-title">Special link title</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Pills -->
@endsection
