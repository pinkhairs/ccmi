<?php $page = 'contact'; include 'header.php'; ?>
<section class="section section--highlight section--small text-center">
  <div class="container">
    <h1>Contact Us</h1>
  </div>
</section>
<section class="section section--white section--small">
  <div class="container">
    <p class="text-center">Use the form or contact methods on this page to reach out.</p>
  </div>
  <div class="container">
    <form action="#" method="post">
      <div class="grid grid--2">
        <label>Your Name <input type="text"></label>
        <label>Email <input type="email"></label>
      </div>
      <label>Your Message <textarea></textarea></label>
    </form>
  </div>
  <div class="container">
    <div class="grid">
      <img src="images/map.jpg" alt="Map">
    </div>
    <div class="grid grid--3">
      <div>
        <h3>Address</h3>
        USC, CA, USA
      </div>
      <div>
        <h3>Email</h3>
        <a href="#">info@ccmi.usc.edu</a>
      </div>
      <div>
        <h3>Phone</h3>
        (800) 555-PHONE
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>