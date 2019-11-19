// let clickfunction01 = document.getElementById('clickme-01');
//
// clickfunction01.addEventListener('click',function()
// {
//     if(this.style.height=="100px"){
//         this.style.height = "50px";
//     }else{
//         this.style.height="100px";
//     }
// })


// let sb = document.querySelector('.sb')
// // sb.addEventListener('click', function()
// let listItems = sb.getElementsByTagName('li');
//
// for(let i=0; i<listItems.length; i++) {
//     listItems[i].addEventListener('click', function(){
//             let p = document.createElement('p')
//             p.appendChild(document.createTextNode(this.textContent));
//             document.getElementsByTagName('main')[0].appendChild(p);
//         }
//     )
// }



let sb = document.querySelector('.sb')
let listItems = sb.getElementsByTagName('li')

for (let i = 0; i < listItems.length; i++) {
    listItems[i].addEventListener('click', function() {
        let p = document.createElement('p')
        // p.textContent = this.textContent
        p.appendChild(document.createTextNode(this.textContent));
        document.getElementsByClassName('main')[0].appendChild(p)
    })
}

document
    .getElementById("rainbowButton")
    .addEventListener("click", rainbowButtonHandler);

function rainbowButtonHandler() {
    let c = 0;
    setInterval(function() {
        document.body.style.background = "hsl(" + c + ",100%,50%)";
        c++;
        if (c >= 360) {
            clearInterval(i);
            document.body.style.background = "white";
        }
    }, 10);
}

async function retrieveButtonHandler() {
    let f = await fetch('data.txt')
    let t = await f.text()
    document.getElementById('retrieved-data').textContent = t
}

document.getElementById('retrieveButton').addEventListener('click',
    retrieveButtonHandler);


let obj = {
    x: 5,
    y: 12,
    toString: function() { return "(" + this.x + ", " + this.y + ")" ; }
}

if(obj.toString()){
    console.log(obj.toString())
}

let example = document.querySelector('#imgID')

example.innerHTML= 'hijkhfajdhfljadhlfhasdfl';


/*About, pop out window*/
function basicPopup(url) {
    popupWindow = window.open(url,'popUpWindow','height=400,width=700,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
}