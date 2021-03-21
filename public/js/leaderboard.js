$(document).ready(function(){
    $(".table_body .checkbox .input").click(function(){
      if($(this).is(":checked")){
        var item_num = $(this).attr("value");
        $("."+item_num).parent().css("background", "#eaeff9");
      }
      else{
        var item_num = $(this).attr("value");
        $("."+item_num).parent().css("background", "#fff");
      }
    })

    $(".table_header .checkbox .input").click(function(){
      if($(this).is(":checked")){
        $('.checkbox .input').prop('checked', true);
        $(".table_body .item_wrap").css("background", "#eaeff9");
      }
      else{
        $('.checkbox .input').prop('checked', false);
        $(".table_body .item_wrap").css("background", "#fff");
      }
    })

});