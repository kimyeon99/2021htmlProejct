

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registration Form In Tailwind CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<style type="text/css">
      body{
      background-image: url(https://unsplash.com/photos/EZRYF6UX6QM/download?force=true&w=1920);
      background-size: cover;
      background-position: center;
      font-family: 'Raleway', sans-serif;

      }
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
      }
      input{
      outline: none;
      border: none;
      background: none;
      border-bottom: 1px solid #fff;
      border-radius: 0px !important;
      }
      input:focus, input:hover {
      border: none;
      margin: 0 auto;
      background: none;
      box-shadow: none;
      border-bottom: 1px solid #ddd;
      }
      form{
      box-shadow: 1px 0 10px 15px rgba(0,0,0,.5);
      }
      button{
      background-color: transparent;
      border:1px solid;
      font-size: 18px;
      }
      @media (min-width: 768px){
      .w-40{
      width: 30%;
      }
      }
      @media (max-width: 768px){
      .w-40{
      width: 80%;
      }
      }
    </style>
</head>
<body>
    <form action="{{ route('store') }}" method = "post">
@csrf
<div class="container flex justify-center items-center h-screen mx-auto ">
<form action="#" class="w-40 p-4">
<div class="p-3">
<input name = "user_id" class="outline-none py-2 pr-4 block w-full" type="text" placeholder="ID" required>
</div>
<div class="p-3">
<input name = "name" class="outline-none py-2 pr-4 block w-full" type="text" placeholder="Name" required>
</div>
<div class="p-3">
<input type="password" name="password" placeholder="Password" class="outline-none py-2 pr-4 block w-full" required>
</div>
<!--<div class="p-3">

    
<input class="outline-none py-2 pr-4 block w-full" type="password" placeholder="Confirm Password" required>
</div>-->
<div class="p-3 pt-4">
<button class="w-full text-white py-2 pr-4">Register</button>
</form>

</form>

</body>
</html>