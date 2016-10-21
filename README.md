# 手机号码归属地库(PHP版)


特别声明：
库文件引用 https://github.com/lovedboy/phone



		include 'geo_lib/phone_geo.php';
		$ret = GeoPhone::find('15901518888');
		print_r( $ret );

输入：
		
		Array
		(
		    [province] => 北京
		    [city] => 北京
		    [postcode] => 100000
		    [area_code] => 010
		    [op] => 移动
		)
				

fun~