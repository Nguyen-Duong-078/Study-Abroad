<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin liên hệ</title>
    <style>
        .email-container {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            color: #333;
            max-width: 600px;
            margin: auto;
            border: 1px solid #dee2e6;
        }

        .email-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .email-content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 0 0 10px 10px;
        }

        .info-row {
            margin-bottom: 12px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .message {
            margin-top: 10px;
            padding: 10px;
            background-color: #f1f1f1;
            border-left: 3px solid #007bff;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">📬 Thông tin liên hệ mới từ website</div>

        <div class="email-content">
            <div class="info-row">
                <span class="label">Họ tên:</span> {{ $contact->name }}
            </div>
            <div class="info-row">
                <span class="label">Email:</span> {{ $contact->email }}
            </div>
            <div class="info-row">
                <span class="label">Số điện thoại:</span> {{ $contact->phone }}
            </div>
            <div class="info-row">
                <span class="label">Tiêu đề:</span> {{ $contact->subject }}
            </div>
            <div class="info-row">
                <span class="label">Nội dung:</span>
                <div class="message">
                    {{ $contact->message }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
