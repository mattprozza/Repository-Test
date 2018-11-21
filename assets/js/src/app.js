// Bootstrap
$(function() {
  
  // Full Calendar
  if($('.calendar').length > 0) {
    $('.calendar').fullCalendar({
      themeSystem: 'bootstrap4',
      header: {
        left: 'prev,next',
        right: 'title'
      },
      weekNumbers: false,
      eventLimit: true,
      googleCalendarApiKey: 'AIzaSyB0JX3J1j2sVlWb6HQYW9u-6_YE1ilBt_w',
      events: {
        googleCalendarId: 'u4n3ol55en9t1j2cjd9jl6k0f4@group.calendar.google.com',
        className: 'gcal-event'
      }
    });
  }

  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();
});