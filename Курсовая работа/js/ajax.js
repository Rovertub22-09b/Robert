/* ------------------------ */
/*  XMLHTTPRequest Enable   */

/* ------------------------ */
function createObject() {
    var request_type;
    var browser = navigator.appName;
    if (browser == "Microsoft Internet Explorer") {
        request_type = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        request_type = new XMLHttpRequest();
    }
    return request_type;
}

var http = createObject();


/* ----------------------- */
/*      LOGIN              */
/* ----------------------- */
/* Переменная nocache содержит случайное число, добавляемое в запрос
   для предотвращения кеширования браузером запроса */
var nocache = 0;

function register() {
    // Отображаем соощение в области ID ajax_response
    document.getElementById('register_response').innerHTML = "Loading..."
    // Проверяем, что все поля не пустые. Используем encodeURI() для кодирования недопустимых символов в запросе.
    var appeal = encodeURI(document.getElementById('appeal_register').value);
    var forWho = encodeURI(document.getElementById('inp1').value);
    var sex = encodeURI(document.getElementById('inp2').value);
    var phone = encodeURI(document.getElementById('phone_register').value);
    var password = encodeURI(document.getElementById('password_register').value);

    // Получаем случайное число
    nocache = Math.random();
    // Pass the login variables like URL variable
    http.open('get', '/ajax/register.php?appeal=' + appeal + '&sex=' + sex + '&phone=' + phone + '&password=' + password + '&nocache = ' + nocache + '&forwho=' + forWho  );
    http.onreadystatechange = function () {
        if (http.readyState == 4) {
            var response = JSON.parse(http.responseText);
            if (response['success']) {
                document.getElementById('register_response').innerHTML = 'Вы успешно зарегестрировались';
            } else {
                document.getElementById('register_response').innerHTML = response['message'];
            }
        }
    };
    http.send(null);
}


function authorize() {
    // Отображаем соощение в области ID ajax_response
    document.getElementById('authorize_response').innerHTML = "Loading..."
    // Проверяем, что все поля не пустые. Используем encodeURI() для кодирования недопустимых символов в запросе.
    var phone = encodeURI(document.getElementById('phone_authorize').value);
    var password = encodeURI(document.getElementById('password_authorize').value);

    // Получаем случайное число
    nocache = Math.random();
    // Pass the login variables like URL variable
    http.open('get', '/ajax/authorize.php?phone=' + phone + '&password=' + password + '&nocache = ' + nocache);
    http.onreadystatechange = function () {
        if (http.readyState == 4) {
            var response = JSON.parse(http.responseText);
            if (response['success']) {
                document.getElementById('authorize_response').innerHTML = 'Вы успешно авторизовались';
                location.reload();
            } else {
                document.getElementById('authorize_response').innerHTML = response['message'];
            }
        }
    };
    http.send(null);
}

function unauthorize() {
    nocache = Math.random();
    http.open('get', '/ajax/unauthorize.php?nocache=' + nocache);
    http.onreadystatechange = function () {
        if (http.readyState == 4) {
            var response = http.responseText;
            if (response)
            {
                location.reload();
            }
        }
    };
    http.send(null);
}

function remarks() {
    // Отображаем соощение в области ID ajax_response
    document.getElementById('remarks_response').innerHTML = "Loading..."
    // Проверяем, что все поля не пустые. Используем encodeURI() для кодирования недопустимых символов в запросе.
    var namepsy = encodeURI(document.getElementById('namepsy').value);
    var mark = encodeURI(document.getElementById('mark').value);
    var text = encodeURI(document.getElementById('text').value);

    // Получаем случайное число
    nocache = Math.random();
    // Pass the login variables like URL variable
    http.open('get', '/ajax/remarks.php?namepsy=' + namepsy + '&mark=' + mark + '&text=' + text + '&nocache = ' + nocache );
    http.onreadystatechange = function () {
        if (http.readyState == 4) {
            var response = JSON.parse(http.responseText);
            if (response['success']) {
                document.getElementById('remarks_response').innerHTML = 'Ваш отзыв успешно отправлен';
            } else {
                document.getElementById('remarks_response').innerHTML = response['message'];
            }
        }
    };
    http.send(null);
}