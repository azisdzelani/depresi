<?php header('Content-type:application/xml; chartset="ISO-8859-1"',true) ?>


<data>
	<?php foreach ($xml as $value) { ?>
		<dokumen>
			<tanggal><?= $value->tanggal?></tanggal>
			<nama><?= $value->nama_lengkap?></nama>
			<kategori><?= $value->nama_kategori?></kategori>
			<judul><?= $value->judul?></judul>
			<keterangan><?= $value->keterangan?></keterangan>
			<url><?=$value->file?></url>
		</dokumen>
	<?php } ?>
</data>

	

