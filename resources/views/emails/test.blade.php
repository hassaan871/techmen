<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email</title>

    <style>
        body {
            background: #f4f6f9;
            margin: 0;
            padding: 0;
            font-family: 'Helvetica', 'Arial', sans-serif;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #4f46e5, #3b82f6);
            padding: 30px 20px;
            text-align: center;
            color: #ffffff;
        }

        .header h1 {
            margin: 0;
            font-size: 26px;
            font-weight: 600;
        }

        .content {
            padding: 30px 25px;
            font-size: 16px;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            margin: 25px 0;
            padding: 12px 24px;
            background: #4f46e5;
            color: white !important;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
        }

        .footer {
            background: #f0f2f5;
            text-align: center;
            padding: 18px 10px;
            font-size: 13px;
            color: #6b7280;
        }

        .footer a {
            color: #4f46e5;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- HEADER -->
        <div class="header">
            <h1>✨ Test Email from Laravel</h1>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <p>Hello 👋,</p>

            <p>
                This is a <strong>beautiful test email template</strong> rendered from Laravel Blade.
                You can modify the layout and style as needed for your app.
            </p>

            <p>
                Click the button below to test CTA styling:
            </p>

            <a href="#" class="button">Test Button</a>

            <p>
                You are seeing this email because you triggered a test email from your Laravel app.
                If this looks good, you're all set! 🎉
            </p>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            &copy; {{ date('Y') }} YourApp.  
            <br>
            Need help? <a href="mailto:support@yourapp.com">Contact Support</a>
        </div>

    </div>

</body>
</html>
