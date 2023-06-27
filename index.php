<?php
  function get_pokemon_data() {
    $url = "https://pokeapi.co/api/v2/pokemon?limit=10&offset=500";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($curl);

    if ($response === false) {
      $error = curl_error($curl);
      curl_close($curl);
      return "cURL Error: " . $error;
    }

    curl_close($curl);

    $pokemonData = json_decode($response, true);
    return $pokemonData;
  }

  $pokemonData = get_pokemon_data();

?>

<?php
  function get_pokemon_ability($i) {

      $url = "https://pokeapi.co/api/v2/pokemon/". $i;

      $curl = curl_init($url);

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HEADER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

      $response = curl_exec($curl);

      if ($response === false) {
        $error = curl_error($curl);
        curl_close($curl);
        return "cURL Error: " . $error;
      }

      curl_close($curl);

      $pokemonAbility = json_decode($response, true);
      
      return $pokemonAbility;
    }
  
?>

<?php
  function get_pokemon_game_count($i) {

    $url = "https://pokeapi.co/api/v2/pokemon/". $i;

    $curl = curl_init($url);

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HEADER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

      $response = curl_exec($curl);

      if ($response === false) {
        $error = curl_error($curl);
        curl_close($curl);
        return "cURL Error: " . $error;
      }

      curl_close($curl);

      $pokemonGameCount= json_decode($response, true);

      return $pokemonGameCount;
  }
?>


<head>
<link rel="icon" type="image/jpg" href="\images\logo.jpg"/>
</head>

</head>

<!-- -------------------- MAIN WEBSITE CODE -------------------- -->
<center>

<!-- Load the NAVBAR from header.php file, this save duplicate navbar code and allows updating navbar in one place -->
<div class="navbarblock">
<nav>
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."";
	include($IPATH."header.php"); ?>
</nav>
</div>

<!-- Content under here will be in MAINBLOCK pain and automatically expand -->

<div class="mainblock">
<center>
<input type="search" id="site-search" name="pokemonsearch">
<button>Search</button>

</div>

<div class="mainblock">
<div class="data-table">
<table>

<tr>
    <th>Image</th>
    <th>Pokemon Name</th>
    <th>Num of Game Appearances</th>
    <th>Ability 1</th>
    <th>Ability 2</th>
    <th>Ability 3</th>
  </tr>

<?php  foreach($pokemonData['results'] as $row):?> 
  
        <tr>
        
            <td style="text-align: center;"><img src="<?="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".basename($row['url']).".png";?>"onerror="this.onerror=null; this.src='\\images\\Default.jpg'"></td>
            <td style="text-align: center;"><?= ucfirst($row['name']);?></td>

            <td style="text-align: center;"><?= count(get_pokemon_game_count(basename($row['url']))['game_indices']);?></td>

            <?php  foreach(get_pokemon_ability(basename($row['url']))['abilities'] as $abilities):?> 
            <td style="text-align: center;"><?= ucfirst($abilities['ability']['name']);?></td>
            <?php endforeach;?>

            
            

<?php endforeach;?>


</table>
</div>
</div>

</body>
</html>