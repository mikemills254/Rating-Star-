var stars = document.querySelectorAll('.bi')
var star = Array.from(stars)
var rate = document.querySelector('.rate')
var currentRating;

star.forEach((element,index)=>{
    element.addEventListener('click',(e)=>{
        currentRating = star.indexOf(e.target) +1;
        star.forEach((otherstar,idx)=>{
            if(idx <= index){
                otherstar.classList.add('selected');
                rate.innerHTML = currentRating + ' star'
            }else{
                otherstar.classList.remove('selected')
            }
        })
    })
})