/**
 * App eCommerce review
 */

'use strict';

// apex-chart
(function () {
  let labelColor;

  if (isDarkStyle) {
    labelColor = config.colors_dark.textMuted;
  } else {
    labelColor = config.colors.textMuted;
  }

  // Visitor Bar Chart
  // --------------------------------------------------------------------
  const visitorBarChartEl = document.querySelector('#reviewsChart'),
    visitorBarChartConfig = {
      chart: {
        height: 160,
        width: 190,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          barHeight: '75%',
          columnWidth: '40%',
          startingShape: 'rounded',
          endingShape: 'rounded',
          borderRadius: 5,
          distributed: true
        }
      },
      grid: {
        show: false,
        padding: {
          top: -25,
          bottom: -12
        }
      },
      colors: [
        config.colors_label.success,
        config.colors_label.success,
        config.colors_label.success,
        config.colors_label.success,
        config.colors.success,
        config.colors_label.success,
        config.colors_label.success
      ],
      dataLabels: {
        enabled: false
      },
      series: [
        {
          data: [20, 40, 60, 80, 100, 80, 60]
        }
      ],
      legend: {
        show: false
      },
      xaxis: {
        categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: labelColor,
            fontSize: '13px'
          }
        }
      },
      yaxis: {
        labels: {
          show: false
        }
      },
      responsive: [
        {
          breakpoint: 0,
          options: {
            chart: {
              width: '100%'
            },
            plotOptions: {
              bar: {
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 1440,
          options: {
            chart: {
              height: 150,
              width: 190,
              toolbar: {
                show: false
              }
            },
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 1400,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 1200,
          options: {
            chart: {
              height: 130,
              width: 190,
              toolbar: {
                show: false
              }
            },
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 992,
          chart: {
            height: 150,
            width: 190,
            toolbar: {
              show: false
            }
          },
          options: {
            plotOptions: {
              bar: {
                borderRadius: 5,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 883,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 5,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 768,
          options: {
            chart: {
              height: 150,
              width: 190,
              toolbar: {
                show: false
              }
            },
            plotOptions: {
              bar: {
                borderRadius: 4,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 576,
          options: {
            chart: {
              width: '100%',
              height: '200',
              type: 'bar'
            },
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '30% '
              }
            }
          }
        },
        {
          breakpoint: 420,
          options: {
            plotOptions: {
              chart: {
                width: '100%',
                height: '200',
                type: 'bar'
              },
              bar: {
                borderRadius: 3,
                columnWidth: '30%'
              }
            }
          }
        }
      ]
    };
  if (typeof visitorBarChartEl !== undefined && visitorBarChartEl !== null) {
    const visitorBarChart = new ApexCharts(visitorBarChartEl, visitorBarChartConfig);
    visitorBarChart.render();
  }
})();

// Datatable (jquery)
$(function () {
  let borderColor, bodyBg, headingColor;

  if (isDarkStyle) {
    borderColor = config.colors_dark.borderColor;
    bodyBg = config.colors_dark.bodyBg;
    headingColor = config.colors_dark.headingColor;
  } else {
    borderColor = config.colors.borderColor;
    bodyBg = config.colors.bodyBg;
    headingColor = config.colors.headingColor;
  }

  // Variable declaration for table
  var dt_customer_review = $('.datatables-review'),
    customerView = baseUrl + 'app/ecommerce/customer/details/overview',
    statusObj = {
      Pending: { title: 'Pending', class: 'bg-label-warning' },
      Published: { title: 'Published', class: 'bg-label-success' }
    };
  // reviewer datatable
  if (dt_customer_review.length) {
    var dt_review = dt_customer_review.DataTable({
      ajax: assetsPath + 'json/app-ecommerce-reviews.json', // JSON file to add data
      columns: [
        // columns according to JSON
        { data: '' },
        { data: 'id' },
        { data: 'product' },
        { data: 'reviewer' },
        { data: 'review' },
        { data: 'date' },
        { data: 'status' },
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
          responsivePriority: 3,
          checkboxes: true,
          render: function () {
            return '<input type="checkbox" class="dt-checkboxes form-check-input">';
          },
          checkboxes: {
            selectAllRender: '<input type="checkbox" class="form-check-input">'
          }
        },
        {
          // product
          targets: 2,
          // responsivePriority: 2,
          render: function (data, type, full, meta) {
            var $product = full['product'],
              $company_name = full['company_name'],
              $id = full['id'],
              $image = full['product_image'];

            if ($image) {
              // For Avatar image
              var $output =
                '<img src="' +
                assetsPath +
                'img/ecommerce-images/' +
                $image +
                '" alt="Product-' +
                $id +
                '" class="rounded-2">';
            } else {
              // For Avatar badge
              var stateNum = Math.floor(Math.random() * 6);
              var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
              var $state = states[stateNum],
                $product = full['product'],
                $initials = $product.match(/\b\w/g) || [];
              $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
              $output = '<span class="avatar-initial rounded bg-label-' + $state + '">' + $initials + '</span>';
            }
            // Creates full output for row
            var $row_output =
              '<div class="d-flex justify-content-start align-items-center customer-name">' +
              '<div class="avatar-wrapper">' +
              '<div class="avatar me-3 rounded bg-lighter">' +
              $output +
              '</div>' +
              '</div>' +
              '<div class="d-flex flex-column">' +
              '<span class="text-nowrap text-heading fw-medium">' +
              $product +
              '</span></a>' +
              '<small>' +
              $company_name +
              '</small>' +
              '</div>' +
              '</div>';
            return $row_output;
          }
        },
        {
          // reviewer
          targets: 3,
          responsivePriority: 1,
          render: function (data, type, full, meta) {
            var $name = full['reviewer'],
              $email = full['email'],
              $avatar = full['avatar'];

            if ($avatar) {
              // For Avatar image
              var $output =
                '<img src="' + assetsPath + 'img/avatars/' + $avatar + '" alt="Avatar" class="rounded-circle">';
            } else {
              // For Avatar badge
              var stateNum = Math.floor(Math.random() * 6);
              var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
              var $state = states[stateNum],
                $name = full['reviewer'],
                $initials = $name.match(/\b\w/g) || [];
              $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
              $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
            }
            // Creates full output for row
            var $row_output =
              '<div class="d-flex justify-content-start align-items-center customer-name">' +
              '<div class="avatar-wrapper me-3">' +
              '<div class="avatar avatar-sm">' +
              $output +
              '</div>' +
              '</div>' +
              '<div class="d-flex flex-column">' +
              '<a href="' +
              customerView +
              '"><span class="fw-medium">' +
              $name +
              '</span></a>' +
              '<small class="text-nowrap">' +
              $email +
              '</small>' +
              '</div>' +
              '</div>';
            return $row_output;
          }
        },
        {
          // Review
          targets: 4,
          responsivePriority: 2,
          render: function (data, type, full, meta) {
            var $num = full['review'];
            var $heading = full['head'];
            var $comment = full['para'];
            var $readOnlyRatings = $('<div class="read-only-ratings ps-0 mb-2"></div>');

            // Initialize rateYo plugin
            $readOnlyRatings.rateYo({
              rating: $num,
              rtl: isRtl,
              readOnly: true, // Make the rating read-only
              starWidth: '24px', // Set the width of each star
              starSvg:
                '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                '<path d="M12 17L6.12199 20.59L7.71999 13.89L2.48999 9.41L9.35499 8.86L12 2.5L14.645 8.86L21.511 9.41L16.28 13.89L17.878 20.59L12 17Z"/>' +
                '</svg>'
            });

            var $review =
              '<div>' +
              $readOnlyRatings.prop('outerHTML') + // Get the HTML string of the rateYo plugin
              '<h6 class="mb-1 text-truncate text-capitalize">' +
              $heading +
              '</h6>' +
              '<small class="text-break pe-3">' +
              $comment +
              '</small>' +
              '</div>';

            return $review;
          }
        },
        {
          // date
          targets: 5,
          render: function (data, type, full, meta) {
            var date = new Date(full.date); // convert the date string to a Date object
            var formattedDate = date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
            return '<span class="text-nowrap">' + formattedDate + '</span>';
          }
        },
        {
          // User Status
          targets: 6,
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
          // Actions
          targets: -1,
          title: 'Actions',
          searchable: false,
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div>' +
              '<div class="dropdown">' +
              '<a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-20px"></i></a>' +
              '<div class="dropdown-menu dropdown-menu-end">' +
              '<a href="javascript:;" class="dropdown-item">Download</a>' +
              '<a href="javascript:;" class="dropdown-item">Edit</a>' +
              '<a href="javascript:;" class="dropdown-item">Duplicate</a>' +
              '<div class="dropdown-divider"></div>' +
              '<a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>' +
              '</div>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
      order: [[2, 'asc']],
      dom:
        '<"card-header d-flex align-items-md-center flex-wrap pb-md-0 pt-0"' +
        '<"me-5 ms-n2"f>' +
        '<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-end align-items-md-center justify-content-md-end pt-0 gap-4 flex-wrap"l<"review_filter"> <"mx-0 me-md-n3 mt-sm-0"B>>' +
        '>t' +
        '<"row mx-2"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',

      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Search',
        paginate: {
          next: '<i class="ri-arrow-right-s-line"></i>',
          previous: '<i class="ri-arrow-left-s-line"></i>'
        }
      },
      // Buttons with Dropdown
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-primary dropdown-toggle me-3 waves-effect waves-light',
          text: '<i class="ri-upload-2-line ri-16px me-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ri-printer-line me-1" ></i>Print',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be print
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('customer-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              },
              customize: function (win) {
                //customize print view for dark
                $(win.document.body)
                  .css('color', headingColor)
                  .css('border-color', borderColor)
                  .css('background-color', bodyBg);
                $(win.document.body)
                  .find('table')
                  .addClass('compact')
                  .css('color', 'inherit')
                  .css('border-color', 'inherit')
                  .css('background-color', 'inherit');
              }
            },
            {
              extend: 'csv',
              text: '<i class="ri-file-text-line me-1" ></i>Csv',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('customer-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
            },
            {
              extend: 'excel',
              text: '<i class="ri-file-excel-line me-1"></i>Excel',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('customer-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
            },
            {
              extend: 'pdf',
              text: '<i class="ri-file-pdf-line me-1"></i>Pdf',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('customer-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
            },
            {
              extend: 'copy',
              text: '<i class="ri-file-copy-line me-1"></i>Copy',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('customer-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
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
              return 'Details of ' + data['product'];
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
      },
      initComplete: function () {
        // Adding role filter once table initialized
        this.api()
          .columns(6)
          .every(function () {
            var column = this;
            var select = $('<select id="Review" class="form-select"><option value=""> All </option></select>')
              .appendTo('.review_filter')
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
              });
          });
      }
    });
    $('.dataTables_length').addClass('my-0');
  }

  // Delete Record
  $('.datatables-review tbody').on('click', '.delete-record', function () {
    dt_review.row($(this).parents('tr')).remove().draw();
  });

  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.review_filter .form-select').addClass('form-select-sm');
  }, 300);
});
