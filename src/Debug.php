<?php 

namespace Pillax;

class Debug
{
	public static function dump($arr, $title='')
	{
		if(php_sapi_name() == 'cli')
		{
			htmlentities(print_r($arr));
			echo "\r\n";
		}
		else
		{
			echo '
			<div style="border: 1px solid red; background-color: #FFF0F0; padding: 5px;">
				<pre>
				' . (($title != '') ? '<b style="color: red;">' . $title . '</b><br />' : '');

			htmlentities(print_r($arr));

			echo '
				</pre>
			</div>';
		}
	}


	public static function dd($arr, $title='')
	{
		self::dump($arr, $title);
		die;
	}
}
