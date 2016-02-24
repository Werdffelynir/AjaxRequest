
onmessage = function(event) {

    // include javascript file
    importScripts('worker.help.js');

    // this instanceof DedicatedWorkerGlobalScope
    // self instanceof DedicatedWorkerGlobalScope
    var worker = this,
        request = event.data;

    // console.log(event.data);

    var sendData = {
        result: 'Result: ' + request.email + ' ' + request.name
    };

    worker.postMessage(sendData);

};
