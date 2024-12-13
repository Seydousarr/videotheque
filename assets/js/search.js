const search = document.forms.searchForm.search;

search.addEventListener("input", () => {
    console.log(search.value);
    fetch("./controller/SearchController.php?search=" + search.value)
        .then(response => response.json())
        .then((json) => {
            json.forEach(element => {
                searchResult.innerHTML += `<a href="./film.php?id_movie=${element.id_movie}">
                ${element.title}</a>`;
            });
        });

});