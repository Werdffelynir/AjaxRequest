# Script Aj
#### Simple use AJAX request of Javascript XMLHttpRequest 

require ECMAScript5

## Основа

Метод Aj является базовым для выполнения запросов, низкий уровень.
Аргументом может принимать объект конфигурации, если не указан конфигурация будет взята по умолчанию.
Конфигурация может быть установлена в методе .send() объекта что вернет Aj() метод

```
Aj ( [config:Object] ) : Object
```

### config
Все свойства конфигурации запроса

```
url:            String.         Строка URL адреса куда будет запрос
data:           String|Object   Данные для передачи
async:          Bool. true,     Асинхронный или синхронный запрос выполнить
method:         String. 'GET'   HTTP Метод запроса 'GET' | 'POST' | 'PUT' | 'DELETE' ...
timeout:        Numeric. 0      Время ожидания ответа. 0 - неуказано
headers:        Object          Заголовки что будут отправлены {'Ket-Head':'value'}
username:       String.         HTTP-аутентификация - username
password:       String.         HTTP-аутентификация - password
credentials:    Bool. false     Контроля доступа, "дипломированный" запрос, передают HTTP Cookies и информацию HTTP-аутентификации.
response:       String. 'text'  Формат данных ответа с сервера 'html' | 'text' | 'xml' | 'json'
contentType:    String.         Заголовок 'Content-Type', Вынесен в приоритет
onComplete:     function        Выполняет по окончании операции при любом результате
onProgress:     function        Выполняет в конце операции
onTimeout:      function        Выполняет в конце операции
onSuccess:      function        Выполняет в конце операции
onBefore:       function        Выполняет в конце операции
onChange:       function        Выполняет в конце операции
onError:        function        Выполняет в конце операции
onAbort:        function        Выполняет в конце операции
onStart:        function        Выполняет при старте операции
```

### Метод Aj возвращает объект текущей операции с методами send(), abort() и свойством xhr:
```
object.xhr : XMLHttpRequest
object.send( [config:Object] ) : function
object.abort() : function
```


## Методы

```
// Простой GET запрос
AjGet ( url, data, callback, response ) 

// Простой GET запрос
AjPost ( url, data, callback, response ) 

// Запросы на уровне заголовков
AjHead ( url, headers, callback ) 

// Запрос на основе данных HTML формы
AjForm ( form, config, callback ) 

// Подключатель веб-воркеров
AjWorker ( file, callback, callbackError ) 

// Запрос для приема и передачи данных в формате JSON
AjJson ( url, data, callback, callbackError )  
AjJson.method = 'GET'

// Подключения по url JavaScript скриптов, в конец элемента body
AjScript ( url, callbackSuccess, callbackError )

// Протокол JSONP, для обмена данными
AjJsonp ( url, callback )

// Загрузчик файлов
AjUpload ( url, inputFile, onSuccess, onError, onProgress )

// Запрос с расширеными опциями
AjRequest ( method, url, data, callback, contentType )

// будут удалены следущие методы:
AjLoad ( url, data, callback, contentType )
AjLoad.method = 'GET'
```

## helps method
```
AjUtil.encode ( object ) 
AjUtil.decode ( string )
AjUtil.parse ( url )
AjUtil.parseUrl ( url )
AjUtil.merge ( object, source )
AjUtil.parseForm ( formElement, asObject )
AjUtil.jsonToObj ( string )
AjUtil.objToJson ( object )
```





