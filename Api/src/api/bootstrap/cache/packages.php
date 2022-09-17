<?php return array (
  'bensampo/laravel-enum' => 
  array (
    'providers' => 
    array (
      0 => 'BenSampo\\Enum\\EnumServiceProvider',
    ),
  ),
  'facade/ignition' => 
  array (
    'providers' => 
    array (
      0 => 'Facade\\Ignition\\IgnitionServiceProvider',
    ),
    'aliases' => 
    array (
      'Flare' => 'Facade\\Ignition\\Facades\\Flare',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'fruitcake/laravel-cors' => 
  array (
    'providers' => 
    array (
      0 => 'Fruitcake\\Cors\\CorsServiceProvider',
    ),
  ),
  'laravel-doctrine/migrations' => 
  array (
    'providers' => 
    array (
      0 => 'LaravelDoctrine\\Migrations\\MigrationsServiceProvider',
    ),
  ),
  'laravel-doctrine/orm' => 
  array (
    'providers' => 
    array (
      0 => 'LaravelDoctrine\\ORM\\DoctrineServiceProvider',
    ),
    'aliases' => 
    array (
      'Registry' => 'LaravelDoctrine\\ORM\\Facades\\Registry',
      'Doctrine' => 'LaravelDoctrine\\ORM\\Facades\\Doctrine',
      'EntityManager' => 'LaravelDoctrine\\ORM\\Facades\\EntityManager',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
);