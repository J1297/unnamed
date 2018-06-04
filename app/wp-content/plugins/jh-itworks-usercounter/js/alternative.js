        /*
         $here = <<<HERE
                 
                 <script>
                    function re_init(btn){
                 
                        let counterWrapper = document.querySelector('#counter-wrapper');
                        if(!(counterWrapper instanceof HTMLElement)){
                            counterWrapper = document.createElement('div');
                            counterWrapper.id = 'counter-wrapper';
                            btn.parentElement.append(counterWrapper);
                        }
                        counterWrapper.innerHTML = '$current_views';
                                let isClicked = btn.classList.contains('clicked');
                                if(isClicked){
                                    btn.innerText = 'Hide visitors';
                                }else{
                                    btn.innerText = 'Show visitors';
                                 }
                                    counterWrapper.hidden = !isClicked;
                                 btn.classList.toggle('clicked');
                 
                 }  
                    (function(){
                        let btn = document.querySelector('button[name="hiddenB"]');
                 re_init(btn);
                        if (btn instanceof HTMLElement){
                            btn.addEventListener('click', (ev) => {
                                ev.preventDefault();
                 re_init(btn)
                 
                 
   });
                 }
   })();
                 
                 </script>
                 
HERE;
         echo $here;
 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


