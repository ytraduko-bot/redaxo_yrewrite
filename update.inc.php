<?php

if (rex_string::versionCompare(OOAddon::getVersion('yrewrite'), '1.1', '<=')) {
    $sql->setQuery('ALTER TABLE `rex_yrewrite_domain` DROP `clang`;');
    $sql->setQuery('ALTER TABLE `rex_yrewrite_domain` ADD `clangs` varchar(255) NOT NULL;');
}