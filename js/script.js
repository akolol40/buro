let Message_x = prompt("Введите число", "1");
let Message_n = prompt("В какую степень хотим возвести?","1");

let x = Number(Message_x);
let n = Number(Message_n);

function Pow(x, n) {
    let temp=1;
    for (let i=1; i<=n; i++)
        temp *=x;
    return temp;
}

console.log(Pow(x,n))