<?php

class User {
    private $no;
    private $email;
    private $name;

    public function __construct($no, $email, $name) {
        $this->no = $no;
        $this->email = $email;
        $this->name = $name;
    }

    public function getNo() {
        return $this->no;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getName() {
        return $this->name;
    }
}

$users = [
    new User(1, 'user1@user.com', 'userA'),
    new User(2, 'admin@admin.com', 'administrator')
];

echo "<h2> Selamat Datang </h2>";
echo "No &nbsp;&nbsp Email &nbsp;&nbsp Nama <br>";

foreach ($users as $user) {
    echo "{$user->getNo()}&nbsp;&nbsp {$user->getEmail()}&nbsp;&nbsp {$user->getName()} <br>";
}
?>