// function riempi(num){
  
//   const principale = document.querySelector('#main');
//   let element;
//   for(let i = 0; i<=num;i++){
//      element = createImage(i%12);
//       principale.appendChild(element);
     
//   }

//   console.log(principale.dataset.message);
// }
function createImage(src) {
    
  const image = document.createElement('img');
  image.src = src;
  image.dataset.message = 'immagine creata'
  return image;
}

function onThumbnailClick(event) {
  const image = createImage(event.currentTarget.src);
  modalView.appendChild(image);
  modalView.classList.remove('hidden');
}

function onModalClick() {
  modalView.classList.add('hidden');
  modalView.innerHTML = '';
}

// Main
function riempi(){
const albumView = document.querySelector('#vista_album');
for (let i = 0; i < ALBUM.length; i++) {
  const photoSrc = ALBUM[i];
  const image = createImage(photoSrc);
  image.addEventListener('click', onThumbnailClick);
  let divv = document.createElement('div');
  divv.appendChild(image)
  let like = document.createElement('div');
  like.addEventListener('click', agglike);
  let cuore = document.createElement('img');
cuore.src = 'like.png';
  like.appendChild(cuore);
  
  divv.appendChild(like);
  //
  let save = document.createElement('div');
  save.addEventListener('click', aggsave);
  let salva = document.createElement('img');
salva.src = 'save.png';
  save.appendChild(salva);
  divv.appendChild(save);
  //
  albumView.appendChild(divv);
}
}
riempi();

function agglike(evento){
 const bottone = evento.currentTarget;
 const img = bottone.childNodes[0];
 img.src = 'likered.png';
 const immagine = bottone.parentNode.childNodes[0];
 console.log(immagine);
 bottone.removeEventListener('click', agglike);
 bottone.addEventListener('click', toglilike);
 const l = immagine.src;
  fetch('aggLike.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'l=' + l
    });
 evento.stopPropagation();

}
function toglilike(evento){
  const bottone = evento.currentTarget;
  const img = bottone.childNodes[0];
  img.src = 'like.png';
  bottone.removeEventListener('click', toglilike);
  bottone.addEventListener('click', agglike);
  const immagine = bottone.parentNode.childNodes[0];
  const l = immagine.src;
  fetch('togliLike.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'l=' + l
    });
  evento.stopPropagation();
}






function aggsave(evento){
 const bottone = evento.currentTarget;
 const img = bottone.childNodes[0];
 img.src = 'savered.png';
 const immagine = bottone.parentNode.childNodes[0];
 console.log(immagine);
 bottone.removeEventListener('click', aggsave);
 bottone.addEventListener('click', toglisave);
 const l = immagine.src;
  fetch('aggSave.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'l=' + l
    });
 evento.stopPropagation();

}
function toglisave(evento){
  const bottone = evento.currentTarget;
  const img = bottone.childNodes[0];
  img.src = 'save.png';
  bottone.removeEventListener('click', toglisave);
  bottone.addEventListener('click', aggsave);
  const immagine = bottone.parentNode.childNodes[0];
  const l = immagine.src;
  fetch('togliSave.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'l=' + l
    });
  evento.stopPropagation();
}

/*const modalView = document.querySelector('#modal-view');
modalView.addEventListener('click', onModalClick);*/


 //__________________________________________________________________
  function generate(event){
    
    event.preventDefault();
 fetch('foto.php')
 .then(onRes)
 .then(onJson);
 
}

function onRes(res){
    return res.json();
}

function onJson(json){
    console.log(json);
    const div = document.querySelector('#main2');
    div.innerHTML = '';
    const img = document.createElement('img');
    img.src = json.urls.small;
    div.appendChild(img);
}
document.querySelector('#f').addEventListener('submit', generate);
//__________________________________________________________________
//__________________________________________________________________

function article(){

   
    fetch('news.php')
    .then(onRes)
    .then(onJsonNews);

}

function onJsonNews(json){
    console.log(json.data);
    const div =  document.querySelector('#main3');
    div.innerHTML = '';
    for(let item of json.data){
        const post = document.createElement('div');
        const titolo = document.createElement('h4');
        const par = document.createElement('p');
        const img = document.createElement('img');
        titolo.append('['+item.categories+'] '+item.title+':');
        par.append(item.description);
        post.appendChild(titolo);
        post.appendChild(par);
        img.src = item.image_url;
        post.appendChild(img);
        div.appendChild(post);
    }
    
}

article();
  