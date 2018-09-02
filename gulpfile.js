/*
 * Copyright (c) 2018. Arash Hatami
 */

process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');

elixir(function (mix) {
  // CAdmin
  mix.less('/CAdmin/app.less', './public/CAdmin/css/app.min.css');
});
