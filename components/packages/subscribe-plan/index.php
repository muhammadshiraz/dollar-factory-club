<div class="flex flex-col justify-between items-center h-full <?php echo $splanclassname ?>">
    <h3 class="text-white font-semibold text-2xl mb-5"><?php echo $title; ?></h3>
    <p class="text-white text-base text-white text-center xl:px-6 px-3"><?php echo $content; ?></p>
    <h1 class="text-[#00FF94] font-medium text-6xl xl:my-8 my-3"><?php echo $price; ?></h1>
    <span class="text-[#2880FF] text-left font-semibold	text-base w-full mb-5 xl:px-6 px-3"><?php echo $keybenefits; ?></span>
    <ul class="flex flex-col w-full text-left text-white text-base font-normal gap-y-3 mb-5 xl:px-6 px-3">
        <?php
            foreach ($keybenefitslist as $value) {
                echo "<li class='list-disc ml-4'>$value</li>";
            }
        ?>
    </ul>
    <button type="button" class="text-[#407BFF] text-center font-normal text-sm flex flex-row justify-center items-center gap-x-2 mb-12 <?php echo $featuresclassname; ?>"><?php echo $featuresbtn; ?><img src="./assets/images/down-arrow.png" alt="<?php echo $featuresbtn; ?>" /></button>
    <div class="<?php if ($title == 'Popular' || $title == 'Premium') echo "xl:px-6 px-3" ?> w-full">
        <?php
            if ($title == 'Popular' || $title == 'Premium') {
                include "./components/button/subscribe-plan.php";
            } else {
                include "./components/button/active-plan-btn.php";
            }
        ?>
    </div>    
</div>