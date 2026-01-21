<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Approved</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .email-header h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .email-header p {
            font-size: 16px;
            opacity: 0.9;
        }

        .approval-badge {
            display: inline-block;
            background-color: #10b981;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
            margin-top: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Content */
        .email-content {
            padding: 40px 30px;
        }

        .content-section {
            margin-bottom: 30px;
        }

        .content-section h2 {
            color: #1f2937;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f3f4f6;
        }

        .info-card {
            background-color: #f8fafc;
            border-left: 4px solid #3b82f6;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .info-card h3 {
            color: #1e40af;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .credentials-box {
            background-color: #fef3c7;
            border: 1px dashed #f59e0b;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }

        .credential-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .credential-item:last-child {
            margin-bottom: 0;
        }

        .credential-label {
            font-weight: 600;
            color: #92400e;
            min-width: 100px;
        }

        .credential-value {
            font-family: monospace;
            background-color: #fff;
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid #fbbf24;
            flex-grow: 1;
        }

        /* Next Steps */
        .steps-list {
            list-style: none;
            counter-reset: step-counter;
        }

        .steps-list li {
            counter-increment: step-counter;
            margin-bottom: 20px;
            padding-left: 40px;
            position: relative;
        }

        .steps-list li:before {
            content: counter(step-counter);
            background-color: #3b82f6;
            color: white;
            font-weight: 600;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            left: 0;
            top: 0;
        }

        /* CTA Button */
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
            margin: 20px 0;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(59, 130, 246, 0.25);
        }

        /* Footer */
        .email-footer {
            background-color: #f8fafc;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }

        .footer-text {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .social-links {
            margin-top: 20px;
        }

        .social-link {
            display: inline-block;
            margin: 0 10px;
            color: #6b7280;
            text-decoration: none;
            font-size: 14px;
        }

        .social-link:hover {
            color: #3b82f6;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .email-header {
                padding: 30px 20px;
            }

            .email-content {
                padding: 30px 20px;
            }

            .email-footer {
                padding: 20px;
            }

            .cta-button {
                display: block;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>🎉 Event Approved!</h1>
            <p>Congratulations! Your event has been reviewed and approved.</p>
            <div class="approval-badge">Approved</div>
        </div>

        <!-- Content -->
        <div class="email-content">
            <div class="content-section">
                <h2>Hello {{ $organizer->name ?? 'Organizer' }},</h2>
                <p>We're excited to inform you that your event
                    <strong>"{{ $organizer->event_name ?? 'your event' }}"</strong> has been approved and is now live on
                    our platform!</p>
            </div>

            <div class="content-section">
                <h2>🔐 Your Login Credentials</h2>
                <p>Here are your login credentials to access your event dashboard:</p>

                <div class="credentials-box">
                    <div class="credential-item">
                        <span class="credential-label">Email:</span>
                        <span class="credential-value">{{ $organizer->email }}</span>
                    </div>
                    <div class="credential-item">
                        <span class="credential-label">Password:</span>
                        <span class="credential-value">{{ $password }}</span>
                    </div>
                </div>

                <p style="color: #dc2626; font-size: 14px; margin-top: 10px;">
                    ⚠️ <strong>Important:</strong> Please change your password after first login for security.
                </p>
            </div>

            <div class="content-section">
                <h2>🚀 Next Steps</h2>
                <ol class="steps-list">
                    <li>
                        <strong>Access Your Dashboard</strong><br>
                        Log in to manage your event details, tickets, and attendees.
                    </li>
                    <li>
                        <strong>Promote Your Event</strong><br>
                        Share your event link across social media and other channels.
                    </li>
                    <li>
                        <strong>Manage Attendees</strong><br>
                        Track registrations and communicate with participants.
                    </li>
                    <li>
                        <strong>Update Event Details</strong><br>
                        Make any necessary changes to event information as needed.
                    </li>
                </ol>

                <center>
                    <a href="{{ url('/organizer/login') }}" class="cta-button">
                        Access Event Dashboard →
                    </a>
                </center>
            </div>

            <div class="content-section">
                <h2>📞 Need Assistance?</h2>
                <p>Our support team is here to help you make your event a success:</p>
                <ul style="padding-left: 20px; margin-top: 10px;">
                    <li>Email: support@youreventplatform.com</li>
                    <li>Phone: (123) 456-7890</li>
                    <li>Help Center: <a href="{{ url('/help') }}">View Resources</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p class="footer-text">
                This is an automated message. Please do not reply to this email.
            </p>
            <p class="footer-text">
                &copy; {{ date('Y') }} MyTicket. All rights reserved.<br>
        </div>
    </div>
</body>

</html>
