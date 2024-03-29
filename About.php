<?php declare(strict_types=1);
    //create or resume session        
    session_start();

    // automatically load required Class files
   
    spl_autoload_register(function ($class_name){
    include $class_name . '.php';
    });
    
    $aDisplay = new HappyEarthDisplay();
    
    $aDisplay->displayPageHeader("Our Mission");

    //basic html for about page elements
    ?>

    <div id="about">
        <div id="mission">
            <h2 id="missionStatement"> We are an online clothing consignment store dedicated to making fashion affordable and earth friendly </h2>
            <h2 id ="missionStatement2"> Buying our gently used products helps to reduce fashion waste and keep perfectly good items out of landfills</h3>
        </div>
        <div id ="reasons">
            <h3>5 Great Reasons to Buy Used Clothing</h3>
            <p class = "number pink">1</p>
            <p class = "aboutlist pink">Used clothing is trendy! Online secondhand is set to grow 69% between 2019 and 2021, while the broader retail sector is projected to shrink 15%.</p>
            <p class = "number red">2</p>
            <p class = "aboutlist red">Buying one used item reduces its carbon, waste, and water footprints by 82%.</p>
            <p class = "number yellow">3</p>
            <p class = "aboutlist yellow">73% of apparel is sent to landfill or incinerated, 95% of which could be reused or recycled.</p>
            <p class = "number green">4</p>
            <p class = "aboutlist green">Shopping secondhand displaces the need for new clothing production and diverts items from landfills. </p>
            <p class = "number blue">5</p>
            <p class = "aboutlist blue">Used clothing is often 70-80% cheaper than new clothing - especially brand names!</p>
        </div>
        <p id = "sources"><em>Sources: Green Story Inc. | Ellen MacArthur Foundation | Global Data 2019 survey | accessed via ThredUp.com</em></p>
    </div>
<?php
    $aDisplay->displayPageFooter();
?>