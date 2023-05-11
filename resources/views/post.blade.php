@extends('layouts.frontend.app')
@section('content')
    <section class="top-section-area section-gap">
        <div class="container">
            <div class="row justify-content-between align-items-center d-flex">
                <div class="col-lg-8 top-left">
                    <h1 class="text-white mb-20" style="font-family: 'Work Sans';">Post Details</h1>
                    <ul>
                        <li>
                            <a href="index.html" style="font-family: 'Work Sans';">Home</a><span class="lnr lnr-arrow-right"></span>
                        </li>
                        <li>
                            <a href="category.html"  style="font-family: 'Work Sans';">Category</a><span class="lnr lnr-arrow-right"></span>
                        </li>
                        <li><a href="single.html"  style="font-family: 'Work Sans';">Fashion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-section Area -->

    <!-- Start post Area -->
    <div class="post-wrapper pt-100">
        <!-- Start post Area -->
        <section class="post-area">
            <div class="container"  style="font-family: 'Work Sans';">
                <div class="row justify-content-center">
                    <div class="col-lg-8"  style="font-family: 'Work Sans';">
                        <div class="single-page-post">
                            <img class="img-fluid" src="{{ asset('storage/post/' . $post->image) }}" alt="$post->image" />
                            <div class="top-wrapper">
                                <div class="row d-flex justify-content-between">
                                    <h2 class="col-lg-8 col-md-12 text-uppercase"  style="font-family: 'Work Sans';">
                                        {{ $post->title }}
                                    </h2>
                                    <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                        <div class="desc">
                                            <h2  style="font-family: 'Work Sans';">{{ $post->user->name }}</h2>
                                            <h3  style="font-family: 'Work Sans';">{{ $post->created_at->diffForHumans() }}</h3>
                                        </div>
                                        <div class="user-img">
                                            <img src="{{ asset('storage/user/' . $post->user->image) }}"
                                                alt="{{ $post->user->image }}" width="50px" />
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-muted"  style="font-family: 'Work Sans';">{{ $post->category->name }}</h4>
                            </div>
                            <div class="tags" style="font-family: 'Work Sans';">
                                <ul  style="font-family: 'Work Sans';">
                                    @foreach ($post->tags as $tag)
                                        <li><a href="#">{{ $tag->name }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="single-post-content" style="font-family: 'Work Sans';">
                                {!! $post->body !!}
                            </div>
                            <div class="bottom-wrapper">
                                <div class="row">
                                    <div class="col-lg-4 single-b-wrap col-md-12" style="font-family: 'Work Sans';">
                                        @guest
                                            <i class="fa fa-heart-o" aria-hidden="true"  style="font-family: 'Work Sans';"></i> {{ $post->likedUsers->count() }}
                                            people like this
                                        @else
                                            <a href="#"
                                                onclick="document.getElementById('like-form-{{ $post->id }}').submit();"><i
                                                    class="fa fa-heart" aria-hidden="true"
                                                    style="color:{{ Auth::user()->likedPost()->where('post_id', $post->id)->count() > 0? 'red': '' }}"></i></a>
                                            {{ $post->likedUsers->count() }} people like this

                                            <form action="{{ route('post.like', $post->id) }}" method="POST"
                                                style="display:none" id="like-form-{{ $post->id }}">
                                                @csrf
                                            </form>
                                        @endguest
                                    </div>
                                    <div class="col-lg-4 single-b-wrap col-md-12">
                                        <i class="fa fa-eye" aria-hidden="true"></i> {{ $post->view_count }}
                                        Views
                                    </div>
                                    <div class="col-lg-4 single-b-wrap col-md-12">
                                        <i class="fa fa-comment-o" aria-hidden="true"></i> {{ $post->comments->count() }}
                                        comments
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 single-b-wrap col-md-12">
                                            <h5
                                                style="    font-size: 14px;
                                            margin-top: 40px;">
                                                Share it on your Social Accounts </h5>
                                        </div>

                                        <div class="col-lg-6 single-b-wrap col-md-12 mt-3"  id="social-links">
                                            <ul class="social-icons">
                                                <li>
                                                    <a href="#"id="facebook-btn"><i class="fa fa-facebook" aria-hidden="true"
                                                            style="font-size:15px;
                                                     /* margin-top: 40px; */color:#1877f2!important;
                                                     margin-left: 203px;"></i></a>
                                                </li>

                                                <li>
                                                    <a href="#" id="envelope-btn"><i class="fa fa-envelope-o" aria-hidden="true"
                                                            style="font-size: 15px;
                                                         color: red;"></i></a>
                                                </li>

                                                <li>
                                                    <a href="#" id="google-btn"><i class="fa fa-google-plus" aria-hidden="true"
                                                            style="color:red;
                                                   float: left;
                                                   margin-left: 278px;
                                                   font-size: 15px;
                                                 margin-top:-34px;"></i></a>
                                                </li>

                                                <li>
                                                    <a href="#" id="linkedin-btn"><i class="fa fa-linkedin" aria-hidden="true" style="color:blue;

                                                 float: left;
                                                 margin-left:322px;
                                                 font-size: 17px;
                                                 margin-top: -58px;    "></i></a>
                                                </li>

                                                <li>
                                                    <a href="#" id="whatsapp-btn"><i class="fa fa-whatsapp" aria-hidden="true"
                                                            style="color:green;

                                                   float: left;
                                                   margin-left:363px;
                                                   font-size: 17px;
                                                   margin-top: -79px; "></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 single-b-wrap col-md-12 mt-4">
                                            <button class="btn btn-info" style="color: black;
                                            background-color: #17a2b8;
                                            border-color: #17a2b8;
                                            margin-top: 87px;
                                            margin-left: -142px;
                                            display:none; font-family: 'Work Sans';"

                                            id="shareBtn">
                                                <i class="fa fa-share"></i> Share

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Start comment-sec Area -->
                            <section class="comment-sec-area pt-80 pb-80">
                                <div class="container">
                                    <div class="row flex-column">
                                        <h5 class="text-uppercase pb-80"></h5>
                                        <br />
                                        <!-- Frist Comment -->
                                        <div class="comment">
                                            @foreach ($post->comments as $comment)
                                                <div class="comment-list">
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb">
                                                                <img src="{{ asset('storage/user/' . $comment->user->image) }}"
                                                                    alt="{{ $comment->user->image }}" width="50px" />
                                                            </div>
                                                            <div class="desc">
                                                                <h5><a href="#">{{ $comment->user->name }}</a></h5>
                                                                <p class="date">
                                                                    {{ $comment->created_at->format('D,d M Y H :i') }}</p>
                                                                <p class="comment">
                                                                    {{ $comment->comment }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <button class="btn-reply text-uppercase" id="reply-btn"
                                                                onclick="showReplyForm('{{ $comment->id }}','{{ $comment->user->name }}')">reply
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if ($comment->replies->count() > 0)
                                                    @foreach ($comment->replies as $reply)
                                                        <div class="comment-list left-padding">
                                                            <div class="single-comment justify-content-between d-flex">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('storage/user/' . $reply->user->image) }}"
                                                                            alt="{{ $reply->user->image }}"
                                                                            width="50px" />
                                                                    </div>
                                                                    <div class="desc">
                                                                        <h5><a href="#">{{ $reply->user->name }}</a>
                                                                        </h5>
                                                                        <p class="date">
                                                                            {{ $reply->created_at->format('D,d M Y H:i') }}
                                                                        </p>
                                                                        <p class="comment">
                                                                            {{ $reply->message }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button class="btn-reply text-uppercase"
                                                                        id="reply-btn"
                                                                        onclick="showReplyForm('{{ $comment->id }}','{{ $reply->user->name }}')">reply
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    @guest
                                                    @endif

                                                    <div class="comment-list left-padding"
                                                        id="reply-form-{{ $comment->id }}" style="display: none">
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb">
                                                                    <img src="img/asset/c2.jpg" alt="" />
                                                                </div>
                                                                <div class="desc">
                                                                    <h5><a href="#">{{ Auth::user()->name }}</a></h5>
                                                                    <p class="date">{{ date('D,d,M,Y H:i') }}</p>
                                                                    <div class="row flex-row d-flex">
                                                                        <form
                                                                            action="{{ route('reply.store', $comment->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <div class="col-lg-12">
                                                                                <textarea id="reply-form-{{ $comment->id }}-text" cols="60" rows="2" class="form-control mb-10"
                                                                                    name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                                                                    required=""></textarea>
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn-reply text-uppercase ml-3">Reply</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endguest
                                        </div>
                                        <!-- 2nd Comment -->
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                            <!-- End comment-sec Area -->

                            <!-- Start commentform Area -->
                            <section class="commentform-area pb-120 pt-80 mb-100">
                                @guest
                                    <div class="container">
                                        <h4 class="py-3">Please Log in to Comment</h4>

                                    </div>
                                @else
                                    <div class="container">
                                        <h5 class="text-uppercas pb-50">Leave a Reply</h5>
                                        <div class="row flex-row d-flex">

                                            <div class="col-lg-12">
                                                <form action="{{ route('comment.store', $post->id) }}" method="POST">
                                                    @csrf
                                                    <textarea class="form-control mb-10" name="comment" placeholder="Messege" onfocus="this.placeholder = ''"
                                                        onblur="this.placeholder = 'Messege'" required=""></textarea>
                                                    <button type="submit" class="primary-btn mt-20">Comment</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                @endguest
                            </section>

                            <!-- End commentform Area -->
                        </div>
                    </div>
                    {{-- @include('layouts.frontend.partials.sidebar') --}}

                </div>
            </div>
        </section>
        <!-- End post Area -->
    </div>
@endsection
@push('footer')
    <script type="text/javascript">
        function showReplyForm(commentId, user) {
            var x = document.getElementById(`reply-form-${commentId}`);
            var input = document.getElementById(`reply-form-${commentId}-text`);

            if (x.style.display === "none") {
                x.style.display = "block";
                input.innerText = `@${user} `;

            } else {
                x.style.display = "none";
            }
        }

        //social share link

        const facebookBtn = document.getElementById('facebook-btn');
        const envelopeBtn = document.getElementById('envelope-btn');
        const googleBtn = document.getElementById('google-btn');
        const linkedinBtn = document.getElementById('linkedin-btn');

        const whatsappBtn = document.getElementById('whatsapp-btn');


        let postUrl = encodeURI(document.location.href);
        let postTitle= encodeURI('{{ $post->title }}');

        facebookBtn.setAttribute("href",`https://www.facebook.com/share.php?u=${postUrl}`);
        envelopeBtn.setAttribute("href",`https://mail.google.com/mail/?view=cm$su=${postTitle}$body=${postUrl}`);
        googleBtn.setAttribute("href",`https://www.plus.google.com/share?url=${postTitle}`);
        linkedinBtn.setAttribute("href",`https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`);
        whatsappBtn.setAttribute("href",`https://wa.me/?text=${postTitle}${postUrl}`);

        const  socialLinks = document.getElementById('social-links');

        const shareBtn = document.getElementById('shareBtn');
        if(navigator.share){
            shareBtn.style.display = 'block';
            socialLinks.style.display = 'none';
            shareBtn.addEventListener('click',() =>{
                navigator.share({
                    title:postTitle,
                    url:postUrl

                }).then((result) => {
                    alert('Thank u for sharing')
                    }).catch((err) => {
                        console.log(err);
                    });
            });
        }
        else{

        }
    </script>
@endpush
