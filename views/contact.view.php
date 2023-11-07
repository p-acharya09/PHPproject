<?php include'partials/header.php';?>

        <!-- Contact Information Section -->
        <section class="contact-us">
            <!-- Contact Detail -->
            <div class="contact-us-detail">
                <h3>Contact Us</h3>
                <ul>
                    <li>Phone: <span><?= $contact['contact_phone'] ?></span></li>
                    <li>Email: <span><?= $contact['contact_email'] ?></span></li>
                    <li>Address: <span><?= $contact['contact_address'] ?></span></li>
                </ul>
            </div>
            <img title="Location" src="./images/maps.png">    
        </section>


        <!-- Contact Message Section -->
        <section class="contact-us-message">
            <h4>Send Us Your Message</h4>
            <form>
                <div class="form-row">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                  </div>
                  <div class="form-row">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                  </div>
                  <div class="form-row">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone">
                  </div>
                  <div class="form-row">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message"></textarea>
                  </div>
                  <div class="form-row">
                    <input class="button-submit" type="submit" value="Submit">
                  </div>
            </form>
        </section>


<?php include'partials/footer.php';?>
