//navbar
const bars = document.querySelector(".bar"),
close = document.querySelector(".close"),
menu = document.querySelector(".menu");

bars.addEventListener("click", () => {
    menu.classList.add("active");
    gsap.from(".menu", {
        opacity: 0,
        duration: .3
    })

    gsap.from(".menu ul", {
        opacity: 0,
        x: -300
    })
});

close.addEventListener("click", () => {
  menu.classList.remove("active")
});


// imagescroll_y
window.onload = function() {
    const container = document.getElementById('imageBox');
    let isDown = false;
    let startX;
    let scrollLeft;
  
    container.addEventListener('mousedown', (e) => {
      isDown = true;
      startX = e.pageX - container.offsetLeft;
      scrollLeft = container.scrollLeft;
      e.preventDefault(); //prot teks
    });
  
    container.addEventListener('mouseup', () => {
      isDown = false;
    });
  
    container.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - container.offsetLeft;
      const walk = (x - startX) * 0.5; //kec scroll
      container.scrollLeft = scrollLeft - walk;
    });
  };
  



document.querySelector('.fa-bars').addEventListener('click', function() {
    document.querySelector('.menu').classList.add('active');
    document.body.classList.add('no-scroll');
});
document.querySelector('.fa-close').addEventListener('click', function() {
    document.querySelector('.menu').classList.remove('active');
    document.body.classList.remove('no-scroll');
});


  
  
