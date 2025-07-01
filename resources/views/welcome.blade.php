<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-gray-900 text-gray-100">
        <!-- Navigation -->
        <nav class="fixed w-full bg-gray-800 shadow-sm z-50">
            <div class="container mx-auto px-20 py-4">
                <div class="flex justify-between items-center">
                    <a href="#" class="text-2xl font-bold text-primary">{{ config('app.name', 'Laravel') }}</a>
                    <div class="hidden md:flex space-x-8">
                        <a href="#about" class="hover:text-primary transition">About</a>
                        <a href="#skills" class="hover:text-primary transition">Skills</a>
                        <a href="#projects" class="hover:text-primary transition">Projects</a>
                        <a href="#contact" class="hover:text-primary transition">Contact</a>
                    </div>
                    <button class="md:hidden focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="pt-24 pb-16 md:pt-32 md:pb-24">
            <div class="container mx-auto px-20">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">Hi, I'm <span class="text-primary">Alex Morgan</span></h1>
                        <h2 class="text-2xl md:text-3xl font-medium mb-6">Full Stack Developer</h2>
                        <p class="text-lg mb-8 max-w-lg">I build exceptional digital experiences focused on performance, accessibility, and user-centric design.</p>
                        <div class="flex space-x-4">
                            <a href="#projects" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-secondary transition">View Work</a>
                            <a href="#contact" class="border-2 border-primary text-primary px-6 py-3 rounded-lg hover:bg-primary hover:text-white transition">Contact Me</a>
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-end">
                        <div class="relative">
                            <div class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-primary shadow-lg">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/65e0480a-dfa5-43e4-8043-d12d17ea77f3.png" alt="Portrait of professional developer Alex Morgan wearing business casual attire with a neutral background" class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="py-16 bg-gray-800">
            <div class="container mx-auto px-20">
                <h2 class="text-3xl font-bold text-center mb-12">About <span class="text-primary">Me</span></h2>
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <h3 class="text-2xl font-semibold mb-4">Who I Am</h3>
                        <p class="mb-4">I'm a passionate full-stack developer with expertise in modern web technologies. I specialize in creating seamless, responsive, and accessible web applications.</p>
                        <p>With a background in computer science and design, I bring a unique combination of technical skills and aesthetic sensibility to every project.</p>
                    </div>
                    <div class="md:w-1/2">
                        <h3 class="text-2xl font-semibold mb-4">Education & Experience</h3>
                        <div class="space-y-4">
                            <div class="border-l-4 border-primary pl-4 py-2">
                                <h4 class="font-semibold">MSc Computer Science</h4>
                                <p class="text-gray-600">Stanford University · 2018-2020</p>
                            </div>
                            <div class="border-l-4 border-primary pl-4 py-2">
                                <h4 class="font-semibold">Senior Developer</h4>
                                <p class="text-gray-600">Tech Solutions Inc · 2020-Present</p>
                            </div>
                            <div class="border-l-4 border-primary pl-4 py-2">
                                <h4 class="font-semibold">Web Developer</h4>
                                <p class="text-gray-600">Digital Creations · 2016-2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-16">
            <div class="container mx-auto px-20">
                <h2 class="text-3xl font-bold text-center mb-12">My <span class="text-primary">Skills</span></h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <div class="text-4xl text-primary mb-4">
                            <i class="fab fa-js"></i>
                        </div>
                        <h3 class="font-semibold mb-2">JavaScript</h3>
                        <p class="text-gray-600">Expert in modern JS frameworks</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <div class="text-4xl text-primary mb-4">
                            <i class="fab fa-react"></i>
                        </div>
                        <h3 class="font-semibold mb-2">React</h3>
                        <p class="text-gray-600">Building interactive UIs</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <div class="text-4xl text-primary mb-4">
                            <i class="fab fa-node"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Node.js</h3>
                        <p class="text-gray-600">Backend development</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <div class="text-4xl text-primary mb-4">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="font-semibold mb-2">MongoDB</h3>
                        <p class="text-gray-600">Database management</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <div class="text-4xl text-primary mb-4">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <h3 class="font-semibold mb-2">CSS/Tailwind</h3>
                        <p class="text-gray-600">Responsive design</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <div class="text-4xl text-primary mb-4">
                            <i class="fab fa-git"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Git</h3>
                        <p class="text-gray-600">Version control</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <div class="text-4xl text-primary mb-4">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3 class="font-semibold mb-2">AWS</h3>
                        <p class="text-gray-600">Cloud services</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <div class="text-4xl text-primary mb-4">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Responsive</h3>
                        <p class="text-gray-600">Mobile-first approach</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-16 bg-gray-800">
            <div class="container mx-auto px-20">
                <h2 class="text-3xl font-bold text-center mb-12">Featured <span class="text-primary">Projects</span></h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition bg-gray-700">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/fc8f7caa-3710-47fb-979a-90647205d224.png" alt="Dashboard application showing analytics with charts and metrics on dark background" class="w-full h-full object-cover hover:scale-105 transition duration-500" />
                        </div>
                        <div class="p-6 bg-gray-700">
                            <h3 class="text-xl font-semibold mb-2">Analytics Dashboard</h3>
                            <p class="text-gray-600 mb-4">Interactive data visualization platform built with React and D3.js</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">React</span>
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">D3.js</span>
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Node.js</span>
                            </div>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/79fd6099-8233-4b3e-b9e2-23eb4aad1ee0.png" alt="E-commerce website product page showing fashionable items with clean modern design" class="w-full h-full object-cover hover:scale-105 transition duration-500" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">E-Commerce Platform</h3>
                            <p class="text-gray-600 mb-4">Full-featured online store with payment integration</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Vue.js</span>
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Stripe</span>
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">MongoDB</span>
                            </div>
                        </div>
                    </div>
                    <!-- Project 3 -->
                    <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b5f04041-5bf8-4078-b998-8488882b9716.png" alt="Task management app interface showing kanban board with colorful cards" class="w-full h-full object-cover hover:scale-105 transition duration-500" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Task Management App</h3>
                            <p class="text-gray-600 mb-4">Collaborative productivity tool for teams</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">React</span>
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Firebase</span>
                                <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Redux</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="#" class="text-primary font-semibold hover:underline">View All Projects →</a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16">
            <div class="container mx-auto px-20">
                <h2 class="text-3xl font-bold text-center mb-12">Get In <span class="text-primary">Touch</span></h2>
                <div class="flex flex-col md:flex-row gap-12">
                    <div class="md:w-1/2">
                        <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-primary bg-opacity-10 flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Location</h4>
                                    <p class="text-gray-300">San Francisco, CA</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-primary bg-opacity-10 flex items-center justify-center">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Email</h4>
                                    <p class="text-gray-600">alex@example.com</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-primary bg-opacity-10 flex items-center justify-center">
                                    <i class="fas fa-phone text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Phone</h4>
                                    <p class="text-gray-600">(123) 456-7890</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-xl font-semibold mb-4">Connect With Me</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-secondary transition">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-secondary transition">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-secondary transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-secondary transition">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <h3 class="text-2xl font-semibold mb-6">Send Me a Message</h3>
                        <form class="space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block mb-1">Name</label>
                                    <input type="text" id="name" class="w-full px-4 py-2 border border-gray-600 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="email" class="block mb-1">Email</label>
                                    <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block mb-1">Subject</label>
                                <input type="text" id="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label for="message" class="block mb-1">Message</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                            </div>
                            <button type="submit" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-secondary transition">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white py-8">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <p>© 2023 Alex Morgan. All rights reserved.</p>
                    </div>
                    <div>
                        <ul class="flex space-x-6">
                            <li><a href="#" class="hover:text-primary transition">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-primary transition">Terms of Service</a></li>
                            <li><a href="#" class="hover:text-primary transition">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Back to Top Button -->
        <button onclick="topFunction()" id="backToTop" class="fixed bottom-8 right-8 bg-primary text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-secondary transition hidden">
            <i class="fas fa-arrow-up"></i>
        </button>

        <script>
            // Back to top button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                const backToTop = document.getElementById("backToTop");
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    backToTop.classList.remove("hidden");
                } else {
                    backToTop.classList.add("hidden");
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    </body>
</html>
