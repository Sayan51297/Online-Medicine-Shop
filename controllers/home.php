<?php
require_once 'Controller.php';
require_once 'Models/cust.php';
require_once 'Models/med.php';	
session_start();

	class home extends Controller
	{
		public function index()
		{
			echo $this->render('views/login.php');
		}

		public function register()
		{
			echo $this->render('views/register.php');
		}

		//this controller function is responsible for inserting a new row value
		public function registeration()
		{
			$cust = new Cust();
			$cust->registration($_POST['cust_name'],$_POST['cust_email'],$_POST['cust_phone'],$_POST['cust_add'],$_POST['cust_password']);
			echo $this->render('views/login.php');
		}

		public function custIndex()
		{
			$cust  = new Cust();
			$med   = new Med();
			if(isset($_SESSION['cust_email']))
				{	
					$data  = $cust->custDetail($cust->returnCustId($_SESSION['cust_email'])[0]);
					$data1 = $med->getMedDetail();
					$this->renderTwoDataFormat('views/custPage.php', $data, $data1);
				}
			else
				header("Location:../");
		}

		
		public function loginCheck()
		{
			
			$cust 	= new Cust();
			if($_POST['cust_email']=="admin@admin.com" && $_POST['cust_password']=="1234")
				{
					header("Location:../admin");
				}
			else if($cust->loginCheck($_POST['cust_email'],$_POST['cust_password'])[0]==1)
				{	
					$_SESSION['cust_email'] = $_POST['cust_email'];
					header("Location:../home/custIndex");
				}
			else
				header("Location:../");	
		}

		public function calculatePrice()
		{
			//I don't know how to approach this problem
			echo "Ki korbo bhujte parchi na";
		}

		public function logout()
		{
			session_destroy();
			header("Location:../");
		}

		public function customerDetails()
		{
			$cust  = new Cust();
			if(isset($_SESSION['cust_email']))
				{	
					$data  = $cust->custDetail($cust->returnCustId($_SESSION['cust_email'])[0]);
					echo $this->render('views/CustomerDetails.php', $data);
				}
			else
				header("Location:../");
		}

		public function customerTransaction()
		{
			$cust  = new Cust();
			if(isset($_SESSION['cust_email']))
				{	
					//$data  = $cust->custDetail($cust->returnCustId($_SESSION['cust_email'])[0]);
					echo $this->render('views/customerTransaction.php');
				}
			else
				header("Location:../");
		}

	} 
?>