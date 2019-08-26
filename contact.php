<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Contact - Global Thought Advisory</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>
    <div id="page-wrapper">
        
    <?php include 'header.php'; ?>

        <!-- Main -->
        <section id="main" class="container 75%">
            <header>
                <h2>Contact Us</h2>
                <p>Our offices are in London, Singapore and New Delhi.<br> Your Contact Us details or Email will be answered by our closest office to your location.
                    <br>Contact us by submitting the e-form below or email us at : <a href="mailto:advisory@globalthought.co.uk">advisory@globalthought.co.uk </a>.
                </p>
            </header>
            <div class="box">
                    <div class="row uniform 50%">
                        <div class="6u 12u(mobilep)">
                            <input type="text" name="name" id="name" value="" placeholder="Name" />
                        </div>
                        <div class="6u 12u(mobilep)">
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                    </div>
                    <div class="row uniform 50%">
                        <div class="12u">
                            <input type="text" name="subject" id="subject" value="" placeholder="Subject" />
                        </div>
                    </div>
                    <div class="row uniform 50%">
                        <div class="12u">
                            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="12u">
                            <ul class="actions align-center">
                                <li><input type="submit" value="Send Message" onclick="sendMail();" /></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </section>

       <?php include 'footer.php'; ?>


    </div>

    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollgress.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
    
    <script>
        function sendMail(){
        var name=$('#name').val();
        var email=$('#email').val();
        var subject=$('#subject').val();
        var message=$('#message').val();
            
            if(email && subject && message && name){
               
       
        $.ajax({
        
			cache: false,
			type:"POST",
			url:"mail.php",
			data:{name:name,email:email,message:message,subject:subject},
			success:function(data)
			{
				if(data=='1'){
                    alert('Successfully Submitted');
                    
                }
                else{
                    alert('Unsuccessful');
                }
			},
				error: function() {
				alert('Error occurs!');
		   }
		});
        }
        else
            {
                alert('Fill the form.');
            }
        }
        
        
        
   
    </script>

</body>

</html>
