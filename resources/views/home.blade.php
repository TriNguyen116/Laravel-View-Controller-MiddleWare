<h1>Hoc laravel</h1>
<?php
echo date('Y-m-d H:i:s');
// echo env('APP_ENV');
// echo config('app.env') // config/app.php --> serach: env 

// if (env('APP_ENV') == 'production') {
//   echo 'call api live';
// } else {
//   echo 'call api sandbox';
// };
// 
?>

<a href="<?php echo route('admin.example', ['id' => 1, 'slg' => 'tin tuc']); ?>">xem tin tuc</a>