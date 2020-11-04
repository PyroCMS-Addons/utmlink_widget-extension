<?php

return [

    'default_utm' => [
        "type"   => "anomaly.field_type.select",
        "config" => [
            "options"       => [
                "onpage" => "On Page",
                "link" => "https://utmbuilder.net/"                                
            ],
            "separator"     => ":",
            "default_value" => null,
            "button_type"   => "info",
            "handler"       => "options",
            "mode"          => "dropdown",
        ]
    ],

];