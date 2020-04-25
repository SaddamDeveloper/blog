<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/frontend.php';

/***
 * Admin Login Control
 */
Route::get('/admin/login', 'Admin\AdminLoginController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\AdminLoginController@adminLogin');
Route::post('/admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

/***
 * Member Login Control
 */
Route::get('/member/login', 'Member\MemberLoginController@showMemberLoginForm')->name('member.login');
Route::post('/member/login', 'Member\MemberLoginController@memberLogin');
Route::post('/member/logout', 'Member\MemberLoginController@logout')->name('member.logout');