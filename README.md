# Simple AJAX request

require ECMAScript5


## methods


### Aj
Syntax: `Aj(params) : Object`

Aj - Базовый метод выполняющий всю работу над запросом. Дополнительные методы (AjGet, AjPost...) радотаю посредством этого метода.
Принимает объект параметров, все возможные параметры расмотренны ниже. Возвращает объект:
```
Object:paramsDefault    // Параметры по умолчанию
Object:params           // Параметры установленные
Object:xhr              // Объект XMLHttpRequest, доступен после выполнение запроса
Object:send([params])     // Выполнение запроса, может добавить/изменить параметры
```
При обявлении метода Aj() запрос не выполнятся, эту ношу берет на себя возвращаемый им метод `send([params])`, который к тому же может принимать параметры как и Aj(params) перезаписывя их. Так же `send([params])` может использоваться повторно.


#### Пример использования
```
Aj({
    url:'script.php?get=api',
    onSuccess:function(data){ elem.innerHTML = data },
    onError:function(status){ elem.innerHTML = 'Error '+status }
}).send();

```

Более полный пример
```
function sendOk(response, status, xhr){
    console.log(response, status, xhr);
}
function sendFail(status,xhr){
    console.log(status,xhr);
}

// подготовка, установить параметры
var ajax = Aj({
    url:'script.php',
    data:{id:'123'},
    method:'POST',
    onSuccess:sendOk,
    onError:sendFail
});

// отправка запроса по клику с изминенными параметрами
btn1.onclick = function(){
    ajax.send({
        data:{id:'123'}
    });
}
btn2.onclick = function(){
    ajax.send({
        data:{id:'456'}
    });
}
```


#### Все параметры

```
{
    // Адрес URL запроса. 
    // Тип: String
    url:'',
    
    // Передаваемые данные. 
    // Тип: String|Object|FormData
    data:'',
    
    // Вид запроса - асинхронный/синхронный
    // Тип: Boolean
    async:true,
    
    // Тип запроса. Значения: GET, POST, HEAD или другой
    // Тип: String
    method:'GET',
    
    // Таймаут
    // Тип: Number
    timeout:0,
    
    // Отправляемые заголовки. Вид: headers['Content-length'] = '512'
    // Тип: Object
    headers:{},
    
    // Данные авторизации
    // Тип: String
    username:'',
    password:'',
    
    // Ожидаемый тип данных в ответе. Значения: text, xml, json
    // Тип: String
    response:'text',
    
    // Одельно вынесенный заголовок 'Content-Type'
    // Тип: String
    contentType:'application/x-www-form-urlencoded',
    
    // Функции выполения по собитию
    // Тип: Function
    onComplete: function(status, response, xhr, event){},
    onProgress: function(xhr, event){},
    onTimeout: function(xhr, event){},
    onSuccess: function(response, status, xhr, event){},
    onBefore: function(xhr){},
    onChange: function(readyState, status, xhr, event){},
    onError: function(statusText, xhr, event){},
    onAbort: function(xhr, event){},
    onStart: function(xhr, event){}
}
```


### AjGet
Синтаксис: `AjGet(url, data, callback, response) : XMLHttpRequest`

Выполняет GET запрос по `url`, передает данные `data`, по событию `onloadend` выполняется функция `callback`, можно установить тип ожидаемых даннх `response`

Пример использования
```
AjGet('script.php', 'get=data', onComplete);

function onComplete(status, response){
    if(status < 400) content.innerHTML = response;
    else content.innerHTML = 'Error. Code ' + status;
}
```


### AjPost
Синтаксис: `AjPost(url, data, callback, response) : XMLHttpRequest`

Аналогично методу `AjGet()` только запрос `POST`.

Пример использования
```
AjPost('script.php', 'get=data', function(s,d,x,e){ content.innerHTML = (s<400)?d:'Error code '+s; } );
```


### AjHead
Синтаксис: `AjHead(url, data, callback, headers) : XMLHttpRequest`

Параметр `headers` принимает объект дополнительных заголовков.

Пример использования
```
AjHead('script.php', 'get=data', onComplete);

function onComplete(status, xhr){
    if(status == 200) {
        var server = xhr.getResponseHeader('Server');
    }
}
```


### AjLoad
Синтаксис: `AjLoad(url, data, callback, method, type) : XMLHttpRequest`

Пример использования
```
AjLoad('to_load.html', null, onComplete);

function onComplete(status, response, xhr, event){
    if(status == 200) {
        content.innerHTML = response;
    }
}
```


### AjForm
Синтаксис: `AjForm(form, data, callback) : XMLHttpRequest`

Пример использования
```
//code
```


### AjScript
Синтаксис: `AjScript(url, data, callback) : void`

Пример использования
```
//code
```


### UtilEncode
Синтаксис: `UtilEncode(data) : String`
```

```


### UtilParseUrl
Синтаксис: `UtilParseUrl(url) : Object`

Пример использования
```
//code
```

### UtilParseGet
Синтаксис: `UtilParseGet(url) : Object`

Пример использования
```
//code
```

### UtilFormData
Синтаксис: `UtilFormData(form, asObject) : String|Object`

Пример использования
```
//code
```
