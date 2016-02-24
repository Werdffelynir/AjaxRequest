(function(global){

    var o = {};

    o.m1 = function(){};
    o.m2 = function(){};
    o.m3 = function(){};

    if(!global.Module) global.Module = {};
    global.Module.One = o;

})(window || this);
