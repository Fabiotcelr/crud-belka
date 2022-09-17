function addPokemon(id) {
    const select = document.getElementById(id);

    axios.get('https://pokeapi.co/api/v2/pokemon?offset=0&limit=50').then(res => {
        for (let pokemon of res.data.results) {
            const option = document.createElement('OPTION');
            option.value = pokemon.url;
            option.textContent = pokemon.name.toUpperCase();
            select.appendChild(option);
        }
    });
}