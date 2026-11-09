(function ($, BEM) {

    BEM.DOM.decl({'block': 'b-analyzerForm'}, {

        params: {

        },

        formOnSubmit: null,


        onSetMod: {
            'js': function () {

                this.formOnSubmit = this._proxy(function (event) {
                    event.preventDefault();

                    $(this.elem('urlText')).html($(this.elem('urlInput')).val());

                    this.setMod(this.elem('loading'), 'visibility', 'visible');
                    this.setMod(this.elem('form'), 'visibility', 'hidden');

                    this.submitForm();
                });

                this.domElem.on('submit', this.formOnSubmit);
            }
        },

        submitForm: function () {

            var action = this.domElem.attr('action');
            var method = this.domElem.attr('method');
            var data = this.domElem.serializeArray();

            data.push({
                'name': "useCache",
                'value': 0
            });

            $.ajax({
                url:  action,
                type: method,
                data: data,

                success: this._proxy(function () {
                    this.domElem.off('submit', this.formOnSubmit);
                    this.domElem.submit();
                })
            });
        }


    }, {


    });

})(jQuery, BEM);
