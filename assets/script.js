window.addEventListener('click', (e) => {
    const isValid = e.target.classList.contains('card-btn');
    if (isValid) {
        const parent = e.target.parentElement;
    }
});

const tolak = document.getElementById('tolak');
if (tolak){
    tolak.addEventListener('click', (e) => {
        e.preventDefault();

        const expire = new Date();
        expire.setTime(expire.getTime() + (60*60*24*7*1000));

        document.cookie = "tolak=yes; expires=" + expire.toUTCString();
        modal.classList.remove('open');
    })

}

function addHist(el) {
    
    const id = el.getAttribute('data-id');
    const judul = el.getElementsByClassName('card-head')[0].innerText;
    const isi = el.getElementsByClassName('card-body')[0].innerText;
    const histItem = {
        id,
        judul,
        isi
    };

    if (localStorage.getItem('arrOfHyst') !== null) {
        let histories = JSON.parse(localStorage.arrOfHyst);
        histories.push('hyst' +id);
        histories = [... new Set(histories)];
        
        localStorage.setItem('arrOfHyst', JSON.stringify(histories));
    } else {
        localStorage.setItem('arrOfHyst', JSON.stringify(['hyst'+id]));
    }

    localStorage.setItem('hyst' + id, JSON.stringify(histItem));

    histRender();

}

function histRender( ) {
    const historyBuck = document.getElementById('history-buck');
    let template = '';
    if (localStorage.arrOfHyst !== null) {
        
        let histories = JSON.parse(localStorage.arrOfHyst);
        histories = [...new Set(histories)];
        histories.forEach(element => {
            const hist = JSON.parse(localStorage.getItem(element));
            template += `
            <div style="border:solid 1px gray; margin:2px">
                <h5 style="margin:0">${hist.judul}</h5>
                <p style="margin:0">${hist.judul}</p>
            </div>
            `
        });

        historyBuck.innerHTML = template;
    }
}


histRender();