<link href="style.css" rel="stylesheet">
<section class="contact" id="contact">
    
    <div class="wrapper1">
        <div class="title1">
          <h1>Contact Us Form</h1>
        </div>
        <div class="contact-form">
            <form method = "post" action = "formsql.php">
          <div class="input-fields">
            
            <input type="text" class="input" placeholder="Name" name="name">
            <input type="email" id="em" class="input" placeholder="Email Address" name="email" pattern=".+@gmail\.com">
            <input type="number" class="input" placeholder="Phone" name="phone">
            <input type="text" class="input" placeholder="Subject" name="subject">
          </div>
          <div class="msg">
            <textarea placeholder="Message" name="message"></textarea>
                <button onclick="ValidateEmail()" name='send'>Send </button>
        </div>
            </form>
          </div>
        </div>
        </div> 
    </section>
    <body>
    <script src="script.js"></script>
    </body>