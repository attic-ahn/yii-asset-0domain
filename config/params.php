<?php
/**
 * 0domain.name asset files: images, configs and more
 *
 * @link      https://github.com/ahnames/yii-asset-0domain
 * @package   yii-asset-0domain
 * @license   proprietary
 * @copyright Copyright (c) 2018, AHnames (https://ahnames.com/)
 */

$supportEmail = 'info@0domain.name';

return [
    'favicon.ico'       => '@ahnames/assets/odomain/assets/images/favicon.ico',

    'organization.name'     => '0Domain',
    'organization.url'      => 'https://0domain.name/',
    'organization.termsUrl' => 'https://0domain.name/rules',

    'supportEmail'      => $supportEmail,
    'adminEmail'        => 'support@0domain.name',
    'abuseEmail'        => 'sales@0domain.name',
    'salesEmail'        => 'misuse@0domain.name',
    'gdprEmail'         => $supportEmail,

    'legals.privacyPolicyUrl' => 'https://0domain.name/rules/privacy',

    'copyright.year'    => 2015,

    'logo.image'                => '@ahnames/assets/odomain/assets/images/logo.gif',
    'logo.smallImage'           => '@ahnames/assets/odomain/assets/images/logo.gif',
    'logo.smallImageOptions'    => ['style' => 'width: 50px'],

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
    ],
];
