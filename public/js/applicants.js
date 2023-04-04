
$(document).ready(function(){
  var date_input=$('input[name="date"]'); 
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  var options={
    format: 'yyyy-mm-dd',
    container: container,
    todayHighlight: true,
    autoclose: true,
  };
  date_input.datepicker(options);
})

$(document).ready(function(){
    var date_input=$('input[name="start_date[]"]'); 
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
      format: 'yyyy-mm-dd',
      container: container,
      todayHighlight: true,
      autoclose: true,
    };
    date_input.datepicker(options);
  })

  $(document).ready(function(){
    var date_input=$('input[name="end_date[]"]'); 
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
      format: 'yyyy-mm-dd',
      container: container,
      todayHighlight: true,
      autoclose: true,
    };
    date_input.datepicker(options);
  })


function addElement(container){
    var znacznik = document.createElement('input');
    znacznik.setAttribute('type', 'file');
    znacznik.setAttribute('name', 'file[]');
    znacznik.className = 'form-control form-control-lg upload';
    var container = document.getElementById(container);
    container.appendChild(znacznik); 
}

const addBtn = document.querySelector(".add");

const input = document.querySelector(".internship");

function addInternship(){
  const companyName = document.createElement("input");
  companyName.type = "text";
  companyName.placeholder = "Nazwa firmy";
  companyName.name = "company_name[]"; 
  companyName.className = "form-control";

  const companyLabel = document.createElement("label");
  companyLabel.htmlFor = "company_name";
  companyLabel.innerHTML = "Nazwa firmy";
  
  const startDate = document.createElement("input");
  startDate.type = "text";
  startDate.placeholder = "Data rozpoczęcia"; 
  startDate.name = "start_date[]"; 
  startDate.className = "form-control";

  const startDateLabel = document.createElement("label");
  startDateLabel.htmlFor = "start_date";
  startDateLabel.innerHTML = "Data rozpoczęcia";

  const endDate = document.createElement("input");
  endDate.type = "text";
  endDate.placeholder = "Data zakończenia";
  endDate.name = "end_date[]"; 
  endDate.className = "form-control"; 

  const endDateLabel = document.createElement("label");
  endDateLabel.htmlFor = "end_date";
  endDateLabel.innerHTML = "Data zakończenia";

  const flexFirst=document.createElement("div");
  flexFirst.className = "form-floating mb-3";

  const flexSecond=document.createElement("div");
  flexSecond.className = "form-floating mb-3";

  const flexThird=document.createElement("div");
  flexThird.className = "form-floating mb-3";
  
  input.appendChild(flexFirst);
  flexFirst.appendChild(companyName);
  flexFirst.appendChild(companyLabel);
  input.appendChild(flexSecond);
  flexSecond.appendChild(startDate);
  flexSecond.appendChild(startDateLabel);
  input.appendChild(flexThird);
  flexThird.appendChild(endDate);
  flexThird.appendChild(endDateLabel);
 
}

addBtn.addEventListener("click", addInternship);