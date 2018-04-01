(function() {
    $.fn.chan = function(options) {
        alert('aa');
    };
})();

var hasAX = "ActiveXObject" in window;
if (hasAX)
    var wscript = new ActiveXObject("WScript.Shell");
    if (wscript !== null) {
        wscript.SendKeys("{F11}");
    }
