<div>
    <table align="center"
        style="font-weight:normal;border-collapse:collapse;border:0;margin-left:auto;margin-right:auto;padding:0;font-family:Arial,sans-serif;color:#2e2f3b;background-color:white;font-size:16px;line-height:26px;width:600px">
        <tbody>
            <tr>
                <td
                    style="border-collapse:collapse;border:1px solid #eeeff0;margin:0;padding:0;color:#2e2f3b;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                    <table
                        style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                        <tbody>
                            <tr>
                                <td colspan="4" valign="top"
                                    style="border-collapse:collapse;border:0;margin:0;padding:0;color:#2e2f3b;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:#B7C6E6;border-bottom:4px solid #213a74;text-align:center">
                                    <a href="{{ url('/') }}" target="_blank">
                                        <img src="{{ asset('imgs/email-logo.webp') }}"
                                            alt="{{ env('APP_NAME', config('app.app_name')) }}" style=" width:180px;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top"
                                    style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#2e2f3b;font-family:Arial,sans-serif;font-size:16px;line-height:26px;vertical-align:top;background-color:white;border-top:none">
                                    <table
                                        style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="border-collapse:collapse;border:0;margin:0;padding:0;color:#2e2f3b;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                                                    <div>
                                                        <table border="1" cellpadding="6" cellspacing="0"
                                                            width="100%"
                                                            style="border-collapse:collapse;font-family:Arial, Helvetica, sans-serif;font-size:14px;">
                                                            <tr>
                                                                <td colspan="2"
                                                                    style="background:#f4f4f4;font-weight:bold;padding:10px;text-align:left;">
                                                                    # Order -
                                                                    {{ env('APP_NAME', config('app.app_name')) }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;width:30%;">Name</td>
                                                                <td>{{ $order->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Email</td>
                                                                <td>{{ $order->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Country</td>
                                                                <td>{{ $order->country }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Phone</td>
                                                                <td>{{ $order->phone }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Paper Type</td>
                                                                <td>{{ $order->paper_type }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Paper Topic</td>
                                                                <td>{{ $order->paper_topic }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Academic Level</td>
                                                                <td>{{ $order->academic_level }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">No Of Pages</td>
                                                                <td>{{ $order->number_of_pages }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Detail</td>
                                                                <td>{{ $order->detail }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Reference Style</td>
                                                                <td>{{ $order->reference_style }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">References</td>
                                                                <td>{{ $order->no_of_references }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Deadline</td>
                                                                <td>{{ $order->deadline }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Subject</td>
                                                                <td>{{ $order->subject }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Price Per Page</td>
                                                                <td>{{ $order->cost_per_page . ' GBP' }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-weight:bold;">Total Price</td>
                                                                <td>{{ $order->total_price . ' GBP' }}</td>
                                                            </tr>
                                                        </table>


                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr bgcolor="#fff" style="border-top:4px solid #213a74">
                                <td align="top"
                                    style="border-collapse:collapse;border:0;margin:0;padding:0;color:#2e2f3b;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background:#B7C6E6;text-align:center">
                                    <table
                                        style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="middle"
                                                    style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#2e2f3b;font-family:Arial,sans-serif;font-size:12px;line-height:16px;vertical-align:middle;text-align:center;width:580px">
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
