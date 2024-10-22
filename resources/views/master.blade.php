<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration form</title>
  
    <style>
        footer {
  text-align: center;
  padding: 3px;
  
  color: black;
}
.i {
        float: left;
        
      }
      
        .header {
          
  padding: 5px;
  text-align: center;
  background: rgb(228, 151, 190);
  color: black;
  font-size: 20px;
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <img class ="i" src="{{ asset('filename.jpg') }}" width="100" height="150" >
    <div class="header">
                       
            <h1>REGISTRATION FORM</h1>
           <h4>PLEASE FILL IN THE FORM BELOW</h4>
       
        
      </div>
        <footer>
            <p>&copy; 2023 - Registration Page</p>
         </footer>
        
        @yield('content')
        
    </div>
    
</body>
</html>
