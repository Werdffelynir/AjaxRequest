# Script Aj
#### Simple use AJAX request of Javascript XMLHttpRequest 

require ECMAScript5

## methods

```
Aj ( config ) : Object   
```


### config
```
url:            String. default location url
data:           String|Object
async:          Bool. default true,
method:         String. default 'GET'
timeout:        Numeric. default 0
headers:        Object
username:       String. 
password:       String. 
credentials:    Bool. default false
response:       String. default 'text'
contentType:    String. 
onComplete:     function
onProgress:     function
onTimeout:      function
onSuccess:      function
onBefore:       function
onChange:       function
onError:        function
onAbort:        function
onStart:        function
```


### Return object:
```
object.send( [data] ):    function
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





