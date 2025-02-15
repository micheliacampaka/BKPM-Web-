route::get('/foo', function (){
    return 'Hello Word';
});
route::get('user/{id}', function($id) {
    return 'user'.$id;
});
Route::get('/user', [UserController::class, 'index']);

//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);

Route::redirect('/coba','/sini');
Route::get('/profile', function(){
    return view('profile',[
        'nama' => 'Michelia',
        'nim'=> 'e41231599'
    ]);
});