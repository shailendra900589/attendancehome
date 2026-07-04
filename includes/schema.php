<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

function schema_combined(array $faqFlat): array
{
    $faqEntities = [];
    foreach ($faqFlat as $faq) {
        $faqEntities[] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Organization',
                'name' => 'Trackbook HRMS',
                'url' => page_url(),
                'logo' => page_url('assets/images/logo.png'),
                'sameAs' => [
                    'https://www.linkedin.com/company/trackbook',
                    'https://twitter.com/trackbookhrms',
                ],
            ],
            [
                '@type' => 'SoftwareApplication',
                'name' => 'Trackbook HRMS',
                'applicationCategory' => 'BusinessApplication',
                'operatingSystem' => 'Web, iOS, Android',
                'description' => 'Face-verified attendance, payroll, field GPS tracking, and HR lifecycle management platform for Indian businesses.',
                'offers' => [
                    '@type' => 'Offer',
                    'priceCurrency' => 'INR',
                    'description' => 'Contact for pricing',
                ],
            ],
            [
                '@type' => 'FAQPage',
                'mainEntity' => $faqEntities,
            ],
        ],
    ];
}

function flatten_faq(array $faqGrouped): array
{
    $flat = [];
    foreach ($faqGrouped as $questions) {
        foreach ($questions as $q) {
            $flat[] = $q;
        }
    }
    return $flat;
}
