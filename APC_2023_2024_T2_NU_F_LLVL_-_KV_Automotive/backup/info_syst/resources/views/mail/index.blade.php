<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Transactional Email</title>
    <style media="all" type="text/css">
        @media all {
            .btn-primary table td:hover {
                background-color: #ec0867 !important;
            }

            .btn-primary a:hover {
                background-color: #ec0867 !important;
                border-color: #ec0867 !important;
            }
        }

        @media only screen and (max-width: 640px) {
            .main p,
            .main td,
            .main span {
                font-size: 16px !important;
            }

            .wrapper {
                padding: 8px !important;
            }

            .content {
                padding: 0 !important;
            }

            .container {
                padding: 0 !important;
                padding-top: 8px !important;
                width: 100% !important;
            }

            .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            .btn table {
                max-width: 100% !important;
                width: 100% !important;
            }

            .btn a {
                font-size: 16px !important;
                max-width: 100% !important;
                width: 100% !important;
            }
        }

        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }
        }
    </style>
</head>
<body style="font-family: Helvetica, sans-serif; -webkit-font-smoothing: antialiased; font-size: 16px; line-height: 1.3; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #f4f5f6; margin: 0; padding: 0;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f4f5f6; width: 100%;" width="100%" bgcolor="#f4f5f6">
    <tr>
        <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top;" valign="top">&nbsp;</td>
        <td class="container" style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; max-width: 600px; padding: 0; padding-top: 24px; width: 600px; margin: 0 auto;" width="600" valign="top">
            <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">The Current Status is {{ $jobOrder->status }} </span>
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border: 1px solid #eaebed; border-radius: 16px; width: 100%;" width="100%">
                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper" style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; box-sizing: border-box; padding: 24px;" valign="top">
                            <div style="text-align: center;">
                                <img src="{{ asset('https://scontent.fmnl9-2.fna.fbcdn.net/v/t1.15752-9/413151349_1303008093729218_6211963685636022506_n.png?_nc_cat=101&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeHMn9SJYzRlohYf-YBhd7QrBGvc-wTNTLcEa9z7BM1Mt8-vvNRZwX0GaFZc8Pv1yiEyLI5Nxw_eQz4SV81E6_mA&_nc_ohc=Qv5rE9iwoYMAX8Z_atK&_nc_ht=scontent.fmnl9-2.fna&oh=03_AdTMsMnDdhuoxGF4mo7_NnwqW1XIfYZ0ETwgZWVXn4wNFw&oe=65F2FE03') }}" alt="Home" title="Go to Home" style="width: 335px; height: auto; margin: 0 auto; pointer-events: none;" />
                            </div>
                            <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px; text-align: left;">Hi there,</p>
                            <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;">This is an update of your Job Status #{{ $jobOrder->id }}.</p>

                            <p>Details:</p>

                            <ul>
                                <li><strong>Account:</strong> {{ optional($jobOrder->account)->full_name }}</li>
                                <li><strong>Vehicle:</strong> {{ optional($jobOrder->vehicle)->make_and_model }}</li>
                                <li><strong>License Plate:</strong> {{ optional($jobOrder->vehicle)->license_plate }}</li>
                                <li><strong>Status:</strong> {{ $jobOrder->status }}</li>
                                <li><strong>Tasked Performed:</strong> {{ $jobOrder->task_performed }}</li>
                                <li><strong>Performed By:</strong> {{ $jobOrder->performed_by }}</li>
                                <li><strong>Item Used:</strong> {{ optional($jobOrder->inventory)->product_name }}</li>
                                <!-- Add more details as needed -->
                            </ul>

                            <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;">This is a generated email. please do not reply if you wish to reply contact contact no. 0917-851-5875 email:vallasquety@yahoo.com</p>
                        </td>
                    </tr>
                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top;" valign="top">&nbsp;</td>
    </tr>
</table>
<!-- START FOOTER -->
<div class="footer" style="clear: both; padding-top: 24px; text-align: center; width: 100%;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
        <tr>
            <td class="content-block" style="font-family: Helvetica, sans-serif; vertical-align: top; color: #9a9ea6; font-size: 16px; text-align: center;" valign="top" align="center">
                <span class="apple-link" style="color: #9a9ea6; font-size: 16px; text-align: center;">1833 Paz Mendoza Guazon Street, Paco, Maynila</span>
                <br>Phone: 0917-851-5875.
            </td>
        </tr>
        <tr>
            <td class="content-block powered-by" style="font-family: Helvetica, sans-serif; vertical-align: top; color: #9a9ea6; font-size: 16px; text-align: center;" valign="top" align="center">
                Powered by <a href="#09178515875" style="color: #9a9ea6; font-size: 16px; text-align: center; text-decoration: none;">BCLS</a>
            </td>
        </tr>
    </table>
</div>
<!-- END FOOTER -->
</body>
</html>
