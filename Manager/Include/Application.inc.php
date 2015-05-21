<?php
	use Phast\System;
	use Phast\Data\DataSystem;
	
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
		$pdo = null;
		try
		{
			$pdo = DataSystem::GetPDO();
		}
		catch (Exception $ex)
		{
			return false;
		}
		$statement = $pdo->prepare("DESC sa_Users");
		
		if ($statement->execute() === true) return true;
		return false;
	}
	
	System::$EnableTenantedHosting = false;
	
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