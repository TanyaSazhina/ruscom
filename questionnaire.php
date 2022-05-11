<?php

$user = "root";
$password = "";
$host = "127.0.0.1";
$dbname = "ruscom";
$conn = mysqli_connect($host, $user, $password, $dbname);

$profession_id = isset($_REQUEST['questionnaire']) ? $_REQUEST['questionnaire'] : NULL;
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : NULL;
$surname = isset($_REQUEST['surname']) ? $_REQUEST['surname'] : NULL;
$midname = isset($_REQUEST['midname']) ? $_REQUEST['midname'] : NULL;
$birthday = isset($_REQUEST['birthday']) ? $_REQUEST['birthday'] : NULL;
$passport_series = isset($_REQUEST['passport-series']) ? $_REQUEST['passport-series'] : NULL;
$passport_number = isset($_REQUEST['passport-number']) ? $_REQUEST['passport-number'] : NULL;
$address_actual = isset($_REQUEST['address-actual']) ? $_REQUEST['address-actual'] : NULL;
$address_jur = isset($_REQUEST['address-jur']) ? $_REQUEST['address-jur'] : NULL;
$phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : NULL;
$education_work_place = isset($_REQUEST['education-work-place']) ? $_REQUEST['education-work-place'] : NULL;
$record = isset($_REQUEST['record']) ? $_REQUEST['record'] : NULL;
$education = isset($_REQUEST['education']) ? $_REQUEST['education'] : NULL;
$education_now = isset($_REQUEST['education-now']) ? $_REQUEST['education-now'] : NULL;
$rights = isset($_REQUEST['rights']) ? $_REQUEST['rights'] : NULL;
$tracktor_rights = isset($_REQUEST['tracktor-rights']) ? $_REQUEST['tracktor-rights'] : NULL;
$politic = isset($_REQUEST['politic']) ? $_REQUEST['politic'] : NULL;

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

if ($name == NULL) {
    $resData['message'] = "Введите имя";
    $resData['success'] = 0;
} elseif ($surname == NULL) {
    $resData['message'] = "Введите фамилию";
    $resData['success'] = 0;
} elseif ($midname == NULL) {
    $resData['message'] = "Введите отчество";
    $resData['success'] = 0;
} elseif ($birthday == NULL) {
    $resData['message'] = "Введите дату рождения";
    $resData['success'] = 0;
} elseif ($passport_series == NULL) {
    $resData['message'] = "Введите серию паспорта";
    $resData['success'] = 0;
} elseif ($passport_number == NULL) {
    $resData['message'] = "Введите номер паспорта";
    $resData['success'] = 0;
} elseif ($address_jur == NULL) {
    $resData['message'] = "Введите адрес регистрации";
    $resData['success'] = 0;
} elseif ($phone == NULL) {
    $resData['message'] = "Введите телефон";
    $resData['success'] = 0;
} elseif ($education == NULL) {
    $resData['message'] = "Введите образование";
    $resData['success'] = 0;
} elseif ($politic == "on") {
    $resData['message'] = "Подтвердите";
    $resData['success'] = 0;
} elseif (!validateDate($birthday, 'Y-m-d')) {
    $resData['message'] = "Введите коректную дату рождения год-месяц-день";
    $resData['success'] = 0;
} else {
    $sql = "INSERT INTO `questionnaires`( `profession_id`, `surname`, `name`, `midname`, `birthday`, `passport-series`, `passport-number`, `address-actual`, `address-jur`, `phone`, `family`, `education-work-place`, `record`, `education`, `education-now`, `rights`, `tracktor-rights`) VALUES ('$profession_id','$surname','$name','$midname','$birthday','$passport_series','$passport_number','$address_actual','$address_jur','$phone','$family','$education_work_place','$record','$education','$education_now','$rights','$tracktor_rights')";

    try {
        $rs = mysqli_query($conn, $sql);
    } catch (Throwable $e) {
        echo "Error caught: " . $e->getMessage();
    }

    if ($rs) {
        $resData['success'] = 1;
        $resData['message'] = "Данные успешно отправленны. Ваш анкета уже в обработке. Вам перезвонят";
    } else {
        $resData['message'] = "Что то не понятное";
        $resData['success'] = 0;
    }
}

echo json_encode($resData);
