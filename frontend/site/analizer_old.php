<?php
/**
 * @var $this SiteController
 * @var $analyzerError boolean
 */
$this->setHeadTitle('Анализ раскрутки сайта - HMX.ru');
$this->setHeadDescription("SEO рейтинг сайтов. Анализатор раскрутки. Анализ сайта.");
$this->setHeadKeywords("анализ сайта, анализ раскрутки сайта");

$selectedMenuItem = UrlManager::SITE_ACTION_ANALIZER;
$this->setSelectedMenuItem($selectedMenuItem);

\Yii::clientScript()->registerPackage('app.pages.main');
?>
<div class="body__main main">

    <div class="main__header">
        <h1 class="main__largeTitle">SEO-анализатор</h1>
    </div>

    <div class="main__inner main__inner_page">
        <div class="main__analizer-title">
            С помощью этого инструмента <br />
            вы сможете узнать уровень оптимизации<br />
            вашего сайта и получить рекомендации <br />по его продвижению.
        </div>
        <div class="page page_analyser analizer-form">
            <form class="mainForm main__test b-analyzerForm i-bem"
                  action="<?= \Yii::link()->analyzer(UrlManager::ANALYZER_ACTION_RESULT) ?>"
                  method="post"
                  onclick="return {'b-analyzerForm': {}};">
                <div class="b-analyzerForm__form">
                    <div class="analizer-form__title">SEO-АНАЛИЗАТОР 3.0</div>
                    <div class="mainForm__title">Расчёт поискового рейтинга сайтов</div>

                    <div class="form__input">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">http://</div>
                            </div>
                            <input type="text"
                                   class="mainForm__inputField mainForm__inputField_url b-analyzerForm__urlInput"
                                   name="url"
                                   value=""
                                   placeholder="адрес вашего сайта" />
                        </div>
                    </div>

                    <input type="submit" class="btn btn-success button button_green mainForm__button" value="Проанализировать" />
                </div>

                <?php if ($analyzerError) { ?>
                    <div class="mainForm__error">
                        Пожалуйста, укажите адрес сайта
                    </div>
                <?php } ?>

                <div class="b-analyzerForm__loading b-analyzerForm__loading_visibility_hidden">
                    <div class="mainForm__site b-analyzerForm__urlText">asdfasfd</div>
                    <div class="mainForm__progress"></div>
                    <div class="mainForm__status">идет анализ сайта...</div>
                </div>
            </form>
        </div>

        <hr class="divider">

        <?= $this->renderPartial('//layout/_feedback_order') ?>

        <?=
        $this->renderPartial(
            '//layout/_mainNav',
            [
                'selectedItem' => $selectedMenuItem,
            ]
        ) ?>

    </div>
</div>
</div>
