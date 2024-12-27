const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 400,
});

sr.reveal('.main-story', { origin: 'left', distance: '100px', interval: 200 });
sr.reveal('.story', { origin: 'right', distance: '100px', interval: 200 });
