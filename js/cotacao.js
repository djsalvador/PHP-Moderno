/* COTAÇÃO   */

const btnCot = document.getElementById('btnCot')

btnCot.addEventListener('click', function () {
    cotacao(document.getElementById('cot').value);
    document.getElementById("cot3").innerHTML = "";
})

function cotacao(cot) {
    fetch(`https://economia.awesomeapi.com.br/json/last/USD-BRL`)
        .then((response) => {
            return response.json()
        })
        .then((res) => {
            let p1 = document.createElement('p')
            
            let cott = document.createTextNode(`${res.low}`);
            p1.appendChild(cott);

            document.getElementById('cot').appendChild(p1)
        })
}
