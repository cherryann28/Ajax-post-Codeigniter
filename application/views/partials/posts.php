<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partials</title>
    <style>
        .container{
            width: 1100px;
            height: 650px;  
            margin-left: 100px;
            margin-top: -630px;
        }
        .posts{
            width: 200px;
            height: 200px;
            border: 1px solid black;
            display: inline-block;
            margin-left: 50px;
            margin-top: 10px;
            vertical-align: top;
        }
       .container h1{
            margin: 50px;
            padding: 10px;
        }
    </style>
</head>
<body>
   
    <div class="container">
    <h1>My Posts</h1>
<?php
  foreach($posts as $post)
  {  ?>
        <div class="posts">
            <p><?= $post['description'] ?></p>
        </div>
<?php
  }  ?>
   </div>

</body>
</html>
