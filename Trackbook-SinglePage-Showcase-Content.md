# Trackbook HRMS — Complete SINGLE-PAGE Website Content (Showcase Build)
### One long, content-rich page — every section, full copy, SEO + schema + Cursor AI prompt, all in one document

Prepared: 04 July 2026

Note on approach: since this is one showcase page, **everything lives on `/` as sections with anchor IDs** (`#features`, `#solutions`, `#security`, `#pricing`, `#faq`, etc.) — no separate routes. Navbar links scroll to sections instead of navigating pages. This keeps SEO value concentrated on one strong, content-heavy URL instead of splitting it — good for a showcase/demo page, just know that a single page can't target as many distinct keyword phrases in `<title>`/`<h1>` as a multi-page site would (noted in the SEO section below).

---

# TABLE OF CONTENTS
1. Page structure map (all sections, in order, with anchor IDs)
2. Full copy — every section, expanded and content-dense
3. On-page SEO for a single URL (title, meta, heading strategy, keyword placement)
4. Schema — all types combined into one page's JSON-LD
5. EEAT checklist for a single page
6. One complete Cursor AI prompt to build the whole page

---

# 1. PAGE STRUCTURE MAP

```
<Navbar/>                         sticky, anchor links to sections below
<Hero id="top"/>
<LogoStrip/>
<HowItWorks id="how-it-works"/>
<FeatureDeepDive id="features"/>       -- all 8 modules, full depth
<UseCases id="solutions"/>             -- all 5 industries, as sub-sections/tabs
<USPGrid id="why-trackbook"/>
<ModuleMap id="modules"/>
<StatsBand/>
<SecurityCompliance id="security"/>    -- full trust content
<AboutStory id="about"/>
<Testimonials id="customers"/>
<PricingTable id="pricing"/>
<FAQAccordion id="faq"/>              -- 25 Qs
<BlogTeaser id="resources"/>          -- optional, 3 article cards linking out later
<FinalCTA/>
<Footer/>
```

Navbar becomes: `Features · Solutions · Security · Pricing · FAQ` — all `<a href="#id">` anchors, `Log in` + `Get started` stay as-is.

---

# 2. FULL COPY — EVERY SECTION (content-dense, expanded)

## 2.1 Hero `#top`
**Eyebrow:** ⚡ A new & faster HRMS stack

**H1 (SEO-complete version, styled as the visual headline, split across two lines/spans for the green highlight):**
Enterprise HRMS Software for Indian Teams — Attendance, Payroll & Workforce Management, **Simplified.**

**Subhead:**
Streamline attendance, payroll, tasks, and employee lifecycle on one secure platform built for growing Indian teams — from face-verified clock-in to payslip. No biometric machine, no separate payroll vendor, no spreadsheet for your field staff.

**CTAs:** `Get started` (primary) · `Sign in →` (secondary)

**Trust row:** Avatar stack (HR / OP / AD / +) + "Trusted by HR & operations teams across India"

**Visual:** Live dashboard mock (Present / Tasks / Payroll cards + animated bar chart — signature element, staged entrance + ambient re-randomization every ~6s).

---

## 2.2 Logo strip
"TRUSTED BY LEADING COMPANIES" — replace placeholder names with real logos before launch.

---

## 2.3 How it works `#how-it-works`
**H2:** From clock-in to payslip, in one flow

1. **Employee clocks in.** Face and GPS verification on mobile or web, matched against a registered face embedding in under a second — no separate biometric machine needed.
2. **Manager sees it live.** Attendance, field location, and task status update on the admin dashboard in real time, with photo and face-score visibility on every entry.
3. **Payroll runs itself.** Attendance data flows straight into the payroll engine — process, approve, lock, publish — and payslips are ready for self-service download the same day.

---

## 2.4 Feature deep-dive `#features` (expanded, full depth — this is the content-heavy core of the page)

**H2:** Everything you need to manage your people
**Sub:** Attendance, payroll, compliance, and collaboration — unified in one workspace with web dashboards and a professional mobile app.

### Smart attendance management
Face-verified clock-in, geofence rules, rotational shifts, holidays, and live field GPS — with audit-friendly capture. Every clock-in is matched against a registered face embedding, which means the person clocking in has to actually be there — not a colleague punching in on their behalf. Office-based staff are validated against geofenced office locations; field staff are tracked live via GPS with historical trail views for managers. Attendance regularization requests, muster roll generation, overtime calculation, and month-end processing all run inside the same module, so there's no export-import step between "who showed up" and "what they're owed."

### Automated payroll
Payslips, salary advances, statutory-ready flows, and employee self-service downloads from web or mobile. Payroll runs follow a controlled lifecycle — process, approve, lock, publish — so nothing goes out to employees until an approver has signed off. Salary structures are configurable per role or grade, tax declarations are supported, and salary advances or loans are tracked against future payroll cycles instead of being managed separately in a ledger. Employees download their own payslips and Form 16 without raising a ticket to HR.

### Employee lifecycle
Onboarding, KYC verification, requests, leave, documents, and role-based portals for every layer of your org. New hires move through onboarding and probation as tracked cases, not email threads. KYC documents are collected and verified inside the platform. When someone leaves, offboarding workflows track asset return and final settlement status, and an org chart plus resigned-employee roster keep historical headcount visible without digging through old spreadsheets.

### Advanced analytics & collaboration
Dashboard KPIs, daily task reports, company notifications, chat, meetings, an HR notices/send-mail hub with verified SMTP, and plan-gated modules your subscription unlocks. Managers get a daily pulse view of attendance, tasks, and field activity. Teams communicate through built-in chat (direct and group), audio calls, and video meetings with transcript and summary — so basic HR communication doesn't need a separate Slack or Zoom subscription. HR sends company-wide notices and branded emails through a send-mail hub with full SMTP audit trails, so every outbound message is accountable.

### Field workforce tracking
Live GPS pings while field staff are on duty, shown on an admin map with historical trails powered by OSRM routing. Stale or offline device detection tells a manager when a device has stopped reporting — not just where it last was — which matters in low-network areas. The mobile app runs a background duty tracker with an offline ping queue, so tracking doesn't break the moment a field rep loses signal, and syncs once connectivity returns.

### Tasks & performance
Task assignment, daily reports, and a manager approval queue link directly into performance reporting. Employees submit daily reports from mobile or web after clock-in; managers see a queue of pending approvals instead of chasing updates over chat. Completed tasks and report quality feed into the same performance view HR uses for reviews.

### Field sales CRM (opt-in module)
Retailers, distributors, leads, plan sales, collections, and shop visits with GPS proof, all tied to KPI targets. This is uncommon in attendance-only HRMS products — it lets a field-sales-heavy business run retailer/distributor relationships, collections tracking, and visit verification from the same app their reps already use to clock in.

### Reports & analytics
Daily pulse, company insights, task and candidate performance, and a mobile home-screen KPI bundle for managers who are rarely at a desk. Reporting isn't a separate export — it's built from the same live data attendance, payroll, and tasks generate.

---

## 2.5 Solutions / Use cases `#solutions` (all 5, as tabs or accordion within the single page)

**H2:** Built for how your team actually works
**Sub:** The same platform adapts to different workforce structures — pick the tab closest to your team.

### Retail & Distribution
HRMS built for retail teams with stores, staff, and stock on the move. Track store staff attendance across locations, manage shift rosters, and give your field team a retailer/distributor CRM — all in one app. Multi-location geofencing, shift rotation across stores, and shop-visit GPS proof come standard.

### Field Sales Teams
Know where your field sales team is, and what they closed today. Live GPS tracking, shop-visit proof, collections, and lead management are built into the same app your reps use for attendance — with an offline ping queue that keeps tracking alive in low-network areas.

### Growing Startups
HR software that grows from your first 20 hires to your first 500. Start with attendance and payroll, turn on lifecycle, chat, and CRM modules as headcount grows — 27+ plan-tunable feature flags mean you only pay for what you're using at each stage.

### Manufacturing & Shift-Based Teams
Attendance and shift management built for factory and plant teams. Rotational shifts, geofenced clock-in on shared devices, overtime calculation, and muster roll generation handle shift-based workforces without a separate biometric system.

### Services Agencies & Multi-Site Staff
One HR system for staff spread across client sites. Per-site geofenced attendance, delegated manager permissions, and consolidated payroll mean you're not maintaining a separate spreadsheet per client.

---

## 2.6 Why teams choose Trackbook `#why-trackbook` (USP grid, expanded)

**H2:** Why teams choose Trackbook over generic HRMS

1. **Face-verified attendance** — Live selfie matched against a registered face embedding at every clock-in/out, cutting buddy punching and proxy attendance that PIN-only or GPS-only systems miss.
2. **Dual workforce model** — The same platform runs geofenced office staff and live-tracked field staff side by side — built for hybrid sales-plus-back-office teams common in Indian SMBs.
3. **All-in-one stack** — Attendance, payroll runs, tasks, chat/calls/meetings, lifecycle, and optional CRM under one subscription — fewer integrations, lower total cost of ownership.
4. **Indian SMB ready** — EL/CL/WFH leave types, statutory payroll hooks, Razorpay billing, KYC workflows, and HR notice emails with company branding.
5. **Granular SaaS control** — Super Admin sells plans with module-level toggles; every tenant gets isolated data, SMTP, offices, and custom role permissions.
6. **Field sales CRM built-in** — Shop-visit GPS proof, collections, and a retailer/distributor ledger — rare in attendance-only HRMS products.
7. **Real-time collaboration** — WebSocket chat, audio calls, and built-in video meetings with transcript and summary, without depending on a separate Slack or Zoom subscription for basic HR comms.
8. **Mobile-first field ops** — A Flutter app with guided face capture, background GPS duty tracker, offline ping queue, and app lock, built for unreliable networks.
9. **Audit & compliance** — Outbound email logs (platform and company level), attendance audit trails, chat policy violations, and document-verification history.
10. **Production hardened** — Deployed on AWS with Nginx, Daphne, and Redis; face-attendance performance is optimized in production with safe-deploy scripts protecting against hotfix regressions.

---

## 2.7 Full company workspace / module map `#modules`

**H2:** Full company workspace
**Sub:** Core tools, workforce, time & attendance, collaboration, payroll, and configuration — scoped by role and subscription plan.

| Module | What it does |
|---|---|
| **Users** | Login (JWT), roles, custom permissions, face registration, leave/requests, KYC, chat DM/groups |
| **Companies** | Company profile, offices/geofences, departments/teams, holidays/shifts, SMTP profiles, HR notices |
| **Attendance** | Face + GPS clock-in/out, geofence validation, muster roll, regularization, overtime, month processing |
| **Tracking** | Live GPS pings, field dashboard map, employee trail, OSRM routing, stale/offline detection |
| **Tasks** | Task assignment, daily reports, manager approval queue, performance linkage |
| **Payroll** | Salary structures, payroll runs (process→approve→lock→publish), statutory rules, tax declarations |
| **Lifecycle** | Timeline events, onboarding/probation/offboarding cases, assets, org chart, resigned roster |
| **CRM** (opt-in) | Retailers, distributors, leads, plan sales, collections, shop visits with GPS proof, KPI targets |
| **Reports** | Daily pulse, company insights, task/candidate performance, mobile home bundle KPIs |

---

## 2.8 Stats band
**20+** Plan-tunable HR modules · **99.9%** Platform uptime target · **3** Portals — admin · employee · field · **24/7** Self-serve sign-in & mobile access

---

## 2.9 Security & Compliance `#security`

**H2:** How Trackbook protects your employee data

Trackbook handles attendance, payroll, and biometric data for your team, so the platform is built around data isolation and audit trails from the ground up.

- **Data isolation:** Every company (tenant) has isolated data, its own SMTP configuration, and its own offices, roles, and permissions — no cross-tenant data access.
- **Encryption:** All traffic is encrypted in transit via TLS. *(Confirm and add encryption-at-rest detail with engineering before publishing.)*
- **Face data handling:** Face verification matches against a registered embedding on-device and server-side. *(Retention and deletion policy must be confirmed with your actual data policy — this is a legal claim under India's DPDP Act, not just marketing copy.)*
- **Access control & audit:** Custom roles and delegated permissions at the company level; a cross-tenant outbound email audit log at the platform level; attendance and document-verification audit trails at the company level.
- **Infrastructure:** Hosted on AWS (EC2), served via Nginx and Daphne, with Redis for real-time features and MySQL/PostgreSQL for storage.

**CTA:** Request our security documentation

---

## 2.10 About / Story `#about`

**H2:** Built for the teams who run operations, not just HR

*(Template — replace with your real story)* Trackbook started from a simple problem: [replace with real origin story]. We built the platform we needed first, then opened it up to other Indian businesses facing the same gap between attendance hardware, payroll vendors, and field visibility.

**Mission:** Give growing Indian teams one trustworthy system for attendance, payroll, and workforce visibility — without stitching together five tools.

**Team:** *(Add real names, roles, and photos — even 3-4 people meaningfully improves trust signals over an anonymous "About" section.)*

---

## 2.11 Testimonials `#customers`
*(Placeholder structure — do not publish invented quotes. Replace with real customer name, role, company, and city.)*
> "[Quote about reducing attendance disputes / saving HR time]" — **[Name], [Role], [Company], [City]**

---

## 2.12 Pricing `#pricing`

**H2:** Plans that scale with your team
**Sub:** Every plan includes attendance and the employee mobile app. Add payroll, lifecycle, collaboration, and CRM as you grow.

| Plan | Best for | Includes |
|---|---|---|
| Starter | Under 50 employees | Attendance, mobile app, basic reports |
| Growth | 50–200 employees | + Payroll, lifecycle, delegated roles |
| Business | 200–500 employees | + Chat/meetings, field tracking, HR notice hub |
| Enterprise | 500+ / multi-brand | + CRM module, custom SMTP, Super Admin plan overrides, SLA |

27+ plan-tunable feature flags — turn on exactly what your team needs. Billing secured via Razorpay.

---

## 2.13 FAQ `#faq` (25 questions, categorized — full content)

**Getting started**
1. Is Trackbook HRMS suitable for small businesses in India? — Yes. Plans start at under-50-employee teams and scale up by turning on additional modules as you grow, rather than switching platforms.
2. How long does onboarding take for a new company? — Most companies are clocking in their first employees within a day of setup; bulk CSV upload handles larger rosters at once.
3. Do I need special hardware for face-recognition attendance? — No. Face verification runs on the employee's own phone or a shared device via the mobile app or web — no dedicated biometric machine required.
4. Can I import my existing employee list? — Yes, via bulk CSV upload from the admin dashboard.
5. Is there a mobile app for employees and managers? — Yes, a native Flutter app for iOS and Android covers attendance, tasks, payslips, chat, and field tracking.

**Attendance**
6. How does face-verified clock-in work? — A live selfie is matched against the employee's registered face embedding at the moment of clock-in/out, combined with GPS or geofence validation.
7. What happens if an employee's face doesn't match? — The clock-in is flagged for admin review rather than silently accepted, keeping attendance data audit-friendly.
8. Can I set different geofences for different offices? — Yes, geofence rules are configured per office/location.
9. How does field GPS tracking work for sales staff? — Field-type employees send live GPS pings while on duty, visible to managers on a live map with historical trail routing.
10. What happens if a field employee loses network connection? — The mobile app queues GPS pings offline and syncs automatically once connectivity returns.

**Payroll**
11. Is payroll compliant with Indian statutory requirements? — Payroll includes statutory-ready flows and tax declaration support; confirm specific statutory coverage for your state/industry with the sales team.
12. Can employees download their own payslips? — Yes, through self-service on web or mobile.
13. How are salary advances and loans tracked? — Advances and loans are tracked within the payroll module against future payroll cycles.
14. Can I run payroll for multiple offices separately? — Yes, payroll runs can be scoped by office/department depending on your plan configuration.

**Plans & billing**
15. What's included in each subscription plan? — See the plan comparison table above; each plan is built from 27+ toggleable feature flags.
16. Can I upgrade or downgrade my plan later? — Yes, plan changes are managed through the Super Admin/subscription console.
17. How is billing handled? — Billing is processed securely via Razorpay.
18. Is there a free trial? — *(Confirm current trial policy before publishing this answer.)*

**Security & data**
19. Is my company's data isolated from other companies on the platform? — Yes, every tenant's data, SMTP configuration, and permissions are isolated.
20. What happens to biometric data after an employee leaves? — *(Confirm retention/deletion policy with engineering/legal before publishing.)*
21. Who can access employee documents and KYC data? — Access is controlled by custom roles and delegated permissions set by the company admin.
22. Is Trackbook hosted in India? — *(Confirm actual AWS region before publishing.)*

**Collaboration & CRM**
23. Is chat and video meetings included in every plan? — Collaboration features are gated by plan; check the pricing table for what's included at each tier.
24. What is the field sales CRM module and who needs it? — An opt-in module for teams managing retailers/distributors — tracks leads, collections, and shop visits with GPS proof.
25. Can I turn off modules I don't need? — Yes, the platform is built around plan-level and company-level feature toggles.

---

## 2.14 Resources/Blog teaser `#resources` (optional, light — 3 cards linking to future articles)
"What Is an HRMS? A Complete Guide for Indian Businesses" · "Biometric vs Face Recognition Attendance" · "Payroll Compliance Checklist for Indian SMBs" — each links out once written; keeps the page fresh and gives you 3 easy internal-link targets later.

---

## 2.15 Final CTA
**H2:** Run HR the way your team actually works.
`Get started` + `Talk to sales`

## 2.16 Footer
Product anchors (Features, Solutions, Security, Pricing, FAQ) · Company (About, Contact) · Legal (Privacy, Terms) · registered company name, support email, "Made in India for Indian teams."

---

# 3. ON-PAGE SEO FOR A SINGLE URL

Because everything lives on one page, you get **one shot** at title/meta/H1 — make it count, and use heading hierarchy heavily since you can't split keyword targeting across separate title tags:

**Title (≤60 chars):** `Trackbook HRMS — Attendance, Payroll & Workforce Software India`

**Meta description (≤155 chars):** `Face-verified attendance, automated payroll, field GPS tracking, and HR lifecycle tools in one platform built for Indian SMBs. See every feature below.`

**H1 (exactly one):** the full Hero headline from Section 2.1.

**H2 strategy:** each major section becomes an H2 carrying its own keyword weight — "Everything you need to manage your people" (features), "Built for how your team actually works" (solutions/industry terms), "How Trackbook protects your employee data" (security/trust terms), "Plans that scale with your team" (pricing intent). This is how a single page still picks up multiple keyword clusters — through H2/H3 structure and section depth, not through separate title tags.

**Anchor links as internal structure:** `#features`, `#solutions`, `#security`, `#pricing`, `#faq` in the nav double as a mini table-of-contents — good for both usability and for Google's sitelinks/jump-to feature in search results.

**Trade-off to flag honestly:** a single page will not outrank a well-built multi-page site for a wide spread of competitive commercial keywords over time, because you can't give "HRMS for retail" and "HRMS for manufacturing" each their own optimized title/H1/URL. This build is the right call for a showcase/demo page; if lead generation from organic search becomes a priority later, splitting `/solutions/*` into real routes (as in the previous package) is the next SEO upgrade — not a redesign, just new routes reusing these same content blocks.

---

# 4. SCHEMA — ALL TYPES ON ONE PAGE

Combine into a single `<script type="application/ld+json">` array on the page:

```json
[
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Trackbook HRMS",
    "url": "https://hrms.trackbook.co",
    "logo": "https://hrms.trackbook.co/logo.png"
  },
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Trackbook HRMS",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web, iOS, Android",
    "description": "Face-verified attendance, payroll, field GPS tracking, and HR lifecycle management platform for Indian businesses.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "REPLACE_WITH_REAL_STARTING_PRICE"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Is Trackbook HRMS suitable for small businesses in India?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Plans start at under-50-employee teams and scale up by turning on additional modules as you grow, rather than switching platforms."
        }
      }
    ]
  }
]
```
*Populate the full `mainEntity` array from all 25 FAQ answers in Section 2.13, generated from the same data object that renders the visible accordion — never hand-duplicated.*

---

# 5. EEAT CHECKLIST FOR THE SINGLE PAGE

- [ ] Replace placeholder logos with 3–5 real customer logos
- [ ] Replace testimonial placeholder with real, named quotes
- [ ] Add real team photos/names to the About section
- [ ] Confirm and fill every `[REPLACE]`/bracketed item in Security and FAQ before publishing — especially biometric data retention and hosting region
- [ ] Link real Privacy Policy and Terms in the footer (even if hosted as simple standalone pages outside the main showcase)
- [ ] Confirm trial/pricing claims against actual current policy before publishing

---

# 6. ONE COMPLETE CURSOR AI PROMPT — BUILD THE WHOLE PAGE

```
Build a single-page marketing website for "Trackbook HRMS" at app/page.tsx (Next.js 14,
App Router, TypeScript, Tailwind CSS, Framer Motion). This is a content-dense SHOWCASE
page — everything lives on one URL as sections with anchor IDs, no separate routes.
Match the existing visual identity from the reference screenshots exactly — dark navy
hero/stats/footer, light content sections, emerald green accent. Do not invent a new
color scheme.

DESIGN TOKENS (define in tailwind.config.ts, do not hardcode hex in components)
  bg-dark:        #0B1220      bg-dark-alt: #111A2E
  bg-light:       #F5F7FA      bg-white:    #FFFFFF
  accent-green:   #10B981      accent-green-soft: #D1FAE5   accent-green-dark: #059669
  accent-blue:    #2563EB      accent-purple: #7C3AED       accent-orange: #F97316
  text-dark:      #0F172A      text-body: #475569           text-muted: #94A3B8
  text-on-dark:   #E2E8F0
  border-hairline:#E2E8F0      border-hairline-dark: #1E293B

TYPOGRAPHY
  Headings: Inter Tight, 700-800, tight tracking (-0.02em) — load via next/font/google
  Body: Inter, 400/500
  Stat numerals: Inter Tight 800, tabular-nums

SECTION ORDER (build each as its own component, imported into app/page.tsx in this order,
each wrapped in a <section id="..."> matching the anchor used in the nav)

1. <Navbar/>            sticky, anchor links: #features #solutions #security #pricing #faq,
                         Log in + Get started buttons, mobile hamburger menu with same anchors
2. <Hero id="top"/>     dark bg, eyebrow badge, single <h1> (full SEO headline, green
                         highlight word in a <span>), subhead, two CTAs, avatar trust row,
                         animated dashboard mock right side (see ANIMATION SPEC below)
3. <LogoStrip/>         light bg, grayscale-to-color hover logos
4. <HowItWorks id="how-it-works"/>   light bg, H2 + numbered 3-step row (this IS a real
                         sequence, numbering is appropriate here)
5. <FeatureDeepDive id="features"/>  light bg, H2 + sub, then 8 alternating text/visual
                         rows (one per module: Attendance, Payroll, Lifecycle, Analytics
                         & Collaboration, Field Tracking, Tasks, CRM, Reports) — each row:
                         icon chip, H3, full paragraph copy (NOT just a bullet list — use
                         the full paragraph content provided, this section should feel
                         substantial, it's the core content of the page)
6. <UseCases id="solutions"/>        light bg, H2 + sub, then a tab component (5 tabs:
                         Retail, Field Sales, Startups, Manufacturing, Agencies) — each
                         tab panel shows H3 + full paragraph, swap content via client-side
                         tab state, all 5 panels' content present in the DOM (render all,
                         hide inactive with CSS, not conditionally unmounted, for SEO)
7. <USPGrid id="why-trackbook"/>     light bg, H2, 10-item icon+title+description grid
                         (2-3 columns responsive)
8. <ModuleMap id="modules"/>         light bg, H2 + sub, render the 9-row module table as
                         a styled table on desktop, stacked cards on mobile
9. <StatsBand/>          dark bg, 4-column count-up-on-scroll stats
10. <SecurityCompliance id="security"/>  light bg, single-column reading layout (max-width
                         720px, line-height 1.7 — distinct from the grid layouts above,
                         this is a trust/reading section), H2 + intro + 5 H3 subsections
11. <AboutStory id="about"/>         light or dark-alt bg, H2 + story paragraph + mission
                         pull-quote block + team grid (placeholder team data clearly
                         marked, 3-4 person cards)
12. <Testimonials id="customers"/>   light bg, quote card carousel or static 2-3 grid,
                         clearly marked [PLACEHOLDER] data with a code comment
13. <PricingTable id="pricing"/>     light bg, H2 + sub, 4-column plan table (Starter/
                         Growth/Business/Enterprise), REPLACE_ME price placeholders
                         flagged in a data file with a comment
14. <FAQAccordion id="faq"/>         light bg, H2, all 25 questions grouped under 6
                         category headers, native <details>/<summary> or an accordion
                         where answer text is present in server-rendered HTML (required
                         for FAQPage schema validity — verify via view-source, not just
                         devtools)
15. <ResourcesTeaser id="resources"/> light bg, 3-card teaser grid, links can be "#"
                         placeholders for now
16. <FinalCTA/>          dark bg, H2, two buttons
17. <Footer/>            anchor links matching nav, legal links, registered info

ANIMATION SPEC (hero dashboard mock — signature element)
- Mount sequence: sidebar lines fade in (0-200ms) -> Present/Tasks/Payroll cards stagger
  in (200-500ms, 100ms apart, translateY 8px->0) -> bar chart bars rise from 0 height
  with 150ms stagger per bar, ease-out, 500-600ms duration.
- Ambient loop after mount: every ~6s, animate 2-3 random bars to a new random height
  (400ms ease-in-out).
- Respect prefers-reduced-motion: skip the loop and ambient animation entirely, show
  final state instantly.
- All other sections: simple fade + translateY(12px) on scroll-into-view, one shared
  easing curve, no per-section custom effects.

SEO REQUIREMENTS (build these in from the start, not as a later pass)
- generateMetadata() in app/page.tsx:
    title: "Trackbook HRMS — Attendance, Payroll & Workforce Software India"
    description: "Face-verified attendance, automated payroll, field GPS tracking, and
    HR lifecycle tools in one platform built for Indian SMBs. See every feature below."
- Exactly one <h1>, in the Hero, containing the full SEO headline text.
- Every other section uses <h2>, sub-items use <h3> — no skipped heading levels.
- Add a combined JSON-LD script (Organization + SoftwareApplication + FAQPage, FAQPage
  mainEntity generated programmatically from the same data array that renders the
  FAQAccordion component — do not hand-write a separate duplicate).
- Every <Image> has a descriptive alt prop.
- Semantic HTML throughout: <nav>, <main>, <section aria-labelledby="...">, <footer>.

ACCESSIBILITY / QUALITY BAR
- Visible focus-visible states on every interactive element (nav links, tabs, accordion
  triggers, buttons)
- Verify text-body (#475569) on bg-light (#F5F7FA) and text-on-dark on bg-dark both pass
  WCAG AA contrast
- Responsive: mobile <640px, tablet 640-1024px, desktop >1024px — hero dashboard mock
  stacks below text on mobile, tab component on UseCases becomes an accordion on mobile
  instead of horizontal tabs
- Lighthouse targets: Performance >= 90, Accessibility >= 95, SEO >= 95

CONTENT SOURCE
Use CONTENT.md (the document I'm providing, sections 2.1 through 2.16) verbatim for all
copy — headings, paragraphs, table data, FAQ questions and answers. Do not shorten,
paraphrase, or invent additional marketing claims (pricing, uptime %, customer counts)
beyond what's explicitly provided. Any text wrapped in [REPLACE] or marked placeholder
in CONTENT.md must be rendered as-is with a visible TODO code comment above it in the
component file — do not silently invent replacement values.

Before writing code: output the component file tree and a one-paragraph build plan,
then wait for my go-ahead before generating all files.
```

---

*Everything in Sections 2.9 (Security), 2.10 (About), 2.11 (Testimonials), 2.12 (Pricing prices), and several FAQ answers in 2.13 contains placeholder or bracketed content that must be confirmed with real information before this goes live — flagged deliberately rather than filled with invented specifics, since this content touches payroll and biometric data claims.*
