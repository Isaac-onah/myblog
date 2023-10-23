document.getElementById('nextzar').onclick = function(){
    let lists = document.querySelectorAll('.itemzar');
    document.getElementById('slizar').appendChild(lists[0]);
}
document.getElementById('prevzar').onclick = function(){
    let lists = document.querySelectorAll('.itemzar');
    document.getElementById('slizar').prepend(lists[lists.length - 1]);
}

// Function to go to the next item
function nextItem() {
    let lists = document.querySelectorAll('.itemzar');
    document.getElementById('slizar').appendChild(lists[0]);
  }

// Set up a timer to automatically go to the next item
const autoSlideInterval = 5000; // Adjust the interval as needed (in milliseconds)
let autoSlideTimer = setInterval(nextItem, autoSlideInterval);

