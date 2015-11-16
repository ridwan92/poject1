<?php
echo $judul;

$this->table->set_heading('No','Category Name','Description','Action');
$no=0;
foreach($categories as $row):
	$url = site('Beranda/delete'.$row->CategoryID);
	$del = anchor($url,'Delete');

	$no++;
	$this->table->add_row($no,$row->CategoryName,
						$row->Description,$del); 
endforeach;
$template = array(
        'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
);

$this->table->set_template($template);

echo $this->table->generate();