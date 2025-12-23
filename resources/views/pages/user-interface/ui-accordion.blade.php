@extends('layouts/layoutMaster')

@section('title', 'Accordion - UI elements')

@section('content')
<!-- Accordion -->
<h5>Accordion</h5>
<div class="row">
  <div class="col-md mb-6 mb-md-2">
    <small class="text-light fw-medium">Basic Accordion</small>
    <div class="accordion mt-4" id="accordionExample">
      <div class="accordion-item active">
        <h2 class="accordion-header" id="headingOne">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
            Accordion Item 1
          </button>
        </h2>

        <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
            marshmallow pastry pie.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
            Accordion Item 2
          </button>
        </h2>
        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes
            carrot cake. Fruitcake chocolate chupa chups.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
            Accordion Item 3
          </button>
        </h2>
        <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream
            wafer danish cookie caramels muffin.
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <small class="text-light fw-medium">Accordion Without Arrow</small>
    <div id="accordionIcon" class="accordion mt-4 accordion-without-arrow">
      <div class="accordion-item">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
            Accordion Item 1
          </button>
        </h2>

        <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
            marshmallow pastry pie.
          </div>
        </div>
      </div>

      <div class="accordion-item previous-active">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconTwo">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-2" aria-controls="accordionIcon-2">
            Accordion Item 2
          </button>
        </h2>
        <div id="accordionIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
          <div class="accordion-body">
            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream
            halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
            cake.
            Fruitcake chocolate chupa chups.
          </div>
        </div>
      </div>

      <div class="accordion-item active">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconThree">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionIcon-3" aria-expanded="true" aria-controls="accordionIcon-3">
            Accordion Item 3
          </button>
        </h2>
        <div id="accordionIcon-3" class="accordion-collapse collapse show" data-bs-parent="#accordionIcon">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow
            sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
            cookie caramels muffin.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Accordion -->
<hr class="container-m-nx border-light my-12">

<!-- Accordion Popout -->
<h5 class="mt-6">Accordion Popout</h5>
<div class="row">
  <div class="col-md mb-6 mb-md-0">
    <small class="text-light fw-medium">Popout Accordion</small>
    <div class="accordion accordion-popout mt-4" id="accordionPopout">
      <div class="accordion-item active">
        <h2 class="accordion-header" id="headingPopoutOne">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionPopoutOne" aria-expanded="true" aria-controls="accordionPopoutOne">
            Accordion Item 1
          </button>
        </h2>

        <div id="accordionPopoutOne" class="accordion-collapse collapse show" aria-labelledby="headingPopoutOne" data-bs-parent="#accordionPopout">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingPopoutTwo">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionPopoutTwo" aria-expanded="false" aria-controls="accordionPopoutTwo">
            Accordion Item 2
          </button>
        </h2>
        <div id="accordionPopoutTwo" class="accordion-collapse collapse" aria-labelledby="headingPopoutTwo" data-bs-parent="#accordionPopout">
          <div class="accordion-body">
            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingPopoutThree">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionPopoutThree" aria-expanded="false" aria-controls="accordionPopoutThree">
            Accordion Item 3
          </button>
        </h2>
        <div id="accordionPopoutThree" class="accordion-collapse collapse" aria-labelledby="headingPopoutThree" data-bs-parent="#accordionPopout">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels.
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <small class="text-light fw-medium">Popout With Icon</small>
    <div id="accordionPopoutIcon" class="accordion mt-4 accordion-popout">
      <div class="accordion-item">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionPopoutIconOne">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionPopoutIcon-1" aria-controls="accordionPopoutIcon-1">
            <i class="ri-funds-line ri-20px me-2"></i>
            Accordion Item 1
          </button>
        </h2>

        <div id="accordionPopoutIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionPopoutIcon">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé.
          </div>
        </div>
      </div>

      <div class="accordion-item previous-active">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionPopoutIconTwo">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionPopoutIcon-2" aria-controls="accordionPopoutIcon-2">
            <i class="ri-heart-fill ri-20px me-2"></i>
            Accordion Item 2
          </button>
        </h2>
        <div id="accordionPopoutIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionPopoutIcon">
          <div class="accordion-body">
            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
          </div>
        </div>
      </div>

      <div class="accordion-item active">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionPopoutIconThree">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionPopoutIcon-3" aria-expanded="true" aria-controls="accordionPopoutIcon-3">
            <i class="ri-lock-2-line ri-20px me-2"></i>
            Accordion Item 3
          </button>
        </h2>
        <div id="accordionPopoutIcon-3" class="accordion-collapse collapse show" data-bs-parent="#accordionPopoutIcon">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Accordion Popout -->

<hr class="container-m-nx border-light my-12">

<!-- Advance Styling Options -->
<h5>Advance Styling</h5>
<div class="row">
  <!-- Accordion with Icon -->
  <div class="col-md mb-6 mb-md-2">
    <small class="text-light fw-medium">Accordion With Icon (Always Open)</small>
    <div class="accordion mt-4" id="accordionWithIcon">
      <div class="accordion-item active">
        <h2 class="accordion-header d-flex align-items-center">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-1" aria-expanded="true">
            <i class="ri-bar-chart-fill ri-20px me-2"></i>
            Header Option 1
          </button>
        </h2>

        <div id="accordionWithIcon-1" class="accordion-collapse collapse show">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
            marshmallow pastry pie.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header d-flex align-items-center">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-2" aria-expanded="false">
            <i class="ri-briefcase-line ri-20px me-2"></i>
            Header Option 2
          </button>
        </h2>
        <div id="accordionWithIcon-2" class="accordion-collapse collapse">
          <div class="accordion-body">
            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream
            halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
            cake.
            Fruitcake chocolate chupa chups.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header d-flex align-items-center">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-3" aria-expanded="false">
            <i class="ri-gift-line ri-20px me-2"></i>
            Header Option 3
          </button>
        </h2>
        <div id="accordionWithIcon-3" class="accordion-collapse collapse">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow
            sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
            cookie caramels muffin.
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Accordion with Icon -->
  <!-- Accordion Header Color -->
  <div class="col-md">
    <small class="text-light fw-medium">Accordion Header color</small>
    <div class="accordion mt-4 accordion-header-primary" id="accordionStyle1">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-1" aria-expanded="false">
            Header Option 1
          </button>
        </h2>

        <div id="accordionStyle1-1" class="accordion-collapse collapse" data-bs-parent="#accordionStyle1">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
            marshmallow pastry pie.
          </div>
        </div>
      </div>

      <div class="accordion-item previous-active">
        <h2 class="accordion-header">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-2" aria-expanded="false">
            Header Option 2
          </button>
        </h2>
        <div id="accordionStyle1-2" class="accordion-collapse collapse" data-bs-parent="#accordionStyle1">
          <div class="accordion-body">
            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream
            halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
            cake.
            Fruitcake chocolate chupa chups.
          </div>
        </div>
      </div>

      <div class="accordion-item active">
        <h2 class="accordion-header">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-3" aria-expanded="true">
            Header Option 3
          </button>
        </h2>
        <div id="accordionStyle1-3" class="accordion-collapse collapse show" data-bs-parent="#accordionStyle1">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow
            sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
            cookie caramels muffin.
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Accordion Header Color -->
</div>
<!--/ Advance Styling Options -->

<hr class="container-m-nx border-light my-12">

<!-- Accordion With Custom Button -->
<h5 class="mt-4">Customized Accordion</h5>
<div class="row">
  <div class="col-md mb-4 mb-md-0">
    <small class="text-light fw-medium">Accordion Customized Button</small>
    <div class="accordion accordion-custom-button mt-3" id="accordionCustom">
      <div class="accordion-item active">
        <h2 class="accordion-header" id="headingCustomOne">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionCustomOne" aria-expanded="true" aria-controls="accordionCustomOne">
            Accordion Item 1
          </button>
        </h2>

        <div id="accordionCustomOne" class="accordion-collapse collapse show" aria-labelledby="headingCustomOne" data-bs-parent="#accordionCustom">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingCustomTwo">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionCustomTwo" aria-expanded="false" aria-controls="accordionCustomTwo">
            Accordion Item 2
          </button>
        </h2>
        <div id="accordionCustomTwo" class="accordion-collapse collapse" aria-labelledby="headingCustomTwo" data-bs-parent="#accordionCustom">
          <div class="accordion-body">
            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingCustomThree">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionCustomThree" aria-expanded="false" aria-controls="accordionCustomThree">
            Accordion Item 3
          </button>
        </h2>
        <div id="accordionCustomThree" class="accordion-collapse collapse" aria-labelledby="headingCustomThree" data-bs-parent="#accordionCustom">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels.
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <small class="text-light fw-medium">Customized Button With Icon</small>
    <div id="accordionCustomIcon" class="accordion mt-3 accordion-custom-button">
      <div class="accordion-item">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionCustomIconOne">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionCustomIcon-1" aria-controls="accordionPopoutIcon-1">
            <i class="ri-bar-chart-2-line ri-20px me-2"></i>
            Accordion Item 1
          </button>
        </h2>

        <div id="accordionCustomIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionCustomIcon">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé.
          </div>
        </div>
      </div>

      <div class="accordion-item previous-active">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionCustomIconTwo">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionCustomIcon-2" aria-controls="accordionCustomIcon-2">
            <i class="ri-briefcase-line ri-20px me-2"></i>
            Accordion Item 2
          </button>
        </h2>
        <div id="accordionCustomIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionCustomIcon">
          <div class="accordion-body">
            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
          </div>
        </div>
      </div>

      <div class="accordion-item active">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionCustomIconThree">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionCustomIcon-3" aria-expanded="true" aria-controls="accordionCustomIcon-3">
            <i class="ri-gift-line ri-20px me-2"></i>
            Accordion Item 3
          </button>
        </h2>
        <div id="accordionCustomIcon-3" class="accordion-collapse collapse show" data-bs-parent="#accordionCustomIcon">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Accordion With Custom Button -->
@endsection
