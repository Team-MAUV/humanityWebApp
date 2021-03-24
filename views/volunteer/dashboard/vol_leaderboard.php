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
            <script src="<?= URL ?>public/js/leaderboard.js" type="text/javascript"></script>
      </head>

      <body>
        <div class="wpp">
          <div class="table_title">
            Volunteer's LeaderBoard 
          </div>         
          <div class="table_wrap">
            <div class="table_header">
                <div class="item_wrap">
                  <div class="item item_id">
                    <div class="checkbox_wrap">
                        <span class="mark"></span>
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
                  <div class="item item_grade">
                    Grade
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
                          <!-- Assigning the grade for each volunteer -->
                          <?php 
                          if($contact['vol_points']>=1000){
                              $grade ="A";
                          }
                          else if($contact['vol_points']>=500){
                              $grade ="B";
                          }
                          else if($contact['vol_points']>=100){
                            $grade ="C";
                          }
                          else{
                            $grade ="D";
                          }
                          ?>
                          <div class="item item_grade">
                            <div class="cost_wrap">
                              <div class="num"><?=$grade?></div>
                            </div>
                          </div>                          
                      </div>
                <?php endforeach; ?>
            </div>
          </div>
        </div>
      </body>

    </html>
  </div>
</div>
<?php include "vol_dash_footer.php" ?>