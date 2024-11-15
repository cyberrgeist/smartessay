<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essay Memorization Typing App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Essay Memorization Typing App</h1>
        <p id="essay-text">
            <!-- PHP to load the essay text -->
            <?php
                $essay_text = "Hinduism and Buddhism were two of the most prevalent religions in the Indian subcontinent. Hinduism developed in the Indus River Valley as a result of Indo-Aryan migrations. Buddhism was founded by Siddhartha Gautama in modern-day Nepal circa the 5th century BCE. Although Hinduism and Buddhism are similar in their beliefs, they nevertheless are different with regard to their origin and spread. Therefore, Hinduism and Buddhism are more different than they are similar.

                Hinduism and Buddhism are similar in terms of beliefs. Both of the religions share key concepts such as samsara and karma. In Hinduism, samsara - or the cycle of life, death, and rebirth - is governed by one’s karma, where a person’s actions determine their next life. Achieving moksha, or liberation from the cycle is the ultimate spiritual goal. This signifies that in order for a Hindu to live a good, spiritual life, they must have accumulated good karma and fulfill their dharma. Similarly, Buddhism emphasizes samsara and karma and introduces Nirvana as the end of samsara. It states that salvation is the cessation of desire and self-realization. This signifies that Nirvana and moksha both liberate oneself from samsara, but their method to reach this point is different. These shared beliefs reflect their common cultural origins, yet the ways these concepts are practiced reveal deeper philosophical differences.

                Hinduism and Buddhism are different with regard to their origin. Hinduism did not have a specific founder; instead, it gradually evolved from the cultural and religious practices of the Indo-Aryan people, as recorded in the Vedic scriptures. The Vedic scriptures gave rise to Brahmanism, which was a precursor to Hinduism. This signifies that Brahmanism and Hinduism share similar beliefs, whereas Buddhism only takes specific parts of Brahmanism, thus making it more different than similar. In contrast, Buddhism was founded by Siddhartha Gautama in the late 5th century BCE. This signifies that Buddhism is more recent than Hinduism, consequently allowing it to envelop different philosophies. This is seen as Buddhism has more of an emphasis on self-realization and the renunciation of desire rather than worship, which is the common practice in Hinduism. A difference between the two religions is seen here as they were developed at different times by different people, allowing Buddhism and Hinduism to have different philosophies.

                Hinduism and Buddhism are different with regard to their spread. Hinduism practiced the caste system which was hereditary, making it difficult for other people to adopt if their parents weren’t Hindu. This signifies that Hinduism stayed within the Indian subcontinent and only spread to a few other countries such as Indonesia and Vietnam. In contrast, Buddhism rejected the caste system and was more appealing to foreigners. This is significant because it greatly influenced the spread of Buddhism as it allowed it to gain popularity in various other parts of Asia, such as China, Korea, Japan, Indonesia, Vietnam, and Sri Lanka. The efforts of King Asoka of the Mauryan Empire also rapidly increased the spread of Buddhism. Therefore, Hinduism and Buddhism are different because Buddhism spread to far more countries than Hinduism, which, in turn, is due to a large difference in the appeal of each religion.";
                echo nl2br($essay_text); // Display the essay text with line breaks
            ?>
        </p>
        <input type="text" id="typing-input" placeholder="Start typing here...">
        <div id="feedback"></div>
        <button onclick="restartGame()">Restart</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
