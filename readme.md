# PHP Marquee

![License](https://img.shields.io/badge/license-MIT-green)
![PHP Version](https://img.shields.io/badge/php-%3E%3D7.4-blue)

**PHP Marquee** is a customizable marquee component with hover-pause functionality. It allows you to create dynamic, animated rows of content with alternating directions (`row` and `row-reverse`).

---

## ✨ Features

- **Dynamic Content Rendering**: Easily pass data to render customizable marquee rows.
- **Hover-Pause Animation**: Animation pauses on hover for better user interaction.
- **Alternating Directions**: Supports `row` and `row-reverse` styles for visual variation.
- **Lightweight**: Built with minimal dependencies and a simple structure.

---

## 📦 Installation

Install via [Composer](https://getcomposer.org/):

```bash
composer require sharat0/php-marque
```

## 🚀 Usage
 #Basic Example
```PHP
<?php

require __DIR__ . '/vendor/autoload.php';

use Sharat0\PhpMarque\Marquee;

echo Marquee::render([
    [
        'reverse' => false, // Normal direction
        'content' => [
            ["avatar" => "https://avatar.vercel.sh/jack", "name" => "Jack", "username" => "jack", "review" => "Amazing product!"],
            ["avatar" => "https://avatar.vercel.sh/jill", "name" => "Jill", "username" => "jill", "review" => "Fantastic experience!"],
        ],
    ],
    [
        'reverse' => true, // Reversed direction
        'content' => [
            ["avatar" => "https://avatar.vercel.sh/alex", "name" => "Alex", "username" => "alex", "review" => "Highly recommend!"],
            ["avatar" => "https://avatar.vercel.sh/maria", "name" => "Maria", "username" => "maria", "review" => "Exceeded expectations!"],
        ],
    ],
]);

```

## Customization
Input Data Structure

The render method accepts an array of rows. Each row should have:

- **reverse** (bool) Determines the direction of animation (true for reverse).
- **content:** (array) List of items to display in the row. Each item should include:
- **avatar:** URL of the avatar image.
- **name:** Name of the reviewer.
- **username:** Username of the reviewer.
- **review:** Review content.

## Example Input
```
[
    [
        'reverse' => false,
        'content' => [
            [
                'avatar' => 'https://avatar.vercel.sh/user1',
                'name' => 'User1',
                'username' => 'user1',
                'review' => 'Great experience!',
            ],
        ],
    ],
]
```
