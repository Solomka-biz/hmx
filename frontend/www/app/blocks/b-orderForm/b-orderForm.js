/* @requires b-baseBlock */
(function ($, BEM) {

    BEM.DOM.decl({'block': 'b-orderForm'}, {

        params: {

        },

        onSetMod: {
            'js': function () {

                this.elem('initButton').on('click', this._proxy(function () {
                    this.elem('initButton').hide();
                    this.toggleMod(this.elem('form'), 'visibility', 'hidden', 'visible');
                }));

                console.log('meme');
            }
        }


    }, {


    });

})(jQuery, BEM);