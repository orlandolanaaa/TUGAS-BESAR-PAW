<?php
//login.php

include('config.php');

if(isset($_SESSION['user_id']))
{
	header("location:home.php");
}

$message = '';

if(isset($_POST["login"]))
{
	$query = "
	SELECT * FROM user_perusahaan 
		WHERE user_emailP = :user_emailP
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
				'user_emailP'	=>	$_POST["user_emailP"]
			)
	);
	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if($row['user_statusP'] == 'verified')
			{
				if(password_verify($_POST["user_passP"], $row["user_passP"]))
				//if($row["user_password"] == $_POST["user_password"])
				{
					$_SESSION['user_id'] = $row['id_perusahaan'];
					header("location:home.php");
				}
				else
				{
					$message = "<label>Wrong Password</label>";
				}
			}
			else
			{
				$message = "<label class='text-danger'>Please First Verify, your email address</label>";
			}
		}
	}
	else
	{
		$message = "<label class='text-danger'>Wrong Email Address</label>";
	}
}

?>