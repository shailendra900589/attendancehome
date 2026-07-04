<?php
declare(strict_types=1);

return [
    'trusted_logos' => [
        ['name' => 'GlobalConnect', 'initials' => 'GC'],
        ['name' => 'TechStar', 'initials' => 'TS'],
        ['name' => 'GreenLeaf', 'initials' => 'GL'],
        ['name' => 'UrbanWorks', 'initials' => 'UW'],
        ['name' => 'NovaRetail', 'initials' => 'NR'],
    ],

    'how_it_works' => [
        [
            'step' => '1',
            'title' => 'Employee clocks in.',
            'description' => 'Face and GPS verification on mobile or web, matched against a registered face embedding in under a second — no separate biometric machine needed.',
        ],
        [
            'step' => '2',
            'title' => 'Manager sees it live.',
            'description' => 'Attendance, field location, and task status update on the admin dashboard in real time, with photo and face-score visibility on every entry.',
        ],
        [
            'step' => '3',
            'title' => 'Payroll runs itself.',
            'description' => 'Attendance data flows straight into the payroll engine — process, approve, lock, publish — and payslips are ready for self-service download the same day.',
        ],
    ],

    'feature_deep_dive' => [
        [
            'id' => 'attendance',
            'chip' => 'green',
            'icon' => 'bi-fingerprint',
            'title' => 'Smart attendance management',
            'paragraph' => 'Face-verified clock-in, geofence rules, rotational shifts, holidays, and live field GPS — with audit-friendly capture. Every clock-in is matched against a registered face embedding, which means the person clocking in has to actually be there — not a colleague punching in on their behalf. Office-based staff are validated against geofenced office locations; field staff are tracked live via GPS with historical trail views for managers. Attendance regularization requests, muster roll generation, overtime calculation, and month-end processing all run inside the same module, so there\'s no export-import step between "who showed up" and "what they\'re owed."',
        ],
        [
            'id' => 'payroll',
            'chip' => 'blue',
            'icon' => 'bi-currency-rupee',
            'title' => 'Automated payroll',
            'paragraph' => 'Payslips, salary advances, statutory-ready flows, and employee self-service downloads from web or mobile. Payroll runs follow a controlled lifecycle — process, approve, lock, publish — so nothing goes out to employees until an approver has signed off. Salary structures are configurable per role or grade, tax declarations are supported, and salary advances or loans are tracked against future payroll cycles instead of being managed separately in a ledger. Employees download their own payslips and Form 16 without raising a ticket to HR.',
        ],
        [
            'id' => 'lifecycle',
            'chip' => 'purple',
            'icon' => 'bi-people-fill',
            'title' => 'Employee lifecycle',
            'paragraph' => 'Onboarding, KYC verification, requests, leave, documents, and role-based portals for every layer of your org. New hires move through onboarding and probation as tracked cases, not email threads. KYC documents are collected and verified inside the platform. When someone leaves, offboarding workflows track asset return and final settlement status, and an org chart plus resigned-employee roster keep historical headcount visible without digging through old spreadsheets.',
        ],
        [
            'id' => 'analytics',
            'chip' => 'orange',
            'icon' => 'bi-bar-chart-fill',
            'title' => 'Advanced analytics & collaboration',
            'paragraph' => 'Dashboard KPIs, daily task reports, company notifications, chat, meetings, an HR notices/send-mail hub with verified SMTP, and plan-gated modules your subscription unlocks. Managers get a daily pulse view of attendance, tasks, and field activity. Teams communicate through built-in chat (direct and group), audio calls, and video meetings with transcript and summary — so basic HR communication doesn\'t need a separate Slack or Zoom subscription. HR sends company-wide notices and branded emails through a send-mail hub with full SMTP audit trails, so every outbound message is accountable.',
        ],
        [
            'id' => 'tracking',
            'chip' => 'green',
            'icon' => 'bi-geo-alt-fill',
            'title' => 'Field workforce tracking',
            'paragraph' => 'Live GPS pings while field staff are on duty, shown on an admin map with historical trails powered by OSRM routing. Stale or offline device detection tells a manager when a device has stopped reporting — not just where it last was — which matters in low-network areas. The mobile app runs a background duty tracker with an offline ping queue, so tracking doesn\'t break the moment a field rep loses signal, and syncs once connectivity returns.',
        ],
        [
            'id' => 'tasks',
            'chip' => 'blue',
            'icon' => 'bi-check2-square',
            'title' => 'Tasks & performance',
            'paragraph' => 'Task assignment, daily reports, and a manager approval queue link directly into performance reporting. Employees submit daily reports from mobile or web after clock-in; managers see a queue of pending approvals instead of chasing updates over chat. Completed tasks and report quality feed into the same performance view HR uses for reviews.',
        ],
        [
            'id' => 'crm',
            'chip' => 'purple',
            'icon' => 'bi-shop',
            'title' => 'Field sales CRM (opt-in module)',
            'paragraph' => 'Retailers, distributors, leads, plan sales, collections, and shop visits with GPS proof, all tied to KPI targets. This is uncommon in attendance-only HRMS products — it lets a field-sales-heavy business run retailer/distributor relationships, collections tracking, and visit verification from the same app their reps already use to clock in.',
        ],
        [
            'id' => 'reports',
            'chip' => 'orange',
            'icon' => 'bi-graph-up-arrow',
            'title' => 'Reports & analytics',
            'paragraph' => 'Daily pulse, company insights, task and candidate performance, and a mobile home-screen KPI bundle for managers who are rarely at a desk. Reporting isn\'t a separate export — it\'s built from the same live data attendance, payroll, and tasks generate.',
        ],
    ],

    'use_cases' => [
        [
            'id' => 'retail',
            'label' => 'Retail & Distribution',
            'title' => 'Retail & Distribution',
            'paragraph' => 'HRMS built for retail teams with stores, staff, and stock on the move. Track store staff attendance across locations, manage shift rosters, and give your field team a retailer/distributor CRM — all in one app. Multi-location geofencing, shift rotation across stores, and shop-visit GPS proof come standard.',
        ],
        [
            'id' => 'field-sales',
            'label' => 'Field Sales',
            'title' => 'Field Sales Teams',
            'paragraph' => 'Know where your field sales team is, and what they closed today. Live GPS tracking, shop-visit proof, collections, and lead management are built into the same app your reps use for attendance — with an offline ping queue that keeps tracking alive in low-network areas.',
        ],
        [
            'id' => 'startups',
            'label' => 'Startups',
            'title' => 'Growing Startups',
            'paragraph' => 'HR software that grows from your first 20 hires to your first 500. Start with attendance and payroll, turn on lifecycle, chat, and CRM modules as headcount grows — 27+ plan-tunable feature flags mean you only pay for what you\'re using at each stage.',
        ],
        [
            'id' => 'manufacturing',
            'label' => 'Manufacturing',
            'title' => 'Manufacturing & Shift-Based Teams',
            'paragraph' => 'Attendance and shift management built for factory and plant teams. Rotational shifts, geofenced clock-in on shared devices, overtime calculation, and muster roll generation handle shift-based workforces without a separate biometric system.',
        ],
        [
            'id' => 'agencies',
            'label' => 'Agencies',
            'title' => 'Services Agencies & Multi-Site Staff',
            'paragraph' => 'One HR system for staff spread across client sites. Per-site geofenced attendance, delegated manager permissions, and consolidated payroll mean you\'re not maintaining a separate spreadsheet per client.',
        ],
    ],

    'usps' => [
        ['icon' => 'bi-person-bounding-box', 'title' => 'Face-verified attendance', 'description' => 'Live selfie matched against a registered face embedding at every clock-in/out, cutting buddy punching and proxy attendance that PIN-only or GPS-only systems miss.'],
        ['icon' => 'bi-diagram-3', 'title' => 'Dual workforce model', 'description' => 'The same platform runs geofenced office staff and live-tracked field staff side by side — built for hybrid sales-plus-back-office teams common in Indian SMBs.'],
        ['icon' => 'bi-layers-fill', 'title' => 'All-in-one stack', 'description' => 'Attendance, payroll runs, tasks, chat/calls/meetings, lifecycle, and optional CRM under one subscription — fewer integrations, lower total cost of ownership.'],
        ['icon' => 'bi-flag-fill', 'title' => 'Indian SMB ready', 'description' => 'EL/CL/WFH leave types, statutory payroll hooks, Razorpay billing, KYC workflows, and HR notice emails with company branding.'],
        ['icon' => 'bi-sliders', 'title' => 'Granular SaaS control', 'description' => 'Super Admin sells plans with module-level toggles; every tenant gets isolated data, SMTP, offices, and custom role permissions.'],
        ['icon' => 'bi-shop', 'title' => 'Field sales CRM built-in', 'description' => 'Shop-visit GPS proof, collections, and a retailer/distributor ledger — rare in attendance-only HRMS products.'],
        ['icon' => 'bi-chat-dots-fill', 'title' => 'Real-time collaboration', 'description' => 'WebSocket chat, audio calls, and built-in video meetings with transcript and summary, without depending on a separate Slack or Zoom subscription for basic HR comms.'],
        ['icon' => 'bi-phone-fill', 'title' => 'Mobile-first field ops', 'description' => 'A Flutter app with guided face capture, background GPS duty tracker, offline ping queue, and app lock, built for unreliable networks.'],
        ['icon' => 'bi-shield-check', 'title' => 'Audit & compliance', 'description' => 'Outbound email logs (platform and company level), attendance audit trails, chat policy violations, and document-verification history.'],
        ['icon' => 'bi-cloud-check-fill', 'title' => 'Production hardened', 'description' => 'Deployed on AWS with Nginx, Daphne, and Redis; face-attendance performance is optimized in production with safe-deploy scripts protecting against hotfix regressions.'],
    ],

    'modules' => [
        ['name' => 'Users', 'description' => 'Login (JWT), roles, custom permissions, face registration, leave/requests, KYC, chat DM/groups'],
        ['name' => 'Companies', 'description' => 'Company profile, offices/geofences, departments/teams, holidays/shifts, SMTP profiles, HR notices'],
        ['name' => 'Attendance', 'description' => 'Face + GPS clock-in/out, geofence validation, muster roll, regularization, overtime, month processing'],
        ['name' => 'Tracking', 'description' => 'Live GPS pings, field dashboard map, employee trail, OSRM routing, stale/offline detection'],
        ['name' => 'Tasks', 'description' => 'Task assignment, daily reports, manager approval queue, performance linkage'],
        ['name' => 'Payroll', 'description' => 'Salary structures, payroll runs (process→approve→lock→publish), statutory rules, tax declarations'],
        ['name' => 'Lifecycle', 'description' => 'Timeline events, onboarding/probation/offboarding cases, assets, org chart, resigned roster'],
        ['name' => 'CRM (opt-in)', 'description' => 'Retailers, distributors, leads, plan sales, collections, shop visits with GPS proof, KPI targets'],
        ['name' => 'Reports', 'description' => 'Daily pulse, company insights, task/candidate performance, mobile home bundle KPIs'],
    ],

    'stats' => [
        ['value' => '20+', 'label' => 'Plan-tunable HR modules', 'animate' => true],
        ['value' => '99.9%', 'label' => 'Platform uptime target', 'animate' => true],
        ['value' => '3', 'label' => 'Portals — admin · employee · field', 'animate' => false],
        ['value' => '24/7', 'label' => 'Self-serve sign-in & mobile access', 'animate' => false],
    ],

    'security' => [
        'intro' => 'Trackbook handles attendance, payroll, and biometric data for your team, so the platform is built around data isolation and audit trails from the ground up.',
        'items' => [
            ['title' => 'Data isolation', 'text' => 'Every company (tenant) has isolated data, its own SMTP configuration, and its own offices, roles, and permissions — no cross-tenant data access.'],
            ['title' => 'Encryption', 'text' => 'All traffic is encrypted in transit via TLS. (Confirm and add encryption-at-rest detail with engineering before publishing.)'],
            ['title' => 'Face data handling', 'text' => 'Face verification matches against a registered embedding on-device and server-side. (Retention and deletion policy must be confirmed with your actual data policy — this is a legal claim under India\'s DPDP Act, not just marketing copy.)'],
            ['title' => 'Access control & audit', 'text' => 'Custom roles and delegated permissions at the company level; a cross-tenant outbound email audit log at the platform level; attendance and document-verification audit trails at the company level.'],
            ['title' => 'Infrastructure', 'text' => 'Hosted on AWS (EC2), served via Nginx and Daphne, with Redis for real-time features and MySQL/PostgreSQL for storage.'],
        ],
    ],

    'about' => [
        'story' => 'Trackbook started from a simple problem: [replace with real origin story]. We built the platform we needed first, then opened it up to other Indian businesses facing the same gap between attendance hardware, payroll vendors, and field visibility.',
        'mission' => 'Give growing Indian teams one trustworthy system for attendance, payroll, and workforce visibility — without stitching together five tools.',
    ],

    'team' => [
        ['name' => '[Founder Name]', 'role' => 'CEO & Co-founder', 'placeholder' => true],
        ['name' => '[CTO Name]', 'role' => 'CTO & Co-founder', 'placeholder' => true],
        ['name' => '[Head of Product]', 'role' => 'Head of Product', 'placeholder' => true],
        ['name' => '[Head of Sales]', 'role' => 'Head of Sales', 'placeholder' => true],
    ],

    'testimonials' => [
        [
            'quote' => '[Quote about reducing attendance disputes / saving HR time]',
            'name' => '[Name]',
            'role' => '[Role]',
            'company' => '[Company]',
            'city' => '[City]',
            'placeholder' => true,
        ],
    ],

    'pricing' => [
        'plans' => [
            ['name' => 'Starter', 'audience' => 'Under 50 employees', 'features' => ['Attendance', 'Mobile app', 'Basic reports'], 'highlighted' => false],
            ['name' => 'Growth', 'audience' => '50–200 employees', 'features' => ['+ Payroll', 'Lifecycle', 'Delegated roles'], 'highlighted' => true],
            ['name' => 'Business', 'audience' => '200–500 employees', 'features' => ['+ Chat/meetings', 'Field tracking', 'HR notice hub'], 'highlighted' => false],
            ['name' => 'Enterprise', 'audience' => '500+ / multi-brand', 'features' => ['+ CRM module', 'Custom SMTP', 'Super Admin plan overrides', 'SLA'], 'highlighted' => false],
        ],
    ],

    'faq' => [
        'Getting started' => [
            ['question' => 'Is Trackbook HRMS suitable for small businesses in India?', 'answer' => 'Yes. Plans start at under-50-employee teams and scale up by turning on additional modules as you grow, rather than switching platforms.'],
            ['question' => 'How long does onboarding take for a new company?', 'answer' => 'Most companies are clocking in their first employees within a day of setup; bulk CSV upload handles larger rosters at once.'],
            ['question' => 'Do I need special hardware for face-recognition attendance?', 'answer' => 'No. Face verification runs on the employee\'s own phone or a shared device via the mobile app or web — no dedicated biometric machine required.'],
            ['question' => 'Can I import my existing employee list?', 'answer' => 'Yes, via bulk CSV upload from the admin dashboard.'],
            ['question' => 'Is there a mobile app for employees and managers?', 'answer' => 'Yes, a native Flutter app for iOS and Android covers attendance, tasks, payslips, chat, and field tracking.'],
        ],
        'Attendance' => [
            ['question' => 'How does face-verified clock-in work?', 'answer' => 'A live selfie is matched against the employee\'s registered face embedding at the moment of clock-in/out, combined with GPS or geofence validation.'],
            ['question' => 'What happens if an employee\'s face doesn\'t match?', 'answer' => 'The clock-in is flagged for admin review rather than silently accepted, keeping attendance data audit-friendly.'],
            ['question' => 'Can I set different geofences for different offices?', 'answer' => 'Yes, geofence rules are configured per office/location.'],
            ['question' => 'How does field GPS tracking work for sales staff?', 'answer' => 'Field-type employees send live GPS pings while on duty, visible to managers on a live map with historical trail routing.'],
            ['question' => 'What happens if a field employee loses network connection?', 'answer' => 'The mobile app queues GPS pings offline and syncs automatically once connectivity returns.'],
        ],
        'Payroll' => [
            ['question' => 'Is payroll compliant with Indian statutory requirements?', 'answer' => 'Payroll includes statutory-ready flows and tax declaration support; confirm specific statutory coverage for your state/industry with the sales team.'],
            ['question' => 'Can employees download their own payslips?', 'answer' => 'Yes, through self-service on web or mobile.'],
            ['question' => 'How are salary advances and loans tracked?', 'answer' => 'Advances and loans are tracked within the payroll module against future payroll cycles.'],
            ['question' => 'Can I run payroll for multiple offices separately?', 'answer' => 'Yes, payroll runs can be scoped by office/department depending on your plan configuration.'],
        ],
        'Plans & billing' => [
            ['question' => 'What\'s included in each subscription plan?', 'answer' => 'See the plan comparison table above; each plan is built from 27+ toggleable feature flags.'],
            ['question' => 'Can I upgrade or downgrade my plan later?', 'answer' => 'Yes, plan changes are managed through the Super Admin/subscription console.'],
            ['question' => 'How is billing handled?', 'answer' => 'Billing is processed securely via Razorpay.'],
            ['question' => 'Is there a free trial?', 'answer' => '(Confirm current trial policy before publishing this answer.)'],
        ],
        'Security & data' => [
            ['question' => 'Is my company\'s data isolated from other companies on the platform?', 'answer' => 'Yes, every tenant\'s data, SMTP configuration, and permissions are isolated.'],
            ['question' => 'What happens to biometric data after an employee leaves?', 'answer' => '(Confirm retention/deletion policy with engineering/legal before publishing.)'],
            ['question' => 'Who can access employee documents and KYC data?', 'answer' => 'Access is controlled by custom roles and delegated permissions set by the company admin.'],
            ['question' => 'Is Trackbook hosted in India?', 'answer' => '(Confirm actual AWS region before publishing.)'],
        ],
        'Collaboration & CRM' => [
            ['question' => 'Is chat and video meetings included in every plan?', 'answer' => 'Collaboration features are gated by plan; check the pricing table for what\'s included at each tier.'],
            ['question' => 'What is the field sales CRM module and who needs it?', 'answer' => 'An opt-in module for teams managing retailers/distributors — tracks leads, collections, and shop visits with GPS proof.'],
            ['question' => 'Can I turn off modules I don\'t need?', 'answer' => 'Yes, the platform is built around plan-level and company-level feature toggles.'],
        ],
    ],

    'resources' => [
        ['title' => 'What Is an HRMS? A Complete Guide for Indian Businesses', 'excerpt' => 'A foundational guide to HR management software for growing Indian teams.', 'href' => '#'],
        ['title' => 'Biometric vs Face Recognition Attendance', 'excerpt' => 'What\'s the difference, and which approach fits your workforce?', 'href' => '#'],
        ['title' => 'Payroll Compliance Checklist for Indian SMBs', 'excerpt' => 'Statutory requirements, tax declarations, and payroll best practices for 2026.', 'href' => '#'],
    ],
];
