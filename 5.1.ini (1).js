function isLeapYear(year) {
    // Год високосный, если он делится на 4,
    // но не делится на 100, за исключением тех случаев, когда он делится на 400.
    return (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
}

function daysInYear(year) {
    // Если год високосный, то 366 дней, иначе 365.
    return isLeapYear(year) ? 366 : 365;
}

// Заданный год
const year = 2023; 

// Проверяем, является ли год високосным
if (isLeapYear(year)) {
    console.log(`${year} год - високосный. В нем 366 дней.`);
} else {
    console.log(`${year} год - не високосный. В нем 365 дней.`);
}
