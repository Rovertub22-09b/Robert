function divideString(inputString) {
    var resultArray = [];
    for (var i = 0; i < inputString.length; i += 3) {
        var fragment = inputString.slice(i, i + 3);
        resultArray.push(fragment);
    }
    return resultArray;
}
// Пример использования
var inputString = "РобертДубиннико";
var result = divideString(inputString);
console.log(result);
