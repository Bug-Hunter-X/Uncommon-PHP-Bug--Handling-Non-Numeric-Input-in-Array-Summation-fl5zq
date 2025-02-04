function calculateSum(numbers) {
  if (!is_array(numbers)) {
    throw new Error('Invalid input: numbers must be an array.');
  }

  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    const number = numbers[i];
    if (!is_numeric($number)) {
      throw new Error(`Invalid input: Element at index ${i} is not a number.`);
    }
    sum += $number;
  }

  return sum;
}

const numbers = [1, 2, 3, 'a', 5];

try {
  const sum = calculateSum(numbers); 
  console.log(sum);
} catch (error) {
  console.error(error.message); // Handles error gracefully
}
