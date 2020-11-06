@extends('layouts.base')

@section('title')
mytitle
@endsection
@section('content')
<?php

use Illuminate\Support\Facades\Auth;

$user = Auth::user();
$login_username = $user->name;
echo "<h2>";
echo "Hi!" . $login_username;
echo "</h2>";
?>
<h4>
  welcome to my test site!
</h4>
@csrf

@endsection