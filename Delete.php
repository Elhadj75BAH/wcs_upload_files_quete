<?php 
if( file_exists ( 'uploads/' . $_GET['name']))
{
    unlink( 'uploads/' . $_GET['name'] ) ;
    header('Location: show_images.php');
}

?>