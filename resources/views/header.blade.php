<!DOCTYPE html>
<html>

<head>

    <title>Registration Page</title>
    <meta charset="UTF-8">
    <style>
        .i {
            float: left;
            position: absolute;
            padding-top: 15px;
        }

        .header {

            padding-bottom:5px;
            padding-top:5px;
            text-align: center;
            background: rgb(228, 151, 190);
            color: black;
            font-size: 20px;
        }
    </style>


</head>

<body>
    <img class="i" src="{{ asset('css/filename.jpg') }}" width="130" height="130">
    <div class="header">

        <h1>{{__('formText.registration')}}</h1>
        <h4>{{__('formText.fill')}}</h4>


    </div>
</body>

</html>