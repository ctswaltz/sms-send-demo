<?php

use Illuminate\Http\Request;

Route::post('/sms', 'SmsController@sendSmsCode')->name('sms')->middleware(['sms_access_token']); // 发送短信验证码
