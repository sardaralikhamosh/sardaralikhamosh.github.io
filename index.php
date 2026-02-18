<?php
// ── Basic Info Variables ──────────────────────────────────────────────────────
$name        = "Sardar Ali";
$name_full   = "Sardar Ali Khamosh";
$title       = "Healthcare Software Developer &amp; CS Researcher";
$subtitle    = "MPhil CS · Quaid-i-Azam University · Islamabad, Pakistan";
$email       = "sardaralikhamosh@gmail.com";
$email2      = "skhamosh152@gmail.com";
$phone1      = "(+92) 341 533 6669";
$phone2      = "(+92) 314 521 4774";
$location    = "Islamabad, Pakistan";
$linkedin    = "https://www.linkedin.com/in/sardaralikhamosh";
$github      = "https://github.com/sardaralikhamosh";
$github_page = "https://sardaralikhamosh.github.io";
$facebook    = "https://www.facebook.com/sardaralikham0sh/";
$instagram   = "https://www.instagram.com/sardarali_khamosh/";
$youtube     = "https://www.youtube.com/@sardaralikhamoshofficial";
$orcid       = "https://orcid.org/0009-0002-0306-0474";
$orcid_id    = "0009-0002-0306-0474";
$portfolio   = "https://digicellinternational.shinisa.com/";
$company     = "https://shinisa.com";
$sap         = "https://www.sapcommunications.com.pk/";

$bio = "I am a <a href='https://www.hhs.gov/hipaa/index.html' target='_blank' rel='noopener'><strong>HIPAA</strong></a>-aware 
Healthcare Software Developer specialising in 
<a href='https://www.cms.gov/medicare/billing/edibasics/electronic-data-interchange/revenue-cycle-management' target='_blank' rel='noopener'>Medical Billing &amp; Revenue Cycle Management (RCM) automation</a> — 
designing secure, scalable, workflow-driven healthcare IT systems. 
I contribute across the full stack, from backend APIs to system architecture and performance optimisation.
Alongside my industry work, I am pursuing an 
<a href='https://qau.edu.pk' target='_blank' rel='noopener'>MPhil in Computer Science at Quaid-i-Azam University</a>, 
with research interests in <a href='https://nlp.stanford.edu/projects/' target='_blank' rel='noopener'>NLP &amp; LLMs</a> 
for <a href='https://en.wikipedia.org/wiki/Burushaski' target='_blank' rel='noopener'>low-resource languages</a>. 
I am also known as <strong>Sardar Ali Khamosh</strong> — poet in <a href='https://en.wikipedia.org/wiki/Burushaski' target='_blank' rel='noopener'>Burushaski</a>.";

$expertise = [
    ["label" => "HIPAA-Aware Systems",          "url" => "https://www.hhs.gov/hipaa/index.html"],
    ["label" => "Medical Billing &amp; RCM",    "url" => "https://www.cms.gov/medicare/billing/edibasics/electronic-data-interchange/revenue-cycle-management"],
    ["label" => "Healthcare IT",                "url" => "https://www.hl7.org/fhir/"],
    ["label" => "Full Stack Development",       "url" => null],
    ["label" => "Backend APIs &amp; Automation","url" => null],
    ["label" => "WordPress",                    "url" => "https://wordpress.org"],
    ["label" => "Laravel",                      "url" => "https://laravel.com"],
    ["label" => "Advanced SEO",                 "url" => "https://developers.google.com/search/docs/fundamentals/seo-starter-guide"],
    ["label" => "NLP &amp; LLM Research",       "url" => "https://arxiv.org/a/ali_s_5.html"],
    ["label" => "Burushaski Language",          "url" => "https://en.wikipedia.org/wiki/Burushaski"],
];

$skills = [
    "Healthcare IT" => [
        ["icon" => "fas fa-shield-alt",    "text" => "HIPAA-Aware Systems",         "url" => "https://www.hhs.gov/hipaa/index.html"],
        ["icon" => "fas fa-file-medical",  "text" => "Medical Billing &amp; RCM",   "url" => "https://www.cms.gov/medicare/billing/edibasics/electronic-data-interchange/revenue-cycle-management"],
        ["icon" => "fas fa-cogs",          "text" => "Workflow Automation",          "url" => null],
        ["icon" => "fas fa-server",        "text" => "Backend APIs &amp; Healthcare Data", "url" => null],
        ["icon" => "fas fa-lock",          "text" => "Secure &amp; Scalable Architecture", "url" => null],
    ],
    "Web Development" => [
        ["icon" => "fab fa-wordpress",     "text" => "WordPress &amp; Theme Dev",   "url" => "https://wordpress.org"],
        ["icon" => "fab fa-laravel",       "text" => "Laravel (PHP)",               "url" => "https://laravel.com"],
        ["icon" => "fas fa-paint-brush",   "text" => "HTML, CSS, Bootstrap, JS",   "url" => null],
        ["icon" => "fab fa-shopify",       "text" => "Shopify Development",         "url" => "https://www.shopify.com"],
        ["icon" => "fas fa-database",      "text" => "Database &amp; C-Panel",      "url" => null],
    ],
    "SEO &amp; Performance" => [
        ["icon" => "fas fa-search",        "text" => "Advanced SEO",                "url" => "https://developers.google.com/search/docs/fundamentals/seo-starter-guide"],
        ["icon" => "fas fa-tachometer-alt","text" => "Web Performance Optimisation","url" => null],
        ["icon" => "fas fa-chart-line",    "text" => "Analytics &amp; Marketing",   "url" => null],
        ["icon" => "fas fa-code",          "text" => "Structured Data / Schema.org","url" => "https://schema.org"],
    ],
    "Research &amp; NLP" => [
        ["icon" => "fas fa-brain",         "text" => "NLP &amp; LLM Research",      "url" => "https://nlp.stanford.edu/projects/"],
        ["icon" => "fas fa-calculator",    "text" => "Computational Modelling",     "url" => null],
        ["icon" => "fas fa-globe",         "text" => "Low-Resource Language Tech",  "url" => "https://en.wikipedia.org/wiki/Burushaski"],
        ["icon" => "fas fa-language",      "text" => "Multilingual Benchmarking",   "url" => null],
        ["icon" => "fas fa-feather-alt",   "text" => "Burushaski Poetry (Khamosh)", "url" => "https://en.wikipedia.org/wiki/Burushaski"],
    ],
];

$experience = [
    [
        "date"    => "October 2023 – Present",
        "role"    => "Senior Web Developer",
        "company" => "SAP Communications (Pvt.) Ltd.",
        "url"     => "https://www.sapcommunications.com.pk/",
        "duties"  => ["WordPress Website Development &amp; Theme Customisation", "C-Panel &amp; Database Management", "Client Project Management &amp; Delivery"],
    ],
    [
        "date"    => "January 2017 – Present",
        "role"    => "Senior Web Developer",
        "company" => "Digi Cells International",
        "url"     => "https://digicellinternational.shinisa.com/",
        "duties"  => ["Full Stack Web Design &amp; Development", "Advanced SEO &amp; Performance Optimisation", "International clients across UK, UAE, and Qatar"],
    ],
    [
        "date"    => "August 2024 – Present",
        "role"    => "Business Development Manager",
        "company" => "SHINISA",
        "url"     => "https://shinisa.com",
        "duties"  => ["Strategic growth, partnerships, and client acquisition", "Overseeing technical delivery and team performance"],
    ],
    [
        "date"    => "February 2017 – Present",
        "role"    => "Co-Founder",
        "company" => "ADIL FOUNDATION",
        "url"     => null,
        "duties"  => ["Charitable &amp; community development initiatives", "Strategic leadership and operations"],
    ],
    [
        "date"    => "January 2019 – August 2022",
        "role"    => "IT Engineer",
        "company" => "Eastern Eye International",
        "url"     => null,
        "duties"  => ["Web Design &amp; Development", "SEO &amp; Performance Optimisation", "Weekly server backups &amp; database management"],
    ],
    [
        "date"    => "August 2017 – January 2019",
        "role"    => "Laravel Developer",
        "company" => "SBSSolutions LLC",
        "url"     => null,
        "duties"  => ["Building Laravel Blade forms &amp; MVC components", "Database connectivity &amp; integration", "Dynamic web page management"],
    ],
];

$education = [
    [
        "degree"  => "MPhil — Computer Science",
        "inst"    => "Quaid-i-Azam University, Islamabad",
        "inst_url"=> "https://qau.edu.pk",
        "period"  => "August 2024 – August 2026",
        "icon"    => "fas fa-graduation-cap",
        "courses" => ["Advanced Analysis of Algorithms","Advanced Operating Systems","Software Repository Mining","Computer Vision","Software Quality Assurance","Computational Modelling","Social Network Analysis","Information Retrieval Systems"],
    ],
    [
        "degree"  => "Master's — Computer Science",
        "inst"    => "Allama Iqbal Open University",
        "inst_url"=> "https://aiou.edu.pk",
        "period"  => "August 2020 – August 2024",
        "icon"    => "fas fa-university",
        "courses" => [],
    ],
    [
        "degree"  => "Bachelor's — Financial Mathematics",
        "inst"    => "Punjab Group of Colleges",
        "inst_url"=> null,
        "period"  => "March 2016 – January 2018",
        "icon"    => "fas fa-book",
        "courses" => ["Software Engineering","Database Management","C# Programming","C++ Programming","Assembly Languages"],
    ],
    [
        "degree"  => "FSc Pre-Engineering",
        "inst"    => "Karakoram International University, Gilgit (KIU)",
        "inst_url"=> "https://kiu.edu.pk",
        "period"  => "August 2013 – August 2015",
        "icon"    => "fas fa-school",
        "courses" => [],
    ],
];

$clients = [
    ["name" => "aloesun.com",               "url" => "https://aloesun.com/",               "img" => "https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_300,h_300/https://digicellinternational.shinisa.com/wp-content/uploads/2024/05/aloesun.png"],
    ["name" => "hiraysrealestate.com",       "url" => "https://hiraysrealestate.com",        "img" => "https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_300,h_300/https://digicellinternational.shinisa.com/wp-content/uploads/2025/04/hiraysrealestate.png"],
    ["name" => "totem-tribe.co.uk",          "url" => "https://www.totem-tribe.co.uk",       "img" => "https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_300,h_300/https://digicellinternational.shinisa.com/wp-content/uploads/2025/04/totem-tribe-.png"],
    ["name" => "rapido.com.qa",              "url" => "https://rapido.com.qa",               "img" => "https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_300,h_300/https://digicellinternational.shinisa.com/wp-content/uploads/2025/04/rapido.png"],
    ["name" => "osirisimmigration.co.uk",    "url" => "http://osirisimmigration.co.uk/",     "img" => "https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_300,h_300/https://digicellinternational.shinisa.com/wp-content/uploads/2025/04/osirisimmigration.png"],
    ["name" => "enkill.qa",                  "url" => "https://enkill.qa/",                  "img" => "https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_300,h_300/https://digicellinternational.shinisa.com/wp-content/uploads/2024/05/enkill-qa.png"],
    ["name" => "theplatinumpartnership.com", "url" => "https://theplatinumpartnership.com",  "img" => "https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_300,h_300/https://digicellinternational.shinisa.com/wp-content/uploads/2024/07/Platinumpatnership.png"],
    ["name" => "alcotraz.co.uk",             "url" => "https://www.alcotraz.co.uk/",         "img" => "https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_300,h_300/https://digicellinternational.shinisa.com/wp-content/uploads/2023/12/alcotraz.jpg"],
];

$videos = [
    "https://www.youtube.com/embed/geJ7XG-ZwBU",
    "https://www.youtube.com/embed/KxcRMZcAOE8",
    "https://www.youtube.com/embed/17Xx89AdyUI?si=vcaQBvgrq9i2pRGd",
];

$socials = [
    ["icon" => "fab fa-github",      "url" => $github,    "title" => "GitHub"],
    ["icon" => "fab fa-linkedin-in", "url" => $linkedin,  "title" => "LinkedIn"],
    ["icon" => "fab fa-facebook-f",  "url" => $facebook,  "title" => "Facebook"],
    ["icon" => "fab fa-instagram",   "url" => $instagram, "title" => "Instagram"],
    ["icon" => "fab fa-youtube",     "url" => $youtube,   "title" => "YouTube"],
    ["icon" => "fab fa-orcid",       "url" => $orcid,     "title" => "ORCID"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Official portfolio of <?php echo $name; ?> — <?php echo strip_tags($title); ?>. Healthcare Software Developer specialising in HIPAA-aware Medical Billing, RCM Automation, NLP Research, and Web Development.">
  <title><?php echo $name; ?> | Healthcare Software Developer &amp; CS Researcher</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --ink: #0d1117;
      --slate: #1c2431;
      --steel: #2d3748;
      --teal: #0e7490;
      --teal-light: #06b6d4;
      --gold: #d97706;
      --silver: #94a3b8;
      --mist: #f1f5f9;
      --white: #ffffff;
      --border: rgba(255,255,255,0.08);
      --card-bg: rgba(255,255,255,0.04);
    }
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      background: var(--ink);
      color: var(--white);
      font-family: 'DM Sans', sans-serif;
      font-weight: 300;
      line-height: 1.7;
      overflow-x: hidden;
    }
    body::before {
      content: '';
      position: fixed; inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.03'/%3E%3C/svg%3E");
      pointer-events: none; z-index: 0;
    }
    a { color: var(--teal-light); text-decoration: none; transition: color 0.2s; }
    a:hover { color: var(--white); }

    /* NAV */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      padding: 16px 40px;
      display: flex; align-items: center; justify-content: space-between;
      background: rgba(13,17,23,0.88);
      backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);
      border-bottom: 1px solid var(--border);
    }
    .nav-logo {
      font-family: 'Playfair Display', serif; font-size: 1.25rem;
      color: var(--white); text-decoration: none;
    }
    .nav-logo span { color: var(--teal-light); }
    .nav-links { display: flex; gap: 28px; list-style: none; }
    .nav-links a {
      color: var(--silver); font-size: 0.85rem; font-weight: 400;
      letter-spacing: 0.06em; text-transform: uppercase; text-decoration: none;
      transition: color 0.2s;
    }
    .nav-links a:hover { color: var(--teal-light); }
    .nav-cta {
      background: var(--teal) !important; color: var(--white) !important;
      padding: 8px 20px; border-radius: 4px; transition: background 0.2s !important;
    }
    .nav-cta:hover { background: var(--teal-light) !important; color: var(--ink) !important; }

    /* HERO */
    header {
      min-height: 100vh; display: flex; align-items: center;
      padding: 120px 40px 80px; position: relative; overflow: hidden;
    }
    .hero-bg {
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 80% 60% at 70% 40%, rgba(14,116,144,0.18) 0%, transparent 60%),
        radial-gradient(ellipse 50% 40% at 20% 80%, rgba(217,119,6,0.07) 0%, transparent 55%);
    }
    .hero-grid {
      position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
      background-size: 60px 60px;
    }
    .hero-inner {
      max-width: 1200px; margin: 0 auto; width: 100%;
      position: relative; z-index: 1;
      display: grid; grid-template-columns: 1fr auto;
      gap: 80px; align-items: center;
    }
    .hero-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(14,116,144,0.15); border: 1px solid rgba(14,116,144,0.35);
      color: var(--teal-light); padding: 6px 14px; border-radius: 20px;
      font-size: 0.75rem; font-weight: 500; letter-spacing: 0.08em;
      text-transform: uppercase; margin-bottom: 24px;
    }
    .hero-name {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.8rem, 6vw, 5rem); line-height: 1.05;
      font-weight: 900; color: var(--white); margin-bottom: 8px;
    }
    .hero-title { font-size: clamp(1rem, 2vw, 1.2rem); color: var(--teal-light); font-weight: 500; margin-bottom: 4px; }
    .hero-subtitle { font-size: 0.9rem; color: var(--silver); margin-bottom: 28px; }
    .hero-desc {
      font-size: 1rem; color: rgba(255,255,255,0.72);
      max-width: 580px; margin-bottom: 40px; line-height: 1.85;
    }
    .hero-desc a { border-bottom: 1px solid rgba(6,182,212,0.3); }
    .hero-desc a:hover { border-color: var(--teal-light); }
    .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 40px; }
    .btn-primary {
      background: var(--teal); color: var(--white); padding: 13px 30px;
      border-radius: 5px; text-decoration: none; font-weight: 500; font-size: 0.92rem;
      border: 2px solid var(--teal); transition: all 0.25s;
    }
    .btn-primary:hover { background: transparent; color: var(--teal-light); border-color: var(--teal-light); }
    .btn-outline {
      background: transparent; color: var(--white); padding: 13px 30px;
      border-radius: 5px; text-decoration: none; font-weight: 400; font-size: 0.92rem;
      border: 1px solid rgba(255,255,255,0.25); transition: all 0.25s;
    }
    .btn-outline:hover { border-color: var(--teal-light); color: var(--teal-light); }
    .hero-meta { display: flex; flex-wrap: wrap; gap: 20px; }
    .meta-item { display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--silver); }
    .meta-item i { color: var(--teal-light); font-size: 0.8rem; }
    .hero-photo-wrap { position: relative; flex-shrink: 0; }
    .hero-photo-wrap::before {
      content: ''; position: absolute; inset: -16px; border-radius: 50%;
      border: 1px solid rgba(14,116,144,0.3);
      animation: pulse-ring 3s ease-in-out infinite;
    }
    .hero-photo-wrap::after {
      content: ''; position: absolute; inset: -32px; border-radius: 50%;
      border: 1px solid rgba(14,116,144,0.12);
      animation: pulse-ring 3s ease-in-out infinite 0.8s;
    }
    @keyframes pulse-ring {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.03); opacity: 0.5; }
    }
    .hero-photo, .hero-photo-placeholder {
      width: 220px; height: 220px; border-radius: 50%;
      border: 4px solid rgba(14,116,144,0.5);
      position: relative; z-index: 1; display: block;
    }
    .hero-photo { object-fit: cover; }
    .hero-photo-placeholder {
      background: linear-gradient(135deg, var(--slate), var(--steel));
      display: flex; align-items: center; justify-content: center;
      font-family: 'Playfair Display', serif; font-size: 3rem; color: var(--teal-light);
    }

    /* EXPERTISE STRIP */
    .expertise-strip {
      padding: 24px 40px; background: var(--slate);
      border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
      position: relative; z-index: 1;
    }
    .expertise-scroll { display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; }
    .expertise-pill {
      background: rgba(14,116,144,0.12); border: 1px solid rgba(14,116,144,0.25);
      color: var(--teal-light); padding: 6px 16px; border-radius: 20px;
      font-size: 0.8rem; font-weight: 500; letter-spacing: 0.03em; white-space: nowrap;
    }
    .expertise-pill a { color: inherit; text-decoration: none; }
    .expertise-pill a:hover { text-decoration: underline; }

    /* SECTIONS */
    .section { padding: 96px 40px; position: relative; z-index: 1; }
    .section-alt { background: rgba(255,255,255,0.02); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); }
    .container { max-width: 1200px; margin: 0 auto; }
    .section-label { font-size: 0.73rem; letter-spacing: 0.15em; text-transform: uppercase; color: var(--teal-light); font-weight: 500; margin-bottom: 10px; }
    .section-heading { font-family: 'Playfair Display', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem); font-weight: 700; color: var(--white); margin-bottom: 14px; line-height: 1.2; }
    .section-sub { color: var(--silver); font-size: 0.95rem; max-width: 560px; margin-bottom: 52px; }
    .divider { height: 1px; background: linear-gradient(90deg, transparent, rgba(14,116,144,0.35), transparent); position: relative; z-index: 1; }

    /* ABOUT */
    .about-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: 56px; align-items: start; }
    .about-text p { color: rgba(255,255,255,0.75); margin-bottom: 16px; font-size: 1rem; }
    .about-text a { border-bottom: 1px solid rgba(6,182,212,0.3); }
    .about-text a:hover { border-color: var(--teal-light); }
    .about-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 12px; padding: 28px; }
    .about-card h4 { font-size: 0.72rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--teal-light); margin-bottom: 22px; font-weight: 500; }
    .info-row { display: flex; gap: 10px; margin-bottom: 14px; align-items: flex-start; }
    .info-key { color: var(--silver); font-size: 0.83rem; min-width: 105px; font-weight: 500; }
    .info-val { color: rgba(255,255,255,0.85); font-size: 0.88rem; }

    /* RESEARCH */
    .research-card {
      background: var(--card-bg); border: 1px solid var(--border);
      border-left: 4px solid var(--teal); border-radius: 12px;
      padding: 34px 38px; position: relative; overflow: hidden;
      transition: border-left-color 0.3s;
    }
    .research-card:hover { border-left-color: var(--teal-light); }
    .research-card::before {
      content: '"'; font-family: 'Playfair Display', serif; font-size: 9rem;
      color: rgba(14,116,144,0.07); position: absolute; top: -15px; right: 28px;
      line-height: 1; pointer-events: none;
    }
    .research-tag {
      display: inline-block; background: rgba(217,119,6,0.15);
      border: 1px solid rgba(217,119,6,0.3); color: #fbbf24;
      padding: 4px 12px; border-radius: 4px; font-size: 0.73rem;
      font-weight: 500; letter-spacing: 0.06em; text-transform: uppercase; margin-bottom: 14px;
    }
    .research-card h3 { font-family: 'Playfair Display', serif; font-size: 1.35rem; color: var(--white); margin-bottom: 14px; line-height: 1.45; }
    .research-card p { color: rgba(255,255,255,0.7); font-size: 0.93rem; margin-bottom: 12px; }
    .research-card a { color: var(--teal-light); }
    .research-ack {
      background: rgba(255,255,255,0.04); border: 1px solid var(--border);
      border-radius: 8px; padding: 16px 20px; margin-top: 18px;
      font-size: 0.86rem; color: var(--silver);
    }
    .research-ack strong { color: var(--white); font-weight: 500; }
    .link-btn {
      display: inline-flex; align-items: center; gap: 8px;
      background: var(--teal); color: var(--white); padding: 10px 22px;
      border-radius: 5px; text-decoration: none; font-size: 0.88rem;
      font-weight: 500; margin-top: 18px; transition: all 0.2s; border: none;
    }
    .link-btn:hover { background: var(--teal-light); color: var(--ink); }

    /* TIMELINE */
    .timeline { position: relative; }
    .timeline::before {
      content: ''; position: absolute; left: 0; top: 0; bottom: 0;
      width: 2px; background: linear-gradient(to bottom, var(--teal), transparent);
    }
    .tl-item { padding-left: 38px; position: relative; margin-bottom: 36px; }
    .tl-item::before {
      content: ''; position: absolute; left: -5px; top: 6px;
      width: 12px; height: 12px; background: var(--teal);
      border-radius: 50%; border: 2px solid var(--ink);
    }
    .tl-date { font-size: 0.78rem; color: var(--teal-light); font-weight: 500; letter-spacing: 0.06em; text-transform: uppercase; margin-bottom: 3px; }
    .tl-role { font-weight: 600; color: var(--white); font-size: 0.98rem; margin-bottom: 2px; }
    .tl-company { color: var(--silver); font-size: 0.88rem; margin-bottom: 10px; }
    .tl-company a { color: var(--teal-light); font-size: 0.82rem; }
    .tl-duties { list-style: none; }
    .tl-duties li { color: rgba(255,255,255,0.62); font-size: 0.88rem; padding-left: 15px; position: relative; margin-bottom: 4px; }
    .tl-duties li::before { content: '▹'; position: absolute; left: 0; color: var(--teal-light); }
    .tl-duties a { color: var(--teal-light); }

    /* SKILLS */
    .skills-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; }
    .skill-card {
      background: var(--card-bg); border: 1px solid var(--border);
      border-radius: 12px; padding: 26px;
      transition: border-color 0.3s, transform 0.3s;
    }
    .skill-card:hover { border-color: rgba(14,116,144,0.5); transform: translateY(-4px); }
    .skill-card h3 { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--teal-light); margin-bottom: 18px; font-weight: 500; }
    .skill-item { display: flex; align-items: center; gap: 10px; margin-bottom: 11px; color: rgba(255,255,255,0.78); font-size: 0.88rem; }
    .skill-item i { color: var(--teal-light); font-size: 0.82rem; width: 15px; }
    .skill-item a { color: inherit; border-bottom: 1px solid rgba(255,255,255,0.12); }
    .skill-item a:hover { color: var(--teal-light); border-color: var(--teal-light); }

    /* EDUCATION */
    .edu-item {
      background: var(--card-bg); border: 1px solid var(--border);
      border-radius: 12px; padding: 26px 30px; margin-bottom: 18px;
      display: grid; grid-template-columns: auto 1fr; gap: 22px; align-items: start;
      transition: border-color 0.3s;
    }
    .edu-item:hover { border-color: rgba(14,116,144,0.4); }
    .edu-icon {
      width: 46px; height: 46px; background: rgba(14,116,144,0.15);
      border: 1px solid rgba(14,116,144,0.3); border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      color: var(--teal-light); font-size: 1.1rem; flex-shrink: 0;
    }
    .edu-degree { font-weight: 600; color: var(--white); margin-bottom: 2px; font-size: 0.98rem; }
    .edu-inst { color: var(--teal-light); font-size: 0.88rem; margin-bottom: 5px; font-weight: 500; }
    .edu-period { font-size: 0.8rem; color: var(--silver); margin-bottom: 12px; }
    .tags { display: flex; flex-wrap: wrap; gap: 7px; }
    .tag { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: rgba(255,255,255,0.6); padding: 3px 10px; border-radius: 4px; font-size: 0.76rem; }

    /* CLIENTS */
    .clients-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 18px; }
    .client-card {
      background: var(--card-bg); border: 1px solid var(--border);
      border-radius: 12px; padding: 22px 18px; text-align: center;
      transition: border-color 0.3s, transform 0.3s;
    }
    .client-card:hover { border-color: rgba(14,116,144,0.5); transform: translateY(-4px); }
    .client-card a { text-decoration: none; color: inherit; display: block; }
    .client-logo { width: 100px; height: 100px; object-fit: contain; margin: 0 auto 12px; display: block; filter: brightness(0.9); transition: filter 0.2s; }
    .client-card:hover .client-logo { filter: brightness(1.1); }
    .client-name { font-size: 0.82rem; color: var(--teal-light); font-weight: 500; }

    /* MEDIA */
    .media-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 22px; }
    .video-wrap { position: relative; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; border: 1px solid var(--border); }
    .video-wrap iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; }

    /* CONTACT */
    .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; }
    .contact-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 12px; padding: 34px; }
    .contact-card h3 { font-family: 'Playfair Display', serif; font-size: 1.4rem; color: var(--white); margin-bottom: 12px; }
    .contact-card p { color: var(--silver); font-size: 0.92rem; margin-bottom: 24px; line-height: 1.75; }
    .contact-row { display: flex; align-items: center; gap: 12px; color: rgba(255,255,255,0.8); font-size: 0.9rem; margin-bottom: 12px; }
    .contact-row i { color: var(--teal-light); width: 18px; font-size: 0.85rem; }
    .social-links { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 26px; }
    .social-link {
      width: 38px; height: 38px; background: rgba(14,116,144,0.15);
      border: 1px solid rgba(14,116,144,0.3); border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      color: var(--teal-light); text-decoration: none; font-size: 0.95rem;
      transition: all 0.2s;
    }
    .social-link:hover { background: var(--teal); border-color: var(--teal); color: var(--white); transform: translateY(-2px); }
    .form-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 12px; overflow: hidden; }
    .form-card iframe { width: 100%; height: 680px; border: none; display: block; }

    /* FOOTER */
    footer {
      background: var(--slate); border-top: 1px solid var(--border);
      padding: 34px 40px; text-align: center; position: relative; z-index: 1;
    }
    .footer-brand { font-family: 'Playfair Display', serif; font-size: 1rem; color: var(--white); margin-bottom: 7px; }
    footer p { color: var(--silver); font-size: 0.85rem; margin-bottom: 5px; }

    /* FADE IN */
    .fade-in { opacity: 0; transform: translateY(22px); transition: opacity 0.65s ease, transform 0.65s ease; }
    .fade-in.visible { opacity: 1; transform: none; }

    /* RESPONSIVE */
    @media (max-width: 900px) {
      nav { padding: 14px 22px; }
      .nav-links { gap: 16px; }
      header { padding: 100px 22px 60px; }
      .hero-inner { grid-template-columns: 1fr; text-align: center; gap: 36px; }
      .hero-actions, .hero-meta { justify-content: center; }
      .hero-photo-wrap { display: flex; justify-content: center; order: -1; }
      .about-grid, .contact-grid { grid-template-columns: 1fr; }
      .section { padding: 68px 22px; }
      .expertise-strip { padding: 18px 22px; }
    }
    @media (max-width: 580px) {
      .nav-links { display: none; }
      .hero-name { font-size: 2.3rem; }
      .media-grid, .clients-grid { grid-template-columns: 1fr; }
      footer { padding: 26px 22px; }
    }
  </style>
</head>
<body>

  <!-- NAV -->
  <nav>
    <a href="#" class="nav-logo"><?php echo $name; ?> <span>.</span></a>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#research">Research</a></li>
      <li><a href="#experience">Experience</a></li>
      <li><a href="#clients">Clients</a></li>
      <li><a href="#media">Media</a></li>
      <li><a href="#contact" class="nav-cta">Contact</a></li>
    </ul>
  </nav>

  <!-- HERO -->
  <header>
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-inner">
      <div>
        <div class="hero-badge">
          <i class="fas fa-circle" style="color:#22c55e;font-size:0.45rem;"></i>
          Available for Collaborations
        </div>
        <h1 class="hero-name"><?php echo $name; ?></h1>
        <div class="hero-title"><?php echo $title; ?></div>
        <div class="hero-subtitle"><?php echo $subtitle; ?></div>
        <p class="hero-desc"><?php echo $bio; ?></p>
        <div class="hero-actions">
          <a href="projects.php" class="btn-primary">View Projects</a>
          <a href="#contact" class="btn-outline">Get In Touch</a>
        </div>
        <div class="hero-meta">
          <div class="meta-item"><i class="fas fa-map-marker-alt"></i><?php echo $location; ?></div>
          <div class="meta-item"><i class="fas fa-phone"></i><?php echo $phone1; ?></div>
          <div class="meta-item"><i class="fas fa-envelope"></i><?php echo $email; ?></div>
        </div>
      </div>
      <div class="hero-photo-wrap">
        <img src="photo-SARDAR-ALI.png" class="hero-photo" alt="<?php echo $name; ?>"
             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
        <div class="hero-photo-placeholder" style="display:none;">SA</div>
      </div>
    </div>
  </header>

  <!-- EXPERTISE STRIP -->
  <div class="expertise-strip">
    <div class="expertise-scroll">
      <?php foreach ($expertise as $pill): ?>
        <span class="expertise-pill">
          <?php if ($pill['url']): ?>
            <a href="<?php echo $pill['url']; ?>" target="_blank" rel="noopener"><?php echo $pill['label']; ?></a>
          <?php else: echo $pill['label']; endif; ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="divider"></div>

  <!-- ABOUT -->
  <section class="section" id="about">
    <div class="container">
      <div class="section-label">Who I Am</div>
      <h2 class="section-heading">About Me</h2>
      <div class="about-grid fade-in">
        <div class="about-text">
          <p><?php echo $bio; ?></p>
          <p>As a web developer I build high-performance, search-optimised applications for
            <a href="https://www.shopify.com" target="_blank" rel="noopener">Shopify</a>,
            <a href="https://wordpress.org" target="_blank" rel="noopener">WordPress</a>,
            and custom <a href="https://laravel.com" target="_blank" rel="noopener">Laravel</a> stacks —
            with a proven international client record across the UK, UAE, and Qatar.</p>
        </div>
        <div class="about-card">
          <h4>Personal Details</h4>
          <div class="info-row"><span class="info-key">Full Name</span><span class="info-val"><?php echo $name_full; ?></span></div>
          <div class="info-row"><span class="info-key">Profession</span><span class="info-val">Healthcare Software Developer</span></div>
          <div class="info-row"><span class="info-key">Nationality</span><span class="info-val">Pakistani</span></div>
          <div class="info-row"><span class="info-key">Mother Tongue</span><span class="info-val"><a href="https://en.wikipedia.org/wiki/Burushaski" target="_blank" rel="noopener">Burushaski</a></span></div>
          <div class="info-row"><span class="info-key">Languages</span><span class="info-val">English (Proficient), Urdu (Fluent)</span></div>
          <div class="info-row"><span class="info-key">ORCID</span><span class="info-val"><a href="<?php echo $orcid; ?>" target="_blank" rel="noopener"><?php echo $orcid_id; ?></a></span></div>
          <div class="info-row"><span class="info-key">Portfolio</span><span class="info-val"><a href="<?php echo $github_page; ?>" target="_blank" rel="noopener">sardaralikhamosh.github.io</a></span></div>
        </div>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- RESEARCH -->
  <section class="section section-alt" id="research">
    <div class="container">
      <div class="section-label">Publications</div>
      <h2 class="section-heading">Research &amp; Publications</h2>
      <p class="section-sub">Contributing to global NLP benchmarks and advancing language technology for low-resource languages.</p>
      <div class="research-card fade-in">
        <div class="research-tag">arXiv Preprint · 2025</div>
        <h3>Global PIQA: Evaluating Physical Commonsense Reasoning Across 100+ Languages and Cultures (v0.1)</h3>
        <p>My first research paper is publicly available on
          <a href="https://arxiv.org/a/ali_s_5.html" target="_blank" rel="noopener">arXiv.org</a>.
          I contributed to this
          <a href="https://aclanthology.org/events/mrl-2024/" target="_blank" rel="noopener">Multilingual Representation Learning (MRL) Workshop</a>
          initiative by creating and submitting the
          <a href="https://en.wikipedia.org/wiki/Burushaski" target="_blank" rel="noopener">Burushaski</a>
          benchmark dataset — representing one of the most unique low-resource languages of Gilgit-Baltistan, Pakistan.
        </p>
        <p>A participatory <a href="https://en.wikipedia.org/wiki/Commonsense_reasoning" target="_blank" rel="noopener">commonsense reasoning</a>
          benchmark covering 100+ languages — 116 language varieties across 5 continents, 14 language families, and 23 writing systems.
          A global collaboration of <strong style="color:var(--white);">335 researchers from 65 countries</strong>.
          State-of-the-art <a href="https://en.wikipedia.org/wiki/Large_language_model" target="_blank" rel="noopener">LLMs</a>
          show up to a <strong style="color:#fbbf24;">37% accuracy gap</strong> in low-resource languages.
        </p>
        <div class="research-ack">
          <strong>Acknowledgments:</strong> Sincere thanks to Adv. Wazir Shafi Lala, Quwáț K. Sunny Lala, and Jamsheed Aly Figaar for their invaluable support during the Burushaski dataset scripting and development process. Special thanks to lead authors Tyler A. Chang (University of California) and Catherine Arnett (EleutherAI).
        </div>
        <a href="https://arxiv.org/a/ali_s_5.html" class="link-btn" target="_blank" rel="noopener">
          <i class="fas fa-external-link-alt"></i> Read Preprint on arXiv
        </a>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- EXPERIENCE -->
  <section class="section" id="experience">
    <div class="container">
      <div class="section-label">Career</div>
      <h2 class="section-heading">Work Experience</h2>
      <p class="section-sub">Over 8 years of professional software development across healthcare IT, web development, and SEO.</p>
      <div class="timeline fade-in">
        <?php foreach ($experience as $job): ?>
        <div class="tl-item">
          <div class="tl-date"><?php echo $job['date']; ?></div>
          <div class="tl-role"><?php echo $job['role']; ?></div>
          <div class="tl-company">
            <?php echo $job['company']; ?>
            <?php if ($job['url']): ?>
              · <a href="<?php echo $job['url']; ?>" target="_blank" rel="noopener"><?php echo parse_url($job['url'], PHP_URL_HOST); ?></a>
            <?php endif; ?>
          </div>
          <ul class="tl-duties">
            <?php foreach ($job['duties'] as $d): ?>
              <li><?php echo $d; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- SKILLS -->
  <section class="section section-alt" id="skills">
    <div class="container">
      <div class="section-label">Capabilities</div>
      <h2 class="section-heading">Skills &amp; Expertise</h2>
      <div class="skills-grid fade-in">
        <?php foreach ($skills as $category => $items): ?>
        <div class="skill-card">
          <h3><?php echo $category; ?></h3>
          <?php foreach ($items as $s): ?>
          <div class="skill-item">
            <i class="<?php echo $s['icon']; ?>"></i>
            <?php if ($s['url']): ?>
              <a href="<?php echo $s['url']; ?>" target="_blank" rel="noopener"><?php echo $s['text']; ?></a>
            <?php else: echo $s['text']; endif; ?>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- EDUCATION -->
  <section class="section" id="education">
    <div class="container">
      <div class="section-label">Academic Background</div>
      <h2 class="section-heading">Education</h2>
      <?php foreach ($education as $edu): ?>
      <div class="edu-item fade-in">
        <div class="edu-icon"><i class="<?php echo $edu['icon']; ?>"></i></div>
        <div>
          <div class="edu-degree"><?php echo $edu['degree']; ?></div>
          <div class="edu-inst">
            <?php if ($edu['inst_url']): ?>
              <a href="<?php echo $edu['inst_url']; ?>" target="_blank" rel="noopener" style="color:var(--teal-light);"><?php echo $edu['inst']; ?></a>
            <?php else: echo $edu['inst']; endif; ?>
          </div>
          <div class="edu-period"><?php echo $edu['period']; ?></div>
          <?php if (!empty($edu['courses'])): ?>
          <div class="tags">
            <?php foreach ($edu['courses'] as $c): ?>
              <span class="tag"><?php echo $c; ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <div class="divider"></div>

  <!-- CLIENTS -->
  <section class="section section-alt" id="clients">
    <div class="container">
      <div class="section-label">Portfolio</div>
      <h2 class="section-heading">Clients</h2>
      <p class="section-sub">International clients across healthcare, real estate, hospitality, and professional services.</p>
      <div class="clients-grid fade-in">
        <?php foreach ($clients as $c): ?>
        <div class="client-card">
          <a href="<?php echo $c['url']; ?>" target="_blank" rel="noopener">
            <img src="<?php echo $c['img']; ?>" alt="<?php echo $c['name']; ?>" class="client-logo">
            <div class="client-name"><?php echo $c['name']; ?></div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- MEDIA -->
  <section class="section" id="media">
    <div class="container">
      <div class="section-label">Media</div>
      <h2 class="section-heading">Media Production</h2>
      <p class="section-sub">Selected video productions and featured content.</p>
      <div class="media-grid fade-in">
        <?php foreach ($videos as $v): ?>
        <div class="video-wrap">
          <iframe src="<?php echo $v; ?>" title="Media Production" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- CONTACT -->
  <section class="section section-alt" id="contact">
    <div class="container">
      <div class="section-label">Connect</div>
      <h2 class="section-heading">Get In Touch</h2>
      <div class="contact-grid">
        <div class="contact-card fade-in">
          <h3>Contact Information</h3>
          <p>Open to collaborations in healthcare software development, RCM automation, NLP research, and web development projects.</p>
          <div class="contact-row"><i class="fas fa-envelope"></i><?php echo $email; ?></div>
          <div class="contact-row"><i class="fas fa-envelope"></i><?php echo $email2; ?></div>
          <div class="contact-row"><i class="fas fa-phone"></i><?php echo $phone1; ?></div>
          <div class="contact-row"><i class="fas fa-phone"></i><?php echo $phone2; ?></div>
          <div class="contact-row"><i class="fas fa-map-marker-alt"></i><?php echo $location; ?></div>
          <div class="social-links">
            <?php foreach ($socials as $s): ?>
            <a href="<?php echo $s['url']; ?>" class="social-link" target="_blank" rel="noopener" title="<?php echo $s['title']; ?>">
              <i class="<?php echo $s['icon']; ?>"></i>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="form-card fade-in">
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc4hWpl6NXWugwf7LduFdLozffY7oJAUlMvtU22wlru9PtGkA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-brand"><?php echo $name_full; ?></div>
    <p>Healthcare Software Developer · CS Researcher · Web Developer</p>
    <p>HIPAA-Aware Systems · Medical Billing &amp; RCM · NLP &amp; Low-Resource Language Technology</p>
    <p style="margin-top:10px;font-size:0.78rem;color:rgba(148,163,184,0.5);">
      &copy; <?php echo date("Y"); ?> <?php echo $name; ?> — All Rights Reserved.
    </p>
  </footer>

  <script>
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#') { window.scrollTo({top:0,behavior:'smooth'}); e.preventDefault(); return; }
        const t = document.querySelector(href);
        if (t) { e.preventDefault(); t.scrollIntoView({behavior:'smooth'}); }
      });
    });
    const obs = new IntersectionObserver(entries => {
      entries.forEach(en => { if (en.isIntersecting) { en.target.classList.add('visible'); obs.unobserve(en.target); } });
    }, {threshold: 0.08});
    document.querySelectorAll('.fade-in').forEach(el => obs.observe(el));
  </script>
</body>
</html>
