<?php
  $title = "Courses";
  $bodyclass = "innerpage";
  include "./layouts/header.php";
?>
<?php $title = "Courses"; include "./components/banner/index.php"; ?>
<section class="poppins relative xl:py-32 py-12 difficulty-levels">
  <h3 class="xl:text-4xl text-2xl text-white text-center font-semibold leading-snug mb-5 xl:px-0 px-12">Difficulty levels for different courses</h3>
  <p class="text-base font-normal text-white text-center leading-relaxed xl:px-0 px-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  <div class="container mx-auto xl:px-24 px-9 xl:my-16 my-8">
    <div class="grid xl:grid-cols-3 grid-cols-1 xl:gap-16 gap-8 xl:px-16 px-0">
      <div class="flex flex-col justify-between items-center py-16 px-10 difficulty-levels-box">
        <img src="./assets/images/education.svg" alt="Beginner" />
        <div class="flex flex-col justify-between items-center w-full mt-7">
          <h4 class="text-[#00FF94] font-semibold text-2xl mb-5">Beginner</h4>
          <p class="text-xl font-normal text-white leading-relaxed text-center">The key concepts behind trading & markets</p>
        </div>
      </div>
      <div class="flex flex-col justify-between items-center py-16 px-10 difficulty-levels-box">
        <img src="./assets/images/intermediate.svg" alt="Intermediate" />
        <div class="flex flex-col justify-between items-center w-full mt-7">
          <h4 class="text-[#00FF94] font-semibold text-2xl mb-5">Intermediate</h4>
          <p class="text-xl font-normal text-white leading-relaxed text-center">Identify and harness opportunities</p>
        </div>
      </div>
      <div class="flex flex-col justify-between items-center py-16 px-10 difficulty-levels-box">
        <img src="./assets/images/advanced.svg" alt="Advanced" />
        <div class="flex flex-col justify-between items-center w-full mt-7">
          <h4 class="text-[#00FF94] font-semibold text-2xl mb-5">Advanced</h4>
          <p class="text-xl font-normal text-white leading-relaxed text-center">Take your trading to the next level with DFC</p>
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
<?php include "./components/ultimate-featues/index.php"; ?>
<?php $isbg = "is-join-bg"; include "./components/join-community/index.php"; ?>
<?php
  include "./layouts/footer.php";
?>