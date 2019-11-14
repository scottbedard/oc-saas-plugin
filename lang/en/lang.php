<?php

return [
    'navigation' => [
        'label'     => 'Services',
        'plans'     => 'Plans',
        'schedules' => 'Schedules',
    ],
    'permissions' => [
        'access_plans'     => 'Manage plans',
        'access_schedules' => 'Manage billing schedules',
        'tab'              => 'Software services',
    ],
    'plans' => [
        'form' => [
            'description'       => 'Description',
            'general_tab'       => 'General',
            'is_active'         => 'Status',
            'is_active_comment' => 'When off, this plan cannot be purchased',
            'name'              => 'Name',
            'schedules_tab'     => 'Schedules',
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
            'name'                => 'Name',
        ],
        'list' => [
            'active_plans_count'               => 'Active Plans',
            'billing_frequency'                => 'Billing Frequency',
            'billing_frequency_day_plural'     => ':duration days',
            'billing_frequency_day_singular'   => ':duration day',
            'billing_frequency_month_plural'   => ':duration months',
            'billing_frequency_month_singular' => ':duration month',
            'billing_frequency_year_plural'    => ':duration years',
            'billing_frequency_year_singular'  => ':duration year',
            'created_at'                       => 'Created',
            'has_active_plan_filter'           => 'Hide schedules with no active plans',
            'id'                               => 'ID',
            'name'                             => 'Name',
            'plans_count'                      => 'Total Plans',
            'updated_at'                       => 'Last Updated',
        ],
        'list_title' => 'Manage Schedules',
        'model'      => 'Schedule',
    ],
];
