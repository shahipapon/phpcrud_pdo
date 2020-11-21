<!-- This will create a basic home page, 
we can use this page to navigate to the other pages. 
As you can see we include the functions.php file and 
execute the template functions that we created, 
remember that these functions will add the header and footer code to our home page. -->

<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<div class="content">
	<h2>Home</h2>
	<p>Welcome to the home page!</p>
</div>

<?=template_footer()?>