import select2 from 'select2/dist/js/select2.full';

try {
  window.select2 = select2;
} catch (e) {}
select2();

export { select2 };

// Select2 on focus add/remove (.select2-focus) class to parent (.form-floating)
function select2Focus(ele) {
  $(ele).on('select2:open', function (e) {
    $(e.target.closest('.form-floating')).addClass('select2-focus');
  });
  $(ele).on('select2:close', function (e) {
    $(e.target.closest('.form-floating')).removeClass('select2-focus');
  });
  ele.closest('.form-floating').hasClass('form-floating') &&
    ele.closest('.form-floating').addClass('form-floating-select2');
}

window.select2Focus = select2Focus;
