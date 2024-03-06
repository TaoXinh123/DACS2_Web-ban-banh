<?php include "./AdditionalPHP/checkAccess.php"; ?>

<head>
    <script defer src="validateContactInput.js"></script>
</head>

<div id="contact-submission" class="contact-section">
<div class="subtitle1">
            <h2>CONTACT US</h2>
</div>
    <div class="contact-us"> 
            <span class="send-input-message"></span>
            <span id="sendError" class="input-error"></span>
        

        <form id="contactForm" method="POST" >
            <label for="customerName">Name <em>&#x2a;</em></label>
            <span id="nameError"class="input-error"></span>
            <input id="customerName" name="customerName" required type="text" />

            <label for="customerEmail">Email <em>&#x2a;</em></label>
            <span id="emailError" class="input-error"></span>
            <input id="customerEmail" name="customerEmail" required type="email" />

            <label for="customerPhone">Mobile Number</label>
            <span id="phone" class="input-error"></span>
            <input id="customerPhone" name="customerPhone" type="tel"/>
            
            <label for="orderNumber">Order Number</label>
            <input id="orderNumber" name="orderNumber" type="text" />
            
            <label for="customerNote">Your Message<em>&#x2a;</em></label>
            <span class="input-error"></span>
            <textarea id="customerNote" name="customerMessage" required rows="4"></textarea>
            <br>

            <div class="push-button">
                <span><button id="submit" name="submit">Submit</button></span>
            </div>
        </form>
    </div>
</div>