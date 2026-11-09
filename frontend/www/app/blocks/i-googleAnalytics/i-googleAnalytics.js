/**
 * @var _gaq {Object} Google Analytics Counter
 * */
(function ($, BEM) {
    'use strict';

    var CHANNEL_NAME = 'statistic';
    var CHANNEL_EVENT_HIT = 'hit';
    var CHANNEL_EVENT_REACH_GOAL = 'reachGoal';

    var GA_EVENT_CATEGORY_GOALS = 'goals';

    BEM.DOM.decl({
        block: 'i-googleAnalytics'
    }, {

        params: {
            counterId:     null,
            counterParams: {}
        },

        apiUrl:    ('https:' == document.location.protocol ? 'https://ssl' : 'http://www')
            + '.google-analytics.com/ga.js',
        analytics: null,

        onSetMod: {
            'js': function () {

                $.getScript(this.apiUrl, this._proxy(this.initCounter));
            }
        },

        initCounter: function () {

            var counterName = 'gaCounter' + this.params.counterId;

            //noinspection JSUnresolvedVariable
            window[counterName] = this.analytics = _gaq || [];

            this.analytics.push(['_setAccount', this.params.counterId]);
            this.analytics.push(['_trackPageview']);

            // процессим параметры
            var index = 1;
            for (var key in this.params.counterParams) {
                if (this.params.counterParams.hasOwnProperty(key)) {
                    var value = this.params.counterParams[key];
                    this.analytics.push(['_setCustomVar', index, key, value]);
                    index++;
                }
            }

            BEM.channel(CHANNEL_NAME)
                .on(CHANNEL_EVENT_HIT, {}, function (e, openData) {
                    this.processHit(openData.location);
                }, this)
                .on(CHANNEL_EVENT_REACH_GOAL, {}, function (e, reachGoalData) {
                    this.processReachGoal(reachGoalData.target);
                }, this);
        },

        /**
         * Обрботка события hit
         * @param url {String}
         */
        processHit: function (url) {
            this.analytics.push(['_trackPageview', url]);
        },

        /**
         * Обрботка события достижения цели
         * @param target {String}
         */

        processReachGoal: function (target) {
            this.analytics.push(['_trackEvent', GA_EVENT_CATEGORY_GOALS, target]);
        }
    });

})(jQuery, BEM);