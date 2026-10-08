<?php
/**
 * RKDF University — Master Course & Academic Programs Directory
 * Lists all industry-aligned undergraduate, postgraduate, diploma, and doctoral degree tracks.
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'All Courses & Academic Programs Directory (UG, PG, Diploma) — ' . SITE_NAME;
$page_meta_desc = 'Explore all degree and diploma programs at RKDF University Ranchi. Detailed course fees, eligibility, syllabus breakdown, scholarships, and admission guidelines.';

$courses_json = <<<'JSON'
[
  {
    "name": "B.A. (Hons) in Bengali",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-bengali.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. (Hons) in Economics",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-economics.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. (Hons) in Education",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-education.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. (Hons) in English",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-english.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. (Hons) in Geography",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-geography.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. (Hons) in Hindi",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-hindi.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. (Hons) in History",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-history.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. (Hons) in Political Science",
    "stream": "science",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-political-science.php",
    "icon": "flask-conical"
  },
  {
    "name": "B.A. (Hons) in Sanskrit",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-sanskrit.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. (Hons) in Sociology",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-hons-in-sociology.php",
    "icon": "book-open"
  },
  {
    "name": "B.A. / B.Sc. in Fashion Design",
    "stream": "design",
    "level": "ug",
    "school": "Department of Fashion & Interior Design",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-fashion-design.php",
    "icon": "palette"
  },
  {
    "name": "B.A. LL.B (5-Year Integrated Honors)",
    "stream": "law",
    "level": "ug",
    "school": "School of Law & Legal Studies",
    "duration": "5 Years (10 Semesters)",
    "href": "courses/llb-ba.php",
    "icon": "scale"
  },
  {
    "name": "B.Com (Corporate Specialization)",
    "stream": "management",
    "level": "ug",
    "school": "Faculty of Management & Commerce",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-com/b-com-corporate.php",
    "icon": "coins"
  },
  {
    "name": "B.Sc. (Hons) in Biochemistry",
    "stream": "science",
    "level": "ug",
    "school": "School of Life Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-biochemistry-in-ranchi-admission-2026-rkdf-university.php",
    "icon": "dna"
  },
  {
    "name": "B.Sc. (Hons) in Biotechnology",
    "stream": "engineering",
    "level": "ug",
    "school": "School of Life Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-hons-in-biotechnology.php",
    "icon": "cpu"
  },
  {
    "name": "B.Sc. (Hons) in Botany",
    "stream": "science",
    "level": "ug",
    "school": "School of Life Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-in-ranchi-fees-admission-2026-rkdf-university-3.php",
    "icon": "flask-conical"
  },
  {
    "name": "B.Sc. (Hons) in Chemistry",
    "stream": "science",
    "level": "ug",
    "school": "School of Basic & Applied Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-in-ranchi-fees-admission-2026-rkdf-university.php",
    "icon": "flask-round"
  },
  {
    "name": "B.Sc. (Hons) in Computer Science",
    "stream": "it",
    "level": "ug",
    "school": "Faculty of Information Technology",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-hons-in-computer-science.php",
    "icon": "laptop"
  },
  {
    "name": "B.Sc. (Hons) in Mathematics",
    "stream": "science",
    "level": "ug",
    "school": "School of Basic & Applied Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-in-ranchi-fees-admission-2026-rkdf-university-2.php",
    "icon": "calculator"
  },
  {
    "name": "B.Sc. (Hons) in Microbiology",
    "stream": "science",
    "level": "ug",
    "school": "School of Life Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-hons-in-microbiology.php",
    "icon": "dna"
  },
  {
    "name": "B.Sc. (Hons) in Physics",
    "stream": "science",
    "level": "ug",
    "school": "School of Basic & Applied Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-hons.php",
    "icon": "atom"
  },
  {
    "name": "B.Sc. (Hons) in Zoology & Animal Science",
    "stream": "science",
    "level": "ug",
    "school": "School of Life Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-hons-in-zoology.php",
    "icon": "flask-conical"
  },
  {
    "name": "B.Sc. in Information Technology (B.Sc. IT)",
    "stream": "engineering",
    "level": "ug",
    "school": "Faculty of Information Technology",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/bsc-information-technology-rkdf-university-ranchi.php",
    "icon": "cpu"
  },
  {
    "name": "B.Sc. in Interior Design",
    "stream": "design",
    "level": "ug",
    "school": "Department of Fashion & Interior Design",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/b-sc-interior-design-in-ranchi-admission-2026-rkdf-university.php",
    "icon": "layout"
  },
  {
    "name": "B.Sc. in Life Sciences (General)",
    "stream": "science",
    "level": "ug",
    "school": "School of Life Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc-in-ranchi-fees-admission-2026-rkdf-university-4.php",
    "icon": "flask-conical"
  },
  {
    "name": "B.Sc. in Multimedia & Animation",
    "stream": "it",
    "level": "ug",
    "school": "Faculty of Information Technology",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/b-sc-multimedia.php",
    "icon": "video"
  },
  {
    "name": "B.Sc. Program Overview",
    "stream": "science",
    "level": "ug",
    "school": "School of Basic & Applied Sciences",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-sc/b-sc.php",
    "icon": "flask-conical"
  },
  {
    "name": "B.Tech in Civil Engineering",
    "stream": "engineering",
    "level": "ug",
    "school": "Faculty of Engineering & Technology",
    "duration": "4 Years (8 Semesters)",
    "href": "courses/b-tech-civil-engineering.php",
    "icon": "building-2"
  },
  {
    "name": "B.Tech in Computer Science & Engineering (CSE)",
    "stream": "engineering",
    "level": "ug",
    "school": "Faculty of Engineering & Technology",
    "duration": "4 Years (8 Semesters)",
    "href": "courses/b-tech-computer-science-engineering.php",
    "icon": "cpu"
  },
  {
    "name": "B.Tech in Electrical & Electronics Engineering (EEE)",
    "stream": "engineering",
    "level": "ug",
    "school": "Faculty of Engineering & Technology",
    "duration": "4 Years (8 Semesters)",
    "href": "courses/b-tech-electrical-electronics-engineering.php",
    "icon": "zap"
  },
  {
    "name": "B.Tech in Mechanical Engineering",
    "stream": "engineering",
    "level": "ug",
    "school": "Faculty of Engineering & Technology",
    "duration": "4 Years (8 Semesters)",
    "href": "courses/b-tech-mechanical-engineering.php",
    "icon": "cog"
  },
  {
    "name": "B.Tech in Mining Engineering",
    "stream": "engineering",
    "level": "ug",
    "school": "Faculty of Engineering & Technology",
    "duration": "4 Years (8 Semesters)",
    "href": "courses/b-tech-mining-engineering.php",
    "icon": "pickaxe"
  },
  {
    "name": "BA in Journalism & Mass Communication (BJMC)",
    "stream": "media",
    "level": "ug",
    "school": "School of Journalism & Mass Communication",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/ba-in-journalism-mass-communication.php",
    "icon": "radio"
  },
  {
    "name": "Bachelor of Arts (B.A. General)",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/ba-bachelor-of-arts.php",
    "icon": "book-open"
  },
  {
    "name": "Bachelor of Business Administration (BBA)",
    "stream": "management",
    "level": "ug",
    "school": "Faculty of Management & Commerce",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bba.php",
    "icon": "briefcase"
  },
  {
    "name": "Bachelor of Commerce (B.Com General)",
    "stream": "management",
    "level": "ug",
    "school": "Faculty of Management & Commerce",
    "duration": "3 / 4 Years (NEP)",
    "href": "courses/under-graduate-programs/b-com/b-com.php",
    "icon": "coins"
  },
  {
    "name": "Bachelor of Computer Application (BCA)",
    "stream": "it",
    "level": "ug",
    "school": "Department of Information Technology",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bachelor-of-computer-application.php",
    "icon": "laptop"
  },
  {
    "name": "Bachelor of Laws (LL.B 3-Year)",
    "stream": "law",
    "level": "ug",
    "school": "School of Law & Legal Studies",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bachelor-of-laws-llb.php",
    "icon": "scale"
  },
  {
    "name": "Bachelor of Library & Information Science (B.Lib.I.Sc.)",
    "stream": "science",
    "level": "ug",
    "school": "School of Library & Information Science",
    "duration": "1 Year (2 Semesters)",
    "href": "courses/bachelor-of-library-science-b-lib.php",
    "icon": "library"
  },
  {
    "name": "Bachelor of Management Studies (BMS)",
    "stream": "management",
    "level": "ug",
    "school": "Faculty of Management & Commerce",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bachelor-of-management-studies-bms.php",
    "icon": "briefcase"
  },
  {
    "name": "Bachelor of Mass Communication & Video Production",
    "stream": "media",
    "level": "ug",
    "school": "School of Journalism & Mass Communication",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bachelor-of-mass-communication-and-video-production.php",
    "icon": "radio"
  },
  {
    "name": "Bachelor of Pharmacy (B.Pharm)",
    "stream": "pharmacy",
    "level": "ug",
    "school": "School of Pharmaceutical Sciences",
    "duration": "4 Years (8 Semesters)",
    "href": "courses/bachelor-of-pharmacy-b-pharma.php",
    "icon": "pill"
  },
  {
    "name": "Bachelor of Social Work (BSW)",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bachelor-of-social-work-b-s-w.php",
    "icon": "heart"
  },
  {
    "name": "BBA (Corporate Specialization)",
    "stream": "management",
    "level": "ug",
    "school": "Faculty of Management & Commerce",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bba-in-corporate.php",
    "icon": "briefcase"
  },
  {
    "name": "BBA in Hotel Management",
    "stream": "management",
    "level": "ug",
    "school": "Faculty of Management & Commerce",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bba-hotel-management.php",
    "icon": "hotel"
  },
  {
    "name": "BBA LL.B (5-Year Integrated Honors)",
    "stream": "management",
    "level": "ug",
    "school": "School of Law & Legal Studies",
    "duration": "5 Years (10 Semesters)",
    "href": "courses/bba-llb.php",
    "icon": "scale"
  },
  {
    "name": "BCA (Corporate Specialization)",
    "stream": "it",
    "level": "ug",
    "school": "Department of Information Technology",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/bca-corporate.php",
    "icon": "briefcase"
  },
  {
    "name": "Diploma in Civil Engineering",
    "stream": "engineering",
    "level": "diploma",
    "school": "Faculty of Engineering & Technology",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/diploma-in-ce-civil-engineering.php",
    "icon": "building"
  },
  {
    "name": "Diploma in Computer Application (DCA)",
    "stream": "it",
    "level": "diploma",
    "school": "Faculty of Information Technology",
    "duration": "1 Year (2 Semesters)",
    "href": "courses/diploma-programs/diploma-in-computer-application.php",
    "icon": "file-code"
  },
  {
    "name": "Diploma in Computer Science & Engineering (Polytechnic)",
    "stream": "engineering",
    "level": "diploma",
    "school": "Faculty of Engineering & Technology",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/diploma-in-cse-computer-science-engineering.php",
    "icon": "laptop"
  },
  {
    "name": "Diploma in Electrical & Electronics Engineering",
    "stream": "engineering",
    "level": "diploma",
    "school": "Faculty of Engineering & Technology",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/diploma-in-eee-electrical-electronics-engineering.php",
    "icon": "zap"
  },
  {
    "name": "Diploma in Mechanical Engineering",
    "stream": "engineering",
    "level": "diploma",
    "school": "Faculty of Engineering & Technology",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/diploma-in-me-mechanical-engineering.php",
    "icon": "cog"
  },
  {
    "name": "Diploma in Mining Engineering (Polytechnic)",
    "stream": "engineering",
    "level": "diploma",
    "school": "Faculty of Engineering & Technology",
    "duration": "3 Years (6 Semesters)",
    "href": "courses/diploma-in-mining.php",
    "icon": "pickaxe"
  },
  {
    "name": "Diploma in Pharmacy (D.Pharm)",
    "stream": "pharmacy",
    "level": "diploma",
    "school": "School of Pharmaceutical Sciences",
    "duration": "2 Years (Yearly System)",
    "href": "courses/diploma-in-pharmacy-d-pharma.php",
    "icon": "pill"
  },
  {
    "name": "M.A. / M.Sc. in Fashion Design",
    "stream": "design",
    "level": "pg",
    "school": "Department of Fashion & Interior Design",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/ma-fashion-design.php",
    "icon": "palette"
  },
  {
    "name": "M.A. in Bengali",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-bengali.php",
    "icon": "book-open"
  },
  {
    "name": "M.A. in Economics",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-economics.php",
    "icon": "book-open"
  },
  {
    "name": "M.A. in Education",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-education.php",
    "icon": "book-open"
  },
  {
    "name": "M.A. in English Literature",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-english.php",
    "icon": "book-open"
  },
  {
    "name": "M.A. in Geography",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-geography.php",
    "icon": "book-open"
  },
  {
    "name": "M.A. in Hindi Literature",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-hindi.php",
    "icon": "book-open"
  },
  {
    "name": "M.A. in History",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-history.php",
    "icon": "book-open"
  },
  {
    "name": "M.A. in Political Science",
    "stream": "science",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-political-science.php",
    "icon": "flask-conical"
  },
  {
    "name": "M.A. in Sanskrit",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-in-sanskrit.php",
    "icon": "book-open"
  },
  {
    "name": "M.A. in Sociology",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-hons-in-sociology.php",
    "icon": "book-open"
  },
  {
    "name": "M.Sc. in Applied Mathematics",
    "stream": "science",
    "level": "pg",
    "school": "School of Basic & Applied Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-applied-mathematics.php",
    "icon": "calculator"
  },
  {
    "name": "M.Sc. in Applied Physics",
    "stream": "science",
    "level": "pg",
    "school": "School of Basic & Applied Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-applied-physics.php",
    "icon": "atom"
  },
  {
    "name": "M.Sc. in Biochemistry",
    "stream": "science",
    "level": "pg",
    "school": "School of Life Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-in-biochemistry.php",
    "icon": "dna"
  },
  {
    "name": "M.Sc. in Biotechnology",
    "stream": "engineering",
    "level": "pg",
    "school": "School of Life Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-biotechnology.php",
    "icon": "dna"
  },
  {
    "name": "M.Sc. in Botany",
    "stream": "science",
    "level": "pg",
    "school": "School of Life Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-botany.php",
    "icon": "flask-conical"
  },
  {
    "name": "M.Sc. in Chemistry",
    "stream": "science",
    "level": "pg",
    "school": "School of Basic & Applied Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-in-chemistry.php",
    "icon": "flask-conical"
  },
  {
    "name": "M.Sc. in Computer Science",
    "stream": "it",
    "level": "pg",
    "school": "Faculty of Information Technology",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-in-computer-science.php",
    "icon": "laptop"
  },
  {
    "name": "M.Sc. in Environmental Science",
    "stream": "science",
    "level": "pg",
    "school": "School of Basic & Applied Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-in-environmental-science.php",
    "icon": "flask-conical"
  },
  {
    "name": "M.Sc. in Fashion Design",
    "stream": "design",
    "level": "pg",
    "school": "Department of Fashion & Interior Design",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-fashion-design.php",
    "icon": "palette"
  },
  {
    "name": "M.Sc. in Interior Design",
    "stream": "design",
    "level": "pg",
    "school": "Department of Fashion & Interior Design",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-interior-design.php",
    "icon": "layout"
  },
  {
    "name": "M.Sc. in Microbiology",
    "stream": "science",
    "level": "pg",
    "school": "School of Life Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-microbiology.php",
    "icon": "microscope"
  },
  {
    "name": "M.Sc. in Zoology",
    "stream": "science",
    "level": "pg",
    "school": "School of Life Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-sc-in-zoology.php",
    "icon": "flask-conical"
  },
  {
    "name": "MA in Journalism & Mass Communication (MJMC)",
    "stream": "media",
    "level": "pg",
    "school": "School of Journalism & Mass Communication",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/m-a-in-journalism-mass-communication.php",
    "icon": "radio"
  },
  {
    "name": "Master in Management Studies (MMS)",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/master-in-management-studies-mms.php",
    "icon": "briefcase"
  },
  {
    "name": "Master of Arts (M.A. in English / Hindi / History / Pol Sci / Economics / Sociology)",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/master-of-arts.php",
    "icon": "book-open"
  },
  {
    "name": "Master of Business Administration (MBA)",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/master-of-business-administration-mba.php",
    "icon": "briefcase"
  },
  {
    "name": "Master of Commerce (M.Com)",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/master-of-commerce-m-com.php",
    "icon": "coins"
  },
  {
    "name": "Master of Computer Application (MCA)",
    "stream": "it",
    "level": "pg",
    "school": "Department of Information Technology",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/master-of-computer-application.php",
    "icon": "laptop"
  },
  {
    "name": "Master of Hospital Administration (MHA)",
    "stream": "pharmacy",
    "level": "pg",
    "school": "School of Pharmaceutical & Health Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/mha-in-ranchi-fees-admission-2026-rkdf-university.php",
    "icon": "heart-pulse"
  },
  {
    "name": "Master of Laws (LL.M)",
    "stream": "law",
    "level": "pg",
    "school": "School of Law & Legal Studies",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/master-of-laws.php",
    "icon": "scale"
  },
  {
    "name": "Master of Library & Information Science (M.Lib.I.Sc.)",
    "stream": "science",
    "level": "pg",
    "school": "School of Library & Information Science",
    "duration": "1 Year (2 Semesters)",
    "href": "courses/master-of-library-science.php",
    "icon": "library"
  },
  {
    "name": "Master of Science (M.Sc. Overview)",
    "stream": "science",
    "level": "pg",
    "school": "School of Basic & Applied Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/master-of-science-msc.php",
    "icon": "flask-conical"
  },
  {
    "name": "Master of Social Work (MSW)",
    "stream": "arts",
    "level": "pg",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/master-of-social-workmsw.php",
    "icon": "users"
  },
  {
    "name": "MBA in Banking and Finance",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/mba-banking-and-finance.php",
    "icon": "landmark"
  },
  {
    "name": "MBA in Construction & Project Management",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/mba-construction-management.php",
    "icon": "briefcase"
  },
  {
    "name": "MBA in Fashion & Luxury Brand Management",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/mba-in-fashion-design.php",
    "icon": "briefcase"
  },
  {
    "name": "MBA in Hotel Management & Hospitality",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/mba-hotel-management.php",
    "icon": "hotel"
  },
  {
    "name": "MBA in Interior & Spatial Design Management",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/mba-in-interior-design.php",
    "icon": "briefcase"
  },
  {
    "name": "MBA in Logistics & Supply Chain Management",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/mba-logistics-and-supply-chain-management.php",
    "icon": "briefcase"
  },
  {
    "name": "P.G. Diploma in Fashion Design",
    "stream": "design",
    "level": "pg",
    "school": "Department of Fashion & Interior Design",
    "duration": "1 Year (2 Semesters)",
    "href": "courses/p-g-diploma-in-fashion-design.php",
    "icon": "palette"
  },
  {
    "name": "P.G. Diploma in Interior Design",
    "stream": "design",
    "level": "pg",
    "school": "Department of Fashion & Interior Design",
    "duration": "1 Year (2 Semesters)",
    "href": "courses/p-g-diploma-in-interior-design.php",
    "icon": "layout"
  },
  {
    "name": "Post Graduate Diploma in Computer Applications (PGDCA)",
    "stream": "it",
    "level": "pg",
    "school": "Department of Information Technology",
    "duration": "1 Year (2 Semesters)",
    "href": "courses/pgdca.php",
    "icon": "file-code"
  },
  {
    "name": "Postgraduate Commerce Hub",
    "stream": "management",
    "level": "ug",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/post-graduate-programs/m-com.php",
    "icon": "coins"
  },
  {
    "name": "Postgraduate Diploma Programs Hub",
    "stream": "arts",
    "level": "diploma",
    "school": "School of Arts & Humanities",
    "duration": "1 Year (2 Semesters)",
    "href": "courses/post-graduate-programs/pg-diploma.php",
    "icon": "book-open"
  },
  {
    "name": "Postgraduate IT Programs Hub",
    "stream": "other",
    "level": "ug",
    "school": "Faculty of Information Technology",
    "duration": "1 / 2 Years",
    "href": "courses/post-graduate-programs/information-technology.php",
    "icon": "graduation-cap"
  },
  {
    "name": "Postgraduate M.A. Humanities Hub",
    "stream": "arts",
    "level": "ug",
    "school": "School of Arts & Humanities",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/post-graduate-programs/ma.php",
    "icon": "book-open"
  },
  {
    "name": "Postgraduate M.Sc. Science Hub",
    "stream": "science",
    "level": "pg",
    "school": "School of Basic & Applied Sciences",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/post-graduate-programs/m-sc.php",
    "icon": "flask-conical"
  },
  {
    "name": "Postgraduate MBA Management Hub",
    "stream": "management",
    "level": "pg",
    "school": "Faculty of Management & Commerce",
    "duration": "2 Years (4 Semesters)",
    "href": "courses/post-graduate-programs/mba.php",
    "icon": "briefcase"
  },
  {
    "name": "Professional Postgraduate Programs Hub",
    "stream": "other",
    "level": "ug",
    "school": "RKDF University Ranchi",
    "duration": "1 / 2 Years",
    "href": "courses/post-graduate-programs/professional-post-graduate-programs.php",
    "icon": "graduation-cap"
  },
  {
    "name": "Professional Undergraduate Programs Hub",
    "stream": "other",
    "level": "ug",
    "school": "RKDF University Ranchi",
    "duration": "3 / 4 / 5 Years",
    "href": "courses/under-graduate-programs/professional.php",
    "icon": "graduation-cap"
  },
  {
    "name": "Undergraduate IT Programs Hub",
    "stream": "other",
    "level": "ug",
    "school": "Faculty of Information Technology",
    "duration": "3 / 4 Years",
    "href": "courses/under-graduate-programs/information-technology-under-graduate-programs.php",
    "icon": "graduation-cap"
  }
]
JSON;

$courses = json_decode($courses_json, true);

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Course Directory</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      All Academic Courses &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Programs</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Explore all <?= count($courses) ?> industry-aligned undergraduate, postgraduate, polytechnic diploma, and doctoral degree programs with detailed fee structures, syllabi, eligibility, and scholarship benefits.
    </p>

    <div class="mt-8 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill"><?= lucide_icon('layers', 'w-4 h-4 text-gold') ?> <?= count($courses) ?> Detailed Courses</span>
      <span class="hero-pill"><?= lucide_icon('award', 'w-4 h-4 text-gold') ?> NEP 2020 Model Curriculum</span>
      <span class="hero-pill"><?= lucide_icon('landmark', 'w-4 h-4 text-gold') ?> UGC 2(f) Recognized</span>
      <span class="hero-pill"><?= lucide_icon('shield-check', 'w-4 h-4 text-gold') ?> 100% Placement Support</span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== INTERACTIVE FILTER & SEARCH BAR ==================== -->
<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">

    <!-- Search & Filter Controls (Single Clean Line Panel) -->
    <div class="course-filter-panel">
      <!-- 1. Full-Width Premium Search Input -->
      <div class="course-search-wrapper mb-3.5">
        <span class="course-search-icon-box">
          <?= lucide_icon('search', 'w-4 h-4') ?>
        </span>
        <input type="text" id="courseSearch" placeholder="Search 106+ programs by course name or keyword (e.g. B.Tech, Mining, MBA, MCA, Pharmacy)..." 
               class="course-search-input" />
        <button type="button" id="clearSearchBtn" class="course-search-clear hidden" title="Clear search">
          <?= lucide_icon('x', 'w-3.5 h-3.5') ?>
        </button>
      </div>

      <!-- 2. Single-Line Consolidated Filter Pills with Scroll Arrows -->
      <div class="course-filter-single-row">
        <div class="course-filter-label-inline">
          <span class="course-filter-icon-box">
            <?= lucide_icon('filter', 'w-3.5 h-3.5') ?>
          </span>
          <span>Filter:</span>
        </div>
        
        <div class="course-filter-scroll-wrapper">
          <button type="button" id="scrollFilterLeft" class="filter-scroll-btn" aria-label="Scroll left" title="Scroll left">
            <?= lucide_icon('chevron-left', 'w-4 h-4') ?>
          </button>

          <div id="courseFilterTrack" class="course-filter-pills-track">
            <button type="button" class="filter-btn-pill active" data-filter="all">
              <span>All Programs</span>
              <span class="badge-count"><?= count($courses) ?></span>
            </button>
            <button type="button" class="filter-btn-pill" data-filter="ug">Undergraduate (UG)</button>
            <button type="button" class="filter-btn-pill" data-filter="pg">Postgraduate (PG)</button>
            <button type="button" class="filter-btn-pill" data-filter="diploma">Diploma &amp; Poly</button>
            <button type="button" class="filter-btn-pill" data-filter="engineering_it">Engineering &amp; IT</button>
            <button type="button" class="filter-btn-pill" data-filter="management">Management</button>
            <button type="button" class="filter-btn-pill" data-filter="pharmacy_science">Pharmacy &amp; Science</button>
            <button type="button" class="filter-btn-pill" data-filter="arts_law">Arts, Law &amp; Design</button>
          </div>

          <button type="button" id="scrollFilterRight" class="filter-scroll-btn" aria-label="Scroll right" title="Scroll right">
            <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
          </button>
        </div>
      </div>
    </div>



    <!-- Courses Grid -->
    <div id="courseGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($courses as $c): ?>
        <?php
          $level_code = strtolower($c['level'] ?? 'ug');
          $level_label = 'UG DEGREE';
          if ($level_code === 'pg') {
            $level_label = 'PG DEGREE';
          } elseif ($level_code === 'diploma') {
            $level_label = 'DIPLOMA';
          } elseif ($level_code === 'doctoral' || $level_code === 'phd') {
            $level_label = 'DOCTORAL';
          } elseif ($level_code === 'common') {
            $level_label = 'CERTIFICATE';
          }
        ?>
        <a href="<?= url($c['href']) ?>" 
           class="course-item-card group"
           data-name="<?= strtolower(e($c['name'] . ' ' . $c['school'])) ?>"
           data-level="<?= e($c['level']) ?>"
           data-stream="<?= e($c['stream']) ?>">
          
          <div>
            <!-- Top Meta Row: Level Badge & Duration -->
            <div class="flex items-center justify-between gap-2">
              <span class="course-card-badge">
                <?= $level_label ?>
              </span>
              <span class="course-card-duration">
                <?= lucide_icon('clock', 'w-3.5 h-3.5 text-[#e58525]') ?>
                <span><?= e($c['duration']) ?></span>
              </span>
            </div>

            <!-- Course Title & School Subtitle -->
            <h3 class="course-card-title">
              <?= e($c['name']) ?>
            </h3>
            <p class="course-card-school flex items-center gap-1.5">
              <?= lucide_icon('building-2', 'w-3.5 h-3.5 text-slate-400 shrink-0') ?>
              <span><?= e($c['school']) ?></span>
            </p>
          </div>

          <!-- Bottom Action Footer -->
          <div class="course-card-footer">
            <span class="course-card-status">
              <span class="course-card-status-dot"></span>
              <span>Admissions Open 2026–27</span>
            </span>

            <span class="course-card-cta">
              <span>View Details</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5 transition-transform') ?>
            </span>
          </div>

        </a>
      <?php endforeach; ?>
    </div>

    <!-- No Results Fallback -->
    <div id="noResults" class="hidden text-center py-16 px-4">
      <div class="w-14 h-14 rounded-2xl bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3.5">
        <?= lucide_icon('search-x', 'w-7 h-7') ?>
      </div>
      <h3 class="text-base font-bold text-slate-800">No matching programs found</h3>
      <p class="text-xs text-slate-500 mt-1 max-w-sm mx-auto">We couldn't find any courses matching your search keyword or selected category.</p>
      <button type="button" id="resetCourseFilters" class="mt-4 inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-[#0b1e3b] text-white text-xs font-bold hover:bg-[#0f284e] transition">
        <?= lucide_icon('rotate-ccw', 'w-3.5 h-3.5') ?>
        <span>Reset Search &amp; Filters</span>
      </button>
    </div>

  </div>
</section>

<!-- Search and Filter Client-Side Script -->
<script>
(function() {
  function initCourseFilters() {
    const searchInput = document.getElementById('courseSearch');
    const clearSearchBtn = document.getElementById('clearSearchBtn');
    const filterBtns = document.querySelectorAll('.filter-btn-pill');
    const cards = document.querySelectorAll('.course-item-card');
    const countSpan = document.getElementById('courseCount');
    const noResults = document.getElementById('noResults');
    const resetBtn = document.getElementById('resetCourseFilters');
    const filterTrack = document.getElementById('courseFilterTrack');
    const scrollLeftBtn = document.getElementById('scrollFilterLeft');
    const scrollRightBtn = document.getElementById('scrollFilterRight');

    let activeFilter = 'all';

    function updateFilterScrollArrows() {
      if (!filterTrack) return;
      const maxScroll = filterTrack.scrollWidth - filterTrack.clientWidth;
      if (scrollLeftBtn) {
        const atStart = filterTrack.scrollLeft <= 5;
        scrollLeftBtn.style.opacity = atStart ? '0.35' : '1';
        scrollLeftBtn.disabled = atStart;
      }
      if (scrollRightBtn) {
        const atEnd = filterTrack.scrollLeft >= maxScroll - 5;
        scrollRightBtn.style.opacity = atEnd ? '0.35' : '1';
        scrollRightBtn.disabled = atEnd;
      }
    }

    if (scrollLeftBtn && filterTrack) {
      scrollLeftBtn.addEventListener('click', function(e) {
        e.preventDefault();
        filterTrack.scrollBy({ left: -220, behavior: 'smooth' });
      });
    }

    if (scrollRightBtn && filterTrack) {
      scrollRightBtn.addEventListener('click', function(e) {
        e.preventDefault();
        filterTrack.scrollBy({ left: 220, behavior: 'smooth' });
      });
    }

    if (filterTrack) {
      filterTrack.addEventListener('scroll', updateFilterScrollArrows, { passive: true });
      window.addEventListener('resize', updateFilterScrollArrows);
      setTimeout(updateFilterScrollArrows, 150);
    }

    function filterCourses() {
      const rawQuery = searchInput ? searchInput.value.toLowerCase().trim() : '';
      const query = rawQuery.replace(/[.\-\s()]/g, ''); // sanitized for flexible query e.g. btech / b.tech
      
      // Toggle clear search button visibility
      if (clearSearchBtn) {
        if (rawQuery.length > 0) {
          clearSearchBtn.classList.remove('hidden');
        } else {
          clearSearchBtn.classList.add('hidden');
        }
      }

      let visibleCount = 0;

      cards.forEach(card => {
        const rawName = (card.getAttribute('data-name') || '').toLowerCase();
        const cleanName = rawName.replace(/[.\-\s()]/g, '');
        const level = (card.getAttribute('data-level') || '').toLowerCase().trim();
        const stream = (card.getAttribute('data-stream') || '').toLowerCase().trim();

        // Flexible Search Matching
        let matchesSearch = true;
        if (rawQuery) {
          matchesSearch = rawName.includes(rawQuery) || 
                          cleanName.includes(query) || 
                          level.includes(rawQuery) || 
                          stream.includes(rawQuery);
        }

        // Filter Matching
        let matchesFilter = false;
        if (activeFilter === 'all') {
          matchesFilter = true;
        } else if (activeFilter === 'ug') {
          matchesFilter = (level === 'ug');
        } else if (activeFilter === 'pg') {
          matchesFilter = (level === 'pg' || level === 'doctoral' || level === 'phd');
        } else if (activeFilter === 'diploma') {
          matchesFilter = (level === 'diploma');
        } else if (activeFilter === 'engineering_it') {
          matchesFilter = (stream === 'engineering' || stream === 'it');
        } else if (activeFilter === 'management') {
          matchesFilter = (stream === 'management');
        } else if (activeFilter === 'pharmacy_science') {
          matchesFilter = (stream === 'pharmacy' || stream === 'science');
        } else if (activeFilter === 'arts_law') {
          matchesFilter = (stream === 'arts' || stream === 'law' || stream === 'design' || stream === 'media' || stream === 'other');
        } else {
          matchesFilter = (level === activeFilter || stream === activeFilter);
        }

        if (matchesSearch && matchesFilter) {
          card.classList.remove('hidden', 'is-hidden');
          card.style.removeProperty('display');
          visibleCount++;
        } else {
          card.classList.add('hidden', 'is-hidden');
          card.style.setProperty('display', 'none', 'important');
        }
      });

      if (countSpan) countSpan.textContent = visibleCount;
      if (noResults) {
        if (visibleCount === 0) {
          noResults.classList.remove('hidden');
          noResults.style.removeProperty('display');
        } else {
          noResults.classList.add('hidden');
          noResults.style.setProperty('display', 'none', 'important');
        }
      }
    }

    // Real-time search typing
    if (searchInput) {
      searchInput.addEventListener('input', filterCourses);
      searchInput.addEventListener('keyup', filterCourses);
      searchInput.addEventListener('change', filterCourses);
    }

    // Clear search button
    if (clearSearchBtn) {
      clearSearchBtn.addEventListener('click', function(e) {
        e.preventDefault();
        if (searchInput) {
          searchInput.value = '';
          searchInput.focus();
        }
        filterCourses();
      });
    }

    // Filter Pill buttons
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        activeFilter = this.getAttribute('data-filter') || 'all';
        filterCourses();

        // Auto-scroll clicked button into view
        btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
      });
    });

    // Reset button in No-Results box
    if (resetBtn) {
      resetBtn.addEventListener('click', function(e) {
        e.preventDefault();
        if (searchInput) searchInput.value = '';
        activeFilter = 'all';
        filterBtns.forEach(b => {
          if (b.getAttribute('data-filter') === 'all') b.classList.add('active');
          else b.classList.remove('active');
        });
        filterCourses();
      });
    }

    // Run initial filtering
    filterCourses();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCourseFilters);
  } else {
    initCourseFilters();
  }
})();
</script>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
