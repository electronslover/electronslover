
@extends('layouts.app')



@section('content')
    @foreach ($posts as $post)
    <div id="tooplate_main_wrapper">
        <div id="tooplate_top"></div>

        <div id="tooplate_main">
            <div id="tooplate_content_wrapper">

                <div id="tc_top"></div>

                <div id="tooplate_content">
                    <div class="post_box">

                        <div class="post_header">
                            <p class="date">
                                13 <span>May 2048</span>
                            </p>
                            <p class="meta">
                                Posted in <a href="#">Internet</a>, <a href="#">Marketing</a> by <a href="#">{{$post->user->name}}</a>
                            </p>

                            <div class="cleaner"></div>
                        </div>

                        <h2>{{$post->title}}</h2>
                        <img src="{{$post->image_path}}" alt="Image 01" />
                        <p>{{$post->description}}

                       </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risus consequat id hendrerit ipsum molestie. Morbi quis lorem tellus. Curabitur vitae risus sem. Mauris venenatis quam non nunc convallis tincidunt. Aliquam tempus neque nec nisl pellentesque nec dignissim lorem cursus. Integer cursus ultrices massa non vehicula. Etiam vitae lacus eu arcu rutrum fermentum. Nullam fringilla imperdiet magna, id sagittis nisl feugiat at. Donec eget lacus eros, et blandit odio.</p>

                        <p>Maecenas elementum, purus vitae hendrerit dictum, magna dolor interdum lacus, sit amet lobortis urna ligula id lacus. Maecenas quis venenatis eros. Nulla sagittis elit in enim ullamcorper vitae tincidunt metus bibendum. Mauris pulvinar purus porta justo cursus eget ultricies lectus luctus. Quisque ut risus nibh. Etiam consequat elit eu nisi porta ac auctor nisl ultrices. Morbi consectetur laoreet augue vel varius. Nullam bibendum tempor est nec cursus.</p>

                        <div class="cleaner"></div>
                    </div>

                    <h3>Comments</h3>

                    <div id="comment_section">
                        <ol class="comments first_level">

                            <li>
                                <div class="comment_box commentbox1">

                                    <div class="gravatar">
                                        <img src="images/avator.png" alt="author" />
                                    </div>

                                    <div class="comment_text">
                                        <div class="comment_author">Thomas<span class="date">November 7th, 2048</span><span class="time">1:29 pm</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risusLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet.</p>
                                        <div class="btn_more float_r"><a href="#"><span>+</span> Reply</a></div>
                                    </div>

                                    <div class="cleaner"></div>
                                </div>
                            </li>

                            <li>
                                <ol class="comments">

                                    <li>
                                        <div class="comment_box commentbox2">

                                            <div class="gravatar">
                                                <img src="images/avator.png" alt="author" />
                                            </div>
                                            <div class="comment_text">
                                                <div class="comment_author">Mojo<span class="date">November 8th, 2048</span><span class="time">3:36 pm</span></div>
                                                <p>Morbi vehicula hendrerit lorem, eu eleifend magna accumsan.</p>
                                                <div class="btn_more float_r"><a href="#"><span>+</span> Reply</a></div>
                                            </div>

                                            <div class="cleaner"></div>
                                        </div>

                                    </li>

                                    <li>
                                        <ol class="comments">

                                            <li>
                                                <div class="comment_box commentbox1">

                                                    <div class="gravatar">
                                                        <img src="images/avator.png" alt="author" />
                                                    </div>
                                                    <div class="comment_text">
                                                        <div class="comment_author">Booker<span class="date">November 9th, 2048</span><span class="time">6:20 pm</span></div>
                                                        <p> Vestibulum nec purus neque. Nam vel mauris eu lacus.</p>
                                                        <div class="btn_more float_r"><a href="#"><span>+</span> Reply</a></div>
                                                    </div>

                                                    <div class="cleaner"></div>
                                                </div>


                                            </li>

                                        </ol>

                                    </li>
                                </ol>
                            </li>

                            <li>
                                <div class="comment_box commentbox1">

                                    <div class="gravatar">
                                        <img src="images/avator.png" alt="author" />
                                    </div>
                                    <div class="comment_text">
                                        <div class="comment_author">Oliva<span class="date">November 15th, 2048</span><span class="time">9:06 am</span></div>
                                        <p>Aliquam erat volutpat. Morbi pulvinar, libero convallis suscipit tempus, libero ligula dapibus nulla, sit amet congue erat elit egestas est.</p>
                                        <div class="btn_more float_r"><a href="#"><span>+</span> Reply</a></div>
                                    </div>

                                    <div class="cleaner"></div>
                                </div>
                            </li>

                            <li>
                                <div class="comment_box commentbox1">

                                    <div class="gravatar">
                                        <img src="images/avator.png" alt="author" />
                                    </div>
                                    <div class="comment_text">
                                        <div class="comment_author">Edward<span class="date">November 23th, 2048</span><span class="time">4:56 pm</span></div>
                                        <p>Cras et sagittis lacus. Curabitur laoreet nibh sit amet massa vehicula a condimentum magna condimentum. In ipsum lectus, feugiat non dapibus quis.</p>
                                        <div class="btn_more float_r"><a href="#"><span>+</span> Reply</a></div>
                                    </div>

                                    <div class="cleaner"></div>
                                </div>
                            </li>
                        </ol>
                    </div> <!-- end of comment -->

                    <div id="comment_form">
                        <h3>Leave your comment</h3>

                        <form action="#" method="get">

                            <div class="form_row">
                                <label>Name (* required )</label>
                                <br />
                                <input type="text" name="name" />
                            </div>
                            <div class="form_row">
                                <label>Email  (* required )</label>
                                <br />
                                <input type="text" name="name" />
                            </div>
                            <div class="form_row">
                                <label>Comment</label><br />
                                <textarea  name="comment" rows="" cols=""></textarea>
                            </div>
                            <input type="submit" name="Submit" value="Submit" class="submit_btn" />

                        </form>

                    </div>
                </div>
                <div id="tc_bottom"></div>
            </div> <!-- end of content wrapper -->

            <div id="tooplate_sidebar_wrapper">
                <div id="tooplate_sidebar_top"></div>

                <div id="tooplate_sidebar">

                    <div class="ads_250x250">
                        <a href="#"><img src="images/tooplate_ads.jpg" alt="banner" /></a>
                    </div>

                    <div class="sb_box">
                        <h3>Categories</h3>
                        <ul class="tooplate_list">
                            <li><a href="#">Aenean lacinia nunc id</a></li>
                            <li><a href="#">Cras sed neque et eros</a></li>
                            <li><a href="#">Donec eget massa eget</a></li>
                            <li><a href="#">Etiam eu velit sapien</a></li>
                            <li><a href="#">Integer hendrerit nisi</a></li>
                            <li><a href="#">Maecenas sit odio ut</a></li>
                            <li><a href="#">Phasellus tempus metus</a></li>
                            <li><a href="#">Sed iaculis orci eget est</a></li>
                        </ul>
                    </div>

                    <div class="sb_box">
                        <h3>Recent comments</h3>
                        <div class="recent_comment_box">
                            <a href="#">Praesent malesuada turpis</a>
                            <p>Duis mi elit, aliquet id euismod egestas, venenatis sit amet lectus.</p>
                        </div>

                        <div class="recent_comment_box">
                            <a href="#">Nullam consequat mauris </a>
                            <p>Etiam porttitor metus ac est mattis luctus. Integer mi tortor, tempus eget.</p>
                        </div>

                        <div class="recent_comment_box ">
                            <a href="#"> Sed bibendum augue in</a>
                            <p>Curabitur ullamcorper ultricies nisi.  Nam eget dui. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                        </div>

                        <div class="recent_comment_box">
                            <a href="#">Aenean feugiat mattis </a>
                            <p>Sed ultricies erat nec leo semper nec sollicitudin odio accumsan. </p>
                        </div>

                        <a href="#" class="more float_r">Read more</a>
                        <div class="cleaner"></div>
                    </div>

                    <div class="cleaner"></div>
                </div>

                <div id="tooplate_sidebar_bottom"></div>
            </div> <!-- end of sidebar wrapper -->

            <div class="cleaner"></div>
        </div>

        <div id="tooplate_bottom"></div>
    </div> <!-- end of main wrapper -->
    @endforeach
@endsection
