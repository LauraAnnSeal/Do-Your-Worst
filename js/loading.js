

let loadingMessage = document.querySelector('#loading-message h2')
const loadingMessages = [
    'Loading',
    'Loading.',
    'Loading..',
    'Loading...',
]
let spot = 0
    const loadingMessageInterval = setInterval(() => {
        loadingMessage.innerText = loadingMessages[spot]
        spot ++
        if (spot > 3){spot = 0}
    }, 500);
    
    
    
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            if(sessionStorage.getItem('visited') && !page === 'Home'){
                document.querySelector("body").style.visibility = "hidden";
                document.querySelector("#loading-screen").style.visibility = "visible";
            }
        } else if(document.readyState === "complete") {
            document.querySelector("#loading-screen").style.display = "none";
            document.querySelector("body").style.visibility = "visible";
             clearInterval(loadingMessageInterval)
        }
    };

