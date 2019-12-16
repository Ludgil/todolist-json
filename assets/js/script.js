let doneButton=document.getElementById("done");
doneButton.disabled=true;
document.querySelectorAll('.check-done').forEach(item => {
    item.addEventListener('change', ()=> {
        if(item.checked){
            doneButton.disabled=false;
        }else{
            doneButton.disabled=true;
        }    
    });
  });


