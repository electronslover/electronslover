@extends('layouts.app')



@section('content')


    <div id="tooplate_main_wrapper">
        <div id="tooplate_top"></div>

        <div id="tooplate_main">
            <div id="tooplate_content_wrapper">
                <div id="tc_top"></div>

                <div id="tooplate_content">

                    <h2>Contact Information</h2>
                    <p>In ac libero urna. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>

                    <div class="cleaner h40"></div>

                    <div class="col_w300 float_l">

                        <h6>Company Name 1</h6>
                        144-135 Fusce sit amet urna in augue, <br />
                        Suspendisse et semper neque, 10110<br />
                        Venenatis ut turpis<br /><br />

                        Tel: 040-020-5520<br />
                        Fax: 040-080-4480<br />

                    </div>

                    <div class="col_w300 float_r">

                        <h6>Company Name 2</h6>
                        169-170 Duis lacinia dictum a mollis,<br />
                        PVestibulum auctor nam et, 11880 <br />
                        Nullam commodo dictum<br /><br  />

                        Tel: 012-044-2260<br />
                        Fax: 010-080-1100<br />
                    </div>

                    <div class="cleaner h40"></div>

                    <div id="contact_form">

                        <h4>Quick Contact Form</h4>
                        <form method="post" name="contact" action="#">

                            <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                            <div class="cleaner h10"></div>

                            <label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
                            <div class="cleaner h10"></div>

                            <label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>
                            <div class="cleaner h10"></div>

                            <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                            <div class="cleaner h10"></div>

                            <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                            <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />

                        </form>
                    </div>

                    <div class="cleaner h10"></div>
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
                            <p>Etiam porttitor metus ac est mattis luctus. Integer tortor. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
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


@endsection









