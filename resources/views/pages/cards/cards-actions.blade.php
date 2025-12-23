@extends('layouts/layoutMaster')

@section('title', 'Cards Actions- UI elements')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/spinkit/spinkit.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/block-ui/block-ui.js',
  'resources/assets/vendor/libs/sortablejs/sortable.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/cards-actions.js'
])
@endsection

@section('content')
<!-- Cards Action -->
<div class="card card-action mb-12">
  <div class="card-alert"></div>
  <div class="card-header">
    <h5 class="card-action-title mb-0">Cards Action</h5>
    <div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item">
          <a href="javascript:void(0);" class="card-collapsible"><i class="tf-icons ri-arrow-up-s-line"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="javascript:void(0);" class="card-reload">
            <span class="d-inline-flex scaleX-n1-rtl align-middle">
              <i class="tf-icons ri-refresh-line"></i>
            </span>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="javascript:void(0);" class="card-expand"><i class="tf-icons ri-fullscreen-line"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="javascript:void(0);" class="card-close"><i class="tf-icons ri-close-line"></i></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="collapse show">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Action</th>
          <th class="text-center">Icon</th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td>Collapse</td>
          <td class="text-center">
            <i class="tf-icons ri-arrow-up-s-line"></i>
          </td>
          <td>Collapse card content using collapse action.</td>
        </tr>
        <tr>
          <td>Refresh Content</td>
          <td class="text-center scaleX-n1-rtl">
            <i class="tf-icons ri-refresh-line"></i>
          </td>
          <td>Refresh your card content using refresh action.</td>
        </tr>
        <tr>
          <td>Expand Card</td>
          <td class="text-center">
            <i class="tf-icons ri-fullscreen-line"></i>
          </td>
          <td>Maximize your card using expand action</td>
        </tr>
        <tr>
          <td>Remove Card</td>
          <td class="text-center">
            <i class="tf-icons ri-close-line"></i>
          </td>
          <td>Remove card from page using remove card action</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<h6 class="pb-1 mb-6 text-muted">Examples</h6>
<p>Use <code>.card-action</code> class with <code>.card</code> class to create action card. Use <code>.card-action-title</code> for action card title and <code>.card-action-element</code> to warp the actions icons.</p>
<div class="row mb-12">
  <div class="col-md">
    <div class="card card-action mb-6">
      <div class="card-header">
        <h5 class="card-action-title mb-0">Collapsible Card</h5>
        <div class="card-action-element">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="javascript:void(0);" class="card-collapsible"><i class="tf-icons ri-arrow-up-s-line"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="collapse show">
        <div class="card-body">
          <p class="card-text">To create a collapsible card, use <code>.card-collapsible</code> class with action item. To show the collapsible content default use <code>.show</code> class with <code>.collapse</code>.</p>
          <p class="card-text">Click on <i class="tf-icons ri-arrow-up-s-line"></i> to see card collapse in action.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card card-action mb-6">
      <div class="card-alert"></div>
      <div class="card-header">
        <h5 class="card-action-title mb-0">Refresh Content</h5>
        <div class="card-action-element">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="javascript:void(0);" class="card-reload d-flex scaleX-n1-rtl">
                <i class="tf-icons ri-refresh-line"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="card-body">
        <p class="card-text">To create a card with refresh action, use <code>.card-reload</code> class with action item. Use <code>.card-alert</code> class to show custom response message.</p>
        <p class="card-text">Click on <i class="tf-icons ri-refresh-line scaleX-n1-rtl"></i> icon to see refresh card content in action.</p>
      </div>
    </div>
  </div>
  <div class="w-100"></div>
  <div class="col-md">
    <div class="card card-action mb-6">
      <div class="card-header">
        <h5 class="card-action-title mb-0">Expand Card</h5>
        <div class="card-action-element">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="javascript:void(0);" class="card-expand"><i class="tf-icons ri-fullscreen-line"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="card-body">
        <p class="card-text">To create a card with expand(fullscreen) action, use <code>.card-expand</code> class with action item. Use <kbd>ESC</kbd> key to exit from the fullscreen mode.</p>
        <p class="card-text">Click on <i class="tf-icons ri-fullscreen-line"></i> icon to see expand card in action.</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card card-action mb-6">
      <div class="card-alert"></div>
      <div class="card-header">
        <h5 class="card-action-title mb-0">Remove Card</h5>
        <div class="card-action-element">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="javascript:void(0);" class="card-close"><i class="tf-icons ri-close-line"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Remove card action hide the card, use <code>.card-close</code> class with action item.</p>
        <br />
        <p class="card-text">Click on <i class="tf-icons ri-close-line"></i> icon to see remove card in action.</p>
      </div>
    </div>
  </div>
</div>
<!--/ Cards Action -->

<!-- Header elements -->
<h5 class="pb-1 mb-6">Header Elements</h5>
<div class="row mb-12">
  <div class="col-md">
    <div class="card mb-6">
      <div class="card-header header-elements">
        <h5 class="mb-0 me-2">Card Header</h5>
        <div class="card-header-elements ms-auto">
          <span class="badge bg-primary rounded-pill">New</span>
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Sample card header with badge.</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-6">
      <div class="card-body">
        <div class="card-title header-elements">
          <h5 class="m-0 me-2">Card Title</h5>
          <div class="card-title-elements ms-auto">
            <span class="badge badge-outline-primary rounded-pill">10</span>
          </div>
        </div>
        <p class="card-text">Sample card title with outline badge.</p>
      </div>
    </div>
  </div>
  <div class="w-100"></div>

  <div class="col-md">
    <div class="card mb-6">
      <div class="card-header header-elements">
        <h5 class="mb-0 me-2">Card Header</h5>

        <div class="card-header-elements ms-auto">
          <button type="button" class="btn btn-xs btn-primary"><span class="tf-icon ri-add-line me-1"></span>Button</button>
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Sample card header with extra small button.</p>
      </div>
    </div>
  </div>

  <div class="col-md">
    <div class="card mb-6">
      <div class="card-body">
        <div class="card-title header-elements">
          <h5 class="m-0 me-2">Card Title</h5>
          <div class="card-title-elements ms-auto">
            <button type="button" class="btn btn-icon btn-sm btn-primary">
              <span class="tf-icon ri-shopping-cart-line"></span>
            </button>
          </div>
        </div>
        <p class="card-text">Sample card title with small icon button.</p>
      </div>
    </div>
  </div>
  <div class="w-100"></div>

  <div class="col-md">
    <div class="card mb-6">
      <div class="card-header header-elements">
        <h5 class="mb-0 me-sm-auto me-6">Card Header</h5>
        <div class="card-header-elements">
          <input type="text" class="form-control form-control-sm" placeholder="Search" />
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Sample card header with extra search input box.</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-6">
      <div class="card-body">
        <div class="card-title header-elements">
          <h5 class="m-0 me-2">Card Title</h5>
          <div class="card-title-elements ms-auto">
            <div class="form-check form-switch mb-0 me-n2">
              <input type="checkbox" class="form-check-input" />
            </div>
          </div>
        </div>
        <p class="card-text">Sample card title with switch.</p>
      </div>
    </div>
  </div>
  <div class="w-100"></div>
  <div class="col-md">
    <div class="card mb-6">
      <div class="card-header header-elements">
        <h5 class="mb-0 me-2">Card Header</h5>
        <div class="card-header-elements ms-auto">
          <span class="tf-icon ri-notification-3-line text-muted"></span>
          <span class="text text-muted d-flex">
            <small>Sample Text</small>
          </span>
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Sample card header with text.</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-6">
      <div class="card-body">
        <div class="card-title header-elements">
          <h5 class="m-0 me-2">Card Title</h5>
          <div class="card-header-elements ms-auto">
            <span class="tf-icon ri-notification-3-line text-muted"></span>
            <span class="text text-muted d-flex">
              <small>Sample Text</small>
            </span>
          </div>
        </div>
        <p class="card-text">Sample card title with text.</p>
      </div>
    </div>
  </div>
  <div class="w-100"></div>
  <div class="col-md">
    <div class="card mb-6">
      <div class="card-header header-elements">
        <h5 class="mb-0 me-2">Card Header</h5>
        <div class="card-header-elements me-6 me-sm-0">
          <span class="badge bg-danger rounded-pill">Hello!</span>
        </div>
        <div class="card-header-elements ms-sm-auto">
          <div class="btn-group">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" data-bs-reference="parent"></button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)">Another action</a>
              <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <p class="card-text">Sample card header with badge and dropdown.</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-6">
      <div class="card-body">
        <div class="card-title header-elements">
          <h5 class="m-0 me-2">Card Title</h5>
          <div class="card-title-elements">
            <div class="form-check form-switch mb-0">
              <input type="checkbox" class="form-check-input" />
            </div>
          </div>
          <div class="card-title-elements ms-auto">
            <select class="form-select form-select-sm">
              <option selected="">Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
        </div>
        <p class="card-text">Sample card title with switch, select box & button.</p>
      </div>
    </div>
  </div>
</div>
<!--/ Header elements -->

<!-- Draggable Cards -->
<h5 class="pb-1 mb-6">Draggable Cards</h5>
<div class="row" id="sortable-4">
  <div class="col-md-6 col-xl-4">
    <div class="card bg-primary text-white mb-6">
      <div class="card-header cursor-move text-white">Drag me!</div>
      <div class="card-body">
        <h5 class="card-title text-white">Primary card title</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up.
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card bg-secondary text-white mb-6">
      <div class="card-header cursor-move text-white">Drag me!</div>
      <div class="card-body">
        <h5 class="card-title text-white">Secondary card title</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up.
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card bg-success text-white mb-6">
      <div class="card-header cursor-move text-white">Drag me!</div>
      <div class="card-body">
        <h5 class="card-title text-white">Success card title</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up.
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card bg-danger text-white mb-6">
      <div class="card-header cursor-move text-white">Drag me!</div>
      <div class="card-body">
        <h5 class="card-title text-white">Danger card title</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up.
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card bg-warning text-white mb-6">
      <div class="card-header cursor-move text-white">Drag me!</div>
      <div class="card-body">
        <h5 class="card-title text-white">Warning card title</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up.
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card bg-info text-white mb-6">
      <div class="card-header cursor-move text-white">Drag me!</div>
      <div class="card-body">
        <h5 class="card-title text-white">Info card title</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up.
        </p>
      </div>
    </div>
  </div>
</div>
<!--/ Draggable Cards -->

@endsection
