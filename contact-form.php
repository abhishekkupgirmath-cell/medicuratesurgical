<!doctype html>
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">


<head>
  <meta charset="utf-8">
  <title>Medicurate Surgical</title>

  <meta name="description"
    content="Transforming healthcare education through advanced VR/AR solutions. Explore interactive human anatomy, VR DICOM visualization, and realistic medical simulations for professionals and students.">
  <meta name="keywords"
    content="VR, AR, MR, XR, Mixed Reality, Body, Human, Anaromy, Virtual Reality, Human Anatomy VR, DICOM, CT, MRI, Medical Education, Healthcare Training, Interactive Anatomy, VR for Healthcare">
  <meta name="author" content="Design: Michal Tkáč, Development: Ondrej Malota">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Medicurate Surgical – The Future of Healthcare Education">
  <meta property="og:description"
    content="Leading innovation in healthcare education through VR/AR technology – Explore interactive human anatomy, DICOM visualization, and realistic medical simulations for professionals and students.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://medicuratesurgical.com">
  <meta property="og:image" content="https://medicuratesurgical.com/img/SEO-min.png">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Medicurate Surgical – The Future of Healthcare Education">
  <meta name="twitter:description"
    content="Leading innovation in healthcare education through VR/AR technology – Explore interactive human anatomy, DICOM visualization, and realistic medical simulations for professionals and students.">
  <meta name="twitter:image" content="https://medicuratesurgical.com/img/SEO-min.png">
  <meta name="twitter:url" content="https://medicuratesurgical.com">

  <link rel="apple-touch-icon" href="icon.png">

  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400..800&display=swap" rel="stylesheet"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Sen:wght@400..800&display=swap"
    onload="this.onload=null;this.rel='stylesheet'">

  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sen:wght@400..800&display=swap">
  </noscript>

  <!-- <link rel="stylesheet" href="/assets/css/normalize.css"> -->
  <link rel="stylesheet" href="/assets/css/main.min.css?v=2.5">
  <link rel="stylesheet" href="/assets/css/medicurate.css">

  <meta name="theme-color" content="#FFFFFF">
</head>

<body style="padding-top: 0;">

  <div class="bg_blur">
  </div>

  <header>
    <div class="burger_menu_bg">
      <ul>

        <li class="mobile-dropdown">
          <span class="mobile-dropbtn" onclick="toggleMenu('products-submenu')">Products <span
              class="arrow arrow-down"></span></span>
          <ul class="mobile-dropdown-bg" id="products-submenu">
            <div class="mobile-dropdown-content">
              <div class="mobile-dropdown-content-bg">
                <li class=""><a href="institution.html">Institution</a></li>
                <li class=""><a href="professional.html">Professional</a></li>
                <li class=""><a href="personal.html">Personal</a></li>
              </div>
            </div>
          </ul>
        </li>


        <li class=""><a href="news.html">News</a></li>
        <li class=""><a href="contact.html">About Us</a></li>

      </ul>
      <!-- <div class="multilanguage-burger">
        <img src="/img/svk-flag.png" onclick="changeLanguage('sk');">
        <img src="/img/uk-flag.png" style="opacity: 1; cursor: default">
      </div> -->
      <button class="try" onclick="location.href='contact-form.php';" style="border-radius: 20px;">CONTACT US</button>
      <div class="burger_social_bar">
        <img src="/img/social-facebook.svg" alt="FACEBOOK" class="social_ico"
          onclick="window.open('https://www.facebook.com/MedicurateSurgical/')" />
        <img src="/img/social-instagram.svg" alt="INSTAGRAM" class="social_ico"
          onclick="window.open('https://www.instagram.com/medicuratesurgical/?hl=en')" />
        <img src="/img/social-linkedin.svg" alt="LINKEDIN" class="social_ico"
          onclick="window.open('https://www.linkedin.com/company/medicuratesurgical-vr-ar')" />
        <img src="/img/social-youtube.svg" alt="YOUTUBE" class="social_ico"
          onclick="window.open('https://www.youtube.com/channel/UChvqcOhNLxxWBc0FACQeXHg')" />
      </div>
    </div>
    <div class="nav_container nav_burger_container">
      <nav>
        <span class="nav_logo" onclick="location.href='/index.html';">
          <img src="/img/medicurate.jpeg" alt="Medicurate Surgical" style="padding-left: 10px;" />
        </span>
        <!-- burger navbar -->
        <div class="burger_navbar_container">
          <div class="burger_navbar_item"></div>
        </div>

        <!-- burger navbar end -->
        <ul>


          <li class="nav_item dropdown">
            <span class="dropbtn" onclick="location.href='institution.html';">Products <span
                class="arrow-menu"></span></span>
            <ul class="dropdown-bg">
              <div class="dropdown-content">
                <div class="dropdown-content-bg">
                  <li class="nav_item_dropdown"><a href="/institution.html">Institution</a></li>
                  <li class="nav_item_dropdown"><a href="/professional.html">Professional</a></li>
                  <li class="nav_item_dropdown"><a href="/personal.html">Personal</a></li>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav_item"><a href="/news.html">News</a></li>

          <li class="nav_item"><a href="/contact.html">About Us</a></li>
        </ul>
        <button class="nav_item_button try" onclick="location.href='contact-form.php';">CONTACT US</button>
        <!-- <div class="multilanguage responsive_hidden">
          <img src="/img/svk-flag.png" onclick="location.href='sk/index.html';">
          <img src="/img/uk-flag.png" style="opacity: 1; cursor: default">
        </div> -->
      </nav>
    </div>
  </header>
  <script src="https://www.google.com/recaptcha/api.js?render=6LdDWSkpAAAAAP89w1we3K2S9Wq8OQMgQlV1cxV9"></script>
  <script>
    grecaptcha.ready(function () {
      // do request for recaptcha token
      // response is promise with passed token
      grecaptcha.execute('6LdDWSkpAAAAAP89w1we3K2S9Wq8OQMgQlV1cxV9', { action: 'validate_captcha' })
        .then(function (token) {
          // add token value to form
          document.getElementById('g-recaptcha-response').value = token;
        }).catch(function (error) {
          console.error("reCAPTCHA error:", error);
        });
    });

    setInterval(function () {
      grecaptcha.ready(function () {
        grecaptcha.execute('6LdDWSkpAAAAAP89w1we3K2S9Wq8OQMgQlV1cxV9', { action: 'validate_captcha' })
          .then(function (token) {
            // add token value to form
            document.getElementById('g-recaptcha-response').value = token;
          }).catch(function (error) {
            console.error("reCAPTCHA error:", error);
          });
      });
    }, 90 * 1000);
  </script>

  <section class="contact_form">
    <h3>Feel free to contact us</h3><br><br>
    <p>Please fill out the form below and we will contact you shortly.<br><br>
      Your information stays safe with us. We respect your privacy and will never share your details.</p>
    <br><br>
    <form action="contact-form.php" method="POST" class="form" id="form">
      <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
      <input type="hidden" name="action" value="validate_captcha">
      <div class="form_item_group form_item_group_mobile" style="align-items: flex-end;">
        <div class="form_item input_text title-width"
          style="background-color: white; display: flex; flex-direction: row;">
          <select name="title" class="valid_text">
            <option value="" selected disabled hidden>Title</option>
            <option value="Mr">Mr.</option>
            <option value="Mrs">Mrs.</option>
            <option value="Mrs">Dr.</option>
            <option value="Mrs">Prof.</option>
            <option value="Mrs">Ms.</option>
          </select>
          <img src="img/down-arrow.svg" class="country_img" />
        </div>
        <div class="form_item name-width">
          <label for="name" class="label_text">Name <span style="color: darkred;">&nbsp*</span></label>
          <input name="name" type="text" placeholder="Your Full Name" class="input_text valid_text">
        </div>
        <div class="form_item email-width">
          <label for="email" class="label_text">E-mail <span style="color: darkred;">&nbsp*</span></label>
          <input name="email" type="email" placeholder="Your E-mail" class="input_text valid_email">
        </div>
      </div>
      <div class="form_item_group form_item_group_mobile">
        <div class="form_item form_item_addressline">
          <label for="addressline" class="label_text">Address <span style="color: darkred;">&nbsp*</span></label>
          <input name="addressline" type="text" placeholder="Address Line 1" class="input_text valid_text">
        </div>
        <div class="form_item form_item_addressline">
          <label for="phone" class="label_text">Phone <span style="color: darkred;">&nbsp*</span></label>
          <input name="phone" type="text" placeholder="Phone Number" class="input_text" id="phone">
        </div>
      </div>
      <div class="form_item_group form_item_group_mobile">
        <input name="city" type="text" placeholder="City" class="input_text valid_text">
        <input name="region" type="text" placeholder="State / Province / Region" class="input_text valid_text">
      </div>
      <div class="form_item_group form_item_group_mobile">
        <input name="postal" type="text" placeholder="Postal / Zip Code" class="input_text valid_post_code">
        <div class="form_item input_text" style="background-color: white; display: flex; flex-direction: row;">
          <select name="country" class="valid_text">
            <option value="" selected disabled hidden>Country</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Åland Islands">Åland Islands</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote D'ivoire">Cote D'ivoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Territories">French Southern Territories</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guernsey">Guernsey</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-bissau">Guinea-bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Isle of Man">Isle of Man</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jersey">Jersey</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
            <option value="Korea, Republic of">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macao">Macao</option>
            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of
            </option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
            <option value="Moldova, Republic of">Moldova, Republic of</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Netherlands Antilles">Netherlands Antilles</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russian Federation">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Helena">Saint Helena</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands
            </option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-leste">Timor-leste</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Viet Nam">Viet Nam</option>
            <option value="Virgin Islands, British">Virgin Islands, British</option>
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis and Futuna">Wallis and Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
          </select>
          <img src="img/down-arrow.svg" class="country_img" />
        </div>
      </div>
      <div class="form_item_group form_item_group_mobile">
        <div class="form_item">
          <label for="profession" class="label_text">Profession: <span style="color: darkred;">&nbsp*</span></label>
          <input name="profession" type="text" class="input_text valid_text">
        </div>
        <div class="form_item">
          <label for="department" class="label_text">Institution and Department: <span
              style="color: darkred;">&nbsp*</span></label>
          <input name="department" type="text" class="input_text valid_text">
        </div>
      </div>
      <div class="form_item_group form_item_group_mobile">
        <div class="form_item_group_column">
          <div class="form_item" style="margin: 15px 0 10px 0;">
            <label for="request" class="label_text">Request:<span style="color: darkred;">&nbsp*</span></label>
            <textarea name="request" type="text" class="input_text valid_text"
              style="height: 150px; padding: 20px 20px;"></textarea>
          </div>
          <div class="form_item">
            <label for="licensesinfo" class="label_text">How many and what type of licenses are you interested in? <span
                style="color: darkred;">&nbsp*</span></label>
            <input name="licensesinfo" type="text" class="input_text valid_text">
          </div>
        </div>

        <div class="form_item_group_column valid_about_container" style="margin-top: 30px;">
          <div class="form_checkbox_group">
            <label style="margin: 10px 0;"><b>How did you know about Human Anatomy VR?</b><span
                style="color: darkred;">&nbsp*</span></label>
            <div class="form_item_group">
              <input name="onlinestore" type="checkbox" class="valid_checkbox_about">
              <label for="onlinestore">From an online store</label>
            </div>
            <div class="form_item_group">
              <input name="searchingonline" type="checkbox" class="valid_checkbox_about">
              <label for="searchingonline">Searching online</label>
            </div>
            <div class="form_item_group">
              <input name="socialmedia" type="checkbox" class="valid_checkbox_about">
              <label for="socialmedia">From social media</label>
            </div>
            <div class="form_item_group">
              <input name="other" id="otherchecker" type="checkbox" class="valid_checkbox_about">
              <input name="otherinput" type="text" class="valid_text_about" id="otherinput" placeholder="Other"
                style="transform: translateY(-3px); border: 1px solid #A9A9A9; padding-left: 10px;">
            </div>
          </div>
        </div>
      </div>
      <div class="form_item_group" style="margin-top:40px;">
        <input name="privacypolicy" type="checkbox" class="valid_checkbox">
        <label for="privacypolicy">I have read and agree with Privacy Policy.<span
            style="color: darkred;">&nbsp*</span></label>
      </div>
      <div class="form_item_group">
        <input name="faq" type="checkbox" class="valid_checkbox_faq">
        <label for="faq">I have read the <a href="/faq.html" style="color:#00A3A6">FAQ</a> and didn't find my answer
          there.<span style="color: darkred;">&nbsp*</span></label>
      </div>
      <div class="form_submit_container">
        <h5>Thank you, Medicurate Surgical team.</h5>
        <button id="submit_button" class="try">SUBMIT</button>
      </div>
    </form>
  </section>
  <div class="address">
    <div>
      <b>Medicurate Surgical, s.r.o.</b><br>
      Digital Park II, Einsteinova 25<br>
      851 01 Bratislava, Slovakia<br>
      European Union<br>
    </div>
  </div>

  <hr style="opacity: 0.5; margin-top: 30px;">

  <section class="joint_vm">
    <h2>Join our community today</h2>
    <p>We have tailored the perfect solution for you</p>
    <div style="display: flex;">
      <button class="try big"
        onclick="window.open('https://www.oculus.com/experiences/quest/3662196457238336/?utm_source=medicuratesurgical.com', '_blank')">
        <span>TRY FOR FREE</span>
        <br />
        <span style="font-size: 10px;">Personal</span>
      </button>
      <button class="buy big" onclick="window.open('https://portal.medicuratesurgical.com/store', '_blank')">
        <span>TRY FOR FREE</span>
        <br />
        <span style="font-size: 10px;">Institutions</span>
      </button>
      <button class="compare big" onclick="location.href='contact-form.php';">CONTACT US</button>
    </div>
  </section>

  <section class="scroll_up">
    <button class="try" onclick="$('html, body').animate({scrollTop : 0}, 1000);">SCROLL UP</button>
  </section>

  <footer>
    <div class="footer_menu_container">

      <dl>
        <dt>License plans</dt>
        <dd><a href="personal.html">Personal</a></dd>
        <dd><a href="professional.html">Professional</a></dd>
        <dd><a href="institution.html">Institution</a></dd>
      </dl>
      <dl>
        <dt>Company</dt>
        <dd><a href="contact.html">About us</a></dd>
        <dd><a href="contact-form.php">Contact us</a></dd>
      </dl>
    </div>
    <div class="footer-information">
      <strong>*Important Information About Features for Surgical Planning and Clinical Use</strong><br /><br />
      <span>The VR DICOM's specialized features tailored for surgical planning and pre-operative professional
        applications are at the moment available for educational purposes only.  For updates on product development,
        regulatory status, availability, or any questions, please reach out to info@medicuratesurgical.com.</span>
    </div>
    </div>
    <div class="footer_menu_logo">
      <img src="/img/medicurate.png" onclick="location.href='index.html';" style="cursor: pointer;margin: 15px 0px;"
        alt="logo-footer">
      <span style="font-size: 11px; margin: 15px 0px;">Copyright © 2025, Medicurate Surgical | <span
          onclick="window.open('https://www.medicinevirtual.com/terms-and-conditions.html')"
          style="cursor: pointer; color: #8EC1FE;">Terms & Conditions</span> | <span
          onclick="window.open('https://www.medicinevirtual.com/privacy-policy.html')"
          style="cursor: pointer; color: #8EC1FE;">Privacy Policy</span>
    </div>
  </footer>

  <script src="assets/js/cookieconsent-2.8.0/src/cookieconsent.js"></script>
  <script src="assets/js/cookieconsent-2.8.0/src/cookieconsent-init.js?v=1.1"></script>

  <script src="assets/js/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
  <script src="assets/tilt.js/src/tilt.jquery.js"></script>
  <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.min.js?v=1.11"></script>

  <!-- Google tag (gtag.js) -->
  <script data-cookiecategory="analytics" type="text/plain" async
    src="https://www.googletagmanager.com/gtag/js?id=G-2BT1WJCQLP"></script>
  <script data-cookiecategory="analytics"
    type="text/plain"> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-2BT1WJCQLP'); </script>

</body>

</html>