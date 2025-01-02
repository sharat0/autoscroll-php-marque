<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/marquee.css">
</head>

<body>
<?php

require __DIR__ . '/../vendor/autoload.php';

use Sharat0\PhpMarque\Marquee;

echo Marquee::render([
    [
        'reverse' => false, // First row (normal direction)
        'content' => [
            ["avatar" => "https://avatar.vercel.sh/jack", "name" => "Jack", "username" => "jack", "review" => "I've never seen anything like this before. It's amazing."],
            ["avatar" => "https://avatar.vercel.sh/jack", "name" => "Jack", "username" => "jack", "review" => "Simply incredible!"],
            ["avatar" => "https://avatar.vercel.sh/jack", "name" => "Jack", "username" => "jack", "review" => "A must-see!"],
        ],
    ],
    [
        'reverse' => true, // Second row (reversed direction)
        'content' => [
            ["avatar" => "https://avatar.vercel.sh/jill", "name" => "Jill", "username" => "jill", "review" => "I'm speechless. This is amazing."],
            ["avatar" => "https://avatar.vercel.sh/jill", "name" => "Jill", "username" => "jill", "review" => "Outstanding work!"],
            ["avatar" => "https://avatar.vercel.sh/jill", "name" => "Jill", "username" => "jill", "review" => "Fantastic!"],
        ],
    ],
]);
?>

</body>

</html>