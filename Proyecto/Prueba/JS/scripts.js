(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded', function(){
    
//    var tr= document.querySelectorAll('tr')[0];
//    console.log(tr.firstChild.nodeValue);
//    for(var i=0; i<tr.length; i++){
//        console.log(tr[i].firstChild.nodeValue);
//    }
      
      //si funciona seleccionar el primer TD de las TR
      /*
      let tr= document.getElementsByTagName('tr');
      
      for( var i=1; i<2; i++){
          let td=tr[i].getElementsByTagName('td')[0];
          let id=tr[i].getElementsByTagName('td')[0].innerHTML;
          td.setAttribute('id',`${id}`);
      }
      */
      
      //Multiplicacion Archivos por Puntos. Subtotal. PAD. TotalSubtotal. TotalPAD
      let tr= document.getElementsByTagName('tr');
      let totalsub=0;
      let auxtotalpad=0;
      var num=0;
      for( var i=1; i<8; i++){
          if(i==7){
              var totalsubtotal= tr[i].getElementsByTagName('td')[1];
              var totalpad= tr[i].getElementsByTagName('td')[2];
              totalsubtotal.innerHTML= totalsub;
              totalpad.innerHTML= auxtotalpad;
          }
          else{
              let puntos=tr[i].getElementsByTagName('td')[3].innerHTML;
              let numarchivos=tr[i].getElementsByTagName('td')[2].innerHTML;
              let subtotal=tr[i].getElementsByTagName('td')[4];
              let pad=tr[i].getElementsByTagName('td')[5];
              subtotal.innerHTML=Number(puntos) * Number(numarchivos);
              //console.log(Number(puntos) * Number(numarchivos));
              num= Number(subtotal.innerHTML)  * (0.15);
              pad.innerHTML= num.toFixed(3);
              //console.log(Number(subtotal.innerHTML) * (0.15));
              totalsub += Number(subtotal.innerHTML);
              auxtotalpad += Number(pad.innerHTML);
              //console.log(totalsub,auxtotalpad);
          }
      }
      
       //Multiplicacion Archivos por Puntos. Subtotal. CDD. TotalSubtotal. TotalCDD
      let totalsubcdd=0;
      let auxtotalcdd=0;
      var num=0;
      for( var i=10; i<80; i++){
          if(tr[i].getElementsByTagName('td')[0] !== undefined && tr[i].getElementsByTagName('td')[3] !== undefined){
             let puntos=tr[i].getElementsByTagName('td')[3].innerHTML;
              let numarchivos=tr[i].getElementsByTagName('td')[2].innerHTML;
              let subtotal=tr[i].getElementsByTagName('td')[4];
              let cdd=tr[i].getElementsByTagName('td')[5];
              subtotal.innerHTML=Number(puntos) * Number(numarchivos);
              //console.log(Number(puntos) * Number(numarchivos));
              num= Number(subtotal.innerHTML)  * (0.6);
              cdd.innerHTML= num.toFixed(3);
              //console.log(Number(subtotal.innerHTML) * (0.15));
              totalsubcdd += Number(subtotal.innerHTML);
              auxtotalcdd += Number(cdd.innerHTML);
              //console.log(totalsub,auxtotalcdd);
          }
          if(tr[i].getElementsByTagName('td')[0] !== undefined){
              if(tr[i].getElementsByTagName('td')[0].innerHTML == 'TOTAL'){
                  var totalsubtotalcdd= tr[i].getElementsByTagName('td')[1];
                  var totalcdd= tr[i].getElementsByTagName('td')[2];
                  totalsubtotalcdd.innerHTML= totalsubcdd;
                  totalcdd.innerHTML= auxtotalcdd;
                  console.log(totalsubcdd,auxtotalcdd);
                  //console.log('VALOR DE I TR', i);
              }
          }
              
      }
      
      
       //Multiplicacion Archivos por Puntos. Subtotal. DD. TotalSubtotal. TotalDD
      let totalsubdd=0;
      let auxtotaldd=0;
      var num=0;
      for( var i=81; i<169; i++){
          if(tr[i].getElementsByTagName('td')[0] !== undefined && tr[i].getElementsByTagName('td')[3] !== undefined){
             let puntos=tr[i].getElementsByTagName('td')[3].innerHTML;
              let numarchivos=tr[i].getElementsByTagName('td')[2].innerHTML;
              let subtotal=tr[i].getElementsByTagName('td')[4];
              let dd=tr[i].getElementsByTagName('td')[5];
              subtotal.innerHTML=Number(puntos) * Number(numarchivos);
              //console.log(Number(puntos) * Number(numarchivos));
              num= Number(subtotal.innerHTML)  * (0.25);
              dd.innerHTML= num.toFixed(3);
              //console.log(Number(subtotal.innerHTML) * (0.15));
              totalsubdd += Number(subtotal.innerHTML);
              auxtotaldd += Number(dd.innerHTML);
              //console.log(totalsub,auxtotalcdd);
              //console.log('VALOR DE I TR', i);
          }
          if(tr[i].getElementsByTagName('td')[0] !== undefined){
              if(tr[i].getElementsByTagName('td')[0].innerHTML == 'TOTAL'){
                  var totalsubtotaldd= tr[i].getElementsByTagName('td')[1];
                  var totaldd= tr[i].getElementsByTagName('td')[2];
                  totalsubtotaldd.innerHTML= totalsubdd;
                  totaldd.innerHTML= auxtotaldd;
                  console.log(totalsubdd,auxtotaldd);
                  //console.log('VALOR DE I TR', i);
              }
          }
              
      }
      
      
      /*
      for( var i=0; i<tr.length; i++){
          if(tr[i].getElementsByTagName('td')[0] === undefined){
              console.log("NOLOHAGO")
          }
          else{
              console.log(tr[i].getElementsByTagName('td')[0]);
          }
            
          
      }
      */
      
    
    
  });
  
})();