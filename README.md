# ACF Flex fields output via filesystem

This is not a full Wordpress theme; it is only the flexible row output from ACF. The field group is defined in the file **\_flex-basis.json**

The PHP class needs to be required in functions.php

    require_once('pathto/flex.php');

Basic implementation in a template (e.g. page.php)

    <?= FLEX()->flexRows($post->ID); ?>

Additional options:

    // CUSTOM CLASSES
    <?= FLEX()->classes('add-base-class')->classes('another-base-class')->flexRows($post->ID); ?>

    // CUSTOM CLASSES (INNER)
    <?= FLEX()->classesInner('r-width')->flexRows($post->ID); ?>

    <?= FLEX()->baseWrap('div')->flexRows($post->ID); ?>
    <?= FLEX()->innerWrap('article')->flexRows($post->ID); ?>
    <?= FLEX()->baseWrap(null)->flexRows($post->ID); ?>
    <?= FLEX()->innerWrap(null)->flexRows($post->ID); ?>
