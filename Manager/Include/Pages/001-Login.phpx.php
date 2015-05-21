<?php
	namespace StudioAnywhere\Tenant\Pages;

	use Phast\CancelEventArgs;
	use Phast\System;
	
	use Phast\Parser\PhastPage;
		
	class LoginPage extends PhastPage
	{
		public function OnInitializing(CancelEventArgs $e)
		{
			$e->RenderingPage->GetControlByID("paraCopyright")->InnerHTML = System::GetConfigurationValue("Application.CopyrightMessage");
		}
		
	}
?>