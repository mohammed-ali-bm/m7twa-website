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
        'description'       => 'عيادة الحياة هي عيادة رائدة متخصصة في مجال التجميل، حيث تقدم
        مجموعة واسعة من الخدمات الجمالية والعلاجية بأعلى مستويات الجودة والاحترافية. تسعى عيادة الحياة
        إلى تحقيق الرضا الكامل لعملائها من خلال استخدام أحدث التقنيات والمعدات الطبية المعتمدة دوليًا،
        بالإضافة إلى فريق من الأطباء والمختصين ذوي الخبرة والكفاءة العالية.',
        'title' => "عيادة الحياة للتجميل",
        'keywords'    => ["ليزر", "الباحة", "عيادة تجميل", "تجميل"],
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
