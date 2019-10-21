@extends('emails.layout')

@section('email-specific-link')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic" />
@stop

@section('email-specific-css')
    <style type="text/css">
        #confirmEmail { margin: 55px auto 33px auto; }
        body { font-family: 'Noto Sans', sans-serif; font-size: 16px; }
    </style>
@stop

@section('content')
    Hi ,
    <br /><br /><br />
    <div id="confirmationContainer" align="center">
        This is a test mail.
    </div>
@stop
