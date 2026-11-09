(function (BEM, $) {

    BEM.DOM.prototype._proxy = function (func) {
        return $.proxy(func, this);
    };

})(BEM, jQuery);