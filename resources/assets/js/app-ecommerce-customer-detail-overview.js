/**
 * Page Detail overview
 */

'use strict';

// Datatable (jquery)
$(function () {
  // Variable declaration for table
  var dt_customer_order = $('.datatables-customer-order'),
    order_details = baseUrl + 'app/ecommerce/order/details',
    statusObj = {
      1: { title: 'Ready to  Pickup', class: 'bg-label-info' },
      2: { title: 'Dispatched', class: 'bg-label-warning' },
      3: { title: 'Delivered', class: 'bg-label-success' },
      4: { title: 'Out for delivery', class: 'bg-label-primary' }
    };

  // orders datatable
  if (dt_customer_order.length) {
    var dt_order = dt_customer_order.DataTable({
      ajax: assetsPath + 'json/ecommerce-customer-order.json', // JSON file to add data
      columns: [
        // columns according to JSON
        { data: 'id' },
        { data: 'order' },
        { data: 'date' },
        { data: 'status' },
        { data: 'spent' },
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
          // order order number
          targets: 1,
          responsivePriority: 4,
          render: function (data, type, full, meta) {
            var $id = full['order'];

            return "<a href='" + order_details + "'><span>#" + $id + '</span></a>';
          }
        },
        {
          // date
          targets: 2,
          render: function (data, type, full, meta) {
            var date = new Date(full.date); // convert the date string to a Date object
            var formattedDate = date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
            return '<span class="text-nowrap">' + formattedDate + '</span > ';
          }
        },
        {
          // status
          targets: 3,
          render: function (data, type, full, meta) {
            var $status = full['status'];

            return (
              '<span class="badge rounded-pill ' +
              statusObj[$status].class +
              '" text-capitalized>' +
              statusObj[$status].title +
              '</span>'
            );
          }
        },
        {
          // spent
          targets: 4,
          render: function (data, type, full, meta) {
            var $spent = full['spent'];

            return '<span >' + $spent + '</span>';
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
              '<button class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-20px"></i></button>' +
              '<div class="dropdown-menu dropdown-menu-end m-0">' +
              '<a href="javascript:;" class="dropdown-item">View</a>' +
              '<a href="javascript:;" class="dropdown-item  delete-record">Delete</a>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
      order: [[1, 'desc']],
      dom:
        '<"card-header d-flex flex-wrap py-0 pt-5 pt-sm-0 flex-column flex-sm-row"<"head-label text-center me-4 ms-1">f' +
        '>t' +
        '<"row mx-4"' +
        '<"col-md-12 col-xxl-6 text-center text-xxl-start pb-2 pb-xxl-0 pe-0"i>' +
        '<"col-md-12 col-xxl-6"p>' +
        '>',
      lengthMenu: [6, 30, 50, 70, 100],
      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Search order',
        paginate: {
          next: '<i class="ri-arrow-right-s-line"></i>',
          previous: '<i class="ri-arrow-left-s-line"></i>'
        }
      },
      // Buttons with Dropdown

      // For responsive popup
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['order'];
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
    $('div.head-label').html('<h5 class="card-title mb-0 text-nowrap">Orders placed</h5>');
    $('.pagination').addClass('justify-content-xxl-end justify-content-center');
  }

  // Delete Record
  $('.datatables-orders tbody').on('click', '.delete-record', function () {
    dt_order.row($(this).parents('tr')).remove().draw();
  });
});

// Validation & Phone mask
