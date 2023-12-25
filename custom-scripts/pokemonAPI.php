<?php
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Fetch data from PokeAPI using $searchTerm
    $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon/{$searchTerm}";
    $pokeApiResponse = file_get_contents($pokeApiUrl);
    echo $pokeApiResponse;
} else {
    echo json_encode(['error' => 'Search term not provided.']);
}
?>
