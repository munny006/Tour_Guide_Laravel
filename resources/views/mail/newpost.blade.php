<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Post Available</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container{
            max-width: 540px;
            height: auto;
            margin: auto;
            /* border: 1px solid #333; */
            display: flex;
            flex-direction: column;
        }
        .navbar{
            max-width: 540px;
            display: flex;
            justify-content: center;
            padding: 10px 0px;
        }
        .navbar img{
            width: 100px;
            height: auto;
            margin: auto;
        }
        .post{
            padding: 0 15px;
        }
        .post img{
            position: relative;
            width: 100%;
            margin-bottom: 10px
        }
        .post .post-info{
            margin-top: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }
        .post .post-info h2{
            color: rgb(30, 165, 255);
        }
        .post-info .author {
            display: flex;
        }
        .post-info .author p{
           font-size: 16px;
           color: rgb(189, 189, 189)
        }
        .post-info .author .author-img img{
            width: 50px;
        }
        .post .post-body{
            margin-bottom: 20px;
        }
        .btn{
            color: #ffff;
            background: rgb(26, 144, 255);
            outline: none;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 70px;
        }
        .btn:hover{
            background: rgb(19, 113, 202);
        }
        .footer{
            width: 100%;
            height: 70px;
            background: rgb(48, 48, 48);
            margin-top: 30px;
            padding: 10px 8px;
        }
        .footer p{
            color: #ffff;
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- <div class="navbar">
            <img src="{{url('frontend/img/sitelogo.png')}}" alt="logo" />
        </div> --}}
    </div>
    <div class="container">
        <div class="post">
            <img src="{{asset('storage/post/'.$post->image)}}" alt="" class="img-fluid">
            <h2>{{ $post->title }}</h2>
            <div class="post-info">
                <h2>{{$post->category->name}}</h2>
                <div class="author">
                    <div class="author-name">
                        <h3>{{$post->user->name}}</h3>
                        <p>{{$post->created_at->diffForHumans()}}</p>
                    </div>
                    <div class="author-img">
                        <img src="{{asset('storage/user/'.$post->user->image)}}" alt="" width="50px" height='auto'>
                    </div>
                </div>
            </div>
            <p class="post-body">{!!Str::limit($post->body, 300)!!}</p>
            <p class="pt-20">
                <i class="fa fa-heart-o ml-20"></i>
            <a href="#" style="text-decoration: none;color:black"> {{ $post->likedUsers->count() }} Like   </a>
            <i class="fa fa-comments">  </i>
            <a href="#" style="text-decoration: none;color:black">    {{ $post->comments->count() }} Comment</a>
        </p>
            <a href="{{route('post',$post->slug)}}" class="btn">Read More</a>
        </div>
        <div class="footer text-center">
            <p>This mail is from myiotlab.in.</p>
            <p>© <script>let t = new Date(); document.write(t.getFullYear());</script> myiotlab. All rights reserved.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
