<?php
include "./common/header.php";
?>
<link rel="stylesheet" href="style.css">
<link href="logo.png" rel="shortcut icon">
<aside>
  <div class="bg-secondary py-5 text-white text-center">
    <div class="container">
      <h2 class="font-20 font-lg-26 mb-2">تواصل معنا</h2>
      <ol class="breadcrumb bg-transparent p-0 mt-24 font-18 mb-0 justify-content-center">
        <li class="breadcrumb-item">
          <a href="index.html">الرئيسية</a>
        </li>
        <li class="breadcrumb-item active">تواصل معنا</li>
      </ol>
    </div>
  </div>
  <div class="bg-white py-5 py-lg-6">
    <div class="container">
      <div class="row row-p12 row-col">
        <div class="col-lg-5 bg-background bg-size-cover bg-position-centercenter" style="
                background-image: url(https://works.lawhatik.com/future-vision/site/wp-content/uploads/2021/04/img07.jpg);
              "></div>
        <div class="col-lg-7">
          <div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="ar" dir="rtl">
            <div class="screen-reader-response">
              <p role="status" aria-live="polite" aria-atomic="true"></p>
              <ul></ul>
            </div>
            <form method="POST" action="server/connectWithUs/connectWithUsAction.php" class="wpcf7-form init">
              <div style="display: none">
                <input type="hidden" name="_wpcf7" value="5" />
                <input type="hidden" name="_wpcf7_version" value="5.4" />
                <input type="hidden" name="_wpcf7_locale" value="ar" />
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-o1" />
                <input type="hidden" name="_wpcf7_container_post" value="0" />
                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
              </div>
              <div class="row row-p6 row-col">
                <div class="col-md-6">
                  <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control-lg rounded-0" aria-required="true" aria-invalid="false" placeholder="الاسم" /></span>
                </div>
                <div class="col-md-6">
                  <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text form-control form-control-lg rounded-0" aria-invalid="false" placeholder="رقم الجوال" /></span>
                </div>
                <div class="col-md-6">
                  <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control form-control-lg rounded-0" aria-required="true" aria-invalid="false" placeholder="البريد الإلكتروني" /></span>
                </div>
                <div class="col-md-6">
                  <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text form-control form-control-lg rounded-0" aria-invalid="false" placeholder="العنوان" /></span>
                </div>
                <div class="col-md-12">
                  <span class="wpcf7-form-control-wrap your-message">
                    <textarea name="message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea form-control form-control-lg rounded-0" aria-invalid="false" placeholder="محتوي الرسالة"></textarea>
                  </span>
                </div>
                <div class="col-lg-12 mb-0">
                  <input type="submit" name="submit" value="ارسال الرسالة" class="wpcf7-form-control wpcf7-submit btn btn-outline-primary btn-lg btn-block rounded-0" />
                </div>
              </div>
              <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</aside>
<iframe src="https://www.google.com/maps/d/embed?mid=17tkzmG8256_xUXDG5BYue1gZwRI&hl=en&ehbc=2E312F" width="1847" height="400" class="mb-5"></iframe>
<?php
include "./common/footer.php";
?>
</body>

</html>