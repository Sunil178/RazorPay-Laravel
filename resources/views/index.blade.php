<!doctype html>

<html>

<head>
    <title>Fight against COVID – 19  | ACT NOW by Benefactory</title>
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/benefactory_coronavirus.css') }}">
    <link rel="icon" href="assets/ACT_NOW_Logo_(Med).png" type="image/png" sizes="16x16">
    <meta name="theme-color" content="#BA3027" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="wrapper">
        <div class="section1">
            <div class="beneheader">
                <div class="benelogo">
                    <a href="http://benefactory.live/">
                        <img src="assets/Benefactory_White.png" height="80">
                    </a>
                </div>
                <div>

                </div>
                <div class="socialmedia">
                    <!-- <img src="Assets/instagram-icon.svg" height="17">
                    <img src="Assets/mail-icon.png" height="20"> -->

                </div>

            </div>

            <div class="section1content">
                <div class="mainheading ">
                    <span class="headertext">FIGHT AGAINST<br>COVID–19<span class="bene_dot"
                            style="color: #BA3027">.</span><br><span
                            style="line-height: 0px;">_</span></span>

                    <!-- <p class="head_desc">In the past 48 hours, 2000 new fires have started in the Amazon despite the
                        President’s ban on deliberate burning.</p> -->
                </div>
                <div class="donate_card">
                    <div class="donate_head">
                        <div class="donate_desc">
                            <img src="assets/ACT_NOW_Logo_(Med).png" height="50">
                            <span>Donate to sponsor masks for healthcare workers on the front line at government hospitals in Mumbai.</span>
                        </div>

                    </div>
                    <div>
                        <img src="assets/donate_header.svg" height="30px">
                        <form id="donate_form">
                            <input type="hidden" id="payment_id" name="payment_id">
                            <input type="hidden" id="signature" name="signature">
                            <input type="hidden" id="order_id" name="order_id">
                            <p>
                            <i class="fa fa-info-circle">&nbsp;<em><span style="color: #666666;">Only available to donors from India. Foreign contributions are not permitted.</span>
                                </em></i></p>

                            <label>NAME</label>
                            <div class="bene_form">
                                <input type="text" id="first_name" name="fname" value="" placeholder="First Name">
                                <input type="text" id="last_name" name="lname" value="" placeholder="Last Name">

                            </div><br>
                            <label>CONTACT</label>
                            <div class="bene_form">
                                <input type="text" id="email" name="email" value="" placeholder="E-mail">
                                <input type="text" id="mobile" name="mobile" value="" placeholder="Mobile">

                            </div><br>
                            <label>PAN CARD No</label>
                            <div class="bene_form">
                                <input type="text" id="pancard" name="pancard" value="" placeholder="Only if you require an 80G">
                                <select name="country" id="country" style="background-color: #fff">
                                    <option value="India" selected>India</option>
                                </select>    

                            </div><br><br>
                            
                            <label>AMOUNT</label>
                            <div class="bene_form">
                                <input type="text" id="amount" name="amount" value="" placeholder="Enter Amount">
                                <input class="inputbutton" name="donate" type="submit"  id="rzp-button1"  value="DONATE NOW">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section2">
            <img src="assets/the_situation_header.svg" height="25px">
            <div class="section2image" style="background-image: linear-gradient(
                to right,
                rgba(0, 0, 0, 0.8),
                rgba(0, 0, 0, 0.6)
              ),
              url(assets/mumbai.jpg);
              background-position: bottom;">


                <p>
                Maharashtra has the highest number of positive coronavirus cases in India. It is very likely that the number of cases is much higher than what is being declared, given that India has only 15 tests per MILLION.
                </p>

               
               

            </div>

        </div>
        <div class="section2">
            <img src="assets/healthcare_profesionals_header.svg" height="30px">
            <div class="section2image" style="background-image: linear-gradient(
                to right,
                rgba(0, 0, 0, 0.8),
                rgba(0, 0, 0, 0.6)
              ),
              url(assets/covid-hospital.jpg);
              background-position: center;">


                <p>
                    

                Doctors and nurses are in desperate need for surgical masks owing to huge shortage in supplies. Civilians have also contributed to this shortage by hoarding masks. These masks are designed to be worn only once, but healthcare workers are compelled to use a single mask for 5 days, making the situation worse. Right now, they need more gear to guard themselves against infection.


                </p>

                

            </div>

        </div>

        <div class="section2">
            <img src="assets/pateince_header.svg" height="30px">
            <div class="section2image" style="background-image: linear-gradient(
                to right,
                rgba(0, 0, 0, 0.8),
                rgba(0, 0, 0, 0.6)
              ),
              url(assets/mask.jpg);
              background-position: center;">


                <p>
                    

                Masks are required for people with coronavirus symptoms, or for those who tested positive for it. However, they are also necessary to protect cancer and stroke patients in hospitals, who are particularly susceptible to coronavirus owing to their extremely low immunity.


                </p>

                

            </div>

        </div>

<!-- ================================== -->



<div class="section2">
            <img src="assets/the_plan_header_black.svg" height="25px">

              <p class="theplan" style="font-family: 'Inter', sans-serif">
              0% Fee: We do not charge any fee, your donations will be used in full to procure masks. Only a transaction fee will be deducted by the payment gateway.

              </p>
            <!-- <div >
                <p>
                <em>
                0% Fee: We do not charge any fee, your donations will be used in full to procure masks. Only a transaction fee will be deducted by the payment gateway.
                </em>

                </p>
            </div> -->
            <div class="section6image" style="background-image: linear-gradient(
                to right,
                rgba(0, 0, 0, 0.8),
                rgba(0, 0, 0, 0.6)
              ),
              url(assets/glove-handcombat.jpg);
              background-position: center;">


                <p>
                Currently, government hospitals are facing a massive shortage of masks for their health care professionals as well as their patients. These hospitals need 1 lakh masks for the next 10 days. However, this may increase depending on the situation.
                </p>
                <p>
                Healthcare is one word not two separate. So just make it one.
                </p>
                <p>

                    The price of a mask is typically much lower but with the shortage, suppliers have hiked the prices to about Rs 17. If we source it for cheaper, we will convey that to you too. If you know of any ISO/CE certified suppliers, please let us know.

                </p>

            </div>

        </div>


<!-- ============================= -->


        <div class="section3">
            <img src="assets/non_profit_header.svg" height="25px">
            <!-- <p>
                <em>The minimum donation to receive an 80G certificate is Rs. 1000.</em>
            </p> -->
            <br>
            <a href="https://anjeze.org/" target="_blank">
                <img class="nonprofitimg" src="assets/anjeze-logo.jpg" height="150px">
            </a>
            <br>

            <p>We have partnered with Anjeze Charitable Trust: </p>

            <ul style="max-width: 800px;">
                <li>Your donations will sponsor 3 ply disposable surgical masks (ISO/CE Certified) 
                </li>
                <br>
                <li>
                    The price of a mask is typically much lower but with the shortage, suppliers have hiked the prices to about Rs 17. If we source it for cheaper, we will convey that to you too. If you know of any ISO/CE certified suppliers, please let us know.

                </li>
                <br>
                <li>
                The minimum donation to receive an 80G certificate is Rs. 1000.
                </li>
            </ul>

                
        </div>
        <div class="section5">
            <div>
                <img style="margin-left: -22px;" class="sec4icons" src="assets/Benefactory_Black.png" height="90"><br>
                <p class="head_desc" style="font-family: 'Inter', sans-serif">
                    We at Benefactory are on a mission to change the way the world responds to urgent crises. Our Act
                    Now widget enables any online company to become a platform to collect donations for trusted
                    charities. In doing this, we channel a collective movement wherein multiple online companies and
                    millions of their customers can quickly make an impact when a crisis arises.
                </p>

            </div>

        </div>
        <div class="footer">
            <div>
                <span><a href="">Privacy Policy </a></span> &nbsp;&nbsp;|&nbsp;&nbsp; <span><a href="">Terms &
                        Conditions</a></span>
            </div>
            <br>
            <div>
                <span>© Copyright Benefactory 2020</span>
            </div>

        </div>

    </div>

</body>
</html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script type="text/javascript">
    

    $("#donate_form").on("submit", function(e) {
        form_data = new FormData(this);
      e.preventDefault()
      $.ajax({
        url: "/payment_start/",
        headers: {
          'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        method: 'POST',
        type: 'JSON',
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
          $('#loading_icon').show();
        },
        success: function(obj) {
            console.log(obj)
            options = JSON.parse(obj);

        var rzp = new Razorpay(options);
        rzp.open();

        },
        error: function(obj) {
          alert("outer error")
          $(".alert-danger").remove();
          console.log(obj.responseJSON.errors)
          $.each(obj.responseJSON.errors, function(key, val) {
            $('.errors').append("<ul style='list-style-type: none;'><li class='alert alert-danger'>" + val + "</li></ul>")
          });
        },
        complete: function() {
          $('#loading_icon').hide();
        }
      })
    })

</script>