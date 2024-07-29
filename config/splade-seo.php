<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title and meta tags (SEO)
    |--------------------------------------------------------------------------
    |
    | You may use the SEO facade to set your page's title, description, and keywords.
    | @see https://splade.dev/docs/title-meta
    |
    */

    'defaults' => [
        'description'       => '           شركة أصول الدار العقارية تعتبر من الشركات الرائدة في مجال تطوير وإدارة العقارات الفاخرة. تأسست برؤية تهدف إلى تقديم حلول عقارية مبتكرة ومستدامة تلبي احتياجات السوق المتنوعة. تتميز الشركة بمشاريعها المتميزة التي تجمع بين التصميم العصري والجودة العالية، وتحرص على تقديم خدمات متكاملة تتجاوز توقعات العملاء. تسعى أصول الدار لتعزيز رضا العملاء من خلال تقديم تجربة سكنية فريدة تلبي أعلى معايير الراحة والأمان.
        ',
        'title' => "اصول الدار العقارية",
        'keywords'    => [],
    ],

    'title_prefix'    => '',
    'title_separator' => ' | ',
    'title_suffix'    => '',

    'auto_canonical_link' => true,

    'open_graph' => [
        'auto_fill' => false,
        'image'     => '',
        'site_name' => null,
        'title'     => null,
        'type'      => null, // 'WebPage'
        'url'       => null,
    ],

    'twitter' => [
        'auto_fill'   => false,
        'card'        => null, // 'summary_large_image',
        'description' => null,
        'image'       => null,
        'site'        => null, // '@username',
        'title'       => null,
    ],

];
