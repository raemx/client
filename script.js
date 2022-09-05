const texts = ['INVESTOR', 'ENTREPRENEUR', 'TV PRODUCER', 'DIRECTOR'];
let count = 0;
let index = 0;
let text = "";
let l = "";

(function type(){
    if (count === texts.length){
        count =0;
    }
    text = texts[count]
    l = text.slice(0, ++index);

    document.querySelector(".typing").textContent = l;
    if (l.length === text.length){
        count++;
        index = 0;
    }
    setTimeout(type, 400);
}());
