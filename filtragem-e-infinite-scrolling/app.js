let pagina = 1;

const postsContainer = document.querySelector('#posts-container');
const loaderContainer = document.querySelector('.loader');
const filterInput = document.querySelector('#filter');



/* função que busca post*/

const getPosts = async () => {
    const response = await fetch(`https://jsonplaceholder.typicode.com/posts?_limit=5&_page=${pagina}`);
    //    const data = await response.json(); //espera a promise ser resolvida e atribui o valor da promise a variavel data;
    return response.json();

}




const addPostsIntoDom = async () => {
    const posts = await getPosts();
    //percorrer e copiar cada item do array, executar uma transformação em cada um desses itens, retornando um novo array, sem modificar o original

    const postsTemplate = posts.map(({ id, title, body }) => {
        return `
            <div class="post">
                <div class="number">${id}</div>
                <div class="post-info">
                    <h2 class="post-title">${title}</h2>
                    <p class="post-body">${body}</p>
                </div>
            </div>
        `
    }).join('') // retorna uma string com todos itens do array concatenados e com virgula, usando vazio retira a virgula

    postsContainer.innerHTML += postsTemplate;
}

addPostsIntoDom();


const getNextPosts = () =>{
    pagina++;
    addPostsIntoDom();

}

const removeLoader = () =>{
    setTimeout(() =>{
        loaderContainer.classList.remove('show');
        getNextPosts();
    }, 1000)
}


const showLoader = () =>{
    loaderContainer.classList.add('show');
    removeLoader();
}



window.addEventListener('scroll', () => {
    const { clientHeight, scrollHeight, scrollTop } = document.documentElement;

    const isPageBottomAlmostReached = scrollTop + clientHeight >= scrollHeight - 10;
    if(isPageBottomAlmostReached) {
        showLoader();
    } 

})


filterInput.addEventListener('input', (event)=>{
   const inputValue = event.target.value.toLowerCase();
   const posts = document.querySelectorAll('.post');
   posts.forEach((post)=>{
      const postTitle = post.querySelector('.post-title').textContent.toLowerCase();
      const postBody = post.querySelector('.post-body').textContent.toLowerCase();

      if(postTitle.includes(inputValue) || postBody.includes(inputValue)){
          post.style.display="flex";
          return // faz função parar de ser executada
      } 

      post.style.display = 'none';
   })
});