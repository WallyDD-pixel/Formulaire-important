<?php



function deplie_tableau($tableau)
{
if ($substr($Nom, 0, length)){

        header('location : rediction.php');
    }
}
foreach ($tableau as $key => $value) {

	if (is_array($value))
	{
		deplie_tableau($value);

    }
	else
	{
	
    echo "La clef est: $key : ";
    echo "et la valeur est $value : <BR>";
	}
}
}

deplie_tableau($_POST) ;

?>
