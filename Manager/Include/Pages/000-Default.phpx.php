<?php
	namespace StudioAnywhere\Tenant\Pages;
	
	use Phast\Parser\PhastPage;
	use Phast\System;
	use Phast\CancelEventArgs;
	
	class DefaultPage extends PhastPage
	{
		public function OnInitializing(CancelEventArgs $e)
		{
			// $this->Page->GetControlByID("lblTenantName")->Value = System::$TenantName;
			
		}
	}
?>