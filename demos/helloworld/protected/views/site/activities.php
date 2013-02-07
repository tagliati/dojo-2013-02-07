<h3 class="facet-inline-h3">
    <a class="catalog_filter_slide visible" onclick="dftApi.catalog.facetToggle($(this),new Array('facet_activity'));">
        <?php echo I18n::t('Modality'); ?>
        <span class="float_right icon_controlVisibility">&nbsp;</span>
    </a>
</h3>

<div id="facet_activity" class="filter-item-wrapper">
    <ul class="elemClearBoth">
        <?php
        ksort($facet['result']);

        foreach ($facet['result'] as $activityUrl => $activityText) {
            if (isset($mapping[$activityUrl])) {
                $baseNameImage = str_replace(' ', '', strtolower($activityUrl));
                $imageActivity = $baseNameImage . '.png';
                $url['params']['activity'] = 'activity=' . $activityUrl;

                if ($selectedActivity === $activityUrl) {
                    unset($url['params']['activity']);
                    $imageActivity = $baseNameImage . '-over.png';
                }
                unset($url['params']['facet_activity']); ?>
                <li>
                    <a href="<?php echo $this->getCatalogUrl($url);?>" title="<?php echo $activityText;?>" alt="<?php echo $activityText;?>" style="background: #FFF url(<?php echo $this->getStaticUrl('/images/icons/activities/' . $imageActivity); ?>)">
                        <span style="background: #FFF url(<?php echo $this->getStaticUrl('/images/icons/activities/' . $baseNameImage . '-over.png'); ?>); display: none;"></span>
                        <?php if ($selectedActivity === $activityUrl) { ?>
                            <span class="btn_unselect"></span>
                        <?php } ?>
                    </a>
                </li>
            <?php }
        } ?>
    </ul>
</div>
<div class="elemClearBoth"></div>