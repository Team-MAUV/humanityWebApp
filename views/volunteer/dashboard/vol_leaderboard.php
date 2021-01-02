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
    <?php foreach ($contacts as $contact) : ?>
      <div class="item_wrap">
        <div class="item item_id item_id_1">
          <div class="checkbox_wrap">
             <label class="checkbox">
              <input type="checkbox" class="input" value="item_id_1">
              <span class="mark"></span>
           </label>
          </div><p><?=$contact['vol_id']?></p>
        </div>
        <div class="item item_name">
           <p><?=$contact['name']?></p>
        </div>
        <div class="item item_status delivered">
            <span><?=$contact['level']?></span>
        </div>
        
        <div class="item item_cost">
           <div class="cost_wrap">
            <div class="num"><?=$contact['vol_points']?></div>
          
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      
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