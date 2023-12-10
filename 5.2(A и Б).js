function isConditionSatisfied(num) {
    const squareRoot = Math.sqrt(num);
    const cubicRoot = Math.cbrt(num);
    const difference = Math.abs(squareRoot - cubicRoot);
    return difference <= 1e-5;
}
function isSumOfDigitsEven(num) {
    const digitSum = Math.abs(num).toString().split('').reduce((acc, digit) => acc + parseInt(digit), 0);
    return digitSum % 2 === 0;
}
function processArray(arr) {
    // Найти первый и последний элемент, удовлетворяющий условию
    let firstIndex = -1;
    let lastIndex = -1;
    for (let i = 0; i < arr.length; i++) {
        if (isConditionSatisfied(arr[i])) {
            if (firstIndex === -1) {
                firstIndex = i;
            }
            lastIndex = i;
        }
    }
    // Если найдены элементы, удовлетворяющие условию, найти их сумму
    let sumBetween = 0;
    if (firstIndex !== -1 && lastIndex !== -1) {
        for (let i = firstIndex + 1; i < lastIndex; i++) {
            sumBetween += arr[i];
        }
    }
    // Удалить элементы, удовлетворяющие второму условию
    arr = arr.filter(num => !isSumOfDigitsEven(Math.trunc(num)));
    return { sumBetween, newArr: arr };
}
// Пример использования
const inputArray = [2, 8, 10, 5, 3, 7, 27, 16];
const result = processArray(inputArray);
console.log("Сумма элементов между первым и последним, удовлетворяющим условию:", result.sumBetween);
console.log("Массив после удаления элементов с четной суммой цифр целой части:", result.newArr);
