const loader = document.querySelector('.loader');

function loadingPage() {

    window.addEventListener('load', (e) => {

        if (loader !== null) {
            loader.classList.add('hidden');
        }

    });

}

loadingPage();