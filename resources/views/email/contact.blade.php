<div>
    <table align="center" style="font-weight:normal;border-collapse:collapse;border:0;margin-left:auto;margin-right:auto;padding:0;font-family:Arial,sans-serif;color:#555559;background-color:white;font-size:16px;line-height:26px;width:600px">
        <tbody>
            <tr>
                <td
                    style="border-collapse:collapse;border:1px solid #eeeff0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                    <table
                        style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                        <tbody>
                            <tr>
                                <td colspan="4" valign="top"
                                    style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:#b7c6e6;border-bottom:4px solid #213a74;text-align:center">
                                    <a href="{{url('/')}}" target="_blank">
                                        <img  src="{{ asset('imgs/email-logo.webp') }}" alt="{{env('APP_NAME', config('app.app_name'))}}" style="width: 180px; padding:5px">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;vertical-align:top;background-color:white;border-top:none">
                                    <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                                                    <div>
                                                        Greetings from {{ config('app.app_name') }},
                                                        <br>
                                                        <br>
                                                        Thank you for reaching out! We have successfully received your query. Please make sure the following details are correct.
                                                        <br>
                                                        <br>
                                                        <strong>Client’s Information:</strong>
                                                        <hr>
                                                        <strong>Name :  {{$contact->name}}</strong>
                                                        <br>
                                                        <strong>Email :  {{$contact->email}}</strong>
                                                        <br>
                                                        <strong>Country :  {{$contact->country}}</strong>
                                                        <br>
                                                        <strong>Number :  {{$contact->phone}}</strong>
                                                        <br>
                                                        <strong>Subject :  {{$contact->subject}}</strong>
                                                        <br>
                                                        @if(!empty($contact->detail))
                                                            <strong>Detail: {{ $contact->detail }}</strong>
                                                            <br>
                                                        @endif
                                                        <br>Thank you for choosing {{ config('app.app_name') }},
                                                        <br>
                                                        <br>Team <strong>{{ config('app.app_name') }}</strong>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr bgcolor="#fff" style="border-top:4px solid #213a74;">
                                <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background:#b7c6e6;text-align:center">
                                    <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="middle"
                                                    style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:12px;line-height:16px;vertical-align:middle;text-align:center;width:580px">
                                                    <div>
                                                        <b>{{ config('app.app_name') }}</b>
                                                        <br> © {{ now()->year }}
                                                        <br>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>

