<?php
/*
	if(isset($_POST['submit'])) {
		
$msg = 'Name: ' .$_POST['name'] ."\n"
				.'Phone: ' .$_POST['phone'] ."\n"
				.'Email: ' .$_POST['email'] ."\n"
				.'Comment: ' .$_POST['comment'];
		
		mail('cliff.dogra@gmail.com, 'Messesge from website', $msg);
		print "SENT:"
		header('location: contact-thanks.html');
		
	} else {
		header('location: contact.php);
		exit(0);
	}
*/

$msg=$_POST['comment'];
mail('cliff.dogra@gmail.com', 'Messesge from website', $msg);

header('location: contact-thanks.html');

?>