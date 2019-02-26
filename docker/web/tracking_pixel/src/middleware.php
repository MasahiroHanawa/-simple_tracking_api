<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);

//$app = new Slim\App;

$app->add(new Tuupola\Middleware\JwtAuthentication([
    "path" => "/private84/testTracking/1.0.0/pixel",
    "secret" => getenv("JWT_SECRET"),
    "algorithm" => ["HS256"],
    "error" => function ($response, $arguments) {
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        return $response
            ->withHeader("Content-Type", "application/json")
            ->getBody()
            ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
]));