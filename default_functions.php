
// Deutsches Datum

if (!function_exists('do_date')) {
  function do_date($date) {
 setlocale(LC_TIME, "de_DE");
 return strftime("%e. %B %Y", strtotime($date)); // Deutsches Datum
  	
  }
}

// Ermitttelt die Dateigröße

if (!function_exists('do_filesize')) {
  function do_filesize($URL) {
    $groesse = filesize($URL);
    if($groesse<1000) {
      return number_format($groesse, 0, ",", ".")." Bytes";
    } elseif($groesse<1000000) {
      return number_format($groesse/1024, 0, ",", ".")." kB";
    } else {
      return number_format($groesse/1048576, 0, ",", ".")." MB";
    }
  }
}


// Legt das Downloadicon fest. 

if (!function_exists('do_icon')) {
  function do_icon($file) {
  	$ext = substr(strrchr($file, '.'), 1); 
    switch (strtolower($ext)) {
    	
      case 'doc': case 'docx': return '<i class="fa fa-file-word-o"></i>&nbsp;';
      case 'xls': case 'xlsx': return '<i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp;';
      case 'txt': case 'rtf': return '<i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;';
      case 'ppt': case 'pptx': return '<i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>&nbsp;';
      case 'pdf': return '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;';
      case 'zip': return '<i class="fa fa-archive-pdf-o" aria-hidden="true"></i>&nbsp;';
      case 'jpg': return '<i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;';
      case 'png': return '<i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;';
      case 'gif': return '<i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;';
      default: return '<i class="fa fa-file-o" aria-hidden="true"></i>&nbsp;';
     
    }
  }
}
