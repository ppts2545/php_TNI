<?php
    if(isset($_FILES['fileupload'])){

        $filename = $_FILES['fileupload']['name'];
        $srcfile = $_FILES['fileupload']['tmp_name'];

        $filename = time().$filename;
        $dstfile = "img/$filename";

        if(move_uploaded_file($srcfile,$dstfile)){
            echo "upload success.";
        }else{
            echo "upload fail.";
        }
    }


?>

<form action="" method="post" enctype="multipart/form-data">
    file : <input type="file" name="fileupload" ><br>
    <input type="submit">


</form>