(function ($, BEM) {

    /**
     * Рендеринг шаблона
     * @param {String} templateName
     * @param {Object} data
     * @return String
     */
    BEM.DOM.prototype.renderTemplate = function (templateName, data) {
        var template = this.getTemplate(templateName);

        return RepkaApp.renderTemplate(template, data);
    };

    BEM.DOM.prototype.getTemplate = function(templateName) {
        var name = this.__self.getName();
        var className = name + '__' + templateName;

        //пытаемся найти внутри своего блока
        var searchResult = this.domElem.find('.' + className);
        if (searchResult.length == 0) {
            //пытаемся найти на уровне слоя
            searchResult = this.domElem.parents('.b-page__content:first').find('.' + className);
        }
        if (searchResult.length == 0) {
            //пытаемся найти на всей странице
            searchResult = $('.' + className);
        }

        if (searchResult.length == 0) {
            throw new Error("Template '" + className + "' not found");
        }

        var template = (searchResult.get(0).tagName == 'TEXTAREA')
            ? searchResult.val()
            : searchResult.html();

        if (searchResult.dataset('encode') == 'urlencode') {
            template = decodeURIComponent(template);
        }

        return template;
    }

})(jQuery, BEM);