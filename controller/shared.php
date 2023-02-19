<?php
//for header
$loginStatus = (session('login')) ? 'hidden' : '';
$logoutStatus = (session('login')) ? '' : 'hidden';
$userName = (session('login')) ? auth::user()->fullname : '';