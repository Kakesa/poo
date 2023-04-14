
// let nom = 'honey'
// let prenom ='kakesa'
// let message = `bonjour ${prenom} ${nom}
//  comment tu vas?`
// alert (message.indexOf('vas'))



// let str = "Bonjour la famille";

// const words = str.split('');
// alert(words[0])
// alert(words[7])

// //arondir
// let a = 3.3;
// alert(Math.ceil(a));
// alert(Math.floor(a))


// alert(parseInt('100px')); //recupre 100
// alert(parseFloat('12.5em'))// recupe 12.5

// alert(parseInt('12.3'))// recupere 12
// alert(parseFloat('12.3.4'))


// let nameFieldChecked = true;
// let ageFieldChecked = false;

//  let isGrater = 4 ;
// // alert(isGrater)

// // 


// alert(typeof isGrater);

//let NO = prompt("quel est votre age ?"); //alert saisir le nom
// alert( "Bonjour "+ nom + " On vous souhaite la bienvenue ici ")

//let nom = confirm('Voulez-vous supprimer cet article?')
// let age = prompt("quel est votre age ?");
// if(age < 18){
//     alert('vous etes mineur')
// }else if(age == 18){
//     alert(' vous etes devenue majeur')
// }else if(age>18){
//     alert('Bravo vous etes majeur')
// }
// else{
//     alert('Saisissez des chiffre à la place de lettre' )
// }
// alert(age)

//justication de l'age


// alert(2**2)
// alert(2**3)
// alert(2**4)


// let n=2
// n+=4
// n*=3
// n/=2
// n-=5
// alert(n)

// let  honey = 10;
// honey ++
// alert(honey)


// let no1 = 5 
// let no2 = "5"

// alert(no1===no2)

// let a = 7
// alert(a??5)

//condition 

// for(let i = 0; i < 5 ; i++)
// alert(i)

//recuperation de clé ainsi que leurs valeurs
// const person = {fname : " honey", lname : " kakesa", age : 26};
// let text = "";
// for(let x in person)
// {
//     // text += person;
//     alert(x + ':'+person[x])
// }
 

// Fonction 
// let salut = function (nom){
//     alert('salut '+nom)
// }

// let hello = function (nom){
//     alert('hello ' +nom)
// }

// function message(callBack){
//     callBack('Honey')
// }

// message(hello);
// message(salut)


//fonction second
// function koC(){
//     alert('hello');

// }

// setTimeout(koC, 1000);
//fontion avec paramettre
// function koC(phrase, Jéhovah){
//     alert(phrase + ' , '+ Jéhovah);

// }

// setTimeout(koC, 1000, "hello", "Honey");

// function koC(){
//     alert('hello');

// }
// let timerId = setInterval(koC , 2000)
// setTimeout(()=> {clearInterval(timerId); alert('stop'); }, 10000);


//tableau

// let fruit = ["Apple","Pomme","Orange"];

// alert(fruit[0])
// alert(fruit[1])
// alert(fruit[2])

// let arr = [1,2];
// alert(arr.concat([3,4]));//1,2,3,4


// les object en json
// let user ={
//     name : "Hope",
//     age : 25 
// }

// alert(JSON.stringify(user));
// alert(user.name)
// alert(user["age"])

fetch('https://jsonplaceholder.typicode.com/posts')
  .then((response) => response.json())
  .then((json) => console.log(json));