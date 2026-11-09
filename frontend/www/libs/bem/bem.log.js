(function (BEM, $) {
    //---------------------NEW------------------------/
    BEM.DOM.prototype.logPrefix = null;

    function getLogPrefix() {
        return '-=BEM=- {' + this.constructor._name + '}';
    }

    function getLogParams() {
        var params = [];
        params.push(this.logPrefix);
        params.push(this.domElem);
        $(arguments).each(function (index, elem) {
            params.push(elem);
        });
        return params;
    }

    BEM.DOM.prototype._log = function () {
        if (!!this._logMute) {
            return this;
        }

        if (!this.logPrefix) {
            this.logPrefix = getLogPrefix.apply(this, arguments);
        }
        var params = getLogParams.apply(this, arguments);
        console.log.apply(console, params);
        return this;
    };

    BEM.DOM.prototype._errorLog = function () {
        if (!this.logPrefix) {
            this.logPrefix = getLogPrefix.apply(this);
        }
        var params = getLogParams.apply(this, arguments);
        console.error.apply(console, params);
        return this;
    }

})(BEM, jQuery);