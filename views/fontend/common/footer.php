<footer class="footer_area">
  <div class="footer_widgets">
    <div class="container">
      <div class="row footer_wd_inner">
        <div class="col-lg-3 col-6">
          <aside class="f_widget f_about_widget">
            <img src="public/img/footer-logo.png" alt="">
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
            <ul class="nav">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </aside>
        </div>
        <div class="col-lg-3 col-6">
          <aside class="f_widget f_link_widget">
            <div class="f_title">
              <h3>Quick links</h3>
            </div>
            <ul class="list_style">
              <li><a href="#">Your Account</a></li>
              <li><a href="#">View Order</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditionis</a></li>
            </ul>
          </aside>
        </div>
        <div class="col-lg-3 col-6">
          <aside class="f_widget f_link_widget">
            <div class="f_title">
              <h3>Work Times</h3>
            </div>
            <ul class="list_style">
              <li><a href="#">Mon. : Fri.: 8 am - 8 pm</a></li>
              <li><a href="#">Sat. : 9am - 4pm</a></li>
              <li><a href="#">Sun. : Closed</a></li>
            </ul>
          </aside>
        </div>
        <div class="col-lg-3 col-6">
          <aside class="f_widget f_contact_widget">
            <div class="f_title">
              <h3>Contact Info</h3>
            </div>
            <h4>(1800) 574 9687</h4>
            <p>Justshiop Store <br />256, baker Street,, New Youk, 5245</p>
            <h5>cakebakery@contact.co.in</h5>
          </aside>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
  <div class="search_box_inner">
    <h3>Search</h3>
    <form method="get" class="input-group">
      <input type="text" name="keysearch" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="icon icon-Search"></i></button>
      </span>
    </form>
  </div>
</div>

<div class="modal" id="myModal-login">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Đăng nhập</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" action="?controller=user&action=login">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" required class="form-control" name="username">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" required name="password" class="form-control">
          </div>
          <button style="width:100%; margin: 0 auto; background-color:#f195b2; color:#fff;" type="submit" class="btn">Đăng nhập</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở lại</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="myModal-register">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Đăng kí</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" action="?controller=user&action=register">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" required name="username" class="form-control" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" required name="email" class="form-control" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" required name="phone" class="form-control" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" required name="password" class="form-control">
            <label class="form-label">Confirm Password</label>
            <input type="password" required name="confirmpassword" class="form-control">
          </div>
          <button style="width:100%; margin: 0 auto; background-color:#f195b2; color:#fff;" type="submit" class="btn">Đăng kí</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở lại</button>
      </div>

    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="public/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="public/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="public/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<!-- Extra plugin js -->
<script src="public/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="public/vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
<script src="public/vendors/datetime-picker/js/moment.min.js"></script>
<script src="public/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
<script src="public/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="public/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="public/vendors/lightbox/simpleLightbox.min.js"></script>

<script src="public/js/theme.js"></script>
<script src="public/js/main.js"></script>
</body>

</html>