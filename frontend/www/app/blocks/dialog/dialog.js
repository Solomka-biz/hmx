/* @requires b-baseBlock */
(function ($, BEM) {

    BEM.DOM.decl({'block': 'dialog'}, {

        params: {

        },

        onSetMod: {
            'js': function () {

                this.elem('form').on('submit', this._proxy(this._submit));
            }
        },

        _submit: function(e){

            e.preventDefault();
            e.stopPropagation();

            this._hideErrors();

            var $form = this.elem('form'),
                _this = this;

            $.ajax({
                type: $form.attr('method') || 'post',
                dataType: 'json',
                url: $form.attr('action') || '',
                data: $form.serialize(),
                success: function(response){

                    setTimeout(function(){
                        _this._readAnswer(response);
                    },200);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        },

        _readAnswer: function(response) {

            if (response.status)
                this._showAnswer();

            if (!response.status && response.errors)
                this._showErrors(response.errors);
        },

        _showAnswer: function() {

            var message = this.elem('message').val(),
                _this = this;

            this.setMod(this.elem('container'), 'state', 'hidden');
            this.elem('container').slideUp(300);
            
            setTimeout(function() {
                _this.elem('container').text(message);
            }, 300);
            
            setTimeout(function() {
                _this.delMod(_this.elem('container'), 'state', 'hidden');
                _this.elem('container').slideDown(300);
            }, 600);
            
            setTimeout(function() {
                _this.elem('answer').slideDown(300, function() {
                    _this.setMod(_this.elem('answer'), 'animate', 'true');
                });
            }, 1500);
        },

        _showErrors: function(errors) {

            this.wasErrors = true;
            var $field;

            for (var field in errors)
                if (error = errors[field]) {

                    $field = this.elem('error').filter(this.buildSelector('_error', field));
                    $field.text(error);
                    this.delMod($field,'state','hidden');
                }
                    
        },

        _hideErrors: function() {

            if (!this.wasErrors)
                return false;

            this.setMod(this.elem('error'), 'state','hidden');
            this.elem('error').empty();
        }


    }, {


    });

})(jQuery, BEM);
