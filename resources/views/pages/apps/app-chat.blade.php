@extends('layouts/layoutMaster')

@section('title', 'Chat - Apps')

@section('vendor-style')
  @vite('resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.scss')
@endsection

@section('page-style')
  @vite('resources/assets/vendor/scss/pages/app-chat.scss')
@endsection

@section('vendor-script')
  @vite('resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js')
@endsection

@section('page-script')
  @vite('resources/assets/js/app-chat.js')
@endsection

@section('content')
<div class="app-chat card overflow-hidden">
  <div class="row g-0">
    <!-- Sidebar Left -->
    <div class="col app-chat-sidebar-left app-sidebar overflow-hidden" id="app-chat-sidebar-left">
      <div class="chat-sidebar-left-user sidebar-header d-flex flex-column justify-content-center align-items-center flex-wrap px-5 pt-12">
        <div class="avatar avatar-xl avatar-online chat-sidebar-avatar">
          <img src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
        </div>
        <h5 class="mt-4 mb-0">John Doe</h5>
        <span>UI/UX Designer</span>
        <i class="ri-close-line ri-24px cursor-pointer close-sidebar" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-left"></i>
      </div>
      <div class="sidebar-body px-5 pb-5">
        <div class="my-6">
          <label for="chat-sidebar-left-user-about" class="text-uppercase text-muted mb-1">About</label>
          <textarea id="chat-sidebar-left-user-about" class="form-control chat-sidebar-left-user-about" rows="3" maxlength="120">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</textarea>
        </div>
        <div class="my-6">
          <p class="text-uppercase text-muted mb-1">Status</p>
          <div class="d-grid gap-2 pt-2 text-heading ms-2">
            <div class="form-check form-check-success">
              <input name="chat-user-status" class="form-check-input" type="radio" value="active" id="user-active" checked>
              <label class="form-check-label" for="user-active">Active</label>
            </div>
            <div class="form-check form-check-warning">
              <input name="chat-user-status" class="form-check-input" type="radio" value="away" id="user-away">
              <label class="form-check-label" for="user-away">Away</label>
            </div>
            <div class="form-check form-check-danger">
              <input name="chat-user-status" class="form-check-input" type="radio" value="busy" id="user-busy">
              <label class="form-check-label" for="user-busy">Do not Disturb</label>
            </div>
            <div class="form-check form-check-secondary">
              <input name="chat-user-status" class="form-check-input" type="radio" value="offline" id="user-offline">
              <label class="form-check-label" for="user-offline">Offline</label>
            </div>
          </div>
        </div>
        <div class="my-6">
          <p class="text-uppercase text-muted mb-1">Settings</p>
          <ul class="list-unstyled d-grid gap-4 ms-2 pt-2 text-heading">
            <li class="d-flex justify-content-between align-items-center">
              <div>
                <i class='ri-lock-password-line me-1 ri-22px'></i>
                <span class="align-middle">Two-step Verification</span>
              </div>
              <div class="form-check form-switch mb-0 me-1">
                <input type="checkbox" class="form-check-input" checked />
              </div>
            </li>
            <li class="d-flex justify-content-between align-items-center">
              <div>
                <i class='ri-notification-line me-1 ri-22px'></i>
                <span class="align-middle">Notification</span>
              </div>
              <div class="form-check form-switch mb-0 me-1">
                <input type="checkbox" class="form-check-input" />
              </div>
            </li>
            <li>
              <i class="ri-user-add-line me-1 ri-22px"></i>
              <span class="align-middle">Invite Friends</span>
            </li>
            <li>
              <i class="ri-delete-bin-7-line me-1 ri-22px"></i>
              <span class="align-middle">Delete Account</span>
            </li>
          </ul>
        </div>
        <div class="d-flex mt-6">
          <button class="btn btn-primary w-100" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-left">Logout<i class='ri-logout-box-r-line ri-16px ms-2'></i></button>
        </div>
      </div>
    </div>
    <!-- /Sidebar Left-->

    <!-- Chat & Contacts -->
    <div class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end" id="app-chat-contacts">
      <div class="sidebar-header h-px-75 px-5 border-bottom d-flex align-items-center">
        <div class="d-flex align-items-center me-6 me-lg-0">
          <div class="flex-shrink-0 avatar avatar-online me-4" data-bs-toggle="sidebar" data-overlay="app-overlay-ex" data-target="#app-chat-sidebar-left">
            <img class="user-avatar rounded-circle cursor-pointer" src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar">
          </div>
          <div class="flex-grow-1 input-group input-group-sm input-group-merge rounded-pill">
            <span class="input-group-text" id="basic-addon-search31"><i class="ri-search-line lh-1 ri-20px"></i></span>
            <input type="text" class="form-control chat-search-input" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
          </div>
        </div>
        <i class="ri-close-line ri-24px cursor-pointer position-absolute top-50 end-0 translate-middle fs-4 d-lg-none d-block" data-overlay data-bs-toggle="sidebar" data-target="#app-chat-contacts"></i>
      </div>
      <div class="sidebar-body">

        <!-- Chats -->
        <ul class="list-unstyled chat-contact-list py-2 mb-0" id="chat-list">
          <li class="chat-contact-list-item chat-contact-list-item-title mt-0">
            <h5 class="text-primary mb-0">Chats</h5>
          </li>
          <li class="chat-contact-list-item chat-list-item-0 d-none">
            <h6 class="text-muted mb-0">No Chats Found</h6>
          </li>
          <li class="chat-contact-list-item mb-1">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar avatar-online">
                <img src="{{ asset('assets/img/avatars/13.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <div class="d-flex justify-content-between align-items-center">
                  <h6 class="chat-contact-name text-truncate m-0 fw-normal">Waldemar Mannering</h6>
                  <small class="text-muted">5 Minutes</small>
                </div>
                <small class="chat-contact-status text-truncate">Refer friends. Get rewards.</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item active mb-1">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar avatar-offline">
                <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <div class="d-flex justify-content-between align-items-center">
                  <h6 class="chat-contact-name text-truncate fw-normal m-0">Felecia Rower</h6>
                  <small class="text-muted">30 Minutes</small>
                </div>
                <small class="chat-contact-status text-truncate">I will purchase it for sure. 👍</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item mb-1">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar avatar-busy">
                <span class="avatar-initial rounded-circle bg-label-success">CM</span>
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <div class="d-flex justify-content-between align-items-center">
                  <h6 class="chat-contact-name text-truncate fw-normal m-0">Calvin Moore</h6>
                  <small class="text-muted">1 Day</small>
                </div>
                <small class="chat-contact-status text-truncate">If it takes long you can mail inbox user</small>
              </div>
            </a>
          </li>
        </ul>
        <!-- Contacts -->
        <ul class="list-unstyled chat-contact-list py-2" id="contact-list">
          <li class="chat-contact-list-item chat-contact-list-item-title mt-0">
            <h5 class="text-primary mb-0">Contacts</h5>
          </li>
          <li class="chat-contact-list-item contact-list-item-0 d-none">
            <h6 class="text-muted mb-0">No Contacts Found</h6>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar">
                <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Natalie Maxwell</h6>
                <small class="chat-contact-status text-truncate">UI/UX Designer</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar">
                <img src="{{ asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Jess Cook</h6>
                <small class="chat-contact-status text-truncate">Business Analyst</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="avatar d-block flex-shrink-0">
                <span class="avatar-initial rounded-circle bg-label-primary">LM</span>
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Louie Mason</h6>
                <small class="chat-contact-status text-truncate">Resource Manager</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar">
                <img src="{{ asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Krystal Norton</h6>
                <small class="chat-contact-status text-truncate">Business Executive</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar">
                <img src="{{ asset('assets/img/avatars/8.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Stacy Garrison</h6>
                <small class="chat-contact-status text-truncate">Marketing Ninja</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="avatar d-block flex-shrink-0">
                <span class="avatar-initial rounded-circle bg-label-success">CM</span>
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Calvin Moore</h6>
                <small class="chat-contact-status text-truncate">UX Engineer</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar">
                <img src="{{ asset('assets/img/avatars/10.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Mary Giles</h6>
                <small class="chat-contact-status text-truncate">Account Department</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar">
                <img src="{{ asset('assets/img/avatars/13.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Waldemar Mannering</h6>
                <small class="chat-contact-status text-truncate">AWS Support</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="avatar d-block flex-shrink-0">
                <span class="avatar-initial rounded-circle bg-label-danger">AJ</span>
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Amy Johnson</h6>
                <small class="chat-contact-status text-truncate">Frontend Developer</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar">
                <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Felecia Rower</h6>
                <small class="chat-contact-status text-truncate">Cloud Engineer</small>
              </div>
            </a>
          </li>
          <li class="chat-contact-list-item mb-4">
            <a class="d-flex align-items-center">
              <div class="flex-shrink-0 avatar">
                <img src="{{ asset('assets/img/avatars/11.png')}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">William Stephens</h6>
                <small class="chat-contact-status text-truncate">Backend Developer</small>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /Chat contacts -->

    <!-- Chat History -->
    <div class="col app-chat-history">
      <div class="chat-history-wrapper">
        <div class="chat-history-header border-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex overflow-hidden align-items-center">
              <i class="ri-menu-line ri-24px cursor-pointer d-lg-none d-block me-4" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-contacts"></i>
              <div class="flex-shrink-0 avatar avatar-online">
                <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-right">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="m-0 fw-normal">Felecia Rower</h6>
                <small class="user-status text-body">NextJS developer</small>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <i class="ri-phone-line ri-20px cursor-pointer d-sm-inline-flex d-none me-1 btn btn-sm btn-text-secondary btn-icon rounded-pill"></i>
              <i class="ri-video-add-line ri-20px cursor-pointer d-sm-inline-flex d-none me-1 btn btn-sm btn-text-secondary btn-icon rounded-pill"></i>
              <i class="ri-search-line ri-20px cursor-pointer d-sm-inline-flex d-none me-1 btn btn-sm btn-text-secondary btn-icon rounded-pill"></i>
              <div class="dropdown">
                <button class="btn  btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="true" id="chat-header-actions"><i class="ri-more-2-line ri-20px"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="chat-header-actions">
                  <a class="dropdown-item" href="javascript:void(0);">View Contact</a>
                  <a class="dropdown-item" href="javascript:void(0);">Mute Notifications</a>
                  <a class="dropdown-item" href="javascript:void(0);">Block Contact</a>
                  <a class="dropdown-item" href="javascript:void(0);">Clear Chat</a>
                  <a class="dropdown-item" href="javascript:void(0);">Report</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="chat-history-body">
          <ul class="list-unstyled chat-history">
            <li class="chat-message chat-message-right">
              <div class="d-flex overflow-hidden">
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">How can we help? We're here for you! 😄</p>
                  </div>
                  <div class="text-end text-muted mt-1">
                    <i class='ri-check-double-line ri-14px text-success me-1'></i>
                    <small>10:00 AM</small>
                  </div>
                </div>
                <div class="user-avatar flex-shrink-0 ms-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
              </div>
            </li>
            <li class="chat-message">
              <div class="d-flex overflow-hidden">
                <div class="user-avatar flex-shrink-0 me-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">Hey John, I am looking for the best admin template.</p>
                    <p class="mb-0">Could you please help me to find it out? 🤔</p>
                  </div>
                  <div class="chat-message-text mt-2">
                    <p class="mb-0">It should be Bootstrap 5 compatible.</p>
                  </div>
                  <div class="text-muted mt-1">
                    <small>10:02 AM</small>
                  </div>
                </div>
              </div>
            </li>
            <li class="chat-message chat-message-right">
              <div class="d-flex overflow-hidden">
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">{{ config('variables.templateName') ? config('variables.templateName') : 'TemplateName' }} has all the components you'll ever need in a app.</p>
                  </div>
                  <div class="text-end text-muted mt-1">
                    <i class='ri-check-double-line ri-14px text-success me-1'></i>
                    <small>10:03 AM</small>
                  </div>
                </div>
                <div class="user-avatar flex-shrink-0 ms-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
              </div>
            </li>
            <li class="chat-message">
              <div class="d-flex overflow-hidden">
                <div class="user-avatar flex-shrink-0 me-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">Looks clean and fresh UI. 😃</p>
                  </div>
                  <div class="chat-message-text mt-2">
                    <p class="mb-0">It's perfect for my next project.</p>
                  </div>
                  <div class="chat-message-text mt-2">
                    <p class="mb-0">How can I purchase it?</p>
                  </div>
                  <div class="text-muted mt-1">
                    <small>10:05 AM</small>
                  </div>
                </div>
              </div>
            </li>
            <li class="chat-message chat-message-right">
              <div class="d-flex overflow-hidden">
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">Thanks, you can purchase it.</p>
                  </div>
                  <div class="text-end text-muted mt-1">
                    <i class='ri-check-double-line ri-14px text-success me-1'></i>
                    <small>10:06 AM</small>
                  </div>
                </div>
                <div class="user-avatar flex-shrink-0 ms-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
              </div>
            </li>
            <li class="chat-message">
              <div class="d-flex overflow-hidden">
                <div class="user-avatar flex-shrink-0 me-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">I will purchase it for sure. 👍</p>
                  </div>
                  <div class="chat-message-text mt-2">
                    <p class="mb-0">Thanks.</p>
                  </div>
                  <div class="text-muted mt-1">
                    <small>10:08 AM</small>
                  </div>
                </div>
              </div>
            </li>
            <li class="chat-message chat-message-right">
              <div class="d-flex overflow-hidden">
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">Great, Feel free to get in touch.</p>
                  </div>
                  <div class="text-end text-muted mt-1">
                    <i class='ri-check-double-line ri-14px text-success me-1'></i>
                    <small>10:10 AM</small>
                  </div>
                </div>
                <div class="user-avatar flex-shrink-0 ms-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
              </div>
            </li>
            <li class="chat-message">
              <div class="d-flex overflow-hidden">
                <div class="user-avatar flex-shrink-0 me-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">Do you have design files for {{ config('variables.templateName') ? config('variables.templateName') : 'TemplateName' }}?</p>
                  </div>
                  <div class="text-muted mt-1">
                    <small>10:15 AM</small>
                  </div>
                </div>
              </div>
            </li>
            <li class="chat-message chat-message-right">
              <div class="d-flex overflow-hidden">
                <div class="chat-message-wrapper flex-grow-1 w-50">
                  <div class="chat-message-text">
                    <p class="mb-0">Yes that's correct documentation file, Design files are included with the template.</p>
                  </div>
                  <div class="text-end text-muted mt-1">
                    <i class='ri-check-double-line ri-14px me-1'></i>
                    <small>10:15 AM</small>
                  </div>
                </div>
                <div class="user-avatar flex-shrink-0 ms-4">
                  <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- Chat message form -->
        <div class="chat-history-footer">
          <form class="form-send-message d-flex justify-content-between align-items-center ">
            <input class="form-control message-input me-4 shadow-none" placeholder="Type your message here...">
            <div class="message-actions d-flex align-items-center">
              <i class="btn btn-sm btn-text-secondary btn-icon rounded-pill speech-to-text ri-mic-line ri-20px cursor-pointer text-heading"></i>
              <label for="attach-doc" class="form-label mb-0">
                <i class="ri-attachment-2 ri-20px cursor-pointer btn btn-sm btn-text-secondary btn-icon rounded-pill me-2 ms-1 text-heading"></i>
                <input type="file" id="attach-doc" hidden>
              </label>
              <button class="btn btn-primary d-flex send-msg-btn">
                <span class="align-middle">Send</span>
                <i class="ri-send-plane-line ri-16px ms-md-2 ms-0"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Chat History -->

    <!-- Sidebar Right -->
    <div class="col app-chat-sidebar-right app-sidebar overflow-hidden" id="app-chat-sidebar-right">
      <div class="sidebar-header d-flex flex-column justify-content-center align-items-center flex-wrap px-5 pt-12">
        <div class="avatar avatar-xl avatar-online chat-sidebar-avatar">
          <img src="{{ asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle">
        </div>
        <h5 class="mt-4 mb-0">Felecia Rower</h5>
        <span>NextJS Developer</span>
        <i class="ri-close-line ri-24px cursor-pointer close-sidebar d-block" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-right"></i>
      </div>
      <div class="sidebar-body px-6">
        <div class="my-6">
          <p class="text-uppercase mb-1 text-muted">About</p>
          <p class="mb-0">A Next. js developer is a software developer who uses the Next. js framework alongside ReactJS to build web applications.</p>
        </div>
        <div class="my-6">
          <p class="text-uppercase mb-1 text-muted">Personal Information</p>
          <ul class="list-unstyled d-grid gap-3 mb-0 ms-2 py-2 text-heading">
            <li class="d-flex align-items-center">
              <i class='ri-mail-line ri-22px'></i>
              <span class="align-middle ms-2">josephGreen@email.com</span>
            </li>
            <li class="d-flex align-items-center">
              <i class='ri-phone-line ri-22px'></i>
              <span class="align-middle ms-2">+1(123) 456 - 7890</span>
            </li>
            <li class="d-flex align-items-center">
              <i class='ri-time-line ri-22px'></i>
              <span class="align-middle ms-2">Mon - Fri 10AM - 8PM</span>
            </li>
          </ul>
        </div>
        <div class="my-6">
          <p class="text-uppercase text-muted mb-1">Options</p>
          <ul class="list-unstyled d-grid gap-3 ms-2 py-2 text-heading">
            <li class="cursor-pointer d-flex align-items-center">
              <i class='ri-bookmark-line ri-22px'></i>
              <span class="align-middle ms-2">Add Tag</span>
            </li>
            <li class="cursor-pointer d-flex align-items-center">
              <i class='ri-user-star-line ri-22px'></i>
              <span class="align-middle ms-2">Important Contact</span>
            </li>
            <li class="cursor-pointer d-flex align-items-center">
              <i class='ri-image-2-line ri-22px'></i>
              <span class="align-middle ms-2">Shared Media</span>
            </li>
            <li class="cursor-pointer d-flex align-items-center">
              <i class='ri-delete-bin-7-line ri-22px'></i>
              <span class="align-middle ms-2">Delete Contact</span>
            </li>
            <li class="cursor-pointer d-flex align-items-center">
              <i class='ri-forbid-2-line ri-22px'></i>
              <span class="align-middle ms-2">Block Contact</span>
            </li>
          </ul>
        </div>
        <div class="d-flex mt-6">
          <button class="btn btn-danger w-100" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-right">Delete Contact<i class='ri-delete-bin-7-line ri-16px ms-2'></i></button>
        </div>
      </div>
    </div>
    <!-- /Sidebar Right -->

    <div class="app-overlay"></div>
  </div>
</div>
@endsection
