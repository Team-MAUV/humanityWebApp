<?php $page = 'volleaderboard';
include "vol_dash_header.php"; ?>

<link rel="stylesheet" href="<?= URL ?>public/css/vol_dash_leaderboard.css" />


<div class="grid-container">
 <div id="breadcrum">

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RVolunteer Leaderboard</title>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
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
	</script>
</head>
<body>

<div class="wpp">
  <div class="table_title">
    Volunteers LeaderBoard 
  </div>
  
  <div class="table_wrap">
    <div class="table_header">
      <div class="item_wrap">
        <div class="item item_id">
           <div class="checkbox_wrap">
             <label class="checkbox">
              <input type="checkbox" class="input">
              <span class="mark"></span>
           </label>
          </div>ID
        </div>
        <div class="item item_name">
           Name
        </div>
        <div class="item item_status">
           Level
        </div>
      
        <div class="item item_cost">
           Points
        </div>
      </div>
    </div>
    <div class="table_body">
      <div class="item_wrap">
        <div class="item item_id item_id_1">
          <div class="checkbox_wrap">
             <label class="checkbox">
              <input type="checkbox" class="input" value="item_id_1">
              <span class="mark"></span>
           </label>
          </div><p>021</p>
        </div>
        <div class="item item_name">
           <p>John Alex</p>
        </div>
        <div class="item item_status delivered">
            <span>Permanent</span>
        </div>
        
        <div class="item item_cost">
           <div class="cost_wrap">
            <div class="num">350</div>
          
          </div>
        </div>
      </div>
      
      <div class="item_wrap">
        <div class="item item_id item_id_2">
           <div class="checkbox_wrap">
             <label class="checkbox">
              <input type="checkbox" class="input" value="item_id_2">
              <span class="mark"></span>
           </label>
          </div><p>005</p>
        </div>
        <div class="item item_name">
           <p>Peter</p>
        </div>
        <div class="item item_status delivered">
            <span>Permanent</span>
        </div>
        
        <div class="item item_cost">
           <div class="cost_wrap">
            <div class="num">265</div>
       
          </div>
        </div>
      </div>
      
      <div class="item_wrap">
        <div class="item item_id item_id_3">
           <div class="checkbox_wrap">
             <label class="checkbox">
              <input type="checkbox" class="input" value="item_id_3">
              <span class="mark"></span>
           </label>
          </div><p>004</p>
        </div>
        <div class="item item_name">
           <p>Michael Bevan </p>
        </div>
        <div class="item item_status delivered">
            <span>Permanent</span>
        </div>
       
        <div class="item item_cost">
          <div class="cost_wrap">
            <div class="num">215</div>
           
          </div>
        </div>
      </div>
      
      <div class="item_wrap">
        <div class="item item_id item_id_4">
           <div class="checkbox_wrap">
             <label class="checkbox">
              <input type="checkbox" class="input" value="item_id_4">
              <span class="mark"></span>
           </label>
          </div><p>001</p>
        </div>
        <div class="item item_name">
           <p>Amy Hobson</p>
        </div>
        <div class="item item_status delivered">
            <span>Permanent</span>
        </div>
       
        <div class="item item_cost">
          <div class="cost_wrap">
            <div class="num">200</div>
          
          </div>
        </div>
      </div>
      
      <div class="item_wrap">
        <div class="item item_id item_id_5">
          <div class="checkbox_wrap">
             <label class="checkbox">
              <input type="checkbox" class="input" value="item_id_5">
              <span class="mark"></span>
           </label>
          </div><p>035</p>
        </div>
        <div class="item item_name">
           <p>John Alex</p>
        </div>
        <div class="item item_status error">
            <span>temporary</span>
        </div>
        
        <div class="item item_cost">
           <div class="cost_wrap">
            <div class="num">190</div>
          
          </div>
        </div>
      </div>
      
      <div class="item_wrap">
        <div class="item item_id item_id_6">
           <div class="checkbox_wrap">
             <label class="checkbox">
              <input type="checkbox" class="input" value="item_id_6">
              <span class="mark"></span>
           </label>
          </div><p>039</p>
        </div>
        <div class="item item_name">
           <p>Michael Bevan </p>
        </div>
        <div class="item item_status error">
            <span>Temporary</span>
        </div>
     
        <div class="item item_cost">
          <div class="cost_wrap">
            <div class="num">180</div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>



































 
  </div>

</div>
</html>








































</div>
</html>

<?php include "vol_dash_footer.php" ?>