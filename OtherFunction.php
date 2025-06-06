<?php

class DateAndTime {
	public static function getcurrentdate(){
		date_default_timezone_set("Asia/Kolkata");
		return date('Y/m/d');
	}

	public static function getcurrenttime(){
		date_default_timezone_set("Asia/Kolkata");
		return date('h:i:s A');
	}
}

class ALertMsg {
	public static function showSuccessAlert($message){
		return '
			<div class="alert alert-success" role="alert">
				<strong>Success!</strong>  '. $message .'.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			';
	}

	public static function showErrorAlert($message){
		return '
			<div class="alert alert-danger" role="alert">
				<strong>Error!</strong>  '. $message .'.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			';
	}

}

?>