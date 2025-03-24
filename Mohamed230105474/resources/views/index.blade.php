<!-- filepath: d:\Back-End\Mohamed230105474\resources\views\index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Security</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bondi.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav>
        <ul>
            <li><a href="#">Web Security</a></li>

            <li class="dropdown">
                <a href="#">Lecture </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('lec.01') }}">Lecture 01</a></li>
                    <li><a href="{{ route('lec.02') }}">Lecture 02</a></li>
                    <li><a href="{{ route('lec.03') }}">Lecture 03</a></li>
                    <li><a href="{{ route('lec.04') }}">Lecture 04</a></li>
                    <li><a href="{{ route('lec.05') }}">Lecture 05</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Labs </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('lab.01') }}">Lab 01</a></li>
                    <li><a href="{{ route('lab.02') }}">Lab 02</a></li>
                    <li><a href="{{ route('lab.03') }}">Lab 03</a></li>
                    <li><a href="{{ route('lab.04') }}">Lab 04</a></li>
                    <li><a href="#{{ route('lab.05') }}">Lab 05</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Take A look!</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('auth.signup') }}">Sign up</a></li>
                    <li><a href="{{ route('lab.05') }}">Log in</a></li>
                </ul>
            </li>

        </ul>
    </nav>
 <!-- Hero Section -->
 <section class="hero">
    <img src="{{ asset('assets/bootstrap/image/zhicon.png') }}" alt="John Doe" class="profile-img">
    <h1>Mohamed Hesham</h1>
    <p>Networking & Security | System Administration | Backend Development </p>
</section>

<!-- About Section -->
<section class="section">
    <h2>About Me</h2>
    <p>Reliable and detail-oriented Network Engineer with expertise in network administration,
        cybersecurity, and backend development. Certified in CCNA and currently preparing for MCSA,
        firewall security, and SOC analysis. Skilled in network design, security implementation, and backend
        development with PHP and Laravel. Proficient in troubleshooting complex network issues,
        configuring firewalls, and developing secure applications. Strong leader and mentor, co-founder of
        the NEXTGENTECH, promoting cybersecurity and software development. </p>
</section>

<!-- Skills -->
<section class="section" style="background: var(--light-bg);">
    <h2>Skills & Expertise</h2>
    <div class="skills-grid">
        <div class="skill-card">
            <h3>Networking & Security </h3>
            <p> SOC analysis. Skilled in network design, security implementation</p>
        </div>
        <div class="skill-card">
            <h3>Backend Development</h3>
            <p> PHP and Laravel</p>
        </div>
        <!-- Add more skill cards -->
    </div>
</section>

<!-- Experience Timeline -->
<section class="section">
    <h2>Professional Journey</h2>
    <div class="timeline">
        <div class="timeline-item">
            <h3>IT Professional Support  @MEDVAL Healthcare</h3>
            <p>07/2024 - 11/2024</p>
            <p>Provided technical support for network troubleshooting, system maintenance, and security
                configurations. </p>
        </div>
        <!-- Add more timeline items -->
    </div>
</section>
<section class="section">
    <h2>Professional Journey</h2>
    <div class="timeline">
        <div class="timeline-item">
            <h3>Co-Founder & Vice President  @NEXTGENTECH – SUT Cybersecurity & IT Solutions </h3>
            <p>10/2024 - Present</p>
            <p>Led initiatives in cybersecurity awareness, penetration testing, and secure network architecture.  </p>
        </div>
        <!-- Add more timeline items -->
    </div>
</section>
<!-- Contact Section -->
<section class="section">
    <h2>Get in Touch</h2>
    <form class="contact-form">
        <div class="form-group">
            <input type="text" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" placeholder="Email">
        </div>
        <div class="form-group">
            <textarea rows="5" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn">Send Message</button>
    </form>
</section>
</body>
</html>
