<?php

$fio = $_POST['fio'];
$email = $_POST['mail'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$lang = $_POST['lang'];
$childName = $_POST['childName'];
$bookName = $_POST['bookName'];
$affectionateName = $_POST['affectionateName'];
$childAge = $_POST['childAge'];
$bornData = $_POST['bornData'];
$childAdress = $_POST['childAdress'];
$momName = $_POST['momName'];
$dadName = $_POST['dadName'];
$brotherName = $_POST['brotherName'];
$sisterName = $_POST['sisterName'];
$grandparentName = $_POST['grandparentName'];
$cousinName = $_POST['cousinName'];
$favoriteToy = $_POST['favoriteToy'];
$favoritePet = $_POST['favoritePet'];
$commemorativeInscription = $_POST['commemorativeInscription'];




// if((isset($_POST['fio'])&&$_POST['fio']!="")
// &&(isset($phone)&&$phone!="")
// &&(isset($email)&&$email!=""))
// { //�������� ����������� �� ���� ���� name � �� ������ �� ���
        $to = 'order@svitbook.com.ua'; //����� ����������, ����� ������� ����� ������� ������� ������ �������
        $subject = '������ � �����'; //��������� ���������
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>���: '.$fio.'</p>
                        <p>Email: '.$email.'</p>
                        <p>�������: '.$phone.'</p>
                        <p>����� ��������: '.$adress.'</p>
                        <p>���� �����: '.$lang.'</p>
                        <p>��� ������� � �����: '.$childName.'</p>
                        <p>�������� �����: '.$bookName.'</p>
                        <p>��� �� ������� ��������� �������: '.$affectionateName.'</p>
                        <p>������� �������: '.$childAge.'</p>
                        <p>���� ��������: '.$bornData.'</p>
                        <p>����� ���������� �������: '.$childAdress.'</p>
                        <p>��� ����: '.$momName.'</p>
                        <p>��� ����: '.$dadName.'</p>
                        <p>����� ������ �������: '.$brotherName.'</p>
                        <p>����� ������ ���������: '.$sisterName.'</p>
                        <p>����� ������� � �������: '.$grandparentName.'</p>
                        <p>���������� ������/������/������ ������ �������: '.$cousinName.'</p>
                        <p>������� ������� �������: '.$favoriteToy.'</p>
                        <p>������� �������� �������: '.$favoritePet.'</p>
                        <p>�������� �������: '.$commemorativeInscription.'</p>
                    </body>
                </html>'; //����� ������ ��������� ����� ������������ HTML ����
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //��������� ������
        $headers .= "From: $email\r\n"; //������������ � ����� �����������
        mail($to, $subject, $message, $headers); //�������� ������ � ������� ������� mail
// }

?>
