<?php


$phone = $_POST['phoneCall'];




if((isset($phone)&&$phone!=""))
{ //�������� ����������� �� ���� ���� name � �� ������ �� ���
        $to = 'order@svitbook.com.ua'; //����� ����������, ����� ������� ����� ������� ������� ������ �������
        $subject = '������ �� �������� ������'; //��������� ���������
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>�������: '.$phone.'</p>
                    </body>
                </html>'; //����� ������ ��������� ����� ������������ HTML ����
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //��������� ������
        $headers .= "����������� ��� ���������� �� ���� �����\r\n"; //������������ � ����� �����������
        mail($to, $subject, $message, $headers); //�������� ������ � ������� ������� mail
}

// office@antares-design.pro

// $header = 'Content-type: text/html; charset=utf-8';
// $fio = $_POST['name'];
// $email = $_POST['mail'];
// $fio = htmlspecialchars($fio);
// $email = htmlspecialchars($email);
// $fio = urldecode($fio);
// $email = urldecode($email);
// $fio = trim($fio);
// $email = trim($email);
?>
