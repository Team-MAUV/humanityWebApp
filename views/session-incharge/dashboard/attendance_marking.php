<!DOCTYPE html>
<html>
    <head>
       

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Attendance Marking</title>
        <link rel="stylesheet" href="css/Attendance.css" />
        <link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_attendance.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        
          * {
  box-sizing: border-box;
}
  .column {
  float: left;
  padding: 10px;
   /* Should be removed. Only for demonstration */
}

.left {
  width: 25%;
  background: rgb(68, 68, 221);
  height: 100%;
}

.right1 {
  width: 40%;
}
.right2{
  width:35%
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;}
  
   table {
              border-collapse: collapse;
              border-spacing: 0;
              width: 100%;
              border: 1px solid #ddd;
            }
            
            th, td {
              text-align: left;
              padding: 5px;
            }
            
            tr:nth-child(even){background-color: #f2f2f2}
            </style>
        </head>

        <body>
   <div class="row">
            <div class="column left">
              <iframe src="confirm_participation.html" name="frame2"  width="100%" height="100%" scrolling="yes"></iframe> 
              <br> <h4> To view the Full partcipants list :   <br>  Click below <br> </h4>
              <a href="confirm_participation.html" target="_blank" style="color: black;">  Confirm Participants List </a>
            </div>

<div class="column right1"> 
  <div class="container">
    <h3> Event for Attendance </h3>
    
 <div class="container">
  <form action="#">
    <div class="new">
      <div class="col-25">
        <label for="event_Id">Event Id:</label>
      </div>
      <div class="col-75">
         <input type="text" id="eId" name="eId">
      </div>
    </div>
    <div class="new">
      <div class="col-25">
        <label for="event_name">Event name:</label>
      </div>
      <div class="new">
        <input type="text" id="ename" name="ename">
      </div>
    </div>
    <div class="new">
      <div class="col-25">
    <br>    <label for="date">Date: </label>
      </div>
      <div class="col-75">
        <input type="date" id="date" name="date">
      </div>
    </div>
    <div class="new">
    <br>  <input type="submit" value="Select"> 
    </div>
  </form>
</div>

  </div>

</div>
<div class="column right2">
  <form action="#">
    <h4 style="color: blue;"> <u> Present Participants </u></h4>
    <label for="vol_Id">Volunteer_ID :</label><br>
    <input type="text" id="vId" name="vId"><br><br>
    <label for="vol_name">Volunteer_Name:</label><br>
    <input type="text" id="vol_name" name="vname"><br><br>
    <input type="checkbox" id="Present" name="Present" value="Present">
<label for="present" >Present </label><br> <br>  <br> 
<input type="submit" value="Submit">
<input type="reset" value="Reset">

   
  </form>
</div>
</div>

        </body>

        </html>