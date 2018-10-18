<?php

$header = <<<EOF
0domain.name asset files: images, configs and more

@link      https://github.com/ahnames/yii-asset-0domain
@package   yii-asset-0domain
@license   proprietary
@copyright Copyright (c) 2018, AHnames (https://ahnames.com/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
        'phpdoc_no_alias_tag'                        =>  ['replacements' => ['type' => 'var']],
        'phpdoc_separation'                          =>  false,
        'concat_space'                               =>  ['spacing' => 'one'],
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
