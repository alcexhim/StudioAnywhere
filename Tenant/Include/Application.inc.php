<?php
	use Phast\System;
	use Phast\Data\DataSystem;
	use PDO;
	
	function IsPathLoginExempt($path)
	{
		return
		(
				($path[0] == "account" && $path[1] == "login")
			||	($path[0] == "setup")
		);
	}
	function IsPathSetupPage($path)
	{
		return ($path[0] == "setup");
	}
	function IsApplicationInstalled()
	{
		$pdo = DataSystem::GetPDO();
		$statement = $pdo->prepare("DESC sa_Users");
		
		$statement->execute();
		
		$errorCode = $statement->errorCode();
		
		if ($errorCode != 0) return false;
		return true;
	}
	
	System::$BeforeLaunchEventHandler = function($path)
	{
		if (!IsApplicationInstalled() && !IsPathSetupPage($path))
		{
			System::Redirect("~/setup");
			return false;
		}
		
		if ($_SESSION["Authentication.SessionID"] == null && !IsPathLoginExempt($path))
		{
			System::Redirect("~/account/login");
			return false;
		}
		return true;
	};
?>