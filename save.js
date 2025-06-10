function riempi(){
    fetch("prendiSalva.php").then(onSucc, onErr).then(onJson);
}

function onErr(err){
    console.log('errore ->'+err);
}
function onSucc(res){
    return res.json();
}

function onJson(json){
    if(json !== null){
        const principale = document.querySelector('#mainPref');
         let element;
        for(let i = 0; i<json.length; i++){
           
             element = creaFiglioPost( json[i].link);
             principale.appendChild(element);
        }
    }

}

function creaFiglioPost(u){
    let classe1 = "post";
   
    let element = document.createElement('div');
    element.classList.add(classe1);
    element.style.backgroundImage = 'url('+ u+')';
    

    return element;
}
riempi();
