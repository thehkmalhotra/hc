<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
   session_start();
   include_once 'functions.php';
   include_once 'css/style.php';
   require_once 'js/script.php';
   
   if(!isset($_SESSION['IS_LOGIN'])){
           redirect("/login");
   }
   $username = $_SESSION['username'];
   $password = $_SESSION['password'];
   $info = getLoggedIn($username,$password);
   ?>
<!-- Starting Of Dashboard Header Container -->
<div class="x8gh3-container">
  <div class="x7sh3-container">
   <div class="r8esc-container" style="width: 40%; float: left;">
      <?php echo '<span class="x3pve">' . "Hi" . " " . $info['firstname'] . " " . $info['lastname'] . " " . "👋" . '</span>';?> 
   </div>
   <div class="qu5rg-container" id="qu5rg-container" style="width: 60%; float: left;">
      <svg class="o2wli" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M5.07695 5.24219H8.98465C9.0951 5.24219 9.18465 5.33173 9.18465 5.44219V9.28461C9.18465 9.39507 9.0951 9.48461 8.98465 9.48461H5.07695C4.9665 9.48461 4.87695 9.39507 4.87695 9.28461V5.44219C4.87695 5.33173 4.9665 5.24219 5.07695 5.24219Z" stroke="black" stroke-width="1.5"/>
         <path d="M5.07695 20.5151H8.98465C9.0951 20.5151 9.18465 20.6047 9.18465 20.7151V24.5576C9.18465 24.668 9.0951 24.7576 8.98465 24.7576H5.07695C4.9665 24.7576 4.87695 24.668 4.87695 24.5576V20.7151C4.87695 20.6047 4.9665 20.5151 5.07695 20.5151Z" stroke="black" stroke-width="1.5"/>
         <path d="M21.4461 5.24219H25.3538C25.4642 5.24219 25.5538 5.33173 25.5538 5.44219V9.28461C25.5538 9.39507 25.4642 9.48461 25.3538 9.48461H21.4461C21.3356 9.48461 21.2461 9.39507 21.2461 9.28461V5.44219C21.2461 5.33173 21.3356 5.24219 21.4461 5.24219Z" stroke="black" stroke-width="1.5"/>
         <path d="M21.4461 20.5151H25.3538C25.4642 20.5151 25.5538 20.6047 25.5538 20.7151V24.5576C25.5538 24.668 25.4642 24.7576 25.3538 24.7576H21.4461C21.3356 24.7576 21.2461 24.668 21.2461 24.5576V20.7151C21.2461 20.6047 21.3356 20.5151 21.4461 20.5151Z" stroke="black" stroke-width="1.5"/>
         <path d="M15.6465 4.81787V8.8603C15.6465 8.97075 15.5569 9.0603 15.4465 9.0603H12.8311C12.7207 9.0603 12.6311 9.14984 12.6311 9.2603V14.7997C12.6311 14.9101 12.5416 14.9997 12.4311 14.9997H9.61572" stroke="black" stroke-width="1.5"/>
         <path d="M4.44629 15C4.44629 15 6.28409 15 7.46167 15" stroke="black" stroke-width="1.5"/>
         <path d="M6.6 1H3.2C1.98497 1 1 1.98497 1 3.2V6.93939" stroke="black" stroke-width="1.5"/>
         <path d="M23.4 1H26.8C28.015 1 29 1.98497 29 3.2V6.93939" stroke="black" stroke-width="1.5"/>
         <path d="M6.6 29H3.2C1.98497 29 1 28.015 1 26.8V23.0606" stroke="black" stroke-width="1.5"/>
         <path d="M23.4 29H26.8C28.015 29 29 28.015 29 26.8V23.0606" stroke="black" stroke-width="1.5"/>
         <path d="M17.7998 12.8784H22.3383C22.4487 12.8784 22.5383 12.968 22.5383 13.0784V15.6481C22.5383 15.7586 22.6278 15.8481 22.7383 15.8481H25.9844" stroke="black" stroke-width="1.5"/>
         <path d="M16.077 17.1216V22.4367C16.077 22.5472 15.9875 22.6367 15.877 22.6367H12.8309C12.7204 22.6367 12.6309 22.7263 12.6309 22.8367V25.6064" stroke="black" stroke-width="1.5"/>
      </svg>
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="qr-code"> </svg>
      <img src="https://cdn.hypeauditor.com/img/instagram/user/1412753185.jpg?w=150&till=1636668000&sign=4e3b217771e39da147dee000f8bb067d" class="avatar"> 
   </div>
</div>
<!-- End Of Dashboard Header Container -->
<!-- Starting Of Dashboard Menu Bar Container -->
<div class="v4yzn-container">
   <div id="w9dk0-container" class="active-bar">
      <svg class="active" id="home-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" display="flex" height="32px" width="32px" fill="#D6D6D6C4">
         <path d="M38.22,17l-1.95-1.59V10.16a1.4,1.4,0,1,0-2.79,0v2.93L28.43,9a7,7,0,0,0-8.86,0L9.78,17a6.92,6.92,0,0,0-2.56,5.38v11.3a7,7,0,0,0,7,7H33.79a7,7,0,0,0,7-7V22.34A6.92,6.92,0,0,0,38.22,17ZM19.81,37.83V28.15a4.2,4.2,0,0,1,8.39,0v9.68ZM38,33.64a4.2,4.2,0,0,1-4.19,4.19H31V28.15a7,7,0,0,0-14,0v9.68h-2.8A4.2,4.2,0,0,1,10,33.64V22.34a4.19,4.19,0,0,1,1.54-3.25l9.79-8a4.21,4.21,0,0,1,5.3,0l9.79,8A4.19,4.19,0,0,1,38,22.34Z">
      </svg>
   </div>
   <div id="er12n-container">
      <svg id="campaigns-btn" xmlns="http://www.w3.org/2000/svg" viewBox="-3 -6 32 35" display="flex" height="24px" width="24px" stroke="#D6D6D6C4" stroke-width="2.2">
         <path d="M0 13.5H6.25047C6.70934 13.5 7.10933 13.1877 7.22062 12.7425L9.94924 1.82805C10.0005 1.62295 10.2935 1.62729 10.3386 1.83381L15.4638 25.2629C15.5076 25.4634 15.7888 25.4757 15.85 25.2799L19.0927 14.9035C19.3536 14.0685 20.1269 13.5 21.0016 13.5H25" />
      </svg>
   </div>
   <div id="g081u-container">
      <svg id="create-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 -5 32 32" display="flex" height="24px" width="24px" fill="#D6D6D6C4">
         <path d="M28,15H17V4a1,1,0,0,0-2,0V15H4a1,1,0,0,0,0,2H15V28a1,1,0,0,0,2,0V17H28a1,1,0,0,0,0-2Z" />
      </svg>
   </div>
   <div id="bouc4-container">
      <svg id="wallet-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 25 50" display="flex" height="58px" width="58px" fill="#D6D6D6C4">
         <path d="M21.75,8l-0,8c-0,2.623 -2.127,4.75 -4.75,4.75c-2.977,0 -7.023,0 -10,0c-2.623,0 -4.75,-2.127 -4.75,-4.75c0,-2.443 0,-5.557 0,-8c0,-2.623 2.127,-4.75 4.75,-4.75c2.977,0 7.023,0 10,-0c2.623,-0 4.75,2.127 4.75,4.75Zm-1.5,1.25l0,-1.25c-0,-1.795 -1.455,-3.25 -3.25,-3.25c-2.977,0 -7.023,0 -10,-0c-1.795,-0 -3.25,1.455 -3.25,3.25c0,2.443 0,5.557 -0,8c0,1.795 1.455,3.25 3.25,3.25c2.977,0 7.023,0 10,0c1.795,0 3.25,-1.455 3.25,-3.25l-0,-1.25l-3.252,0c-1.518,-0 -2.748,-1.23 -2.748,-2.748c0,-0.001 0,-0.003 0,-0.004c0,-1.518 1.23,-2.748 2.748,-2.748l3.252,0Zm-0,1.5l-3.252,-0c-0.689,0 -1.248,0.559 -1.248,1.248c0,0.001 0,0.003 0,0.004c0,0.689 0.559,1.248 1.248,1.248l3.252,0l-0,-2.5Z">
      </svg>
   </div>
   <div id="yup0b-container">
      <svg id="profile-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 -5 100 100" display="flex" height="26px" width="26px" fill="#D6D6D6C4">
         <path d="M50,42c-4.41,0-8,3.59-8,8s3.59,8,8,8s8-3.59,8-8S54.41,42,50,42z M50,54c-2.21,0-4-1.79-4-4c0-2.21,1.79-4,4-4  c2.21,0,4,1.79,4,4C54,52.21,52.21,54,50,54z M93,52c1.1,0,2-0.9,2-2s-0.9-2-2-2h-4.05c-0.11-2.07-0.38-4.1-0.79-6.07l3.92-1.04  c1.07-0.28,1.7-1.38,1.42-2.45c-0.28-1.07-1.38-1.7-2.45-1.42l-3.92,1.04c-0.6-1.85-1.33-3.64-2.18-5.36l3.54-1.99  c0.96-0.54,1.31-1.76,0.77-2.72c-0.54-0.96-1.76-1.31-2.72-0.77l-3.55,1.99c-1.2-1.89-2.54-3.68-4.04-5.33l2.88-2.88  c0.78-0.78,0.78-2.05,0-2.83c-0.78-0.78-2.05-0.78-2.83,0l-2.88,2.88c-1.65-1.49-3.44-2.84-5.33-4.04l1.99-3.55  c0.54-0.96,0.2-2.18-0.77-2.72c-0.96-0.54-2.18-0.2-2.72,0.77l-1.99,3.54c-1.72-0.86-3.51-1.59-5.36-2.18l1.04-3.92  c0.28-1.07-0.35-2.16-1.42-2.45c-1.07-0.28-2.16,0.35-2.45,1.42l-1.04,3.92c-1.97-0.42-4-0.69-6.07-0.79V7c0-1.1-0.9-2-2-2  s-2,0.9-2,2v4.05c-2.07,0.11-4.1,0.38-6.07,0.79l-1.04-3.92c-0.28-1.07-1.38-1.7-2.45-1.42c-1.07,0.28-1.7,1.38-1.42,2.45l1.04,3.92  c-1.85,0.6-3.64,1.33-5.36,2.18l-1.99-3.54c-0.54-0.96-1.76-1.31-2.72-0.77c-0.96,0.54-1.31,1.76-0.77,2.72l1.99,3.55  c-1.89,1.2-3.68,2.54-5.33,4.04l-2.88-2.88c-0.78-0.78-2.05-0.78-2.83,0c-0.78,0.78-0.78,2.05,0,2.83l2.88,2.88  c-1.49,1.65-2.84,3.44-4.04,5.33l-3.55-1.99c-0.96-0.54-2.18-0.2-2.72,0.77c-0.54,0.96-0.2,2.18,0.77,2.72l3.54,1.99  c-0.85,1.72-1.59,3.51-2.18,5.36l-3.92-1.04c-1.06-0.28-2.16,0.35-2.45,1.42c-0.28,1.07,0.35,2.16,1.42,2.45l3.92,1.04  c-0.42,1.97-0.69,4-0.79,6.07H7c-1.1,0-2,0.9-2,2s0.9,2,2,2h4.05c0.11,2.07,0.38,4.1,0.79,6.07l-3.92,1.04  c-1.07,0.28-1.7,1.38-1.42,2.45c0.24,0.9,1.05,1.49,1.93,1.49c0.17,0,0.34-0.02,0.52-0.07l3.92-1.04c0.6,1.85,1.33,3.64,2.18,5.36  l-3.54,1.99c-0.96,0.54-1.31,1.76-0.77,2.72c0.37,0.65,1.05,1.02,1.75,1.02c0.33,0,0.67-0.08,0.98-0.26l3.55-1.99  c1.2,1.89,2.54,3.68,4.04,5.33l-2.88,2.88c-0.78,0.78-0.78,2.05,0,2.83c0.39,0.39,0.9,0.59,1.41,0.59s1.02-0.2,1.41-0.59l2.88-2.88  c1.65,1.49,3.44,2.84,5.33,4.04l-1.99,3.55c-0.54,0.96-0.2,2.18,0.77,2.72c0.31,0.17,0.65,0.26,0.98,0.26c0.7,0,1.38-0.37,1.75-1.02  l1.99-3.54c1.72,0.85,3.51,1.59,5.36,2.18l-1.04,3.92c-0.28,1.07,0.35,2.16,1.42,2.45c0.17,0.05,0.34,0.07,0.52,0.07  c0.88,0,1.69-0.59,1.93-1.49l1.04-3.92c1.97,0.42,4,0.69,6.07,0.79V93c0,1.1,0.9,2,2,2s2-0.9,2-2v-4.05  c2.07-0.11,4.1-0.38,6.07-0.79l1.04,3.92c0.24,0.9,1.05,1.49,1.93,1.49c0.17,0,0.34-0.02,0.51-0.07c1.07-0.28,1.7-1.38,1.42-2.45  l-1.04-3.92c1.85-0.6,3.64-1.33,5.36-2.18l1.99,3.54c0.37,0.65,1.05,1.02,1.75,1.02c0.33,0,0.67-0.08,0.98-0.26  c0.96-0.54,1.31-1.76,0.77-2.72l-1.99-3.55c1.89-1.2,3.68-2.54,5.33-4.04l2.88,2.88c0.39,0.39,0.9,0.59,1.41,0.59  s1.02-0.2,1.41-0.59c0.78-0.78,0.78-2.05,0-2.83l-2.88-2.88c1.49-1.65,2.84-3.44,4.04-5.33l3.55,1.99c0.31,0.17,0.64,0.26,0.98,0.26  c0.7,0,1.38-0.37,1.75-1.02c0.54-0.96,0.2-2.18-0.77-2.72l-3.54-1.99c0.86-1.72,1.59-3.51,2.18-5.36l3.92,1.04  c0.17,0.05,0.34,0.07,0.51,0.07c0.88,0,1.69-0.59,1.93-1.49c0.28-1.07-0.35-2.16-1.42-2.45l-3.92-1.04c0.42-1.97,0.69-4,0.79-6.07  H93z M50,85c-12.35,0-23.22-6.43-29.45-16.12l16.73-9.2C40.21,63.51,44.82,66,50,66s9.79-2.49,12.71-6.33l16.73,9.2  C73.22,78.57,62.35,85,50,85z M15,50c0-18.63,14.63-33.9,33-34.94v19.08C40.12,35.13,34,41.86,34,50c0,2.21,0.45,4.31,1.26,6.22  L18.58,65.4C16.29,60.75,15,55.52,15,50z M50,62c-6.62,0-12-5.38-12-12c0-6.62,5.38-12,12-12c6.62,0,12,5.38,12,12  C62,56.62,56.62,62,50,62z M64.74,56.22C65.55,54.31,66,52.21,66,50c0-8.14-6.12-14.87-14-15.86V15.06C70.37,16.1,85,31.37,85,50  c0,5.52-1.29,10.75-3.58,15.4L64.74,56.22z">
      </svg>
   </div>
</div>
</div>
<!-- End Of Dashboard Menu Bar Container -->
<!-- Starting Of Dashboard Container -->
<div class="qipe7-container" id="qipe7-container">
   <!-- Starting Of Dashboard Critical Notifications Container -->
   <div class="m9kth-container" id="m9kth-container">
      <h class="p7xvc"> Critical Notification </h>
      <div class="ew9u1-container">
         <div class="y13nd-container">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect width="45" height="45" rx="10" fill="#000" />
               <path d="M25.236 12.19L24.636 26.56H20.286L19.686 12.19H25.236ZM22.536 34.24C21.636 34.24 20.896 33.98 20.316 33.46C19.756 32.92 19.476 32.26 19.476 31.48C19.476 30.68 19.756 30.01 20.316 29.47C20.896 28.93 21.636 28.66 22.536 28.66C23.416 28.66 24.136 28.93 24.696 29.47C25.276 30.01 25.566 30.68 25.566 31.48C25.566 32.26 25.276 32.92 24.696 33.46C24.136 33.98 23.416 34.24 22.536 34.24Z" fill="white" />
            </svg>
            <div class="gb4lj-container">
               <h class="notification-title">Instagram is not connected</h>
               <br>
               <h class="notification-timestamp">August 4, 21 2:00AM</h>
            </div>
         </div>
         <div class="y13nd-container">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect width="45" height="45" rx="10" fill="#000" />
               <path d="M25.236 12.19L24.636 26.56H20.286L19.686 12.19H25.236ZM22.536 34.24C21.636 34.24 20.896 33.98 20.316 33.46C19.756 32.92 19.476 32.26 19.476 31.48C19.476 30.68 19.756 30.01 20.316 29.47C20.896 28.93 21.636 28.66 22.536 28.66C23.416 28.66 24.136 28.93 24.696 29.47C25.276 30.01 25.566 30.68 25.566 31.48C25.566 32.26 25.276 32.92 24.696 33.46C24.136 33.98 23.416 34.24 22.536 34.24Z" fill="white" />
            </svg>
            <div class="gb4lj-container">
               <h class="notification-title">No payment option found</h>
               <br>
               <h class="notification-timestamp">August 4, 21 2:00AM</h>
            </div>
         </div>
         <div class="y13nd-container">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect width="45" height="45" rx="10" fill="#000" />
               <path d="M25.236 12.19L24.636 26.56H20.286L19.686 12.19H25.236ZM22.536 34.24C21.636 34.24 20.896 33.98 20.316 33.46C19.756 32.92 19.476 32.26 19.476 31.48C19.476 30.68 19.756 30.01 20.316 29.47C20.896 28.93 21.636 28.66 22.536 28.66C23.416 28.66 24.136 28.93 24.696 29.47C25.276 30.01 25.566 30.68 25.566 31.48C25.566 32.26 25.276 32.92 24.696 33.46C24.136 33.98 23.416 34.24 22.536 34.24Z" fill="white" />
            </svg>
            <div class="gb4lj-container">
               <h class="notification-title">Profile is incomplete</h>
               <br>
               <h class="notification-timestamp">August 4, 21 2:00AM</h>
            </div>
         </div>
      </div>
   </div>
   <!-- End Of Dashboard Critical Notifications Container -->
   <!-- Starting Of Dashboard Revenue Sources Container -->
   <div class="giw0a-container">
      <div class="active-source" style="width: 33.3333%; float: left;"  id="o2wte-container">
         <h class="h1"> Hashies </h>
      </div>
      <div style="width: 33.3333%; float: left;" id="l8su3-container">
         <h class="h1"> Merchandise </h>
      </div>
      <div style="width: 33.3333%; float: left;" id="fzth6-container">
         <h class="h1"> Events </h>
      </div>
   </div>
   <!-- Hashies Revenue Source -->
   <div class="hoe25-container" id="hoe25-container">
      <svg width="20" height="20" viewBox="0 0 26 26" fill="#FFF" xmlns="http://www.w3.org/2000/svg" class="add-hashies">
         <path d="M24.7419 11.7419H14.2581V1.25806C14.2581 0.563101 13.695 0 13 0C12.305 0 11.7419 0.563101 11.7419 1.25806V11.7419H1.25806C0.563101 11.7419 0 12.305 0 13C0 13.695 0.563101 14.2581 1.25806 14.2581H11.7419V24.7419C11.7419 25.4369 12.305 26 13 26C13.695 26 14.2581 25.4369 14.2581 24.7419V14.2581H24.7419C25.4369 14.2581 26 13.695 26 13C26 12.305 25.4369 11.7419 24.7419 11.7419Z" fill="#FFF"/>
      </svg>
      <div class="uh9ni-container">
         <div class="total"> Total Hashies
         </div>
         <div class="counts"> 10
         </div>
      </div>
      <div class="uh9ni-container">
         <div class="total"> Hashies Subscriptions
         </div>
         <div class="counts"> 10
         </div>
      </div>
      <div class="uh9ni-container">
         <div class="total"> Hashies Qeued
         </div>
         <div class="counts"> 10
         </div>
      </div>
   </div>
   <!-- End Of Hashies Revenue Source -->
   <!-- Merchandise Revenue Source -->
   <div class="az1si-container" id="az1si-container">
      <svg width="20" height="20" viewBox="0 0 26 26" fill="#FFF" xmlns="http://www.w3.org/2000/svg" class="add-hashies">
         <path d="M24.7419 11.7419H14.2581V1.25806C14.2581 0.563101 13.695 0 13 0C12.305 0 11.7419 0.563101 11.7419 1.25806V11.7419H1.25806C0.563101 11.7419 0 12.305 0 13C0 13.695 0.563101 14.2581 1.25806 14.2581H11.7419V24.7419C11.7419 25.4369 12.305 26 13 26C13.695 26 14.2581 25.4369 14.2581 24.7419V14.2581H24.7419C25.4369 14.2581 26 13.695 26 13C26 12.305 25.4369 11.7419 24.7419 11.7419Z" fill="#FFF"/>
      </svg>
      <div class="uh9ni-container">
         <div class="total"> Total Merchandise
         </div>
         <div class="counts"> 10
         </div>
      </div>
      <div class="uh9ni-container">
         <div class="total"> Total Merchandise
         </div>
         <div class="counts"> 10
         </div>
      </div>
      <div class="uh9ni-container">
         <div class="total"> Total Merchandise
         </div>
         <div class="counts"> 10
         </div>
      </div>
   </div>
   <!-- End Of Merchandise Revenue Source -->
   <!-- Merchandise Events Source -->
   <div class="yekb4-container" id="yekb4-container">
      <svg width="20" height="20" viewBox="0 0 26 26" fill="#FFF" xmlns="http://www.w3.org/2000/svg" class="add-hashies">
         <path d="M24.7419 11.7419H14.2581V1.25806C14.2581 0.563101 13.695 0 13 0C12.305 0 11.7419 0.563101 11.7419 1.25806V11.7419H1.25806C0.563101 11.7419 0 12.305 0 13C0 13.695 0.563101 14.2581 1.25806 14.2581H11.7419V24.7419C11.7419 25.4369 12.305 26 13 26C13.695 26 14.2581 25.4369 14.2581 24.7419V14.2581H24.7419C25.4369 14.2581 26 13.695 26 13C26 12.305 25.4369 11.7419 24.7419 11.7419Z" fill="#FFF"/>
      </svg>
      <div class="uh9ni-container">
         <div class="total"> Total Events
         </div>
         <div class="counts"> 10
         </div>
      </div>
      <div class="uh9ni-container">
         <div class="total"> Total Events
         </div>
         <div class="counts"> 10
         </div>
      </div>
      <div class="uh9ni-container">
         <div class="total"> Total Events
         </div>
         <div class="counts"> 10
         </div>
      </div>
   </div>
   <!-- End Of Merchandise Events Source -->
   <!-- End Of Dashboard Revenue Sources Container -->
</div>
<!-- End Of Dashboard -->
<!-- Starting Of Campaigns Container -->
<div class="rogj8-container" id="rogj8-container">
   Campaigns
</div>
<!-- End Of Campaigns -->
<!-- Starting Of Create Container -->
<div class="f9zkb-container" id="f9zkb-container">
   Create
</div>
<!-- End Of Create -->
<!-- Starting Of Wallet Container -->
<div class="m9q3w-container" id="m9q3w-container">
   Wallet
</div>
<!-- End Of Wallet -->
<!-- Starting Of Profile Container -->
<div class="b24ak-container" id="b24ak-container">
   Profile
</div>
<!-- End Of Profile -->