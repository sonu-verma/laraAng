@extends('emails.layout')

@section('email-specific-link')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic" />
    <!-- test -->
@stop

@section('email-specific-css')
    <style type="text/css">
        #confirmEmail { margin: 55px auto 33px auto; }
        body { font-family: 'Noto Sans', sans-serif; font-size: 16px; }
    </style>
@stop

@section('content')
    @php $user_name = $approver_array['name'] ? $approver_array['name'] : "Approver"; @endphp
    <p style="margin:0 0 20px">Dear {{ $user_name }},</p>
    <p style="margin:0 0 16px">Please check campaign details and perform necessary action.</p>
    <br />
    <br />
    Best regards,<br />
    The MHLMS Team 
@stop