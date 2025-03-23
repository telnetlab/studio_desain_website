const quizData = [
    {
        question: "Apa kepanjangan dari TelNet Lab?",
        options: [
            "Telekomunikasi Network Laboratorium",
            "Tel-U Network laboratory",
            "Telecommunication Network Laboratory",
            "Television Network Laboratorium"
        ],
        correct: 2
    },
    {
        question: "Semua ini termasuk ke dalam mata kuliah TelNet, kecuali...",
        options: [
            "Web Design",
            "Cloud Computing",
            "Cyber Security",
            "Internet of Things",
            "Elektromagnetika"
        ],
        correct: 4
    },
    {
        question: "Satuan kecepatan internet adalah?",
        options: [
            "Hertz",
            "Byte",
            "RPM",
            "Mbps"
        ],
        correct: 3
    },
    {
        question: "True or False: Kepanjangan dari DNS adalah Domain Name Server",
        options: [
            "True",
            "False"
        ],
        correct: 0
    }
];

let currentQuestion = 0;
let score = 0;
let shuffledQuestions = [];
let shuffledOptions = [];

const elements = {
    questionNumber: document.querySelector('.question-number'),
    questionText: document.querySelector('.question-text'),
    optionsContainer: document.querySelector('.options-container'),
    scoreContainer: document.querySelector('.score-container'),
    restartBtn: document.querySelector('.restart-btn'),
    progress: document.querySelector('.progress')
};

function initQuiz() {
    // Acak urutan soal
    shuffledQuestions = [...quizData].sort(() => Math.random() - 0.5);
    
    currentQuestion = 0;
    score = 0;
    elements.scoreContainer.style.display = 'none';
    elements.restartBtn.style.display = 'none';
    showQuestion();
    updateProgress();
}

function shuffleOptions(options) {
    return [...options].sort(() => Math.random() - 0.5);
}

function showQuestion() {
    const question = shuffledQuestions[currentQuestion];
    shuffledOptions = shuffleOptions(question.options);
    
    elements.questionNumber.textContent = `Pertanyaan ${currentQuestion + 1} dari ${shuffledQuestions.length}`;
    elements.questionText.textContent = question.question;
    
    elements.optionsContainer.innerHTML = shuffledOptions
        .map((option, index) => `
            <button class="option-btn" onclick="checkAnswer(${index})" ${question.answered ? 'disabled' : ''}>
                ${option}
            </button>
        `)
        .join('');
}

function checkAnswer(selectedIndex) {
    const question = shuffledQuestions[currentQuestion];
    const buttons = document.querySelectorAll('.option-btn');
    
    buttons.forEach(button => button.disabled = true);
    
    const correctIndex = shuffledOptions.indexOf(question.options[question.correct]);
    
    buttons.forEach((button, index) => {
        if(index === correctIndex) {
            button.classList.add('correct');
        } else if(index === selectedIndex) {
            button.classList.add('wrong');
        }
    });

    if(selectedIndex === correctIndex) {
        score++;
    }

    question.answered = true;
    
    setTimeout(() => {
        currentQuestion++;
        if(currentQuestion < shuffledQuestions.length) {
            showQuestion();
            updateProgress();
        } else {
            showFinalScore();
        }
    }, 1500);
}

function updateProgress() {
    const progress = (currentQuestion / shuffledQuestions.length) * 100;
    elements.progress.style.width = `${progress}%`;
}

function showFinalScore() {
    elements.questionNumber.textContent = '';
    elements.questionText.textContent = '';
    elements.optionsContainer.innerHTML = '';
    elements.scoreContainer.style.display = 'block';
    elements.scoreContainer.innerHTML = `
        Skor Akhir: ${score}/${shuffledQuestions.length}<br>
        ${score === shuffledQuestions.length ? 'Perfect Score! 🎉' : 
        score >= shuffledQuestions.length/2 ? 'Bagus! 👍' : 'Belajar lagi ya! 😊'}
    `;
    elements.restartBtn.style.display = 'block';
    elements.progress.style.width = '100%';
}

elements.restartBtn.addEventListener('click', initQuiz);

// Start the quiz
initQuiz();