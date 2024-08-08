import './bootstrap'

const createPostForm = document.forms.createPost;
const createPostButton = createPostForm.elements.create;


createPostButton.addEventListener('click', (event_) => {
    event_.preventDefault();
    
    axios.post(
        `${window.origin}/blog/posts/store`,
        {
            content: createPostForm.elements.content.value,
        }
    ).then((result) => {
        console.log('request envoyé');
    })
    .catch((error) => {
        console.log('une erreur s\'est produite');
        console.error(error);
    })

})