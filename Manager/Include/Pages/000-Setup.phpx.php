<?php
	namespace StudioAnywhere\Tenant\Pages;
	
	use Phast\Parser;
	use Phast\System;
	
	class SetupPage extends PhastPage
	{
		public function OnInitializing()
		{
			
		}
		
		private function WriteConfigurationFile($values)
		{
			$filename = System::GetRootPath() . "/Include/Configuration.inc.php";
			$file = fopen($filename, "w");
			fwrite($file, "<?php\n");
			fwrite($file, "\tuse Phast\\System;\n\n");
			foreach ($values as $key => $value)
			{
				fwrite($file, "\tSystem::SetConfigurationValue(\"" . $key . "\", \"" . $value . "\");\n");
			}
			fflush($file);
		}
	}
?>