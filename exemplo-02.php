<?php

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename)); //le conteudo do arquivo

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

//echo "data:image/png;base64,".$base64;
$base64encode =  "data:".$mimetype.";base64,".$base64; // usa-se assim para o mesmo cod. funcionar independente do tipo de arquivo png, jpg, gif

?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>">