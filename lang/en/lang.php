<?php return [
    'plugin' => [
        'name' => 'Control My Budget',
        'description' => '',
    ],
    'model' => [
        'purchase' => [
            'date' => [
                'label' => 'Date',
            ],
            'place' => [
                'label' => 'Place',
            ],
            'amount' => [
                'label' => 'Amount',
            ],
            'label-plural' => 'Purchases',
            'created_at' => [
                'label' => 'Created at',
            ],
        ],
        'purchase-group' => [
            'name' => [
                'label' => 'Name',
            ],
            'users' => [
                'label' => 'Users',
            ],
        ],
        'monthlygoal' => [
            'month' => [
                'label' => 'Month',
            ],
            'year' => [
                'label' => 'Year',
            ],
            'amount_goal' => [
                'label' => 'Amount',
            ],
            'label' => [
                'plural' => 'Monthly Goals',
            ],
            'year_month' => 'Year - Month',
        ],
        'periodgoal' => [
            'name' => [
                'label' => 'Name',
            ],
            'amount_goal' => [
                'label' => 'Amount',
            ],
            'date_start' => [
                'label' => 'Start Date',
            ],
            'date_end' => [
                'label' => 'End Date',
            ],
            'label' => [
                'plural' => 'Period Goals',
            ],
        ],
    ],
    'permission' => [
        'tab' => 'Control My Budget',
        'purchase' => 'Manage Purchases',
        'purchase-group' => 'Manage Purchase groups',
        'monthlygoal' => 'Manage Monthly Goal',
        'periodgoal' => 'Manage Period Goal',
        'report' => [
            'dailybudget' => 'Access Daily Budget Report',
        ],
    ],
    'purchase-group' => [
        'label' => [
            'plural' => 'Purchase Groups',
        ],
    ],
    'purchase' => [
        'purchase_group' => [
            'label' => 'Purchase Group',
        ],
    ],
];