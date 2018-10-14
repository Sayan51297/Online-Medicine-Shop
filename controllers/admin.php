<?php
require_once 'Controller.php';
require_once 'Models/cust.php';
require_once 'Models/med.php';	


	class admin extends Controller
	{
		public function index()
		{
			$med   = new Med();
			$data  = $med->getMedDetail();	
			echo $this->render('views/adminPage.php',$data);
		}

		public function updateMed($data = [])
		{
			$med   = new Med();
			echo $this->render('views/adminUpdatePage.php',$med->getMedDetailEach($data[0]));
		}	

		public function enterUpdateMed()
		{	
			$med = new Med();
			$med->updateMedDetails($_POST['med_id'],$_POST['med_name'],$_POST['med_cost'],$_POST['med_quant']);
			header("Location:../admin");
		}

		public function enterInsertMed()
		{
			echo $this->render('views/adminInsertPage.php');
		}

		public function enterInsertMedValue()
		{
			$med = new Med();
			$med->insertNewValue($_POST['med_name'],$_POST['med_cost'],$_POST['med_quant']);
			header("Location:../admin");
		}

		public function deleteMed($data=[])
		{
			$med = new Med();
			$med->deleteMed($data[0]);
			header("Location:../../admin");
		}
	}
?>