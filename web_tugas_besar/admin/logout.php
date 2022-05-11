<?php 
session_destroy();
echo "<script>
        alert('anda telah logout!');
        document.location.href = '../index.php';
     </script>";

?>