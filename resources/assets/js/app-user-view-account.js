/**
 * App User View - Account (jquery)
 */
'use strict';

$(function () {
  // Variable declaration for table
  var dt_project_table = $('.datatable-project'),
    dt_invoice_table = $('.datatable-invoice');

  // Project datatable
  // --------------------------------------------------------------------
  if (dt_project_table.length) {
    var dt_project = dt_project_table.DataTable({
      ajax: assetsPath + 'json/projects-list.json', // JSON file to add data
      columns: [
        // columns according to JSON
        { data: 'hours' },
        { data: 'project_name' },
        { data: 'total_task' },
        { data: 'progress' },
        { data: 'hours' }
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
          // User full name and email
          targets: 1,
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
          targets: 2,
          render: function (data, type, full, meta) {
            var $task = full['total_task'];
            return '<span class="text-heading">' + $task + '</span>';
          }
        },
        {
          // Label
          targets: 3,
          responsivePriority: 3,
          render: function (data, type, full, meta) {
            var $progress = full['progress'] + '%',
              $color,
              $labelColor;
            switch (true) {
              case full['progress'] < 25:
                $color = 'bg-danger';
                $labelColor = 'bg-label-danger';
                break;
              case full['progress'] < 50:
                $color = 'bg-warning';
                $labelColor = 'bg-label-warning';
                break;
              case full['progress'] < 75:
                $color = 'bg-info';
                $labelColor = 'bg-label-info';
                break;
              case full['progress'] <= 100:
                $color = 'bg-success';
                $labelColor = 'bg-label-success';
                break;
            }
            return (
              '<div class="d-flex flex-column"><p class="mb-0 text-heading">' +
              $progress +
              '</p>' +
              '<div class="progress rounded ' +
              $labelColor +
              ' w-100 me-3">' +
              '<div class="progress-bar rounded ' +
              $color +
              '" style="width: ' +
              $progress +
              '" aria-valuenow="' +
              $progress +
              '" aria-valuemin="0" aria-valuemax="100"></div>' +
              '</div>' +
              '</div>'
            );
          }
        },
        {
          targets: 4,
          orderable: false
        }
      ],
      order: [[1, 'desc']],
      dom: '<"card-header d-flex flex-wrap row-gap-5 gap-5 gap-sm-0"<"project-head-label"><" text-end pt-0 my-n5"f>>+t',
      displayLength: 7,
      lengthMenu: [7, 10, 25, 50, 75, 100],
      language: {
        sLengthMenu: 'Show _MENU_',
        search: '',
        searchPlaceholder: 'Search Project',
        paginate: {
          next: '<i class="ri-arrow-right-s-line"></i>',
          previous: '<i class="ri-arrow-left-s-line"></i>'
        }
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
    $('div.project-head-label').html('<h5 class="card-title mb-0">Project List</h5>');
    $('.dataTables_filter input').addClass('ms-0');
  }

  // Invoice datatable
  // --------------------------------------------------------------------
  if (dt_invoice_table.length) {
    var dt_invoice = dt_invoice_table.DataTable({
      ajax: assetsPath + 'json/invoice-list.json', // JSON file to add data
      columns: [
        // columns according to JSON
        { data: '' },
        { data: 'invoice_id' },
        { data: 'invoice_status' },
        { data: 'total' },
        { data: 'issued_date' },
        { data: 'action' }
      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          // Invoice ID
          targets: 1,
          render: function (data, type, full, meta) {
            var $invoice_id = full['invoice_id'];
            // Creates full output for row
            var $row_output = '<a href="' + baseUrl + 'app/invoice/preview"><span>#' + $invoice_id + '</span></a>';
            return $row_output;
          }
        },
        {
          // Invoice status
          targets: 2,
          render: function (data, type, full, meta) {
            var $invoice_status = full['invoice_status'],
              $due_date = full['due_date'],
              $balance = full['balance'];
            var roleBadgeObj = {
              Sent: '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-secondary"><i class="ri-mail-line ri-16px"></i></span></span>',
              Draft:
                '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-primary"><i class="ri-folder-line ri-16px"></i></span></span>',
              'Past Due':
                '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-danger"><i class="ri-alert-line ri-16px"></i></span></span>',
              'Partial Payment':
                '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-success"><i class="ri-check-line ri-16px"></i></span></span>',
              Paid: '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-warning"><i class="ri-pie-chart-line ri-16px"></i></span></span>',
              Downloaded:
                '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-info"><i class="ri-arrow-down-line ri-16px"></i></span></span>'
            };
            return (
              "<div class='d-inline-flex' data-bs-toggle='tooltip' data-bs-html='true' title='<span>" +
              $invoice_status +
              '<br> <span class="fw-medium">Balance:</span> ' +
              $balance +
              '<br> <span class="fw-medium">Due Date:</span> ' +
              $due_date +
              "</span>'>" +
              roleBadgeObj[$invoice_status] +
              '</div>'
            );
          }
        },
        {
          // Total Invoice Amount
          targets: 3,
          render: function (data, type, full, meta) {
            var $total = full['total'];
            return '$' + $total;
          }
        },
        {
          // Due Date
          targets: 4,
          render: function (data, type, full, meta) {
            var $due_date = new Date(full['issued_date']);
            // Creates full output for row
            var $row_output =
              '<span class="d-none">' +
              moment($due_date).format('YYYYMMDD') +
              '</span>' +
              moment($due_date).format('DD MMM YYYY');
            $due_date;
            return $row_output;
          }
        },
        {
          // Action
          targets: -1,
          title: 'Action',
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div class="d-flex align-items-center">' +
              '<a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-20px"></i></a>' +
              '<a href="' +
              baseUrl +
              'app/invoice/preview" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-20px"></i></a>' +
              '<button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-20px"></i></button>' +
              '<div class="dropdown-menu dropdown-menu-end m-0">' +
              '<a href="javascript:;" class="dropdown-item"><i class="ri-download-line me-2"></i><span>Download</span></a>' +
              '<a href="javascript:;" class="dropdown-item"><i class="ri-pencil-line me-2"></i><span>Edit</span></a>' +
              '<a href="javascript:;" class="dropdown-item delete-record"><i class="ri-stack-line me-2"></i><span>Duplicate</span></a>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
      order: [[1, 'desc']],
      dom: '<"card-header d-flex"<"head-label"><"dt-action-buttons text-end pt-0"B>>+t<"row mx-5 row-gap-2"<"col-sm-12 col-xxl-6 text-xxl-start text-center pe-5"i><"col-sm-12 col-xxl-6"p>>',
      displayLength: 7,
      language: {
        sLengthMenu: 'Show _MENU_',
        search: '',
        searchPlaceholder: 'Search Invoice',
        paginate: {
          next: '<i class="ri-arrow-right-s-line"></i>',
          previous: '<i class="ri-arrow-left-s-line"></i>'
        }
      },
      // Buttons with Dropdown
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-primary dropdown-toggle float-end  mb-0 waves-effect waves-light',
          text: '<i class="ri-upload-2-line me-2"></i>Export',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ri-printer-line me-1" ></i>Print',
              className: 'dropdown-item',
              exportOptions: { columns: [1, 2, 3, 4] }
            },
            {
              extend: 'csv',
              text: '<i class="ri-file-text-line me-1" ></i>Csv',
              className: 'dropdown-item',
              exportOptions: { columns: [1, 2, 3, 4] }
            },
            {
              extend: 'excel',
              text: '<i class="ri-file-excel-line me-1"></i>Excel',
              className: 'dropdown-item',
              exportOptions: { columns: [1, 2, 3, 4] }
            },
            {
              extend: 'pdf',
              text: '<i class="ri-file-pdf-line me-1"></i>Pdf',
              className: 'dropdown-item',
              exportOptions: { columns: [1, 2, 3, 4] }
            },
            {
              extend: 'copy',
              text: '<i class="ri-file-copy-line me-1" ></i>Copy',
              className: 'dropdown-item',
              exportOptions: { columns: [1, 2, 3, 4] }
            }
          ]
        }
      ],
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
    $('div.head-label').html('<h5 class="card-title mb-0">Invoice List</h5>');
    $('.pagination').addClass('justify-content-xxl-end justify-content-center');
  }
  // On each datatable draw, initialize tooltip
  dt_invoice_table.on('draw.dt', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl, {
        boundary: document.body
      });
    });
  });
});
