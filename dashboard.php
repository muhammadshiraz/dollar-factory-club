<?php
  $title = "Dashboard";
  $bodyclass = "dashboard-wrap hide-header-footer";
  include "./layouts/header.php";
?>
<section class="dashboard block poppins">
    <div class="flex flex-row items-center w-full">
      <nav id="dashboard-nav" class="dashboard-nav flex flex-col justify-between items-start capitalize text-sm h-screen pt-5">
        <div class="flex flex-col justify-between items-center w-full">
          <a href="http://localhost/dollar-factory-club" class="px-6"><img src="./assets/images/logo.svg" class="w-56" alt="Dollar Factory Club" /></a>
          <ul class="flex flex-col gap-y-3 gap-x-10 pb-3 mt-16 w-full">
            <li class="w-full text-center text-white">
              <a href="#tab1" class="active font-semibold flex flex-row justify-start items-center gap-x-4 py-3 px-6"><img src="./assets/images/dashboard/dashboard.png" alt="Dashboard" />Dashboard</a>
            </li>
            <li class="w-full text-center text-white">
              <a href="#tab2" class="disable font-normal flex flex-row justify-start items-center gap-x-4 py-3 px-6"><img src="./assets/images/dashboard/notification.png" alt="Notifications" />Notifications <span class="w-[20px] h-[20px] text-xs bg-[#EA4335] rounded-full flex justify-center items-center">4</span></a>
            </li>
            <li class="w-full text-center text-white">
              <a href="#tab3" class="disable font-normal flex flex-row justify-start items-center gap-x-4 py-3 px-6"><img src="./assets/images/dashboard/subscription.png" alt="Subscription" />Subscription</a>
            </li>
            <li class="w-full text-center text-white">
              <a href="#tab4" class="disable font-normal flex flex-row justify-start items-center gap-x-4 py-3 px-6"><img src="./assets/images/dashboard/courses.png" alt="Courses" />Courses</a>
            </li>
            <li class="w-full text-center text-white">
              <a href="#tab5" class="disable font-normal flex flex-row justify-start items-center gap-x-4 py-3 px-6"><img src="./assets/images/dashboard/live-webinars.png" alt="Live Webinars" />Live Webinars</a>
            </li>
            <li class="w-full text-center text-white">
              <a href="#tab6" class="disable font-normal flex flex-row justify-start items-center gap-x-4 py-3 px-6"><img src="./assets/images/dashboard/affiliate-program.png" alt="Affiliate Program" />Affiliate Program</a>
            </li>
            <li class="w-full text-center text-white">
              <a href="#tab6" class="disable font-normal flex flex-row justify-start items-center gap-x-4 py-3 px-6"><img src="./assets/images/dashboard/downloads.png" alt="Downloads" />Downloads</a>
            </li>
          </ul>
        </div>
        <button type="button" class="font-normal flex flex-row px-6 justify-between items-center gap-x-2 capitalize text-sm text-white mb-20"><img src="./assets/images/dashboard/logout.png" alt="logout" />logout</button>
      </nav>
      <div class="dashboard-tab-content-wrapper flex flex-col justify-between items-center w-full h-screen">
        <div class="dashboard-header py-4 px-10 flex flex-row justify-between items-center w-full">
          <div class="flex flex-row gap-x-1 justify-center items-center">
            <img src="./assets/images/dashboard/user.png" class="mr-1" alt="Welcome" />
            <span class="text-white text-xs font-normal">Welcome,</span>
            <span class="text-[#00FF94] text-xs font-normal ml-0.5">Lily21</span>
          </div>
          <div class="flex flex-row justify-between items-center gap-x-6">
            <button type="button" class="relative"><img src="./assets/images/dashboard/notification.png" alt="Notification" /><span class="absolute top-0 right-0.5 bg-[#EA4335] w-[8px] h-[8px] rounded-full"></span></button>
            <button type="button"><img src="./assets/images/dashboard/setting.png" alt="Setting" /></button>
          </div>
        </div>
        <div id="tab1" class="dashboard-tab-content block w-full h-screen overflow-x-hidden">
          <div class="container mx-auto xl:px-8 px-3">
            <div class="grid grid-cols-3 justify-between items-start gap-x-8 w-full py-12">
              <?php
                $title = "Popular";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$149";
                $spclassname = "py-8 xl:px-6 px-3 h-full";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("5 indicators per chart", "2 charts in one layout", "20 active price alerts", "20 active technical alerts on indicators, strategies, or drawings", "Ad-free", "Volume profile indicators", "Custom time intervals", "Multiple watchlists", "Bar Replay on intraday bars");
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
              ?>
              <?php
                $title = "Pro";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$344";
                $spclassname = "py-8 xl:px-6 px-3 h-full";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("10 indicators per chart", "4 charts in one layout", "100 active price alerts", "100 active technical alerts on indicators, strategies, or drawings", "10 saved chart layouts", "Intraday exotic charts", "Charts based on custom formulas", "Chart data export", "Indicators on indicators");
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
              ?>
              <?php
                $title = "Premium";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$745";
                $spclassname = "py-8 xl:px-6 px-3 h-full";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("25 indicators per chart", "8 charts in one layout", "400 active price alerts", "400 active technical alerts on indicators, strategies, or drawings", "Unlimited saved chart layouts", "Second-based intervals", "Alerts that don't expire", "4x more data on charts (20K bars)", "Publishing invite-only indicators", "4x more intraday data in Bar Replay",);
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
              ?>
            </div>
          </div>
        </div>
        <div id="tab2" class="dashboard-tab-content block w-full h-screen overflow-x-hidden">
          <div class="container mx-auto xl:px-8 px-3 py-12">
            <h4 class="text-left text-white text-xl font-semibold mb-5">Notifications</h4>
            <ul class="notifications-list w-full flex flex-col gap-y-3">
              <li class="flex flex-row justify-between items-center py-2 px-5">
                <div class="flex flex-row gap-x-3 justify-between items-center">
                  <img src="./assets/images/dashboard/notifications.png" alt="You have 21 days remaining on your Pro plan" />
                  <span class="font-normal text-white text-sm">You have 21 days remaining on your Pro plan</span>
                </div>
                <span class="text-[#808080] text-xs font-normal">12:32PM</span>
              </li>
              <li class="flex flex-row justify-between items-center py-2 px-5">
                <div class="flex flex-row gap-x-3 justify-between items-center">
                  <img src="./assets/images/dashboard/notifications.png" alt="You have 21 days remaining on your Pro plan" />
                  <span class="font-normal text-white text-sm">New plans have been added, go checkout the dummy text here or a <a href="#link" class="text-[#6C9AFF]">link</a></span>
                </div>
                <span class="text-[#808080] text-xs font-normal">12:32PM</span>
              </li>
              <li class="flex flex-row justify-between items-center py-2 px-5">
                <div class="flex flex-row gap-x-3 justify-between items-center">
                  <img src="./assets/images/dashboard/notifications.png" alt="You have 21 days remaining on your Pro plan" />
                  <span class="font-normal text-white text-sm">New webinars have been added, lorem ipsum of dolor text goes here</span>
                </div>
                <span class="text-[#808080] text-xs font-normal">12:32PM</span>
              </li>
              <li class="flex flex-row justify-between items-center py-2 px-5">
                <div class="flex flex-row gap-x-3 justify-between items-center">
                  <img src="./assets/images/dashboard/notifications.png" alt="You have 21 days remaining on your Pro plan" />
                  <span class="font-normal text-white text-sm">You have 21 days remaining on your Pro plan</span>
                </div>
                <span class="text-[#808080] text-xs font-normal">12:32PM</span>
              </li>
              <li class="flex flex-row justify-between items-center py-2 px-5">
                <div class="flex flex-row gap-x-3 justify-between items-center">
                  <img src="./assets/images/dashboard/notifications.png" alt="You have 21 days remaining on your Pro plan" />
                  <span class="font-normal text-white text-sm">New plans have been added, go checkout the dummy text here or a <a href="#link" class="text-[#6C9AFF]">link</a></span>
                </div>
                <span class="text-[#808080] text-xs font-normal">12:32PM</span>
              </li>
              <li class="flex flex-row justify-between items-center py-2 px-5">
                <div class="flex flex-row gap-x-3 justify-between items-center">
                  <img src="./assets/images/dashboard/notifications.png" alt="You have 21 days remaining on your Pro plan" />
                  <span class="font-normal text-white text-sm">New webinars have been added, lorem ipsum of dolor text goes here</span>
                </div>
                <span class="text-[#808080] text-xs font-normal">12:32PM</span>
              </li>
            </ul>
          </div>          
        </div>
        <div id="tab3" class="dashboard-tab-content block w-full h-screen overflow-x-hidden">
          <div class="container mx-auto xl:px-8 px-3 py-12">
            <h4 class="text-left text-white text-xl font-semibold mb-5">Subscription</h4>
            <div class="grid grid-cols-3 justify-between items-start mb-8 gap-x-8 w-full">
              <?php
                $title = "Popular";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$149";
                $splanclassname = "py-8 subscribe-plan";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("5 indicators per chart", "2 charts in one layout", "20 active price alerts", "20 active technical alerts on indicators, strategies, or drawings", "Ad-free", "Volume profile indicators", "Custom time intervals", "Multiple watchlists", "Bar Replay on intraday bars");
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/subscribe-plan/index.php";
              ?>
              <?php
                $title = "Pro";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$344";
                $splanclassname = "pt-8 active-plan";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("10 indicators per chart", "4 charts in one layout", "100 active price alerts", "100 active technical alerts on indicators, strategies, or drawings", "10 saved chart layouts", "Intraday exotic charts", "Charts based on custom formulas", "Chart data export", "Indicators on indicators");
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/subscribe-plan/index.php";
              ?>
              <?php
                $title = "Premium";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$745";
                $splanclassname = "py-8 subscribe-plan";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("25 indicators per chart", "8 charts in one layout", "400 active price alerts", "400 active technical alerts on indicators, strategies, or drawings", "Unlimited saved chart layouts", "Second-based intervals", "Alerts that don't expire", "4x more data on charts (20K bars)", "Publishing invite-only indicators", "4x more intraday data in Bar Replay",);
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/subscribe-plan/index.php";
              ?>
            </div>
            <h4 class="text-center text-white text-xl font-medium mb-5">Plan Expires In:</h4>
            <div class="grid grid-cols-4 w-max mx-auto mb-3 justify-center items-center">
              <div class="flex flex-row gap-y-3 justify-between items-center">
                <div class="grid grid-cols-2 gap-x-0.5">
                  <div class="plan-box flex justify-center items-center text-center"><span class="text-xl">2</span></div>
                  <div class="plan-box flex justify-center items-center text-center"><span class="text-xl">2</span></div>
                </div>
                <img src="./assets/images/dashboard/colon.png" class="mx-1" alt="Days" />
              </div>
              <div class="flex flex-row gap-y-3 justify-between items-center">
                <div class="grid grid-cols-2 gap-x-0.5">
                  <div class="plan-box flex justify-center items-center text-center"><span class="text-xl">0</span></div>
                  <div class="plan-box flex justify-center items-center text-center"><span class="text-xl">1</span></div>
                </div>
                <img src="./assets/images/dashboard/colon.png" class="mx-1" alt="Hours" />
              </div>
              <div class="flex flex-row gap-y-3 justify-between items-center">
                <div class="grid grid-cols-2 gap-x-0.5">
                  <div class="plan-box flex justify-center items-center text-center"><span class="text-xl">5</span></div>
                  <div class="plan-box flex justify-center items-center text-center"><span class="text-xl">1</span></div>
                </div>
                <img src="./assets/images/dashboard/colon.png" class="mx-1" alt="Min" />
              </div>
              <div class="flex flex-row gap-y-3 justify-between items-center">
                <div class="grid grid-cols-2 gap-x-0.5">
                  <div class="plan-box flex justify-center items-center text-center"><span class="text-xl">1</span></div>
                  <div class="plan-box flex justify-center items-center text-center"><span class="text-xl">6</span></div>
                </div>                
              </div>              
            </div>
            <div class="grid grid-cols-4 w-[460px] mx-auto justify-between items-center">
              <span class="uppercase text-xs font-normal text-white text-center">Days</span>
              <span class="uppercase text-xs font-normal text-white text-center">Hours</span>
              <span class="uppercase text-xs font-normal text-white text-center">Min</span>
              <span class="uppercase text-xs font-normal text-white text-center">Sec</span>
            </div>
          </div>
        </div>
        <div id="tab4" class="dashboard-tab-content block w-full h-screen overflow-x-hidden">
          <div class="container mx-auto xl:px-8 px-3 py-12">
            <h4 class="text-left text-white text-xl font-semibold mb-5">Courses</h4>
            <div class="grid grid-cols-3 justify-between items-start gap-x-8 w-full">
              <?php
                $title = "Popular";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$149";
                $spclassname = "py-8 xl:px-6 px-3 h-full";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("5 indicators per chart", "2 charts in one layout", "20 active price alerts", "20 active technical alerts on indicators, strategies, or drawings", "Ad-free", "Volume profile indicators", "Custom time intervals", "Multiple watchlists", "Bar Replay on intraday bars");
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
              ?>
              <?php 
                $title = "Pro";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$344";
                $spclassname = "py-8 xl:px-6 px-3 h-full";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("10 indicators per chart", "4 charts in one layout", "100 active price alerts", "100 active technical alerts on indicators, strategies, or drawings", "10 saved chart layouts", "Intraday exotic charts", "Charts based on custom formulas", "Chart data export", "Indicators on indicators");
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
              ?>
              <?php 
                $title = "Premium";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$745";
                $spclassname = "py-8 xl:px-6 px-3 h-full";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("25 indicators per chart", "8 charts in one layout", "400 active price alerts", "400 active technical alerts on indicators, strategies, or drawings", "Unlimited saved chart layouts", "Second-based intervals", "Alerts that don't expire", "4x more data on charts (20K bars)", "Publishing invite-only indicators", "4x more intraday data in Bar Replay",);
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
              ?>
            </div>
            <div class="xl:overflow-hidden overflow-x-scroll block mt-8">
              <?php include "./components/packages/compare-plans/index.php"; ?>
            </div>
          </div>
        </div>
        <div id="tab5" class="dashboard-tab-content block w-full h-screen overflow-x-hidden">
          <div class="container mx-auto xl:px-8 px-3 py-12">
            <h4 class="text-left text-white text-xl font-semibold mb-5">Live Webinars</h4>
            <div class="the-banner-info-card flex flex-row justify-between items-center py-3 px-5 px-8">
              <div class="flex flex-col gap-y-3 justify-between items-start text-white text-left">
                <span class="text-2xl capitalize">Community Webinars</span>
                <p class="text-base font-normal w-2/3 leading-7">Some dummy text goes here for Live webinars and other important info about the data presented here</p>
              </div>
              <img src="./assets/images/dashboard/community-webinars.png" alt="Community Webinars" />
            </div>
            <div class="flex flex-col justify-between items-center mt-16 mb-8">
              <div class="flex flex-row justify-between items-center w-full">
                <h2 class="text-2xl capitalize font-semibold text-white text-left">Community Webinars</h2>
                <button type="button" class="schedule-at-btn text-sm font-medium flex flex-row gap-x-3 justify-center items-center px-8 py-2">
                  <img src="./assets/images/dashboard/timerstart.png" alt="Community Webinars" />
                  <span>SCHEDULE AT</span>                  
                </button>
              </div>
            </div>
            <video
              id="my-video"
              class="video-js"
              controls
              preload="auto"
              width="1225"
              height="650"
              poster="./assets/images/dashboard/MY_VIDEO_POSTER.jpg"
              data-setup="{}"
            >
              <source src="./assets/images/dashboard/MY_VIDEO.mp4" type="video/mp4" />
              <source src="./assets/images/dashboard/MY_VIDEO.webm" type="video/webm" />            
            </video>
          </div>
        </div>
        <div id="tab6" class="dashboard-tab-content block w-full h-screen overflow-x-hidden">
          <div class="container mx-auto xl:px-8 px-3 py-12">
            <h4 class="text-left text-white text-xl font-semibold mb-5">Affiliate Program</h4>
            <div class="the-banner-info-card flex flex-row justify-between items-center py-3 px-5 px-8">
              <div class="flex flex-col gap-y-3 justify-between items-start text-white text-left">
                <span class="text-2xl capitalize">Affiliate Program</span>
                <p class="text-base font-normal w-2/3 leading-7">Here you can withdraw your accepted Affiliate Commissions and find the history of your payouts. All Referrals viewed end of the month</p>
              </div>
              <img src="./assets/images/dashboard/affiliate-prog.png" alt="Affiliate Program" />
            </div>
            <div class="grid grid-cols-3 gap-x-12 my-12">
              <div class="flex flex-row justify-start items-center gap-x-5 affiliate-box px-8 py-5">
                <img src="./assets/images/dashboard/referrals.png" alt="Referrals" />
                <div class="flex flex-col justify-center items-start">
                  <span class="text-[#00FF94] text-xl font-semibold">12</span>
                  <span class="text-white text-xl font-medium">Referrals</span>
                </div>
              </div>
              <div class="flex flex-row justify-start items-center gap-x-5 affiliate-box px-8 py-5">
                <img src="./assets/images/dashboard/paid-earnings.png" alt="Paid Earnings" />
                <div class="flex flex-col justify-center items-start">
                  <span class="text-[#00FF94] text-xl font-semibold">$75</span>
                  <span class="text-white text-xl font-medium">Paid Earnings</span>
                </div>
              </div>
              <div class="flex flex-row justify-start items-center gap-x-5 affiliate-box px-8 py-5">
                <img src="./assets/images/dashboard/unpaid-earnings.png" alt="Unpaid Earnings" />
                <div class="flex flex-col justify-center items-start">
                  <span class="text-[#00FF94] text-xl font-semibold">$125</span>
                  <span class="text-white text-xl font-medium">Unpaid Earnings</span>
                </div>
              </div>
            </div>
            <div class="the-referral-url-card flex flex-row justify-between items-center py-3 px-5 px-8">
              <div class="flex flex-col gap-y-3 justify-between items-start text-white text-left py-4">
                <span class="text-2xl uppercase">REFERRAL URL</span>
                <p class="text-base font-normal leading-7">Share your referral URL with your audience to earn commission.</p>
                <div class="flex flex-row gap-x-3">
                  <img src="./assets/images/dashboard/link.png" alt="Share your referral URL with your audience to earn commission." />                
                  <p class="text-base font-normal leading-7 text-[#00FF94]">TZlPwmpOKINtr4kSdZwPiL/DFC?type=design&node-id</p>
                </div>
              </div>
              <button type="button" class="the-copy-btn text-white px-4 py-2 text-xs font-medium">Copy Link</button>
            </div>
          </div>          
        </div>
        <div id="tab7" class="dashboard-tab-content w-full">Downloads</div>
      </div>
    </div>
</section>
<?php
  include "./layouts/footer.php";
?>