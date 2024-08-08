import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allow your team to quickly build robust real-time web applications.
 */

import './echo';

window.Echo.private('new-post')
    .listen('.post.created', (result) => {
            /**
             * @var Object result
             * resultat de la requete de la forme:
             * {
             *     userId: int, 
             *     userName: string, 
             *     userFirstname: string, 
             *     postContent: string, 
             *     postReactionPositive: int, 
             *     postReactionNegative: int, 
             * }
             */

            /**
             * Code pour l'ajout d'un nouveau post 
             * ICI
             */
                
            console.log(result);
    })


