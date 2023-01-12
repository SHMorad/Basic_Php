function hotelhisab(x) {
    if(x <=10){
        return 10*100
    }else if(x <=20){
        let remainingDay = x-10;
        let fisttenday = 10 * 100;
        let second = remainingDay * 80;
        return fisttenday + second;
    }else{
        let firstdstep = 10 * 100;
        let seconddstep = 10 * 80;

        let firstRemainingDay = x-20;
        let thirdstep = firstRemainingDay * 50 ;
        
        let total = firstdstep +seconddstep +thirdstep;
        return total;
    }
}
console.log(hotelhisab(30));