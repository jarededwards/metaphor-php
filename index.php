<?php
// Define a very simple router
function router() {
    // Get the current request URI
    $uri = $_SERVER['REQUEST_URI'];

    // Define routes and their corresponding actions
    $routes = [
        '/' => function() {
            echo "Hello, World!";
        },
        '/goodbye' => function() {
            echo "Goodbye!";
        },
        // Add more routes as needed
    ];

    // Check if the current URI matches any defined route
    if (array_key_exists($uri, $routes)) {
        // Call the corresponding action for the matched route
        $routes[$uri]();
    } else {
        // Return a 404 response for unknown routes
        http_response_code(404);
        echo "404 Not Found";
    }
}

// Call the router function
router();
?>

