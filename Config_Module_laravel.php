config/modules.php
change 'namespace' => 'FWTA',
And then in composer.json
change 
"autoload": {
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-4": {
            "App\\": "app/",
            "FWTA\\": "Modules/"
            }
    },
