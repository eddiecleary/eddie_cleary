// Nav
const navBtn = document.getElementById('hamburger');
const nav = document.getElementById('nav');
const main = document.getElementsByTagName('main');

console.log(main);

navBtn.addEventListener('click', () => {
    navBtn.classList.toggle('is-active');
    nav.classList.toggle('hidden');
    nav.classList.toggle('-mb-12');
    main[0].classList.toggle('mt-16');
});

// Register GSAP Plugins if loaded
if (typeof ScrollTrigger != "undefined") {
    gsap.registerPlugin(ScrollTrigger);
}
if (typeof MotionPathPlugin != "undefined") {
    gsap.registerPlugin(MotionPathPlugin);
}

// GSAP Line
if (typeof MotionPathPlugin != "undefined") {
    const tlLine = gsap
    .timeline({
        defaults: {
            duration: 0.05,
            autoAlpha: 1,
            transformOrigin: 'center',
        },
    })
        .to("#scrubcircle", { ease: 'none', duration: 0.0001 }, 0.001)
        .from("#circle1", { scale: 0 }, 0.08)
            .from("#circle2", { scale: 0 }, 0.25)
            .from("#circle3", { scale: 0 }, 0.43)
            .from("#circle4", { scale: 0 }, 0.6)
            .from("#circle5", { scale: 0 }, 0.76)
            .to("#scrubcircle", { autoAlpha: 0, ease: "none", duration: 0.001 }, 0.98);

    const scrub = gsap
    .timeline({
        defaults: { duration: 1, ease: "none" },
        scrollTrigger: {
            trigger: "#thesvg",
            scrub: 0.3,
            start: "top 65%",
            end: "bottom 75%",
        },
        })
        .to("#scrubcircle", {
        ease: "none",
        motionPath: {
            path: "#theline",
            align: "#theline",
            alignOrigin: [0.5, 0.5],
        },
        })
        .add(tlLine, 0);
}

//GSAP Resumé
const tlResume = gsap.timeline({
    scrollTrigger: {
    trigger: '#resume',
    start: 'top 80%',
    toggleActions: 'restart none none none',
    },
})
.from('#title', { scaleX: 0, duration: 0.35 })
.from('#heading1', {
    scale: 0,
    transformOrigin: 'center',
    ease: 'elastic.out(1, 0.7)',
    duration: 0.35,
})
.from('#p1', { scaleX: 0, duration: 0.35 }, '-=0.2')
.from('#p2', { scaleX: 0, duration: 0.35 }, '-=0.35')
.from('#heading2', {
    scale: 0,
    transformOrigin: 'center',
    ease: 'elastic.out(1, 0.6)',
    duration: 0.35,
})
.from('#p3', { scaleX: 0, duration: 0.35 }, '-=0.2')
.from('#p4', { scaleX: 0, duration: 0.35 }, '-=0.35')
.from(
    '#btnLeft',
    { scaleX: 0, transformOrigin: 'center', duration: 0.25 },
    '+=0.2'
)
.from(
    '#btnRight',
    {
    scale: 0,
    transformOrigin: 'center',
    ease: 'elastic.out(1, 0.5)',
    duration: 0.45,
    },
    '+=0.07'
);
