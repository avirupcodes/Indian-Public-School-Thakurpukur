import './bootstrap';


// const menuBtn = document.getElementById('menuBtn');
//         const closeBtn = document.getElementById('closeBtn');
//         const sidebar = document.getElementById('sidebar');
//         const overlay = document.getElementById('overlay');
//         const header = document.getElementById('header');

//         // Open sidebar
//         menuBtn.addEventListener('click', () => {
//             document.body.classList.add('sidebar-open');
//             overlay.classList.remove('hidden');
//             overlay.classList.add('overlay-enter');
//             sidebar.classList.remove('translate-x-full');
//             sidebar.classList.add('sidebar-enter');
            
//             setTimeout(() => {
//                 overlay.classList.remove('opacity-0');
//             }, 10);
//         });

//         // Close sidebar
//         function closeSidebar() {
//             overlay.classList.add('opacity-0');
//             overlay.classList.add('overlay-exit');
//             sidebar.classList.add('translate-x-full');
//             sidebar.classList.add('sidebar-exit');
            
//             setTimeout(() => {
//                 document.body.classList.remove('sidebar-open');
//                 overlay.classList.add('hidden');
//                 overlay.classList.remove('overlay-enter', 'overlay-exit');
//                 sidebar.classList.remove('sidebar-enter', 'sidebar-exit');
//             }, 300);
//         }

//         closeBtn.addEventListener('click', closeSidebar);
//         overlay.addEventListener('click', closeSidebar);

//         // Header scroll shadow
//         window.addEventListener('scroll', () => {
//             if (window.scrollY > 10) {
//                 header.classList.add('shadow-md');
//             } else {
//                 header.classList.remove('shadow-md');
//             }
//         });

//         // Close sidebar on escape key
//         document.addEventListener('keydown', (e) => {
//             if (e.key === 'Escape' && !sidebar.classList.contains('translate-x-full')) {
//                 closeSidebar();
//             }
//         });









    const menuBtn = document.getElementById('menuBtn');
    const closeBtn = document.getElementById('closeBtn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    menuBtn.onclick = () => {
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
    };

    function closeSidebar() {
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    }

    closeBtn.onclick = closeSidebar;
    overlay.onclick = closeSidebar;

    document.querySelectorAll('.toggleSub').forEach(btn => {
        btn.addEventListener('click', () => {
            btn.nextElementSibling.classList.toggle('hidden');
        });
    });

    // hero carousel js
    const slides = document.querySelectorAll('.carousel-slide');
let index = 0;

function showSlide(i) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[i].classList.add('active');
}

setInterval(() => {
    index = (index + 1) % slides.length;
    showSlide(index);
}, 5000);





// <!-- Counter Animation Script -->
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 300; // lower is faster

    counters.forEach(counter => {
        const animate = () => {
            const value = +counter.getAttribute('data-target');
            const data = +counter.innerText;
            const time = value / speed;

            if (data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 20);
            } else {
                counter.innerText = value + "+";
            }
        };

        // Trigger when on screen
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animate();
                    observer.unobserve(counter);
                }
            });
        }, { threshold: 0.6 });

        observer.observe(counter);
    });
});


// scroll to top js
(function () {
  const btn = document.getElementById('scrollToTop');
  if (!btn) return;

  const showAt = 300; // px scrolled before showing button

  // Show/hide on scroll
  function onScroll() {
    if (window.scrollY > showAt) {
      btn.classList.remove('hidden', 'scale-90', 'opacity-0');
      btn.classList.add('scale-100', 'opacity-100');
    } else {
      btn.classList.add('opacity-0', 'scale-90');
      // keep it in DOM but hidden so it's accessible for screen readers only when visible
      setTimeout(() => {
        if (window.scrollY <= showAt) btn.classList.add('hidden');
      }, 200); // allow transition to finish
    }
  }

  // Scroll to top (respect reduced motion)
  function scrollToTop() {
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) {
      window.scrollTo(0, 0);
    } else {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  }

  // keyboard accessibility: Enter/Space
  btn.addEventListener('click', scrollToTop);
  btn.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      scrollToTop();
    }
  });

  // small show animation classes (Tailwind utility combos)
  btn.classList.add('transition-all', 'duration-200', 'ease-out', 'opacity-0', 'scale-90');

  window.addEventListener('scroll', onScroll, { passive: true });

  // initialize visibility (in case page loaded scrolled)
  onScroll();
})();



// admission open floating button js start

document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.getElementById('admissionWrapper');
    const btn = document.getElementById('admissionBtn');
    const form = document.getElementById('admissionForm');
    
    let isOpen = false;
    let isHovering = false;
    
    // Open form function
    function openForm() {
        isOpen = true;
        btn.style.transform = 'translateX(-360px)';
        form.style.transform = 'translateX(-240px)';
        form.style.opacity = '1';
        form.style.pointerEvents = 'auto';
        form.style.scale = '1';
    }
    
    // Close form function
    function closeForm() {
        isOpen = false;
        btn.style.transform = 'translateX(0)';
        form.style.transform = 'translateX(120%)';
        form.style.opacity = '0';
        form.style.pointerEvents = 'none';
        form.style.scale = '0.95';
    }
    
    // Click to toggle
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        if (isOpen) {
            closeForm();
        } else {
            openForm();
        }
    });
    
    // Hover behavior
    wrapper.addEventListener('mouseenter', function() {
        isHovering = true;
        if (!isOpen) {
            openForm();
        }
    });
    
    wrapper.addEventListener('mouseleave', function() {
        isHovering = false;
        // Small delay before closing on hover out
        setTimeout(() => {
            if (!isHovering && isOpen) {
                closeForm();
            }
        }, 300);
    });
    
    // Click outside to close
    document.addEventListener('click', function(e) {
        if (isOpen && !wrapper.contains(e.target)) {
            closeForm();
        }
    });
    
    // Prevent form clicks from closing
    form.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});

    // admission open floating button js end


  // flip card in digital diaries section js start
    document.addEventListener('DOMContentLoaded', function() {
            // Click toggle for mobile devices
            const flipCards = document.querySelectorAll('[data-flip-card]');
            
            flipCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    // Only toggle on click for mobile/tablet
                    if (window.innerWidth < 768) {
                        e.preventDefault();
                        this.classList.toggle('flipped');
                    }
                });
            });
        });

  // flip card in digital diaries section js end


  // js for popup
  // SHOW AFTER 3 SECONDS
    setTimeout(() => {
        const overlay = document.getElementById("popupOverlay");
        overlay.classList.remove("opacity-0", "invisible");
    }, 3000);

    // CLOSE POPUP
    document.getElementById("closePopup").addEventListener("click", () => {
        const overlay = document.getElementById("popupOverlay");
        overlay.classList.add("opacity-0");
        setTimeout(() => overlay.classList.add("invisible"), 400);
    });



    // flip card blog js
document.querySelectorAll('.flip-card-container').forEach(card => {
    card.addEventListener('click', () => {
        card.classList.toggle('active');
    });
});
