<?php

return [

    "title" => env("SWAGGER_TITLE","Laravel G4T Documentation"),
    
    "description" => env("SWAGGER_DESCRIPTION", "Laravel autogenerate swagger"),

    "email" => env("SWAGGER_EMAIL","hussein4alaa@gmail.com"),

    "version" => env("SWAGGER_VERSION", "1.0.0"),

    "auth_middlewares" => [
        "auth",
        "auth:api"
    ],

    "url" => env("SWAGGER_URL", "swagger/documentation"),
    
    "enable" => env('SWAGGER_ENABLED', true),

    "servers" => [
        [
            "url" => env("APP_URL"),
            "description" => "localhost"    
        ],
        [
            "url" => "http://localhost",
            "description" => "production"    
        ],
    ],

    "security_schemes" => [
        "authorization" => [
            "type" => "apiKey",
            "name" => "authorization",
            "in" => "header"
        ],
    ]

];