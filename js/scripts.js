// CALCULADORA APP
/* function sum(){
    let num1 = document.forCal.calNum1.value;
    let num2 = document.forCal.calNum2.value;
    let calRes = document.forCal.calRes.value;
    calRes = parseFloat(num1)+parseFloat(num2);
    document.forCal.calRes.value = calRes;
}

function res(){
    let num1 = document.forCal.calNum1.value;
    let num2 = document.forCal.calNum2.value;
    let calRes = document.forCal.calRes.value;
    calRes = parseFloat(num1)-parseFloat(num2);
    document.forCal.calRes.value = calRes;
}
function mul(){
    let num1 = document.forCal.calNum1.value;
    let num2 = document.forCal.calNum2.value;
    let calRes = document.forCal.calRes.value;
    calRes = parseFloat(num1)*parseFloat(num2);
    document.forCal.calRes.value = calRes;
}
function div(){
    let num1 = document.forCal.calNum1.value;
    let num2 = document.forCal.calNum2.value;
    let calRes = document.forCal.calRes.value;
    calRes = parseFloat(num1)/parseFloat(num2);
    document.forCal.calRes.value = calRes;
}
function por(){
    let num1 = document.forCal.calNum1.value;
    let num2 = document.forCal.calNum2.value;
    let calRes = document.forCal.calRes.value;
    calRes = parseFloat(num1)*(parseFloat(num2)/100);
    document.forCal.calRes.value = calRes;
} */
// CALCULADORA VENTAS
function calVenta(){
    let comVa = document.forCal.vaCom.value;
    let utiVa = document.forCal.vaUti.value;
    let ivaVa = document.forCal.vaIva.value;
    let venRe = document.forCal.reVen.value;
    let ganRe = document.forCal.reGan.value;
    ganRe = parseFloat(comVa)*(parseFloat(utiVa)/100);
    venRe = parseFloat(comVa)+parseFloat(ganRe)+(parseFloat(comVa)*parseFloat(ivaVa)/100);
    document.forCal.reGan.value = ganRe;
    document.forCal.reVen.value = venRe;
}
// CONVERSOR APP
function calConversor(){
    let numEva = document.forCon.conNum.value;
    let dat1 = document.forCon.tipDat1.value;
    let dat2 = document.forCon.tipDat2.value;
    let conRes = document.forCon.conRes.value;
    conRes = (parseFloat(numEva)*parseFloat(dat2))/parseFloat(dat1);
    document.forCon.conRes.value = conRes;
}