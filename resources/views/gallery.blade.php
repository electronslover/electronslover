@extends('layouts.app')



@section('content')

    </div> <!-- end of header wrapper -->
<div id="tooplate_main_wrapper">
    <div id="tooplate_top"></div>

    <div id="tooplate_main">
        <div id="tooplate_content_wrapper">
            <div id="tc_top"></div>

            <div id="tooplate_content">
                <h1>Gallery</h1>
                <p>Credit goes to <a href="http://www.pirolab.it" target="_blank"> Diego Valobra</a> for piroxbox. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus rutrum tellus at varius. Ut sit amet arcu elit, in posuere arcu. Phasellus in sapien vel felis imperdiet ullamcorper.</p>

                <div class="cleaner h40"></div>

                <div id="gallery">
                    <div class="gallery_box">
                        <a href="images/gallery/image_01_b.jpg" class="pirobox gallery_img image_wrapper" title="Project 1"><img src="images/gallery/image_01.jpg" alt="Image 01" /></a>
                        <div class="right">
                            <h5>Project 1</h5>
                            <p><em>Cras sed sem sapien. Proin fermentum porta ligula, ac hendrerit lorem accumsan eu. Nam sodales orci at tortor tristique tincidunt.</em></p>
                            <p>Quisque sed mauris velit, a congue lorem. Aliquam quis mi sed libero dapibus iaculis a et mi. Egestas diam quis dapibus. Quisque sed mauris velit, a congue lorem. </p>
                            <a href="#" class="more float_r">Visit site</a>
                        </div>
                        <div class="cleaner"></div>
                    </div>

                    <div class="gallery_box">
                        <a href="images/gallery/image_02_b.jpg" class="pirobox gallery_img image_wrapper" title="Project 2"><img src="images/gallery/image_02.jpg" alt="Image 02" /></a>
                        <div class="right">
                            <h5>Project 2</h5>
                            <p><em>Cras id tortor nisl. Nullam ante diam, interdum sit amet. Velit justo sodales lectus, ac porta nunc eros vitae.  Morbi nec velit magna.</em></p>
                            <p>Maecenas eros ipsum, tincidunt vitae ultricies id, blandit quis nulla. Fusce sem nulla, rutrum ac suscipit eget, commodo vitae est. In at orci arcu.</p>
                            <a href="#" class="more float_r">Visit site</a>
                        </div>
                        <div class="cleaner"></div>
                    </div>

                    <div class="gallery_box last_gallery_box">
                        <a href="images/gallery/image_03_b.jpg" class="pirobox gallery_img image_wrapper" title="Project 3"><img src="images/gallery/image_03.jpg" alt="Image 03" /></a>
                        <div class="right">
                            <h5>Project 3</h5>
                            <p><em>Nam vel mauris eu lacus vehicula rhoncus nec nec tellus. Sed felis tellus, interdum eget tincidunt nec, aliquam vel ligula.Nam vel mauris eu lacus.</em></p>
                            <p>Sodales nec, mollis lobortis sapien. Vestibulum pharetra tortor vitae velit pretium rhoncus integer consectetur enim eget. Pellentesque et semper nisi.</p>
                            <a href="#" class="more float_r">Visit site</a>
                        </div>

                        <div class="cleaner"></div>
                    </div>

                </div> <!-- end of gallery -->
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









