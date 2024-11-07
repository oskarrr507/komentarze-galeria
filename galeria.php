<?php
// Tablica zdjęć
$photos = [
    ['img_id'=>1, 'img'=>'/OP/zdjecia2i/photo 1.jpg', 'opis'=>'A beautiful sunset.', 'category_id'=>1],
    ['img_id'=>2, 'img'=>'/OP/zdjecia2i/photo 2.jpg', 'opis'=>'A serene beach.', 'category_id' => 2],
    ['img_id'=>3, 'img'=>'/OP/zdjecia2i/photo 3.jpg', 'opis'=>'A blooming flower.', 'category_id' => 3],
    ['img_id'=>4, 'img'=>'/OP/zdjecia2i/photo 4.jpg', 'opis'=>'Snow-covered mountains.', 'category_id' => 1],
    ['img_id'=>5, 'img'=>'/OP/zdjecia2i/photo 5.jpg', 'opis'=>'A forest in autumn.', 'category_id' => 3],
    ['img_id'=>6, 'img'=>'/OP/zdjecia2i/photo 6.jpg', 'opis'=>'City skyline at night.', 'category_id' => 2],
    ['img_id'=>7, 'img'=>'/OP/zdjecia2i/photo 7.jpg', 'opis'=>'A waterfall flowing.', 'category_id' => 3],
    ['img_id'=>8, 'img'=>'/OP/zdjecia2i/photo8.jpg', 'opis'=>'A boat on a calm lake.', 'category_id' => 1],
    ['img_id'=>9, 'img'=>'/OP/zdjecia2i/photo 9.jpg', 'opis'=>'A field of lavender.', 'category_id' => 2],
    ['img_id'=>10, 'img'=>'/OP/zdjecia2i/photo 10.jpg', 'opis'=>'A snowy forest.', 'category_id'=>1],
    ['img_id'=>11, 'img'=>'/OP/zdjecia2i/photo 11.jpg', 'opis'=>'Aerial view of coral.', 'category_id'=>3],
    ['img_id'=>12, 'img'=>'/OP/zdjecia2i/photo 12.jpg', 'opis'=>'Market square.', 'category_id' => 3],
];

// Tablica z komentarzami
$komentarze = [
    ['id_zdjecia' => 1, 'ocena' => 5, 'tresc' => 'Przepiękne ujęcie! Uwielbiam kolory.'],
    ['id_zdjecia' => 1, 'ocena' => 4, 'tresc' => 'Naprawdę dobre zdjęcie, ale mogłoby być jaśniejsze.'],
    ['id_zdjecia' => 1, 'ocena' => 3, 'tresc' => 'Fajne, ale czegoś mi tu brakuje.'],
    ['id_zdjecia' => 2, 'ocena' => 5, 'tresc' => 'Świetna kompozycja, bardzo mi się podoba.'],
    ['id_zdjecia' => 2, 'ocena' => 4, 'tresc' => 'Bardzo ładne, ale trochę za ciemne.'],
    ['id_zdjecia' => 2, 'ocena' => 3, 'tresc' => 'Niezłe, ale mogłoby być ciekawsze.'],
    ['id_zdjecia' => 3, 'ocena' => 5, 'tresc' => 'Fantastyczne! Idealnie uchwycone emocje.'],
    ['id_zdjecia' => 3, 'ocena' => 4, 'tresc' => 'Super zdjęcie, choć jest trochę rozmazane.'],
    ['id_zdjecia' => 3, 'ocena' => 3, 'tresc' => 'Dobre, ale nie robi na mnie wrażenia.'],
    ['id_zdjecia' => 4, 'ocena' => 5, 'tresc' => 'Wspaniałe kolory i ostrość!'],
    ['id_zdjecia' => 4, 'ocena' => 4, 'tresc' => 'Fajne zdjęcie, ale kolory mogłyby być bardziej nasycone.'],
    ['id_zdjecia' => 4, 'ocena' => 2, 'tresc' => 'Niestety nie przypadło mi do gustu.'],
    ['id_zdjecia' => 5, 'ocena' => 5, 'tresc' => 'Świetne! Czuć klimat miejsca.'],
    ['id_zdjecia' => 5, 'ocena' => 4, 'tresc' => 'Dobre, ale brakuje mi trochę ostrości.'],
    ['id_zdjecia' => 5, 'ocena' => 3, 'tresc' => 'OK, ale nie robi na mnie wielkiego wrażenia.'],
    ['id_zdjecia' => 6, 'ocena' => 5, 'tresc' => 'Przepiękne ujęcie, idealna harmonia.'],
    ['id_zdjecia' => 6, 'ocena' => 4, 'tresc' => 'Dobre zdjęcie, ale brakuje mi głębi.'],
    ['id_zdjecia' => 6, 'ocena' => 3, 'tresc' => 'Mogłoby być lepiej skomponowane.'],
    ['id_zdjecia' => 7, 'ocena' => 5, 'tresc' => 'Niesamowite ujęcie, wygląda jak z bajki!'],
    ['id_zdjecia' => 7, 'ocena' => 4, 'tresc' => 'Bardzo dobre zdjęcie, ale brakuje czegoś wyjątkowego.'],
    ['id_zdjecia' => 7, 'ocena' => 3, 'tresc' => 'Przeciętne, ale ładne kolory.'],
    ['id_zdjecia' => 8, 'ocena' => 5, 'tresc' => 'Wyjątkowy klimat, bardzo mi się podoba.'],
    ['id_zdjecia' => 8, 'ocena' => 4, 'tresc' => 'Ładne, ale przydałaby się lepsza jakość.'],
    ['id_zdjecia' => 8, 'ocena' => 3, 'tresc' => 'Nie jest złe, ale mogłoby być bardziej wyraziste.'],
    ['id_zdjecia' => 9, 'ocena' => 5, 'tresc' => 'To zdjęcie jest naprawdę imponujące!'],
    ['id_zdjecia' => 9, 'ocena' => 4, 'tresc' => 'Świetnie uchwycony moment.'],
    ['id_zdjecia' => 9, 'ocena' => 2, 'tresc' => 'Szału nie ma, ale jest OK.'],
    ['id_zdjecia' => 10, 'ocena' => 5, 'tresc' => 'Wygląda jak dzieło sztuki!'],
    ['id_zdjecia' => 10, 'ocena' => 4, 'tresc' => 'Bardzo ładne, ale nie do końca w moim stylu.'],
    ['id_zdjecia' => 10, 'ocena' => 3, 'tresc' => 'Dobre, ale nie zachwyca.'],
    ['id_zdjecia' => 11, 'ocena' => 5, 'tresc' => 'Wspaniale uchwycone światło i cień.'],
    ['id_zdjecia' => 11, 'ocena' => 4, 'tresc' => 'Bardzo klimatyczne, ale brakuje ostrości.'],
    ['id_zdjecia' => 11, 'ocena' => 3, 'tresc' => 'OK, ale czegoś tu brakuje.'],
    ['id_zdjecia' => 12, 'ocena' => 5, 'tresc' => 'Zachwycający widok, aż zapiera dech w piersiach!'],
    ['id_zdjecia' => 12, 'ocena' => 4, 'tresc' => 'Naprawdę fajne zdjęcie, lubię takie klimaty.'],
    ['id_zdjecia' => 12, 'ocena' => 2, 'tresc' => 'Nie podoba mi się tak bardzo, za dużo szumów.']
];
// Tablica kategorii
$categories = [
    ['category_id'=>1, 'name'=>'Nature'],
    ['category_id'=>2, 'name'=>'Cityscapes'],
    ['category_id'=>3, 'name'=>'Wildlife'],
    ['category_id'=>4, 'name'=>'New']
];

// Funkcja zwracająca nazwę kategorii na podstawie jej ID
function getCategoryName($category_id, $categories) {
    foreach ($categories as $category) {
        if ($category['category_id'] == $category_id) {
            return $category['name'];
        }
    }
    return 'Unknown';
}

    // Funkcja wyświetlająca komentarze do wybranego zdjęcia, zamieniająca ocenę na gwiazdki
    function photo_comment($id_zdjecia, $komentarze) {
        foreach ($komentarze as $comment) {
            if ($comment['id_zdjecia'] === $id_zdjecia) {
                // Wyświetlanie oceny jako gwiazdki
                $stars = str_repeat('★', $comment['ocena']) . str_repeat('☆', 5 - $comment['ocena']);
                echo "<p><strong>Ocena:</strong> $stars<br><strong>Komentarz:</strong> {$comment['tresc']}</p>";
                
            }
        }
    }

// Sprawdzenie, czy przekazano identyfikator zdjęcia w zmiennej GET
if (isset($_GET['img_id'])) {
    $img_id = (int)$_GET['img_id'];

    // Wyszukaj zdjęcie o podanym ID
    foreach ($photos as $photo) {
        if ($photo['img_id'] == $img_id) {
            // Wyświetl powiększone zdjęcie
            $category_name = getCategoryName($photo['category_id'], $categories);
            echo '<h2>' . $photo['opis'] . '</h2>';
            echo '<img src="' . $photo['img'] . '" style="width:500px;"><br>';
            echo '<p>Kategoria: <a href="?id=4&category_id='.$photo['category_id'].'">'.getCategoryName($photo['category_id'], $categories).'</a></p>';
            echo '<a href="?id=4">Back to gallery</a>';
            photo_comment ($img_id, $komentarze);
        }
    }

} else {
    // Sprawdzenie, czy przekazano identyfikator kategorii w zmiennej GET
    $category_id = isset($_GET['category_id']) ? (int)$_GET['category_id'] : null;

    // Ustaw nagłówek w zależności od tego, czy wybrano kategorię
    if ($category_id) {
        echo '<h2>Photos in ' . getCategoryName($category_id, $categories) . '</h2>';
    } else {
        echo '<h2>Wszytkie Zdjęcia</h2>';
    }

    // Wyświetl miniatury zdjęć
    echo '<div style="display: flex; flex-wrap: wrap;">';
    $counter = 0;
    foreach ($photos as $photo) {
        // Jeśli wybrano kategorię, filtruj zdjęcia według niej
        if (!$category_id || $photo['category_id'] == $category_id) {
            if ($counter % 3 == 0 && $counter > 0) {
                echo '<div style="flex-basis: 100%; height: 0;"></div>'; // Nowy wiersz po 3 miniaturach
            }
            echo '<div style="margin: 10px; text-align: center; flex-basis: 29%; min-width: 100px;">';
            echo '<a href="?id=4&img_id=' . $photo['img_id'] . '">';
            echo '<img src="' . $photo['img'] . '" style="width:150px; height:auto;"><br>';
            echo '</a>';
            echo '<p>' . $photo['opis'] . '</p>';

            // Kategoria jako tekst, jeśli jesteśmy w widoku kategorii, lub jako link, jeśli nie
            if ($category_id) {
                echo '<p>Kategoria: ' . getCategoryName($photo['category_id'], $categories) . '</p>'; // Tekst bez linku
            } else {
                echo '<p>Kategoria: <a href="?id=4&category_id='.$photo['category_id'].'">'.getCategoryName($photo['category_id'], $categories).'</a></p>';
            }
            echo '</div>';
            $counter++;
        }
    }
    echo '</div>';

    // Przycisk "Back to gallery" jeśli wybrano kategorię
    if ($category_id) {
        echo '<a href="?id=4">Back to gallery</a>';
    }
}




?>
