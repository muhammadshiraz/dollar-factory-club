<?php
  $title = "Create Account";
  $bodyclass = "innerpage hide-header-footer";
  include "./layouts/header.php";
?>
<section class="poppins create-account h-screen">
    <div class="flex flex-row h-full justify-center items-center">
        <div class="basis-2/3 bg-[#001B44] h-full w-full flex flex-col justify-between items-center">
            <a href="http://localhost/dollar-factory-club" class="my-12"><img src="./assets/images/logo.svg" class="xl:w-60 w-40 mx-auto" alt="Dollar Factory Club" /></a>
            <div class="flex flex-col justify-center items-start gap-y-4 px-12 mb-8">
              <h3 class="text-white text-3xl font-semibold text-left">Learn. Grow. Succeed</h3>
              <p class="text-[#02D7BD] text-base font-normal text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. DFC text has been the industry.</p>
            </div>
            <div class="flex flex-col w-full">
              <img src="./assets/images/learn-grow-succeed.png" class="mx-auto px-8" alt="Learn. Grow. Succeed" />
              <div class="flex flex-col gap-y-1 justify-center items-center bg-[#01327B] py-3 w-full h-max">
                <h5 class="text-white text-lg font-semibold">Join our community!</h5>
                <p class="text-white text-sm font-normal text-center">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
              </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-start w-full px-44">
          <div class="flex flex-col justify-between items-start gap-y-2 mb-8 w-full">
            <h3 class="text-white text-3xl font-semibold text-left">Create Account</h3>
            <p class="text-white text-base font-normal text-left">Enter your information to setup a new account.</p>
            <nav id="create-account-nav" class="create-account-nav flex flex-col justify-center items-start capitalize py-2 w-full text-lg mt-5">
              <ul class="flex flex-row gap-x-10 pb-3">
                <li class="xl:w-max w-full text-center text-white">
                  <a href="#tab1" class="active font-semibold">Phone</a>
                </li>
                <li class="xl:w-max w-full text-center text-white">
                  <a href="#tab2" class="disable font-normal">Email</a>
                </li>
              </ul>
              <img src="./assets/images/bottom-line.png" class="" alt="Create Account" />              
            </nav>
            <div class="ca-tab-content-wrapper w-full mt-5">
              <div id="tab1" class="tab-content w-full">
                <form class="w-full">
                  <div class="form-group flex flex-col justify-center items-start gap-y-3 mb-7">
                    <input type="email" id="email" name="email" placeholder="Enter your Email address" class="w-full py-3.5 px-3">
                  </div>
                  <div class="form-group flex flex-col justify-center items-start gap-y-3">
                    <input type="password" id="password" name="password" placeholder="Password" class="w-full py-3.5 px-3">
                  </div>
                  <?php $acclassname = "mt-12"; include "./components/button/create-my-account.php"; ?>
                </form>                
                <div class="flex flex-row gap-x-2 justify-start items-center text-base mt-3 border-b-[1px] border-solid border-[#0A5898] pb-5">
                  <span class="text-white text-left">Already have an account?</span>
                  <button type="button" class="text-[#00FF94]">Log in</button>
                </div>
                <div class="flex flex-row gap-x-5 justify-start items-center pt-5 mb-8">
                  <span class="text-sm text-white font-normal">Or Login with</span>
                  <div class="flex flex-row gap-x-4 justify-center items-center">
                    <a href="#"><img src="./assets/images/telegram.png" class="mx-auto" alt="Telegram" /></a>
                    <a href="#"><img src="./assets/images/google.png" class="mx-auto" alt="Google" /></a>
                  </div>
                </div>
                <div class="flex flex-row justify-start items-center">
                  <p class="text-white font-normal text-sm">By creating an account, I agree to DFC <span class="underline">terms of service</span> and <span class="underline">privacy policy</span></p>
                </div>
              </div>
              <div id="tab2" class="tab-content">
                <h2>Email content</h2>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<?php
  include "./layouts/footer.php";
?>