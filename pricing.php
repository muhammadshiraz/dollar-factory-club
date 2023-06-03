<?php
  $title = "Pricing";
  $bodyclass = "innerpage";
  include "./layouts/header.php";
?>
<?php $title = "Pricing"; include "./components/banner/index.php"; ?>
<section class="poppins relative xl:my-20 my-16 pricing">
    <h3 class="xl:text-4xl text-2xl text-white text-center font-semibold leading-snug mb-5 xl:px-0 px-12"><span class="text-[#00FF94]">Finely curated</span> courses with <br /> different levels</h3>
    <p class="text-base font-normal text-white text-center leading-relaxed xl:px-0 px-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br /> Lorem Ipsum has been the industry's standard dummy text.</p>  
    <div class="container mx-auto xl:px-24 px-9 xl:my-16 my-8">
        <div class="grid xl:grid-cols-3 grid-cols-1 xl:gap-10 gap-7 justify-center items-center"> 
            <?php 
                $title = "Popular";
                $content = "Distraction-free trading and investing, with more charts, intervals and indicators";
                $price = "$149";
                $spclassname = "pt-16 pb-12 xl:px-12 px-6";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("5 indicators per chart", "2 charts in one layout", "20 active price alerts", "20 active technical alerts on indicators, strategies, or drawings", "Ad-free", "Volume profile indicators", "Custom time intervals", "Multiple watchlists", "Bar Replay on intraday bars");
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
            ?>
            <?php 
                $title = "Pro";
                $content = "Intraday technical analysis for day traders looking to take things to the next level";
                $price = "$344";
                $spclassname = "pt-16 pb-12 xl:px-12 px-6";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("10 indicators per chart", "4 charts in one layout", "100 active price alerts", "100 active technical alerts on indicators, strategies, or drawings", "10 saved chart layouts", "Intraday exotic charts", "Charts based on custom formulas", "Chart data export", "Indicators on indicators");
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
            ?>
            <?php 
                $title = "Premium";
                $content = "Highest precision and maximum data to capture all possible opportunities";
                $price = "$745";
                $spclassname = "pt-16 pb-12 xl:px-12 px-6";
                $keybenefits = "Key Benefits:";
                $keybenefitslist = array("25 indicators per chart", "8 charts in one layout", "400 active price alerts", "400 active technical alerts on indicators, strategies, or drawings", "Unlimited saved chart layouts", "Second-based intervals", "Alerts that don't expire", "4x more data on charts (20K bars)", "Publishing invite-only indicators", "4x more intraday data in Bar Replay",);
                $featuresbtn = "";
                $featuresclassname = "hidden";
                $classname = "mt-8";
                include "./components/packages/single-package/index.php";
            ?>
        </div>
    </div>
</section>
<section class="poppins relative is-compare-plans-bg">
    <div class="container mx-auto xl:px-24 px-9 xl:my-16 my-8">
        <div class="xl:overflow-hidden overflow-x-scroll block">
            <?php include "./components/packages/compare-plans/index.php"; ?>
        </div>        
    </div>
</section>
<?php
  include "./layouts/footer.php";
?>