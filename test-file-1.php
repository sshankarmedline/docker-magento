<?php
declare(strict_types=1);

// Simple configuration
$appName = 'Sample PHP Application';
$version = '1.0.0';

// Basic function
function greet(string $name): string
{
    return "Hello, {$name}!";
}

// Example usage
$userName = $_GET['name'] ?? 'Guest';

echo "<h1>{$appName}</h1>";
echo "<p>Version: {$version}</p>";
echo "<p>" . greet($userName) . "</p>";
