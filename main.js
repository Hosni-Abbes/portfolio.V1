let toTopBtn   = document.querySelector('.totop-btn');

//loading page script
setTimeout(function(){
  document.body.style.overflow = 'scroll';
  document.querySelector('.lay').style.display = 'block';
  document.querySelector('.cont').style.display = 'block';
  document.querySelector('.loader_container').style.display = 'none';
},8000)

//to  top btn events
toTopBtn.onclick=function(){
  window.scrollTo(0, 0);
}

//window on scroll functions
window.onscroll=function(){
  this.pageYOffset >= 500 ? toTopBtn.style.display = 'block' : toTopBtn.style.display = 'none';
}


//type writer function
class TypeWriter {
  constructor(el,words, wait=1000){
    this.el = el;
    this.words = words;
    this.wait = wait;
    this.txt = '';
    this.isDeleting = false;
    this.cur = 0;
    this.type();
  }
  type(){
    //use % to get word index in array words
    const curIndx = this.cur % this.words.length;
    //get word from arry
    const curWord = this.words[curIndx];
    //use isDeleting to show the text
    if(!this.isDeleting){
      this.txt = curWord.substring(0, this.txt.length+1);
    }else{
      this.txt = curWord.substring(0, this.txt.length-1);
    } 
    //output the text
    this.el.innerHTML = this.txt;

    //init type speed 
    let typeSpeed = 200;
    //when deleting set typeSpeed to 100
    if(this.isDeleting){
      typeSpeed = 100;
    }

    //if word is completed
    if(!this.isDeleting && this.txt === curWord){
      this.isDeleting = true; //set isDeleting to true
      typeSpeed = this.wait; //wait before start deleting
    }else if(this.isDeleting && this.txt === ''){ //start the new word
      this.isDeleting = false; //set isDeleting to false
      this.cur++  //go to next word in array
      typeSpeed = this.wait/2 //wait before start typing
    }
    setTimeout(()=>this.type(), typeSpeed);
  }
}

//init dom
document.addEventListener('DOMContentLoaded', init);
function init(){
  const el = document.querySelector('.hello .title');
  const words = ['Full Stack Web Developer', 'Web Designer', 'Youtube Content Creator'];
  const wait = 1000;
  new TypeWriter(el, words, wait)
}


//show more skills 
document.querySelector('.skills-more').onclick=function(){
  document.querySelector('.show-more-skill').classList.toggle('d-none');
  if(document.querySelector('.show-more-skill').classList.contains('d-none')){
    this.textContent ='Show More...';
  }else{
    this.textContent ='Show Less...';
  }
}
//show more cert 
document.querySelector('.cert-more').onclick=function(){
  document.querySelector('.show-more-cert').classList.toggle('d-none');
  if(document.querySelector('.show-more-cert').classList.contains('d-none')){
    this.textContent ='Show More...';
  }else{
    this.textContent ='Show Less...';
  }
}

