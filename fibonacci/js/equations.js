let iterations = 40;

function calculate_fibonacci(number1, number2) {
    sequence_numbers();
    let sequence = [number1, number2];
    sequence.push(sequence[0] + sequence[1])
    for (let i = 1; i < iterations; i++) {
        sequence.push(sequence[sequence.length - 1] + sequence[sequence.length -
            2]);
    }
    return sequence;
}

function calculate_phi(number1, number2) {
    sequence_numbers();
    let sequence = [];
    sequence = calculate_fibonacci(number1, number2);

    let result = [];

    for (let i = 0; i < sequence.length - 1; i++) {
        result.push(sequence[i + 1] / sequence[i]);
    }
    return result;
}


function sequence_numbers() {
    y_axis = [];
    for (let i = 0; i < iterations; i++) {
        y_axis.push(i);
    }
    return y_axis;
}


console.log(calculate_phi(7, 15));