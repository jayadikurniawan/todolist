<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To do List</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Roboto:500" rel="stylesheet">
    <link rel="stylesheet" href="style/index/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <style>
        img {
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <title>Ava</title>
                                    <defs>
                                        <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="logo-gradient-b">
                                            <stop stop-color="#39D8C8" offset="0%" />
                                            <stop stop-color="#BCE4F4" offset="47.211%" />
                                            <stop stop-color="#838DEA" offset="100%" />
                                        </linearGradient>
                                        <path d="M32 16H16v16H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v14z" id="logo-gradient-a" />
                                        <linearGradient x1="23.065%" y1="25.446%" y2="100%" id="logo-gradient-c">
                                            <stop stop-color="#1274ED" stop-opacity="0" offset="0%" />
                                            <stop stop-color="#1274ED" offset="100%" />
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <mask id="logo-gradient-d" fill="#fff">
                                            <use xlink:href="#logo-gradient-a" />
                                        </mask>
                                        <use fill="url(#logo-gradient-b)" xlink:href="#logo-gradient-a" />
                                        <path fill="url(#logo-gradient-c)" mask="url(#logo-gradient-d)" d="M-16-16h32v32h-32z" />
                                    </g>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-center">
                <div class="container-sm">
                    <div class="hero-inner">
                        <h1 class="hero-title h2-mobile mt-0 is-revealing">Stay Organized with My To-Do List</h1>
                        <p class="hero-paragraph is-revealing">Never forget a task again! With My To-Do List, you can easily manage your tasks and stay organized.</p>
                        <div class="hero-form newsletter-form field field-grouped is-revealing">

                            <div class="control" style="margin: 0 auto;">
                                <a class="button button-primary button-block button-shadow" href="view/v_autentication.php">Start your
                                    activity</a>
                            </div>
                        </div>
                        <div class="hero-browser">
                            <div class="bubble-3 is-revealing">
                                <svg width="427" height="286" viewBox="0 0 427 286" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <path d="M213.5 286C331.413 286 427 190.413 427 72.5S304.221 16.45 186.309 16.45C68.396 16.45 0-45.414 0 72.5S95.587 286 213.5 286z" id="bubble-3-a" />
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <mask id="bubble-3-b" fill="#fff">
                                            <use xlink:href="#bubble-3-a" />
                                        </mask>
                                        <use fill="#4E8FF8" xlink:href="#bubble-3-a" />
                                        <path d="M64.5 129.77c117.913 0 213.5-95.588 213.5-213.5 0-117.914-122.779-56.052-240.691-56.052C-80.604-139.782-149-201.644-149-83.73c0 117.913 95.587 213.5 213.5 213.5z" fill="#1274ED" mask="url(#bubble-3-b)" />
                                        <path d="M381.5 501.77c117.913 0 213.5-95.588 213.5-213.5 0-117.914-122.779-56.052-240.691-56.052C236.396 232.218 168 170.356 168 288.27c0 117.913 95.587 213.5 213.5 213.5z" fill="#75ABF3" mask="url(#bubble-3-b)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="bubble-4 is-revealing">
                                <svg width="230" height="235" viewBox="0 0 230 235" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <path d="M196.605 234.11C256.252 234.11 216 167.646 216 108 216 48.353 167.647 0 108 0S0 48.353 0 108s136.959 126.11 196.605 126.11z" id="bubble-4-a" />
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <mask id="bubble-4-b" fill="#fff">
                                            <use xlink:href="#bubble-4-a" />
                                        </mask>
                                        <use fill="#7CE8DD" xlink:href="#bubble-4-a" />
                                        <circle fill="#3BDDCC" mask="url(#bubble-4-b)" cx="30" cy="108" r="108" />
                                        <circle fill="#B1F1EA" opacity=".7" mask="url(#bubble-4-b)" cx="265" cy="88" r="108" />
                                    </g>
                                </svg>
                            </div>
                            <div class="hero-browser-inner is-revealing">
                                <img src="images/temp1.png" alt="image">
                            </div>
                            <div class="bubble-1 is-revealing">
                                <svg width="61" height="52" viewBox="0 0 61 52" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <path d="M32 43.992c17.673 0 28.05 17.673 28.05 0S49.674 0 32 0C14.327 0 0 14.327 0 32c0 17.673 14.327 11.992 32 11.992z" id="bubble-1-a" />
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <mask id="bubble-1-b" fill="#fff">
                                            <use xlink:href="#bubble-1-a" />
                                        </mask>
                                        <use fill="#FF6D8B" xlink:href="#bubble-1-a" />
                                        <path d="M2 43.992c17.673 0 28.05 17.673 28.05 0S19.674 0 2 0c-17.673 0-32 14.327-32 32 0 17.673 14.327 11.992 32 11.992z" fill="#FF4F73" mask="url(#bubble-1-b)" />
                                        <path d="M74 30.992c17.673 0 28.05 17.673 28.05 0S91.674-13 74-13C56.327-13 42 1.327 42 19c0 17.673 14.327 11.992 32 11.992z" fill-opacity=".8" fill="#FFA3B5" mask="url(#bubble-1-b)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="bubble-2 is-revealing">
                                <svg width="179" height="126" viewBox="0 0 179 126" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <path d="M104.697 125.661c41.034 0 74.298-33.264 74.298-74.298s-43.231-7.425-84.265-7.425S0-28.44 0 12.593c0 41.034 63.663 113.068 104.697 113.068z" id="bubble-2-a" />
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <mask id="bubble-2-b" fill="#fff">
                                            <use xlink:href="#bubble-2-a" />
                                        </mask>
                                        <use fill="#838DEA" xlink:href="#bubble-2-a" />
                                        <path d="M202.697 211.661c41.034 0 74.298-33.264 74.298-74.298s-43.231-7.425-84.265-7.425S98 57.56 98 98.593c0 41.034 63.663 113.068 104.697 113.068z" fill="#626CD5" mask="url(#bubble-2-b)" />
                                        <path d="M43.697 56.661c41.034 0 74.298-33.264 74.298-74.298s-43.231-7.425-84.265-7.425S-61-97.44-61-56.407C-61-15.373 2.663 56.661 43.697 56.661z" fill="#B1B6F1" opacity=".64" mask="url(#bubble-2-b)" />
                                    </g>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section text-center">
                <div class="container">
                    <div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M48.066 61.627c6.628 0 10.087-16.79 10.087-23.418 0-6.627-5.025-9.209-11.652-9.209C39.874 29 24 42.507 24 49.135c0 6.627 17.439 12.492 24.066 12.492z" fill-opacity=".24" fill="#A0A6EE" />
                                                <path d="M26 54l28-28" stroke="#838DEA" stroke-width="2" stroke-linecap="square" />
                                                <path d="M26 46l20-20M26 38l12-12M26 30l4-4M34 54l20-20M42 54l12-12" stroke="#767DE1" stroke-width="2" stroke-linecap="square" />
                                                <path d="M50 54l4-4" stroke="#838DEA" stroke-width="2" stroke-linecap="square" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h3 id="about" class="feature-title">Easy Task Management</h3>
                                    <p class="text-sm">Create, edit, and organize your tasks with ease. Prioritize your
                                        to-dos, set due dates, and track your progress.

                                    </p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M48.066 61.627c6.628 0 10.087-16.79 10.087-23.418 0-6.627-5.025-9.209-11.652-9.209C39.874 29 24 42.507 24 49.135c0 6.627 17.439 12.492 24.066 12.492z" fill-opacity=".24" fill="#75ABF3" />
                                                <path d="M34 52V35M40 52V42M46 52V35M52 52V42M28 52V28" stroke="#4D8EF7" stroke-width="2" stroke-linecap="square" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h3 class="feature-title">Reminders and Notifications</h3>
                                    <p class="text-sm">Timely Reminders: Never miss an important deadline again. Set
                                        reminders based on specific dates and times to stay on track.</p>
                                </div>
                            </div>
                        </div>
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M48.066 61.627c6.628 0 10.087-16.79 10.087-23.418 0-6.627-5.025-9.209-11.652-9.209C39.874 29 24 42.507 24 49.135c0 6.627 17.439 12.492 24.066 12.492z" fill-opacity=".32" fill="#FF97AC" />
                                                <path stroke="#FF6D8B" stroke-width="2" stroke-linecap="square" d="M49 45h6V25H35v6M43 55h2v-2M25 53v2h2M27 35h-2v2" />
                                                <path stroke="#FF6D8B" stroke-width="2" stroke-linecap="square" d="M43 35h2v2M39 55h-2M33 55h-2M39 35h-2M33 35h-2M45 49v-2M25 49v-2M25 43v-2M45 43v-2" />
                                            </g>
                                        </svg>

                                    </div>
                                    <h3 class="feature-title">Boost Productivity</h3>
                                    <p class="text-sm">Stay focused and accomplish more by having a clear overview of
                                        your tasks.</p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                                            <g transform="translate(24 25)" fill="none" fill-rule="evenodd">
                                                <path d="M24.066 36.627c6.628 0 10.087-16.79 10.087-23.418C34.153 6.582 29.128 4 22.501 4 15.874 4 0 17.507 0 24.135c0 6.627 17.439 12.492 24.066 12.492z" fill-opacity=".32" fill="#A0EEE5" />
                                                <circle stroke="#39D8C8" stroke-width="2" stroke-linecap="square" cx="5" cy="4" r="4" />
                                                <path stroke="#39D8C8" stroke-width="2" stroke-linecap="square" d="M23 22h8v8h-8zM11 10l9 9" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h3 class="feature-title">Data Security</h3>
                                    <p class="text-sm">Your information is stored securely, ensuring your privacy and
                                        confidentiality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="newsletter section">
                <div class="container-sm">
                    <div class="newsletter-inner section-inner">
                        <div class="newsletter-header text-center is-revealing">
                            <h2 class="section-title mt-0">Start Organizing Your Life Today!</h2>
                            <p class="section-paragraph">Sign up for My To-Do List and take control of your tasks and
                                productivity.</p>
                        </div>
                        <div class="footer-form newsletter-form field field-grouped is-revealing">
                            <div class="control" style="margin: 0 auto;">
                                <a class="button button-primary button-block button-shadow" href="view/v_autentication.php">Start your
                                    activity</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer text-light">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <title>Ava</title>
                                <defs>
                                    <path d="M32 16H16v16H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v14z" id="logo-gradient-footer-a" />
                                    <linearGradient x1="50%" y1="50%" y2="100%" id="logo-gradient-footer-b">
                                        <stop stop-color="#FFF" stop-opacity="0" offset="0%" />
                                        <stop stop-color="#FFF" offset="100%" />
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <mask id="logo-gradient-footer-c" fill="#fff">
                                        <use xlink:href="#logo-gradient-footer-a" />
                                    </mask>
                                    <use fill-opacity=".32" fill="#FFF" xlink:href="#logo-gradient-footer-a" />
                                    <path fill="url(#logo-gradient-footer-b)" mask="url(#logo-gradient-footer-c)" d="M-16-16h32v32h-32z" />
                                </g>
                            </svg>

                        </a>
                    </div>
               

                </div>
            </div>
        </footer>
    </div>

    <script src="style/index/js/main.min.js"></script>
</body>

</html>