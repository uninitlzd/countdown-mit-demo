$(document).ready(function () {

  if (localStorage.getItem('page') == null) {
    store.set('page', 1);
    page = store.get('page');
  } else {
    page = store.get('page');
  }

  $('#next-button').click(function () {
      page = page + 1;
      store.set('page', page);
      aa = '.page-' + page;
      bb = '.page-' + (page-1);
      console.log('next: ' + aa);
      console.log('prev: ' + bb);
      $(bb).hide();
      $(aa).show();
  });

  $('#prev-button').click(function () {
      if (page > 1) {
          page = page - 1;
          store.set('page', page);
          aa = '.page-' + page;
          bb = '.page-' + (page+1);
          console.log('prev: ' + aa);
          console.log('next: ' + bb);
          $(aa).show();
          $(bb).hide();
      }
  });

  $.get('http://localhost:8000/user', function (data) {
    $('#countdown').countdown(data.expired_date)
    .on('update.countdown', function (event) {
        var format = '%H:%M:%S';
        if(event.offset.days > 0) {
         format = '%-d day%!d ' + format;
        }
        if(event.offset.weeks > 0) {
          format = '%-w week%!w ' + format;
        }
       $(this).html(event.strftime(format));
     }).on('finish.countdown', function (event) {
       window.location.href = 'http://localhost:8000/complete';
     })
  });




});
