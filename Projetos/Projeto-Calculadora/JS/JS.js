const previousOperationText = document.querySelector("#Operacao_anterior");
const currentOperationText = document.querySelector("#Operacao_atual");
const buttons = document.querySelectorAll("#botoes_conteiner button");


class Calculator{

    constructor(previousOperationText, currentOperationText){
        this.previousOperationText = previousOperationText;
        this.currentOperationText = currentOperationText;
        this.currentOperation = "";

    }
    //Adiciona o digito
    addDigit(digit){
if(digit === "." && this.currentOperationText.innerText.includes(".")){
    return;
}

this.currentOperation = digit;
this.updateScreen();

    }
// process all calculator
processOperation(operation){

        let operationValue;
        let previous = +this.previousOperationText.innerText;
        let current = +this.currentOperationText.innerText;

        switch(operation){
            case "+":
                operationValue = previous + current;
                this.updateScreen(operationValue,operation,current,previous);
                break;
                default:
                return;
        }

}

 // atualiza a tela.
 
 updateScreen(operationValue = null, 
    operation = null, 
    current = null, 
    previous = null){

        console.log(operationValue, operation,current,previous);

    if(operationValue === null){
        this.currentOperationText.innerText += this.currentOperation;
    } else{
        if(previous===0){
            operationValue = current;

        }
    }
    
    
    

 }
}

 const Cal = new Calculator(previousOperationText,currentOperationText
    ) 



buttons.forEach((btn) =>{
    btn.addEventListener("click", (Event) =>{

        const value = Event.target.innerText;
     
        if(+value >= 0 || value === "."){
            Cal.addDigit(value);
        }else{
            Cal.processOperation(value);
        }

    })
})