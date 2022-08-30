<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" type="text/javascript"></script>
    <title>Interview Question - MyWave</title>
</head>
<body>

<style type="text/css">
/* Decorate the interface of the form into the same with the screen.png picture*/
input[type="text"]{
    height: 30px;
    border: 2px solid black;
}    
.form-container{
    border: 2px solid black;
    width: 300px;
    height: 160px;
}

.input-container{
    text-align: right;
    margin: 10px;
}
.button-container{
    text-align: right;
}
#submit-Button{
    position: relative;
    border: none;
    padding: 5px 10px 5px 10px;
    width: 120px;
    color: white;
    background-color: #4CAF50;
    font-size: large;
    font-family: 'Times New Roman', Times, serif;
    text-align: left;
    margin: 5px 10px 10px 0;
}

#message{
    text-align: left;
    margin-left: 15px;
    margin-bottom: 10px;
    font-size: 17px;
}
</style>
    <form>
        <div class="form-container">
            <div class="input-container">
                <!--
                    The container to perform getting input data from <input> tag
                -->
                <label for="username">User Name : </label>
                <input type="text" id="username" placeholder=""/> 
            </div>
            <div class="button-container">
                <!--
                    Activate the function from js function by click the button
                -->
                <input type="button" id="submit-Button" value="Submit" onclick="postValue()"/>
                <!--
                    The prompt text to input in this <p> tag
                -->
                <p id="message"></p>
            </div>
        </div>
    </form>

    

    <script src="verify_ajax.js"></script>
</body>
</html>
