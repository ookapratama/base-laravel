@extends('layouts/layoutMaster')

@section('title', 'Email - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/quill/katex.scss',
  'resources/assets/vendor/libs/quill/editor.scss',
  'resources/assets/vendor/libs/select2/select2.scss'
])
@endsection

@section('page-style')
@vite([
  'resources/assets/vendor/scss/pages/app-email.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/quill/katex.js',
  'resources/assets/vendor/libs/quill/quill.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/block-ui/block-ui.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-email.js'
])
@endsection

@section('content')
<div class="app-email card">
  <div class="border-0">
    <div class="row g-0">
      <!-- Email Sidebar -->
      <div class="col app-email-sidebar border-end flex-grow-0" id="app-email-sidebar">
        <div class="btn-compost-wrapper d-grid">
          <button class="btn btn-primary btn-compose" data-bs-toggle="modal" data-bs-target="#emailComposeSidebar">Compose</button>
        </div>
        <!-- Email Filters -->
        <div class="email-filters pt-4 pb-2">
          <!-- Email Filters: Folder -->
          <ul class="email-filter-folders list-unstyled">
            <li class="active d-flex justify-content-between align-items-center mb-1" data-target="inbox">
              <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                <i class="ri-mail-line ri-20px"></i>
                <span class="align-middle ms-2">Inbox</span>
              </a>
              <div class="badge bg-label-primary rounded-pill">21</div>
            </li>
            <li class="d-flex mb-1" data-target="sent">
              <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                <i class="ri-send-plane-line ri-20px"></i>
                <span class="align-middle ms-2">Sent</span>
              </a>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-1" data-target="draft">
              <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                <i class="ri-edit-box-line ri-20px"></i>
                <span class="align-middle ms-2">Draft</span>
              </a>
              <div class="badge bg-label-warning rounded-pill">1</div>
            </li>
            <li class="d-flex justify-content-between mb-1" data-target="starred">
              <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                <i class="ri-star-line ri-20px"></i>
                <span class="align-middle ms-2">Starred</span>
              </a>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-1" data-target="spam">
              <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                <i class="ri-spam-2-line ri-20px"></i>
                <span class="align-middle ms-2">Spam</span>
              </a>
              <div class="badge bg-label-danger rounded-pill">6</div>
            </li>
            <li class="d-flex align-items-center mb-1" data-target="trash">
              <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                <i class="ri-delete-bin-7-line ri-20px"></i>
                <span class="align-middle ms-2">Trash</span>
              </a>
            </li>
          </ul>
          <!-- Email Filters: Labels -->
          <div class="email-filter-labels pt-4">
            <p class="small mx-5 text-muted text-uppercase">Labels</p>
            <ul class="list-unstyled mb-2">
              <li data-target="work">
                <a href="javascript:void(0);">
                  <i class="badge badge-dot bg-success"></i>
                  <span class="align-middle ms-2">Personal</span>
                </a>
              </li>
              <li data-target="company">
                <a href="javascript:void(0);">
                  <i class="badge badge-dot bg-primary"></i>
                  <span class="align-middle ms-2">Company</span>
                </a>
              </li>
              <li data-target="important">
                <a href="javascript:void(0);">
                  <i class="badge badge-dot bg-warning"></i>
                  <span class="align-middle ms-2">Important</span>
                </a>
              </li>
              <li data-target="private">
                <a href="javascript:void(0);">
                  <i class="badge badge-dot bg-danger"></i>
                  <span class="align-middle ms-2">Private</span>
                </a>
              </li>
            </ul>
          </div>
          <!--/ Email Filters -->
        </div>
      </div>
      <!--/ Email Sidebar -->

      <!-- Emails List -->
      <div class="col app-emails-list">
        <div class="card shadow-none border-0 rounded-0">
          <div class="card-body emails-list-header p-3 py-2">
            <!-- Email List: Search -->
            <div class="d-flex justify-content-between align-items-center px-3 mt-2">
              <div class="d-flex align-items-center w-100">
                <i class="ri-menu-line ri-24px cursor-pointer d-block d-lg-none me-4 mb-4" data-bs-toggle="sidebar" data-target="#app-email-sidebar" data-overlay></i>
                <div class="mb-4 w-100">
                  <div class="input-group input-group-merge shadow-none">
                    <span class="input-group-text border-0 ps-0 py-0" id="email-search">
                      <i class="ri-search-line ri-22px"></i>
                    </span>
                    <input type="text" class="form-control email-search-input border-0 py-0" placeholder="Search mail" aria-label="Search mail" aria-describedby="email-search">
                  </div>
                </div>
              </div>
            </div>
            <hr class="mx-n3 emails-list-header-hr mb-2">
            <!-- Email List: Actions -->
            <div class="d-flex justify-content-between align-items-center ps-1">
              <div class="d-flex align-items-center">
                <div class="form-check mb-n1 ms-2">
                  <input class="form-check-input" type="checkbox" id="email-select-all">
                  <label class="form-check-label" for="email-select-all"></label>
                </div>
                <div class="btn btn-text-secondary btn-icon rounded-pill me-1"><i class="ri-delete-bin-7-line ri-22px email-list-delete cursor-pointer"></i></div>
                <div class="btn btn-text-secondary btn-icon rounded-pill me-1"><i class="ri-mail-open-line ri-22px email-list-read cursor-pointer"></i></div>
                <div class="dropdown me-1">
                  <button class="btn btn-icon btn-text-secondary rounded-pill p-0" type="button" id="dropdownMenuFolderTwo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ri-folder-line ri-22px"></i></button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuFolderTwo">
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="ri-spam-2-line me-1"></i>
                      <span class="align-middle">Spam</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="ri-edit-box-line me-1"></i>
                      <span class="align-middle">Draft</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="ri-delete-bin-7-line me-1"></i>
                      <span class="align-middle">Trash</span>
                    </a>
                  </div>
                </div>
                <div class="dropdown mx-1">
                  <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="true" id="dropdownLabelOne"><i class="ri-price-tag-3-line ri-22px"></i></button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLabelOne">
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class=" badge badge-dot bg-success me-1"></i>
                      <span class="align-middle">Workshop</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class=" badge badge-dot bg-primary me-1"></i>
                      <span class="align-middle">Company</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class=" badge badge-dot bg-warning me-1"></i>
                      <span class="align-middle">Important</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class=" badge badge-dot bg-danger me-1"></i>
                      <span class="align-middle">Private</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <span class="btn btn-icon btn-text-secondary rounded-pill me-1">
                  <i class="ri-refresh-line ri-22px scaleX-n1-rtl cursor-pointer email-refresh"></i>
                </span>
                <div class="dropdown">
                  <button class="btn btn-icon btn-text-secondary rounded-pill p-0" type="button" id="emailsActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-more-2-line ri-22px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="emailsActions">
                    <a class="dropdown-item" href="javascript:void(0)">Mark as read</a>
                    <a class="dropdown-item" href="javascript:void(0)">Mark as unread</a>
                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                    <a class="dropdown-item" href="javascript:void(0)">Archive</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="container-m-nx m-0">
          <!-- Email List: Items -->
          <div class="email-list pt-0">
            <ul class="list-unstyled m-0">
              <li class="email-list-item email-marked-read d-flex" data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-1">
                    <label class="form-check-label" for="email-1"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <img src="{{ asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-2 me-0" height="32" width="32" />
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 text-heading">Chandler Bing</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Focused impactful open issues from the project of GitHub</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-label badge badge-dot bg-danger d-none d-md-inline-block me-2" data-label="private"></span>
                    <small class="email-list-item-time text-muted">08:40 AM</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-read btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-open-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item email-marked-read d-flex" data-sent="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-2">
                    <label class="form-check-label" for="email-2"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <img src="{{ asset('assets/img/avatars/2.png')}}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-2 me-0" height="32" width="32" />
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Ross Geller</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, Dessert soufflé tootsie roll soufflé carrot cake halvah jelly.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="important"></span>
                    <span class="email-list-item-label badge badge-dot bg-danger d-none d-md-inline-block me-2" data-label="private"></span>
                    <small class="email-list-item-time text-muted">10:12 AM</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-unread btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item email-marked-read d-flex" data-draft="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-3">
                    <label class="form-check-label" for="email-3"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <div class="avatar avatar-sm d-block flex-shrink-0 me-sm-2 me-0">
                    <span class="avatar-initial rounded-circle bg-label-success">BS</span>
                  </div>
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Barney Stinson</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, Soufflé apple pie caramels soufflé tiramisu bear claw.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-attachment ri-attachment-2 ri-22px cursor-pointer me-2 float-end float-sm-none"></span>
                    <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="company"></span>
                    <small class="email-list-item-time text-muted">12:44 AM</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-read btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-open-line ri-22px'></i></li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item" data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-4">
                    <label class="form-check-label" for="email-4"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <img src="{{ asset('assets/img/avatars/3.png')}}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-2 me-0" height="32" width="32" />
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Pheobe Buffay</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, Tart croissant jujubes gummies macaroon Icing sweet.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-label badge badge-dot bg-success d-none d-md-inline-block me-2" data-label="work"></span>
                    <small class="email-list-item-time text-muted">Yesterday</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-unread btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item email-marked-read d-flex" data-spam="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-5">
                    <label class="form-check-label" for="email-5"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <img src="{{ asset('assets/img/avatars/4.png')}}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-2 me-0" height="32" width="32" />
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Ted Mosby</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, I love Pudding cookie chocolate sweet tiramisu jujubes I love danish.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-label ribadge badge-dot bg-danger d-none d-md-inline-block me-2" data-label="company"></span>
                    <small class="email-list-item-time text-muted">Yesterday</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-unread btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item" data-trash="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-6">
                    <label class="form-check-label" for="email-6"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <div class="avatar avatar-sm d-block flex-shrink-0 me-sm-2 me-0">
                    <span class="avatar-initial rounded-circle bg-label-info">Sk</span>
                  </div>
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Stacy Cooper</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, I love danish. Cupcake I love carrot cake sugar plum I love.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="work"></span>
                    <small class="email-list-item-time text-muted">5 May</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-read btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-open-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item email-marked-read d-flex" data-draft="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-7">
                    <label class="form-check-label" for="email-7"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <img src="{{ asset('assets/img/avatars/5.png')}}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-2 me-0" height="32" width="32" />
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Rachel Green</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, Chocolate cake pudding chocolate bar ice cream bonbon lollipop.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-label badge badge-dot bg-warning d-none d-md-inline-block me-2" data-label="company"></span>
                    <small class="email-list-item-time text-muted">15 May</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-unread btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item" data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-8">
                    <label class="form-check-label" for="email-8"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <img src="{{ asset('assets/img/avatars/6.png')}}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-2 me-0" height="32" width="32" />
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Grace Shelby</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, Icing gummi bears ice cream croissant dessert wafer.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-attachment ri-attachment-2 ri-20px cursor-pointer me-2 float-end float-sm-none"></span>
                    <span class="email-list-item-label badge badge-dot bg-danger d-none d-md-inline-block me-2" data-label="private"></span>
                    <small class="email-list-item-time text-muted">20 Apr</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-unread btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item" data-spam="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-9">
                    <label class="form-check-label" for="email-9"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <div class="avatar avatar-sm d-block flex-shrink-0 me-sm-2 me-0">
                    <span class="avatar-initial rounded-circle bg-label-danger">JF</span>
                  </div>
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Jacob Frye</span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, Chocolate cake pudding chocolate bar ice cream Sweet.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="important"></span>
                    <small class="email-list-item-time text-muted">25 Mar</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-unread btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="email-list-item email-marked-read d-flex" data-trash="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                <div class="d-flex align-items-center w-100">
                  <div class="form-check mb-n1 ms-2">
                    <input class="email-list-item-input form-check-input" type="checkbox" id="email-10">
                    <label class="form-check-label" for="email-10"></label>
                  </div>
                  <span class="ms-sm-3 me-4"><i class="email-list-item-bookmark ri-star-line ri-22px d-sm-inline-block d-none cursor-pointer ms-1"></i></span>
                  <img src="{{ asset('assets/img/avatars/9.png')}}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-2 me-0" height="32" width="32" />
                  <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                    <span class="email-list-item-username me-2 h6">Alistair Crowley </span>
                    <span class="email-list-item-subject d-xl-inline-block d-block"> Hey Katy, I love danish. Cupcake I love carrot cake sugar plum I love.</span>
                  </div>
                  <div class="email-list-item-meta ms-auto d-flex align-items-center">
                    <span class="email-list-item-label badge badge-dot bg-success d-none d-md-inline-block me-2" data-label="company"></span>
                    <small class="email-list-item-time text-muted">25 Feb</small>
                    <ul class="list-inline email-list-item-actions">
                      <li class="list-inline-item email-delete btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-delete-bin-7-line ri-22px'></i></li>
                      <li class="list-inline-item email-unread btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-mail-line ri-22px'></i> </li>
                      <li class="list-inline-item btn btn-icon btn-text-secondary rounded-pill"> <i class='ri-information-line ri-22px'></i> </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="list-unstyled m-0">
              <li class="email-list-empty text-center d-none">No items found.</li>
            </ul>
          </div>
        </div>
        <div class="app-overlay"></div>
      </div>
      <!-- /Emails List -->

      <!-- Email View -->
      <div class="col app-email-view flex-grow-0 bg-lighter" id="app-email-view">
        <div class="card-body app-email-view-header p-5 pt-md-4 py-2">
          <!-- Email View : Title  bar-->
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center overflow-hidden">
              <span class="ms-sm-2 me-4"><i class="ri-arrow-left-s-line ri-22px cursor-pointer" data-bs-toggle="sidebar" data-target="#app-email-view"></i></span>
              <h6 class="text-truncate mb-0 me-2 fw-normal">Focused impactful open issues</h6>
              <span class="badge bg-label-warning rounded-pill">Important</span>
            </div>
            <!-- Email View : Action bar-->
            <div class="d-flex align-items-center">
              <span class="btn btn-icon p-0 me-2 text-muted">
                <i class='ri-arrow-left-s-line ri-22px'></i>
              </span>
              <span class="btn btn-icon p-0">
                <i class="ri-arrow-right-s-line ri-22px"></i>
              </span>
            </div>
          </div>
          <hr class="app-email-view-hr mx-n5 mb-2">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <span class="btn btn-icon btn-text-secondary rounded-pill me-1"><i class='ri-delete-bin-7-line ri-22px cursor-pointer'></i></span>
              <span class="btn btn-icon btn-text-secondary rounded-pill me-1"><i class='ri-mail-line ri-22px cursor-pointer' data-bs-toggle="sidebar" data-target="#app-email-view"></i></span>
              <div class="dropdown">
                <button class="btn btn-icon btn-text-secondary rounded-pill p-0 me-1" type="button" id="dropdownMenuFolderOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ri-folder-line ri-22px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuFolderOne">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-spam-2-line me-1"></i>
                    <span class="align-middle">Spam</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-edit-box-line me-1"></i>
                    <span class="align-middle">Draft</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-mail-line me-1"></i>
                    <span class="align-middle">Trash</span>
                  </a>
                </div>
              </div>
              <div class="dropdown">
                <button class="btn btn-icon btn-text-secondary rounded-pill p-0" type="button" id="dropdownLabelTwo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ri-price-tag-3-line ri-22px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLabelTwo">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="badge badge-dot bg-success me-1"></i>
                    <span class="align-middle">Workshop</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="badge badge-dot bg-primary me-1"></i>
                    <span class="align-middle">Company</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="badge badge-dot bg-info me-1"></i>
                    <span class="align-middle">Important</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <span class="btn btn-icon btn-text-secondary rounded-pill p-0">
                <i class='ri-star-line ri-22px'></i>
              </span>
              <div class="dropdown ms-1">
                <button class="btn btn-icon btn-text-secondary rounded-pill p-0" type="button" id="dropdownMoreOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ri-more-2-line ri-22px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMoreOptions">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-mail-line me-1"></i>
                    <span class="align-middle">Mark as unread</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-mail-open-line me-1"></i>
                    <span class="align-middle">Mark as read</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-star-line me-1"></i>
                    <span class="align-middle">Add star</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-calendar-2-line me-1"></i>
                    <span class="align-middle">Create Event</span>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-volume-mute-line me-1"></i>
                    <span class="align-middle">Mute</span>
                  </a>
                  <a class="dropdown-item d-sm-none d-block" href="javascript:void(0)">
                    <i class="ri-printer-line me-1"></i>
                    <span class="align-middle">Print</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="m-0">
        <!-- Email View : Content-->
        <div class="app-email-view-content py-4">
          <p class="email-earlier-msgs text-center cursor-pointer mb-12">1 Earlier Message</p>
          <!-- Email View : Previous mails-->
          <div class="card email-card-prev mx-sm-6 mx-3">
            <div class="card-header d-flex justify-content-between align-items-center flex-wrap border-bottom">
              <div class="d-flex align-items-center mb-sm-0 mb-3">
                <img src="{{ asset('assets/img/avatars/2.png')}}" alt="user-avatar" class="flex-shrink-0 rounded-circle me-4" height="38" width="38" />
                <div class="flex-grow-1 ms-1">
                  <h6 class="m-0 fw-normal">Ross Geller</h6>
                  <small class="text-body">rossGeller@email.com</small>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <p class="mb-0 me-4 text-muted">June 20th 2020, 08:30 AM</p>
                <span class="btn btn-icon btn-text-secondary rounded-pill"><i class="ri-attachment-2 ri-22px cursor-pointer"></i></span>
                <span class="btn btn-icon btn-text-secondary rounded-pill"><i class="email-list-item-bookmark ri-star-line ri-22px cursor-pointer"></i></span>
                <div class="dropdown">
                  <button class="btn btn-icon btn-text-secondary rounded-pill p-0" type="button" id="dropdownEmailOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-more-2-line ri-22px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownEmailOne">
                    <a class="dropdown-item scroll-to-reply" href="javascript:void(0)">
                      <i class="ri-reply-line me-1"></i>
                      <span class="align-middle">Reply</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="ri-share-forward-line me-1"></i>
                      <span class="align-middle">Forward</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="ri-spam-2-line me-1"></i>
                      <span class="align-middle">Report</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body pt-5">
              <p class="fw-medium">Greetings!</p>
              <p>
                It is a long established fact that a reader will be distracted by the readable content
                of a
                page when looking at its layout.The point of using Lorem Ipsum is that it has a
                more-or-less
                normal distribution of letters, as opposed to using 'Content here, content here',making
                it
                look like readable English.
              </p>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form, by injected humour, or randomised words which don't
                look
                even slightly believable.
              </p>
              <p class="mb-0">Sincerely yours,</p>
              <p class="fw-medium mb-0">Envato Design Team</p>
              <hr>
              <p class="text-muted mb-2">Attachments</p>
              <div class="cursor-pointer">
                <i class="ri-file-text-line"></i>
                <span class="align-middle ms-1">report.xlsx</span>
              </div>
            </div>
          </div>
          <!-- Email View : Last mail-->
          <div class="card email-card-last mx-sm-6 mx-3 mt-4">
            <div class="card-header d-flex justify-content-between align-items-center flex-wrap border-bottom">
              <div class="d-flex align-items-center mb-sm-0 mb-3">
                <img src="{{ asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="flex-shrink-0 rounded-circle me-4" height="38" width="38" />
                <div class="flex-grow-1 ms-1">
                  <h6 class="m-0 fw-normal">Chandler Bing</h6>
                  <small class="text-body">iAmAhoot@email.com</small>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <p class="mb-0 me-4 text-muted">June 20th 2020, 08:10 AM</p>
                <span class="btn btn-icon btn-text-secondary rounded-pill"><i class="ri-attachment-2 cursor-pointer ri-22px"></i></span>
                <span class="btn btn-icon btn-text-secondary rounded-pill"><i class="email-list-item-bookmark ri-star-line ri-22px cursor-pointer"></i></span>
                <div class="dropdown">
                  <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="true" id="dropdownEmailTwo"><i class="ri-more-2-line ri-22px"></i></button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownEmailTwo">
                    <a class="dropdown-item scroll-to-reply" href="javascript:void(0)">
                      <i class="ri-reply-line me-1"></i>
                      <span class="align-middle">Reply</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="ri-share-forward-line me-1"></i>
                      <span class="align-middle">Forward</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="ri-spam-2-line me-1"></i>
                      <span class="align-middle">Report</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body pt-5">
              <p class="fw-medium">Greetings!</p>
              <p>
                It is a long established fact that a reader will be distracted by the readable content
                of a
                page when looking at its layout.The point of using Lorem Ipsum is that it has a
                more-or-less
                normal distribution of letters, as opposed to using 'Content here, content here',making
                it
                look like readable English.
              </p>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form, by injected humour, or randomised words which don't
                look
                even slightly believable.
              </p>
              <p class="mb-0">Sincerely yours,</p>
              <p class="fw-medium mb-0">Envato Design Team</p>
              <hr>
              <p class="text-muted mb-2">Attachments</p>
              <div class="cursor-pointer">
                <i class="ri-file-text-line"></i>
                <span class="align-middle ms-1">report.xlsx</span>
              </div>
            </div>
          </div>
          <!-- Email View : Reply mail-->
          <div class="email-reply card mt-4 mx-sm-6 mx-3 mb-4">
            <h6 class="card-header border-0 fw-normal pb-4">Reply to Ross Geller</h6>
            <div class="card-body pt-0 ps-3">
              <div class="d-flex justify-content-start">
                <div class="email-reply-toolbar border-0 w-100 ps-0 pb-4">
                  <span class="ql-formats me-0">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-list" value="ordered"></button>
                    <button class="ql-list" value="bullet"></button>
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                  </span>
                </div>
              </div>
              <div class="email-reply-editor"></div>
              <div class="d-flex justify-content-end align-items-center mt-4">
                <div class="cursor-pointer btn btn-text-secondary text-secondary me-4">
                  <i class="ri-attachment-2 ri-16px me-2"></i>
                  <span class="align-middle">Attachments</span>
                </div>
                <button class="btn btn-primary">
                  <span class="align-middle">Send</span>
                  <i class="ri-send-plane-line ri-16px ms-2"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Email View -->
    </div>
  </div>

  <!-- Compose Email -->
  <div class="app-email-compose modal" id="emailComposeSidebar" tabindex="-1" aria-labelledby="emailComposeSidebar" aria-hidden="true">
    <div class="modal-dialog m-0 me-md-6 mb-6 modal-lg">
      <div class="modal-content p-0">
        <div class="modal-header py-5 justify-content-between">
          <h5 class="modal-title text-body fs-5">Compose Mail</h5>
          <div class="d-flex align-items-center gap-2">
            <span class="btn btn-sm btn-icon btn-text-secondary"><i class='ri-subtract-line ri-20px'></i></span>
            <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
        <div class="modal-body flex-grow-1 pb-sm-0 p-5 py-2">
          <form class="email-compose-form">
            <div class="email-compose-to d-flex justify-content-between align-items-center">
              <label class="fw-medium mb-1 text-muted" for="emailContacts">To:</label>
              <div class="select2-primary border-0 shadow-none flex-grow-1 mx-2">
                <select class="select2 select-email-contacts form-select" id="emailContacts" name="emailContacts" multiple>
                  <option data-avatar="1.png" value="Jane Foster">Jane Foster</option>
                  <option data-avatar="3.png" value="Donna Frank">Donna Frank</option>
                  <option data-avatar="5.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                  <option data-avatar="7.png" value="Lori Spears">Lori Spears</option>
                  <option data-avatar="9.png" value="Sandy Vega">Sandy Vega</option>
                  <option data-avatar="11.png" value="Cheryl May">Cheryl May</option>
                </select>
              </div>
              <div class="email-compose-toggle-wrapper">
                <a class="email-compose-toggle-cc text-body" href="javascript:void(0);">Cc |</a>
                <a class="email-compose-toggle-bcc text-body" href="javascript:void(0);">Bcc</a>
              </div>
            </div>

            <div class="email-compose-cc d-none">
              <hr class="mx-n5 my-0">
              <div class="d-flex align-items-center">
                <label for="email-cc" class="fw-medium text-muted">Cc:</label>
                <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-cc" placeholder="someone@email.com">
              </div>
            </div>
            <div class="email-compose-bcc d-none">
              <hr class="mx-n5 my-0">
              <div class="d-flex align-items-center">
                <label for="email-bcc" class="fw-medium text-muted">Bcc:</label>
                <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-bcc" placeholder="someone@email.com">
              </div>
            </div>
            <hr class="mx-n5 my-0">
            <div class="email-compose-subject d-flex align-items-center">
              <label for="email-subject" class="fw-medium text-muted">Subject:</label>
              <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-subject">
            </div>
            <div class="email-compose-message">
              <hr class="mx-n5 my-0">
              <div class="d-flex justify-content-end mx-n1">
                <div class="email-editor-toolbar border-0 w-100 px-0">
                  <span class="ql-formats me-0">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-list" value="ordered"></button>
                    <button class="ql-list" value="bullet"></button>
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                  </span>
                </div>
              </div>
              <hr class="mx-n5 my-0">
              <div class="email-editor border-0 mx-n5"></div>
            </div>
            <hr class="mx-n5 mt-0 mb-2">
            <div class="email-compose-actions d-flex justify-content-between align-items-center my-4">
              <div class="d-flex align-items-center">
                <div class="btn-group">
                  <button type="reset" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Send</button>
                  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">Schedule send</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Save draft</a></li>
                  </ul>
                </div>
                <label for="attach-file" class="btn btn-sm btn-icon btn-text-secondary rounded-pill ms-4"><i class="ri-attachment-2 ri-20px cursor-pointer"></i></label>
                <input type="file" name="file-input" class="d-none" id="attach-file">
              </div>
              <div class="d-flex align-items-center gap-4">
                <div class="dropdown">
                  <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill p-0" type="button" id="dropdownMoreActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-more-2-line ri-20px"></i>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMoreActions">
                    <li><button type="button" class="dropdown-item">Add Label</button></li>
                    <li><button type="button" class="dropdown-item">Plain text mode</button></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><button type="button" class="dropdown-item">Print</button></li>
                    <li><button type="button" class="dropdown-item">Check Spelling</button></li>
                  </ul>
                </div>
                <button type="reset" class="btn btn-sm btn-icon btn-text-secondary rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i class="ri-delete-bin-7-line ri-20px"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Compose Email -->
</div>
@endsection
