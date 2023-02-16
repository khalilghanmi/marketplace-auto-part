<?php
include '../connection.php'; 
if(empty($name_options) or empty($type_options) )
    {
    echo '<div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
    Attention, seul le champs peut rester vide !</button>
</div> 
   ';
    }

?>