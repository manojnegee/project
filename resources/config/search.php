<?php

return [
    'datatables' => [
        'users'        => \Antares\Users\Http\Datatables\Users::class,
        'customfields' => \Antares\Customfields\Http\Datatables\Customfields::class,
        'module'       => \Antares\Module\Http\Datatables\ModuleDatatable::class
    ]
];
