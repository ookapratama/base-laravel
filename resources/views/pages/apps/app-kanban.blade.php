@extends('layouts/layoutMaster')

@section('title', 'Kanban - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/jkanban/jkanban.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/quill/typography.scss',
  'resources/assets/vendor/libs/quill/katex.scss',
  'resources/assets/vendor/libs/quill/editor.scss'
])
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-kanban.scss')
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/jkanban/jkanban.js',
  'resources/assets/vendor/libs/quill/katex.js',
  'resources/assets/vendor/libs/quill/quill.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/app-kanban.js')
@endsection

@section('content')
<div class="app-kanban">
  <!-- Add new board -->
  <div class="row">
    <div class="col-12">
      <form class="kanban-add-new-board">
        <label class="kanban-add-board-btn" for="kanban-add-board-input">
          <i class="ri-add-line"></i>
          <span class="align-middle">Add new</span>
        </label>
        <input type="text" class="form-control w-px-250 kanban-add-board-input mb-4 d-none" placeholder="Add Board Title" id="kanban-add-board-input" required />
        <div class="mb-4 kanban-add-board-input d-none">
          <button class="btn btn-primary btn-sm me-3">Add</button>
          <button type="button" class="btn btn-outline-secondary btn-sm kanban-add-board-cancel-btn">Cancel</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Kanban Wrapper -->
  <div class="kanban-wrapper"></div>

  <!-- Edit Task/Task & Activities -->
  <div class="offcanvas offcanvas-end kanban-update-item-sidebar">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title">Edit Task</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-2">
      <div class="nav-align-top">
        <ul class="nav nav-tabs mb-2">
          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-update">
              <i class="ri-edit-box-line me-2"></i>
              <span class="align-middle">Edit</span>
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-activity">
              <i class="ri-pie-chart-line me-2"></i>
              <span class="align-middle">Activity</span>
            </button>
          </li>
        </ul>
      </div>
      <div class="tab-content px-0 pb-0">
        <!-- Update item/tasks -->
        <div class="tab-pane fade show active" id="tab-update" role="tabpanel">
          <form>
            <div class="form-floating form-floating-outline mb-5">
              <input type="text" id="title" class="form-control" placeholder="Enter Title" />
              <label for="title">Title</label>
            </div>
            <div class="form-floating form-floating-outline mb-5">
              <input type="text" id="due-date" class="form-control" placeholder="Enter Due Date" />
              <label for="due-date">Due Date</label>
            </div>
            <div class="form-floating form-floating-outline mb-5">
              <select class="select2 select2-label form-select" id="label">
                <option data-color="bg-label-success" value="UX">UX</option>
                <option data-color="bg-label-warning" value="Images">
                  Images
                </option>
                <option data-color="bg-label-secondary" value="App">App</option>
                <option data-color="bg-label-danger" value="Code Review">
                  Code Review
                </option>
                <option data-color="bg-label-info" value="Info">
                  Info
                </option>
                <option data-color="bg-label-primary" value="Charts & Maps">
                  Charts & Maps
                </option>
              </select>
              <label for="label"> label</label>
            </div>
            <div class="mb-5">
              <label class="form-label">Assigned</label>
              <div class="assigned d-flex flex-wrap"></div>
            </div>
            <div class="mb-5">
              <label class="form-label" for="attachments">Attachments</label>
              <div>
                <input type="file" class="form-control" id="attachments" />
              </div>
            </div>
            <div class="mb-5">
              <label class="form-label">Comment</label>
              <div class="comment-editor"></div>
              <div class="d-flex justify-content-end">
                <div class="comment-toolbar">
                  <span class="ql-formats me-0">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                  </span>
                </div>
              </div>
            </div>
            <div>
              <div class="d-flex flex-wrap">
                <button type="button" class="btn btn-primary me-4" data-bs-dismiss="offcanvas">
                  Update
                </button>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="offcanvas">
                  Delete
                </button>
              </div>
            </div>
          </form>
        </div>
        <!-- Activities -->
        <div class="tab-pane fade text-heading" id="tab-activity" role="tabpanel">
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <span class="avatar-initial bg-label-success rounded-circle">HJ</span>
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Jordan</span> Left the board.
              </p>
              <small class="text-muted">Today 11:00 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Dianna</span> mentioned
                <span class="text-primary">@bruce</span> in
                a comment.
              </p>
              <small class="text-muted">Today 10:20 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Martian</span> added moved
                Charts & Maps task to the done board.
              </p>
              <small class="text-muted">Today 10:00 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Barry</span> Commented on App
                review task.
              </p>
              <small class="text-muted">Today 8:32 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <span class="avatar-initial bg-label-dark rounded-circle">BW</span>
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Bruce</span> was assigned
                task of code review.
              </p>
              <small class="text-muted">Today 8:30 PM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <span class="avatar-initial bg-label-danger rounded-circle">CK</span>
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Clark</span> assigned task UX
                Research to
                <span class="text-primary">@martian</span>
              </p>
              <small class="text-muted">Today 8:00 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Ray</span> Added moved
                <span>Forms & Tables</span> task
                from in progress to done.
              </p>
              <small class="text-muted">Today 7:45 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Barry</span> Complete all the
                tasks assigned to him.
              </p>
              <small class="text-muted">Today 7:17 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <span class="avatar-initial bg-label-success rounded-circle">HJ</span>
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Jordan</span> added task to
                update new images.
              </p>
              <small class="text-muted">Today 7:00 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Dianna</span> moved task
                <span>FAQ UX</span> from in
                progress to done board.
              </p>
              <small class="text-muted">Today 7:00 AM</small>
            </div>
          </div>
          <div class="media mb-4 d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <span class="avatar-initial bg-label-danger rounded-circle">CK</span>
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Clark</span> added new board
                with name <span>Done</span>.
              </p>
              <small class="text-muted">Yesterday 3:00 PM</small>
            </div>
          </div>
          <div class="media d-flex align-items-center">
            <div class="avatar me-3 flex-shrink-0">
              <span class="avatar-initial bg-label-dark rounded-circle">BW</span>
            </div>
            <div class="media-body ms-1">
              <p class="mb-0">
                <span>Bruce</span> added new task
                in progress board.
              </p>
              <small class="text-muted">Yesterday 12:00 PM</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
