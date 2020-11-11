<?php $page = 'home';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">




<!DOCTYPE html>
<html>
    <head>
       

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Confirm Participants </title>
     
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
         body{
            
             margin:10px;
  height:100vh;
  background: rgb(196, 196, 221);

         }
 
   table {
              border-collapse: collapse;
              border-spacing: 0;
              width: 100%;
              border: 1px solid rgb(252, 246, 246);
              height: 100vh;
            }
            
            th, td {
              text-align: left;
              padding: 5px;
            }
            
            tr:nth-child(even){background-color: #f2f2f2}


  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgb(97, 101, 102);
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: rgb(69, 131, 224);
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #071868;
}

input:focus + .slider {
  box-shadow: 0 0 1px #110486;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
  color: darkblue;
}

.slider.round:before {
  border-radius: 50%;
}
            </style>
        </head>

        <body>

 <h5> <center> Confirm Participants List</center> </h5> 
 <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<div style="overflow-x:auto;">
    <table style="background-color:rgb(48, 48, 221);">
      <tr>
        <th>Volunteer_ID</th>
        <th>Volunteer_Name</th>
        <th> Present </th>
      </tr>
      <tr>
        <td>vol-10</td>
        <td>Smith</td>
       <td> <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label></td>
        
        </tr>
        <tr>
            <td>vol-18</td>
            <td>Perera</td>
            <td> <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label></td>
            </tr>
            <tr>
                <td>vol-19</td>
                <td>Gihan</td> 
                <td> <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label></td>
                </tr>
                <tr>
                    <td>vol-22</td>
                    <td>Kavin</td>
                    <td> <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label></td>
                    </tr>
                    <tr>
                        <td>vol-25</td>
                        <td>Anjana</td>
                        <td> <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span>
                        </label></td>
                        </tr>

                        <tr>
                            <td>vol-26</td>
                            <td>Manuli</td>
                            <td> <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                            </label></td>
                            </tr>

                            <tr>
                                <td>vol-27</td>
                                <td>Uthpala</td>
                                <td> <label class="switch">
                                  <input type="checkbox">
                                  <span class="slider round"></span>
                                </label></td>
                                </tr>
                                <tr>
                                    <td>vol-28</td>
                                    <td>Vigani</td>
                                    <td> <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label></td>
                                    </tr>
                                    <tr>
                                        <td>vol-30</td>
                                        <td>Gihan</td>
                                        <td> <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                        </label></td>
                                        </tr>
                                        
                                            <tr>
                                                <td>vol-28</td>
                                                <td>Nuwan</td>
                                                <td> <label class="switch">
                                                  <input type="checkbox">
                                                  <span class="slider round"></span>
                                                </label></td>
                                                </tr>
                                                <tr>
                                                    <td>vol-30</td>
                                                    <td>Ruwani </td>
                                                    <td> <label class="switch">
                                                      <input type="checkbox">
                                                      <span class="slider round"></span>
                                                    </label></td>
                                                    </tr>
                                                    <tr>
                                                        <td>vol-31</td>
                                                        <td>Gurmeet </td>
                                                        <td> <label class="switch">
                                                          <input type="checkbox">
                                                          <span class="slider round"></span>
                                                        </label></td>
                                                        </tr>

        </table> 
      </div>
        </body>
</html>
<?php include "sess_footer.php" ?>