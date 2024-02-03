<?php
$company = "Maruti";
$model = "Ertiga";
$price = 0;

switch ($company) {
    case "Maruti":
        switch ($model) {
            case "Ertiga":
                $price = 800000;
                break;
            case "Swift":
                $price = 600000;
                break;
            default:
                echo "Invalid model.";
        }
        break;
    case "Hyundai":
        switch ($model) {
            case "i20":
                $price = 750000;
                break;
            case "creta":
                $price = 1200000;
                break;
            default:
                echo "Invalid model.";
        }
        break;
    case "Kia":
        switch ($model) {
            case "Seltos":
                $price = 1000000;
                break;
            case "carens":
                $price = 1100000;
                break;
            default:
                echo "Invalid model.";
        }
        break;
    default:
        echo "Invalid company.";
}

if ($price > 0) {
    echo "The price of $company $model is: " . $price;
}
?>