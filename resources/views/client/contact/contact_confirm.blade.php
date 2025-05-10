<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xác nhận liên hệ - MIM</title>
</head>
<body style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f5f8fa; padding: 30px; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; border-radius: 8px; box-shadow: 0 0 8px rgba(0,0,0,0.05); padding: 30px;">
        <h2 style="color: #2C3E50;">🎉 Cảm ơn bạn đã liên hệ với <span style="color: #13AAA1;">MIM</span>!</h2>
        <p>Chúng tôi đã nhận được thông tin của bạn. Dưới đây là nội dung bạn đã gửi:</p>

        <table style="width: 100%; margin-top: 20px;">
            <tr>
                <td><strong>Họ tên:</strong></td>
                <td>{{ $contact->name }}</td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <td><strong>Số điện thoại:</strong></td>
                <td>{{ $contact->phone }}</td>
            </tr>
            <tr>
                <td><strong>Tiêu đề:</strong></td>
                <td>{{ $contact->subject }}</td>
            </tr>
            <tr>
                <td><strong>Nội dung:</strong></td>
                <td>{{ $contact->message }}</td>
            </tr>
        </table>

        <p style="margin-top: 30px;">Đội ngũ MIM sẽ liên hệ lại với bạn trong thời gian sớm nhất.</p>

        <p style="margin-top: 20px;">Trân trọng,<br><strong>MIM Team</strong></p>

        <div style="margin-top: 40px; text-align: center; font-size: 12px; color: #999;">
            MIM © {{ date('Y') }} - All rights reserved.
        </div>
    </div>
</body>
</html>
