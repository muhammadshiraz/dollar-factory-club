<?php
  $title = "Purchase Plan";
  $bodyclass = "innerpage";
  include "./layouts/header.php";
?>
<?php $title = "Purchase Plan"; include "./components/banner/index.php"; ?>
<section class="poppins relative xl:my-20 my-16 make-a-purchase">
  <h3 class="xl:text-4xl text-2xl text-white text-center font-semibold leading-snug mb-5 xl:px-0 px-12">Make a purchase</h3>
  <p class="text-base font-normal text-white text-center leading-relaxed xl:px-0 px-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  <div class="container mx-auto xl:px-24 px-9 xl:my-16 my-8">
    <div class="grid xl:grid-cols-2 grid-cols-1 xl:gap-44 gap-12 xl:px-36 px-0 justify-center items-center">
      <form>
        <div class="form-group flex flex-col justify-center items-start gap-y-3 mb-8">
          <label class="text-xl font-semibold text-white">Select Coin</label>
          <select class="w-full py-3 px-3">
            <option value="">Select Coin</option>
            <option value="bitcoin">Bitcoin</option>
            <option value="ethereum">Ethereum</option>
            <option value="litecoin">Litecoin</option>
            <option value="dogecoin">Dogecoin</option>
          </select>
        </div>
        <div class="form-group flex flex-col justify-center items-start gap-y-3 mb-8">
          <label class="text-xl font-semibold text-white">Select Network</label>
          <select class="w-full py-3 px-3">
            <option value="">Select Network</option>
            <option value="bitcoin">Bitcoin</option>
            <option value="ethereum">Ethereum</option>
            <option value="litecoin">Litecoin</option>
            <option value="dogecoin">Dogecoin</option>
          </select>
        </div>
        <div class="form-group flex flex-col justify-center items-start gap-y-3 mb-8">
          <label class="text-xl font-semibold text-white">Amount:</label>
          <input type="text" id="amount" name="amount" placeholder="$375.55" class="w-full py-3 px-3">
        </div>
        <div class="form-group flex flex-col justify-center items-start gap-y-3 mb-8">
          <label class="text-xl font-semibold text-white">Referral Code:</label>
          <input type="text" id="amount" name="amount" placeholder="XYZ20DFC007" class="w-full py-3 px-3">
        </div>
        <div class="form-group flex flex-col justify-center items-start gap-y-3 mt-3">
          <label class="text-xl font-semibold text-white">Deposit Address</label>
          <div class="flex xl:flex-row flex-col justify-between items-center mt-2 w-full clipboard xl:gap-y-0 gap-y-3">
            <p class="text-[#00FF94] text-base font-normal" id="clipboard-code">1NWDhnbJPZoqG65sjrP9nSA8KgH5Npw4NY</p>
            <button type="button" onclick="clipboardFunc();"><img src="./assets/images/copy.png" alt="Deposit Address" /></button>            
          </div>          
        </div>
      </form>  
      <?php 
        $title = "Popular";
        $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
        $price = "$149";
        $spclassname = "pt-16 pb-12 xl:px-12 px-6";
        $keybenefits = "Key Benefits:";
        $keybenefitslist = array("5 indicators per chart", "2 charts in one layout", "20 active price alerts", "20 active technical alerts on indicators, strategies, or drawings");
        $featuresbtn = "View all features";
        include "./components/packages/single-package/index.php"; 
      ?>
    </div>
  </div>  
</section>
<div class="clearfix"></div>
<section class="poppins faq xl:my-20 my-16">
  <div class="container mx-auto xl:px-24 px-9">
    <h3 class="xl:text-4xl text-2xl text-white text-center font-semibold mb-16"><span class="text-[#00FF94]">Got Questions?</span> We are <br/> here to assist you!</h3>
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
<div class="clearfix"></div>
<section class="poppins relative xl:my-24 my-16 difficulty-levels">
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
<div class="clearfix"></div>
<section class="poppins finely-curated-courses">
  <h3 class="xl:text-4xl text-2xl text-white text-center font-semibold leading-snug mb-5 xl:px-0 px-12">Popular courses</h3>
  <p class="text-base font-normal text-white text-center leading-relaxed xl:px-0 px-12">Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
  <div class="container mx-auto xl:px-24 px-9 xl:my-16 my-8">
    <div class="grid xl:grid-cols-3 grid-cols-1 gap-9">
      <div class="flex flex-col justify-between items-center bg-[#001B44] rounded-[24px]">
        <img src="./assets/images/trade-beginner-01.png" alt="Lorem Ipsum Trade Beginner" />
        <div class="flex flex-col justify-between items-start py-6 px-6 w-full">
          <h4 class="text-[#00FF94] font-semibold text-lg mb-3">Lorem Ipsum Trade Beginner</h4>
          <p class="text-sm font-normal text-white leading-relaxed">Risk is an essential part of day-to-day trading – without risking capital, you can’t achieve any returns. Traders today have a suite of tools to help them control risk as they manage their positions.</p>
          <div class="flex xl:flex-row flex-col xl:gap-y-0 gap-y-5 justify-between items-start w-full xl:mt-12 mt-5">
            <div class="flex flex-row justify-between items-center gap-4">
              <button type="button" class="flex flex-row justify-between items-center gap-2 bg-[#002864] rounded-[3px] uppercase text-white text-xs px-4 py-2 font-normal"><img src="./assets/images/beginner-dot.png" alt="Beginner" /><span class="beginner-dot">BEGINNER</span></button>
              <span class="text-[#2880FF] text-xs font-medium">3 Lessons</span>
            </div>
            <p class="xl:text-sm text-xs font-normal text-white leading-relaxed">Duration: 1 hr 45 mins</p>
          </div>
        </div>
      </div>
      <div class="flex flex-col justify-between items-center bg-[#001B44] rounded-[24px]">
        <img src="./assets/images/trade-beginner-02.png" class="rounded-[24px]" alt="Lorem Ipsum Trade Beginner" />
        <div class="flex flex-col justify-between items-start py-6 px-6 w-full">
          <h4 class="text-[#00FF94] font-semibold text-lg mb-3">Lorem Ipsum Trade Beginner</h4>
          <p class="text-sm font-normal text-white leading-relaxed">Risk is an essential part of day-to-day trading – without risking capital, you can’t achieve any returns. Traders today have a suite of tools to help them control risk as they manage their positions.</p>
          <div class="flex xl:flex-row flex-col xl:gap-y-0 gap-y-5 justify-between items-start w-full xl:mt-12 mt-5">
            <div class="flex flex-row justify-between items-center gap-4">
              <button type="button" class="flex flex-row justify-between items-center gap-2 bg-[#002864] rounded-[3px] uppercase text-white text-xs px-4 py-2 font-normal"><img src="./assets/images/intermediate-dot.png" alt="Intermediate" /><span class="intermediate-dot">INTERMEDIATE</span></button>
              <span class="text-[#A128FF] text-xs font-medium">4 Lessons</span>
            </div>
            <p class="xl:text-sm text-xs font-normal text-white leading-relaxed">Duration: 1 hr 45 mins</p>
          </div>
        </div>
      </div>
      <div class="flex flex-col justify-between items-center bg-[#001B44] rounded-[24px]">
        <img src="./assets/images/trade-beginner-03.png" alt="Lorem Ipsum Trade Beginner" />
        <div class="flex flex-col justify-between items-start py-6 px-6 w-full">
          <h4 class="text-[#00FF94] font-semibold text-lg mb-3">Lorem Ipsum Trade Beginner</h4>
          <p class="text-sm font-normal text-white leading-relaxed">Risk is an essential part of day-to-day trading – without risking capital, you can’t achieve any returns. Traders today have a suite of tools to help them control risk as they manage their positions.</p>
          <div class="flex xl:flex-row flex-col xl:gap-y-0 gap-y-5 justify-between items-start w-full xl:mt-12 mt-5">
            <div class="flex flex-row justify-between items-center gap-4">
              <button type="button" class="flex flex-row justify-between items-center gap-2 bg-[#002864] rounded-[3px] uppercase text-white text-xs px-4 py-2 font-normal"><img src="./assets/images/advanced-dot.png" alt="Advanced" /><span class="advanced-dot">ADVANCED</span></button>
              <span class="text-[#00FF94] text-xs font-medium">5 Lessons</span>
            </div>
            <p class="xl:text-sm text-xs font-normal text-white leading-relaxed">Duration: 1 hr 45 mins</p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex xl:flex-row flex-col justify-center items-center xl:gap-8 gap-5 xl:mt-20 mt-8 xl:w-max w-full mx-auto">
      <?php include "./components/button/get-started-01.php"; ?>
      <button type="button" class="text-white xl:text-lg text-base font-medium px-6 py-4 flex flex-row justify-center items-center transparent-btn xl:w-max w-full">View All Courses</button>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<?php $isbg = "is-join-bg"; include "./components/join-community/index.php"; ?>
<?php
  include "./layouts/footer.php";
?>