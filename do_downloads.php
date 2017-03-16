// Bootstrap-Downloadpanel ausgeben
// needs: functions do_icon(), do_filesize()

if (!function_exists('bs_downloadpanel')) {
  function bs_downloadpanel($files,$title) {
	
		if ($files!="") { 
		$ptop = '<div id="downloads" class="panel panel-primary">
		  <div class="panel-heading"><i class="fa fa-download" aria-hidden="true"></i> '.$title.'</div>
		  <div class="panel-body">
		<div class="textcontainer">';	
		foreach ((explode(",", $files)) as $file) {
		 
				$parsed_icon = do_icon($file);
				$file_size = ' ('.do_filesize(rex_path::media($file)).')';
				
				$media = rex_media::get($file);
				$file_desc = $media->getValue('med_description');
				$file_name = $media->getTitle();
				if ($file_name=="")
				{
					$file_name = $file;
				}
				
				$pfiles.= '<div class="col-sm-12"><a href="/media/'.$file.'">'.$parsed_icon.$file_name.$file_size.'</a></div>';
			}
		
		$pbottom = '</div></div></div>';
		$output = $ptop.$pfiles.$pbottom;
		return $output; 
		
		 }
	 
	 }
 }
