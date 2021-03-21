//FOr Ajax test purposes

<html>
  <head>
    <title>AJAX CRUD Operations in PHP</title>
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="jquery-ui.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>    
    <script src="jquery-ui.js"></script>
  </head>
  <body>
    <div class="container">
      <br />
      <h3 align="center">AJAX CRUD Operations in PHP</a></h3>
      <br />
      <br />
      <div align="right" style="margin-bottom:5px;">
        <button type="button" name="add" id="add" class="btn btn-success btn-lg"><i class="fa fa-plus" aria-hidden="true"></i> Add new</button>
      </div>
      <div class="table-responsive" id="user_data">
      </div>
      <br />
    </div>
    <div id="user_dialog" title="Add Data">
      <form method="post" id="user_form">
        <div class="form-group">
          <label>First Name</label>
          <input type="text" name="first_name" id="first_name" class="form-control" />
          <span id="error_first_name" class="text-danger"></span>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" name="last_name" id="last_name" class="form-control" />
          <span id="error_last_name" class="text-danger"></span>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" id="email" class="form-control" />
          <span id="error_email" class="text-danger"></span>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" id="password" class="form-control" />
          <span id="error_password" class="text-danger"></span>
        </div>
        <div class="form-group">
          <input type="hidden" name="action" id="action" value="insert" />
          <input type="hidden" name="hidden_id" id="hidden_id" />
          <input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
        </div>
      </form>
    </div>
    <div id="action_alert" title="Action">
    </div>
    <div id="delete_confirmation" title="Confirmation">
      <p>Are you sure you want to Delete this data?</p>
    </div>
  </body>
</html>

<script>  
$(document).ready(function(){  

    load_data();
    
    function load_data()
    {
        $.ajax({
            url:"fetch.php",
            method:"POST",
            success:function(data)
            {
                $('#user_data').html(data);
            }
        });
    }
    
    $("#user_dialog").dialog({
        autoOpen:false,
        width:400
    });
    
    $('#add').click(function(){
        $('#user_dialog').attr('title', 'Add Data');
        $('#action').val('insert');
        $('#form_action').val('Insert');
        $('#user_form')[0].reset();
        $('#form_action').attr('disabled', false);
        $("#user_dialog").dialog('open');
    });
    
    $('#user_form').on('submit', function(event){
        event.preventDefault();
        var error_first_name = '';
        var error_last_name = '';
        var error_email = '';
        var error_password = '';
        if($('#first_name').val() == '')
        {
            error_first_name = 'First Name is required';
            $('#error_first_name').text(error_first_name);
            $('#first_name').css('border-color', '#cc0000');
        }
        else
        {
            error_first_name = '';
            $('#error_first_name').text(error_first_name);
            $('#first_name').css('border-color', '');
        }
        if($('#last_name').val() == '')
        {
            error_last_name = 'Last Name is required';
            $('#error_last_name').text(error_last_name);
            $('#last_name').css('border-color', '#cc0000');
        }
        else
        {
            error_last_name = '';
            $('#error_last_name').text(error_last_name);
            $('#last_name').css('border-color', '');
        }
        if($('#email').val() == '')
        {
            error_email = 'Email is required';
            $('#error_email').text(error_email);
            $('#email').css('border-color', '#cc0000');
        }
        else
        {
            error_email = '';
            $('#error_email').text(error_email);
            $('#email').css('border-color', '');
        }
        if($('#password').val() == '')
        {
            error_password = 'Password is required';
            $('#error_password').text(error_password);
            $('#password').css('border-color', '#cc0000');
        }
        else
        {
            error_password = '';
            $('#error_password').text(error_password);
            $('#password').css('border-color', '');
        }
        if(error_first_name != '' || error_last_name != '' || error_email != '' || error_password != '')
        {
            return false;
        }
        else
        {
            $('#form_action').attr('disabled', 'disabled');
            var form_data = $(this).serialize();
            $.ajax({
                url:"action.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    $('#user_dialog').dialog('close');
                    $('#action_alert').html(data);
                    $('#action_alert').dialog('open');
                    load_data();
                    $('#form_action').attr('disabled', false);
                }
            });
        }
        
    });
    
    $('#action_alert').dialog({
        autoOpen:false
    });
    
    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        var action = 'fetch_single';
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{id:id, action:action},
            dataType:"json",
            success:function(data)
            {
                $('#first_name').val(data.first_name);
                $('#last_name').val(data.last_name);
                $('#email').val(data.email);
                $('#password').val(data.password);
                $('#user_dialog').attr('title', 'Edit Data');
                $('#action').val('update');
                $('#hidden_id').val(id);
                $('#form_action').val('Update');
                $('#user_dialog').dialog('open');
            }
        });
    });
    
    $('#delete_confirmation').dialog({
        autoOpen:false,
        modal: true,
        buttons:{
            Ok : function(){
                var id = $(this).data('id');
                var action = 'delete';
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:{id:id, action:action},
                    success:function(data)
                    {
                        $('#delete_confirmation').dialog('close');
                        $('#action_alert').html(data);
                        $('#action_alert').dialog('open');
                        load_data();
                    }
                });
            },
            Cancel : function(){
                $(this).dialog('close');
            }
        }    
    });
    
    $(document).on('click', '.delete', function(){
        var id = $(this).attr("id");
        $('#delete_confirmation').data('id', id).dialog('open');
    });
    
});  
</script>