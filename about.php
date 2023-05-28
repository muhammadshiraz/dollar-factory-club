<?php
  $title = "About";
  $bodyclass = "innerpage";
  include "./layouts/header.php";
?>
<?php $title = "About us"; include "./components/banner/index.php"; ?>
<section class="makes-us-different poppins xl:my-40 my-24">
  <div class="container mx-auto xl:px-24 px-9">
    <div class="grid xl:grid-cols-2 grid-cols-1 gap-20">
      <img src="./assets/images/with-you-every-step-of-the-way.png" alt="With you every step of the way" />
      <div class="flex flex-col justify-center items-start gap-5">      
        <h2 class="text-white xl:text-4xl text-2xl font-semibold leading-snug">With you every <br /> step of the way</h2>
        <p class="text-base font-normal text-white text-left leading-relaxed">Lorem Ipsum is simply dummy text of the printing and <br /> typesetting industry.</p>
        <p class="text-base font-normal text-white text-left leading-relaxed">Lorem Ipsum has been the industry's standard dummy <br /> text ever since the 1500s</p>
        <div class="flex flex-row justify-center items-center gap-8 xl:mt-5 mt-3 xl:w-max w-full">
          <?php include "./components/button/get-started-02.php"; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="poppins relative pb-12 outperform-even-sample">
  <div class="container mx-auto xl:px-24 px-9">
    <div class="grid xl:grid-cols-2 grid-cols-1 gap-x-12 xl:gap-y-0 gap-y-12">
      <div class="col-span-1">
        <h3 class="xl:text-4xl text-2xl text-white text-left font-semibold leading-snug">We outperform <br /> even sample</h3>
        <p class="text-base font-normal text-white text-left leading-relaxed my-5 xl:w-2/3 w-full">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>            
        <div class="flex xl:flex-row flex-col xl:gap-y-0 gap-y-5 gap-x-8 justify-start items-center xl:mt-8 mt-5">
          <?php include "./components/button/get-started-02.php"; ?>
          <button type="button" class="text-white xl:text-lg text-base font-medium px-6 py-4 flex flex-row justify-center items-center transparent-btn xl:w-max w-full">Explore Courses</button>
        </div>
      </div>
      <div class="col-span-1">
        <img src="./assets/images/chart.svg" alt="We outperform even sample" />
      </div>
    </div>
  </div>
</section>
<section class="poppins relative xl:py-24 py-12 how-can-you-join-us">
  <h3 class="xl:text-4xl text-2xl text-white text-center font-semibold leading-snug mb-5 xl:px-0 px-12">How can you <span class="text-[#2880FF]">join us?</span></h3>
  <p class="text-base font-normal text-white text-center leading-relaxed xl:px-0 px-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br /> Lorem Ipsum has been the industry's standard dummy text.</p>
  <div class="container mx-auto xl:px-24 px-9 xl:my-16 my-8">
    <div class="grid xl:grid-cols-3 grid-cols-1 xl:gap-16 gap-8 xl:px-16 px-0">
      <div class="flex flex-col justify-between items-center bg-[#051225] rounded-[24px] py-16 px-10">
        <img src="./assets/images/buy-courses-icon.svg" alt="Buy Courses" />
        <div class="flex flex-col justify-between items-center w-full mt-7">
          <h4 class="text-white font-semibold text-xl mb-8">Buy Courses</h4>
          <p class="text-sm font-normal text-white leading-relaxed text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
      </div>
      <div class="flex flex-col justify-between items-center bg-[#2374E9] rounded-[24px] py-16 px-10 join-community-box">
        <img src="./assets/images/join-community-icon.svg" alt="Join Community" />
        <div class="flex flex-col justify-between items-center w-full mt-7">
          <h4 class="text-white font-semibold text-xl mb-8">Join Community</h4>
          <p class="text-sm font-normal text-white leading-relaxed text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
      </div>
      <div class="flex flex-col justify-between items-center bg-[#051225] rounded-[24px] py-16 px-10">
        <img src="./assets/images/monthly-subscription.svg" alt="Monthly Subscription" />
        <div class="flex flex-col justify-between items-center w-full mt-7">
          <h4 class="text-white font-semibold text-xl mb-8">Monthly Subscription</h4>
          <p class="text-sm font-normal text-white leading-relaxed text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
      </div>
    </div>
    <div class="flex xl:flex-row flex-col justify-center items-center xl:gap-8 gap-5 xl:mt-20 mt-8 xl:w-max w-full mx-auto">
      <?php include "./components/button/get-started-02.php"; ?>
    </div>
  </div>
  <img src="./assets/images/full-wavy.png" class="w-full absolute bottom-0 z-[-1]" alt="How can you join us?" />
</section>
<?php include "./components/ultimate-featues/index.php"; ?>
<section class="poppins faq xl:my-48 my-24">
  <div class="container mx-auto xl:px-24 px-9">
    <h3 class="xl:text-4xl text-2xl text-white text-center font-semibold mb-16"><span class="text-[#00FF94]">Got Questions?</span> We have <br/> your answers</h3>
    <ul class="accordion-list">
        <li>
            <h3 class="flex flex-row justify-start items-center"><img src="./assets/images/plus.svg" alt="How much profit can i make?" /><span class="xl:ml-16 ml-8 xl:text-base text-sm">How much profit can i make?</span></h3>
            <div class="accordion-content">
                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
            </div>
        </li>
        <li>
            <h3 class="flex flex-row justify-start items-center"><img src="./assets/images/plus.svg" alt="How much profit can i make?" /><span class="xl:ml-16 ml-8 xl:text-base text-sm">How much profit can i make?</span></h3>
            <div class="accordion-content">
                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
            </div>
        </li>
        <li>
            <h3 class="flex flex-row justify-start items-center"><img src="./assets/images/plus.svg" alt="How much profit can i make?" /><span class="xl:ml-16 ml-8 xl:text-base text-sm">How much profit can i make?</span></h3>
            <div class="accordion-content">
                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
            </div>
        </li>
        <li>
            <h3 class="flex flex-row justify-start items-center"><img src="./assets/images/plus.svg" alt="How much profit can i make?" /><span class="xl:ml-16 ml-8 xl:text-base text-sm">How much profit can i make?</span></h3>
            <div class="accordion-content">
                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
            </div>
        </li>
        <li>
            <h3 class="flex flex-row justify-start items-center"><img src="./assets/images/plus.svg" alt="How much profit can i make?" /><span class="xl:ml-16 ml-8 xl:text-base text-sm">How much profit can i make?</span></h3>
            <div class="accordion-content">
                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
            </div>
        </li>
        <li>
            <h3 class="flex flex-row justify-start items-center"><img src="./assets/images/plus.svg" alt="How much profit can i make?" /><span class="xl:ml-16 ml-8 xl:text-base text-sm">How much profit can i make?</span></h3>
            <div class="accordion-content">
                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
            </div>
        </li>
    </ul>
  </div>
</section>
<?php $isbg = "is-bg"; include "./components/ready-to-get-started/index.php"; ?>
<?php
  include "./layouts/footer.php";
?>