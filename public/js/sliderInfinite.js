const spans = document.querySelectorAll('.pl-5 span'); // get all spans inside the div

let currentIndex = 0; // set the current index to 0

function showSpan(index) {
  // hide all spans
  spans.forEach(span => {
    span.classList.add('hidden');
  });

  // show the span at the specified index
  spans[index].classList.remove('hidden');
}

showSpan(currentIndex); // show the first span

setInterval(() => {
  currentIndex++; // increment the current index

  // reset the current index to 0 if it goes past the last span
  if (currentIndex >= spans.length) {
    currentIndex = 0;
  }

  showSpan(currentIndex); // show the span at the new index
}, 2000); // change the span every 2 seconds
