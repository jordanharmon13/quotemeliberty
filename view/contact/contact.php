<!DOCTYPE HTML>
        
    <main>
        <h1>Contact Us</h1>
        <p>Contact us today and we will respond asap.</p>

        <div>
            
            <?php 
            // Creates reply for whether the email was sent or not.
            if(!empty($reply)){
                echo "<p class='notify'>$reply</p>";
            }
            // unset destroys the variable and resets it
            unset($reply);            
            ?>
            <p>All fields are required</p>
            <form method="post" action=".?action=contact_us" id="contactform">
                <fieldset>
                    <p>Fill out the following form</p>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" size="10" value="<?php echo $firstname ?>" /><br>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" size="15" value="<?php echo $lastname ?>" /><br>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" size="30" value="<?php echo $email ?>" /><br>
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" size="10" value="<?php echo $subject ?>" /><br>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="10" cols="60"><?php echo $message ?></textarea><br>
                    <p>Complete the following CAPTCHA</p>
                    <label for="captcha">What color is a red apple?</label>
                    <input type="text" name="captcha" id="captcha" size="5"> <br>
                    <label for="action"></label>
                    <input type="submit" name="contact_action" id="contact_action" value="Send" /><br>
                </fieldset>
            </form>
            
        </div>
        
    </main>