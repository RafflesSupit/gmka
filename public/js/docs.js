document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.content-section');
    const faqQuestions = document.querySelectorAll('.faq-question');
    const searchInput = document.getElementById('searchInput');


    function setActiveSection(hash) {
        sections.forEach(section => {
            if (section.id === hash) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const target = this.getAttribute('href').substring(1);
            setActiveSection(target);

            if (this.nextElementSibling && this.nextElementSibling.classList.contains('submenu')) {
                this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block';
            }
        });
    });

    faqQuestions.forEach(question => {
        question.addEventListener('click', function () {
            var answer = this.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        });
    });


    searchInput.addEventListener('input', function () {
        const searchTerm = this.value.trim().toLowerCase();

        sections.forEach(section => {
            const h2Elements = section.querySelectorAll('h2');
            let sectionMatch = false;

            h2Elements.forEach(element => {
                const text = element.textContent.trim().toLowerCase();
                if (text.includes(searchTerm)) {
                    sectionMatch = true;
                }
            });

            if (sectionMatch) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });

        if (searchTerm === '') {
            sections.forEach(section => {
                section.style.display = ''; 
            });

            setActiveSection('introduction');
        }
    });

    if (location.hash) {
        setActiveSection(location.hash.substring(1));
    } else {
        setActiveSection('introduction');
    }
});
