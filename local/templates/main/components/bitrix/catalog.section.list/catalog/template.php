<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if ($arResult['SECTIONS']): ?>
    <div class="main-catalog__list" data-aos="fade-up" data-aos-duration="1500">

        <?php foreach ($arResult['SECTIONS'] as $arSection): ?>

            <a class="main-catalog__item btn-hover_parent" href="<? $arSection["SECTION_PAGE_URL"] ?>">
                <div class="main-catalog__item-bg desktop">
                    <picture class="picture">
                        <source type="image/webp"
                                srcset="<?= $arSection["PICTURE"]["SRC"] ?>">
                        <img class="picture__img"
                             src="<?= $arSection["PICTURE"]["SRC"] ?>">
                    </picture>
                </div>
                <div class="main-catalog__item-bg mobile">
                    <picture class="picture">
                        <source type="image/webp"
                                srcset="<?= $arSection['SRC_IMG']?>">
                        <img class="picture__img"
                             src="<?= $arSection['SRC_IMG']?>">
                    </picture>
                </div>
                <div class="main-catalog__item-row">
                    <div
                        <? if ($arSection["UF_COLOR"] == '2'): ?>
                            class="main-catalog__item-title white"
                        <? else: ?>
                            class="main-catalog__item-title blue"
                        <? endif; ?>
                    >

                        <?= $arSection['NAME'] ?>
                    </div>
                </div>
                <div class="main-catalog__item-svg">
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                             fill="none">
                            <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z"
                                  fill="#0068FF"></path>
                        </svg>
                    </div>
                </div>
            </a>

        <?php endforeach; ?>

    </div>
<?php endif; ?>
