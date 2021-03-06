// The real data/state
const data = [];
// This is use so that searched data is also paginated
let searchedData = [];

// Store the table headers
const headers = [];

// Store the table d
const table_d = [];

// This option is use to show how many to display per page
let perPage = 5;
const tableHeader = document.querySelectorAll('th');
const tableD = document.querySelectorAll('td');
const tableBody = document.querySelector('tbody');

const searchInput = document.querySelector('#searchInput');
const searchBy = document.querySelector('#searchBy');
const showOptions = document.querySelector('#showOptions');

const pagination = document.querySelector('.pagination');
// To adjust the number display per page
const tableInfo = document.querySelector('.databaTable-info');

// Get the data and set the state
const getData = () => {
    // Store to the header data
    tableHeader.forEach(header => {
        headers.push(header.innerHTML.replace(/\s+/g, ''));
    });

    // Store to the table d
    tableD.forEach(td => {
        table_d.push(td.innerHTML);
    });

    // Store as on State (on data array)
    // Keep track of the row
    let countRow = 0;
    for (x = 1; x <= table_d.length / headers.length; x++) {
        // To determine on what column
        let countColumn = 0;
        // The obj to be push to the state
        let objData = {};
        // The column name
        let columnName;

        for (y = countRow; y < tableHeader.length * x; y++) {
            columnName = headers[countColumn];

            objData[columnName] = table_d[y];

            countColumn++;
        }
        data.push(objData);

        countRow += tableHeader.length;
    }
};

const displayData = dataDisplay => {
    tableBody.innerHTML = '';
    let markup;
    let tr;
    let td = '';
    let headerName;

    dataDisplay.sort();

    for (x = 0; x < dataDisplay.length; x++) {
        //  Check if the book is overdue to its date
        const dateNow = Date.parse(new Date());
        const dateDue = Date.parse(new Date(dataDisplay[x].DateDue));
        const checkdue = dateNow - dateDue;
        // Check if the data is from the books table by having a status or not
        if (dataDisplay[x].Status) {
            if (
                dataDisplay[x].Status === 'in' ||
                dataDisplay[x].Status === 'returned'
            ) {
                tr = '<tr class="table-success">';
            } else if (
                dataDisplay[x].Status === 'out' ||
                dataDisplay[x].Status === 'borrowed'
            ) {
                // check due
                if (checkdue > 259200000) {
                    tr = '<tr class="table-warning">';
                } else {
                    tr = '<tr class="table-danger">';
                }
            }
        } else {
            tr = '<tr>';
        }

        // Store the td's
        for (y = 0; y < headers.length; y++) {
            headerName = headers[y];
            td += `<td>${dataDisplay[x][headerName]}</td>`;
        }

        // Store all to the markup
        markup = `${tr} ${td} </tr>`;
        tableBody.insertAdjacentHTML('beforeend', markup);
        td = '';
    }

    // dataDisplay.forEach(data => {
    //   let tr = '<tr class="table-success">'
    // if(data.Status !== 'in'){
    //   tr = '<tr class="table-danger">'
    // }
    // markup = `
    // ${tr}
    // <td>${data.Title}</td>
    // <td>${data.Author}</td>
    // <td>${data.Subject}</td>
    // <td>${data.DatePublish}</td>
    // <td>${data.PublishingCompany}</td>
    // <td>${data.PlaceofPublication}</td>
    // <td>${data.ISBN}</td>
    // <td>${data.Status}</td>
    // <td>${data.View}</td>
    // </tr>`
    // tableBody.insertAdjacentHTML('beforeend', markup)

    // } )
};

// display the the data in pages
const displayPages = (datainPages, page = 1) => {
    const start = (page - 1) * perPage;
    const end = page * perPage;

    const paginatedData = datainPages.slice(start, end);

    displayData(paginatedData);
    renderBtn(page, datainPages.length, perPage);

    // Determine the number of each page
    tableInfo.innerText = `${paginatedData.length +
        (page - 1) * perPage} out of ${datainPages.length} `;
};

// Render button
const renderBtn = (page, numResults, perPage) => {
    pagination.innerHTML = '';
    const pages = Math.ceil(numResults / perPage);
    var button;
    if (page === 1 && pages === 1) {
        button = `<li class="page-item disabled" >
        <button class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</button>
        </li>
        <li class="page-item" data-goto="1"><button class="page-link" href="#" >${page}</button></li>

        <li class="page-item disabled" >
        <button class="page-link" href="#">Next</button>
        </li>`;
    } else if (page === 1 && pages > 1) {
        // Display the next btn
        button = `
        <li class="page-item disabled" >
        <button class="page-link"  aria-disabled="true" >Previous</button>
        </li>
        <li class="page-item" ><button class="page-link" href="#" data-goto="1">${page}</button></li>
        <li class="page-item" data-goto="${page + 1}" id="btn-direct">
        <button class="page-link" >Next</button>
        </li>`;
    } else if (page < pages) {
        button = `<li class="page-item" data-goto="${page - 1}" id="btn-direct">
        <button class="page-link" >Previous</button>
        </li>
        <li class="page-item"><button class="page-link" href="#">${page}</button></li>
        <li class="page-item" data-goto="${page + 1}" id="btn-direct">
        <button class="page-link" >Next</button>
        </li>`;
    } else if (page === pages && pages > 1) {
        button = `<li class="page-item " data-goto="${page -
            1}" id="btn-direct">
        <button class="page-link" >Previous</button>
        </li>
        <li class="page-item"><button class="page-link" href="#">${pages}</button></li>
        <li class="page-item disabled">
        <button class="page-link" >Next</button>
        </li>`;
    } else {
        button = '';
    }

    pagination.insertAdjacentHTML('afterbegin', button);
};

//

// Event Listener for Search
searchInput.addEventListener('input', e => {
    if (!e.target.value) {
        searchedData = [];
        return displayPages(data);
    }

    const searchOptn = searchBy.value;
    const searchResult = data.filter(data => {
        return data[searchOptn]
            .toLowerCase()
            .includes(e.target.value.toLowerCase());
    });

    searchedData = searchResult;
    displayPages(searchResult);
});

// Event listener for pages btn
pagination.addEventListener('click', e => {
    if (e.target.closest('#btn-direct').dataset.goto) {
        const page = e.target.closest('#btn-direct').dataset.goto;

        //  Check if user has searched a data
        if (searchedData == false) {
            displayPages(data, parseInt(page));
        } else {
            displayPages(searchedData, parseInt(page));
        }
    }
});

// Event listener to listen for changes on show options
showOptions.addEventListener('change', e => {
    perPage = e.target.value;
    //  Check if user has searched a data
    if (searchedData == false) {
        displayPages(data);
    } else {
        displayPages(searchedData);
    }
});
getData();
displayPages(data);

// console.log(searchedData);
// console.log(data)
