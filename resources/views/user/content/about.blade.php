@extends('user.layout')
@section('title')About-us | HaiLuaMobile @stop
@section('content')

{{-- @section('breadcrumb') --}}

    <a href="{{ route('user/about') }}" class="bc-item active">About-us</a>
{{-- @stop --}}
{{-- @include('user.content.section.sec-thanh-dieu-huong') --}}

<style>
    .profile-box {
        overflow: hidden;
        position: relative;
    }

    .profile-box img {
        padding: 10%
        width: 100%;
        height: auto;
    }

    .profile-box .box-content {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: all 0.3s ease 0.5s;
    }

    .profile-box:before,
    .profile-box:after,
    .profile-box .box-content:before,
    .profile-box .box-content:after,
    .profile-box .box-overlay {
        content: "";
        width: 20%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transform: scale(1.2);
        transition: all 0.3s ease 0.1s;
    }

    .profile-box:after {
        left: 20%;
        transition-delay: 0.2s;
    }

    .profile-box .box-content:before {
        left: 40%;
        transition-delay: 0.3s;
    }

    .profile-box .box-content:after {
        left: 60%;
        transition-delay: 0.4s;
    }

    .profile-box .box-overlay {
        left: 80%;
        transition-delay: 0.5s;
    }

    .profile-box:hover:before,
    .profile-box:hover:after,
    .profile-box:hover .box-content:before,
    .profile-box:hover .box-content:after,
    .profile-box:hover .box-overlay {
        opacity: 1;
        transform: scale(1);
    }

    .profile-box .hidden-content {
        width: 100%;
        color: #fff;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        opacity: 0;
        z-index: 1;
        transform: translate(-50%, -50%) scale(1.5);
        transition: all 0.3s ease 0.5s;
    }

    .profile-box:hover .hidden-content {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    .profile-box .fullname {
        font-size: 25px;
        font-weight: 400;
        text-transform: uppercase;
        margin: 0;
    }

    .profile-box .job-title {
        display: inline-block;
        font-size: 16px;
        font-style: italic;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 5px 0 20px 0;
    }

    /* Start: Contact Page ---------------------------- */
    .snow-bg {
        background: snow;
    }

    .img-bg {
        background-image: url(Media/carousel/contact-img.jpg);
        background-position: center;
        background-size: cover;
    }

    .contact-heading {
        padding: 0 15px;
        justify-content: center;
    }

    .contact-heading>h1 {
        font-size: 100px;
        font-weight: 500;
        letter-spacing: 2px;
    }

    .contact-heading>p {
        font-size: 18px;
        color: darkgrey;
    }

    .send-btn {
        width: 100%;
        font-size: 18px;
        letter-spacing: 1.5px;
        /* background: rgba(0,0,0,0.8); */
        background-color: black;
        color: snow;
        border: 0;
        text-transform: uppercase;
        transition: all 200ms;
        transition-delay: 0.1s;
    }

    .send-btn:hover {
        color: black;
        background: #ffe5d8;
    }

    .contact-img {
        padding: 30px 0;
    }

    .info-heading h3 {
        font-size: 50px;
        letter-spacing: 1.5px;
    }

    .info-heading h3::after {
        display: block;
        content: "";
        width: 100%;
        height: 1px;
        background: black;
        margin-top: 10px;
        transition: all 200ms ease-out;
    }

    .info-content {
        padding-top: 20px;
        line-height: 50px;
    }

    .info-content>p {
        font-size: 20px;
        font-weight: 300;
    }

    .info-content a {
        color: black;
        text-decoration: none;
        font-size: 20px;
        font-weight: 300;
    }
</style>

{{-- <!-- Start: Right-side-bar -->
<div class="right-side-bar">
    <a href="#"><span class="fa-icon fa fa-facebook"></span></a>
    <a href="#"><span class="fa-icon fa fa-instagram"></span></a>
    <a href="#"><span class="fa-icon fa fa-twitter"></span></a>
</div> --}}
<!-- End: Right-side-bar -->


<!-- Start: Section 1 -->
<div class="section container">
    <div class="row">
        <div class="col-md-4">
            <div class="ls-img">
                <img src="images/aboutus/aboutus08.png" width="100%" srcset="">
            </div>
        </div>
        <div class="col-md-8">
            <!-- Tiêu đề -->
            <div class="heading">
                <p>ABOUT US</p>
            </div>
            <!-- Tiểu sử -->
            <div class="bio text-justify">
                <p> Two rice shop is our first and most enthusiastic project. Ever since we started learning how to build a website using Laravel technology, Mysql Amin we have been excited and worked hard every day for this project. We have been tasked with creating a website that can provide customers with information about products.

                    The website is designed in a swashbuckling style with sweet, messy colors that are bold, white and black. We hope to be able to give our customers a pleasant and happy look when they visit the website.
                    
                    We can end their confusion about product differences by creating a comparison function so customers can see the differences between other products. Not only that, we also allow users to look up their favorite brands with filters easily. In addition, if customers have difficulty with how to choose a product, we create videos for consumers to watch to make a decision to choose the right product for them.
                    
                    This project was completed in almost a month with the contribution of a dedicated, dedicated and hard-working team of 4. Thank you for watching.
                    two rice shops.</p>
                <div class="text-center margin">
                    <a href="#profile" class="member-btn animated-hover">
                        Meet our members <span class=" arrow glyphicon glyphicon-chevron-down"
                            style="font-weight: 200; font-size: 18px"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Section 2 -->

<!-- Start: Section 2 -->
<div class="margin container">
    <div class="col-md-6">
        <div class="quote">
            <blockquote>Quality is the best business plan</blockquote>
        </div>
    </div>

</div>
<!-- End: Section 2 -->

<!-- Start: Section 3 -->
<div id="profile" class="margin container">
    <div class="text-center member">
        <p>Members</p>
    </div>
    <div class="row member-list">
        <!-- Member 1 -->
        <div class="col-md-4">
            <div class="profile-box">
                <img src="images/aboutus/aboutus08.png" alt="" srcset="">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Trần Văn NHi </h3>
                        <p class="job-title">Student</p> <br>
                        <p class="job-title">T1.2203.E1</p> <br>
                        <p class="job-title">Leader</p>

                        <ul class="icon-member">
                            <li><a href="https://www.facebook.com/akira.tran.104/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member 2 -->
        <div class="col-md-4">
            <div class="profile-box">
                <img src="Images/aboutus/aboutus0.jpg" alt="" srcset="">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Nguyễn Trần Thanh Liêm </h3>
                        <span class="job-title">Student</span> <br>
                        <p class="job-title">T1.2203.E1</p> <br>
                        <p class="job-title">data ăn nhậu</p>
                        <ul class="icon-member">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member 3 -->
        <div class="col-md-4">
            <div class="profile-box">
                <img src="Images/aboutus/aboutus03.jpg" alt="" srcset="">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Lý Đức Hào</h3>
                        <span class="job-title">Student</span> <br>
                        <p class="job-title">T1.2203.E1</p> <br>
                        <p class="job-title">feedback hút thuốc</p>

                        <ul class="icon-member">
                            <li><a href="https://www.facebook.com/kaydkull35/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="profile-box">
                <img src="Images/aboutus/aboutus09.png" alt="" srcset="" style="padding: 10px 10px">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Nguyễn Hữu Phú</h3>
                        <span class="job-title">T1.2203.E1</span> <br>
                        <p class="job-title">Student</p> <br>
                        <p class="job-title">ý chí nam nhi</p>

                        <ul class="icon-member">
                            <li><a href="https://www.facebook.com/huuphu1003/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="profile-box">
                <img src="Images/aboutus/aboutus3.jpg" alt="" srcset="">
                <div class="box-overlay"></div>
                <div class="box-content">
                    <div class="hidden-content">
                        <h3 class="fullname">Nguyễn Hoài Nam</h3>
                        <span class="job-title">T1.2203.E1</span> <br>
                        <p class="job-title">Student</p> <br>
                        <p class="job-title">Hút thuốc có lợi</p>

                        <ul class="icon-member">
                            <li><a href="https://www.facebook.com/nam.dubai.1811/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <!-- Start: Footer -->
<div class="row footer">

    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <img src="Images/logo2.jpg" width="150" height="60">
        </div>

        <!-- Contact Information -->
        <div class="contact">
            <p style="font-size: 20px">
                Vietnam </p>
            <p style="font-size: 20px;"></p>
            <p style="font-size: 20px;"></p>

        </div>
        <!-- Social Media -->
        <div class="social-icons">
            <div class="icons">
                <a href="#"><span class="fa-icon fa fa-facebook"></span></a>
            </div>

            <div class="icons">
                <a href="#"><span class="fa-icon fa fa-instagram"></span></a>
            </div>

            <div class="icons">
                <a href="#"><span class="fa-icon fa fa-twitter"></span></a>
            </div>
        </div>


    </div>
</div> --}}
<!-- End: Footer -->

<!-- Modal Member -->
{{-- <div class="modal fade" id="memberModal" role="dialog">
    <div class="modal-dialog modal-lg row">

        <!-- Modal content-->
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header text-center" style="padding:35px 50px; background: #ffe5d8">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="letter-spacing: 1.5px;">MEMBERSHIP</h4>
            </div>

            <!--Start: Modal Body -->
            <!-- Left-Body -->
            <div class="modal-body col-md-6" style="padding:40px 50px; background: #f4f9ff">
                <div class="text-center modal-header">
                    <h3>Log in </h3>
                </div>

                <form role="form" class="margin">

                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                        <input type="email" onfocus="show(this)" onblur="hide(this)" class="form-control"
                            id="usremail" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" onfocus="show(this)" onblur="hide(this)" class="form-control"
                            id="psw" placeholder="">
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>

                    <button type="submit" class="login-btn btn btn-block">Login</button>
                </form>

            </div>
            <!-- Right-Body -->
            <div class="modal-body col-md-6 bg-member" style="padding:40px 50px;">
                <div class="text-center modal-header">
                    <h3>Log in with</h3>
                </div>

                <div class="social-platform margin">
                    <ul class="social-list">
                        <li><a href="#facebook"><i class="fb fa-icon fa fa-facebook-f"></i></a></li>
                        <li><a href="#twitter"><i class="twt fa-icon fa fa-twitter"></i></a></li>
                        <li><a href="#google"><i class="gg fa-icon fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

            </div>
            <!-- End: Modal Body -->
        </div>
    </div>
</div> --}}
{{-- @include('user.content.section.sec-logo') --}}
{{-- @stop --}}
</body>

</html>
@endsection
