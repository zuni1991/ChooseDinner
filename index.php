<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>What will we eat today</title>
</head>
<body style = "text-align: center;">
<h1> What does Pame want to eat today?</h1>
<button id="button" onclick="myFunction()"> Lets Eat </button>
<script>
    function myFunction(){
        var things = ['Pizza', 'Pasta', 'Ramen','Sushi','Mexican Food', 'CFA', 'Juan will cook <3', 'Chinese food', 'Indian Food'];
var thing = things[Math.floor(Math.random()*things.length)];
alert('We are going to eat: ' + thing);
    }
</script>
<style>
    @import url("styles.css");
</style>
</body>


</html>
