<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry – Velora Doors</title>
    <style>
        body { font-family: Georgia, serif; background: #f5f5f5; margin: 0; padding: 20px; color: #222; }
        .wrapper { max-width: 600px; margin: 0 auto; background: #fff; border: 1px solid #ddd; }
        .header { background: #0a0805; padding: 28px 32px; text-align: center; }
        .header h1 { color: #c9a96e; font-size: 22px; margin: 0; letter-spacing: 2px; }
        .header p { color: rgba(255,230,180,0.7); font-size: 12px; margin: 6px 0 0; letter-spacing: 1px; }
        .body { padding: 32px; }
        .field { margin-bottom: 20px; border-bottom: 1px solid #f0ece4; padding-bottom: 16px; }
        .field:last-child { border-bottom: none; }
        .label { font-size: 11px; text-transform: uppercase; letter-spacing: 1.5px; color: #c9a96e; margin-bottom: 4px; }
        .value { font-size: 15px; color: #222; line-height: 1.6; }
        .footer { background: #f5f5f5; padding: 16px 32px; text-align: center; font-size: 12px; color: #999; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>VELORA DOORS</h1>
            <p>NEW INQUIRY RECEIVED</p>
        </div>
        <div class="body">
            <div class="field">
                <div class="label">Inquiry Type</div>
                <div class="value">{{ $formData['inquiry_type'] }}</div>
            </div>
            <div class="field">
                <div class="label">Name</div>
                <div class="value">{{ $formData['name'] }}</div>
            </div>
            <div class="field">
                <div class="label">Email</div>
                <div class="value"><a href="mailto:{{ $formData['email'] }}" style="color:#c9a96e;">{{ $formData['email'] }}</a></div>
            </div>
            <div class="field">
                <div class="label">Phone</div>
                <div class="value">{{ $formData['phone_code'] }} {{ $formData['phone'] }}</div>
            </div>
            <div class="field">
                <div class="label">Country</div>
                <div class="value">{{ $formData['country'] }}</div>
            </div>
            <div class="field">
                <div class="label">Subject</div>
                <div class="value">{{ $formData['subject'] }}</div>
            </div>
            <div class="field">
                <div class="label">Message</div>
                <div class="value" style="white-space: pre-line;">{{ $formData['message'] }}</div>
            </div>
        </div>
        <div class="footer">
            Velora Doors · Info@veloradoors.com · +254 703 232 666
        </div>
    </div>
</body>
</html>
