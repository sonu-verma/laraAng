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
    @php
        $dear_user = $EMAILARRAY['dear_user'] ? $EMAILARRAY['dear_user'] : "User";
        $lead_id = $EMAILARRAY['lead_id'] ? $EMAILARRAY['lead_id'] : "NA";
        $prospect_id = $EMAILARRAY['prospect_id'] ? $EMAILARRAY['prospect_id'] : "NA";
        $opportunity_id = $EMAILARRAY['opportunity_id'] ? $EMAILARRAY['opportunity_id'] : "NA";

    @endphp
    <p style="margin:0 0 20px">Dear {{ $dear_user }},</p>
    <p style="margin:0 0 16px">Opportunity Created - </p>
    <p style="margin:0 0 16px">LEAD ID - {{ $lead_id }}</p>
    <p style="margin:0 0 16px">PROSPECT ID - {{ $prospect_id }}</p>
    <p style="margin:0 0 16px">OPPORTUNITY ID - {{ $opportunity_id }}</p>
    <br />
    <br />
    Best regards,<br />
    The MHLMS Team
@stop