<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EComm-Hi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
   
</head>
<body>
<?php  echo  View::make("header") ?>
    @yield('contant')
    <?php echo  View:: make ('footer') ?>
</body>
<style>
.custom-login
{
    height:500px;
    padding:100px;
}
.custom-product
{
    
 height:600px;
}
.slider-caption
{
    background-color:lightseagreen;
}
.trending-image
{
    height:100px !important;
}
.trending-item
{
    float:left;
    width:20%;
}.trending-wrapper
{
    margin:30px;
}
.detail-img
{
    height:200px;
}
</style>

</html>
