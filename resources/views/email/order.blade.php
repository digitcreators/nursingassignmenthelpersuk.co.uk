@extends('email.layouts.layout')

@section('content')
    <p> Hello!</p>
    <p style="font-weight:bold ;font-size:20px">{{ $data['user']->name }}</p>
    <p>Greetings From {{ config('app.app_name') }}</p>

    @if ($data['flag'] == true)
        <div style="margin-bottom: 15px;" class="">

            <div style="font-size: 17px; line-height: 140%; word-wrap: break-word;">
                <div>Your Account has been created successfully the
                    following are your login credentials.</div>
            </div>
            <p style="font-size: 14px; line-height: 130%; text-align: center;">
                <span style="font-size: 36px; line-height: 46.8px; font-family: 'Playfair Display', serif;"><span
                        style="line-height: 46.8px; font-size: 36px;">Account's Information</span></span>
            </p>
            <table>

                <tbody>
                    <tr>
                        <th
                            style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                            Email:</th>
                        <td
                            style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                            <strong> {{ $order->email ?? '-' }}
                            </strong>
                        </td>
                    </tr>

                    <tr>
                        <th
                            style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                            Password:</th>
                        <td
                            style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                            <strong> {{ $data['password'] ?? '-' }}
                            </strong>
                        </td>
                    </tr>
                    <tr>
                    </tr>

                </tbody>

            </table>
            <table cellspacing="0" cellpadding="0" border="0" align="center" style="margin:20px auto;">
                <tr>
                    <td style="border-radius:8px; background-color: #213a74;">
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <td align="center"
                                    style="font-size:16px; font-family:Arial, sans-serif; color:#ffffff; font-weight:bold; border: 4px solid #B7C6E6;
                                 padding:12px 24px; display:block;">
                                    <a href="{{ route('login') }}" target="_blank"
                                        style="color:#ffffff; text-decoration:none; display:block;">
                                        Login
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    @endif

    <p>Following are the details recieved for the order uploaded by you</p>

    <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center; color:black">Order Details</p>
    <table>

        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Name</th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong>{{ $order->name }}</strong>
            </td>
        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Email</th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong>{{ $order->email }}</strong>
            </td>
        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Phone</th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong>{{ $order->phone }}</strong>
            </td>
        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Country</th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong>{{ $order->country }}</strong>
            </td>
        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Paper Topic</th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong>{{ $order->paper_topic ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Paper Type</th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong>{{ $order->paper_type ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Academic Level </th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong> {{ $order->academic_level ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                No Of Pages </th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong> {{ $order->number_of_pages ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Reference Style </th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong> {{ $order->reference_style ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                References </th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong> {{ $order->no_of_references ?? '-' }}</strong>
            </td>

        </tr>
        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Deadline </th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong> {{ $order->deadline ?? '-' }}</strong>
            </td>

        </tr>

        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Detail</th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong>{{ $order->detail ?? '-' }}</strong>
            </td>

        </tr>

        <tr>
            <th
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                Total Cost</th>
            <td
                style="border: 2px solid #2e2f3b; text-align: left;padding: 8px;width: 14rem;color: #2e2f3b; font-size: 17px;">
                <strong>{{ addCurrency($data['invoice']->amount) }}</strong>
            </td>
        </tr>
    </table>


    <table cellspacing="0" cellpadding="0" border="0" align="center" style="margin:20px auto;">
        <tr>
            <td style="border-radius:8px; background-color: #213a74;">
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td align="center"
                            style="font-size:16px; font-family:Arial, sans-serif; color:#ffffff; font-weight:bold;
                             padding:12px 24px; display:block;">
                            <a href="{{ config('app.tawk_to') }}"
                                style="color:#ffffff; text-decoration:none; display:block;">
                                Live Chat
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <p>Kindly make the payment for the confirmation of your order</p>
    <table cellspacing="0" cellpadding="0" border="0" align="center" style="margin:20px auto;">
        <tr>
            <td style="border-radius:8px; background-color: #213a74;">
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td align="center"
                            style="font-size:16px; font-family:Arial, sans-serif; color:#ffffff; font-weight:bold; border: 4px solid #B7C6E6;
                                 padding:12px 24px; display:block;">
                            <a style="color: white"
                                href="{{ route('invoice', ['reference' => $data['invoice']->ref_no]) }}">
                                Pay {{ addCurrency($data['invoice']->amount) }}
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <p>if you want to share more information or files related to your order , you can simply email us at
        {{ config('app.app_email') }}</p>
    <p>For any further queries, feel free to contact us via email or Online Chat,</p>
    <p>Best Regards</p>
    <p>Customer Support,</p>
    <div style="text-align: left;margin-left:8px; margin-right: 8px;color:black">{{ config('app.app_name') }}
    </div>
@endsection
