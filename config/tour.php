<?php
return [
    'tours' => [



        'Adventure Tour' => [
            'id' => 1,
            'image' => asset('assets/images/almaty.png'),
            'description' => 'An exciting adventure.',
            'name' => 'Adventure Tour',
            'destination_to_search' => ['India'],
            'destination' => 'India',
            'from_date' => '2021-01-01',
            'to_date' => '2021-01-10',
            'days' => 10,
            'minimum_pax' => 5,
            'tags' => ['adventure', 'fun', 'exciting'],
            'introduction'  => ['This is an exciting adventure tour.', 'You will have a lot of fun.', 'It is very exciting.'],
            'itinerary' => [
                [
                    'title' => 'Kuala Lumpur to Delhi',
                    'highlights' => ['Flight', 'Meal', 'Hotel'],
                    'accommodation' => 'Hotel',
                    'meal' => 'Breakfast',
                ],
                [
                    'title' => 'Kuala Lumpur to Delhi',
                    'highlights' => ['Flight', 'Meal', 'Hotel'],
                    'accommodation' => 'Hotel',
                    'meal' => 'Breakfast',
                ],
                [
                    'title' => 'Kuala Lumpur to Delhi',
                    'highlights' => ['Flight', 'Meal', 'Hotel'],
                    'accommodation' => 'Hotel',
                    'meal' => 'Breakfast',
                ],
            ],
            'tour_fare' => [

                    'total' => 1000,
                    'additional' => 100,
                    'return' => 100,

            ],
            'validity' => ['the estimated tour fare','the tour fare for the ground arrangement','the air fare included in the tour fare above is only an estimate'],
            'payment_terms' => ['Deposit', 'Final Payment', 'Cancellation'],
            'whats_included' => ['Accommodation', 'Meals', 'Transportation'],
            'whats_excluded' => ['Insurance', 'Visa', 'Personal Expenses'],
            'price' => 100,
            'types' => ['Adventure', 'Fun', 'Exciting'],
            'season' => ['Winter'],

        ],



        // 'Culture Tour' => [
        //     'id' => 2,
        //     'description' => 'Explore the local culture.',
        //     'price' => 150,
        // ],
        // Add more tours as needed
    ],
];
