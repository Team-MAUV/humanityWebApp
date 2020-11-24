 
$(document).ready(function(){  

    load_data();
    
    function load_data()
    {
        $.ajax({
            url:"sessionincharge",
            method:"POST",
            success:function(data)
            {
                $('#sessionIncharge_data').html(data);
            }
        });
    }
    
  });  
