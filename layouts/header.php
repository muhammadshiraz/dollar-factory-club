<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
    <title><?php echo $title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/sass/style.css">
    <script src="https://cdn.tailwindcss.com"></script>    
  </head>
<body class="<?php echo $bodyclass; ?>">
  <header class="py-5">
    <div class="lg:container mx-auto lg:px-24">
      <div class="flex flex-row justify-between items-center">
        <a href="http://localhost/dollar-factory-club"><img src="./assets/images/logo.svg" class="lg:w-60" alt="Dollar Factory Club" /></a>
        <div class="flex flex-row justify-end items-center">
          <nav class="mr-5">
            <ul class="poppins text-white text-base font-medium flex flex-row gap-5">
              <li><a href="about">About us</a><li>
              <li><a href="learn-earn" class="flex flex-row justify-between items-center gap-2">Learn & Earn <img src="./assets/images/menu-dropdown.png" alt="Learn & Earn" /></a><li>
              <li><a href="pricing">Pricing</a><li>
              <li><a href="help" class="flex flex-row justify-between items-center gap-2">Help <img src="./assets/images/menu-dropdown.png" alt="Help" /></a></li>
            </ul>
          </nav>          
          <div class="border-line mr-5"></div>
          <div class="flex flex-row poppins gap-5">
            <button type="button" onclick="location.href = 'login.php';" class="text-white text-base font-medium">Log In</button>
            <button type="button" onclick="location.href = 'sign-up.php';" id="signup-btn" class="text-white text-base font-medium px-5 py-2">Sign Up</button>
          </div>
        </div>
      </div>
    <div>
  </header>
  <main>