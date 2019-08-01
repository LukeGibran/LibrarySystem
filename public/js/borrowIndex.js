// Data 
books = []
borrowers = []
// Elements
const booksData = document.querySelectorAll('.books');
const bookSearch = document.querySelector('#bookSearch');


const storeData = (type, data) => {
    if(type = 'books'){
        data.forEach(element => {
            books.push({...element.innerHTML.split(',')})
        });
    }
}

storeData('books', booksData)
console.log(books,borrowers)
// Event Listeners
// bookSearch.addEventListener('input', )