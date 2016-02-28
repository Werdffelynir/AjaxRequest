(function(global){

    function getLocation(url) {
        var href = url || location.href,
            match = href.match(/^(https?\:)\/\/(([^:\/?#]*)(?:\:([0-9]+))?)(\/[^?#]*)(\?[^#]*|)(#.*|)$/);
        return match && {
                protocol: match[1],
                host: match[2],
                hostname: match[3],
                port: match[4],
                pathname: match[5],
                search: match[6],
                hash: match[7]
            }
    }

    function parser(search) {
        var params = {};
        if(search.length > 1){
            search.substr(1).split('&').forEach(function(part){
                var item = part.split('=');
                params[item[0]] = decodeURIComponent(item[1]);
            });
        }
        return params;
    }

    var o = {};

    o.m1 = function(){};
    o.m2 = function(){};
    o.m3 = function(){};

    if(!global.Module) global.Module = {};
    global.Module.One = o;

})(window || this);
