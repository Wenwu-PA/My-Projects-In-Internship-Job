let massiv = [2,3,4,5,6,10]
function findMaxIndex(massiv){
    let maxIndex = 0;
    for (let i = 0; i < massiv.length; i++){
        if(massiv[i] > massiv[maxIndex]){
            maxIndex = i
        }
    }
    return maxIndex
}
console.log(findMaxIndex(massiv))
