<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


$connection = mysqli_connect("localhost","root","","ucg");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCG Mission Statement Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <style>
    @page { size: A4 }

    body.A4 .sheet {
    width: 100%;
    height: 370mm;
    }

    html,body{
        margin: 0 auto;
        /* height:297mm;
        width:210mm; */
        direction: rtl;
        font-family: "Arial, Helvetica, sans-serif"
    }

    .inputBody {
        text-align:right;
    }

    .formContainer {
        background-color: #fff;
        margin-top: 20px;
        padding: 20px;
        border-radius: 6px;
        box-shadow: 0 2px 3px 1px #b5b5b5;
    }

    .halfList {
        height: 130px;
    }

    .fob {
        position: fixed;
        right: 5%;
        bottom: 5%;
        z-index: 999999;
    }

    .fob .btn {
        font-size:18px;
    }

    .saveP {
        display:none;
    }

    .form-check-label {
        margin-right: 10px;
        font-size: 1.1rem;
    }

    .smallList li {
        font-size: 14px;
    }

    .buttonBlock {
        padding: 10px;
        background-color: #f3f3f3;
        border: 1px solid #e0e0e0;
    }

    .col-form-label {
        font-size: 1.1rem;
    }

    p {
        font-size: 1.4rem;
    }

    section {
        position:relative;
    }

    img {
        width:100%;
    }

    ul {
        columns: 2;
        column-fill: auto;
        height: 440px;
        overflow: hidden;
    }

    li {
        padding-left: 15px;
        font-size: 1.3rem;
    }

    .bottom {
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .company {
        position: absolute;
        bottom: 20%;
        left: 17%;
        width: 260px;
        text-align: center;
        font-size: 1.4rem;
    }

    @media print {
        .fob {
            display:none;
        }
    }
    </style>
</head>