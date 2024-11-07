<?php
// Tablica z podstronami
$podstrony = [
    1 => [
        'nazwa' => 'Strona główna',
        'tresc' => 'Witamy na naszej stronie głównej! Znajdziesz tutaj najnowsze informacje i aktualności.'
    ],
    2 => [
        'nazwa' => 'O nas',
        'tresc' => 'Jesteśmy firmą zajmującą się tworzeniem innowacyjnych rozwiązań dla biznesu.'
    ],
    3 => [
        'nazwa' => 'Kontakt',
        'tresc' => 'Skontaktuj się z nami przez formularz lub telefonicznie. Czekamy na Twoje wiadomości!'
    ],
    4 => [
        'nazwa' => 'Galeria',
        'tresc' => 'To się nie wyświetliaasdasdadasdads'
    ],
];

$loszdj = [
    'los 1' => "https://picsum.photos/300/200?random=1",
    'los 2' => "https://picsum.photos/300/200?random=2",
    'los 3' => "https://picsum.photos/300/200?random=3"
];

// Pobieranie id podstrony z URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1; // Domyślnie ustawiamy na 1

// Sprawdzanie, czy podstrona o danym ID istnieje
if (!isset($podstrony[$id])) {
    $id = 1; // Ustawienie domyślnej podstrony, jeśli ID jest nieprawidłowe
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Strona 1</title>
	<style type="text/css">
	@media only screen and (min-width: 900px) {
		#kontener { width: 850px; margin: 0 auto 0 auto; }
		main { float: left; width: 70%; }
		aside { float: right; width: 28%; }
		footer { clear: both; }
		}
	</style>
</head>
<body>
	<div id="kontener">
		<header>
			<h1>Witaj na mojej stronie!</h1>
		</header>
		<div>
			<main>
				<article>
					<?php 
                    if ($id != 4){
                        echo '<h2>'.$podstrony[$id]['nazwa'].'</h2>'; 
                        echo '<p>'.$podstrony[$id]['tresc'].'</p>';
                    }
                    else {
                        echo '<h2>'.$podstrony[$id]['nazwa'].'</h2>';
                        include ('galeria.php');  
                    }
                    ?>
					
				</article>
				<article>
					<h2>Stały artykuł</h2>
					 <img src="<?php echo $loszdj['los 1']; ?>" alt="losowe zdjęcie 1">
					 <img src="<?php echo $loszdj['los 2']; ?>" alt="losowe zdjęcie 2">
					 <img src="<?php echo $loszdj['los 3']; ?>" alt="losowe zdjęcie 3">
				</article>
			
			</main>
			<aside>
				<nav>
					<h3>Menu</h3>
					<ul>
                        <?php foreach ($podstrony as $key => $podstrona): ?>
                            <li><a href="?id=<?php echo $key; ?>"><?php echo $podstrona['nazwa']; ?></a></li>
                        <?php endforeach; ?>
                            <li><a href="http://zszwolsztyn.pl">ZSZ</a></li>
					</ul>
				</nav>
				<section>
                <h3>Reklamy</h3>
                        <p>
                            <?php
                                // Tablica reklam
                                    $reklamy = [
                                        ['tekst' => 'Kup teraz! - Super promocja', 'url' => 'https://www.zalando.pl'],
                                        ['tekst' => 'Zniżki na elektronikę - Sprawdź teraz!', 'url' => 'https://www.euro.com.pl'],
                                        ['tekst' => 'Nowa kolekcja ubrań - Wejdź i zobacz', 'url' => 'https://www.shein.com'],
                                        ['tekst' => 'Wakacje marzeń - Zarezerwuj już dziś!', 'url' => 'https://www.booking.com'],
                                    ];
                                // Losowe wybranie reklamy
                                            $losowaReklama = $reklamy[array_rand($reklamy)];
                            // Wyświetlenie losowej reklamy
                            echo '<a href="' . $losowaReklama['url'] . '" target="_blank">' . $losowaReklama['tekst'] . '</a>';
                            ?>
                        </p>
				</section>
				<section>
                <h3>Social media</h3>
                    <p>
                        <?php
                     // Tablica z linkami do social media
                     $socialMedia = [
                                [
                                    'name' => 'Facebook',
                                    'url' => 'https://www.facebook.com',
                                    'icon' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg' // Ikona Facebooka
                                ],
                                [
                                    'name' => 'X',
                                    'url' => 'https://www.X.com',
                                    'icon' => 'https://upload.wikimedia.org/wikipedia/commons/c/ce/X_logo_2023.svg' // Ikona X
                                ],
                                [
                                    'name' => 'Instagram',
                                    'url' => 'https://www.instagram.com',
                                    'icon' => 'https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png' // Ikona Instagrama
                                ]
                            ];
                    
                            // Pętla do wyświetlania linków z obrazkami
                            foreach ($socialMedia as $social) {
                                echo '<a href="' . $social['url'] . '" target="_blank"><img src="' . $social['icon'] . '" alt="' . $social['name'] . '" style="width:35px; height:35px; margin-right:10px;"></a>';
                            } 
                         ?>
                    </p>
				</section>
			</aside>
		</div>
		<footer>
			<div> pk.sth © 2024</div>
			<div>Strona o niczym by PK przygotowane specjalnie dla 4I. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
		</footer>
	</div>
</body>
</html>
