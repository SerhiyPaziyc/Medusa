
var data = sessionStorage.getItem('infoStorage')

document.querySelector('.content_item_buy').innerHTML = `<div class="content_item_buy" data-id="${sessionStorage.getItem('idStorage')}" >
            <img class="content_icon_buy" src="${sessionStorage.getItem('imgSrcStorage')}" alt="">
            <h4 id="out" class="content_title" >${sessionStorage.getItem('titleStorage')}</h4>
            <div class="content_text">${sessionStorage.getItem('textStorage')}</div>
        </div>`;
