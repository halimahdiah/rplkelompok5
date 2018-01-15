<?php
$Location = array (
			'Umum' => array ('000','010','020','030','040','050','060','070','080','090'
						),
			'Filsafat' => array ('100','110','120','130','140','150','160','170','180','190'
						),
			'Agama' => array ('200','210','220','230','240','250','260','270','280','290'
						),
			'Sosial' => array ('300','310','320','330','340','350','360','370','380','390'
						),
			'Bahasa' => array ('400','410','420','430','440','450','460','470','480','490'
						),
			'Ilmu Murni' => array ('500','510','520','530','540','550','560','570','580','590'
						),
			'ilmu Terapan' => array ('600','610','620','630','640','650','660','670','680','690'
						),
			'Kesenian' => array ('700','710','720','730','740','750','760','770','780','790'
						),
			'Kesusasteraan' => array ('800','810','820','830','840','850','860','870','880','890'
						),
			'Ilmu Bumi' => array ('900','910','920','930','940','950','960','970','980','990'
						),
		);

$opsi = $_POST['Location'];
if($opsi =='Umum'){
	$arr = $Location['Umum'];
}else if($opsi == 'Filsafat'){
	$arr = $Location['Filsafat'];
}
else if($opsi=='Agama'){
	$arr = $Location['Agama'];
}
else if($opsi=='Sosial'){
	$arr = $Location['Sosial'];
}
else if($opsi=='Bahasa'){
	$arr = $Location['Bahasa'];
}
else if($opsi=='Ilmu Murni'){
	$arr = $Location['Ilmu Murni'];
}
else if($opsi=='Ilmu Terapan'){
	$arr = $Location['Ilmu Terapan'];
}
else if($opsi=='Kesenian'){
	$arr = $Location['Kesenian'];
}
else if($opsi=='Kesusasteraan'){
	$arr = $Location['Kesusasteraan'];
}
else if($opsi=='Ilmu Bumi'){
	$arr = $Location['Ilmu Bumi'];
}

foreach($arr as $val){
	echo '<option>'.$val.'</option>';
}

?>