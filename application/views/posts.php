<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Posts</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $.get('/notes/index_html', function(res){
                $('#posts').html(res);
            });
            $('form').submit(function(){
                $.post($(this).attr('action'), $(this).serialize(), function(res){
                    $('#posts').html(res);
            });
            return false;
            });
        });
    </script>
    <style>
      form {
        margin-top: 500px;
        margin-left: 150px;
      }
    </style>
</head>
<body>
    <form action="/notes/create" method="post">
        <label>Add a note:</label><br>
        <textarea name="description"></textarea><br>
        <input type="submit" value="Post It!">
    </form>
    <div id="posts"></div>
</body>
</html>