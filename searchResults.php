<?php declare(strict_types=1);
/*
    Purpose: Display search results
    Author:AM & TS
    Date: March 2021
    Uses: HappyEarthDisplay, HappyEarthModel
    Action for: Search.php
 */
    // required Class files

    require_once ("HappyEarthDisplay.php");
    require_once ("HappyEarthModel.php");

    // $_POST is an associative array of the values passed via the HTTP POST method

    $category = $_POST['category'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $startListed = $_POST['startlisted'];
    $endListed = $_POST['endlisted'];
    $minPrice = $_POST['minprice'];
    $maxPrice = $_POST['maxprice'];
    $productCategoryID = $_POST['productcategoryid'];

    $productCategoryID = preg_replace("/[^0-9]/", '', $productCategoryID);

    if (!empty($startListed)) {
        $startListed = $startListed.' 00:00:00.000';
    }
    if (!empty($endListed)) {
        $endListed = $endListed.' 00:00:00.000';
    }

    // instantiate a Model object

    $aModel = new HappyEarthModel();
    
    // instantiate a Display object

    $aDisplay = new HappyEarthDisplay();

    // call the displayPageHeader method
    
    $heading = <<<ABC
                    You searched for<br />
                    Category: '$category' <br />
                    Gender: '$gender' <br />
                    Size: '$size' <br />
                    Listed Between: '$startListed' & '$endListed'<br />
                    Priced Between: '$minPrice' & '$maxPrice'
    ABC;

    $aDisplay->displayPageHeader("Search Results");

    // Call the getProductsByMultiCriteria method
    
    $productList = $aModel->getProductsByMultiCriteria((int)$productCategoryID, $gender, $size, $startListed, $endListed, (int)$minPrice, (int)$maxPrice);

    // call the displayProducts method
    
    $aDisplay->displayProducts($productList, "Search.php");

    // call the displayPageFooter method 

    $aDisplay->displayPageFooter();
?>
