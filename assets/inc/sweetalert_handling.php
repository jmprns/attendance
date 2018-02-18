<?php


//SWEET ALERTS HANDLING


$url = $_SERVER['REQUEST_URI'];

if(strpos($url, 'error=login') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"The email/password you type is incorrect!\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'error=filetype') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"You uploaded invalid image type.\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'error=fileupload') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"There is an error uploading your image!\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'error=filesize') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"The image file is too big!\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'error=num') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"The phone number is already registered!\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'error=barcode') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"The barcode number is already registered!\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'error=email') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"The email address is already registered!\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'register=success') !== false){
    echo "

    <script>
            swal({
            title: \"Success!\",
            text: \"One system user has been registerd!\",
            type: 'success',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'edit=success') !== false){
    echo "

    <script>
            swal({
            title: \"Success!\",
            text: \"Your info has been saved!\",
            type: 'success',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}


if(strpos($url, 'action=success') !== false){
    echo "

    <script>
            swal({
            title: \"Success!\",
            text: \"Your action was success!\",
            type: 'success',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'profile.php?add=success') !== false){
    echo "

    <script>
            swal({
            title: \"Success!\",
            text: \"One system user was registered!\",
            type: 'success',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}


if(strpos($url, 'deletesms=success') !== false){
    echo "

    <script>
            swal({
            title: \"Success!\",
            text: \"The info has been deleted.\",
            type: 'success',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'deletesms=error') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"Error deleting the info.\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'device=error') !== false){
    echo "

    <script>
            swal({
            title: \"Error!\",
            text: \"Error adding the device.\",
            type: 'error',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

if(strpos($url, 'device=success') !== false){
    echo "

    <script>
            swal({
            title: \"Success!\",
            text: \"The device has been added.\",
            type: 'success',
            timer: 3000,
            showConfirmButton: false});
            setTimeout(function(){
               
              }, 1000);

    </script>

    ";
}

?>