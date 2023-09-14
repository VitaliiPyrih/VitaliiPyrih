window.addEventListener('DOMContentLoaded', function () {

    const sunIcon = document.querySelector('.sun')
    const moonIcon = document.querySelector('.moon')

    const userTheme = localStorage.getItem('theme');
    const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches

    const iconToggle = () => {
        sunIcon.classList.toggle('display-none')
        moonIcon.classList.toggle('display-none')
    }
    const themeCheck = () => {
        if (userTheme === 'dark' || (!userTheme && systemTheme)) {
            document.documentElement.classList.add('dark')
            moonIcon.classList.add('display-none')
            return
        }
        sunIcon.classList.add('display-none')
    }

    const themeSwitch = () => {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark')
            localStorage.setItem('theme', 'light');
            iconToggle();
            return
        }
        document.documentElement.classList.add('dark')
        localStorage.setItem('theme', 'dark');
        iconToggle();
    }

    sunIcon.addEventListener('click', (e) => {
        e.preventDefault()
        themeSwitch()
    })

    moonIcon.addEventListener('click', (e) => {
        e.preventDefault()
        themeSwitch()
    })

    themeCheck()

// Отримайте потрібні елементи з DOM
    const currentLang = document.querySelector('.current');
    const optionList = document.querySelector('.option');

    const allFlag = document.querySelectorAll('.option .lang')
    const current = document.querySelector('.current').getAttribute('data-lang');

    currentLang.children[0].src = `/assets/img/${current}-flag-icon.svg`;


    currentLang.addEventListener('click', () => {
        optionList.classList.toggle('hidden');
        Array.from(allFlag).forEach(e => {
            if (e.getAttribute('data-lang') === current) {
                e.classList.add('hidden')
            } else {
                e.classList.remove('hidden')
            }
            e.removeEventListener('click', clickHandler);
            e.addEventListener('click', clickHandler);
        })
    });

    function clickHandler(e) {
        e.preventDefault();
        const parent = e.target.parentNode;
        const dataLang = parent.getAttribute('data-lang');


// Отримайте поточний URL сторінки
        const currentUrl = window.location.href;

        // Розбийте URL на базову частину і параметри
        const urlParts = currentUrl.split('?');
        const baseUrl = urlParts[0];
        let queryParams = '';


        if (urlParts.length > 1) {
            const params = urlParts[1].split('&');
            params.forEach(param => {
                const paramParts = param.split('=');
                if (paramParts[0] !== 'lang') {
                    queryParams += `${paramParts[0]}=${paramParts[1]}&`;
                }
            });
        }

        queryParams += `lang=${dataLang}`;

        window.location.href = `${baseUrl}?${queryParams}`;

        optionList.classList.add('hidden');
    }
})
