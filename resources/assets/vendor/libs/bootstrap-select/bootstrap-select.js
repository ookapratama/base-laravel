import 'bootstrap-select/js/bootstrap-select';

// Function to handle Bootstrap Select events for floating labels (firefox)
function handleBootstrapSelectEvents() {
  const selectElements = $('.form-floating:has(.selectpicker)');

  selectElements.each(function () {
    $(this).addClass('form-floating-bootstrap-select');
    $(this).on('show.bs.select', function () {
      $(this).find('label').addClass('form-floating-bootstrap-select-label');
    });
    $(this).on('hide.bs.select', function () {
      $(this).find('label').removeClass('form-floating-bootstrap-select-label');
    });
  });
}

window.handleBootstrapSelectEvents = handleBootstrapSelectEvents;
