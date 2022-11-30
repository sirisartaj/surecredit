<form>
	Loan amount <input name="principal_amount" id="myRange" value="<?php echo $result['principal_amount']; ?>" onChange="rangechanged();">
	<span id="totamt"></span>
	<span id="processing_fee_text"></span>
	processing_fee<span id="processing_fee"></span>
	preclosure<span id="preclosure"></span>
	<input type="text" name="input_loanamt" id="input_loanamt" value="">
	<input type="text" name="input_processing_fee" id="input_processing_fee" value="">

</form>

$('#processing_fee_text').html("10% : ");
        $('#input_processing_fee').val(processing_fee_amt);
        $('#processing_fee').html(processing_fee_amt);
        $('#preclosure').html("Rs."+(parseInt(loanamt)+parseInt(loanamt * 0.035)+parseInt(processing_fee_amt)));

<?php exit;?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sure Credit</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://bellcom.digitaldot.in/surecredit/img/fav.png"> 
     <!-- styles -->
    <link rel="stylesheet" href="https://bellcom.digitaldot.in/surecredit/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bellcom.digitaldot.in/surecredit/css/bsnav.min.css">
    <link rel="stylesheet" href="https://bellcom.digitaldot.in/surecredit/css/icomoon.css">
    <link rel="stylesheet" href="https://bellcom.digitaldot.in/surecredit/css/slider.css">
    <link rel="stylesheet" href="https://bellcom.digitaldot.in/surecredit/css/masterslider.main.css">
    <link rel="stylesheet" href="https://bellcom.digitaldot.in/surecredit/css/accordion.min.css">
    <link rel="stylesheet" href="https://bellcom.digitaldot.in/surecredit/css/style.css">    </head>

<body>   <div id="load"></div>
  <!-- header -->
    <header class="fixed-top">
        <div class="containerCustom">
            <div class="navbar navbar-expand-xl bsnav"><a class="navbar-brand" href="https://bellcom.digitaldot.in/surecredit/index.php">
                    <img src="https://bellcom.digitaldot.in/surecredit/img/logo.svg" alt="">
                </a>
                <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav navbar-mobile mr-0">
                        <li class="nav-item"><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/personalLoans.php">Personal Loans</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/howitworks.php">How it Works</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/about.php">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/faq.php">Faq's</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/contact.php">Contact</a></li>
                    </ul>
                    <ul class="navbar-nav navbar-mobile ms-auto">
                        <li class="nav-item"><a class="nav-link applybtn" href="https://bellcom.digitaldot.in/surecredit/userApplyLoan.php">Apply Loan</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" 
                                aria-controls="offcanvasRight">Praveen.. <span class="icon-navbar icomoon"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar"></div>
            </div>
        </div>
    </header>
    <!--/ header -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Praveen Kumar N</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="profileNav">
                <div class="userProfilePic text-center">
                    <span class="icon-user icomoon"></span>
                </div>
                <ul class="userNav">
                    <li><a href="https://bellcom.digitaldot.in/surecredit/userDashboard.php">Dashboard</a></li>
                    <li><a href="https://bellcom.digitaldot.in/surecredit/userLoans.php">My Loans</a></li>                    
                    <li><a href="https://bellcom.digitaldot.in/surecredit/userkycDocuments">Documents</a></li>                                       
                    <li><a href="https://bellcom.digitaldot.in/surecredit/userRepayLoan">Repay Loan</a></li>
                </ul>  
                <a href="https://bellcom.digitaldot.in/surecredit/index.php" class="d-block w-100 btnCustom">Logout</a>              
            </div>
        </div>
    </div>    <!-- main -->
    <main class="subpageMain profileSubPage">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                 <!-- left nav bar -->
<div class="col-lg-4">
    <div class="shadowBox leftNav">                      
        <!-- user details -->
        <div class="userBase p-2 p-lg-4">
            <div class="d-flex">
                <figure>
                    <img class="userPic" alt="" src="https://bellcom.digitaldot.in/surecredit/img/profile_user.jpg">
                </figure>
                <article>
                    <h5 class="h5 text-uppercase fbold">Praveen Kumar</h5>
                    <p class="m-0 p-0 opacitytext">praveenn@gmail.com</p>
                    <p class="m-0 p-0 opacitytext ">+91 9642123254</p>
                </article> 
            </div>
            <p class="d-none d-lg-block">I constantly challenge myself to solve problems by design.</p>
            <a href="https://bellcom.digitaldot.in/surecredit/index.php" class="d-block w-100">Logout</a> 
        </div>
        <!--/ user details -->
        <!-- nav -->
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/userDashboard.php"><span class="icon-dashboard2 icomoon"></span> My Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/userLoans.php"><span class="icon-loan3 icomoon"></span> My Loans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/userkycDocuments.php"><span class="icon-verification icomoon"></span> Documents</a>
            </li>    
            <li class="nav-item">
                <a class="active" href="https://bellcom.digitaldot.in/surecredit/userApplyLoan.php"><span class="icon-register icomoon"></span> Apply Loan</a>
            </li>         
            <li class="nav-item">
                <a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/userRepayLoan.php"><span class="icon-money icomoon"></span>Repay Loan</a>
            </li>                           
        </ul>
        <!--/ nav -->
    </div>
</div>
<!--/ left nav bar -->                <!-- right section -->
                <div class="col-lg-8">
                    <div class="shadowBox">
                        <form action="<?php echo base_url().'/userApplyLoanstore'?>" method="post" >
                        <!-- content -->
                        <input type="text" name="loan_id" value="<?php echo $result['loan_id'];?>">
                        <div class="profileContent p-2 p-lg-4">
                            <!-- row -->
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <h5 class="flight h5 border-bottom mb-3 pb-3"><span class="fbold fblue">Apply Loan</span></h5>
                                </div>                              
                            </div>
                            <!--/ row -->
                            <!-- apply loan content -->
                              <p>I Wish to pay</p>
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-lg-6">
                                        <div class="form-check form-check-inline border p-3 d-block">
                                            <input class="form-check-input ms-2 me-3" type="radio" name="loantype" id="inlineRadio1" value="option1" <?php echo $result['loantype']=='option1'?'checked':'';?>>
                                            <label class="form-check-label" for="inlineRadio1">EMI for 95 Days (3 Months & 5 days) </label>
                                        </div>
                                    </div>
                                    <!--/ col -->
                                    <!-- col -->
                                    <div class="col-lg-6">
                                        <div class="form-check form-check-inline border p-3 d-block">
                                            <input class="form-check-input ms-2 me-3" type="radio" name="loantype" id="inlineRadio2" value="option2" <?php echo $result['loantype']=='option2'?'checked':'';?>>
                                            <label class="form-check-label" for="inlineRadio2">EMI for 65 Days (2 Months & 5 days) </label>
                                        </div>
                                    </div>
                                    <!--/ col -->
                                    <!-- col -->
                                    <div class="col-lg-6">
                                        <div class="form-check form-check-inline border p-3 d-block">
                                            <div class="d-flex">
                                                <input class="form-check-input ms-2 me-3" type="radio" name="loantype" id="inlineRadio3" value="option3" <?php echo $result['loantype']=='option3'?'checked':'';?>>
                                                <label class="form-check-label me-3" for="inlineRadio3">Enter the Days </label>
                                                <input type="text" class="w-50 m-0 align-self-center" id="days" name="days" value="" size="30" maxlength="2" onblur="rangechanged();" oninput="isValidNum(this.value)">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ col -->
                                </div>

                                <!-- ranger -->
                                <div class="ranger">
                                    <p>Drag the slider to display the current value.</p>
                                    <div class="slidecontainer py-3">
                                        <input type="range" min="1000" max="40000" value="<?php echo $result['principal_amount']; ?>" class="slider" id="myRange" step="1000" onChange="rangechanged(this);" name="loanamount">
                                        <p class="d-flex justify-content-between pt-3"><span>Loan Amount:</span> <span>Rs: <span id="demo" class="fbold"></span>.00</span></p>
                                    </div>
                                </div>
                                <!--/ ranger -->

                                <div class="priceItem py-2 mb-2 border-bottom">
                                    <p class="d-flex justify-content-between">
                                        <span>Total Loan Amount</span>
                                        <span id="totamt">Rs: 10,000.00</span>
                                        <input name="loanamt_actuval" value="" id="input_loanamt" type="hidden" />
                                    </p>
                                </div>

                                

                                <!-- <div class="priceItem py-2 mb-2 border-bottom">
                                    <p class="d-flex justify-content-between">
                                        <span>You will pay Extra Amount</span>
                                        <span>Rs: 2,250.00</span>
                                    </p>
                                </div> -->

                                <div class="priceItem py-2 mb-2 border-bottom">
                                    <p class="d-flex justify-content-between">
                                        <span>Bank Interest Rate</span>
                                        <span id="intrest"></span>
                                    </p>
                                </div>

                                <div class="priceItem py-2 mb-2 border-bottom">
                                    <p class="d-flex justify-content-between">
                                        <span id="">Processing Fee</span>
                                        <span id="processing_fee_text"></span>
                                        <span id="processing_fee">1.5%</span>
                                        <input type="hidden" name="processing_fee" id="input_processing_fee" value="" />
                                    </p>
                                </div>
                                <div class="priceItem py-2 mb-2 border-bottom">
                                    <p class="d-flex justify-content-between">
                                        <span> Total Payble Amount</span>
                                        <span id="tpayableamt"></span>
                                        <input name="tpayableamt" value="" id="input_tpayableamt" type="hidden" />
                                    </p>
                                </div>
                                <div class="row justify-content-center py-4">
                                    <div class="col-md-8 text-center">
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <h2 class="h2 fsbold mb-0 pb-0">preclosure Amount</h2>
                                                    <small>With in 30 days with 3.5% intrest</small>
                                                </div>
                                                <div class="ps-4">
                                                    <h1 class="h1 fbold" id="preclosure"></h1>                                        
                                                </div>
                                            </div>
                                    </div>
                                </div> 

                                
                                <div class="acceptterms pb-3">
                                    <span>I am Agree with</span>
                                    <div class="form-check form-check-inline ps-0 ">
                                        <input class="form-check-input ms-1" type="checkbox" value="option1">
                                        <label class="form-check-label ms-1"> <a href="https://bellcom.digitaldot.in/surecredit/terms.php" target="_blank">Terms &amp; Conditions</a> </label>
                                    </div>
                                    <div class="form-check form-check-inline">                                       
                                        <input class="form-check-input" type="checkbox" value="option2">
                                        <label class="form-check-label"><a href="https://bellcom.digitaldot.in/surecredit/privacy.php" target="_blank">Privacy Policy</a></label>
                                    </div>
                                </div>

                                  <!-- table -->
                             <div class="table-responsive customTable">
                                <table class="table table-striped table-hover repayloan">
                                    <thead>
                                        <tr>
                                        <th scope="col">Select Tenure</th>
                                        <th scope="col">Monthly EMI Amount</th>                                       
                                        </tr>
                                    </thead>
                                    <tbody id="monthlyemi">
                                                                             
                                    </tbody>
                                </table>
                            </div> 
                            <!--/ table -->

                                <button id="apply" class="btnCustom" type="submit">Apply Now</button>

                            <!--/ apply loan content -->
                        </div>
                    </form>
                        <!--/ content -->
                    </div>
                </div>
                <!--/ right section -->
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->

    </main>
    <!--/ main --> 

     <!-- footer -->
    <footer>
        <!-- top section -->
        <div class="topFooter">
            <a href="https://bellcom.digitaldot.in/surecredit/javascript:void(0)" class="moveTop" id="moveTop"><span class="icon-uparrow icomoon"></span></a>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- left col -->
                    <div class="col-md-4 leftFooterCol">
                        <a class="footerBrand my-3 d-inline-block" href="https://bellcom.digitaldot.in/surecredit/javascript:void(0)">
                            <img src="https://bellcom.digitaldot.in/surecredit/img/logo.svg" alt="" class="img-fluid">
                        </a>
                        <p class="border-bottom pb-3 footerabout">Our menu is a nod to street food vendors who help their customers
                            stay on-the-go by delivering quick tasty bites. We incorporated flavors from around the
                            world to offer a unique menu <a href="https://bellcom.digitaldot.in/surecredit/about.php" class="fsbold">Read More...</a>
                        </p>
                        <p><span class="icon-email01 icomoon"></span> info@surecredit.in </p>
                        <p><span class="icon-telephone2 icomoon"></span> +91 799518956</p>
                        <div class="footerSocial pb-3">
                            <a href="https://bellcom.digitaldot.in/surecredit/javascript:void(0)" class="d-inline-block text-center me-1"><span
                                    class="icon-facebook icomoon"></span></a>
                            <a href="https://bellcom.digitaldot.in/surecredit/javascript:void(0)" class="d-inline-block text-center me-1"><span
                                    class="icon-twitter2 icomoon"></span></a>
                            <a href="https://bellcom.digitaldot.in/surecredit/javascript:void(0)" class="d-inline-block text-center"><span
                                    class="icon-linkedin2 icomoon"></span></a>
                        </div>
                    </div>
                    <!--/ let col -->
                    <!-- right col -->
                    <div class="col-md-8 ">
                        <div class="rtFootrecol p-3 p-lg-5">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <h5 class="h5 fbold">Company</h5>
                                    <ul class="pt-3 footerLink">
                                        <li><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/index.php">Home</a></li> 
                                        <li><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/about.php">About us</a></li>                                        
                                        <li><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/contact.php">Contact</a></li>                                        
                                        <li><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/applyloan.php">Apply Loan</a></li>
                                        <li><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/personalLoans.php">Personal Loan</a></li>
                                    </ul>
                                </div>                               
                                <div class="col-md-3 col-sm-6">
                                    <h5 class="h5 fbold">Support</h5>
                                    <ul class="pt-3 footerLink">                                        
                                        
                                        <li><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/faq.php">Faq</a></li>
                                        <li><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/terms.php">Terms & Conditions</a></li>
                                        <li><a class="nav-link" href="https://bellcom.digitaldot.in/surecredit/privacy.php">Privacy Policy</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="h5 fbold">Get the app now</h5>
                                    <p>If you are looking for instant cash loan to meet your urgent needs, We are here! Get Loan without physical verification and without document in 1 hour with our AI-based system</p>
                                     <a href="https://bellcom.digitaldot.in/surecredit/javascript:void(0)" target="_blank">
                                        <img src="https://bellcom.digitaldot.in/surecredit/img/googleplayimg.png" alt="" class="appimgand">
                                    </a>                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ right col -->
                </div>
                <!--/ row -->
            </div>
        </div>
        <!--/ top section -->
        <!-- bottom footer -->
        <div class="bottomFooter text-center">
            <p class="m-0"><small>©Copyright 2021-SureCredit.com -All Rights Reserved</small></p>
        </div>
        <!--/ bottom footer -->
    </footer>
    <!--/ footer --> 
    <!-- scripts -->
    <script src="https://bellcom.digitaldot.in/surecredit/js/jquery-3.2.1.min.js"></script>
    <script src="https://bellcom.digitaldot.in/surecredit/js/bootstrap.min.js"></script>
    <script src="https://bellcom.digitaldot.in/surecredit/js/jquery.easing.min.js"></script>
    <script src="https://bellcom.digitaldot.in/surecredit/js/masterslider.min.js"></script>
    <script src="https://bellcom.digitaldot.in/surecredit/js/bsnav.min.js"></script>
    <script src="https://bellcom.digitaldot.in/surecredit/js/jquery.validate.min.js"></script>
    <script src="https://bellcom.digitaldot.in/surecredit/js/swiper.min.js"></script>
    <script src="https://bellcom.digitaldot.in/surecredit/js/accordion.min.js"></script>
    <script>
        var accordion = new Accordion('.accordion-container');
        var accordion = new Accordion('.accordion-container2');
        var accordion = new Accordion('.accordion-container3');

    </script>
    <!--[if IE lt 9]>
                <script src="https://bellcom.digitaldot.in/surecredit/js/html5-shiv.js"></script>
            <[if ends ]-->
    <!--/ script files -->
    <script src="https://bellcom.digitaldot.in/surecredit/js/custom.js"></script>
    <script>
        //contact form validatin
        $('#contact_form').validate({
            ignore: [],
            errorClass: 'text-danger', // You can change the animation class for a different entrance animation - check animations page
            errorElement: 'div',
            errorPlacement: function (error, e) {
                e.parents('.form-floating').append(error);
            },
            highlight: function (e) {
                $(e).closest('.form-floating').removeClass('has-success has-error').addClass('has-error');
                $(e).closest('.text-danger').remove();
            },
            rules: {
                name: {
                    required: true
                },
                phone: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                sub: {
                    required: true,
                }
            },

            messages: {
                name: {
                    required: "Enter Name"
                },
                phone: {
                    required: "Enter Valid Mobile Number"
                },
                email: {
                    required: "Enter Valid Email"
                },

                sub: {
                    required: "Enter Subject"
                }
            },
        });
    </script>
    <script>
        var masterslider = new MasterSlider();

        // slider controls
        masterslider.control('bullets', { autohide: true, overVideo: true, dir: 'v', align: 'right', space: 6, margin: 30 });
        // slider setup
        masterslider.setup("masterslider", {
            width: 1366,
            height: 768,
            minHeight: 0,
            space: 0,
            start: 1,
            grabCursor: true,
            swipe: true,
            mouse: true,
            keyboard: true,
            layout: "fullwidth",
            wheel: true,
            autoplay: true,
            instantStartLayers: true,
            loop: true,
            shuffle: false,
            preload: 0,
            heightLimit: true,
            autoHeight: false,
            smoothHeight: true,
            endPause: false,
            overPause: true,
            fillMode: "fill",
            centerControls: true,
            startOnAppear: true,
            layersMode: "center",
            autofillTarget: "",
            hideLayers: false,
            fullscreenMargin: 0,
            speed: 20,
            dir: "v",
            parallaxMode: 'swipe',
            view: "basic"
        });

    </script>
    <!--/ scripts -->
     <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
        output.innerHTML = this.value;
        }
    </script>
    <script>
        function dateformateymd(date1)
        {
            var d = new Date(date1);
            var month = d.getMonth()+1;
            var day = d.getDate();

            var emidate = d.getFullYear() + '-' +
                ((''+month).length<2 ? '0' : '') + month + '-' +
                ((''+day).length<2 ? '0' : '') + day;
                return emidate;
        }
        rangechanged();
    function rangechanged(){

        var loanamt = $('#myRange').val();
        var processing_fee = 10/100;//persent
        var processing_fee_amt = loanamt * processing_fee;
        var emi_intrest = 2.5; 
        var dayloan_intrest = 3.5; 
        //var emidate = $('#selectdate').val();
        
       
        

        $('#totamt').html(loanamt);
        $('#input_loanamt').val(loanamt);
       // loanamt* 10/100;
        $('#processing_fee_text').html("10% : ");
        $('#input_processing_fee').val(processing_fee_amt);
        $('#processing_fee').html(processing_fee_amt);
        $('#preclosure').html("Rs."+(parseInt(loanamt)+parseInt(loanamt * 0.035)+parseInt(processing_fee_amt)));

        if(loanamt< 7000){
            //third radio
            $('#inlineRadio3').prop("checked", true);
            $('#inlineRadio3').prop("disabled", false);
            $('#days').prop("disabled", false);
            $('#inlineRadio1').prop("disabled", true);
            $('#inlineRadio2').prop("disabled", true);

            var intrest = 3.5/100;//0.035---->30 1---?
            
            var days = $('#days').val();
            if(days==''){days = 30;}
            var intrestdays = days/30*0.035;
            var d= new Date();
            var emidate = dateformateymd(d);

            var payableamt = (parseInt(loanamt)+parseInt(loanamt * intrestdays)+parseInt(processing_fee_amt));
             $('#tpayableamt').html("Rs. "+payableamt);
             $('#input_tpayableamt').val(payableamt);
            var str = '<tr><td><input name="emi_principal_amount[]" type="hidden" value="'+loanamt+'"/><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrestdays+'" /><input type="hidden" name="processing_fee_amt[]" value="'+processing_fee_amt+'"><input type="hidden" name="intrest" value="3.5%"/><input type="radio"><span class="d-inline-block ps-2"  id="inlineRadio3" value="">First Month</span></td><td><label for="inlineRadio3">Rs:'+payableamt+'</label><input type="hidden" name="payableamt[]" value="'+payableamt+'"></td><td><input name="emiduedate[]" value="'+emidate+'" >'+emidate+'</td></tr>';
            $('#monthlyemi').html(str);
            $('#intrest').html('3.5%');


        }else if(loanamt > 15000){
            //first radio
            $('#inlineRadio1').prop("checked", true);
            $('#inlineRadio1').prop("disabled", false);
            $('#inlineRadio2').prop("disabled", true);
            $('#inlineRadio3').prop("disabled", true);
            $('#days').prop("disabled", true);
            var intrest = 2.5/100;

            var splits =3;
            var split1 = loanamt*(50/100);
            var split2 = loanamt*(30/100);
            var split3 = loanamt*(20/100);

            var payableamt1 = parseInt(split1)+parseInt(loanamt * intrest)+parseInt(processing_fee_amt);
            var payableamt2 = parseInt(split2)+parseInt(loanamt * intrest);

            var intrestdays = 35/30*0.025;

            var payableamt3 = parseInt(split3)+parseInt(loanamt * intrestdays);
            

            var emidate = new Date();
            emidate.setDate(emidate.getDate() + 30);
            emidate = dateformateymd(emidate);

            var emidate2 = new Date();
            emidate2.setDate(emidate2.getDate() + 60);
            emidate2 = dateformateymd(emidate2);

            var emidate3 = new Date();
            emidate3.setDate(emidate3.getDate() + 95);
            emidate3 = dateformateymd(emidate3);

            var str = '<tr><td><input name="emi_principal_amount[]" type="hidden" value="'+split1+'"/><input name="emi_principal_amount[]" type="hidden" value="'+split2+'"/><input name="emi_principal_amount[]" type="hidden" value="'+split3+'"/><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrest+'" /><input type="hidden" name="processing_fee_amt[]" value="'+processing_fee_amt+'"><input type="hidden" name="intrest" value="2.5%"/><input name="days" type="hidden" value="95" /><input type="radio"><span class="d-inline-block ps-2"  name="inlineRadioOptions" id="inlineRadio3" value="option1">First Month</span></td><td><label for="inlineRadio3">Rs:'+payableamt1+'</label><input type="hidden" name="payableamt[]" value="'+payableamt1+'"></td><td><input name="emiduedate[]" value="'+emidate+'" >'+emidate+'</td></tr><tr><td><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrest+'" /><input type="hidden" name="processing_fee_amt[]" value="0"><input type="radio"><span class="d-inline-block ps-2"  name="inlineRadioOptions" id="inlineRadio3" value="option1">second Month</span></td><td><label for="inlineRadio3">Rs:'+payableamt2+'</label><input type="hidden" name="payableamt[]" value="'+payableamt2+'"></td><td><input name="emiduedate[]" value="'+emidate2+'" >'+emidate2+'</td></tr><tr><td><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrestdays+'" /><input type="hidden" name="processing_fee_amt[]" value="0"><input type="radio"><span class="d-inline-block ps-2"  name="inlineRadioOptions" id="inlineRadio3" value="option1">Third Month</span></td><td><label for="inlineRadio3">Rs:'+payableamt3+'</label><input type="hidden" name="payableamt[]" value="'+payableamt3+'"></td><td><input name="emiduedate[]" value="'+emidate3+'" >'+emidate3+'</td></tr>';
            $('#monthlyemi').html(str);
            $('#tpayableamt').html("Rs. "+parseInt(payableamt1+payableamt2+payableamt3));
            $('#input_tpayableamt').val(parseInt(payableamt1+payableamt2+payableamt3));
            $('#intrest').html('2.5%');
        }else{
            //second radio
            $('#inlineRadio2').prop("checked", true);
            $('#inlineRadio2').prop("disabled", false);
            $('#inlineRadio3').prop("disabled", true);
            $('#inlineRadio1').prop("disabled", true);
            $('#days').prop("disabled", true);
           var intrest = 2.5/100;
            var splits =2;
            var split1 = loanamt *60/100;
            var split2 = loanamt *40/100;
            var payableamt1 = split1+(loanamt * intrest)+processing_fee_amt;
            var intrestdays = 35/30*0.025;
            var payableamt2 = split2+(loanamt * intrestdays);
            $('#payableamt').html("<div id='3splitfirst' class=''>First Instalment : "+ payableamt1 + "</div><div id='3splitsecond' class=''>Second Instalment : "+ payableamt2 + "</div><input type='hidden' name='payableamt[]' value='"+payableamt1+"'><input type='hidden' name='payableamt[]' value='"+payableamt2+"'>");
            var emidate = new Date();
            emidate.setDate(emidate.getDate() + 30);
            emidate = dateformateymd(emidate);

            var emidate2 = new Date();
            emidate2.setDate(emidate2.getDate() + 65);
            emidate2 = dateformateymd(emidate2);


            var str = '<tr><td><input name="emi_principal_amount[]" type="hidden" value="'+split1+'"/><input name="emi_principal_amount[]" type="hidden" value="'+split2+'"/><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrest+'" /><input type="hidden" name="processing_fee_amt[]" value="'+processing_fee_amt+'"><input type="hidden" name="intrest" value="2.5%"/><input name="days" value="65" type="hidden"><input type="radio"><span class="d-inline-block ps-2"  name="inlineRadioOptions" id="inlineRadio3" value="option1">First Month</span></td><td><label for="inlineRadio3">Rs:'+payableamt1+'</label><input type="hidden" name="payableamt[]" value="'+payableamt1+'"></td><td><input name="emiduedate[]" value="'+emidate+'" >'+emidate+'</td></tr><tr><td><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrestdays+'"><input type="hidden" name="processing_fee_amt[]" value="0"><input type="radio"><span class="d-inline-block ps-2"  name="inlineRadioOptions" id="inlineRadio3" value="option1">Second Month</span></td><td><label for="inlineRadio3">Rs:'+payableamt2+'</label><input type="hidden" name="payableamt[]" value="'+payableamt2+'"></td><td><input name="emiduedate[]" value="'+emidate2+'" >'+emidate2+'</td></tr>';
            $('#monthlyemi').html(str);
            $('#tpayableamt').html("Rs. "+parseInt(payableamt1+payableamt2));
            $('#input_tpayableamt').val(parseInt(payableamt1+payableamt2));
            $('#intrest').html('2.5%');
        }        
          

    }
    function isValidNum(n) {
  if (!isNaN(parseFloat(n)) && isFinite(n) && n<=30) {
      //alert('if'+n);
  }else{
    //alert('else'+n);
    if(n){
        $('#days').val('30');
    }
    
  }
  rangechanged();
}
</script>
</body>

</html>