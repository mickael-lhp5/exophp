var recupJs = document.getElementsByClassName('recupJs');
var recupJsArray = [...recupJs];

console.log(recupJsArray);

recupJsArray.forEach(element => {
    element.addEventListener('blur', function (){
        element.classList.remove ('addBgColor');
        console.log('ok');
    });
    element.addEventListener('click', function () {

        element.classList.toggle('addBgColor');

    })

});