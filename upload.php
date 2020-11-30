<?php
if ( !isset ( $_FILE ) ) exit ( 'ERROR' );

foreach ( $_FILE AS $file )
{
	@unlink ($file['tmp_file']);
}

echo "SUCCESS";

?>