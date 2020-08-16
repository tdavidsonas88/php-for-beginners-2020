<?php

$suites = ['clubs', 'diamonds', 'hearts', 'spades'];
$cards = ['Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King'];

$playingCardSuite = $suites[array_rand($suites)];
$playingCard = $cards[array_rand($cards)];

echo 'The randomly selected card is the ' . $playingCard . ' of ' . $playingCardSuite;
