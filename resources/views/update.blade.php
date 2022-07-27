<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input id="myID" type="text" placeholder="ID">
    <input id="name" type="text" placeholder="name"><br><br>
    <input id="email" type="email" placeholder="email"><br><br>
    <button onclick="update()">update</button>


    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>