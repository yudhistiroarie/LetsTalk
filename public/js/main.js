$(function() {
    "use strict";
    
    /**
    * Easy selector helper function
    */
    const select = (el, all = false) => {
        el = el.trim()
        if(all) return [...document.querySelectorAll(el)]
        else return document.querySelector(el)
    }
    
    /**
    * Easy event listener function
    */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if(selectEl) {
            if(all) selectEl.forEach(e => e.addEventListener(type, listener))
            else selectEl.addEventListener(type, listener)
        }
    }
    
    /**
    * Easy on scroll event listener 
    */
    const onscroll = (el, listener) => {el.addEventListener("scroll", listener)}
    
    /**
    * Navbar links active state on scroll
    */
    let navbarlinks = select("#navbar .scrollto", true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        
        // var $navlink
        // var href = $(".nav-link.active").attr("href")
        // console.log(href)
        navbarlinks.forEach(navbarlink => {
            if(!navbarlink.hash) return
            
            let section = select(navbarlink.hash)
            if(!section) return
            
            if(position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add("active")
                
                // $navlink = $(navbarlink)
                // if(href != $navlink.attr("href"))
                //     menu_indicator($navlink)
                
            } else navbarlink.classList.remove("active")
        })
        
    }
    window.addEventListener("load", navbarlinksActive)
    onscroll(document, navbarlinksActive)
    
    /**
    * Scrolls to an element with header offset
    */
    const scrollto = (el) => {
        let header = select("#header")
        let offset = header.offsetHeight
        
        if(!header.classList.contains("header-scrolled"))
            offset -= 20
        
        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos - offset,
            behavior: "smooth"
        })
    }
    
    /**
    * Toggle .header-scrolled class to #header when page is scrolled
    */
    let selectHeader = select("#header")
    if(selectHeader) {
        const headerScrolled = () => {
            if(window.scrollY > 100)
                selectHeader.classList.add("header-scrolled")
                
            else
                selectHeader.classList.remove("header-scrolled")
        }
        
        window.addEventListener("load", headerScrolled)
        onscroll(document, headerScrolled)
    }
    
    /**
    * Back to top button
    */
    let backtotop = select(".back-to-top")
    if(backtotop) {
        const toggleBacktotop = () => {
            if(window.scrollY > 100)
                backtotop.classList.add("active")
                
            else
                backtotop.classList.remove("active")
        }
        
        window.addEventListener("load", toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }
    
    /**
    * Mobile nav toggle
    */
    on("click", ".mobile-nav-toggle", function(e) {
        select("#navbar").classList.toggle("navbar-mobile")
        this.classList.toggle("bi-list")
        this.classList.toggle("bi-x")
    })
    
    /**
    * Mobile nav dropdowns activate
    */
    on("click", ".navbar .dropdown > a", function(e) {
        if(select("#navbar").classList.contains("navbar-mobile")) {
            e.preventDefault()
            this.nextElementSibling.classList.toggle("dropdown-active")
        }
    }, true)
    
    /**
    * Scroll with ofset on links with a class name .scrollto
    */
    on("click", ".scrollto", function(e) {
        if(select(this.hash)) {
            e.preventDefault()
            
            let navbar = select("#navbar")
            if(navbar.classList.contains("navbar-mobile")) {
                navbar.classList.remove("navbar-mobile")
                
                let navbarToggle = select(".mobile-nav-toggle")
                navbarToggle.classList.toggle("bi-list")
                navbarToggle.classList.toggle("bi-x")
            }
            
            scrollto(this.hash)
        }
    }, true)
    
    /**
    * Scroll with ofset on page load with hash links in the url
    */
    window.addEventListener("load", () => {
        if(window.location.hash && select(window.location.hash))
            scrollto(window.location.hash)
    });
    
    /**
    * Porfolio isotope and filter
    */
    window.addEventListener("load", () => {
        let portfolioContainer = select(".portfolio-container");
        if(portfolioContainer) {
            let portfolioIsotope = new Isotope(portfolioContainer, {
                itemSelector: ".portfolio-item",
                layoutMode: "fitRows"
            });
            
            let portfolioFilters = select("#portfolio-flters li", true);
            
            on("click", "#portfolio-flters li", function(e) {
                e.preventDefault();
                portfolioFilters.forEach(function(el) {
                    el.classList.remove("filter-active");
                });
                this.classList.add("filter-active");
                
                portfolioIsotope.arrange({
                    filter: this.getAttribute("data-filter")
                });
                portfolioIsotope.on("arrangeComplete", function() {
                    AOS.refresh()
                });
            }, true);
        }
    });
    
    /**
    * Initiate portfolio lightbox 
    */
    const portfolioLightbox = GLightbox({
        selector: ".portfolio-lightbox"
    });
    
    /**
    * Portfolio details slider
    */
    new Swiper(".portfolio-details-slider", {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true
        }
    });
    
    /**
    * Animation on scroll
    */
    // window.addEventListener("load", () => {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false
        })
    // });
// })()

// $(function() {
    /**
     * wireframe particles
     */
    $("#hero").jParticle({
        background: "transparent",
        color: "#606161",
    });
    
    /**
     * glassy worm particles
     */
    $("#call-to-action").glassyWorms({
        colors: ["#484A4A"],
    })
    
    /**
     * bullet particles
     */
    particlesJS("footer", {
        "particles": {
            "number": {
                "value": 160,
                "density": {
                    "enable": true,
                    "value_area": 800,
                }
            },
            "color": {
                "value": "#efc94f"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 1,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 1,
                    "opacity_min": 0,
                    "sync": false
                }
            },
            "size": {
                "value": 2,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 7.308694910712106,
                    "size_min": 21.926084732136317,
                    "sync": true
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": true,
                    "rotateX": 600,
                    "rotateY": 600
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": false,
                    "mode": "repulse"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 119.88011988011988,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 250,
                    "size": 0,
                    "duration": 2,
                    "opacity": 0,
                    "speed": 3
                },
                "repulse": {
                    "distance": 400,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
    
    particlesJS("header", {
        "particles": {
            "number": {
                "value": 160,
                "density": {
                    "enable": true,
                    "value_area": 800,
                }
            },
            "color": {
                "value": "#efc94f"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 1,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 1,
                    "opacity_min": 0,
                    "sync": false
                }
            },
            "size": {
                "value": 2,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 7.308694910712106,
                    "size_min": 21.926084732136317,
                    "sync": true
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": true,
                    "rotateX": 600,
                    "rotateY": 600
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": false,
                    "mode": "repulse"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 119.88011988011988,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 250,
                    "size": 0,
                    "duration": 2,
                    "opacity": 0,
                    "speed": 3
                },
                "repulse": {
                    "distance": 400,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
    
    /**
     * menu indicator
     */
    // $(".navbar a").on("click", function() {
    //     menu_indicator($(this))
    // })
    
    // function menu_indicator(e) {
    //     if(!e) return false
        
    //     var position = e.parent().position()
    //     var width = e.parent().width()
        
    //     $(".navbar .nav-indicator").css({opacity: 1, left: +position.left, width: width})
    // }
    
    // var currentWidth = $(".navbar").find("li:nth-of-type(1) a").parent("li").width()
    // var current = $("li:nth-of-type(1) a").position()
    // $(".navbar .nav-indicator").css({ left: +current.left, width: currentWidth })
})
