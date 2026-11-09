(function ($, BEM) {
    'use strict';

    var CHANNEL_NAME = 'statistic';
    var CHANNEL_EVENT_HIT = 'hit';
    var CHANNEL_EVENT_REACH_GOAL = 'reachGoal';

    BEM.DOM.decl({
        block: 'i-yandexMetrika'
    }, {

        params: {
            counterId:     null,
            counterParams: {}
        },

        apiUrl:  '//mc.yandex.ru/metrika/watch.js',
        metrika: null,

        onSetMod: {
            'js': function () {

                $.getScript(this.apiUrl, this._proxy(this.initCounter));
            }
        },

        initCounter: function () {

            var counterName = 'yaCounter' + this.params.counterId;
            //noinspection JSUnresolvedVariable,JSUnresolvedFunction
            window[counterName] = this.metrika = new Ya.Metrika({
                id:        this.params.counterId,
                enableAll: true,
                webvisor:  true
            });

            this.metrika.params(this.params.counterParams);

            //noinspection JSUnresolvedFunction
            this.metrika.clickmap({
                'mode': 'centered'
            });

            BEM.channel(CHANNEL_NAME)
                .on(CHANNEL_EVENT_HIT, {}, function (e, openData) {
                    this.processHit(openData.location, openData.title);
                }, this)
                .on(CHANNEL_EVENT_REACH_GOAL, {}, function (e, reachGoalData) {
                    this.processReachGoal(reachGoalData.target, reachGoalData.params);
                }, this);

        },

        processHit: function (url, title) {
            this.metrika.hit(url, title);
        },

        processReachGoal: function (target, params) {
            this.metrika.reachGoal(target, params || null);
        }
    });
})(jQuery, BEM);