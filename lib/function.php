<?php 

function post(){
 if(isset($_POST['font'])) {
		return $_POST['font'];
	}
		return "verdana";
}