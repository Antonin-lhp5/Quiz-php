

const menuBtn = document.querySelector('#menu-btn')
const dropdown = document.querySelector('#dropdown')
let searchfield = document.getElementById('searchfield');
let searchicon = document.getElementById('searchicon');

menuBtn.addEventListener('click', () => {
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
        searchfield.focus();
        // dropdown.classList.add('flex');
    } else {

        dropdown.classList.add('hidden')
    }
});



// Detect all clicks on the document
document.addEventListener('click', function(event) {
    // If user clicks inside the element, do nothing
    if (event.target.closest('#menu-btn') || event.target.id == "searchfield" || event.target.id ==
        "searchicon") return
    // If user clicks outside the element, hide it!
    dropdown.classList.add('hidden')
})