<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_FILES['filename']['name'][0]))
{  
    $files = $_FILES['filename'];
    $uploaded = [];
    $failed = [];
    $allowed = ['jpg', 'png', 'gif'];

    //
    foreach($files['name']as $lesimages => $file_name)
    {
        //
        $file_tmp = $files['tmp_name'][$lesimages];
        $file_size = $files['size'][$lesimages];
        $file_error =$files['error'][$lesimages];
        //
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if(in_array($file_ext, $allowed))
        {
            if ($file_error === 0)
            {
                if($file_size <= 1000000)
                {
                    $file_name_new = uniqid('image') . '.' . $file_ext;
                    $file_destination = 'uploads/' . $file_name_new;

                    if(move_uploaded_file($file_tmp, $file_destination))
                    {
                        $uploaded[$lesimages] = $file_destination;
                        header('Location: show_images.php');
                    } else 
                    {

                        $failed[$lesimages] = $file_name . 'failed to upload';
                    }        
                }
                //
                 else 
                {
                    $failed[$lesimages] = $files['name'][$lesimages] . 'size is too big';
                }

             } else 
             {
                $failed[$lesimages] = $files['name'][$lesimages] . ' errored with code ' . $file_error[$lesimages];
             }
        }
        else 
        {

            $failed[$lesimages] = $files['name'][$lesimages] . ' file extension ' . $file_ext . ' is not allowed';
        }

    }
}

?>