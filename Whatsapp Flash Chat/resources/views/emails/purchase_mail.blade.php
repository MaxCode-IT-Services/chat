<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Invoice - {{ setting('system_name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet" type="text/css">
    @php $color = setting('primary_color'); @endphp
    <style>
        html, body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif !important;
        }

        table, td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        table table table {
            table-layout: auto;
        }

        a {
            text-decoration: none;
            color: {{$color}} !important;
            word-break: break-all;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        .email-body {
            width: 96%;
            margin: 0 auto;
            background: #ffffff;
            padding: 10px !important;
        }

        .invoice-header {
            background-color: {{$color}};
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: 600;
        }

        .invoice-details {
            padding: 20px;
            border-bottom: 1px solid #eaeaec;
        }

        .invoice-from, .invoice-to {
            width: 48%;
            display: inline-block;
            vertical-align: top;
        }

        .invoice-to {
            text-align: right;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .invoice-table th {
            background-color: #f5f6fa;
            padding: 10px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #eaeaec;
        }

        .invoice-table td {
            padding: 10px;
            border-bottom: 1px solid #eaeaec;
            word-break: break-word;
        }

        .invoice-total {
            text-align: right;
            margin-top: 20px;
            font-size: 18px;
            font-weight: 600;
        }

        .invoice-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eaeaec;
            text-align: center;
            color: #6b6e76;
            font-size: 12px;
        }

        .payment-status {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            margin-top: 30px;
        }

        .invoice-date {
            margin-top: 5px;
            font-size: 14px;
            color: #6b6e76;
        }

        .note-box {
            background-color: #fff8e6;
            border-left: 4px solid #ffc107;
            padding: 12px;
            margin-top: 15px;
            font-size: 13px;
        }

        @media only screen and (max-width: 600px) {
            .invoice-from, .invoice-to {
                width: 100%;
                display: block;
                text-align: left;
                margin-bottom: 20px;
            }

            .invoice-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
    </style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
<center style="width: 100%; background-color: #f5f6fa;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
        <tr>
            <td style="padding: 40px 0;">
                <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;border-radius: 8px;overflow: hidden;box-shadow: 0 0 10px rgba(0,0,0,0.05);">
                    <tr>
                        <td class="invoice-header">
                            INVOICE
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px;">
                            <table width="100%">
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <img style="max-height: 40px" src="{{ setting('light_logo') && @is_file_exists(setting('light_logo')['original_image']) ? get_media(setting('light_logo')['original_image']) : getFileLink('80x80',[]) }}" alt="{{ setting('system_name') }}">
                                        <div class="invoice-date">
                                            Date: {{ date('d-m-Y', strtotime(@$purchase_date)) }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td class="invoice-from">
                                        <p style="font-weight: 600; margin-bottom: 10px; color: {{$color}};">From:</p>
                                        <p>{{ setting('system_name') }}</p>
                                        <p>{{ setting('email_address') }}</p>
                                        <p>{{ setting('phone') }}</p>
                                    </td>
                                    <td class="invoice-to">
                                        <p style="font-weight: 600; margin-bottom: 10px; color: {{$color}};">To:</p>
                                        <p>{{ @$billing_name }}</p>
                                        <p>{{ @$billing_address }}</p>
                                        <p>{{ @$billing_phone }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table class="invoice-table" width="100%">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">#</th>
                                        <th style="width: 70%;">Description</th>
                                        <th style="width: 20%; text-align: right;">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <p style="font-weight: 600;">Plan Subscription</p>
                                            <p style="color: #6b6e76; font-size: 13px;">Extended: {{ date('d-m-Y', strtotime(@$expire_date)) }}</p>
                                            <p style="color: #6b6e76; font-size: 13px;">Via: {{ @$payment_method }}</p>
                                        </td>
                                        <td style="text-align: right;">${{ ReadableNumbers::make($price,2) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: right; font-weight: 600;">Total</td>
                                        <td style="text-align: right; font-weight: 600; color: {{$color}};">${{ ReadableNumbers::make($price,2) }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="payment-status">
                                <p style="margin: 0; color: {{$color}}; font-weight: 600;">Payment Status: Paid</p>
                                <p style="margin: 5px 0 0 0; font-size: 13px;">Request ID: {{ $trx_id }}</p>
                                <p style="margin: 0; font-size: 13px;">{{__('your_plan_purchase_successful')}}</p>

                                <div class="note-box">
                                    <p style="margin: 0;">Note: If your transaction is verified, your Tax Invoice will be emailed to you within 24 to 48 hours.</p>
                                </div>
                            </div>

                            @if(!blank(setting('mail_signature') || setting('mail_signature') != ''))
                            <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eaeaec;">
                                {!! setting('mail_signature') !!}
                            </div>
                            @endif

                            <div class="invoice-footer">
                                <p>If you have any questions about this invoice, please contact us at {{ setting('email_address') }}</p>
                                <p>&copy; {{ date('Y') }} {{ setting('system_name') }}. All rights reserved.</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>
</body>
</html>