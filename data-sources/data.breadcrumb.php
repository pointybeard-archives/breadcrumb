<?php

	require_once(TOOLKIT . '/class.datasource.php');
	
	Class datasourceBreadcrumb extends Datasource{
		
		public $dsParamROOTELEMENT = 'breadcrumb';

		public function about(){
			return array(
					 'name' => 'Breadcrumb',
					 'author' => array(
							'name' => 'Alistair Kearney',
							'website' => 'http://pointybeard.com',
							'email' => 'alistair@symphony21.com'),
					 'version' => '1.0',
					 'release-date' => '2009-01-02');	
		}

		
		public function grab(&$param_pool){
			$result = new XMLElement($this->dsParamROOTELEMENT);
			
			## TODO
				
			if($this->_force_empty_result) $result = $this->emptyXMLSet();
			return $result;
		}
	}

