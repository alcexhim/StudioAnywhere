<?php
	namespace StudioAnywhere\Tenant\Pages;
	
	use Phast\Parser;
	use Phast\System;
	use Phast\Parser\PhastPage;
	use Phast\CancelEventArgs;
	
	class SetupPage extends PhastPage
	{
		public function OnInitializing(CancelEventArgs $e)
		{
			if ($e->RenderingPage->IsPostback)
			{
				$values = array
				(
					"Database.ServerName" => $_POST["database_ServerName"],
					"Database.DatabaseName" => $_POST["database_DatabaseName"],
					"Database.UserName" => $_POST["database_UserName"],
					"Database.Password" => $_POST["database_Password"],
					"Database.TablePrefix" => $_POST["database_TablePrefix"]
				);
				
				if ($this->WriteConfigurationFile($values) && $this->WriteDatabase())
				{ 
					System::Redirect("~/");
				}
			}
		}
		
		private function WriteDatabase()
		{
			$tablePath = System::GetApplicationPath() . "/Include/Tables";
			$tableFileNames = glob($tablePath . "/*.inc.php");
			
			$tables = array();
			foreach ($tableFileNames as $tableFileName)
			{
				require_once($tableFileName);
			}
			
			foreach ($tables as $table)
			{
				if (!$table->Create())
				{
					return false;
				}
			}
			
			return true;
		}
		
		private function WriteConfigurationFile($values)
		{
			$values2 = System::GetConfigurationValues();
			foreach ($values as $key => $value)
			{
				$values2[$key] = $value;
			}
			
			$filename = System::GetApplicationPath() . "/Include/Configuration.inc.php";
			$file = fopen($filename, "w");
			fwrite($file, "<?php\n");
			fwrite($file, "\tuse Phast\\System;\n\n");
			
			foreach ($values2 as $key => $value)
			{
				fwrite($file, "\tSystem::SetConfigurationValue(\"" . $key . "\", \"" . $value . "\");\n");
			}
			
			fwrite($file, "?>");
			
			fflush($file);
			fclose($file);
			
			return true;
		}
	}
?>