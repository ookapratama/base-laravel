/**
 * profile - user (jquery)
 */
'use strict';

$(function () {
  // Variable declaration for table
  var dt_project_table = $('.datatable-project');

  // Project datatable
  // --------------------------------------------------------------------
  if (dt_project_table.length) {
    var dt_project = dt_project_table.DataTable({
      ajax: assetsPath + 'json/pages-profile-user.json', // JSON file to add data
      columns: [
        // columns according to JSON
        { data: 'id' },
        { data: 'id' },
        { data: 'project_name' },
        { data: 'leader' },
        { data: 'avatar' },
        { data: 'progress' },
        { data: ' ' }
      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          searchable: false,
          orderable: false,
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          // For Checkboxes
          targets: 1,
          orderable: false,
          searchable: false,
          responsivePriority: 4,
          checkboxes: true,
          render: function () {
            return '<input type="checkbox" class="dt-checkboxes form-check-input">';
          },
          checkboxes: {
            selectAllRender: '<input type="checkbox" class="form-check-input">'
          }
        },
        {
          // User full name and email
          targets: 2,
          responsivePriority: 1,
          render: function (data, type, full, meta) {
            var $name = full['project_name'],
              $framework = full['framework'],
              $image = full['project_image'];
            if ($image) {
              // For Avatar image
              var $output =
                '<img src="' +
                assetsPath +
                'img/icons/brands/' +
                $image +
                '" alt="Project Image" class="rounded-circle">';
            } else {
              // For Avatar badge
              var stateNum = Math.floor(Math.random() * 6) + 1;
              var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
              var $state = states[stateNum],
                $name = full['full_name'],
                $initials = $name.match(/\b\w/g) || [];
              $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
              $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
            }
            // Creates full output for row
            var $row_output =
              '<div class="d-flex justify-content-left align-items-center">' +
              '<div class="avatar-wrapper">' +
              '<div class="avatar avatar-sm me-3">' +
              $output +
              '</div>' +
              '</div>' +
              '<div class="d-flex flex-column">' +
              '<span class="text-truncate fw-medium text-heading">' +
              $name +
              '</span>' +
              '<small>' +
              $framework +
              '</small>' +
              '</div>' +
              '</div>';
            return $row_output;
          }
        },
        {
          // Task
          targets: 3,
          render: function (data, type, full, meta) {
            var $task = full['leader'];
            return '<span class="text-heading">' + $task + '</span>';
          }
        },
        {
          // progress
          targets: 5,
          render: function (data, type, full, meta) {
            var $progress = full['progress'];
            var $progress_output =
              '<div class="d-flex align-items-center">' +
              '<div div class="progress rounded-pill w-px-75" style="height: 6px;">' +
              '<div class="progress-bar" role="progressbar" style="width:' +
              $progress +
              '%;" aria-valuenow="' +
              $progress +
              '" aria-valuemin="0" aria-valuemax="100"></div>' +
              '</div>' +
              '<div class="text-heading ms-3">' +
              $progress +
              '%</div>' +
              '</div>';
            return $progress_output;
          }
        },
        {
          // avatar
          targets: 4,
          render: function (data, type, full, meta) {
            var $avatar = full['avatar'],
              $avatar_item = '',
              $avatar_count = 0;
            for (var i = 0; i < $avatar.length; i++) {
              $avatar_item +=
                '<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up">' +
                '<img class="rounded-circle" src="' +
                assetsPath +
                'img/avatars/' +
                $avatar[i] +
                '.png" alt="Avatar">' +
                '</li>';
              $avatar_count++;
              if ($avatar_count > 2) break;
            }
            if ($avatar_count > 2) {
              var $remainingAvatars = $avatar.length - 3;
              if ($remainingAvatars > 0) {
                $avatar_item +=
                  '<li class="avatar avatar-sm">' +
                  '<span class="avatar-initial rounded-circle pull-up text-heading" data-bs-toggle="tooltip" data-bs-placement="top" title="' +
                  $remainingAvatars +
                  ' more">+' +
                  $remainingAvatars +
                  '</span >' +
                  '</li>';
              }
            }
            var $avatar_output =
              '<div class="d-flex align-items-center">' +
              '<ul class="list-unstyled d-flex align-items-center avatar-group mb-0 z-2">' +
              $avatar_item +
              '</ul>' +
              '</div>';
            return $avatar_output;
          }
        },
        {
          // Actions
          targets: -1,
          title: 'Actions',
          searchable: false,
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div>' +
              '<div class="dropdown">' +
              '<a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow text-body rounded-pill waves-effect" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-20px"></i></a>' +
              '<div class="dropdown-menu dropdown-menu-end">' +
              '<a href="javascript:;" class="dropdown-item">Download</a>' +
              '<a href="javascript:;" class="dropdown-item">Delete</a>' +
              '<a href="javascript:;" class="dropdown-item">View</a>' +
              '</div>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
      order: [[2, 'desc']],
      dom: 't',
      displayLength: 7,
      lengthMenu: [7, 10, 25, 50, 75, 100],
      language: {
        sLengthMenu: 'Show _MENU_',
        search: '',
        searchPlaceholder: 'Search Project'
      },
      // For responsive popup
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['full_name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIndex +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      }
    });
  }
});
