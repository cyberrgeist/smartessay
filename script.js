let essayText = document.getElementById("essay-text").innerText;
let typingInput = document.getElementById("typing-input");
let feedback = document.getElementById("feedback");
let currentIndex = 0;
let mistakes = 0;
let startTime = null;

typingInput.addEventListener("input", checkTyping);

function checkTyping() {
    if (startTime === null) {
        startTime = new Date();
    }

    let typedText = typingInput.value;
    let correctText = essayText.substring(0, typedText.length);

    if (typedText === correctText) {
        feedback.textContent = "Keep going!";
        feedback.style.color = "green";
    } else {
        mistakes++;
        feedback.textContent = "Check your typing!";
        feedback.style.color = "red";
    }

    if (typedText.length === essayText.length) {
        endGame();
    }
}

function endGame() {
    let elapsedTime = (new Date() - startTime) / 1000;
    let wordsPerMinute = (essayText.split(" ").length / (elapsedTime / 60)).toFixed(2);
    let accuracy = ((essayText.length - mistakes) / essayText.length * 100).toFixed(2);

    alert(`Time: ${elapsedTime.toFixed(2)} seconds\nWPM: ${wordsPerMinute}\nAccuracy: ${accuracy}%`);
    restartGame();
}

function restartGame() {
    typingInput.value = "";
    feedback.textContent = "";
    currentIndex = 0;
    mistakes = 0;
    startTime = null;
}
