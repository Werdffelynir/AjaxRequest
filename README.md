# Script Aj
#### Simple use AJAX request of Javascript XMLHttpRequest 

require ECMAScript5

## methods

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


```
// 
AjGet ( url, data, callback, response ) 

// 
AjPost ( url, data, callback, response ) 

// 
AjHead ( url, headers, callback ) 

// 
AjLoad ( url, data, callback, contentType ) 
AjLoad.method = 'GET'

// 
AjRequest ( method, url, data, callback, contentType )

// 
AjForm ( form, config, callback ) 

// 
AjWorker ( file, callback, callbackError ) 

// 
AjJson ( url, data, callback, callbackError )  
AjJson.method = 'GET'

// 
AjScript ( url, callbackSuccess, callbackError )

// 
AjJsonp ( url, callback )

// 
AjUpload ( url, inputFile, onSuccess, onError, onProgress )
```

### helps method
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





