const stars = document.querySelectorAll('.star')

const ratingContainer = document.querySelector('.rating')
const inputRate = document.getElementById('rating')
stars.forEach((star) => {
    star.addEventListener('click', setRating)
})

function setRating(event){
    const selectedStar = event.currentTarget
    const rating = selectedStar.getAttribute('data-rating')

    stars.forEach((star) => {
        if(star.getAttribute('data-rating') <= rating){
            star.classList.add('selected')
        } else{
            star.classList.remove('selected')
        }
        star.classList.remove('rate')

        if(star.getAttribute('data-rating') == rating){
            star.classList.add('rate')
            inputRate.value = rating
        }
    })
}