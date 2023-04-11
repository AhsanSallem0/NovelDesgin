<?php
  session_start();
  
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Z.T.Soyoye | Author </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/visualnovel_logo_no_text-modified.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-+ssXhZfLkMjK5wNWf5KN5uxyZWlPoyRKO7Wx5+mqno9XZbLg45MKtJWwmf8/6cwP3KVq3cDbZXzNfj8bJ2XOoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>

<body class="body-bg">
  <div id="preloader_page" style="display: none;">
    <img src="assets/img/preloader_transparent.gif" alt="Loading...">
  </div>

<div id="page-content">

<header>
    <!-- Header Start -->
    <div class="header-area header-transparent" style="z-index: 1;">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <div>
                        <a href="index.html"><img src="assets/img/logo2.png" alt="Z.T.Soyoye logo" width="150px"></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block" style="align-items: center; text-align: center;">
                        <nav>
                            <ul id="navigation">
                                <li><a href="https://ztsoyoye.com/">Home</a></li>
                                <li><a href="https://ztsoyoye.com/books.html">Books</a></li>
                                <li><a href="index.html" style="font-weight: bold;">Visual Novel</a></li>
                                <li><a href="https://ztsoyoye.com/blog">Blog</a> </li>
                                <li><a href="https://ztsoyoye.com/bio.html">About me</a></li>
                            </ul>
                        </nav>
                    </div>          
                    <div class="header-btns d-none d-lg-block f-right">
                      <?php 
                      if ( (isset($_SESSION['value1']) && isset($_SESSION['value2'])) ) {
                        echo '

                        <button onclick="location.href='; echo'user_stories.php'; echo ' " type="button" class=" logbutton" style="margin-right: 5px;"><a href="user_stories.php">My Stories</a></button>

                          <div class="regbutton">
                            <div class="regbutton2">
                              <a href="logout.php" >Logout</a>
                            </div>
                          </div>

                        ';

                      }
                      else{

                        echo '
                        
                        <button onclick="location.href='; echo'login.php'; echo ' " type="button" class=" logbutton" style="margin-right: 5px;"><a href="login.php">Login</a></button>
                          

                        <div class="regbutton">
                          <div class="regbutton2">
                            <a href="login.php?uname=&email=" >Register</a>
                          </div>
                        </div>
                          
                        ';

                      }
                      ?>
                    
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

<main>
    <!-- Start section -->
    <div style="padding: 70px;">
        <br>
        <br>
    </div>
      <?php if (isset($_GET['file_error'])) { ?>
          <div>
     		  <p class="file_error"><?php echo $_GET['file_error']; ?></p>
           </div>
      <?php } ?>
      
      <form id="user-form" action="default.php" method="post" enctype="multipart/form-data">
        <section id="left-section">
          <div class="manual_input_section">
            <h2>Enter text</h2>
            <div id="payment-div">
              <a href="#popup1" style="color:orange;">Need more words?</a>
            </div>

            <?php 
            if ( (isset($_SESSION['value3']) ) ) {

              if ($_SESSION['value3'] == '2.00'){
                echo '
                <textarea id="input_text" name="text" maxlength="50000" placeholder="Paste the text of the book you want to visualise"></textarea>
                <div id="the-count">
                  <span id="current">0</span>
                  <span id="maximum">/ 50000</span>
                </div>
              
              ';

              } else if ($_SESSION['value3'] == '1.00'){
                echo '
                <textarea id="input_text" name="text" maxlength="25000" placeholder="Paste the text of the book you want to visualise"></textarea>
                <div id="the-count">
                  <span id="current">0</span>
                  <span id="maximum">/ 25000</span>
                </div>
              
              ';

              } else if ($_SESSION['value3'] == '0.50'){
                echo '
                <textarea id="input_text" name="text" maxlength="10000" placeholder="Paste the text of the book you want to visualise"></textarea>
                <div id="the-count">
                  <span id="current">0</span>
                  <span id="maximum">/ 10000</span>
                </div>
              
              ';

              }

             

            
            } else if ( (isset($_SESSION['value1']) && isset($_SESSION['value2'])) ) {
              
              if ($_SESSION['value2'] == "tester"){
              echo '
                <textarea id="input_text" name="text" placeholder="Paste the text of the book you want to visualise"></textarea>
                <div id="the-count">
                  <span id="current">0</span>
                  <span id="maximum">/ 524,288</span>
                </div>
              
              ';
              } else {
                echo '
                <textarea id="input_text" name="text" maxlength="4000" placeholder="Paste the text of the book you want to visualise"></textarea>
                <div id="the-count">
                  <span id="current">0</span>
                  <span id="maximum">/ 4000</span>
                </div>
              
                ';
                
              }

            } else{
              echo '
              
              <textarea id="input_text" name="text" maxlength="3000" placeholder="Paste the text of the book you want to visualise"></textarea> 
              <div id="the-count">
                <span id="current">0</span>
                <span id="maximum">/ 3000</span>
              </div>
              
              ';
            }
            
            ?>
          </div>
          <div class="upload_input_section">
            
            <div class="upload_n_sample">
              
              <div class="form-group file-upload-wrapper">
                <div class="file-upload">
                  <h2>Upload text</h2>
                  <label for="fileToUpload">Choose a file (Optional: txt, pdf, doc, docx, epub):</label>
                  <i class="fas fa-cloud-upload-alt"></i>
                  <span>Drag and drop a file or click to select</span>
                  <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
              </div>

              <div class="sample-grid">
                <h2>Samples</h2>
                <div class="sample-icon-grid">
                  <a id="sample1" href="https://visualnovel.ztsoyoye.com/generated_pages/641a106763217_20230321211535.html">
                  <img src="assets/img/Front Cover_Soyoye.jpg" alt="The Unwanted"  style="width:100%; height: 100%;">
                  </a>
                  

                  <a id="sample1" href="https://visualnovel.ztsoyoye.com/generated_pages/6419b6eaea9f8_20230321145346.html">
                  <img src="assets/img/percyjacksoncover.jpg" alt="Percy Jackson"  style="width:100%; height: 100%;">
                  </a>
                  
                  
                  
                </div>

              </div>

            </div>

          </div>
          
        </section>
        <section id="right-section">
          <div class="right_alignment">
            <h2>Art Style</h2>
            <article class="art_section">
              
              <div class="icon-grid">
                <div class="icon-box">
                  <input type="radio" name="icon" value=", manga" id="icon1">
                  <label for="icon1">
                    <img src="assets/img/icons/icon1.png" alt="icon 1" style="width:100%; height: 100%;">
                    <p style="color:white">Manga</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", comic" id="icon2">
                  <label for="icon2">
                    <img src="assets/img/icons/icon2.png" alt="icon 2" style="width:100%; height: 100%;">
                    <p style="color:white">Comic</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", ink" id="icon3">
                  <label for="icon3">
                    <img src="assets/img/icons/icon3.png" alt="icon 3" style="width:100%; height: 100%;">
                    <p style="color:white">Ink</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", painting" id="icon4">
                  <label for="icon4">
                    <img src="assets/img/icons/icon4.png" alt="icon 4" style="width:100%; height: 100%;">
                    <p style="color:white">Painting</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", fantasy" id="icon5">
                  <label for="icon5">
                    <img src="assets/img/icons/icon5.png" alt="icon 5" style="width:100%; height: 100%;">
                    <p style="color:white">Fantasy</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", realistic" id="icon6">
                  <label for="icon6">
                    <img src="assets/img/icons/icon6.png" alt="icon 6" style="width:100%; height: 100%;">
                    <p style="color:white">Realistic</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", abstract" id="icon7">
                  <label for="icon7">
                    <img src="assets/img/icons/icon7.png" alt="icon 7" style="width:100%; height: 100%;">
                    <p style="color:white">Abstract</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", dystopian" id="icon8">
                  <label for="icon8">
                    <img src="assets/img/icons/icon8.png" alt="icon 8" style="width:100%; height: 100%;">
                    <p style="color:white">Dystopian</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", sci-fi" id="icon9">
                  <label for="icon9">
                    <img src="assets/img/icons/icon9.png" alt="icon 9" style="width:100%; height: 100%;">
                    <p style="color:white">Sci-Fi</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", vibrant" id="icon10">
                  <label for="icon10">
                    <img src="assets/img/icons/icon10.png" alt="icon 10" style="width:100%; height: 100%;">
                    <p style="color:white">Vibrant</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", spooky" id="icon11">
                  <label for="icon11">
                    <img src="assets/img/icons/icon11.png" alt="icon 11" style="width:100%; height: 100%;">
                    <p style="color:white">Spooky</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", futuristic" id="icon12">
                  <label for="icon12">
                    <img src="assets/img/icons/icon12.png" alt="icon 12" style="width:100%; height: 100%;">
                    <p style="color:white">Futuristic</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", disney" id="icon13">
                  <label for="icon13">
                    <img src="assets/img/icons/icon13.png" alt="icon 13" style="width:100%; height: 100%;">
                    <p style="color:white">Disney</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", retro" id="icon14">
                  <label for="icon14">
                    <img src="assets/img/icons/icon14.png" alt="icon 14" style="width:100%; height: 100%;">
                    <p style="color:white">Retro</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", unsettling" id="icon15">
                  <label for="icon15">
                    <img src="assets/img/icons/icon15.png" alt="icon 15" style="width:100%; height: 100%;">
                    <p style="color:white">Unsettling</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", surreal" id="icon16">
                  <label for="icon16">
                    <img src="assets/img/icons/icon16.png" alt="icon 16" style="width:100%; height: 100%;">
                    <p style="color:white">Surreal</p>
                  </label>
                </div>
                <div class="icon-box">
                  <input type="radio" name="icon" value=", steampunk" id="icon17">
                  <label for="icon17">
                    <img src="assets/img/icons/icon17.png" alt="icon 17" style="width:100%; height: 100%;">
                    <p style="color:white">Steampunk</p>
                  </label>
                </div>
              </div>
                
            </article>

          </div>
          
          
          <div class="generate_button_section">
            <button type="submit" id="generate-button" name="generate-button" style="border: 2px solid white;" class="button  rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" onclick="showLoadingScreen();">Generate</button>
          </div>
          
        </section>
        
      </form>


      <div id="popup1" class="overlay">
        <div class="popup">
          <h2>Order Summary</h2>
          <a class="close" href="#">&times;</a>
          <div class="pop-up-content">
            <!-- Thank to pop me out of that button, but now i'm done so you can close this window. -->
            <div class="order-summary-text">
              <h3> Account</h3>
              <img src="assets/img/visualnovel_logo_no_text-modified.png">
              <div class="account-name">
                <p style="padding-left: 3px;">
                <?php 
                if ( (isset($_SESSION['value1']) && isset($_SESSION['value2'])) ) {
                  echo $_SESSION['value2'];
                }
                else{
                  echo 'Guest';
                }
                  ?>
                  </p>
              </div>
            </div>
            <div class="tier-details">
              <div class="left-column">
                <div class="bottom-left">
                  <h3 style="color:black;">Tiers</h3>
                  <div class="bottom-left-tiers">
                    <div class="tier-icons">
                      <div class="icon-container">
                          <img src="assets/img/tiers/tier1.png" data-value="1"> 
                          <img src="assets/img/tiers/tier2.png" data-value="2">
                          <img src="assets/img/tiers/tier3.png" data-value="3">
                          
                          
                        </div>
                      </div>
                      
                    </div>
                    <?php if ( (isset($_SESSION['value1']) && isset($_SESSION['value2'])) ) {
                        echo '';
                      }
                      else{
                        echo '<a style="color:blue;" href="login.php">Or Login for more characters</a>';
                      }

                        ?>
                  </div>
              </div>
              <div class="right-column">
                <div class="top-right">
                  <h3 style="text-align: center; color:black;">Features and Details</h3>
                  <div class="top-right-bullet-points" style="color:black; position: relative;">
                    <ul>
                      <li>Please Select a tier</li>
                      <li>Each Tier Unlocks more characters</li>
                      <li>Allowing for more words to be visualised</li>
                    </ul>
                  </div>
                </div>
                
              </div>
              <div class="bottom-right">
                <!-- paypal -->
                <div id="paypal-payment-button"></div>
              </div>
            </div>
            



          </div>
        </div>
      </div>

   
</main>
</div>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/spark-md5@3.0.0/spark-md5.min.js"></script>

    
<script>

    function showLoadingScreen() {
      const loadingScreen = document.querySelector('#preloader_page');
      const pageContent = document.querySelector('#page-content');

      // hide page content and show loading screen
      pageContent.style.display = 'none';
      loadingScreen.style.display = 'block';

      // submit form
      document.getElementById('user-form').submit();

      
    }

    <?php 
    if ( (isset($_SESSION['value3']) ) ) {

      if ($_SESSION['value3'] == '2.00'){
        echo "

        $('textarea').keyup(function() {
          var characterCount = $(this).val().length,
          current = $('#current'),
          maximum = $('#maximum'),
          theCount = $('#the-count');
          
          current.text(characterCount);
          
          /This isn't entirely necessary, just playin around/
          if (characterCount < 10000) {
          current.css('color', '#666');
          }
          if (characterCount >= 10000 && characterCount < 20000) {
          current.css('color', '#6d5555');
          }
          if (characterCount >= 20000 && characterCount < 30000) {
          current.css('color', '#793535');
          }
          if (characterCount >= 30000 && characterCount < 40000) {
          current.css('color', '#841c1c');
          }
          if (characterCount >= 40000 && characterCount < 48000) {
          current.css('color', '#8f0001');
          }
          
          if (characterCount >= 48000) {
          maximum.css('color', '#8f0001');
          current.css('color', '#8f0001');
          theCount.css('font-weight','bold');
          } else {
          maximum.css('color','#666');
          theCount.css('font-weight','normal');
          }
          });
       
      
      ";

      } else if ($_SESSION['value3'] == '1.00'){
        echo "
        $('textarea').keyup(function() {
          var characterCount = $(this).val().length,
          current = $('#current'),
          maximum = $('#maximum'),
          theCount = $('#the-count');
          
          current.text(characterCount);
          
          /This isn't entirely necessary, just playin around/
          if (characterCount < 5000) {
          current.css('color', '#666');
          }
          if (characterCount >= 5000 && characterCount < 10000) {
          current.css('color', '#6d5555');
          }
          if (characterCount >= 10000 && characterCount < 15000) {
          current.css('color', '#793535');
          }
          if (characterCount >= 15000 && characterCount < 20000) {
          current.css('color', '#841c1c');
          }
          if (characterCount >= 20000 && characterCount < 24000) {
          current.css('color', '#8f0001');
          }
          
          if (characterCount >= 24000) {
          maximum.css('color', '#8f0001');
          current.css('color', '#8f0001');
          theCount.css('font-weight','bold');
          } else {
          maximum.css('color','#666');
          theCount.css('font-weight','normal');
          }
          });
      
      ";

      } else if ($_SESSION['value3'] == '0.50'){
        echo "
        $('textarea').keyup(function() {
          var characterCount = $(this).val().length,
              current = $('#current'),
              maximum = $('#maximum'),
              theCount = $('#the-count');
            
          current.text(characterCount);
         
          if (characterCount < 2000) {
          current.css('color', '#666');
          }
          if (characterCount >= 2000 && characterCount < 4000) {
          current.css('color', '#6d5555');
          }
          if (characterCount >= 4000 && characterCount < 6000) {
          current.css('color', '#793535');
          }
          if (characterCount >= 6000 && characterCount < 8000) {
          current.css('color', '#841c1c');
          }
          if (characterCount >= 8000 && characterCount < 9500) {
          current.css('color', '#8f0001');
          }
          
          if (characterCount >= 9500) {
          maximum.css('color', '#8f0001');
          current.css('color', '#8f0001');
          theCount.css('font-weight','bold');
          } else {
          maximum.css('color','#666');
          theCount.css('font-weight','normal');
          }
        }); 
      
      ";

      }

     

    } else if ( (isset($_SESSION['value1']) && isset($_SESSION['value2'])) ) {
      if ($_SESSION['value2'] == "tester"){
        echo "
        $('textarea').keyup(function() {
        
          var characterCount = $(this).val().length,
              current = $('#current'),
              maximum = $('#maximum'),
              theCount = $('#the-count');
            
          current.text(characterCount);
        
          
          /*This isn't entirely necessary, just playin around*/
          if (characterCount < 262060) {
            current.css('color', '#666');
          }
          if (characterCount > 262060 && characterCount < 262080) {
            current.css('color', '#6d5555');
          }
          if (characterCount > 262080 && characterCount < 262090) {
            current.css('color', '#793535');
          }
          if (characterCount > 262090 && characterCount < 262110) {
            current.css('color', '#841c1c');
          }
          if (characterCount > 262110 && characterCount < 262133) {
            current.css('color', '#8f0001');
          }
          
          if (characterCount >= 262134) {
            maximum.css('color', '#8f0001');
            current.css('color', '#8f0001');
            theCount.css('font-weight','bold');
          } else {
            maximum.css('color','#666');
            theCount.css('font-weight','normal');
          }
          
              
        });


        ";

      } else{
      
        echo "
        
        $('textarea').keyup(function() {
          var characterCount = $(this).val().length,
          current = $('#current'),
          maximum = $('#maximum'),
          theCount = $('#the-count');
          
          current.text(characterCount);
          
          /This isn't entirely necessary, just playin around/
          if (characterCount < 800) {
          current.css('color', '#666');
          }
          if (characterCount >= 800 && characterCount < 1600) {
          current.css('color', '#6d5555');
          }
          if (characterCount >= 1600 && characterCount < 2400) {
          current.css('color', '#793535');
          }
          if (characterCount >= 2400 && characterCount < 3200) {
          current.css('color', '#841c1c');
          }
          if (characterCount >= 3200 && characterCount < 3800) {
          current.css('color', '#8f0001');
          }
          
          if (characterCount >= 3800) {
          maximum.css('color', '#8f0001');
          current.css('color', '#8f0001');
          theCount.css('font-weight','bold');
          } else {
          maximum.css('color','#666');
          theCount.css('font-weight','normal');
          }
          });
        
        ";
      }

    } else{
       
    echo "
      $('textarea').keyup(function() {
      
        var characterCount = $(this).val().length,
            current = $('#current'),
            maximum = $('#maximum'),
            theCount = $('#the-count');
          
        current.text(characterCount);
      
        
        /*This isn't entirely necessary, just playin around*/
        if (characterCount < 700) {
        current.css('color', '#666');
        }
        if (characterCount >= 700 && characterCount < 900) {
        current.css('color', '#6d5555');
        }
        if (characterCount >= 900 && characterCount < 1000) {
        current.css('color', '#793535');
        }
        if (characterCount >= 1000 && characterCount < 1200) {
        current.css('color', '#841c1c');
        }
        if (characterCount >= 1200 && characterCount < 1390) {
        current.css('color', '#8f0001');
        }
        
        if (characterCount >= 1400) {
        maximum.css('color', '#8f0001');
        current.css('color', '#8f0001');
        theCount.css('font-weight','bold');
        } else {
        maximum.css('color','#666');
        theCount.css('font-weight','normal');
        }
      
            
      });
      ";
    }
    ?>
</script>

<script> 
const inputText = document.getElementById('input_text');
const maxLength = inputText.getAttribute('maxlength');
const popup = document.querySelector('#popup1');

inputText.addEventListener('input', () => {
  if (inputText.value.length >= maxLength) {
    window.location.href = `#${popup.id}`;
  }
});



</script>


<script> 
  var selectedValue = null;
  var selectedIcon = null;
  var amounts = {
  1: "0.50",
  2: "1.00",
  3: "2.00"
  };
  var bulletPoints = {
  1: ["Unlock 10,000 Characters", "Approximately 1500 words", "Cost: £0.5"],
  2: ["Unlock 25,000 Characters", "Approximately 4000 words", "Cost: £1.0"],
  3: ["Additional 50,000 Characters", "Approximately 9000 words", "Cost: £2.0"],
  4: ["Additional 20000 Characters", "Approximately 4000 words", "Login"]
  };
  var iconElements = document.querySelectorAll(".icon-container img");
  var bulletPointsElement = document.querySelector(".top-right-bullet-points ul");
  iconElements.forEach(function(element) {
  element.addEventListener("click", function() {
    if (selectedIcon !== null) {
    selectedIcon.classList.remove("selected");
    }
    selectedValue = element.dataset.value;
    selectedIcon = element;
    selectedIcon.classList.add("selected");
    console.log(selectedValue);
    bulletPointsElement.innerHTML = ""; // clear existing bullet points
    bulletPoints[selectedValue].forEach(function(point) {
    var li = document.createElement("li");
    li.textContent = point;
    bulletPointsElement.appendChild(li);
    });
  });
  });

  


</script>

<!-- JS here -->


    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <!-- <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>

