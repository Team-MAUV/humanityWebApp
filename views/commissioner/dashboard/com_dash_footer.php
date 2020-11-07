<footer>
  <div class="footer">Powered by<h4>Humanity2020&copy;</div>
</footer>
</div>

</body>

<script src="https://kit.fontawesome.com/c0d2632e91.js" crossorigin="anonymous"></script>
<script src="<?= URL ?>public/js/jquery-3.5.1.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script>
  $(".feat-btn").click(function() {
    $("div ul .feat-show").toggleClass("show");
    $("div ul .first").toggleClass("rotate");
  });
  $(".serv-btn").click(function() {
    $("div ul .serv-show").toggleClass("show1");
    $("div ul .second").toggleClass("rotate");
  });
  $("div ul li").click(function() {
    $(this).addClass("active").siblings().removeClass("active");
  });
</script>


<script>
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
</script>

</html>