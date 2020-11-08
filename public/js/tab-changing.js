 /// Display container which has active class
 var id = $('.tab-section .active').attr('id');
 $('.tab-container').hide();
 $('.tab-container#' + id + 'C').show();

 //// Change the tab when user clicks
 $('.tab-section a').click(function() {
   // console.log(this.id);
   if (!$(this).hasClass('active')) {
     // $('.container').hide();

     $('.tab-section a').removeClass('active');
     $(this).addClass('active');
     $('.tab-container').hide();
     $('.tab-container#' + this.id + 'C').show();
   }
 });