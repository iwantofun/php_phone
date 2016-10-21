# 手机号码归属地库(PHP版)



		include 'geo_lib/phone_geo.php';
		$ret = GeoPhone::find('15901518888');
		print_r( $ret );

输出：
		
		Array
		(
		    [province] => 北京
		    [city] => 北京
		    [postcode] => 100000
		    [area_code] => 010
		    [op] => 移动
		)
				


特别声明：
数据文件来自项目 https://github.com/lovedboy/phone


fun~