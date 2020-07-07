<?php


    $currentDir = "/home/stefantcleal/public_html/CoronaVirus/";
    $uploadDirectory = "Images/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpg','jpeg','png']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));


    $uploadPath = $currentDir . $uploadDirectory . "nome_arquivo_upload";
    #echo "<p>uploadPath = $uploadPath</p>";
    #echo "<p>fileSize = $fileSize</p>";
    #echo "<p>fileTmpName = $fileTmpName</p>";
    #echo "<p>fileType = $fileType</p>";
    #echo "<p>fileExtension = $fileExtension</p>";

    //$imageData = file_get_contents($_FILES['myfile']['tmp_name']); // path to file like /var/tmp/...

    //echo "passou 1";

    var_dump($_POST);

    if (isset($_POST['submit']))
    {
       # echo "passou aqui";

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "Este tipo de arquivo não é permitido. São somente aceitos arquivos JPG ou PDF.";
        }

        if ($fileSize > 5000000) {
            $errors[] = "O arquivo é maior do que 5MB. Desculpe, o tamanho máximo do arquivo é 5MB.";
        }

        //print_r($errors);

        if (empty($errors)) {
            //echo "passou 2";
            //apaga arquivo .jpg ou .pdf;
            if(file_exists($uploadPath.".jpg")) unlink($uploadPath.".jpg");
            $myFileExtension = $fileExtension;
            if($fileExtension=="jpeg") $myFileExtension = "jpg";
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath.".".$myFileExtension);

            if ($didUpload) {
                // display in view
                //
               # echo "<p>sucesso</p>";
            } else {
                //echo "An error occurred somewhere. Try again or contact the admin";
                #echo "<p>Erro</p>";
            }
        }
    }
    $string = "python3 /home/stefantcleal/Programs/query_covid19.py $uploadPath/$fileTmpName.$myFileExtension"

    $output = shell_exec (string $string);
    ?>
