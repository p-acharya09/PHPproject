        <!-- Footer -->
        <footer>
            <h3>Contact Us</h3>
            <div class="footer-list">
                <ul>
                    <li>Email: <a href="#"><?= $contact['contact_email'] ?></a></li>
                    <li>Phone: <span><?= $contact['contact_phone'] ?></span></li>
                    <li>Address: <?= $contact['contact_address'] ?></li>
                </ul>
                <div class="social">
                    <i class="fas fa-envelope"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                </div>
              <p>OnlyForCollegeProject@Samrat Art Gallery</p>
            </div>
        </footer>

        <script>
            function showNav() {
              var element = document.getElementById("nav-items");
              console.log(element);
              element.classList.toggle("show-items");
            }
        </script>
    </body>
</html>