<?php
$PageTitle = "Individualogist.com | Elemental Paradigm";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/sp/common/header.php');
include_once($path);
?>
<body>

<?php
include('ep-intro.php');
?>
    
    
<?php
    switch($_GET['element']){
    case "air": //Form Page
        include('air.php');
        break;
    case "water": //Form Page
        include('water.php');
        break;
    case "fire": //Form Page
        include('fire.php');
        break;
    case "earth": //Form Page
        include('earth.php');
        break;
    default: //Any page that is not defined in this switch will lead to this page
        include('air.php');
    }
?>
    
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/sp/assets/inc/ep-salescopy.php');
include($path);
?>    

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/sp/assets/inc/ep-order.php');
include($path);
?>
    
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/sp/common/common-faq.php');
include_once($path);
?>

<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/sp/common/footer.php');
include_once($path); 
?>
