const form = document.querySelector('.contact-form');

//function when send form
form.onsubmit=function(e){
  //prevent submitting form
  e.preventDefault();
  //xhr request
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'mail.php', true);
  xhr.onload=function(){
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        if(data === 'success'){
          document.querySelector('.msgSuccess').textContent = 'I recieved your message';
          document.querySelector('.msgFailed').parentElement.classList.add('d-none')
          document.querySelector('.name').value = '';
          document.querySelector('.email').value = '';
          document.querySelector('.subj').value = '';
          document.querySelector('.msg').value = '';
          document.querySelector('.msgSuccess').parentElement.classList.remove('d-none')
        }else{
          document.querySelector('.msgFailed').textContent = data;
          document.querySelector('.msgSuccess').parentElement.classList.add('d-none')
          document.querySelector('.msgFailed').parentElement.classList.remove('d-none')
        }
      }
    }
  }
  const FormSend = new FormData(form);
  xhr.send(FormSend);
}

//close alert div on click
document.querySelector('.closErrs').onclick=function(){
  this.parentElement.classList.add('d-none');
}
document.querySelector('.closSucc').onclick=function(){
  this.parentElement.classList.add('d-none');
}