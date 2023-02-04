@extends('user.layout')
@section('title')
Contact Us
@endsection
@section('content')
<a href="{{ route('user/contact') }}" class="bc-item active">Contact-US</a>
<style>
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
.contact-heading > h1 {
  font-size: 65px;
  font-weight: 500;
  letter-spacing: 2px;
}
.contact-heading > p {
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
    position: absolute;  right: 30px;  width: 400px;  border: 3px;  padding:  0px 10px  ;
   height: 100px;
    display: flex;
    text-align: right;
    justify-content: center;
    align-content: center;
    align-items: center;
  /* padding:  0px 200; */
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
.info-content > p {
  font-size: 20px;
  font-weight: 300;
}

.info-content a {
 right: 10%;
  color: rgb(61, 23, 199);
  text-decoration: none;
  font-size: 20px;
  font-weight: 300;
}
</style>
 

    <!-- Start: Contact Section-->
<div class="snow-bg section container">
    <div class="col-md-7">
        <div class="contact-heading text-center">
            <h1>Contact Us</h1>
            <p>Feel free to contact us any time. We will get back to you as soon as we can.</p>
        </div>

        <div class="col-md-2"></div>
        <div class="contact-form col-md-8">
            
         
         {{-- <form action="" method="POST" id="form1" role="form">
         
             <div class="form-group">
                 <label for="">Name</label>
                 <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" onfocus="show(this)" onblur="hide(this)" required>
             </div>

             <div class="form-group">
                 <label for="">Email</label>
                 <input type="text" class="form-control" id="email" name="email" onfocus="show(this)" onblur="hide(this)" placeholder="abc@gmail.com">
             </div>

             <div class="form-group">
                 <label for="">Message</label>
                 <textarea name="message" id="message" class="form-control" rows="5" onfocus="show(this)" onblur="hide(this)" required="required"></textarea>
             </div>
             
             <div class="text-center form-group">
            
                 <button type="button" class="send-btn btn btn-primary">Send</button>
             </div>
         </form> --}}
        </div>
        <div class="col-md-2"></div>

    </div>
    <center>
    <div class="col-md-5" >
        <div class="contact-img" >
        <img src="images/aboutus/aboutus08.png" width="100%" srcset="" height="auto">
        </div>
    </div>
    </center>
</div>
<!--End: Contact Section  -->

<!-- Start: Map & Info -->
<div class="margin container">
 <div class="col-md-8">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3192813592395!2d106.66408561446792!3d10.786840061951773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech%20Computer%20Education%20HCM!5e0!3m2!1sen!2s!4v1628272333196!5m2!1sen!2s" width="120%" height="600" style="border:100px;" allowfullscreen="" loading="lazy"></iframe>    </div>
 <div class="info col-md-4">
     <div class="info-heading">
         <h3>Info Contact</h3>
     </div>
     <div class="info-content">
         <a href="mailto:giftshop@gmail.com"><span style="font-size: 30px;" class="glyphicon glyphicon-envelope"></span>
         <p><span style="font-size: 30px;" class="glyphicon glyphicon-phone"></span> HaiLuaMobile </p>
         <p><span style="font-size: 30px;" class="glyphicon glyphicon-home"></span>  590 CMT8 St, Dist 3, HCM City</p>
         <p><span style="font-size: 30px;" class="glyphicon glyphicon-time"></span>Hotline : 0902 932 589</p>
         <p><span style="font-size: 30px;" class="glyphicon glyphicon-time"></span> 8:00 - 21:30 (T2-T7)</p>
        
        


     </div>    </div>
</div>

<!-- End: Map -->

@endsection