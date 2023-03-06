factory->define(User::class, function (Faker $faker){
return[

'name' => $faker->name,
'email' => $faker->unique()->safeEmail,
'email_verified_at' => now(),
'password' => 'dfsdfsdfsdfsfsdfdfsdsf',
'remember_token' => Str::random(10),
];
});
