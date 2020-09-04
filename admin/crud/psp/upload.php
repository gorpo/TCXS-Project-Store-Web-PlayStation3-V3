<?php 


// CAMINHO PARA SALVAR A IMAGEM | CAMINHO DA MARCA DAGUA
$targetDir = "../../../loja/imagens/psp/"; 
$watermarkImagePath = '../assets/images/watermark.png'; 
 


function resize_image($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    return $dst;
}


$statusMsg = ''; 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["file"]["name"])){ 
        // File upload path 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to the server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Load the stamp and the photo to apply the watermark to 
                //echo $targetFilePath;
                 $im = resize_image($targetFilePath, 200, 200); 
                
                $watermarkImg = imagecreatefrompng($watermarkImagePath); 
                switch($fileType){ 
                    case 'jpg': 
                        $im = imagecreatefromjpeg($targetFilePath); 
                        break; 
                    case 'jpeg': 
                        $im = imagecreatefromjpeg($targetFilePath); 
                        break; 
                    case 'png': 
                        $im = imagecreatefrompng($targetFilePath); 
                        break; 
                    default: 
                        $im = imagecreatefromjpeg($targetFilePath); 
                } 
                 


                // SETA AS MARGENS PARA A MARCA DAGUA PODENDO REALINHAR ELA
                $marge_right = 00; 
                $marge_bottom = 00; 
                 
                // PEGA O WIDHT E HEIGHT DA MARCA DAGUA
                $sx = imagesx($watermarkImg); 
                $sy = imagesy($watermarkImg); 
                 
                // Copie a imagem da marca d'água em nossa foto usando os deslocamentos de margem e
                // a largura da foto para calcular o posicionamento da marca d'água.

                //redimensiona a imagem 
                $im = imagescale($im,250,239);
                imagecopy($im, $watermarkImg, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($watermarkImg), imagesy($watermarkImg)); 
                 
                // Save image and free memory 
                imagepng($im, $targetFilePath); 
                imagedestroy($im); 
     
                if(file_exists($targetFilePath)){ 
                    $statusMsg = "A imagem foi redimensionada e adicionada marca dagua com sucesso!"; 
                }else{ 
                    $statusMsg = "Upload da imagem falhou, tente novamete."; 
                }  
            }else{ 
                $statusMsg = "Desculpe, ocorreu um erro ao enviar seu arquivo."; 
            } 
        }else{ 
            $statusMsg = 'Desculpe, apenas arquivos JPG, JPEG e PNG podem fazer upload.'; 
        } 
    }else{ 
        $statusMsg = 'Selecione um arquivo para fazer upload.'; 
    } 
} 
 

 
// Display status message 
//echo $statusMsg;
echo $fileName;
echo "<br><br><img src='$targetFilePath'>";