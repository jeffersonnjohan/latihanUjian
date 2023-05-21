<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Post</title>
</head>
<body>

    <h1>All Post</h1>
    
    @foreach($posts as $post)
        <h1>Judul post : {{ $post->title }}</h1>
        <p>Berikut comment yang dimiliki postingan tersebut:</p>

        <ul>
            @foreach ($post->comments as $comment)
                <li>Message: {{ $comment->message }}</li>
                <p>Comment ini dimiliki oleh:: {{ $comment->post->title }}</p>
            @endforeach
        </ul>
    @endforeach
</body>
</html>

