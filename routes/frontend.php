<?php
//Front Pagw
Route::get('/', function () {
        return view('web.index');
});
// Single Article
Route::get('/single', function(){
        return view('web.single');
});

