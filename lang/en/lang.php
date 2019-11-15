<?php

return [
    'navigation' => [
        'label' => 'Services',
        'plans' => 'Plans',
    ],
    'permissions' => [
        'access_plans' => 'Manage plans',
        'tab'          => 'Software services',
    ],
    'plans' => [
        'form' => [
            'description'       => 'Description',
            'general_tab'       => 'General',
            'is_active'         => 'Status',
            'is_active_comment' => 'When off, this plan cannot be purchased',
            'name'              => 'Name',
            'schedules_tab'     => 'Billing Schedules',
            'slug'              => 'Slug',
        ],
        'list' => [
            'created_at'       => 'Created',
            'id'               => 'ID',
            'is_active'        => 'Status',
            'is_active_filter' => 'Hide disabled',
            'is_active_off'    => 'Disabled',
            'is_active_on'     => 'Active',
            'name'             => 'Name',
            'schedules_count'  => 'Schedules',
            'slug'             => 'Slug',
            'updated_at'       => 'Last Updated',
        ],
        'list_title' => 'Manage Plans',
        'model'      => 'Plan',
    ],
    'schedules' => [
        'form' => [
            'calendar_duration'   => 'Calendar Duration',
            'calendar_unit'       => 'Calendar Unit',
            'calendar_unit_day'   => 'Day',
            'calendar_unit_month' => 'Month',
            'calendar_unit_year'  => 'Year',
            'cost'                => 'Cost',
            'name'                => 'Name',
        ],
        'list' => [
            'interval'                => 'Interval',
            'interval_day_plural'     => ':duration days',
            'interval_day_singular'   => ':duration day',
            'interval_month_plural'   => ':duration months',
            'interval_month_singular' => ':duration month',
            'interval_year_plural'    => ':duration years',
            'interval_year_singular'  => ':duration year',
            'created_at'              => 'Created',
            'cost'                    => 'Cost',
            'id'                      => 'ID',
            'name'                    => 'Name',
            'updated_at'              => 'Last Updated',
        ],
        'model' => 'Schedule',
    ],
];
