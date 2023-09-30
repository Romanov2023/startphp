<?php
//создаем два объекта с данными пользователя и счета
class Customer 
{
	public string $forename;
	public string $surname;
	public int $age;
	public string $email;
}

class Account
{
	public int $number;
	public float $balance;
}

$customer = new Customer();
$customer->email = 'user@cat.com';
$customer->forename = 'Alex';
$customer->surname = 'Lake';
$customer->age = 28;

$account = new Account();
$account->number = 7777777;
$account->balance = 1000.00;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p><?= $customer->forename ?></p>
	<p><?= $customer->surname  ?></p>
	<p><?= $customer->age ?></p>
	<p>Email: <?= $customer->email ?></p>
	<p>Number: <?= $account->number ?></p>
	<p>Balance: $<?= $account->balance ?></p>
</body>
</html>