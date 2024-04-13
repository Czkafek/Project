const handleInput = (inputNumber) => {
    const currentInput = document.querySelector(`.ver-code input:nth-child(${inputNumber})`);
    const nextInput = document.querySelector(`.ver-code input:nth-child(${inputNumber + 1})`);

    if(currentInput.value.length === 1 && nextInput) {
        nextInput.disabled = false;
        nextInput.focus();
    }

    const allInputsFilled = Array.from(document.querySelectorAll('.ver-code input')).every(input => input.value.length === 1);

    const verifyBtn = document.querySelector('.verifyBtn');
    verifyBtn.disabled = !allInputsFilled;
}

const handleBackspace = (inputNumber, event) => {
    if(event.key === "Backspace") {
        const currentInput = document.querySelector(`.ver-code input:nth-child(${inputNumber})`);
        const prevInput = document.querySelector(`.ver-code input:nth-child(${inputNumber - 1})`);

        if(currentInput.value.length === 0 && prevInput) {
            currentInput.disabled = true;
            currentInput.value = "";
            prevInput.focus();
        }

        const allInputsFilled = Array.from(document.querySelectorAll('.ver-code input')).every(input => input.value.length === 1);

        const verifyBtn = document.querySelector('.verifyBtn');
        verifyBtn.disabled = !allInputsFilled;

    }
}