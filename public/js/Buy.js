
window.addEventListener('click', function (event) {

    if (event.target.hasAttribute('data-cart')) {

        const card = event.target.closest('.content_item');

        const productInfo = {
            id: card.dataset.id,
            imgSrc: card.querySelector('.content_icon').getAttribute('src'),
            title: card.querySelector('.content_title').innerText,
            price: card.querySelector('.content_text').innerText,
        };


        sessionStorage.setItem('idStorage', productInfo.id);
        sessionStorage.setItem('imgSrcStorage', productInfo.imgSrc);
        sessionStorage.setItem('titleStorage', productInfo.title);
        sessionStorage.setItem('textStorage', productInfo.price);

        const idStorage = sessionStorage.getItem('idStorage');
        const imgSrcStorage = sessionStorage.getItem('imgSrcStorage');
        const titleStorage = sessionStorage.getItem('titleStorage');
        const textStorage = sessionStorage.getItem('textStorage');


        console.log(infoStorage);

    }

})

