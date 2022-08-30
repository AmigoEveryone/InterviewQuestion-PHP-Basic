function postValue(){
    //declaring the variable by inserting the value using Jquery
    var username = $('#username').val();

    //check for null value
    if(!username)
    {   
        //Error Message while value is null
        message.innerHTML = "Key in username and click submit";
        //change the error message to green colour
        message.style.color = "#4CAF50";
        
        return false;
    }
    else
    {   
        //using post method to pass the value to info.php
        //declaring the username(js variable) to username_php()
        $.post('info.php',{username_php:username},
        function(data){
    
            $('#message').html(data);
            
            
            if(data =="1"){//when the data is true
                $('#message').html("Verified");
                message.style.color = "#4CAF50";//converting the text color to green
            }
            else //else display the Error message in id=message
            {
                $('#message').html("Error");
                message.style.color = "red";//converting the text color to red
            }
    
        });
        
        return true;
    }
  

}