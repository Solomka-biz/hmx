/* @requires b-baseBlock */
(function ($, BEM) {

    BEM.DOM.decl({'block': 'b-calculatorForm'}, {

        params: {

        },

        onSetMod: {
            'js': function () {


                this.domElem.on('submit', this._proxy(function () {
                    this.elem('submitButtonLoading').show();
                }));

                /* ... */
                this.elem('editButton').on('click', this._proxy(function (evt) {
                    var params = BEM.DOM.extractParams(evt.currentTarget);

                    /** @namespace params.keyword */
                    var keyword = window.prompt("Введите замену:", params.keyword);

                    if (keyword) {
                        this.removeKeywords(params.keyword, false);
                        this.addKeywords(keyword, false);
                        this.submitForm();
                    }
                }));

                /* ... */
                this.elem('editHintButton').on('click', this._proxy(function (evt) {
                    var params = BEM.DOM.extractParams(evt.currentTarget);

                    /** @namespace params.keyword */
                    var keyword = window.prompt("Введите замену:", params.keyword);

                    if (keyword) {
                        this.removeHintwords(params.keyword, false);
                        this.addKeywords(keyword, false);
                        this.submitForm();
                    }
                }));

                this.elem('deleteButton').on('click', this._proxy(function (evt) {
                    var params = BEM.DOM.extractParams(evt.currentTarget);

                    /** @namespace params.keyword */
                    this.removeKeywords(params.keyword, true);
                }));

                this.elem('addHintButton').on('click', this._proxy(function (evt) {
                    var params = BEM.DOM.extractParams(evt.currentTarget);

                    /** @namespace params.keyword */
                    this.addHintwords(params.keyword, true);
                }));

                this.elem('deleteHintButton').on('click', this._proxy(function (evt) {
                    var params = BEM.DOM.extractParams(evt.currentTarget);

                    /** @namespace params.keyword */
                    this.removeHintwords(params.keyword, true);
                }));
                this.elem('ignoreHintButton').on('click', this._proxy(function (evt) {
                    var params = BEM.DOM.extractParams(evt.currentTarget);

                    /** @namespace params.keyword */
                    this.ignoreHintwords(params.keyword, true);
                }));
            }
        },

        addKeywords: function (word, submit) {
            submit = submit || false;

            var field = $(this.elem('addKeywordsField'));
            if (field.val()) {
                word = "\n" + word
            }

            field.val(field.val() + word);

            if (submit) {
                this.submitForm();
            }
        },

        removeKeywords: function (word, submit) {
            submit = submit || false;

            var field = $(this.elem('removeKeywordsField'));
            if (field.val()) {
                word = "," + word
            }

            field.val(field.val() + word);

            if (submit) {
                this.submitForm();
            }
        },

        addHintwords: function (word, submit) {
            this.addWordToField('addHintwordsField', word, submit);
        },


        removeHintwords: function (word, submit) {
            this.addWordToField('removeHintwordsField', word, submit);
        },

        ignoreHintwords: function (word, submit) {
            this.addWordToField('ignoredHintwordsField', word, submit);
        },

        /**
         * @private
         */
        addWordToField: function (fieldName, word, submit) {
            submit = submit || false;

            var field = $(this.elem(fieldName));
            if (field.val()) {
                word = "," + word
            }

            field.val(field.val() + word);

            if (submit) {
                this.submitForm();
            }
        },

        submitForm: function () {
            this.elem('form').submit();
        }

    }, {


    });

})(jQuery, BEM);