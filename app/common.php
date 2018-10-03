<?php
//change the working directory to this get_included_files
chdir(__DIR__);
set_include_path (__DIR__);

if ($_SERVER['REQUEST_METHOD']=='POST'
&& stripos($_SERVER['CONTENT_TYPE'],'application/json') !==false ) {
  $_POST = json_decode(file_get_contents('php://input'),true);
}

require 'enviroment.php'

/**models**/

require 'models/work.php';
require 'models/team.php';
