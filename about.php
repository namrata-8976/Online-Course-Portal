<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* General Styling */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { background: #0c0f1a; color: white; text-align: center; }
        
        /* Navigation Bar */
        header {
            background: #11152b;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }
        .logo { font-size: 24px; font-weight: bold; color: #f4a51c; }
        nav ul { list-style: none; display: flex; }
        nav ul li { margin: 0 15px; }
        nav ul li a { color: white; text-decoration: none; font-weight: bold; transition: 0.3s; }
        nav ul li a:hover, .active { color: #f4a51c; }

        /* Hero Section */
        .hero {
            background: url('banner.png') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 5px black;
        }
        .hero h1 { font-size: 40px; margin-bottom: 10px; }
        .hero h1 span { color: #f4a51c; text-decoration: underline; }
        .hero p { font-size: 18px; }

        /* About Section */
        .about, .features, .team { padding: 50px 10%; text-align: center; }
        .fade-in { opacity: 0; transform: translateY(20px); transition: opacity 1s ease-out, transform 1s ease-out; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }

        .about h2, .features h2, .team h2 { font-size: 32px; margin-bottom: 20px; color: #f4a51c; }

        .about h2 {
            font-size: 32px;
            margin-bottom: 40px;
            color: #f4a51c;
            margin-top: 40px; /* Add this line to increase the gap */
        }

        .about-content {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            text-align: left;
            max-width: 800px;
            line-height: 1.6;
        }
        .about ul, .about ol { padding-left: 20px; margin-top: 15px; }
        .about li { margin-bottom: 10px; font-size: 18px; }

        /* Features Section */
        .features h2, .team h2 { margin-bottom: 30px; }
        .feature-box, .team-members { display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; }
        .feature, .member {
            width: 370px; /* Increased width */
            height: 370px; /* Increased height */
            padding: 30px; /* Increased padding */
            border-radius: 10px; 
            text-align: center;
            color: black; 
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .feature:hover, .member:hover { transform: scale(1.1); color: white; box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2); }
        
        .feature:nth-child(1), .member:nth-child(1) { background: #f4a51c; }
        .feature:nth-child(2), .member:nth-child(2) { background: #3b82f6; }
        .feature:nth-child(3), .member:nth-child(3) { background: #ef4444; }

        .feature img, .member img {
            width: 100%; /* Ensure image fits the box */
            height: 200px; /* Fixed height for rectangular shape */
            margin-bottom: 15px;
            object-fit: cover; /* Ensures proper scaling without cropping */
            border-radius: 5px; /* Optional: rounded corners for images */
        }

        /* Footer */
        footer { background: #11152b; padding: 15px; margin-top: 20px; }
    </style>
</head>
<body>
<header>
        <div class="logo">Pro <span>Skills</span></div>
        <nav>
            <ul>
                <li><a href="indexpg.html">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#" class="active">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Empowering Learning, <span>Inspiring Growth</span></h1>
        <p>Your journey to mastering skills begins here.</p>
    </section>

    <section class="about fade-in">
        <h2>About Our Platform</h2>
        <div class="about-content">
            <p>At <b>Pro-Skills</b>, we provide top-quality online courses designed to help individuals enhance their skills and excel in their careers.</p>
            <ul>
                <li>📚 Interactive and engaging courses tailored to different learning styles.</li>
                <li>🎯 Real-world projects to ensure practical knowledge.</li>
                <li>⏳ 24/7 access to learning materials.</li>
                <li>👥 Dedicated support from instructors and peers.</li>
            </ul>
        </div>

        <h2>Our Mission</h2>
        <div class="about-content">
            <p>We aim to make education accessible and convenient through expert-led courses and innovative learning experiences.</p>
            <ol>
                <li>✅ Provide high-quality, up-to-date content.</li>
                <li>👨‍👩‍👦‍👦 Foster a community of learners and professionals.</li>
                <li>🚀 Empower individuals with skills that boost career growth.</li>
            </ol>
        </div>
    </section>

    <section class="features fade-in">
        <h2>Why Choose Us?</h2>
        <div class="feature-box">
            <div class="feature">
                <img src="images/ins.jpg" alt="Expert Instructors">
                <h3 style="padding-top: 10px;">Expert Instructors</h3>
                <p>Learn from industry leaders and professionals.</p>
            </div>
            <div class="feature">
                <img src="images/flex.avif" alt="Flexible Learning">
                <h3>Flexible Learning</h3>
                <p style="padding-top: 10px;">Study at your own pace, anytime, anywhere.</p>
            </div>
            <div class="feature">
                <img src="images/recogn.jpg" alt="Recognized Certifications">
                <h3>Recognized Certifications</h3>
                <p style="padding-top: 10px;">Earn certifications to boost your career prospects.</p>
            </div>
        </div>
    </section>

    <section class="team fade-in">
        <h2>Meet Our Team</h2>
        <div class="team-members">
            <div class="member">
                <img src="images/hrr.avif" alt="Harshita R R">
                <h3 style="padding:20px;font-size: 23px;">Harshita R R</h3>
            </div>
            <div class="member">
                <img src="images/bgn.avif" alt="Namrata B G">
                <h3 style="padding:20px;font-size: 23px;">Namrata B G</h3>
            </div>
            <div class="member">
                <img src="images/srsm.avif" alt="Meghana S R S">
                <h3 style="padding:20px;font-size: 23px;">Meghana S R S</h3>
            </div>
        </div>

    </section>

    <footer>
        <p>&copy; 2025 Pro-Skills. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll(".fade-in");
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            }, { threshold: 0.3 });
            
            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>
</html>
