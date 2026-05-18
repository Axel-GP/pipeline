document.addEventListener('DOMContentLoaded', function () {
            const steps = window.taxixiSteps || [];
            const interactiveTiles = document.querySelectorAll('.funciona-detail[data-step-index]');
            const stepTitle = document.getElementById('step-title');
            const stepDesc = document.getElementById('step-desc');
            const stepImage = document.getElementById('funciona-image');
            const stepVideo = document.getElementById('funciona-video');
            const stepVideoSource = stepVideo?.querySelector('source');
            const formulario = document.getElementById('reserva-form');

            if (steps.length > 0 && interactiveTiles.length > 0) {
                let activeIndex = 0;
                let autoRotate;

                const animateIcon = (tile) => {
                    if (!tile) {
                        return;
                    }
                    const icon = tile.querySelector('.funciona-icon');
                    if (!icon) {
                        return;
                    }
                    icon.classList.remove('rotate-spin');
                    void icon.offsetWidth;
                    icon.classList.add('rotate-spin');
                };
                formulario.addEventListener('submit', function(e) {
            e.preventDefault(); // Detenemos el envío normal

            const siteKey = '6Lc5NS0sAAAAAFyfHcnmO_aYXbuyV8Q-P7fNY_SJ';

            // Esperamos a que la API de reCAPTCHA esté lista
            grecaptcha.ready(function() {
                // Ejecuta la acción (ej: 'contact_submit') y obtiene el token
                grecaptcha.execute(siteKey, { action: 'submit' })
                    .then(function(token) {

                        // Asigna el token al campo oculto
                        document.getElementById('g-recaptcha-response').value = token;

                        // Una vez que tenemos el token, enviamos el formulario
                        formulario.submit();
                    });
            });
        });
                const activateStep = (index, manual = false) => {
                    activeIndex = index;
                    interactiveTiles.forEach(tile => {
                        const tileIndex = parseInt(tile.dataset.stepIndex, 10);
                        const isActive = tileIndex === index;
                        tile.classList.toggle('active', isActive);
                        if (isActive) {
                            animateIcon(tile);
                        }
                    });
                    const step = steps[index];
                    if (stepTitle) {
                        stepTitle.textContent = step.titulo;
                    }
                    if (stepDesc) {
                        stepDesc.textContent = step.descripcion;
                    }
                    if (step.video && stepVideo) {
                        if (stepVideoSource && stepVideoSource.src !== step.video) {
                            stepVideoSource.src = step.video;
                            stepVideo.load();
                        }
                        stepVideo.classList.remove('d-none');
                        stepVideo.classList.remove('opacity-0');
                        if (stepImage) {
                            stepImage.classList.add('d-none');
                        }
                    } else if (stepImage) {
                        stepVideo?.classList.add('d-none');
                        stepImage.classList.remove('d-none');
                        stepImage.classList.add('opacity-0');
                        setTimeout(() => {
                            stepImage.src = step.imagen;
                            stepImage.classList.remove('opacity-0');
                        }, 150);
                    }
                    if (manual) {
                        resetAutoRotate();
                    }
                };

                const resetAutoRotate = () => {
                    clearInterval(autoRotate);
                    autoRotate = setInterval(() => {
                        const nextIndex = (activeIndex + 1) % steps.length;
                        activateStep(nextIndex);
                    }, 4800);
                };

                interactiveTiles.forEach(tile => {
                    tile.addEventListener('click', () => {
                        const targetIndex = parseInt(tile.dataset.stepIndex, 10);
                        if (Number.isFinite(targetIndex)) {
                            activateStep(targetIndex, true);
                        }
                    });
                });

                activateStep(0);
                resetAutoRotate();
            }

            const parallaxContainer = document.getElementById('facil-stack');
            if (parallaxContainer) {
                const layers = Array.from(parallaxContainer.querySelectorAll('.facil-layer'));
                const baseTransforms = [
                    'rotate(-18deg) translate(-30px, 10px)',
                    'rotate(-10deg) translate(10px, -8px)',
                    'rotate(-5deg) translate(40px, 0px)',
                ];
                let facilOrder = [...layers];

                const applyFacilOrder = () => {
                    facilOrder.forEach((layer, index) => {
                        layer.style.setProperty('--facil-base-transform', baseTransforms[index]);
                        layer.style.zIndex = 3 - index;
                    });
                };
                applyFacilOrder();

                layers.forEach(layer => {
                    layer.addEventListener('click', () => {
                        facilOrder = [layer, ...facilOrder.filter(l => l !== layer)];
                        applyFacilOrder();
                    });
                });

                parallaxContainer.addEventListener('mousemove', (event) => {
                    const rect = parallaxContainer.getBoundingClientRect();
                    const x = (event.clientX - rect.left) / rect.width - 0.5;
                    const y = (event.clientY - rect.top) / rect.height - 0.5;
                    layers.forEach(layer => {
                        const depth = parseFloat(layer.dataset.depth);
                        const translateX = x * depth * 40;
                        const translateY = y * depth * 25;
                        layer.style.setProperty('--facil-offset-transform', `translate(${translateX}px, ${translateY}px)`);
                    });
                });

                parallaxContainer.addEventListener('mouseleave', () => {
                    layers.forEach(layer => {
                        layer.style.setProperty('--facil-offset-transform', 'translate(0px, 0px)');
                    });
                });
            }

            const carouselTrack = document.querySelector('.testimonial-track');
            if (carouselTrack) {
                const carouselViewport = carouselTrack.parentElement;
                let carouselIndex = 0;
                const totalCards = carouselTrack.children.length;
                const gap = parseFloat(getComputedStyle(carouselTrack).gap) || 0;
                let cardWidth = 0;
                let currentTranslate = 0;
                let maxShift = 0;
                let carouselTimer = null;
                let isDragging = false;
                let dragStartX = 0;
                let dragStartY = 0;
                let baseTranslate = 0;
                let horizontalDrag = false;

                const clamp = (value, min, max) => Math.min(max, Math.max(min, value));

                const calculateCardWidth = () => {
                    const firstCard = carouselTrack.children[0];
                    if (firstCard) {
                        cardWidth = firstCard.getBoundingClientRect().width;
                    }
                };

                const calculateMaxShift = () => {
                    if (!carouselViewport) {
                        maxShift = 0;
                        return;
                    }
                    const cardPlusGap = Math.max(0, cardWidth + gap);
                    const totalWidth = Math.max(0, cardPlusGap * totalCards - gap);
                    maxShift = Math.max(0, totalWidth - carouselViewport.clientWidth);
                };

                const setTranslate = (value) => {
                    const shift = clamp(value, 0, maxShift);
                    carouselTrack.style.transform = `translateX(-${shift}px)`;
                    currentTranslate = shift;
                };

                const getVisibleCards = () => {
                    const cardPlusGap = Math.max(0, cardWidth + gap);
                    if (!cardPlusGap || !carouselViewport) {
                        return totalCards;
                    }
                    return Math.max(1, Math.floor(carouselViewport.clientWidth / cardPlusGap));
                };

                const moveCarousel = () => {
                    const visible = getVisibleCards();
                    const maxIndex = Math.max(0, totalCards - visible);
                    if (maxIndex === 0) {
                        carouselIndex = 0;
                        setTranslate(0);
                        return;
                    }
                    carouselIndex = carouselIndex >= maxIndex ? 0 : carouselIndex + 1;
                    setTranslate(carouselIndex * (cardWidth + gap));
                };

                const pauseAutoSlide = () => {
                    if (carouselTimer) {
                        clearInterval(carouselTimer);
                    }
                };

                const resumeAutoSlide = () => {
                    pauseAutoSlide();
                    carouselTimer = setInterval(moveCarousel, 4800);
                };

                const startDrag = (clientX, clientY = 0) => {
                    if (isDragging) {
                        return;
                    }
                    isDragging = true;
                    dragStartX = clientX;
                    dragStartY = clientY;
                    baseTranslate = currentTranslate;
                    horizontalDrag = false;
                    pauseAutoSlide();
                    if (carouselViewport) {
                        carouselViewport.style.cursor = 'grabbing';
                    }
                };

                const onDragMove = (clientX) => {
                    if (!isDragging) {
                        return;
                    }
                    const delta = dragStartX - clientX;
                    setTranslate(baseTranslate + delta);
                };

                const stopDrag = () => {
                    if (!isDragging) {
                        return;
                    }
                    isDragging = false;
                    horizontalDrag = false;
                    if (carouselViewport) {
                        carouselViewport.style.cursor = '';
                    }
                    const visible = getVisibleCards();
                    const maxIndex = Math.max(0, totalCards - visible);
                    const estimatedIndex = Math.round(currentTranslate / (cardWidth + gap || 1));
                    carouselIndex = clamp(estimatedIndex, 0, maxIndex);
                    setTranslate(carouselIndex * (cardWidth + gap));
                    resumeAutoSlide();
                };

                const bindPointerEvents = () => {
                    carouselTrack.addEventListener('mousedown', event => {
                        event.preventDefault();
                        startDrag(event.clientX, event.clientY);
                    });
                    carouselTrack.addEventListener('touchstart', event => {
                        const touch = event.touches[0];
                        if (!touch) {
                            return;
                        }
                        startDrag(touch.clientX, touch.clientY);
                    }, { passive: false });

                    window.addEventListener('mousemove', event => {
                        onDragMove(event.clientX);
                    });
                    window.addEventListener('touchmove', event => {
                        const touch = event.touches[0];
                        if (!touch || !isDragging) {
                            return;
                        }
                        const deltaX = Math.abs(touch.clientX - dragStartX);
                        const deltaY = Math.abs(touch.clientY - dragStartY);
                        if (!horizontalDrag && deltaX > deltaY) {
                            horizontalDrag = true;
                        }
                        if (horizontalDrag) {
                            event.preventDefault();
                            onDragMove(touch.clientX);
                        }
                    }, { passive: false });

                    window.addEventListener('mouseup', stopDrag);
                    window.addEventListener('touchend', stopDrag);
                    window.addEventListener('touchcancel', stopDrag);
                };

                const recalcLayout = () => {
                    calculateCardWidth();
                    calculateMaxShift();
                    carouselIndex = 0;
                    setTranslate(0);
                };

                recalcLayout();
                bindPointerEvents();
                resumeAutoSlide();

                window.addEventListener('resize', () => {
                    recalcLayout();
                });
            }

            const funcionaSection = document.getElementById('como-funciona');
            if (funcionaSection) {
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            funcionaSection.classList.add('como-animate');
                        }
                    });
                }, { threshold: 0.35 });
                observer.observe(funcionaSection);
            }

            const smoothScrollTo = (targetY, duration = 650) => {
                const startY = window.scrollY;
                const distance = targetY - startY;
                if (distance === 0) {
                    return;
                }
                const startTime = performance.now();

                const step = (currentTime) => {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const ease = 0.5 - Math.cos(Math.PI * progress) / 2;
                    const nextY = startY + distance * ease;
                    window.scrollTo(0, nextY);
                    if (progress < 1) {
                        requestAnimationFrame(step);
                    }
                };

                requestAnimationFrame(step);
            };

            const getNavbarHeight = () => {
                const navbar = document.querySelector('nav.navbar');
                return navbar ? navbar.offsetHeight : 0;
            };
            const heroScroll = document.querySelector('.hero-scroll');
            const scrollToServices = () => {
                const target = document.getElementById('servicios');
                if (target) {
                    const navHeight = getNavbarHeight();
                    const offset = target.getBoundingClientRect().top + window.scrollY - navHeight - 8;
                    smoothScrollTo(Math.max(0, offset));
                }
            };
            if (heroScroll) {
                heroScroll.addEventListener('click', scrollToServices);
            }

            const navElement = document.getElementById('navLanding');
            if (navElement && typeof bootstrap !== 'undefined' && typeof bootstrap.Collapse === 'function') {
            const navCollapse = new bootstrap.Collapse(navElement, { toggle: false });
            const navLinks = navElement.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', event => {
                        const href = link.getAttribute('href');
                        if (href && href.startsWith('#')) {
                            event.preventDefault();
                            const target = document.querySelector(href);
                            if (target) {
                                const navHeight = getNavbarHeight();
                                const targetOffset = target.getBoundingClientRect().top + window.scrollY - navHeight - 8;
                                smoothScrollTo(Math.max(0, targetOffset));
                            }
                        }
                        if (navElement.classList.contains('show')) {
                            navCollapse.hide();
                        }
                });
            });
            document.addEventListener('click', event => {
                if (!navElement.contains(event.target) && !event.target.closest('.navbar-toggler') && navElement.classList.contains('show')) {
                    navCollapse.hide();
                }
            });
        }

            const sectionLinks = Array.from(
                document.querySelectorAll('#navLanding .nav-link[href^="#"]:not([href="#"])')
            );
            const getSectionElement = (link) => {
                const href = link.getAttribute('href');
                if (!href) {
                    return null;
                }
                try {
                    return document.querySelector(href);
                } catch (error) {
                    return null;
                }
            };
            const sections = sectionLinks
                .map(getSectionElement)
                .filter(Boolean);

            const updateActiveSection = () => {
                if (sections.length === 0) {
                    return;
                }
                const center = window.scrollY + window.innerHeight / 2;
                let currentSection = sections[0];
                sections.forEach(section => {
                    if (section.offsetTop <= center) {
                        currentSection = section;
                    }
                });
                sectionLinks.forEach(link => {
                    const targetId = link.getAttribute('href');
                    link.classList.toggle('active-section', targetId === `#${currentSection.id}`);
                });
            };

            window.addEventListener('scroll', updateActiveSection, { passive: true });
            window.addEventListener('resize', updateActiveSection);
            updateActiveSection();

            const counterElements = Array.from(document.querySelectorAll('.servicios-contador[data-target]'));
            const liveCounterElement = document.querySelector('.servicios-contador[data-live-counter="total-services"]');
            const observerSupported = typeof IntersectionObserver !== 'undefined';
            const shouldHandleCounters = counterElements.length > 0 || liveCounterElement;

            if (shouldHandleCounters) {
                const animateContador = (element, overrideTarget = null) => {
                    const target = Number(overrideTarget ?? element.dataset.target) || 0;
                    const duration = 1300;
                    const locale = document.documentElement.lang || navigator.language || 'es-ES';
                    const formatter = new Intl.NumberFormat(locale);
                    let startTime = null;

                    const step = (timestamp) => {
                        if (!startTime) {
                            startTime = timestamp;
                        }
                        const progress = Math.min((timestamp - startTime) / duration, 1);
                        const currentValue = Math.floor(target * progress);
                        element.textContent = formatter.format(currentValue);
                        if (progress < 1) {
                            requestAnimationFrame(step);
                        } else {
                            element.textContent = formatter.format(target);
                        }
                    };

                    requestAnimationFrame(step);
                };

                let liveServicesValue = null;
                let liveCounterInView = false;
                let liveCounterAnimated = false;

                const attemptLiveCounterAnimation = () => {
                    if (!liveCounterElement || liveServicesValue === null || liveCounterAnimated) {
                        return;
                    }
                    if (observerSupported && !liveCounterInView) {
                        return;
                    }
                    liveCounterElement.dataset.animated = 'true';
                    animateContador(liveCounterElement, liveServicesValue);
                    liveCounterAnimated = true;
                };

                window.addEventListener('taxixiTotalServices', event => {
                    liveServicesValue = Number(event.detail) || 0;
                    if (liveCounterElement) {
                        liveCounterElement.dataset.target = liveServicesValue;
                    }
                    attemptLiveCounterAnimation();
                });

                const initializeObserver = () => {
                    if (!observerSupported) {
                        counterElements.forEach(el => animateContador(el));
                        return;
                    }

                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            const targetElement = entry.target;
                            if (targetElement === liveCounterElement) {
                                if (!entry.isIntersecting) {
                                    liveCounterInView = false;
                                    return;
                                }
                                liveCounterInView = true;
                                if (liveCounterAnimated) {
                                    observer.unobserve(targetElement);
                                    return;
                                }
                                if (liveServicesValue === null) {
                                    return;
                                }
                                liveCounterElement.dataset.animated = 'true';
                                animateContador(liveCounterElement, liveServicesValue);
                                liveCounterAnimated = true;
                                observer.unobserve(targetElement);
                                return;
                            }

                            if (!entry.isIntersecting) {
                                return;
                            }
                            if (targetElement.dataset.animated === 'true') {
                                observer.unobserve(targetElement);
                                return;
                            }
                            targetElement.dataset.animated = 'true';
                            animateContador(targetElement);
                            observer.unobserve(targetElement);
                        });
                    }, { threshold: 0.5 });

                    counterElements.forEach(el => observer.observe(el));
                    if (liveCounterElement) {
                        observer.observe(liveCounterElement);
                    }
                };

                initializeObserver();
            }
    });


