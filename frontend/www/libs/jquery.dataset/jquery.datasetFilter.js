(function ($) {
    /**
     * Фильтрация коллекции по значению data-* атрибута
     * @param {String} name
     * @param {String} value
     */
    $.fn.datasetFilter = function (name, value) {
        var findedList = new Array();
        this.each(function () {
            $(this).dataset(name) == value && findedList.push(this);
        });
        return $(findedList);
    }
})(jQuery)