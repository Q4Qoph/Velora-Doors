<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You – Velora Doors</title>
    <style>
        body { font-family: Georgia, serif; background: #f5f5f5; margin: 0; padding: 20px; color: #222; }
        .wrapper { max-width: 600px; margin: 0 auto; background: #fff; border: 1px solid #ddd; }
        .header { background: #0a0805; padding: 28px 32px; text-align: center; }
        .header h1 { color: #c9a96e; font-size: 22px; margin: 0; letter-spacing: 2px; }
        .header p { color: rgba(255,230,180,0.7); font-size: 12px; margin: 6px 0 0; letter-spacing: 1px; }
        .body { padding: 36px 32px; }
        .body p { font-size: 15px; line-height: 1.8; color: #333; margin: 0 0 18px; }
        .summary { background: #f9f6f0; border-left: 3px solid #c9a96e; padding: 16px 20px; margin: 24px 0; }
        .summary .row { margin-bottom: 8px; font-size: 14px; color: #444; }
        .summary .row:last-child { margin-bottom: 0; }
        .summary .lbl { color: #c9a96e; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 2px; }
        .cta { text-align: center; margin: 28px 0 8px; }
        .cta a { background: #c9a96e; color: #fff; text-decoration: none; padding: 12px 28px; font-size: 13px; letter-spacing: 1.5px; text-transform: uppercase; }
        .footer { background: #f5f5f5; padding: 16px 32px; text-align: center; font-size: 12px; color: #999; line-height: 1.8; }
        .footer a { color: #c9a96e; text-decoration: none; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>VELORA DOORS</h1>
            <p>THANK YOU FOR YOUR INQUIRY</p>
        </div>
        <div class="body">
            <p>Dear {{ $formData['name'] }},</p>
            <p>Thank you for reaching out to Velora Doors. We have received your inquiry and a member of our team will get back to you within <strong>1–2 business days</strong>.</p>
            <p>Here is a summary of what you submitted:</p>

            <div class="summary">
                <div class="row">
                    <span class="lbl">Inquiry Type</span>
                    {{ $formData['inquiry_type'] }}
                </div>
                <div class="row">
                    <span class="lbl">Subject</span>
                    {{ $formData['subject'] }}
                </div>
                <div class="row">
                    <span class="lbl">Country</span>
                    {{ $formData['country'] }}
                </div>
                <div class="row">
                    <span class="lbl">Your Message</span>
                    {{ $formData['message'] }}
                </div>
            </div>

            <p>In the meantime, feel free to reach us directly via WhatsApp for a faster response:</p>

            <div class="cta">
                <a href="https://wa.me/254703232666">Chat on WhatsApp</a>
            </div>
        </div>
        <div class="footer">
            Velora Doors · <a href="mailto:contact@veloradoors.com">contact@veloradoors.com</a> · +254 703 232 666<br>
            Premium African Hardwood Doors · Crafted for Timeless Spaces
        </div>
    </div>
</body>
</html>
