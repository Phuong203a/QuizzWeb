var testModel = {
    id : 0,
    name :"",
    code :"",
    subjectId :0,
    startTime:new Date(),
    endTime:new Date(),
    createDate: new Date(),
    updateDate: new Date(),
}
function questionModel (){
    let id = 0;
    let content ="";
    let testId =0;
    let questionType =0;
    let createDate= new Date();
    let updateDate= new Date();
    let answerList;
}
function answerModel (){
    let id = 0;
    let content ="";
    let questionId =0;
    let isCorrect =0;
    let createDate= new Date();
    let updateDate= new Date();
}